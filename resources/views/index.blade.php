@extends('layouts.layout')

@section('menu-col')
<div class=" ml-80 flex flex-col">
    <h1 class=" rounded-full hover:bg-neutral-900 duration-300">
        <a href="" class="">
            <div>
                <img src="{{ assets('twitter-logo.png') }}" alt="">
            </div>
        </a>
</h1>
    @foreach($menus as $menu)
    <a href="" class="flex w-30 ">
        <div class="flex  py-3 rounded-full hover:bg-neutral-900 duration-300">
            {!! $menu['icon'] !!}
            <span class="text-white text-xl px-5">{{ $menu['label'] }}</span>
        </div>
    </a>
    @endforeach
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
