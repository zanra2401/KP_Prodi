<x-adminLayout>
    
    <x-adminNav></x-adminNav>
    <main class="w-full font-sans p-5 overflow-y-auto h-screen">
        <form action="" class="mb-20">
            <label class="input text-gray-800 font-bold mb-10 w-full input-bordered flex items-center rounded-md gap-2">
                <input type="text" class="grow" placeholder="Judul Article" />
            </label>
            <div id="editor" class="text-inherit min-h-screen">
            </div>
            <div class="w-fit h-fit absolute  right-10 bottom-10">
                <button class="btn btn-square border-yellow-500 text-yellow-600 hover:bg-yellow-500 hover:text-white font-bold hover:border-yellow-500 rounded-sm btn-outline">
                    <i class="bi bi-upload"></i> 
                </button>
                <button class="btn rounded-sm btn-square btn-outline">
                    <i class="bi bi-save"></i> 
                </button>
                <button class="btn btn-square border-red-500 text-red-600 hover:bg-red-500 hover:text-white font-bold hover:border-red-500 rounded-sm btn-outline">
                    <i class="bi bi-x-lg"></i> 
                </button>
            </div> 
        </form>
    </main>
</x-adminLayout>
