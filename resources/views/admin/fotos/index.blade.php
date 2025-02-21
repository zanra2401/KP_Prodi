<x-layout>
    <x-adminNav>
        <div   class="p-5 h-screen  w-full">
            <label class="input w-full input-bordered flex items-center rounded-md gap-2">
                <input type="text" class="grow" placeholder="Search" />
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                    fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
                </svg>
            </label>
    
            {{-- Video Container --}}
            <div   class="mt-5 h-screen grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">
                @foreach ($foto as $kontol)
                    <div class="relative inline-block">
                        <img src="{{$kontol->path_foto}}" alt="">
                    
                        <a href="" class="absolute bottom-2 right-2 z-10 px-4 shadow-sm shadow-gray-600 flex justify-center items-center rounded-md bg-red-800 text-white aspect-square
                            hover:bg-red-600 hover:shadow-lg hover:scale-110 transition-all duration-200">
                            <i class="bi font-bold text-[20px] bi-trash"></i>
                        </a>
                    </div>        
                @endforeach
                <div class="h-5"></div>
            </div>
        </div>
    </x-adminNav>
</x-layout>



