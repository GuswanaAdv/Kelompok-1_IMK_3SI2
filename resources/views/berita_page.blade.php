@extends('layouts.app')
@section('head')
<style>
body {
  font-family: 'Inter', sans-serif;
  font-weight: 200;
}
</style>
@endsection

@section('content')
<div class="pt-16">
  <main class="container mx-auto my-8 bg-white px-24 py-8 rounded-lg shadow-lg">
    <article>
      <h2 class="text-2xl font-bold mb-4">DESA JATINEGARA MENGADAKAN SAYEMBARA</h2>
      <div class="flex justify-between items-center mb-2">
        <div class="text-gray-500 text-sm">
          <span>on June 7, 2024</span>
          <span> by Won-joon Choi</span>
        </div>
        <div class="flex items-center">
          <div class="flex items-center space-x-2">
            <span class="text-gray-500">Share</span>
            <a href="javascript:;" class="btn_share text-gray-500 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
              </svg>
            </a>
            <button class="btn_print text-gray-500 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="separator border-t border-gray-300 mb-4"></div>
      <img src="https://picsum.photos/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
      <div class="mb-6">
        <h3 class="text-xl font-bold text-green-700 mb-2">Lorem Ipsum is not simply</h3>
        <p class="text-lg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
        <p>&nbsp;</p>
        <h3 class="text-xl font-bold text-green-700 mb-2">Lorem Ipsum is not simply</h3>
        <p class="text-lg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage </p>
        <p>&nbsp;</p>
        <p class="text-lg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage. When Galaxy AI launched the Chinese (Hong Kong) language option, the customer feedback showed that the hard work of the Samsung R&D team was justified. </p>
      </div>
      <div class=" separator border-t border-gray-300 mb-4"></div>
      <div class="mb-6">
        <button class="bg-green-100 text-green-700 py-0 px-4 rounded-lg mr-2">Kategori 1</button>
        <button class="bg-green-100 text-green-700 py-0 px-4 rounded-lg mr-2">Kategori 2</button>
      </div>
    </article>
    <div class=" separator border-t border-gray-300 mb-4"></div>
    
    <section>
      <h3 class="text-xl font-bold mb-4">ARTIKEL TERKAIT</h3>
      <!-- Container for all cards -->
      <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-4">
        <!-- Card -->
        <div>
          <a href="#!">
            <img width="1920" height="1280" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
          </a>
          <div class="flex p-4 pl-0 pb-0 bg-white text-neutral-100">
            <span class="text-gray-500 text-xs">Emir Bardakçı</span> &nbsp;&nbsp; <span class="text-gray-500 text-xs">6 months ago</span>
          </div>
          <div class="p-4 pl-0 pt-0">
            <h5 class="mb-2 text-lg font-bold tracking-wide text-neutral-800"> HyperOS moon super wallpaper is out, get APK for your Xiaomi </h5>
          </div>
        </div>
        <!-- End of Card -->

        <!-- Card -->
        <div>
          <a href="#!">
            <img width="1920" height="1280" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
          </a>
          <div class="flex p-4 pl-0 pb-0 bg-white text-neutral-100">
            <span class="text-gray-500 text-xs">Emir Bardakçı</span> &nbsp;&nbsp; <span class="text-gray-500 text-xs">6 months ago</span>
          </div>
          <div class="p-4 pl-0 pt-0">
            <h5 class="mb-2 text-lg font-bold tracking-wide text-neutral-800"> HyperOS moon super wallpaper is out, get APK for your Xiaomi </h5>
          </div>
        </div>
        <!-- End of Card -->

        <!-- Card -->
        <div>
          <a href="#!">
            <img width="1920" height="1280" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
          </a>
          <div class="flex p-4 pl-0 pb-0 bg-white text-neutral-100">
            <span class="text-gray-500 text-xs">Emir Bardakçı</span> &nbsp;&nbsp; <span class="text-gray-500 text-xs">6 months ago</span>
          </div>
          <div class="p-4 pl-0 pt-0">
            <h5 class="mb-2 text-lg font-bold tracking-wide text-neutral-800"> HyperOS moon super wallpaper is out, get APK for your Xiaomi </h5>
          </div>
        </div>
        <!-- End of Card -->

        <!-- Card -->
        <div>
          <a href="#!">
            <img width="1920" height="1280" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
          </a>
          <div class="flex p-4 pl-0 pb-0 bg-white text-neutral-100">
            <span class="text-gray-500 text-xs">Emir Bardakçı</span> &nbsp;&nbsp; <span class="text-gray-500 text-xs">6 months ago</span>
          </div>
          <div class="p-4 pl-0 pt-0">
            <h5 class="mb-2 text-lg font-bold tracking-wide text-neutral-800"> HyperOS moon super wallpaper is out, get APK for your Xiaomi </h5>
          </div>
        </div>
        <!-- End of Card -->
      </div>
    </section>
  </main>
  <div class="mt-6 mb-8 text-center">
    <button class="border-2 border-green-700 text-green-700 py-1 px-6 rounded-full">Berita Lainnya</button>
  </div>
</div>
@endsection