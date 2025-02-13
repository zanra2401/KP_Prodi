<x-layout>
    <x-navbar></x-navbar>
    <div style="background-image:url('/images/UTM.png')" class="relative bg-cover h-screen overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="flex h-screen relative z-10 justify-center">
            <div class="self-center text-center">
                <p class="text-white text-[17px] md:text-[40px] font-[Poppins]">{{ __('user.article') }}</p>
                <p class="text-white text-[20px] md:text-[50px] font-[Poppins] font-bold">{{ __('user.tif') }}</p>
                <p class="text-white text-[20px] md:text-[50px] font-[Poppins] font-bold">{{ __('user.utm') }}</p>
                <form action="">
                    <div class="relative">
                        <input type="text" class="w-full md:w-[500px] h-[50px] mt-3 rounded-full pl-10 pr-10 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 text-center" placeholder=`{{ __('user.search') }}`>
                      </div>
                </form>
            </div>  
        </div>
    </div>
    <div class="my-16 md:px-16">
        <div class="flex justify-between mb-4 px-5 md:px-16">
            <div class=" font-[Gugi] text-blue-700 md:text-xl font-bold self-center">
                <p class="font-normal text-sm">
                    {{ __('user.article') }}
                </p>
                <p>
                    {{ __('user.tif') }}
                </p>
            </div>
            <div class="self-center text-blue-700">
                <form action="/action_page.php" class="flex items-center bg-transparent p-3 rounded-lg">
                    {{-- Ini nanti dikasih looping untuk database category --}}
                    <select id="category" name="category" 
                        class="px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border border-black">
                        <option value="" disabled selected>Category</option>
                        <option value="academic">Academic</option>
                        <option value="lecture">Lecture</option>
                        <option value="student">Student</option>
                    </select>
                    
                    <button type="submit" name="submit" 
                        class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 transition duration-200">
                        <i class="bi bi-funnel-fill"></i>
                    </button>
                </form>                
            </div>
        </div>
        <div class="max-w-md md:max-w-6xl mx-auto p-4 flex flex-col md:flex-row bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Image Section -->
            <div class="w-full ">
                <img src="https://informatika.trunojoyo.ac.id/assets/gambarDB/berita/prodi/t2025020414161367a1bebd5cb85.jpeg" 
                     alt="Pengabdian Masyarakat" 
                     class="w-full h-60 object-cover">
            </div>
            
            <!-- Content Section -->
            <div class="p-4 text-center md:text-start">
                <h2 class="font-bold text-2xl leading-tight">Rapat Pengembangan Program Studi Teknik Informatika</h2>
                <p class="mt-2 text-gray-600 text-sm">Penulis: <span class="font-medium">Admin 1</span></p>
                <p class="mt-4 text-gray-700 text-sm leading-relaxed">Rapat Pengembangan Program Studi Teknik Informatika yang dipimpin oleh Kaprodi Teknik Informatika, Dr. Fika Hastarita Rachman, S.T., M.Eng, UTM pada tanggal 4 Januari 2025 bertempat di Rektorat Lantai 4,</p>
                
                <!-- Button Section -->
                <div class="mt-4">
                    <button class="px-4 py-2 flex items-center justify-center gap-2 border border-black rounded-full text-sm font-medium hover:bg-black hover:text-white transition active:scale-95 w-full">
                        <i class="bi bi-arrow-right text-lg"></i>
                        Baca Selengkapnya
                    </button>
                </div>
            </div>
        </div>
        
    </div>
    <x-footer></x-footer>
</x-layout>