<x-app-layout>


    <div class="py-12">
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
                        <img src="{{ asset('images/bread.png') }}" alt="Your bread" class="h-4/6 w-auto">
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
