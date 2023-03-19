<div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">投稿一覧</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contents as $content)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                  <!--詳細の機能-->
                  <a href="{{ route('content.show',$content->id) }}">
                    <!--ユーザー名-->
                    <p class="text-left text-gray-800 dark:text-gray-200">{{$content->user->name}}</p>
                    <!--タイトル-->
                    <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{$content->title_content}}</h3>
                    <!--画像-->
                    <img src="{{ asset('storage/contents/images/'.$content->image_content)}}"　class="mx-auto" style="height:300px;">
                    <!--音声ファイル-->
                    <audio controls src="{{ asset('storage/contents/audios/'.$content->audio)}}"></audio>
                    <div class="flex">
                  </a>
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
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>