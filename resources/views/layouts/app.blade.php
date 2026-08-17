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

<body class="bg-slate-50 text-slate-800 min-h-screen">

    <div id="app">

        {{-- =========================
            MAIN CONTENT
        ========================== --}}
        <main>

            {{-- Session Message --}}
            @if (session()->has('pesan'))

                <div class="max-w-7xl mx-auto px-4 mt-5">

                    <div class="bg-blue-50 border border-blue-200
                        text-blue-700 px-4 py-3 rounded-xl text-sm">

                        {{ session('pesan') }}

                    </div>

                </div>

            @endif


            {{-- Success --}}
            @if (session('status'))

                <div class="max-w-7xl mx-auto px-4 mt-5">

                    <div class="bg-green-50 border border-green-200
                        text-green-700 px-4 py-3 rounded-xl text-sm">

                        {{ session('status') }}

                    </div>

                </div>

            @endif


            @yield('content')

        </main>


        {{-- =========================
            FOOTER
        ========================== --}}
        <footer class="border-t border-slate-200 bg-white mt-12">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="py-6 text-center">

                    <div class="flex justify-center items-center gap-2 mb-2">

                        <div class="w-7 h-7 bg-clinic-500 rounded-lg
                            flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 text-white"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />

                            </svg>

                        </div>

                        <span class="font-semibold text-slate-700">
                            Klinik Sehat
                        </span>

                    </div>

                    <p class="text-xs text-slate-400">
                        © {{ date('Y') }} Klinik Sehat.
                        Pelayanan Kesehatan Terpercaya.
                    </p>

                </div>

            </div>

        </footer>

    </div>

</body>

</html>
