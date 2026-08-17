@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-md">

        {{-- Card --}}
        <div class="bg-white rounded-2xl shadow-sm
            border border-slate-200 p-8">

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
                    Lupa Password?
                </h2>

                <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                    Masukkan email yang terdaftar pada akun Anda.
                    Kami akan mengirimkan link untuk membuat password baru.
                </p>

            </div>


            {{-- Success Message --}}
            @if (session('status'))

                <div class="mb-5 bg-green-50 border border-green-200
                    text-green-700 px-4 py-3 rounded-xl text-sm">

                    {{ session('status') }}

                </div>

            @endif


            {{-- Error Message --}}
            @if ($errors->any())

                <div class="mb-5 bg-red-50 border border-red-200
                    text-red-600 px-4 py-3 rounded-xl text-sm">

                    <ul class="list-disc list-inside space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- Form --}}
            <form method="POST" action="{{ route('password.email') }}">

                @csrf


                {{-- Email --}}
                <div>

                    <label for="email"
                        class="block text-sm font-medium
                        text-slate-700 mb-2">

                        Email

                    </label>


                    <div class="relative">

                        {{-- Email Icon --}}
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
                            value="{{ old('email') }}"
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


                    {{-- Email Error --}}
                    @error('email')

                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- Submit --}}
                <button
                    type="submit"

                    class="w-full mt-6 py-3 px-4
                    bg-clinic-500 hover:bg-clinic-600
                    text-white font-semibold
                    rounded-xl shadow-sm
                    hover:shadow-md
                    transition duration-200">

                    Kirim Link Reset Password

                </button>

            </form>


            {{-- Back Login --}}
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


        {{-- Footer Text --}}
        <p class="text-center text-xs text-slate-400 mt-6">

            © {{ date('Y') }} Klinik Sehat.
            Pelayanan Kesehatan Terpercaya.

        </p>

    </div>

</div>

@endsection
