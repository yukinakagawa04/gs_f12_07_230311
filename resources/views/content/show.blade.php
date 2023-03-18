<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('コンテンツの詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
                <!--タイトル-->
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200" id="title_content">{{$content->title_content}}</p>
                <!--画像-->
                    <img src="{{ asset('storage/contents/images/'.$content->image_content)}}"　class="mx-auto" >
                <!--音声ファイル-->
                    <audio controls src="{{ asset('storage/contents/audios/'.$content->audio)}}"></audio>
            </div>
            <!-- favorite 状態で条件分岐 -->
                      @if($content->users()->where('user_id', Auth::id())->exists())
                      <!-- unfavorite ボタン -->
                      <form action="{{ route('unfavorites',$content) }}" method="POST" class="text-left">
                        @csrf
                        <x-primary-button class="ml-3">
                          <svg class="h-6 w-6 text-red-500" fill="red" viewBox="0 0 24 24" stroke="red">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                          </svg>
                          {{ $content->users()->count() }}
                        </x-primary-button>
                      </form>
                      @else
                      <!-- favorite ボタン -->
                      <form action="{{ route('favorites',$content) }}" method="POST" class="text-left">
                        @csrf
                        <x-primary-button class="ml-3">
                          <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                          </svg>
                          {{ $content->users()->count() }}
                        </x-primary-button>
                      </form>
                      @endif
            <div class="flex items-center justify-end mt-4">
            <a href="{{ url()->previous() }}">
              <x-secondary-button class="ml-3">
                {{ __('Back') }}
              </x-primary-button>
            </a>
            <!--コメント入力-->

            <!--コメント表示-->

            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>