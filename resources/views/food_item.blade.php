<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            食品一覧
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        @foreach ($posts as $post)
        <div class="mt-4 p-4 bg-white w-full rounded-2xl">
            <div class="flex justify-between">
                <h1 class="p-4 text-lg font-semibold">
                    {{$post->food_name}}
                </h1>
                <span class="p-4 font-semibold">#{{$post->tag}}</span>
            </div>
            <hr class="w-full">
            <div class="flex justify-between">
                @if ($post->photo_url)
                <div class="p-4">
                    <img src="{{ asset('storage/images/' . $post->photo_url) }}" alt="食品画像" class="w-32 h-32">
                </div>
                @endif
                <p class="mt-2 p-2">
                    {{$post->quantity}}
                </p>
                <div class="p-2 text-sm font-semibold">
                    <table>
                        <tr>
                            <th>消費期限:</th>
                            <td>{{$post->expiration_date}}</td>
                        </tr>
                        <tr>
                            <th>賞味期限:</th>
                            <td>{{$post->best_before_date}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        @endforeach
    </div>



</x-app-layout>
