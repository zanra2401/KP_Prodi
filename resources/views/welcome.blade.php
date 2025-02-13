<x-layout>
    <x-navbar></x-navbar>
    <div class="relative bg-[url('https://pif.trunojoyo.ac.id/wp-content/uploads/universitas-trunojoyo-madura-1.jpg')] bg-cover h-screen overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="flex h-screen relative z-10 md:pl-[100px] md:text-start justify-center md:justify-between">
            <div class="self-center text-center md:text-start">
                <p class="text-white text-[17px] md:text-[40px] font-[Poppins]">Media</p>
                <p class="text-white text-[20px] md:text-[50px] font-[Poppins] font-bold">{{ __('user.tif') }}</p>
                <p class="text-white text-[20px] md:text-[50px] font-[Poppins] font-bold">{{ __('user.utm') }}</p>
                <form action="">
                    <div class="relative">
                        <input type="text" class="w-full md:w-[500px] h-[50px] mt-3 rounded-full pl-10 pr-10 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 text-center md:text-start" placeholder=`{{ __('user.search') }}`>
                      </div>
                </form>
            </div>  
            <div class="w-[500px] self-end mb-7 hidden md:block">
                <p class="font-bold text-[20px] text-white">{{ __('user.news') }} :</p>
                <div x-data="carouselData()" x-init="startAutoScroll()" class="relative w-full overflow-hidden">
                    {{-- progress indikator --}}
                    <div class="absolute top-0 left-0 w-full flex justify-between items-center p-4">
                        <span x-text="String(activeIndex + 1).padStart(2, '0')"></span>
                        <div class="w-2/3 h-1 bg-gray-300 rounded-full overflow-hidden">
                            <div class="h-full bg-white transition-all duration-300" 
                                :style="'width: ' + ((activeIndex + 1) / totalItems * 100) + '%'">
                            </div>
                        </div>
                        <span x-text="String(totalItems).padStart(2, '0')"></span>
                    </div>
                
                    {{-- Carousel --}}
                    <div class="flex gap-4 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide px-4" 
                        x-ref="carousel"
                        @scroll.debounce="updateActiveIndex()">
                        
                        <template x-for="(item, index) in items" :key="index">
                            <div class="snap-center shrink-0 w-80 relative bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-lg p-4">
                                <img :src="item.src" class="w-full h-40 object-cover rounded-lg" />
                                <h3 class="text-white text-lg mt-2" x-text="item.title"></h3>
                                <p class="text-gray-300 text-sm" x-text="item.camera"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <section id="video">
        <div class=" md:px-[100px] mt-[100px] font-[AnonymousPro]">
            <div class="text-center md:text-start">
                <p class="text-[40px] font-bold">{{ __('user.tv') }}</p>
            </div>
        </div>
        <hr class="border border-black mt-5">
        <div class="my-5 md:px-[100px]">
            <div class="flex justify-center md:justify-start">
                <div class="flex justify-center items-center">
                    <div class="mx-3">
                        <div class="relative cursor-pointer p-5 bg-slate-500/80 rounded-lg shadow-2xl hover:shadow-slate-400/50 transition-shadow duration-300 group">
                            <iframe 
                                id="youtube-video"
                                class="rounded-lg transition-transform duration-300 group-hover:scale-105" 
                                src="https://www.youtube.com/embed/YRfyrphg3D4?si=dJnJFeW8mKi96r1l&enablejsapi=1" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                            <div class="absolute top-0 left-0 w-full h-full bg-black/50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300" onclick="openPopup()">
                                <span class="text-white text-xl bg-black/70 px-4 py-2 rounded">Klik untuk Memutar</span>
                            </div>
                        </div>
                        <div id="video-popup" class="hidden">
                            <div class="fixed top-0 left-0 w-full h-full bg-black/75 flex justify-center items-center z-40">
                                <div class="bg-white rounded-lg p-4 w-[90%] max-w-3xl h-[400px] flex justify-center items-center relative">
                                    <button class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded" onclick="closePopup()">X</button>
                                    <iframe 
                                        id="popup-video"
                                        class="rounded-lg w-full h-full" 
                                        src="https://www.youtube.com/embed/YRfyrphg3D4?si=dJnJFeW8mKi96r1l&enablejsapi=1" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="photo">
        <div class="text-center md:text-start md:px-[100px] mt-[100px] font-[AnonymousPro]">
            <div class="text-center md:text-start">
                <p class="text-[40px] font-bold">{{ __('user.galery') }}</p>
            </div>
        </div>
        <hr class="border border-black mt-5">
        <div class="my-5 md:px-[100px]">
            <div class="flex justify-center md:justify-start">
                <div class="flex justify-center items-center">
                    <div class="mx-3">
                        <div class="w-[300px] md:w-[400px]">
                            <div class="relative w-full max-w-3xl mx-auto text-white">
                                <div class="relative">
                                    <img src="https://scorpionkurniawan.wordpress.com/wp-content/uploads/2013/06/gedung-rektorat.jpg" alt="Exoplanet" class="w-full h-auto rounded-lg">
                                </div>
                                <div class="absolute bottom-0 md:bottom-5 bg-black/60 px-4 w-full">
                                    <h2 class="text-xl font-bold mt-1">Gedung Rektorat</h2>
                                    <p class="text-sm mt-1">Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout>

<script>
    function carouselData() {
        return {
            activeIndex: 0,
            totalItems: 3,
            items: [
                { src: 'https://informatika.trunojoyo.ac.id/assets/gambarDB/berita/prodi/f20240711085204668f3ac4df902.jpg', title: 'Pengabdian Masyarakat Prodi Teknik Informatika terhadap Guru MGMP Kabupaten Bangkalan', camera: 'Baca Selengkapnya...' },
                { src: 'https://informatika.trunojoyo.ac.id/assets/gambarDB/berita/prodi/f2024053110111266593fd07a6d5.jpg', title: 'Rapat Peningkatan Mutu Program Studi Teknik Informatika UTM', camera: 'Baca Selengkapnya...' },
                { src: 'https://informatika.trunojoyo.ac.id/assets/gambarDB/berita/prodi/f202501231446336791f3d9c53a4.jpg', title: 'Rapat Tinjauan Mutu Prodi Teknik Informatika', camera: 'Baca Selengkapnya...' }
            ],
            startAutoScroll() {
                setInterval(() => {
                    this.activeIndex = (this.activeIndex + 1) % this.totalItems;
                    this.scrollToActive();
                }, 3000);
            },
            scrollToActive() {
                this.$refs.carousel.children[this.activeIndex];
            },
            updateActiveIndex() {
                this.activeIndex = Math.round(this.$refs.carousel.scrollLeft / this.$refs.carousel.clientWidth);
            }
        };
    }
    function openPopup() {
        document.getElementById('video-popup').classList.remove('hidden');
        document.getElementById('popup-video').src += "&autoplay=1";
    }
    
    function closePopup() {
        document.getElementById('video-popup').classList.add('hidden');
        document.getElementById('popup-video').src = "https://www.youtube.com/embed/YRfyrphg3D4?si=dJnJFeW8mKi96r1l&enablejsapi=1";
    }
</script>