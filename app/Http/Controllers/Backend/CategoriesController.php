<?php

namespace App\Http\Controllers\Backend;

use App\Models\AlatFilm;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{

    public function index()
    {
        $data = Categories::orderBy('id', 'desc')->get();
        return view('backend.categories.index', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $category = Categories::create([
            'name' => $validatedData['name'],
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'required|string|max:255',
        ]);

        $id = $request->id;
        $category = Categories::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
        }
        $category->update([
            'name' => $validatedData['name'],
        ]);
        return redirect()->back()->with('success', 'Kategori berhasil diubah.');
    }


    public function kofrmDelete(string $id)
    {
        $category = Categories::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Kategori gagal dihapus.');
        }
        $hasPosts = AlatFilm::where('categories_id', $id)->get();

        if ($hasPosts) {
            session()->put('categoryToDelete', $id);
            return redirect()->back()->with('errorFK', 'Ada '. $hasPosts->count() .' postingan di dalam kategori. Apakah Anda yakin ingin menghapus kategori beserta postingannya? ');
        }

    }

    private function deleteImagesFromStorage(AlatFilm $alatFilm)
    {
        foreach (range(1, 5) as $index) {
            $imgKey = 'img-' . $index;
            $imgPath = $alatFilm->$imgKey;

            if ($imgPath) {
                Storage::disk('public')->delete($imgPath);
            }
        }
    }

    public function destroy(string $id)
    {
        $category = Categories::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Kategori gagal dihapus.');
        }
        $alatFilms = AlatFilm::where('categories_id', $id)->get();
        foreach ($alatFilms as $alatFilm) {
            $this->deleteImagesFromStorage($alatFilm);
        }
        AlatFilm::where('categories_id', $id)->delete();
        session()->forget('categoryToDelete');
        $category->delete();
        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');
    }


}
