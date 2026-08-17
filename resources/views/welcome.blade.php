<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KlinikaCare — Klinik Kesehatan Terpercaya</title>

    <meta
        name="description"
        content="KlinikaCare menyediakan layanan kesehatan profesional untuk Anda dan keluarga."
    >

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        medical: {
                            50: '#f0f7ff',
                            100: '#dbeeff',
                            200: '#b9ddff',
                            300: '#83c5ff',
                            400: '#4da9f5',
                            500: '#2589dc',
                            600: '#1670bd',
                            700: '#155a99',
                            800: '#174b7c',
                            900: '#193f67',
                        },
                        navy: '#102a43',
                    }
                }
            }
        }
    </script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .hero-pattern {
            background-image:
                linear-gradient(rgba(37,137,220,.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(37,137,220,.035) 1px, transparent 1px);
            background-size: 45px 45px;
        }
    </style>
</head>

<body class="bg-white text-slate-800">

<!-- ===================================================== -->
<!-- TOP BAR -->
<!-- ===================================================== -->

<div class="hidden bg-[#102a43] text-white lg:block">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-2 text-xs">
        <div class="flex items-center gap-6">
            <span>📞 Emergency: <strong>119</strong></span>
            <span>✉️ info@klinikacare.id</span>
        </div>

        <div>
            Senin - Minggu · 08.00 - 21.00
        </div>
    </div>
</div>


<!-- ===================================================== -->
<!-- NAVBAR -->
<!-- ===================================================== -->

<header class="sticky top-0 z-50 border-b border-slate-100 bg-white/95 backdrop-blur">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <nav class="flex h-20 items-center justify-between">

            <!-- LOGO -->

            <a href="#beranda" class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-medical-600 text-white shadow-lg shadow-medical-600/20">

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            d="M12 5v14M5 12h14"
                        />
                    </svg>

                </div>

                <div>
                    <div class="text-lg font-extrabold tracking-tight text-[#102a43]">
                        Klinika<span class="text-medical-600">Care</span>
                    </div>

                    <div class="text-[9px] font-semibold uppercase tracking-[.2em] text-slate-400">
                        Healthcare Center
                    </div>
                </div>

            </a>


            <!-- DESKTOP MENU -->

            <div class="hidden items-center gap-8 lg:flex">

                <a
                    href="#beranda"
                    class="text-sm font-semibold text-medical-600"
                >
                    Beranda
                </a>

                <a
                    href="#layanan"
                    class="text-sm font-medium text-slate-600 hover:text-medical-600"
                >
                    Layanan
                </a>

                <a
                    href="#dokter"
                    class="text-sm font-medium text-slate-600 hover:text-medical-600"
                >
                    Dokter
                </a>

                <a
                    href="#tentang"
                    class="text-sm font-medium text-slate-600 hover:text-medical-600"
                >
                    Tentang Kami
                </a>

                <a
                    href="#artikel"
                    class="text-sm font-medium text-slate-600 hover:text-medical-600"
                >
                    Artikel
                </a>

            </div>


            <!-- RIGHT -->

            <div class="hidden items-center gap-3 sm:flex">

                <!-- LOGIN -->

                <a
                    href="/login"
                    class="rounded-lg border border-slate-200 px-5 py-2.5 text-sm font-semibold text-[#102a43] transition hover:border-medical-300 hover:bg-medical-50 hover:text-medical-600"
                >
                    Login
                </a>

                <!-- APPOINTMENT -->

                <a
                    href="#appointment"
                    class="rounded-lg bg-medical-600 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-medical-600/20 transition hover:bg-medical-700"
                >
                    Buat Janji
                </a>

            </div>


            <!-- MOBILE -->

            <button
                class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 lg:hidden"
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>

        </nav>

    </div>

</header>


<!-- ===================================================== -->
<!-- HERO -->
<!-- ===================================================== -->

<section
    id="beranda"
    class="relative overflow-hidden bg-[#f7fbff]"
>

    <div class="absolute inset-0 hero-pattern"></div>

    <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            <!-- LEFT -->

            <div>

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-medical-100 bg-white px-4 py-2 text-xs font-bold text-medical-700 shadow-sm">

                    <span class="flex h-2 w-2 rounded-full bg-green-500"></span>

                    Klinik buka hari ini

                </div>


                <h1 class="max-w-2xl text-4xl font-extrabold leading-tight tracking-tight text-[#102a43] sm:text-5xl lg:text-6xl">

                    Layanan kesehatan
                    <span class="text-medical-600">
                        terpercaya
                    </span>
                    untuk keluarga Anda.

                </h1>


                <p class="mt-6 max-w-xl text-base leading-7 text-slate-500 sm:text-lg">

                    Dapatkan pelayanan kesehatan yang aman, profesional,
                    dan nyaman bersama dokter serta tenaga medis terbaik
                    KlinikaCare.

                </p>


                <!-- BUTTON -->

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="#appointment"
                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-medical-600 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-medical-600/20 hover:bg-medical-700"
                    >

                        Buat Janji Sekarang

                        <svg
                            class="h-4 w-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>

                    </a>


                    <a
                        href="#layanan"
                        class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-7 py-3.5 text-sm font-bold text-[#102a43] hover:border-medical-300 hover:text-medical-600"
                    >
                        Lihat Layanan
                    </a>

                </div>


                <!-- TRUST -->

                <div class="mt-9 flex flex-wrap gap-8">

                    <div>
                        <div class="text-2xl font-extrabold text-[#102a43]">
                            10K+
                        </div>

                        <div class="text-xs text-slate-400">
                            Pasien
                        </div>
                    </div>


                    <div class="h-10 w-px bg-slate-200"></div>


                    <div>
                        <div class="text-2xl font-extrabold text-[#102a43]">
                            25+
                        </div>

                        <div class="text-xs text-slate-400">
                            Dokter
                        </div>
                    </div>


                    <div class="h-10 w-px bg-slate-200"></div>


                    <div>
                        <div class="text-2xl font-extrabold text-[#102a43]">
                            4.9/5
                        </div>

                        <div class="text-xs text-slate-400">
                            Rating Pasien
                        </div>
                    </div>

                </div>

            </div>


            <!-- RIGHT IMAGE -->

            <div class="relative">

                <div class="overflow-hidden rounded-3xl bg-slate-100 shadow-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=1000&q=85"
                        alt="Dokter KlinikaCare"
                        class="h-[520px] w-full object-cover"
                    >

                </div>


                <!-- DOCTOR CARD -->

                <div class="absolute bottom-6 left-5 right-5 rounded-2xl border border-white bg-white p-4 shadow-xl sm:left-8 sm:right-8">

                    <div class="flex items-center justify-between gap-4">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-medical-100">

                                <svg
                                    class="h-5 w-5 text-medical-600"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        d="M20 21a8 8 0 0 0-16 0M12 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"
                                    />
                                </svg>

                            </div>

                            <div>

                                <div class="text-sm font-bold text-[#102a43]">
                                    dr. Andini Pratama
                                </div>

                                <div class="text-xs text-slate-400">
                                    Dokter Umum
                                </div>

                            </div>

                        </div>


                        <span class="rounded-full bg-green-50 px-3 py-1 text-[11px] font-bold text-green-600">
                            Tersedia
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- QUICK SERVICES -->
<!-- ===================================================== -->

<section class="border-b border-slate-100 bg-white">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid divide-y divide-slate-100 sm:grid-cols-2 lg:grid-cols-4 lg:divide-x lg:divide-y-0">

            <div class="flex gap-4 p-7">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-medical-50 text-medical-600">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M12 6v12M6 12h12"/>
                    </svg>

                </div>

                <div>
                    <h3 class="font-bold text-[#102a43]">
                        Konsultasi Dokter
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-slate-400">
                        Konsultasi dengan dokter berpengalaman.
                    </p>
                </div>

            </div>


            <div class="flex gap-4 p-7">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                    🩺
                </div>

                <div>
                    <h3 class="font-bold text-[#102a43]">
                        Medical Check Up
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-slate-400">
                        Pemeriksaan kesehatan menyeluruh.
                    </p>
                </div>

            </div>


            <div class="flex gap-4 p-7">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    💊
                </div>

                <div>
                    <h3 class="font-bold text-[#102a43]">
                        Apotek
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-slate-400">
                        Obat dan kebutuhan kesehatan.
                    </p>
                </div>

            </div>


            <div class="flex gap-4 p-7">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                    🚑
                </div>

                <div>
                    <h3 class="font-bold text-[#102a43]">
                        Layanan Darurat
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-slate-400">
                        Bantuan medis untuk kondisi darurat.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- SERVICES -->
<!-- ===================================================== -->

<section id="layanan" class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="max-w-2xl">

            <div class="text-sm font-bold uppercase tracking-widest text-medical-600">
                Layanan Kami
            </div>

            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-[#102a43] sm:text-4xl">
                Pelayanan lengkap untuk kesehatan Anda
            </h2>

            <p class="mt-4 leading-7 text-slate-500">
                Kami menyediakan berbagai layanan medis dengan fasilitas
                yang nyaman dan tenaga medis profesional.
            </p>

        </div>


        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


            <!-- CARD -->

            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-medical-50 text-2xl">
                    🩺
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Dokter Umum
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Pemeriksaan dan konsultasi berbagai keluhan
                    kesehatan sehari-hari.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>


            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-50 text-2xl">
                    🧪
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Laboratorium
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Pemeriksaan laboratorium dengan hasil yang
                    akurat dan terpercaya.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>


            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-indigo-50 text-2xl">
                    🦷
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Dokter Gigi
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Perawatan gigi dan mulut untuk anak maupun dewasa.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>


            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-sky-50 text-2xl">
                    ❤️
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Kesehatan Jantung
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Pemeriksaan kesehatan jantung dengan tenaga
                    medis profesional.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>


            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-cyan-50 text-2xl">
                    👶
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Kesehatan Anak
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Pemeriksaan dan konsultasi kesehatan anak
                    dengan pendekatan ramah keluarga.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>


            <div class="rounded-2xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-medical-300 hover:shadow-xl">

                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-50 text-2xl">
                    💉
                </div>

                <h3 class="mt-6 text-lg font-bold text-[#102a43]">
                    Vaksinasi
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Berbagai kebutuhan vaksinasi untuk anak,
                    dewasa, dan perjalanan.
                </p>

                <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                    Selengkapnya →
                </a>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- ABOUT -->
<!-- ===================================================== -->

<section id="tentang" class="bg-[#f5f9fc] py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            <div class="relative">

                <img
                    src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1000&q=85"
                    alt="Tim medis KlinikaCare"
                    class="h-[480px] w-full rounded-3xl object-cover shadow-xl"
                >


                <div class="absolute -bottom-7 right-5 rounded-2xl bg-white p-5 shadow-xl sm:right-8">

                    <div class="text-3xl font-extrabold text-medical-600">
                        12+
                    </div>

                    <div class="mt-1 text-xs font-medium text-slate-500">
                        Tahun melayani
                    </div>

                </div>

            </div>


            <div>

                <div class="text-sm font-bold uppercase tracking-widest text-medical-600">
                    Tentang KlinikaCare
                </div>

                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-[#102a43] sm:text-4xl">
                    Kami hadir untuk memberikan pelayanan kesehatan terbaik.
                </h2>

                <p class="mt-5 leading-7 text-slate-500">
                    KlinikaCare adalah klinik kesehatan yang mengutamakan
                    kualitas pelayanan, kenyamanan pasien, dan profesionalisme
                    tenaga medis.
                </p>


                <div class="mt-8 space-y-5">

                    <div class="flex gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-medical-100 font-bold text-medical-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-[#102a43]">
                                Dokter Profesional
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Ditangani oleh tenaga medis yang kompeten
                                dan berpengalaman.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-medical-100 font-bold text-medical-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-[#102a43]">
                                Fasilitas Nyaman
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Lingkungan klinik bersih, nyaman, dan
                                mendukung proses perawatan.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-4">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-medical-100 font-bold text-medical-600">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-[#102a43]">
                                Pelayanan Berorientasi Pasien
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                Kami mendengarkan dan memahami kebutuhan
                                setiap pasien.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- DOCTORS -->
<!-- ===================================================== -->

<section id="dokter" class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">

            <div>

                <div class="text-sm font-bold uppercase tracking-widest text-medical-600">
                    Tim Dokter
                </div>

                <h2 class="mt-3 text-3xl font-extrabold text-[#102a43] sm:text-4xl">
                    Dokter yang siap membantu Anda
                </h2>

            </div>

            <a href="#" class="text-sm font-bold text-medical-600">
                Lihat semua dokter →
            </a>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">


            <!-- DOCTOR -->

            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <div class="relative h-72 bg-slate-100">

                    <img
                        src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=700&q=85"
                        alt="dr. Andini Pratama"
                        class="h-full w-full object-cover"
                    >

                    <span class="absolute bottom-4 left-4 rounded-full bg-white px-3 py-1 text-xs font-bold text-green-600 shadow">
                        ● Tersedia
                    </span>

                </div>

                <div class="p-6">

                    <h3 class="text-lg font-bold text-[#102a43]">
                        dr. Andini Pratama
                    </h3>

                    <p class="mt-1 text-sm text-medical-600">
                        Dokter Umum
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                        <span class="text-sm text-slate-400">
                            ⭐ 4.9
                        </span>

                        <a href="#" class="text-sm font-bold text-medical-600">
                            Profil →
                        </a>

                    </div>

                </div>

            </div>


            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <div class="relative h-72 bg-slate-100">

                    <img
                        src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=700&q=85"
                        alt="dr. Bima Wijaya"
                        class="h-full w-full object-cover"
                    >

                    <span class="absolute bottom-4 left-4 rounded-full bg-white px-3 py-1 text-xs font-bold text-green-600 shadow">
                        ● Tersedia
                    </span>

                </div>

                <div class="p-6">

                    <h3 class="text-lg font-bold text-[#102a43]">
                        dr. Bima Wijaya
                    </h3>

                    <p class="mt-1 text-sm text-medical-600">
                        Spesialis Penyakit Dalam
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                        <span class="text-sm text-slate-400">
                            ⭐ 4.9
                        </span>

                        <a href="#" class="text-sm font-bold text-medical-600">
                            Profil →
                        </a>

                    </div>

                </div>

            </div>


            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <div class="relative h-72 bg-slate-100">

                    <img
                        src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=700&q=85"
                        alt="dr. Citra Maharani"
                        class="h-full w-full object-cover"
                    >

                    <span class="absolute bottom-4 left-4 rounded-full bg-white px-3 py-1 text-xs font-bold text-green-600 shadow">
                        ● Tersedia
                    </span>

                </div>

                <div class="p-6">

                    <h3 class="text-lg font-bold text-[#102a43]">
                        drg. Citra Maharani
                    </h3>

                    <p class="mt-1 text-sm text-medical-600">
                        Dokter Gigi
                    </p>

                    <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                        <span class="text-sm text-slate-400">
                            ⭐ 5.0
                        </span>

                        <a href="#" class="text-sm font-bold text-medical-600">
                            Profil →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- APPOINTMENT -->
<!-- ===================================================== -->

<section id="appointment" class="bg-[#102a43] py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-10 lg:grid-cols-[1fr_auto]">

            <div>

                <div class="text-sm font-bold uppercase tracking-widest text-medical-300">
                    Buat Janji
                </div>

                <h2 class="mt-3 max-w-2xl text-3xl font-extrabold text-white sm:text-4xl">
                    Siap mendapatkan pelayanan kesehatan terbaik?
                </h2>

                <p class="mt-4 max-w-2xl leading-7 text-slate-300">
                    Pilih dokter dan waktu konsultasi yang sesuai
                    dengan kebutuhan Anda.
                </p>

            </div>


            <div class="flex flex-col gap-3 sm:flex-row">

                <a
                    href="/appointment"
                    class="rounded-lg bg-medical-500 px-7 py-3.5 text-center text-sm font-bold text-white hover:bg-medical-400"
                >
                    Buat Janji Online
                </a>

                <a
                    href="https://wa.me/6282112461434"
                    target="_blank"
                    class="rounded-lg border border-white/20 px-7 py-3.5 text-center text-sm font-bold text-white hover:bg-white/10"
                >
                    WhatsApp Kami
                </a>

            </div>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- ARTICLES -->
<!-- ===================================================== -->

<section id="artikel" class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">

            <div>

                <div class="text-sm font-bold uppercase tracking-widest text-medical-600">
                    Informasi Kesehatan
                </div>

                <h2 class="mt-3 text-3xl font-extrabold text-[#102a43] sm:text-4xl">
                    Artikel kesehatan terbaru
                </h2>

            </div>

            <a href="#" class="text-sm font-bold text-medical-600">
                Semua artikel →
            </a>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">


            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <img
                    src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=800&q=85"
                    alt="Tips kesehatan"
                    class="h-52 w-full object-cover"
                >

                <div class="p-6">

                    <span class="text-xs font-bold text-medical-600">
                        KESEHATAN
                    </span>

                    <h3 class="mt-3 text-lg font-bold leading-7 text-[#102a43]">
                        Kebiasaan sederhana untuk menjaga kesehatan
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Beberapa kebiasaan sehat yang dapat diterapkan
                        dalam kehidupan sehari-hari.
                    </p>

                    <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                        Baca artikel →
                    </a>

                </div>

            </article>


            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <img
                    src="https://images.unsplash.com/photo-1542736667-069246bdbc74?auto=format&fit=crop&w=800&q=85"
                    alt="Kesehatan anak"
                    class="h-52 w-full object-cover"
                >

                <div class="p-6">

                    <span class="text-xs font-bold text-medical-600">
                        KELUARGA
                    </span>

                    <h3 class="mt-3 text-lg font-bold leading-7 text-[#102a43]">
                        Kapan anak perlu diperiksa oleh dokter?
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Kenali beberapa tanda yang perlu mendapatkan
                        perhatian lebih.
                    </p>

                    <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                        Baca artikel →
                    </a>

                </div>

            </article>


            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white">

                <img
                    src="https://images.unsplash.com/photo-1471864190281-a93a3070b6de?auto=format&fit=crop&w=800&q=85"
                    alt="Medical check up"
                    class="h-52 w-full object-cover"
                >

                <div class="p-6">

                    <span class="text-xs font-bold text-medical-600">
                        MEDICAL CHECK UP
                    </span>

                    <h3 class="mt-3 text-lg font-bold leading-7 text-[#102a43]">
                        Mengapa medical check up penting?
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Pemeriksaan rutin dapat membantu mengetahui
                        kondisi kesehatan lebih awal.
                    </p>

                    <a href="#" class="mt-5 inline-block text-sm font-bold text-medical-600">
                        Baca artikel →
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- ===================================================== -->
<!-- FOOTER -->
<!-- ===================================================== -->

<footer class="bg-[#0b2239] text-white">

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            <!-- BRAND -->

            <div class="lg:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-medical-600">

                        <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" d="M12 5v14M5 12h14"/>
                        </svg>

                    </div>

                    <div>

                        <div class="text-xl font-extrabold">
                            Klinika<span class="text-medical-400">Care</span>
                        </div>

                        <div class="text-[9px] uppercase tracking-[.2em] text-slate-500">
                            Healthcare Center
                        </div>

                    </div>

                </div>


                <p class="mt-5 max-w-md text-sm leading-7 text-slate-400">
                    Klinik kesehatan terpercaya yang menyediakan
                    pelayanan medis profesional untuk Anda dan keluarga.
                </p>

            </div>


            <!-- MENU -->

            <div>

                <h3 class="font-bold">
                    Menu
                </h3>

                <div class="mt-5 space-y-3 text-sm text-slate-400">

                    <a href="#beranda" class="block hover:text-white">
                        Beranda
                    </a>

                    <a href="#layanan" class="block hover:text-white">
                        Layanan
                    </a>

                    <a href="#dokter" class="block hover:text-white">
                        Dokter
                    </a>

                    <a href="#tentang" class="block hover:text-white">
                        Tentang Kami
                    </a>

                    <a href="#artikel" class="block hover:text-white">
                        Artikel
                    </a>

                </div>

            </div>


            <!-- CONTACT -->

            <div>

                <h3 class="font-bold">
                    Hubungi Kami
                </h3>

                <div class="mt-5 space-y-4 text-sm text-slate-400">

                    <p>
                        Jl. Kesehatan No. 123<br>
                        Jakarta, Indonesia
                    </p>

                    <p>
                        +62 812-3456-7890
                    </p>

                    <p>
                        info@klinikacare.id
                    </p>

                </div>

            </div>

        </div>


        <div class="mt-12 flex flex-col justify-between gap-4 border-t border-white/10 pt-6 text-xs text-slate-500 sm:flex-row">

            <p>
                © {{ date('Y') }} KlinikaCare. All rights reserved.
            </p>

            <div class="flex gap-5">

                <a href="#" class="hover:text-white">
                    Privacy Policy
                </a>

                <a href="#" class="hover:text-white">
                    Terms
                </a>

            </div>

        </div>

    </div>

</footer>


<!-- ===================================================== -->
<!-- FLOATING WHATSAPP -->
<!-- ===================================================== -->

<a
    href="https://wa.me/6282112461434"
    target="_blank"
    aria-label="WhatsApp"
    class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-xl transition hover:scale-105"
>

    <svg
        class="h-7 w-7"
        viewBox="0 0 24 24"
        fill="currentColor"
    >
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.198.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.372-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
    </svg>

</a>

</body>
</html>
