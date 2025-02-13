    <div class="fixed top-0 left-0 w-full bg-white/50 shadow-md z-50 px-5 md:px-[100px] py-2 md:py-[25px] justify-between text-blue-700 font-bold font-[Gugi flex">
        <div class="flex hover:cursor-pointer self-center w-1/3" onclick="return window.location.href='/'">
            <img src="/images/tif.png" alt="" class="h-[60px] mr-4">
            <div class="hidden md:block">
                <p>{{ __('user.tif') }}</p>
                <p>{{ __('user.utm') }}</p>
            </div>
        </div>
        <div class="self-center hidden md:block lg:ml-[-100px] xl:ml-[-380px]">
            <div class="flex">
                <button class="p-2 md:mx-3 hover:scale-110 transition-all" onclick="return window.location.href='/#video'">
                    {{ __('user.video') }}
                </button>
                <button class="p-2 md:mx-3 hover:scale-110 transition-all" onclick="return window.location.href='/#photo'">
                    {{ __('user.photo') }}
                </button>
                <button class="p-2 md:mx-3 hover:scale-110 transition-all" onclick="return window.location.href='/article/'">
                    {{ __('user.article') }}
                </button>
                <button class="p-2 md:mx-3 hover:scale-110 transition-all hidden md:block">
                    {{ __('user.contact') }}
                </button>
            </div>
        </div>
        <div class="self-center hidden md:block">
            <div x-data="{ open: false }" class="relative">
                <button @mouseenter="open = true" @mouseleave="open = false"
                    class="text-[18px]">
                    @php($language = ["en" => "EN", "id" => "ID"])
                    <i class="bi bi-caret-down-fill"></i> {{ $language [Session::get('locale', 'en')] }} <i class="bi bi-globe"></i>
                </button>
                <div x-show="open" @mouseenter="open = true" @mouseleave="open = false"
                    class="absolute left-0 w-auto font-normal font-[Poppins] text-[15px] bg-white shadow-lg border rounded-md p-2 z-10">
                    <a href="{{ route('lang.change', ['lang' => 'en']) }}" class="block px-4 py-2 hover:bg-gray-100">EN</a>
                    <a href="{{ route('lang.change', ['lang' => 'id']) }}" class="block px-4 py-2 hover:bg-gray-100">ID</a>
                </div>
            </div>
        </div>

        {{-- Mobile View --}}
        <div class="self-center block md:hidden">
            <div x-data="{ open: false }" class="relative">
                <!-- Button to toggle dropdown -->
                <button @click="open = !open" class="text-[40px]">
                    <i class="bi bi-list"></i>
                </button>
        
                <!-- Dropdown menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-4"
                    @click.away="open = false"
                    class="absolute w-screen font-normal font-[Poppins] text-[15px] mt-1 bg-white/50 shadow-lg border p-2 z-10 ml-[-315px] text-center">
                    <a href="/#video" class="block px-4 py-2 hover:bg-gray-100">{{ __('user.video') }}</a>
                    <a href="/#photo" class="block px-4 py-2 hover:bg-gray-100">{{ __('user.photo') }}</a>
                    <a href="/article/" class="block px-4 py-2 hover:bg-gray-100">{{ __('user.article') }}</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">{{ __('user.contact') }}</a>
                    <div x-data="{ open: false }" class="relative">
                        <button @mouseenter="open = true" @mouseleave="open = false"
                            class="text-[18px]">
                            @php($language = ["en" => "EN", "id" => "ID"])
                            <i class="bi bi-caret-down-fill"></i> {{ $language [Session::get('locale', 'en')] }} <i class="bi bi-globe"></i>
                        </button>
                        <div x-show="open" @mouseenter="open = true" @mouseleave="open = false"
                            class="absolute left-0 w-screen font-normal font-[Poppins] text-[15px] bg-white shadow-lg border rounded-md p-2 z-10">
                            <a href="{{ route('lang.change', ['lang' => 'en']) }}" class="block px-4 py-2 hover:bg-gray-100">EN</a>
                            <a href="{{ route('lang.change', ['lang' => 'id']) }}" class="block px-4 py-2 hover:bg-gray-100">ID</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
