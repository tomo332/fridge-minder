<x-app-layout>
    <x-slot name="header">
        <div class="w-auto flex justify-center">
            <form method="get" action="{{ route('fooditem') }}">
                <select name="category" id="category" class="bg-gray-50 border border-gray-300 shadow-sm rounded-md">
                    <option value="" disabled selected>カテゴリで絞り込む</option>
                    <option value="reset">*絞り込み解除*</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <x-primary-button class="bg-blue-500 hover:bg-blue-600">
                    決定
                </x-primary-button>
            </form>
        </div>
    </x-slot>

    <div class="mx-auto px-6">
        @if (session('message'))
            <div class="text-red-500 font-semibold">
                {{session('message')}}
            </div>
        @endif
        <div class="text-center ">
            <a href="{{route('foodadd')}}">
                <button class="mt-8 mb-2 bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">
                    食品を追加
                </button>
            </a>
        </div>
        @foreach ($posts as $post)
        <div class="mt-4 p-4 bg-gray-50 shadow-xl w-full rounded-2xl container">
            <div class="flex justify-between">
                <h1 class="p-4 text-lg font-semibold">
                    {{$post->food_name}}
                </h1>
                <span class="rounded-full bg-blue-200 text-blue-700 py-2 px-3 my-3 text-sm font-semibold">{{$post->category->category_name}}</span>
            </div>
            <hr class="w-full">
            <div class="flex justify-between ">
                @if ($post->photo_url)
                <div class="p-4">
                    <img src="{{ asset('storage/images/' . $post->photo_url) }}" alt="食品画像" class="w-32 h-32 rounded-lg">
                </div>
                @endif

                <p class="p-2 text-sm font-semibold flex items-center">
                    {{$post->quantity}}
                </p>
                <div class="p-2 text-sm font-semibold flex items-center">
                    <table>
                        <tr class="text-orange-600">
                            <th>消費期限:</th>
                            <td>{{$post->expiration_date}}</td>
                        </tr>
                        <tr>
                            <th>賞味期限:</th>
                            <td>{{$post->best_before_date}}</td>
                        </tr>
                    </table>
                </div>
                <div class="text-right flex items-center">
                    <a href="{{route('foodedit', $post)}}" class="flex-1">
                        <x-primary-button class="bg-green-500 hover:bg-green-600">
                            編集
                        </x-primary-button>
                    </a>
                    <form method="POST" action="{{route('fooddestroy', $post)}}" class="flex-2">
                        @csrf
                        @method('delete')
                        <x-primary-button class="bg-red-500 hover:bg-red-600 ml-2">
                            削除
                        </x-primary-button>
                    </form>
                </div>



            </div>

        </div>
        @endforeach
    </div>
</x-app-layout>
