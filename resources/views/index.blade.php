@extends('layouts.layout')

@section('menu-col')
<div class=" lg:ml-70 md:50 mt-1 flex flex-col">

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
        <div class="flex mt-4 p-2 items-center hover:bg-neutral-900 rounded-full">
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
<!--
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

</div> -->

<div class="flex ">
    <div class="flex h-12 border-b-1 border-neutral-800">
        <a href="" class="flex  items-center text-white hover:bg-neutral-900 duration-400">
            <div class="flex lg:w-69.5 md:w-40 justify-center">
                <div class="flex ">
                    <span class="font-semibold text-sm">For You</span>
                </div>
            </div>
        </a>
        <a href="" class="flex text-white items-center hover:bg-neutral-900 duration-400">
            <div class="flex justify-center lg:w-70 md:w-40">
                <div class="flex">
                    <span class="text-sm font-semibold">Following</span>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="flex p-2">
    <img src="{{ asset('20250527_1609_image.png') }}" alt="" class="w-12 h-12 ml-2 object-cover rounded-full mt-2">
    <div class="flex pt-5 border-b-1 border-gray-500 w-105 pt-5 pb-5 pl-2">
        <input type="search" placeholder="What's happening?" class="text-white text-lg outline-none hover:outline-none w-105">
    </div>
</div>

<div class="flex pt-3 space-x-40 border-b-1 border-neutral-800 p-1">
    <div class="flex ml-18 space-x-2">
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-sky-700 lucide-book-image-icon lucide-book-image">
                <path d="m20 13.7-2.1-2.1a2 2 0 0 0-2.8 0L9.7 17" />
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                <circle cx="10" cy="8" r="2" />
            </svg>
        </a>
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5.5 text-sky-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg>
        </a>
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-700 ml-2 lucide lucide-chart-pie-icon lucide-chart-pie">
                <path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z" />
                <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
            </svg>
        </a>
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-sky-700 lucide-vote-icon lucide-vote">
                <path d="m9 12 2 2 4-4" />
                <path d="M5 7c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v12H5V7Z" />
                <path d="M22 19H2" />
            </svg>
        </a>
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-sky-700 lucide-smile-icon lucide-smile">
                <circle cx="12" cy="12" r="10" />
                <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                <line x1="9" x2="9.01" y1="9" y2="9" />
                <line x1="15" x2="15.01" y1="9" y2="9" />
            </svg>
        </a>
        <a href="" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-sky-700 lucide-calendar-check-icon lucide-calendar-check">
                <path d="M8 2v4" />
                <path d="M16 2v4" />
                <rect width="18" height="18" x="3" y="4" rx="2" />
                <path d="M3 10h18" />
                <path d="m9 16 2 2 4-4" />
            </svg>
        </a>

        <span class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-sky-900 lucide-map-pin-icon lucide-map-pin">
                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                <circle cx="12" cy="10" r="3" />
            </svg>
        </span>
    </div>
    <a href="" class="flex justify-center text-bold items-center bg-white p-2 rounded-full w-16 h-8">
        <span class="text-sm font-semibold">Post</span>
    </a>
</div>

@endsection

@section('search-col')
<div class="h-20">
    <div>
        <input type="search" placeholder="    Search" class="mt-1.5 ml-4 text-white text-sm w-80 outline-none border border-neutral-800 p-2 rounded-full">
    </div>
</div>

<div class="ml-4 -mt-5 w-80 border border-neutral-800 rounded-lg p-4">
    <div>
        <h2 class="text-white font-semibold">
            Subscribe to Premium
        </h2>
    </div>

    <div>
        <p class="text-white text-sm pt-2 pb-2">
            Subscribe to unlock new features and if eligible,
            receive a share of revenue.
        </p>
    </div>

    <a href="" class="flex justify-center font-bold w-25 bg-sky-500 mt-1 p-1.5 rounded-full hover:bg-sky-600">
        <span class="text-white text-sm">Subscribe</span>
    </a>
</div>

<div class="border border-neutral-800 mt-4 ml-4 rounded-lg pt-2 ">
    <div class="">
        <h2 class="text-white font-semibold ml-4">What's happening</h2>
    </div>
    <div class="flex  mt-5 hover:bg-neutral-900 p-2">
        <img src="{{ asset('20250527_1609_image.png') }}" alt="" class="w-18 h-15 object-cover rounded-md ml-2">
        <div class="ml-3">
            <h2 class="text-white text-sm font-semibold">
                NFL Top 100 Countdown
            </h2>
            <span class="text-sm text-neutral-500">Live</span>
        </div>
    </div>

    <div class="flex hover:bg-neutral-900 p-2">
        <div class="ml-2">
            <p class="text-sm text-neutral-500">
                Trending in Madagascar
            </p>
            <p class="text-sm text-white font-semibold">#farthose</p>
        </div>

        <a href="" class="ml-26">
            <div class=" rounded-full hover:bg-sky-950 p-2 duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide text-neutral-500 lucide-ellipsis-icon lucide-ellipsis">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="19" cy="12" r="1" />
                    <circle cx="5" cy="12" r="1" />
                </svg>
            </div>
        </a>
    </div>

    <div class="hover:bg-neutral-900 pb-4">
        <a href="" class="text-sky-600 text-sm ml-4 w-full -mt-1">
            <div class="w-full ">
                <p class="ml-4">
                    Show more
                </p>
            </div>
        </a>
    </div>
</div>
@endsection
