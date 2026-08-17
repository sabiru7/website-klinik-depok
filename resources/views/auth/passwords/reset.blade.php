@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-md">

        {{-- Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">

            {{-- Logo --}}
            <div class="flex justify-center mb-6">

                <div class="w-14 h-14 bg-clinic-500 rounded-2xl
                    flex items-center justify-center shadow-sm">

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

            </div>


            {{-- Heading --}}
            <div class="text-center mb-8">

                <h2 class="text-2xl font-bold text-slate-800">
                    Reset Password
                </h2>

                <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                    Silakan buat password baru untuk akun Klinik Sehat Anda.
                </p>

            </div>


            {{-- Error --}}
            @if ($errors->any())

                <div class="mb-5 bg-red-50 border border-red-200
                    text-red-600 px-4 py-3 rounded-xl text-sm">

                    <ul class="list-disc list-inside space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- Form --}}
            <form method="POST" action="{{ route('password.update') }}">

                @csrf

                <input type="hidden" name="token" value="{{ $token }}">


                {{-- Email --}}
                <div class="mb-5">

                    <label for="email"
                        class="block text-sm font-medium
                        text-slate-700 mb-2">

                        Email

                    </label>


                    <div class="relative">

                        <div class="absolute inset-y-0 left-0 pl-3
                            flex items-center pointer-events-none">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-slate-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />

                            </svg>

                        </div>


                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ $email ?? old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="Masukkan email Anda"

                            class="w-full pl-10 pr-4 py-3
                            rounded-xl border border-slate-200
                            bg-slate-50 text-slate-800
                            placeholder-slate-400
                            focus:bg-white
                            focus:border-clinic-400
                            focus:ring-2
                            focus:ring-clinic-100
                            outline-none transition

                            @error('email')
                                border-red-300
                                focus:border-red-400
                                focus:ring-red-100
                            @enderror"
                        >

                    </div>


                    @error('email')

                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- Password --}}
                <div class="mb-5">

                    <label for="password"
                        class="block text-sm font-medium
                        text-slate-700 mb-2">

                        Password Baru

                    </label>


                    <div class="relative">

                        <div class="absolute inset-y-0 left-0 pl-3
                            flex items-center pointer-events-none">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-slate-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-5a2 2 0 00-2-2H6a2 2 0 00-2 2v5a2 2 0 002 2zm10-9V7a4 4 0 00-8 0v3h8z" />

                            </svg>

                        </div>


                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Masukkan password baru"

                            class="w-full pl-10 pr-4 py-3
                            rounded-xl border border-slate-200
                            bg-slate-50 text-slate-800
                            placeholder-slate-400
                            focus:bg-white
                            focus:border-clinic-400
                            focus:ring-2
                            focus:ring-clinic-100
                            outline-none transition

                            @error('password')
                                border-red-300
                                focus:border-red-400
                                focus:ring-red-100
                            @enderror"
                        >

                    </div>


                    @error('password')

                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- Confirm Password --}}
                <div class="mb-6">

                    <label for="password-confirm"
                        class="block text-sm font-medium
                        text-slate-700 mb-2">

                        Konfirmasi Password

                    </label>


                    <div class="relative">

                        <div class="absolute inset-y-0 left-0 pl-3
                            flex items-center pointer-events-none">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-slate-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.053-.382-3.016z" />

                            </svg>

                        </div>


                        <input
                            id="password-confirm"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi password baru"

                            class="w-full pl-10 pr-4 py-3
                            rounded-xl border border-slate-200
                            bg-slate-50 text-slate-800
                            placeholder-slate-400
                            focus:bg-white
                            focus:border-clinic-400
                            focus:ring-2
                            focus:ring-clinic-100
                            outline-none transition"
                        >

                    </div>

                </div>


                {{-- Button --}}
                <button
                    type="submit"

                    class="w-full py-3 px-4
                    bg-clinic-500 hover:bg-clinic-600
                    text-white font-semibold
                    rounded-xl shadow-sm
                    hover:shadow-md
                    transition duration-200">

                    Reset Password

                </button>

            </form>


            {{-- Back to Login --}}
            <div class="text-center mt-6">

                <a href="{{ route('login') }}"
                    class="inline-flex items-center gap-2
                    text-sm font-medium text-clinic-600
                    hover:text-clinic-700 transition">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />

                    </svg>

                    Kembali ke Login

                </a>

            </div>

        </div>


        {{-- Footer --}}
        <p class="text-center text-xs text-slate-400 mt-6">

            © {{ date('Y') }} Klinik Sehat.
            Pelayanan Kesehatan Terpercaya.

        </p>

    </div>

</div>

@endsection
