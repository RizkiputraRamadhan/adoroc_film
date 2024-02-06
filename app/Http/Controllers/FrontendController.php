<?php

namespace App\Http\Controllers;

use App\Models\AlatFilm;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $randomPosts = AlatFilm::inRandomOrder()
            ->limit(10)
            ->get();
        $datas = AlatFilm::inRandomOrder()->get();
        $category = Categories::orderBy('id', 'desc')->get();
        return view('frontend.home', [
            'randomPost' => $randomPosts,
            'datas' => $datas,
            'category' => $category,
        ]);
    }

    public function login()
    {
        if(auth()->user()) {
            return redirect('/categories');
        }else{

            $category = Categories::orderBy('id', 'desc')->get();
            return view('frontend.login', [
                'category' => $category,
            ]);
        }
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/categories');
        }

        return redirect()
            ->back()
            ->with('error', 'Email atau password salah.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function show(string $id)
    {
        $showPost = AlatFilm::find($id);
        if(!$showPost) {
            abort(404);
        }
        $datas = AlatFilm::inRandomOrder()->get();
        $category = Categories::orderBy('id', 'desc')->get();
        return view('frontend.detail', [
            'showPost' => $showPost,
            'datas' => $datas,
            'category' => $category,
        ]);
    }


}
