<nav x-data="{ toggleMobileNav: false }" class="relative lg:hidden">
    <div class="p-4 w-full">
        <div class="max-w-full md:max-w-2xl mx-auto w-full flex items-center">
            <div class="w-full">
                <a href="{{ route('guest.home.index') }}">
                    <x-logo.estatia fill="#252525" />
                </a>
            </div>
            <div class="w-full flex justify-end">
                <button class="w-fit" @click="toggleMobileNav =! toggleMobileNav">
                    <x-feathericon-menu class="h-6" />
                </button>
            </div>
        </div>
    </div>
    <div x-show="toggleMobileNav" x-cloak class="w-full absolute bg-white">
        <div class="w-full p-4 border-b flex justify-between text-neutral-600">
            <div>
                Beli
            </div>
            <div>
                <x-feathericon-chevron-down class="size-5" />
            </div>
        </div>
        <div class="w-full p-4 border-b flex justify-between text-neutral-600">
            <div>
                Sewa
            </div>
            <div>
                <x-feathericon-chevron-down class="size-5" />
            </div>
        </div>
        <div class="w-full p-4 flex flex-col justify-between text-neutral-600 space-y-4">
            <a href=""
                class="w-full flex py-4 justify-center space-x-4 bg-estatia-primary-blue rounded-lg text-white font-medium">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path
                            d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
                    </svg>

                </span>
                <span>
                    Iklankan Properti Anda!
                </span>
            </a>
            <a href=""
                class="w-full flex py-4 justify-center space-x-4 bg-white rounded-lg text-estatia-primary-blue border border-estatia-primary-blue font-medium">
                Login
            </a>
        </div>
    </div>
</nav>

<nav class="hidden lg:block absolute top-0 w-full">
    <div class="py-4 w-full bg-white">
        <div class="max-w-4xl xl:max-w-7xl mx-auto flex justify-between items-center">
            <div>
                <x-logo.estatia class="h-8" fill="#252525" />
            </div>
            <div class="flex space-x-8">
                <div class="flex space-x-8">
                    <div class="flex items-center space-x-2">
                        <div>
                            Beli
                        </div>
                        <div class="text-estatia-light-grey">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div>
                            Sewa
                        </div>
                        <div class="text-estatia-light-grey">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div>
                            Lokasi
                        </div>
                        <div class="text-estatia-light-grey">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <a href=""
                        class="flex w-fit py-[14.5] bg-estatia-primary-blue text-white px-4 rounded-lg space-x-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">
                            Iklankan Propertimu Gratis
                        </div>
                    </a>
                    <a href=""
                        class="flex w-fit py-[14.5] text-estatia-primary-blue bg-estatia-light-blue-200 px-4 rounded-lg">
                        <div class="font-semibold">
                            Login
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
