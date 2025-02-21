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
                <div>
                    <iframe loading="lazy" class="w-full rounded-sm shadow-gray-300 shadow-sm aspect-video" src="https://www.youtube.com/embed/ZkmCP3NIIvI?si=y5y7awNkmnyepLCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="flex justify-between p-2">
                        <span>
                            <h2 class="font-bold text-gray-700 font-sans">Judul Video Ini Apa</h2>
                            <p>23 Feb 2010</p>
                        </span>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="DELETE" onsubmit="return confirm('Apakah kamu yakin ingin menghapus ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <div class="h-5"></div>
            </div>
        </div>
    </x-adminNav>
</x-layout>



