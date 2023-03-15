<!-- resources/views/tweet/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Show Tweet Detail') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
              <div class="flex items-center justify-left mt-4">
                <a href="{{ url()->previous() }}">
                  <x-secondary-button class="ml-3">
                    {{ __('Back') }}
                  </x-primary-button>
                </a>
            </div>
            <!--アカウントについて-->
                <div class="flex flex-col mb-4">
                  <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="title_partner">
                    {{$partner->title_partner}}
                  </p>
                </div>
                <div class="flex flex-col mb-4">
                  <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="name">
                    {{$partner->name}}
                  </p>
                </div>
                <div class="flex flex-col mb-4">
                    <img src="{{ asset('storage/partners/'.$partner->image_partner)}}"　class="mx-auto">
                </div>
                <div class="flex flex-col mb-4">
                  <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="description_partner">
                    {{$partner->description_partner}}
                  </p>
                </div>
            
            <!--音声ファイルについて-->
                
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

