<x-adminLayout>
    <x-adminNav></x-adminNav>

    <main class="w-full p-5">
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

         {{-- Article Container --}}
         <div class="mt-5 h-screen grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">
            
            <div class=" shadow-gray-700 ">
                <figure>
                  <img
                    src="{{URL::asset('/images/article.webp')}}"
                    alt="Article Thumbnail" />
                </figure>
                <div class=" font-sans">
                    <h1 class="font-bold text-xl text-gray-700">Judul Article</h1>
                    <p class="text-justify text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, odit. Quod, fugiat ex. Et, consectetur doloribus. Eveniet quaerat ipsa maiores perferendis at commodi sunt earum, sint fugit corporis minima nihil.</p>
                </div>
                <button class="bg-yellow-400 w-full p-3 text-white rounded-sm mt-2">
                    <i class="bi bi-pencil"></i>
                    Edit
                </button>
            </div> 
            <div class="h-5"></div>

            <a href="/admin/studio/article/upload" class="btn btn-square btn-outline absolute right-10 bottom-10">
                <i class="bi bi-plus text-[35px]"></i>
            </a>
        </div>
    </main>
</x-adminLayout>