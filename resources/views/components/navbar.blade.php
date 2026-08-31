<nav
    x-data="{ open: false }"
    class="absolute inset-x-0 top-0 z-50"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3 text-white">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-500 font-black">
                    M
                </div>

                <span class="text-xl font-black tracking-tight">
                    MotoResor
                </span>

            </a>


            {{-- Desktop menu --}}
            <div class="hidden items-center gap-8 md:flex">

                <a
                    href="/"
                    class="relative py-2 text-sm font-bold text-white transition hover:text-orange-400"
                >
                    Hem

                    <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-orange-500"></span>
                </a>

                <a
                    href="#resor"
                    class="py-2 text-sm font-bold text-white transition hover:text-orange-400"
                >
                    Resor
                </a>

                <a
                    href="#om-mig"
                    class="py-2 text-sm font-bold text-white transition hover:text-orange-400"
                >
                    Om mig
                </a>

                <a
                    href="#utrustning"
                    class="py-2 text-sm font-bold text-white transition hover:text-orange-400"
                >
                    Utrustning
                </a>

                <a
                    href="#kontakt"
                    class="py-2 text-sm font-bold text-white transition hover:text-orange-400"
                >
                    Kontakt
                </a>

            </div>


            {{-- Desktop login --}}
            <div class="hidden items-center gap-5 md:flex">

                @auth

                    <a
                        href="{{ route('dashboard') }}"
                        class="text-sm font-bold text-white transition hover:text-orange-400"
                    >
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="rounded-lg border border-white/30 px-4 py-2 text-sm font-bold text-white transition hover:bg-white hover:text-slate-900"
                        >
                            Logga ut
                        </button>
                    </form>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="text-sm font-bold text-white transition hover:text-orange-400"
                    >
                        Logga in
                    </a>

                @endauth

            </div>


            {{-- Mobile button --}}
            <button
                type="button"
                @click="open = !open"
                class="flex h-11 w-11 items-center justify-center rounded-lg text-white transition hover:bg-white/10 md:hidden"
                :aria-expanded="open"
                aria-label="Öppna meny"
            >

                {{-- Hamburger --}}
                <svg
                    x-show="!open"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>


                {{-- Close --}}
                <svg
                    x-show="open"
                    x-cloak
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>


        {{-- Mobile menu --}}
        <div
            x-show="open"
            x-cloak
            x-transition
            @click.outside="open = false"
            class="rounded-2xl bg-slate-950/95 p-5 shadow-2xl backdrop-blur md:hidden"
        >

            <div class="space-y-1">

                <a
                    href="/"
                    @click="open = false"
                    class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                >
                    Hem
                </a>

                <a
                    href="#resor"
                    @click="open = false"
                    class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                >
                    Resor
                </a>

                <a
                    href="#om-mig"
                    @click="open = false"
                    class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                >
                    Om mig
                </a>

                <a
                    href="#utrustning"
                    @click="open = false"
                    class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                >
                    Utrustning
                </a>

                <a
                    href="#kontakt"
                    @click="open = false"
                    class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                >
                    Kontakt
                </a>


                <div class="my-4 border-t border-white/10"></div>


                @auth

                    <a
                        href="{{ route('dashboard') }}"
                        class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                    >
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="block w-full rounded-lg px-4 py-3 text-left text-sm font-bold text-white hover:bg-white/10"
                        >
                            Logga ut
                        </button>
                    </form>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="block rounded-lg px-4 py-3 text-sm font-bold text-white hover:bg-white/10"
                    >
                        Logga in
                    </a>

                @endauth

            </div>
        </div>

    </div>
</nav>