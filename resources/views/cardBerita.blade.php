
<script>
    let tabs = document.querySelectorAll(".tab")
let indicator = document.querySelector(".indicator")
let panels = document.querySelectorAll(".tab-panel")

indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left + 'px'

tabs.forEach(tab =>{
  tab.addEventListener("click", ()=>{
    let tabTarget = tab.getAttribute("aria-controls")

    indicator.style.width = tab.getBoundingClientRect().width + 'px'
    indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement.getBoundingClientRect().left + 'px'


    panels.forEach(panel =>{
      let panelId = panel.getAttribute("id")
      if(tabTarget === panelId){
        panel.classList.remove("invisible", "opacity-0")
        panel.classList.add("visible", "opacity-100")
      } else {
        panel.classList.add("invisible", "opacity-0")
      }
    })
  })
})
  </script>
{{-- <section class="md:h-full flex items-center text-gray-600"> --}}
    <section class="flex items-center text-gray-600">
        <div class="container px-5 py-0 mx-auto">
       
            <div class="flex flex-wrap -m-4">
                
        @foreach($berita as $berita)
        <div class="p-4 w-full md:w-1/2">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden relative">
                <img class="lg:h-72 md:h-48 w-full object-cover object-center" src="https://picsum.photos/id/188/720/400" alt="blog">
                <div class="absolute top-0 left-0 mt-4 ml-4">
                    <span class="bg-darkgreen text-white px-2 py-1 text-xs font-medium rounded mr-2">{{ $berita->kategori }}</span>
                </div>
                <div class="p-6 hover:bg-darkgreen hover:text-white transition duration-300 ease-in">
                    <h2 class="text-base font-medium text-lime-400 300 mb-1">{{ $berita->formatted_published_datetime }}</h2>
                    <h1 class="text-2xl font-semibold mb-3">{{ $berita->judul }}</h1>
                    <p class="leading-relaxed mb-3">{{ $berita->slug }}</p>
                    <div class="flex items-center flex-wrap">
                        <a class="text-lime-400 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span class="text-gray-400 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm py-1">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>{{ $berita->views }} kali dilihat
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

            </div>
        </div>
    </section>