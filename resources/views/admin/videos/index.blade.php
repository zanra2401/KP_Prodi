<x-layout>
    <x-adminNav>
        <div   class="p-5 h-screen  w-full">
            <form action="/admin/studio/videos" method="GET" class="input w-full input-bordered flex items-center rounded-md gap-2">
                @csrf
                <input type="text" name="search" class="grow" placeholder="Search" value="{{ request()->query('search') }}" />
                <button class="bg-blue-800 text-white p-2 rounded-md">
                    Search
                </button>
            </form>
    
            {{-- Video Container --}}
            <div   class="mt-5 h-screen grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">
                @foreach ($videos as $video)
                <div>
                    <iframe loading="lazy" class="w-full rounded-sm shadow-gray-300 shadow-sm aspect-video" src="{{$video->link_video}}"" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="flex justify-between p-2">
                        <span>
                            <h2 class="font-bold text-gray-700 font-sans">{{ $video->title_video }}</h2>
                            <p>{{ $video->created_at->diffForHumans() }}</p>
                        </span>
                        <form action="/admin/studio/videos/{{$video->id_video}}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="z-10 px-4 shadow-sm shadow-gray-600 flex justify-center items-center rounded-md bg-red-800 text-white aspect-square
                            hover:bg-red-600 hover:shadow-lg hover:scale-110 transition-all duration-200">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach

                <div>
                    <a href="{{ $previous }}">Previous</a>
                    <a href="{{ $next }}">Next</a>
                </div>
            </div>



            {{-- Pop Up --}}
            <!-- Trigger Button -->
            <div x-data="{ isOpen: false }">
                <div class="fixed bottom-4 right-4 z-50">
                    <button 
                        @click="isOpen = true"
                        class="bg-[#4d1b80] text-white p-4 py-2 aspect-square rounded-full hover:bg-[#7127BA] transition-colors"
                    >
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </div>
                
                <!-- Modal -->
                <div 
                    x-show="isOpen"
                    x-transition
                    class="fixed inset-0 z-40 flex items-center justify-center bg-black bg-opacity-50"
                >
                    <!-- Modal Content -->
                    <div class="relative w-full max-w-sm bg-white dark:bg-gray-800 rounded-xl p-4">
                        <!-- Close Button -->
                        <button 
                            type="button" 
                            @click="isOpen = false"
                            class="absolute top-2 right-2 rtl:right-auto rtl:left-2"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span class="sr-only">Close</span>
                        </button>
                    
                        <!-- Modal Body -->
                        <form action="/admin/studio/videos" method="POST">
                            @csrf
                            @method('POST')
                            <div class="space-y-2 p-2 pt-5">
                                <input name="link_video" type="text">
                                <input name="title_video" type="text">
                            </div>
                        
                            <!-- Modal Footer -->
                            <div class="space-y-2 text-right">
                                <!-- Batal Button -->
                                <button 
                                    type="button"
                                    @click="isOpen = false"
                                    class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                                >
                                    Batal
                                </button>

                                <button 
                                    type="submit"
                                    class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                                >
                                    Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
            
        </div>

    </x-adminNav>
</x-layout>



