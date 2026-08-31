@extends('layouts.master')

@section('title', 'Mc Blogg – Äventyr på två hjul')

@section('meta_description')
    Följ mina motorcykelresor, upptäck fantastiska vägar och läs berättelser från sadeln.
@endsection


@section('content')

    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}

    <section class="relative isolate min-h-[760px] overflow-hidden bg-slate-950">

        {{-- Bakgrundsbild --}}
        <div class="absolute inset-0 -z-20">

            <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=2400&q=85"
                alt="Motorcykel på en väg" class="h-full w-full object-cover">

        </div>


        {{-- Mörk overlay --}}
        <div class="absolute inset-0 -z-10 bg-slate-950/60"></div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-slate-950/90 via-slate-950/60 to-slate-950/20"></div>


        {{-- Hero content --}}
        <div class="mx-auto flex min-h-[760px] max-w-7xl items-center px-6 py-32 lg:px-8">

            <div class="max-w-3xl text-white">

                <p class="mb-6 text-sm font-black uppercase tracking-[0.3em] text-orange-400">
                    Motorcykel • Resor • Äventyr
                </p>


                <h1 class="text-5xl font-black uppercase leading-[0.9] tracking-tight sm:text-7xl lg:text-8xl">
                    Äventyr på
                    <span class="text-orange-500">
                        två hjul
                    </span>
                </h1>


                <p class="mt-8 max-w-2xl text-lg leading-8 text-slate-200 sm:text-xl">
                    Följ med på mina motorcykelresor runt om i världen.
                    Nya vägar, nya människor och nya berättelser.
                </p>


                <div class="mt-10 flex flex-col gap-4 sm:flex-row">

                    <a href="#resor"
                        class="inline-flex items-center justify-center rounded-lg bg-orange-500 px-7 py-4 text-sm font-black uppercase tracking-wide text-white transition hover:bg-orange-400">
                        Senaste resan
                        <span class="ml-3 text-lg">→</span>
                    </a>


                    <a href="#resor"
                        class="inline-flex items-center justify-center rounded-lg border border-white/50 bg-white/5 px-7 py-4 text-sm font-black uppercase tracking-wide text-white backdrop-blur-sm transition hover:bg-white hover:text-slate-900">
                        Alla resor
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- ========================================================= --}}
    {{-- RESOR --}}
    {{-- ========================================================= --}}

    <section id="resor" class="bg-slate-50 py-24 sm:py-32">

        <div class="mx-auto max-w-6xl px-6 lg:px-8">


            {{-- Section heading --}}
            <div class="mb-16 max-w-3xl">

                <p class="text-sm font-black uppercase tracking-[0.25em] text-orange-500">
                    Senaste resorna
                </p>

                <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                    Resor i kronologisk ordning
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    Här hittar du mina resor i den ordning de genomfördes.
                    Den senaste resan ligger alltid överst så att det blir
                    enkelt att följa det senaste äventyret.
                </p>

            </div>



            {{-- Timeline --}}
            <div class="relative">


                {{-- Lodrät linje --}}
                <div class="absolute bottom-4 left-[10px] top-4 w-px bg-slate-200 md:left-[145px]"></div>


                <div class="space-y-8">


                    {{-- ================================================= --}}
                    {{-- RESA 1 --}}
                    {{-- ================================================= --}}

                    <article class="relative grid gap-6 md:grid-cols-[120px_1fr] md:gap-12">

                        {{-- Datum --}}
                        <div class="hidden pt-8 text-right md:block">

                            <time class="text-sm font-bold text-slate-500">
                                25 aug 2026
                            </time>

                            <div class="mt-2">
                                <span
                                    class="rounded-full bg-orange-500 px-3 py-1 text-[10px] font-black uppercase tracking-wide text-white">
                                    Senaste
                                </span>
                            </div>

                        </div>


                        {{-- Punkt --}}
                        <div class="absolute left-0 top-8 z-10 flex h-6 w-6 items-center justify-center bg-slate-50">

                            <div class="h-3 w-3 rounded-full border-2 border-orange-500 bg-white"></div>

                        </div>


                        {{-- Card --}}
                        <article
                            class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="grid md:grid-cols-2">


                                {{-- Bild --}}
                                <div class="group overflow-hidden">

                                    <img src="https://images.unsplash.com/photo-1525160354320-d8e92641c563?auto=format&fit=crop&w=1200&q=85"
                                        alt="Motorcykel på alpin väg"
                                        class="h-72 w-full object-cover transition duration-700 group-hover:scale-105 md:h-full"
                                        loading="lazy">

                                </div>


                                {{-- Text --}}
                                <div class="p-7 sm:p-9">

                                    <div class="mb-4 flex items-center gap-3 md:hidden">

                                        <time class="text-sm font-bold text-slate-500">
                                            25 aug 2026
                                        </time>

                                        <span
                                            class="rounded-full bg-orange-100 px-2.5 py-1 text-[10px] font-black uppercase text-orange-600">
                                            Senaste
                                        </span>

                                    </div>


                                    <p class="text-xs font-black uppercase tracking-[0.2em] text-orange-500">
                                        Frankrike
                                    </p>


                                    <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-950">
                                        Genom de franska Alperna
                                    </h3>


                                    <p class="mt-4 leading-7 text-slate-600">
                                        Slingrande vägar, höga berg och fantastiska
                                        vyer. En resa genom några av Europas bästa
                                        motorcykelvägar.
                                    </p>


                                    <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-500">

                                        <span class="flex items-center gap-2">
                                            📍 Frankrike
                                        </span>

                                        <span class="flex items-center gap-2">
                                            ◷ 6 min läsning
                                        </span>

                                    </div>


                                    <a href="#"
                                        class="mt-7 inline-flex items-center gap-2 text-sm font-black uppercase tracking-wide text-orange-500 transition hover:text-orange-600">
                                        Läs mer
                                        <span>→</span>
                                    </a>

                                </div>

                            </div>

                        </article>

                    </article>



                    {{-- ================================================= --}}
                    {{-- RESA 2 --}}
                    {{-- ================================================= --}}

                    <article class="relative grid gap-6 md:grid-cols-[120px_1fr] md:gap-12">

                        <div class="hidden pt-8 text-right md:block">

                            <time class="text-sm font-bold text-slate-500">
                                10 aug 2026
                            </time>

                        </div>


                        <div class="absolute left-0 top-8 z-10 flex h-6 w-6 items-center justify-center bg-slate-50">

                            <div class="h-3 w-3 rounded-full border-2 border-orange-500 bg-white"></div>

                        </div>


                        <article
                            class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="grid md:grid-cols-2">

                                <div class="group overflow-hidden">

                                    <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def?auto=format&fit=crop&w=1200&q=85"
                                        alt="Motorcyklist vid norsk fjord"
                                        class="h-72 w-full object-cover transition duration-700 group-hover:scale-105 md:h-full"
                                        loading="lazy">

                                </div>


                                <div class="p-7 sm:p-9">

                                    <div class="mb-4 md:hidden">

                                        <time class="text-sm font-bold text-slate-500">
                                            10 aug 2026
                                        </time>

                                    </div>


                                    <p class="text-xs font-black uppercase tracking-[0.2em] text-orange-500">
                                        Norge
                                    </p>


                                    <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-950">
                                        Norge på längden
                                    </h3>


                                    <p class="mt-4 leading-7 text-slate-600">
                                        Från Oslo till Nordkap. Fjordar, berg,
                                        långa vägar och midnattssol i en resa
                                        som bjöd på lite av allt.
                                    </p>


                                    <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-500">

                                        <span>📍 Norge</span>

                                        <span>◷ 7 min läsning</span>

                                    </div>


                                    <a href="#"
                                        class="mt-7 inline-flex items-center gap-2 text-sm font-black uppercase tracking-wide text-orange-500 transition hover:text-orange-600">
                                        Läs mer
                                        <span>→</span>
                                    </a>

                                </div>

                            </div>

                        </article>

                    </article>



                    {{-- ================================================= --}}
                    {{-- RESA 3 --}}
                    {{-- ================================================= --}}

                    <article class="relative grid gap-6 md:grid-cols-[120px_1fr] md:gap-12">

                        <div class="hidden pt-8 text-right md:block">

                            <time class="text-sm font-bold text-slate-500">
                                22 jul 2026
                            </time>

                        </div>


                        <div class="absolute left-0 top-8 z-10 flex h-6 w-6 items-center justify-center bg-slate-50">

                            <div class="h-3 w-3 rounded-full border-2 border-orange-500 bg-white"></div>

                        </div>


                        <article
                            class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="grid md:grid-cols-2">

                                <div class="group overflow-hidden">

                                    <img src="https://images.unsplash.com/photo-1558980664-10ea9b7e44d3?auto=format&fit=crop&w=1200&q=85"
                                        alt="Motorcykel på svensk landsväg"
                                        class="h-72 w-full object-cover transition duration-700 group-hover:scale-105 md:h-full"
                                        loading="lazy">

                                </div>


                                <div class="p-7 sm:p-9">

                                    <div class="mb-4 md:hidden">

                                        <time class="text-sm font-bold text-slate-500">
                                            22 jul 2026
                                        </time>

                                    </div>


                                    <p class="text-xs font-black uppercase tracking-[0.2em] text-orange-500">
                                        Sverige
                                    </p>


                                    <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-950">
                                        Värtur i Skåne
                                    </h3>


                                    <p class="mt-4 leading-7 text-slate-600">
                                        En kort men härlig tur genom Skånes
                                        böljande landskap och små charmiga byar.
                                    </p>


                                    <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-500">

                                        <span>📍 Sverige</span>

                                        <span>◷ 4 min läsning</span>

                                    </div>


                                    <a href="#"
                                        class="mt-7 inline-flex items-center gap-2 text-sm font-black uppercase tracking-wide text-orange-500 transition hover:text-orange-600">
                                        Läs mer
                                        <span>→</span>
                                    </a>

                                </div>

                            </div>

                        </article>

                    </article>



                    {{-- ================================================= --}}
                    {{-- RESA 4 --}}
                    {{-- ================================================= --}}

                    <article class="relative grid gap-6 md:grid-cols-[120px_1fr] md:gap-12">

                        <div class="hidden pt-8 text-right md:block">

                            <time class="text-sm font-bold text-slate-500">
                                5 jul 2026
                            </time>

                        </div>


                        <div class="absolute left-0 top-8 z-10 flex h-6 w-6 items-center justify-center bg-slate-50">

                            <div class="h-3 w-3 rounded-full border-2 border-orange-500 bg-white"></div>

                        </div>


                        <article
                            class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="grid md:grid-cols-2">

                                <div class="group overflow-hidden">

                                    <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?auto=format&fit=crop&w=1200&q=85"
                                        alt="Motorcykel på skogsväg"
                                        class="h-72 w-full object-cover transition duration-700 group-hover:scale-105 md:h-full"
                                        loading="lazy">

                                </div>


                                <div class="p-7 sm:p-9">

                                    <div class="mb-4 md:hidden">

                                        <time class="text-sm font-bold text-slate-500">
                                            5 jul 2026
                                        </time>

                                    </div>


                                    <p class="text-xs font-black uppercase tracking-[0.2em] text-orange-500">
                                        Sverige
                                    </p>


                                    <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-950">
                                        Första turen för säsongen
                                    </h3>


                                    <p class="mt-4 leading-7 text-slate-600">
                                        Årets första längre tur. Dammiga vägar,
                                        fågelsång och den där känslan av att
                                        äntligen vara tillbaka på vägen.
                                    </p>


                                    <div class="mt-6 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-500">

                                        <span>📍 Sverige</span>

                                        <span>◷ 3 min läsning</span>

                                    </div>


                                    <a href="#"
                                        class="mt-7 inline-flex items-center gap-2 text-sm font-black uppercase tracking-wide text-orange-500 transition hover:text-orange-600">
                                        Läs mer
                                        <span>→</span>
                                    </a>

                                </div>

                            </div>

                        </article>

                    </article>

                </div>


                {{-- Visa alla --}}
                <div class="mt-14 text-center">

                    <a href="#"
                        class="inline-flex items-center gap-3 rounded-lg border border-slate-300 px-7 py-3.5 text-sm font-black uppercase tracking-wide text-slate-800 transition hover:border-orange-500 hover:text-orange-500">
                        Visa alla resor
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- ========================================================= --}}
    {{-- OM MIG --}}
    {{-- ========================================================= --}}

    <section id="om-mig" class="bg-white py-24 sm:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">


                <div class="overflow-hidden rounded-2xl">

                    <img src="https://images.unsplash.com/photo-1558981285-6f0c94958bb6?auto=format&fit=crop&w=1400&q=85"
                        alt="Motorcykel på väg" class="aspect-[4/3] w-full object-cover" loading="lazy">

                </div>


                <div class="max-w-xl">

                    <p class="text-sm font-black uppercase tracking-[0.25em] text-orange-500">
                        Om mig
                    </p>


                    <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                        Vägen är målet.
                    </h2>


                    <p class="mt-6 text-lg leading-8 text-slate-600">
                        För mig handlar motorcykling om mer än att ta sig
                        från A till B. Det handlar om vägarna däremellan,
                        människorna man möter och platserna man aldrig
                        hade hittat från en bil.
                    </p>


                    <p class="mt-5 leading-7 text-slate-600">
                        Här samlar jag mina resor, erfarenheter, favoritvägar
                        och sådant jag lär mig längs vägen.
                    </p>


                    <a href="#"
                        class="mt-8 inline-flex items-center gap-2 font-black text-orange-500 transition hover:text-orange-600">
                        Läs mer om mig
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- ========================================================= --}}
    {{-- UTRUSTNING --}}
    {{-- ========================================================= --}}

    <section id="utrustning" class="bg-slate-100 py-24 sm:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="max-w-2xl">

                <p class="text-sm font-black uppercase tracking-[0.25em] text-orange-500">
                    Utrustning
                </p>

                <h2 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                    Det jag har med mig på vägen.
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    Motorcykeln, packningen och utrustningen som följer
                    med på mina längre och kortare äventyr.
                </p>

            </div>


            <div class="mt-12 grid gap-6 md:grid-cols-3">

                <div class="rounded-2xl bg-white p-8 shadow-sm">

                    <div class="text-3xl">
                        🏍️
                    </div>

                    <h3 class="mt-5 text-xl font-black">
                        Motorcykeln
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Min hoj och de modifieringar som gör den redo
                        för långa dagar på vägen.
                    </p>

                </div>


                <div class="rounded-2xl bg-white p-8 shadow-sm">

                    <div class="text-3xl">
                        🧳
                    </div>

                    <h3 class="mt-5 text-xl font-black">
                        Packningen
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Det viktigaste jag behöver när jag är ute
                        på vägen i flera dagar.
                    </p>

                </div>


                <div class="rounded-2xl bg-white p-8 shadow-sm">

                    <div class="text-3xl">
                        🧤
                    </div>

                    <h3 class="mt-5 text-xl font-black">
                        Skydd & kläder
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        Hjälm, kläder, skydd och annan utrustning
                        som får följa med på resorna.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- ========================================================= --}}
    {{-- CTA / KONTAKT --}}
    {{-- ========================================================= --}}

    <section id="kontakt" class="relative overflow-hidden bg-slate-950 py-24 sm:py-32">

        <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-orange-500/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">

            <p class="text-sm font-black uppercase tracking-[0.3em] text-orange-400">
                Nästa äventyr väntar
            </p>

            <h2 class="mt-4 text-4xl font-black tracking-tight text-white sm:text-6xl">
                Följ med på resan.
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-400">
                Nya vägar, nya platser och nya berättelser.
                Följ bloggen och häng med när nästa resa börjar.
            </p>

            <a href="#resor"
                class="mt-9 inline-flex items-center gap-3 rounded-lg bg-orange-500 px-7 py-4 text-sm font-black uppercase tracking-wide text-white transition hover:bg-orange-400">
                Utforska resorna
                <span>→</span>
            </a>

        </div>

    </section>

@endsection
