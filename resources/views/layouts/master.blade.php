<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="@yield('meta_description', 'MotoResor – motorcykelresor, äventyr och berättelser från vägen.')">

    <title>
        @yield('title', 'MotoResor')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-white text-slate-900 antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-slate-950 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

                {{-- Logo / description --}}
                <div>
                    <a href="/" class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-500 font-black">
                            M
                        </div>

                        <span class="text-xl font-black tracking-tight">
                            MotoResor
                        </span>
                    </a>

                    <p class="mt-5 max-w-xs text-sm leading-6 text-slate-400">
                        Ett motorcykeläventyr på två hjul.
                        Resor, vägar, utrustning och berättelser från sadeln.
                    </p>
                </div>


                {{-- Navigation --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider">
                        Snabblänkar
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm">
                        <li>
                            <a href="/"
                               class="text-slate-400 transition hover:text-orange-400">
                                Hem
                            </a>
                        </li>

                        <li>
                            <a href="#resor"
                               class="text-slate-400 transition hover:text-orange-400">
                                Resor
                            </a>
                        </li>

                        <li>
                            <a href="#om-mig"
                               class="text-slate-400 transition hover:text-orange-400">
                                Om mig
                            </a>
                        </li>

                        <li>
                            <a href="#utrustning"
                               class="text-slate-400 transition hover:text-orange-400">
                                Utrustning
                            </a>
                        </li>

                        <li>
                            <a href="#kontakt"
                               class="text-slate-400 transition hover:text-orange-400">
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </div>


                {{-- Social --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider">
                        Följ mig
                    </h3>

                    <div class="mt-5 flex gap-3">

                        <a href="#"
                           aria-label="Instagram"
                           class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-800 text-sm font-bold transition hover:bg-orange-500">
                            IG
                        </a>

                        <a href="#"
                           aria-label="YouTube"
                           class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-800 text-sm font-bold transition hover:bg-orange-500">
                            YT
                        </a>

                        <a href="#"
                           aria-label="Facebook"
                           class="flex h-11 w-11 items-center justify-center rounded-full bg-slate-800 text-sm font-bold transition hover:bg-orange-500">
                            FB
                        </a>

                    </div>
                </div>


                {{-- Newsletter --}}
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider">
                        Prenumerera
                    </h3>

                    <p class="mt-5 text-sm leading-6 text-slate-400">
                        Få ett meddelande när jag publicerar en ny resa.
                    </p>

                    <form class="mt-5 flex">

                        <input
                            type="email"
                            placeholder="Din e-postadress"
                            class="min-w-0 flex-1 rounded-l-lg border-0 bg-slate-800 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:ring-2 focus:ring-orange-500"
                        >

                        <button
                            type="submit"
                            class="rounded-r-lg bg-orange-500 px-5 font-bold transition hover:bg-orange-400"
                        >
                            →
                        </button>

                    </form>
                </div>

            </div>


            <div class="mt-16 border-t border-slate-800 pt-8 text-center text-sm text-slate-500">
                © {{ date('Y') }} MotoResor. Alla rättigheter förbehållna.
            </div>

        </div>
    </footer>

    @stack('scripts')

</body>
</html>