<x-adminLayout>
    <x-adminNav></x-adminNav>
    <div   class="p-5 h-screen  w-full overflow-y-auto">
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
            <div>
                <iframe loading="lazy" class="w-full rounded-sm shadow-gray-300 shadow-sm aspect-video" src="https://www.youtube.com/embed/ZkmCP3NIIvI?si=y5y7awNkmnyepLCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="flex justify-between p-2">
                    <span>
                        <h2 class="font-bold text-gray-700 font-sans">Judul Video Ini Apa</h2>
                        <p>23 Feb 2010</p>
                    </span>
                    <a href="" class="px-4 shadow-sm shadow-gray-600 flex justify-center items-center rounded-md bg-red-800 text-white aspect-square">
                        <i class="bi font-bold text-[20px] bi-trash"></i>
                    </a>
                </div>
            </div>
            <div class="h-5"></div>
        </div>
    </div>

    <button @click="showUploadVideo = !showUploadVideo" class="btn btn-square btn-outline absolute right-10 bottom-10">
        <i class="bi bi-plus text-[35px]"></i>
    </button>

    {{-- Modal Untuk Upload Video --}}
    <div :class="showUploadVideo ? 'flex' : 'hidden'" class="absolute justify-center items-center w-screen h-screen bg-stone-400 bg-opacity-50">
        <form action="" class="absolute p-10 max-w-[400px] rounded-md sm:w-screen sm:h-full bg-white md:w-[50%]  shadow-md md:h-fit">
            <input type="text" placeholder="Masukan Link Video" class="input rounded-md input-bordered w-full" />
            <input type="text" placeholder="Judul Video" class="input  mt-5 rounded-md input-bordered w-full" />
            <button class="w-full p-3 rounded-md text-white font-bold mt-5 bg-yellow-400">
                Upload
                <i class="bi bi-upload"></i>
            </button>
            <button @click="showUploadVideo = !showUploadVideo" type="button" class="w-full p-3 rounded-md text-white font-bold mt-5 bg-red-400">
                Cancle
                <i class="bi bi-cross"></i>
            </button>
        </form>
    </div>
</x-adminLayout>



