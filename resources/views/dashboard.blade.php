<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center items-center">
                <div class="flex flex-col">
                    <div class=" p-4 text-gray-900 dark:text-gray-100 text-right" style="font-size: 1.5rem; line-height:1rem; color:yellow;">
                        {{ __("The Number 1") }}
                    </div>
                    <div class="text-center p-4 text-gray-900 dark:text-gray-100" style="font-size: 2.5rem; line-height:2rem">
                        {{ __("Bread nang mga Pilipino!") }}
                    </div>
                </div>
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/bread.png') }}" alt="Your Logo" class="h-24 w-auto">
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
