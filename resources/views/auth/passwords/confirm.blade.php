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
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-5a2 2 0 00-2-2H6a2 2 0 00-2 2v5a2 2 0 002 2zm10-9V7a4 4 0 00-8 0v3h8z" />

                    </svg>

                </div>

            </div>


            {{-- Heading --}}
            <div class="text-center mb-8">

                <h2 class="text-2xl font-bold text-slate-800">
                    Konfirmasi Password
                </h2>

                <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                    Silakan konfirmasi password Anda sebelum melanjutkan.
                </p>

            </div>


            {{-- Error --}}
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
            <form method="POST" action="{{ route('password.confirm') }}">

                @csrf


                {{-- Password --}}
                <div>

                    <label for="password"
                        class="block text-sm font-medium
                        text-slate-700 mb-2">

                        Password

                    </label>


                    <div class="relative">

                        {{-- Lock Icon --}}
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
                            autocomplete="current-password"
                            autofocus
                            placeholder="Masukkan password Anda"

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


                    {{-- Password Error --}}
                    @error('password')

                        <p class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- Button --}}
                <button
                    type="submit"

                    class="w-full mt-6 py-3 px-4
                    bg-clinic-500 hover:bg-clinic-600
                    text-white font-semibold
                    rounded-xl shadow-sm
                    hover:shadow-md
                    transition duration-200">

                    Konfirmasi Password

                </button>

            </form>


            {{-- Forgot Password --}}
            @if (Route::has('password.request'))

                <div class="text-center mt-6">

                    <a href="{{ route('password.request') }}"
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
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />

                        </svg>

                        Lupa Password?

                    </a>

                </div>

            @endif

        </div>


        {{-- Footer --}}
        <p class="text-center text-xs text-slate-400 mt-6">

            © {{ date('Y') }} Klinik Sehat.
            Pelayanan Kesehatan Terpercaya.

        </p>

    </div>

</div>

@endsection
