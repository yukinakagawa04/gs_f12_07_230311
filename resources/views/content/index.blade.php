<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('コンテンツの一覧') }}
    </h2>
  </x-slot>
      @include('components/content-view')

</x-app-layout>