<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('co-animal TOP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <img src="{{ asset('images/lp_image02.png') }}" alt="">
            </div>
        </div>
                
                
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
            <div class="text-center">
                <p  class="font-semibold text-gray-600 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">新着順</p>
                <!--新着の投稿をアップする-->
                <!--フロントに全部出すデータ-->
                <a href="content"  class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('もっと見る') }}</a>
                </div>
                <div class="text-center">
                <!--<p>おすすめアカウント</p>-->
                <!--おすすめアカウントを1つアップする-->
                    <a href="partner" class="hidden">
                        {{ __('もっと見る') }}
                    </a>
            </div>
        </div>
        <div>
            <a href=resources/views/service.blade.php><img src="{{ asset('images/banner01.png') }}" alt="" class="mx-auto"></a>
        </div>
    </div>
    
</x-app-layout>
