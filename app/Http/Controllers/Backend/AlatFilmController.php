<?php

namespace App\Http\Controllers\Backend;

use App\Models\AlatFilm;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlatFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $categories = Categories::find($id);
        $post = AlatFilm::where('categories_id', $categories->id)->get();
        return view('backend.FilmTools.index', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $categories = Categories::find($id);
        return view('backend.FilmTools.create', [
            'categories' => $categories,
        ]);
    }

    public function publish($id)
    {
        $postingan = AlatFilm::find($id);
        if (!$postingan) {
            return redirect()
                ->back()
                ->with('error', 'Postingan tidak ditemukan.');
        }
        $postingan->status = 1;
        $postingan->save();
        return redirect()
            ->back()
            ->with('success', 'Data berhasil dipublish kembali.');
    }

    public function draft($id)
    {
        $postingan = AlatFilm::find($id);
        if (!$postingan) {
            return redirect()
                ->back()
                ->with('error', 'Postingan tidak ditemukan.');
        }
        $postingan->status = 2;
        $postingan->save();
        return redirect()
            ->back()
            ->with('success', 'Data berhasil disematkan.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'harga' => 'required|numeric',
            'desc' => 'required|string',
            'fields.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePaths = [];
        foreach ($request->file('fields') as $index => $file) {
            $path = $file->store('images', 'public');
            $imagePaths['img-' . ($index + 1)] = $path;
        }

        $alatFilm = new AlatFilm([
            'img-1' => $imagePaths['img-1'] ?? null,
            'img-2' => $imagePaths['img-2'] ?? null,
            'img-3' => $imagePaths['img-3'] ?? null,
            'img-4' => $imagePaths['img-4'] ?? null,
            'img-5' => $imagePaths['img-5'] ?? null,
            'nama' => $request->input('name'),
            'harga' => $request->input('harga'),
            'categories_id' => $id,
            'desc' => $request->input('desc'),
        ]);

        $alatFilm->save();

        return redirect('/postingan/' . $id)->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alatFilm = AlatFilm::findOrFail($id);
        return view('backend.FilmTools.edit', [
            'alatFilm' => $alatFilm,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'harga' => 'required|numeric',
            'desc' => 'required|string',
        ]);

        $alatFilm = AlatFilm::find($id);

        $alatFilm->nama = $request->input('name');
        $alatFilm->harga = $request->input('harga');
        $alatFilm->desc = $request->input('desc');

        if ($request->hasFile('fields-1')) {
            Storage::delete('public/images/' . $alatFilm->{'img-1'});
            $path = $request->file('fields-1')->store('images', 'public');
            $alatFilm->{'img-1'} = $path;
        }

        if ($request->hasFile('fields-2')) {
            Storage::delete('public/images/' . $alatFilm->{'img-2'});
            $path = $request->file('fields-2')->store('images', 'public');
            $alatFilm->{'img-2'} = $path;
        }

        if ($request->hasFile('fields-3')) {
            Storage::delete('public/images/' . $alatFilm->{'img-3'});
            $path = $request->file('fields-3')->store('images', 'public');
            $alatFilm->{'img-3'} = $path;
        }

        if ($request->hasFile('fields-4')) {
            Storage::delete('public/images/' . $alatFilm->{'img-4'});
            $path = $request->file('fields-4')->store('images', 'public');
            $alatFilm->{'img-4'} = $path;
        }

        if ($request->hasFile('fields-5')) {
            Storage::delete('public/images/' . $alatFilm->{'img-5'});
            $path = $request->file('fields-5')->store('images', 'public');
            $alatFilm->{'img-5'} = $path;
        }

        $alatFilm->save();

        return redirect()
            ->back()
            ->with('success', 'Data berhasil disimpan.');
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
        $alatFilm = AlatFilm::findOrFail($id);
        $this->deleteImagesFromStorage($alatFilm);
        $alatFilm->delete();
        return redirect()
            ->back()
            ->with('success', 'Data berhasil dihapus.');
    }
}
