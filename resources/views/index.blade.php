@extends('layouts.layout')

@section('menu-col')
<div class=" ml-85 mt-2 flex flex-col">

    <a href="" class="">
        <img src="{{ asset('images/icons8-twitter-96.svg') }}" alt="twitter-logo" class="w-12 h-12 p-2 text-white rounded-full -mr-2 hover:bg-neutral-900 duration-300">
    </a>

    @foreach($menus as $menu)
    <a href="" class="flex w-50 ">
        <div class="flex  py-3 rounded-full hover:bg-neutral-900 duration-300">
            {!! $menu['icon'] !!}
            <span class="text-white text-xl px-5">{{ $menu['label'] }}</span>
        </div>
    </a>
    @endforeach

    <a href="" class="bg-white mt-5 w-53 p-3 font text-center rounded-full hover:bg-gray-200 duration-300">
        <span class="">Post</span>
    </a>

    <a href="" class="flex mr-4">
        <div class="flex mt-8 p-2 items-center hover:bg-neutral-900 rounded-full">
            <img src="{{ asset('20250527_1609_image.png') }}" alt="" class="w-15 h-10 object-cover rounded-full">
            <div class="ml-3">
                <span class="text-white text-sm font-bold">Lala Romario MAM</span>
                <span class="text-gray-600 text-sm">@MamonjyLala</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white mr-2 lucide lucide-ellipsis-icon lucide-ellipsis">
                <circle cx="12" cy="12" r="1" />
                <circle cx="19" cy="12" r="1" />
                <circle cx="5" cy="12" r="1" />
            </svg>

        </div>
    </a>
</div>
@endsection

@section('posts-col')

<div class="border-b-1 border-gray-800">
    <div class="">
        <div>
            <input type="search" name="search" id="" placeholder="   Search"
                class="ml-4 text-white border border-gray-800 w-md p-2 rounded-full ">
        </div>
        <a href="" class="ml-15 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-settings-icon lucide-settings">
                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
        </a>
    </div>

    <div class="  ">
        <a href="" class="text-gray-600 text-md hover:bg-gray-700 p-4 flex justify-center hover:bg-neutral-900 duration-400">For You</a>
        <a href="" class="text-gray-600 hover:bg-gray-700 p-4 flex justify-center hover:bg-neutral-900 duration-400">Trending</a>
        <a href="" class="text-gray-600 hover:bg-gray-700 p-4 flex justify-center hover:bg-neutral-900 duration-400">News</a>
        <a href="" class="text-gray-600 hover:bg-gray-700 p-4 flex justify-center hover:bg-neutral-900 duration-400">Sports</a>
        <a href="" class="text-gray-600 hover:bg-gray-700 py-4 flex justify-center hover:bg-neutral-900 duration-400">Entertainment</a>
    </div>

</div>

@endsection

@section('search-col')
<div class="bg-white">

    <h1>ndqhUCJKLCDJMS</h1>
</div>
@endsection
