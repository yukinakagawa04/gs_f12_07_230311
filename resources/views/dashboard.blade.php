<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('co-animal TOP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <img src="{{ asset('images/lp_image02.png') }}" alt="">
                </div>
                
                <div class="text-center">
                <p>新着順</p>
                <!--新着の投稿を3つアップする-->
                
                    <a href="route('content.index')" :active="request()->routeIs('content.index')">
                        {{ __('もっと見る') }}
                    </a>
                </div>
                <div class="text-center">
                <p>おすすめアカウント</p>
                <!--おすすめアカウントを1つアップする-->
                    <a href="route('partner.index')" :active="request()->routeIs('partner.index')">
                        {{ __('もっと見る') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
