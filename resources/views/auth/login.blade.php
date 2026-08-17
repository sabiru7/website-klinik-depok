@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-clinic-50 via-white to-slate-50
    flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-md">

        {{-- Logo --}}
        <div class="text-center mb-8">

            <div class="inline-flex items-center justify-center
                w-16 h-16 bg-clinic-500 rounded-2xl shadow-lg shadow-clinic-500/30 mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-9 h-9 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />

                </svg>

            </div>

            <h1 class="text-2xl font-bold text-slate-800">
                Klinik Sehat
            </h1>

            <p class="text-slate-500 mt-1">
                Selamat datang kembali
            </p>

        </div>


        {{-- Login Card --}}
        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/60
            border border-slate-100 p-8">

            <div class="mb-6">
                <h2 class="text-xl font-bold text-slate-800">
                    Masuk ke Akun
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Silakan masuk untuk mengakses layanan klinik
                </p>
            </div>


            {{-- Error --}}
            @if ($errors->any())
                <div class="mb-5 p-4 rounded-xl bg-red-50 border border-red-100">

                    <div class="flex gap-3">

                        <svg class="w-5 h-5 text-red-500 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                        </svg>

                        <div>
                            @foreach ($errors->all() as $error)
                                <p class="text-sm text-red-600">
                                    {{ $error }}
                                </p>
                            @endforeach
                        </div>

                    </div>

                </div>
            @endif


            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-5">

                    <label for="email"
                        class="block text-sm font-semibold text-slate-700 mb-2">
                        Email
                    </label>

                    <div class="relative">

                        <div class="absolute inset-y-0 left-0 pl-3
                            flex items-center pointer-events-none">

                            <svg class="w-5 h-5 text-slate-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />

                            </svg>

                        </div>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            placeholder="nama@email.com"
                            class="w-full pl-10 pr-4 py-3 rounded-xl
                            border border-slate-200
                            focus:border-clinic-500
                            focus:ring-4 focus:ring-clinic-500/10
                            outline-none transition
                            @error('email') border-red-400 @enderror">

                    </div>

                </div>


                {{-- Password --}}
                <div class="mb-4">

                    <div class="flex justify-between items-center mb-2">

                        <label for="password"
                            class="text-sm font-semibold text-slate-700">
                            Password
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-xs font-medium text-clinic-600
                                hover:text-clinic-700">
                                Lupa password?
                            </a>
                        @endif

                    </div>

                    <div class="relative">

                        <div class="absolute inset-y-0 left-0 pl-3
                            flex items-center pointer-events-none">

                            <svg class="w-5 h-5 text-slate-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />

                            </svg>

                        </div>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                            class="w-full pl-10 pr-4 py-3 rounded-xl
                            border border-slate-200
                            focus:border-clinic-500
                            focus:ring-4 focus:ring-clinic-500/10
                            outline-none transition
                            @error('password') border-red-400 @enderror">

                    </div>

                </div>


                {{-- Remember --}}
                <div class="flex items-center mb-6">

                    <input
                        id="remember"
                        type="checkbox"
                        name="remember"
                        class="w-4 h-4 rounded border-slate-300
                        text-clinic-500 focus:ring-clinic-500">

                    <label for="remember"
                        class="ml-2 text-sm text-slate-500">
                        Ingat saya
                    </label>

                </div>


                {{-- Button --}}
                <button
                    type="submit"
                    class="w-full py-3 px-4 rounded-xl
                    bg-clinic-500 hover:bg-clinic-600
                    text-white font-semibold
                    shadow-lg shadow-clinic-500/20
                    transition duration-200
                    focus:outline-none focus:ring-4
                    focus:ring-clinic-500/20">

                    Masuk

                </button>

            </form>


            {{-- Register --}}
            @if (Route::has('register'))
                <div class="mt-6 pt-6 border-t border-slate-100 text-center">

                    <p class="text-sm text-slate-500">
                        Belum punya akun?

                        <a href="{{ route('register') }}"
                            class="font-semibold text-clinic-600
                            hover:text-clinic-700">

                            Daftar sekarang

                        </a>
                    </p>

                </div>
            @endif

        </div>


        <p class="text-center text-xs text-slate-400 mt-6">
            © {{ date('Y') }} Klinik Sehat. Semua hak dilindungi.
        </p>

    </div>

</div>

@endsection
