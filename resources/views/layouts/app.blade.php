<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Klinik Sehat') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clinic: {
                            50: '#effdfc',
                            100: '#d9f8f5',
                            200: '#b8f0eb',
                            300: '#82e3dc',
                            400: '#45cec7',
                            500: '#20b8b2',
                            600: '#159590',
                            700: '#147874',
                            800: '#155f5d',
                            900: '#164f4d',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-50 text-slate-800">

    <div id="app">

        @auth
            <nav class="bg-white border-b border-slate-200 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">

                        {{-- Logo --}}
                        <div class="flex items-center">
                            <a href="{{ url('/') }}"
                                class="flex items-center gap-3">

                                <div class="w-10 h-10 bg-clinic-500 rounded-xl flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-white"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>

                                <div>
                                    <h1 class="font-bold text-slate-800">
                                        Klinik Sehat
                                    </h1>
                                    <p class="text-xs text-slate-400">
                                        Pelayanan Kesehatan Terpercaya
                                    </p>
                                </div>
                            </a>
                        </div>

                        {{-- Menu --}}
                        <div class="flex items-center gap-2">

                            <a href="/pasien"
                                class="px-4 py-2 rounded-lg text-sm font-medium
                                text-slate-600 hover:bg-clinic-50 hover:text-clinic-600 transition">
                                Data Pasien
                            </a>

                            <a href="/daftar"
                                class="px-4 py-2 rounded-lg text-sm font-medium
                                text-slate-600 hover:bg-clinic-50 hover:text-clinic-600 transition">
                                Pendaftaran
                            </a>

                            {{-- User --}}
                            <div class="relative group ml-3">

                                <button
                                    class="flex items-center gap-2 px-3 py-2 rounded-lg
                                    hover:bg-slate-50 transition">

                                    <div class="w-9 h-9 rounded-full bg-clinic-100
                                        flex items-center justify-center">

                                        <span class="text-sm font-bold text-clinic-600">
                                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                        </span>

                                    </div>

                                    <div class="hidden sm:block text-left">
                                        <p class="text-sm font-semibold">
                                            {{ Auth::user()->name }}
                                        </p>

                                        <p class="text-xs text-slate-400">
                                            Pasien
                                        </p>
                                    </div>

                                    <svg class="w-4 h-4 text-slate-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                {{-- Dropdown --}}
                                <div
                                    class="hidden group-hover:block absolute right-0 top-full
                                    mt-1 w-48 bg-white rounded-xl shadow-lg
                                    border border-slate-100 py-2 z-50">

                                    <a href="/pasien"
                                        class="block px-4 py-2 text-sm text-slate-600
                                        hover:bg-slate-50">
                                        Data Pasien
                                    </a>

                                    <div class="border-t border-slate-100 my-2"></div>

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        class="block px-4 py-2 text-sm text-red-500
                                        hover:bg-red-50">
                                        Keluar
                                    </a>

                                    <form id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        @endauth


        <main>

            @if (session()->has('pesan'))
                <div class="max-w-7xl mx-auto px-4 mt-5">
                    <div class="bg-blue-50 border border-blue-200 text-blue-700
                        px-4 py-3 rounded-xl">
                        {{ session('pesan') }}
                    </div>
                </div>
            @endif

            @yield('content')

        </main>

    </div>

</body>

</html>
