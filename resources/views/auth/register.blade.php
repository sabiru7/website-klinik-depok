@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-clinic-50 via-white to-slate-50
    flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-md">

        {{-- Logo --}}
        <div class="text-center mb-7">

            <div class="inline-flex items-center justify-center
                w-14 h-14 bg-clinic-500 rounded-2xl
                shadow-lg shadow-clinic-500/30 mb-4">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 text-white"
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

            <p class="text-sm text-slate-500 mt-1">
                Buat akun untuk menggunakan layanan klinik
            </p>

        </div>


        {{-- Register Card --}}
        <div class="bg-white rounded-2xl shadow-xl
            shadow-slate-200/60 border border-slate-100 p-8">

            <div class="mb-6">

                <h2 class="text-xl font-bold text-slate-800">
                    Buat Akun Baru
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Lengkapi data diri Anda di bawah ini
                </p>

            </div>


            @if ($errors->any())

                <div class="mb-5 p-4 rounded-xl
                    bg-red-50 border border-red-100">

                    @foreach ($errors->all() as $error)

                        <p class="text-sm text-red-600">
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            <form method="POST" action="{{ route('register') }}">

                @csrf


                {{-- Nama --}}
                <div class="mb-4">

                    <label for="name"
                        class="block text-sm font-semibold text-slate-700 mb-2">

                        Nama Lengkap

                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        placeholder="Masukkan nama lengkap"
                        class="w-full px-4 py-3 rounded-xl
                        border border-slate-200
                        focus:border-clinic-500
                        focus:ring-4 focus:ring-clinic-500/10
                        outline-none transition">

                </div>


                {{-- Email --}}
                <div class="mb-4">

                    <label for="email"
                        class="block text-sm font-semibold text-slate-700 mb-2">

                        Email

                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="nama@email.com"
                        class="w-full px-4 py-3 rounded-xl
                        border border-slate-200
                        focus:border-clinic-500
                        focus:ring-4 focus:ring-clinic-500/10
                        outline-none transition">

                </div>


                {{-- Password --}}
                <div class="mb-4">

                    <label for="password"
                        class="block text-sm font-semibold text-slate-700 mb-2">

                        Password

                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        placeholder="Minimal 8 karakter"
                        class="w-full px-4 py-3 rounded-xl
                        border border-slate-200
                        focus:border-clinic-500
                        focus:ring-4 focus:ring-clinic-500/10
                        outline-none transition">

                </div>


                {{-- Confirm Password --}}
                <div class="mb-6">

                    <label for="password-confirm"
                        class="block text-sm font-semibold text-slate-700 mb-2">

                        Konfirmasi Password

                    </label>

                    <input
                        id="password-confirm"
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="Ulangi password"
                        class="w-full px-4 py-3 rounded-xl
                        border border-slate-200
                        focus:border-clinic-500
                        focus:ring-4 focus:ring-clinic-500/10
                        outline-none transition">

                </div>


                {{-- Button --}}
                <button
                    type="submit"
                    class="w-full py-3 rounded-xl
                    bg-clinic-500 hover:bg-clinic-600
                    text-white font-semibold
                    shadow-lg shadow-clinic-500/20
                    transition duration-200
                    focus:outline-none focus:ring-4
                    focus:ring-clinic-500/20">

                    Daftar Sekarang

                </button>

            </form>


            {{-- Login --}}
            <div class="mt-6 pt-6 border-t border-slate-100 text-center">

                <p class="text-sm text-slate-500">

                    Sudah punya akun?

                    <a href="{{ route('login') }}"
                        class="font-semibold text-clinic-600
                        hover:text-clinic-700">

                        Masuk di sini

                    </a>

                </p>

            </div>

        </div>


        <p class="text-center text-xs text-slate-400 mt-5">
            Data Anda akan digunakan untuk keperluan pelayanan klinik.
        </p>

    </div>

</div>

@endsection
