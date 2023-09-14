<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            食品追加
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
         @if (session('message')) {{--もしセッションの中にmessageが含まれていれば、セッションの中のmessageを表示 --}}
            <div class="text-cyan-500 font-semibold">
                {{session('message')}}
            </div>
        @endif
        <form method="POST" action="{{ route('foodstore') }}" enctype='multipart/form-data'>
         @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="food_name" class="font-semibold mt-4">食品名<span class="text-red-600">*</span></label>
                    <x-input-error :messages="$errors->get('food_name')" class="mt-2" />
                    <input type="text" name="food_name" class="w-auto py-2 bg-gray-50 border border-gray-300 shadow-sm rounded-md" id="food_name" value="{{old('food_name')}}">
                </div>

                <div class="w-full flex flex-col">
                    <label for="quantity" class="font-semibold mt-4">数量</label>
                    <input type="number" name="quantity" class="w-auto py-2 bg-gray-50 border border-gray-300 shadow-sm rounded-md" id="quantity">
                </div>

                <div class="w-full flex flex-col">
                    <label for="expiration_date" class="font-semibold mt-4">消費期限</label>
                    <input type="date" name="expiration_date" class="w-auto py-2 bg-gray-50 border border-gray-300 shadow-sm rounded-md" id="expiration_date">
                </div>

                <div class="w-full flex flex-col">
                    <label for="best_before_date" class="font-semibold mt-4">賞味期限</label>
                    <input type="date" name="best_before_date" class="w-auto py-2 bg-gray-50 border border-gray-300 shadow-sm rounded-md" id="best_before_date">
                </div>

                {{-- <div class="w-full flex flex-col">
                    <label for="category_name" class="font-semibold mt-4">カテゴリ</label>
                    <input type="text" name="category_name" class="w-auto py-2 border border-gray-300 rounded-md" id="category_name">
                </div> --}}

                <div class="w-full flex flex-col">
                    <label for="tag" class="font-semibold mt-4">タグ<span class="text-red-600">*</span></label>
                    <x-input-error :messages="$errors->get('tag')" class="mt-2" />
                    <input type="text" name="tag" class="w-auto py-2 bg-gray-50 border border-gray-300 shadow-sm rounded-md" id="tag" value="{{old('tag')}}">
                </div>

                <div class="w-full flex flex-col mt-4">
                    <label for="photo_url" class="mb-1 block font-semibold text-gray-700">写真</label>
                    <input type="file" name="photo_url" class="block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-gray-500 file:py-2.5 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-gray-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" id="photo_url">
                </div>

                <x-primary-button class="mt-4 bg-cyan-500 hover:bg-cyan-600 ">
                    追加する
                </x-primary-button>

            </div>
        </form>
    </div>




</x-app-layout>
