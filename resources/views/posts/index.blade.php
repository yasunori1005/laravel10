<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <div class="p-6 text-gray-900">
                        <a href="{{ route('posts.create') }}"
                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</a>
                    </div>
                </div>
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-12 mx-auto">
                        <div class="flex flex-wrap -m-4">
                            @foreach ($posts as $post)
                                <div class="p-4 md:w-1/3">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                            src="https://dummyimage.com/720x400" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                {{ $post->title }}</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                                {{ $post->price }}
                                            </h1>
                                            <p class="leading-relaxed mb-3">{{ $post->message }}</p>
                                            <div class="flex justify-between items-center flex-wrap ">
                                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                                    class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">編集する
                                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">削除する
                                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5l7 7-7 7"></path>
                                                        </svg>
                                                    </button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
