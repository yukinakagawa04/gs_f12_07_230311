<x-app-layout>          
    <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
        <form class="mb-6" action="{{ route('comment.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <x-input-label for="comment" :value="__('コメント')" />
                <x-text-input id="comment" class="block mt-1 w-full" type="text" name="comment" :value="old('comment')" required autofocus />
                <x-input-error :messages="$errors->get('comment')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('コメント') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
