<x-app-layout>

  @include('sweetalert::alert')
  
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('New Bread') }}
      </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
          <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Bread Information') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __("Incorporate your bread binformation and image.") }}
                </p>
            </header>
            <form method="POST" action="{{ route('create-bread') }}" enctype="multipart/form-data"class="mt-6 space-y-6">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"  required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('description')" />
                </div>

                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <x-image-input id="image" name="image" type="file" class="mt-1 block w-full"  required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>


                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Add') }}</x-primary-button>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>