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
<div class="pt-0">
  <main class="container mx-auto my-2 bg-white py-8 px-5 md:px-15 lg:px-28 rounded-lg shadow-lg">
    <article>
      <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold mb-4">{{ $berita->judul}}</h2>
      <div class="flex justify-between items-center mb-2">
        <div class="text-gray-500 text-xs sm:text-sm">
          <span>{{ \Illuminate\Support\Carbon::parse($berita->published_datetime)->format('j F Y') }}</span>
          <span> oleh Jatinegara</span>
        </div>
        <div class="flex items-center">
          <div class="flex items-center space-x-2">
            <span class="hidden sm:block text-gray-500">Share</span>
            <button data-collapse-target="collapse" class="hidden sm:block btn_share text-gray-500 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
              </svg>
            </button>
            <button onclick="window.print()" class="hidden sm:block btn_print text-gray-500 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Overlay -->
      <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

      <!-- Float Share -->
      <div class="fixed bottom-14 right-2">
        <div class="other-buttons hidden">
        <button id="mail" class="block sm:hidden bg-gray-200 hover:bg-white text-black font-bold py-2 px-2 rounded-full shadow-lg">
              <a id="email-url" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
              </a>
        </button>
        <button id="link" class="mt-2 block sm:hidden bg-gray-200 hover:bg-white text-black font-bold py-2 px-2 rounded-full shadow-lg">
              <a>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9q-.13 0-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4 4 0 0 1-.82 1H12a3 3 0 1 0 0-6z"/>
              </svg>
              </a>
        </button>
        </div>
        <button id="share" class="mt-2 block sm:hidden bg-green-700 hover:bg-green-500 text-white font-bold py-2 px-2 rounded-full shadow-lg">
              <a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
              </svg>
              </a>
        </button>
        <button id="close" class="hidden mt-2 block sm:hidden bg-green-700 hover:bg-green-500 text-white font-bold py-2 px-2 rounded-full shadow-lg">
              <a>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="transform: scale(1.7);" >
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
              </svg>
              </a>
        </button>
      </div>
      <div class="other-buttons hidden fixed bottom-14 right-12">
        <button id="threads" class="block sm:hidden bg-gray-200 hover:bg-white text-black font-bold py-2 px-2 rounded-full shadow-lg">
              <a id="thread-url" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
              </svg>
              </a>
        </button>
        <button id="fb" class="mt-2 block sm:hidden bg-gray-200 hover:bg-white text-black font-bold py-2 px-2 rounded-full shadow-lg">
              <a id="fb-url" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> 
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
              </a>
        </button>
        <button id="twitter" class="mt-2 block sm:hidden bg-gray-200 hover:bg-white text-black font-bold py-2 px-2 rounded-full shadow-lg">
              <a id="tweet-url" href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
              </svg>
              </a>
        </button>
      </div>
      <!-- End of Float Share -->

      <div class="separator border-t border-gray-300"></div>
      <div data-collapse="collapse" class="hidden sm:block h-0 w-full mb-4 basis-full overflow-hidden transition-all duration-300 ease-in-out">
        <div class="relative w-full bg-green-700 bg-clip-border text-gray-700 flex justify-center items-center">
        <div class="flex p-5 items-center gap-1 md:gap-3 md:flex-row">
            <a id="fb-link" class="text-white hover:text-orange-600 flex items-center justify-center rounded-full border border-white w-7 h-7" aria-label="Icon 1" href="#" target="_self">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> 
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
            </a>
            <a id="tweet-link" class="text-white hover:text-orange-600 flex items-center justify-center rounded-full border border-white w-7 h-7" aria-label="Icon 2" href="#" onclick="tweetCurrentPage()" target="_self" title="X">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
              </svg>
            </a>
            <a id="thread-link" class="text-white hover:text-orange-600 flex items-center justify-center rounded-full border border-white w-7 h-7" aria-label="Icon 3" href="#" onclick="shareOnThreads()" target="_self">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
              </svg>
            </a>
            <a id="email-link" class="text-white hover:text-orange-600 flex items-center justify-center rounded-full border border-white w-7 h-7" aria-label="Icon 4" href="#" onclick="emailCurrentPage()" target="_self">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </a>
        </div>
        <p class="text-white text-sm" id="url"></p>
        <div class="mx-0 sm:mx-5 bg-green-100 text-green-700 py-2 px-2 rounded-xl font-bold text-xs">
          <button id="urlcopy" onclick="copyurl()">URL copy</button>
        </div>
        </div>
      </div>
      
      <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
      <div id="konten" class="mb-6">
        {!! $berita->konten !!}
      </div>
      <div class=" separator border-t border-gray-300 mb-4"></div>
      <div class="mb-4 text-sm sm:text-base md:text-lg lg:text-xl">
      <a href="{{ route('berita.pagination', ['berita[]' => $berita->kategori]) }}">
        <button name="berita[]" value="{{ $berita->kategori }}" class="bg-green-100 text-green-700 py-0 px-4 rounded-lg mr-2">{{$berita->kategori}}</button>
      </a>
      </div>
    </article>
    <div class=" separator border-t border-gray-300 mb-4"></div>
    
    <section>
      <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-bold mb-4">ARTIKEL TERKAIT</h3>
      @if($relatedArticles->isEmpty())
          <p class="text-gray-500 text-sm sm:text-base md:text-lg lg:text-xl">Tidak ada artikel terkait.</p>
      @else
      <!-- Container for all cards -->
      <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-4">
      @foreach($relatedArticles as $article)
        <!-- Card -->
        <a href="{{ route('beritapage', $article->slug) }}">
        <div class="px-4 transition duration-300 hover:shadow-lg cursor-pointer">
                <img width="1920" height="1280" src="https://picsum.photos/id/188/720/400" alt="{{ $article->judul }}" />
            <div class="flex pt-2 pl-0 pb-0 bg-white text-neutral-100">
                <span class="text-gray-500 text-xs sm:text-sm">Jatinegara</span>&nbsp;&nbsp;
                <span class="text-gray-500 text-xs sm:text-sm">{{ \Illuminate\Support\Carbon::parse($article->published_datetime)->diffForHumans() }}</span>
            </div>
            <div class="p-4 pl-0 pt-0">
                <h5 class="mb-2 text-sm sm:text-base font-bold tracking-wide text-neutral-800">{{ $article->judul }}</h5>
            </div>
        </div>
        </a>
        <!-- End of Card -->
        @endforeach
      </div>
      @endif
    </section>
  </main>
  <div class="mt-6 mb-8 text-center">
    <a href= "{{ route('berita.index') }}">
      <button class="text-sm sm:text-base md:text-lg border-2 border-green-700 text-green-700 py-1 px-6 rounded-full hover:bg-green-700 hover:text-white">Berita Lainnya</button>
    </a>  
  </div>
</div>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
<script>
  document.getElementById("url").innerHTML = window.location.href;

  function copyurl(){
  // Get the text field
  var copyText = document.getElementById("url").innerHTML;

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText);
  
  document.getElementById("urlcopy").innerHTML = "Copied!"

  setTimeout(function() { document.getElementById("urlcopy").innerHTML = "URL Copy"; }, 5000)
  }

  function copylink(){
   // Copy the text inside the text field
  navigator.clipboard.writeText(window.location.href);
  }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = encodeURIComponent(window.location.href);

        var fbLink = document.getElementById('fb-link');
        fbLink.href = 'https://www.facebook.com/sharer.php?u='+ currentUrl;

        var tweetLink = document.getElementById('tweet-link');
        tweetLink.href = "https://twitter.com/intent/tweet?text={{ urlencode($berita->judul) }}&url=" + currentUrl;

        var threadLink = document.getElementById('thread-link');
        threadLink.href = 'https://threads.net/intent/post?text={{urlencode($berita->judul)}} '+currentUrl;

        var emailLink = document.getElementById('email-link');
        emailLink.href = "https://mail.google.com/mail/?view=cm&fs=1&su={{ urlencode($berita->judul) }}"+ "&body=" + currentUrl;
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = encodeURIComponent(window.location.href);

        var fbLink = document.getElementById('fb-url');
        fbLink.href = 'https://www.facebook.com/sharer.php?u='+ currentUrl;

        var tweetLink = document.getElementById('tweet-url');
        tweetLink.href = "https://twitter.com/intent/tweet?text={{ urlencode($berita->judul) }}&url=" + currentUrl;

        var threadLink = document.getElementById('thread-url');
        threadLink.href = 'https://threads.net/intent/post?text={{urlencode($berita->judul)}} '+currentUrl;

        var emailLink = document.getElementById('email-url');
        emailLink.href = "https://mail.google.com/mail/?view=cm&fs=1&su={{ urlencode($berita->judul) }}"+ "&body=" + currentUrl;
    })
</script>

<script>
document.getElementById('share').addEventListener('click', function() {
    // Show overlay and other buttons
    document.getElementById('overlay').classList.remove('hidden');
    var buttons = document.getElementsByClassName('other-buttons');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('hidden');
    }
    // Hide share button and show close button
    document.getElementById('share').classList.add('hidden');
    document.getElementById('close').classList.remove('hidden');
});

document.getElementById('close').addEventListener('click', function() {
    // Hide overlay and other buttons
    document.getElementById('overlay').classList.add('hidden');
    var buttons = document.getElementsByClassName('other-buttons');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.add('hidden');
    }
    // Hide close button and show share button
    document.getElementById('close').classList.add('hidden');
    document.getElementById('share').classList.remove('hidden');
});

document.getElementById('link').addEventListener('click', function() {
    // Hide overlay and other buttons
    document.getElementById('overlay').classList.add('hidden');
    var buttons = document.getElementsByClassName('other-buttons');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.add('hidden');
    }

    document.getElementById('close').classList.add('hidden');
    document.getElementById('share').classList.remove('hidden');
});

document.getElementById('overlay').addEventListener('click', function() {
    // Hide overlay and other buttons
    document.getElementById('overlay').classList.add('hidden');
    var buttons = document.getElementsByClassName('other-buttons');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.add('hidden');
    }
    // Hide close button and show share button
    document.getElementById('close').classList.add('hidden');
    document.getElementById('share').classList.remove('hidden');
});
</script>
@endsection