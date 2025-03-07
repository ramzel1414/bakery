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
    <img id="background" class="absolute -left-80 top-0 max-w-[877px] h-full" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel ba ckground" />
    {{-- <div class="flex flex-col justify-center w-full">
      <div></div>
      <img class="" style="width: 400px;" src="/postimage/{{$bread->image}}" alt="bread-image">
    </div> --}}
    <div class="m-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center items-center gap-12">

            <div class="flex flex-col gap-2">
                <div class="p-4 text-gray-900 dark:text-gray-100 text-left" style="font-size: 2.5rem; line-height:2rem; color:yellow;">{{$bread->name}}
                </div>
                <div class="text-left p-4 text-gray-900 dark:text-gray-100" style="font-size: 1.5rem; line-height:2.25rem">
                    {{$bread->description}}
                </div>
                <div class="p-4 flex gap-4"> 
                    <x-primary-button>{{ __('Order Now') }}</x-primary-button>
                    <x-secondary-button >{{ __('Back') }}</x-primary-button>
                </div>
            </div>

            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                  <img class="" style="width: 500px;" src="/postimage/{{$bread->image}}" alt="bread-image">
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>