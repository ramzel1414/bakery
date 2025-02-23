<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Ramz-Bakeshop</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      
      @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
      <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
      <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
          <header class="items-center justify-end gap-2 pt-6">
              @if (Route::has('login'))
                  <nav class="-mx-3 flex flex-1 justify-end">
                      @auth
                          <a
                              href="{{ url('/dashboard') }}"
                              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                          >
                              Dashboard
                          </a>
                      @else
                          <a
                              href="{{ route('login') }}"
                              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                          >
                              Log in
                          </a>

                          @if (Route::has('register'))
                              <a
                                  href="{{ route('register') }}"
                                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                              >
                                  Register
                              </a>
                          @endif
                      @endauth
                  </nav>
              @endif
          </header>

          <main>
            <div class="m-8">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center items-center">
    
                    <div class="flex flex-col gap-2">
                        <div class="p-4 text-gray-900 dark:text-gray-100 text-left" style="font-size: 2.5rem; line-height:2rem; color:yellow;">{{ __("Ramz Bakeshoppe") }}
                        </div>
                        <div class="px-4 pb-4 dark:text-gray-100 text-left" style="font-size: 2.5rem; line-height:2rem;">{{ __("The #1 Choice for  Filipino Bread!") }}</div>
                        <div class="text-left p-4 text-gray-900 dark:text-gray-100" style="font-size: 1.5rem; line-height:2.25rem">
                            {{ __("Freshly Baked Goodness, Loved by Filipinos. Franchise Now or Order Online!") }}
                        </div>
                        <div class="p-4 flex gap-4"> 
                            <x-primary-button>{{ __('Franchise Now') }}</x-primary-button>
                            <x-secondary-button>{{ __('Order Online') }}</x-primary-button>
                        </div>
                    </div>
    
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('images/shop.png') }}" alt="Bakeshop" class="h-4/6 w-auto">
                        </a>
                    </div>
                </div>
              </div>
            </div>

            {{-- grid layout section --}}
            <div class="p-1 md:mt-8 flex flex-wrap items-center justify-center md:gap-8">
              @foreach ($bread as $bread)
                <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-800 rounded-lg max-w-xs shadow-lg">
                  <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                      style="transform: scale(1.5); opacity: 0.1;">
                      <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                      <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                  </svg>
                  <div class="relative pt-10 px-10 flex items-center justify-center">
                      <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                          style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                      </div>
                      <img class="relative w-50 h-60 object-cover" src="/postimage/{{$bread->image}}" alt="">
                  </div>
                  <div class="relative dark:text-white px-6 pb-6 mt-6">
                      <span class="block opacity-75 -mb-1">Ramram</span>
                      <div class="flex justify-between">
                          <span class="block font-semibold text-xl">{{$bread->name}}</span>
                          <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                      </div>
                  </div>
                </div>
              @endforeach

          
            </div>

          </main>

          <footer class="py-16 text-center text-sm text-black dark:text-white/70">
              Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
