<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('コンテンツの一覧') }}
    </h2>
  </x-slot>

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
                    <!--ユーザー名-->
                    <p class="text-left text-gray-800 dark:text-gray-200">{{$content->user}}</p>
                    <!--タイトル-->
                    <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{$content->title_content}}</h3>
                    <!--画像-->
                    <img src="{{ asset('storage/contents/images/'.$content->image_content)}}"　class="mx-auto" style="height:300px;">
                    <!--音声ファイル-->
                    <audio controls src="{{ asset('storage/contents/audios/'.$content->audio)}}"></audio>
                    <div class="flex">
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
</x-app-layout>