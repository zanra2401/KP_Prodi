<body  x-data="{ open: true }">
    <!-- Sidebar -->
    <div class="relative z-20">
        <div class="fixed top-0 left-0 h-screen bg-gray-800 text-white transition-all duration-300 shadow-lg"
             :class="open ? 'w-64' : 'w-16'">
            <!-- Tombol Toggle -->
            <button @click="open = !open" class="p-4 focus:outline-none w-full flex items-center hover:bg-gray-900">
                <i class="bi bi-caret-right text-[25px] transition-transform" :class="open ? 'rotate-180' : ''"></i>
                <span x-show="open" class="ml-3">Close</span>
            </button>

            <!-- Menu Items -->
            <nav class="mt-4 flex-col h-full">
                <a href="" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-house text-[25px]"></i>
                    <span x-show="open" class="ml-3">All Content</span>
                </a>
                <a href="/admin/studio/fotos" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-image text-[25px]"></i>
                    <span x-show="open" class="ml-3">Picture</span>
                </a>
                <a href="/admin/studio/videos" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-camera-video text-[25px]"></i>
                    <span x-show="open" class="ml-3">Video</span>
                </a>
                <a href="/admin/studio/article" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-file-earmark-text text-[25px]"></i>
                    <span x-show="open" class="ml-3">Article</span>
                </a>
                <hr class="border-2 border-gray-700 mt-10">
                <a href="register" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-person-add text-[25px]"></i>
                    <span x-show="open" class="ml-3">Register Admin</span>
                </a>
                <a href="" class="flex items-center p-4 hover:bg-gray-700 transition-all">
                    <i class="bi bi-gear text-[25px]"></i>
                    <span x-show="open" class="ml-3">Setting</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class=" transition-all duration-300 -z-10"
         :class="open ? 'md:ml-64' : 'md:ml-16'">
         <div class="flex justify-between bg-gray-300 p-4">
            <div class="self-center">
                <a href="" class="font-bold font-[Gugi] text-[30px] text-blue-700 md:block hidden">Tif Studio</a>
            </div>
         </div>
        {{ $slot }}
    </div>
</body> 

