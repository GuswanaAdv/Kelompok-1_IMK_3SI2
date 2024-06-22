<!-- Footer -->
<footer class="bg-gradient-to-r from-lime-500 from-5% via-green via-10% to-darkgreen to-95% text-white py-4 mt-4">
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-evenly sm:flex-row md:items-start border-b border-gray-300 pb-4">
            <div class="flex space-x-2 py-4 px-16 justify-center sm:justify-start">
                <img src="https://jatinegara.kec-sempor.kebumenkab.go.id/assets/logo/kbm.png" alt="Logo" class="h-10">
                <h2 class="text-lg font-bold fade-in">Desa Jatinegara</h2>
            </div>
            <div class="md:px-10 px-4"></div>
            <div class="grid grid-cols-2 gap-4 mt-2 md:flex md:space-x-4 px-12 py-4">
                <a href="https://api.whatsapp.com/send?phone=62895389410293" class="flex  md:items-center space-x-2 mb-2 md:mb-0">
                    <img src="https://www.aandrijftechnischburo.nl/files/theme/images/waicon.png" alt="WhatsApp" class="h-6">
                    <span class="fade-left">WhatsApp</span>
                </a>
                <a href="https://www.facebook.com/adm.pemdes.7" class="flex pr-1 sm:pr-0 justify-end sm:justify-start md:items-center space-x-2 mb-2 md:mb-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/300px-Facebook_icon_2013.svg.png" alt="Facebook" class="h-6">
                    <span class="fade-left">Facebook</span>
                </a>
                <a href="https://x.com/JatinegaraHumas" class="flex md:items-center space-x-2 mb-2 md:mb-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/124/124021.png" alt="Twitter" class="h-6">
                    <span class="fade-left">Twitter</span>
                </a>
                <a href="https://www.instagram.com/humas.jatinegara" class="flex justify-end sm:justify-start md:items-center space-x-2 mb-2 md:mb-0">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-512.png" alt="Instagram" class="h-6">
                    <span class="fade-left">Instagram</span>
                </a>
                <a href="https://www.youtube.com/channel/UCGmJkNl2KFfXnR9o_YETK0Q/videos" class="flex md:items-center space-x-2 mb-2 md:mb-0">
                    <img src="https://pngimg.com/d/youtube_PNG1.png" alt="YouTube" class="h-6">
                    <span class="fade-left">YouTube</span>
                </a>
            </div>            
        </div>
        <div class="mt-4 flex flex-col sm:flex-row justify-evenly">
            <div class="mb-4 sm:mb-0">
                <div>
                    <h3 class="text-lg font-semibold mb-2 text-left fade-up">Tentang Kami:</h3>
                </div>
                <div>
                    <p class="py-2 fade-left">Website Resmi Desa Jatinegara</p>
                    <p class="py-2 fade-right">Kecamatan Sempor Kabupaten Kebumen</p>
                    <p class="py-2 fade-left">Jawa Tengah</p>
                </div>
            </div>
            <div class="px-5"></div>
            <div class="flex flex-col space-y-2">
                <p class="py-1 fade-left"><span class="font-bold">Alamat:</span> Jl. Kemasan B.13 Jatinegara Kec. Sempor</p>
                <p class="py-1 fade-right"><span class="font-bold">Telepon:</span> (0287) 471361</p>
                <p class="py-1 fade-left"><span class="font-bold">Email:</span> pemdes.jatinegara@gmail.com</p>
                <p class="py-1 fade-right"><span class="font-bold">Kode POS:</span> 54471</p>
            </div>
        </div>
    </div>
    <script>
        gsap.utils.toArray('img').forEach(img => {
            gsap.fromTo(img, {
              opacity: 0,
          },{
              opacity: 1,
              duration: 3,
              delay: 0.5,
              scrollTrigger:img
          });
        })
    </script>
</footer>
