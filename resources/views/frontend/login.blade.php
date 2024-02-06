@extends('layouts.frontend')
@section('title', 'Login')
@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Login Adoroc Layar
                    Equipment Film!</h1>
                <p class="py-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perferendis doloremque quos eum, aliquid illum, nisi rem vitae nesciunt animi laboriosam id commodi! Architecto omnis dolorem sapiente deserunt quidem debitis?.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" action="/login" method="post">
                    @if (session('error'))
                        <div id="errorMessage" role="alert" class="alert alert-error">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
