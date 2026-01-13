<!-- ========== HEADER ========== -->
<header class="sticky top-0 flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full bg-indigo-600 ">
    <nav
        class="relative max-w-7xl w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between gap-x-1">
            <a class="block font-semibold text-xl text-black focus:outline-hidden focus:opacity-80"
               href="/" aria-label="Karang Taruna Besinar">
                <x-logo/>
            </a>

            <!-- Collapse Button -->
            <button type="button"
                    class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-100 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                    id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
                <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6"/>
                    <line x1="3" x2="21" y1="12" y2="12"/>
                    <line x1="3" x2="21" y1="18" y2="18"/>
                </svg>
                <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"/>
                    <path d="m6 6 12 12"/>
                </svg>
                <span class="sr-only">Toggle navigation</span>
            </button>
            <!-- End Collapse Button -->
        </div>

        <!-- Collapse -->
        <div id="hs-header-base"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "
             aria-labelledby="hs-header-base-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                    <div class="grow">
                        <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">


                            <x-navlink href="/" :current="request()->is('/')">Beranda</x-navlink>

                            <!-- Dropdown -->
                            <div
                                class="hs-dropdown md:[--trigger:hover] [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--adaptive:adaptive] [--is-collapse:true] md:[--is-collapse:false] ">
                                <button id="hs-header-base-dropdown" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-white hover:bg-indigo-700 rounded-lg focus:outline-hidden focus:bg-gray-100"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Tentang Kami
                                    <svg
                                        class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6"/>
                                    </svg>
                                </button>

                                <div
                                    class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-4.5 after:w-0.5 after:h-[calc(100%-4px)] after:bg-gray-100"
                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                                    <div class="py-1 md:px-1 space-y-0.5">
                                        <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                           href="#">
                                            Sambutan Ketua
                                        </a>

                                        <div
                                            class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                            <button id="hs-header-base-dropdown-sub" type="button"
                                                    class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-white md:text-gray-800 rounded-lg p-2 md:px-3 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                Profil
                                                <svg
                                                    class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6"/>
                                                </svg>
                                            </button>

                                            <div
                                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:mx-2.5! md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-4.5 after:w-0.5 after:h-[calc(100%-4px)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="hs-header-base-dropdown-sub">
                                                <div class="p-1 space-y-1">
                                                    <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                       href="tentang-kami">
                                                        Tentang Kami
                                                    </a>

                                                    <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                       href="#">
                                                        Visi-Misi
                                                    </a>

                                                    <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                                       href="#">
                                                        Legalitas
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                           href="#">
                                            Struktur Organisasi
                                        </a>

                                        <a class="p-2 md:px-3 flex items-center text-sm text-white md:text-gray-800 rounded-lg hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100"
                                           href="#">
                                            Pengurus
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Dropdown -->


                            <!-- Mega Menu -->
                            <div
                                class="hs-dropdown md:[--trigger:hover] [--strategy:static] md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                                <button id="hs-header-base-mega-menu-fullwidth" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-white hover:bg-indigo-700 rounded-lg focus:outline-hidden focus:text-black focus:bg-indigo-500"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                                    Berita
                                    <svg
                                        class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6"/>
                                    </svg>
                                </button>

                                <div
                                    class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full min-w-60 hidden z-10 top-full start-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5"
                                    role="menu" aria-orientation="vertical"
                                    aria-labelledby="hs-header-base-mega-menu-fullwidth">
                                    <div
                                        class="md:mx-6 lg:mx-8 md:bg-white md:rounded-lg md:shadow-md dark:md:bg-neutral-800">
                                        <!-- Grid -->
                                        <div class="py-1 md:p-2 md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                            <div class="flex flex-col">
                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            Support Docs</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Explore
                                                            advice and explanations for all of Preline's features.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->

                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="7" height="7" x="14" y="3" rx="1"/>
                                                        <path
                                                            d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            Integrations</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Discover
                                                            the huge range of tools that Preline integrates with.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->

                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m7 11 2-2-2-2"/>
                                                        <path d="M11 13h4"/>
                                                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            API Reference</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Build
                                                            custom integrations with our first-class API.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->
                                            </div>
                                            <!-- End Col -->

                                            <div class="flex flex-col">
                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="10"/>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                                        <path d="M12 17h.01"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            Help Center</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Learn how
                                                            to install, set up, and use Preline.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->

                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="4"/>
                                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            Developer Hub</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Learn how
                                                            to integrate or build on top of Preline.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->

                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-4 hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <svg
                                                        class="shrink-0 size-4 mt-1 text-white md:text-gray-800 dark:text-neutral-200"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                                        <circle cx="9" cy="7" r="4"/>
                                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                                    </svg>
                                                    <div class="grow">
                                                        <p class="font-medium text-sm text-white md:text-gray-800 dark:text-neutral-200">
                                                            Community Forum</p>
                                                        <p class="text-sm text-gray-400 md:text-gray-500">Learn,
                                                            share, and connect with other Preline users.</p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->
                                            </div>
                                            <!-- End Col -->

                                            <div class="mt-2 md:mt-0 flex flex-col">
                                                <span
                                                    class="ms-2.5 mb-2 font-semibold text-xs uppercase text-white md:text-gray-800 dark:text-neutral-200">Customer stories</span>

                                                <!-- Link -->
                                                <a class="p-3 flex gap-x-5 items-center rounded-xl hover:bg-indigo-700 md:hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                   href="#">
                                                    <img class="size-32 rounded-lg"
                                                         src="https://images.unsplash.com/photo-1648737967328-690548aec14f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80"
                                                         alt="Avatar">
                                                    <div class="grow">
                                                        <p class="text-sm text-white md:text-gray-800 dark:text-neutral-400">
                                                            Preline Projects has proved to be most efficient cloud based
                                                            project tracking and bug tracking tool.
                                                        </p>
                                                        <p class="mt-3 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-400">
                                                            Learn more
                                                            <svg class="shrink-0 size-4"
                                                                 xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </a>
                                                <!-- End Link -->
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                        <!-- End Grid -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu -->

                            <x-navlink href="kegiatan" :current="request()->is('kegiatan')">Kegiatan</x-navlink>


                        </div>
                    </div>

                    <div class="my-2 md:my-0 md:mx-2">
                        <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 dark:bg-neutral-700"></div>
                    </div>

                    <!-- Button Group -->
                    <div class=" flex flex-wrap items-center gap-x-1.5">
                        <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:bg-blue-600"
                           href="kontak">
                            Kontak
                        </a>
                    </div>
                    <!-- End Button Group -->
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->
