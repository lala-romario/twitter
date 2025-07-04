<div class="">
    <div class="flex grow space-y-10 mt-2">
        <div class="flex-col items-start">
            <a href="" class="py-2 px-2 rounded-full hover:bg-neutral-900 duration-300">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-white cursor-pointer lucide lucide-twitter-icon lucide-twitter">
                        <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                    </svg>
                </div>

            </a>
            @foreach($menus as $menu)
            <a href="" class="flex w-30 ">
                <div class="flex  py-3 rounded-full hover:bg-neutral-900 duration-300">
                    {!! $menu['icon'] !!}
                    <span class="text-white text-xl px-5">{{ $menu['label'] }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</div>
</div>
