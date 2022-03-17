<div>

    @if (!Request::is('Login') && !Request::is('Register'))



    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <div class="flex">
                    <img class=" h-6 mt-1 w-auto" src="{{ asset('assets/img/logo.png') }}" alt="Hotel Ramada">
                    <a href="{{ route('welcome') }}"
                        class="text-lg ml-2 mt-1  tracking-widest text-red-500 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

                        kurd shop</a>
                </div>

                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                <a class="px-4 py-2 mt-2 text-sm font-semibold   rounded-lg  md:mt-0  {{ Request::is('/') ? 'text-indigo-500 font-bold' : 'text-gray-900'}}   "
                    href="{{ route('welcome') }}">Home</a>

                @auth
                @if (auth()->user()->rules == 1)

                <a href="{{ route('Permission') }}"
                    class="px-4 py-2 mt-2 text-sm   font-semibold bg-transparent 
                    rounded-lg md:mt-0 md:ml-4 {{ Request::is('Permission') ? 'text-indigo-500 font-bold' : 'text-gray-900'}}">Permissions</a>
                @endif
                @endauth




                <a class="px-4 py-2 mt-2 text-sm   font-semibold bg-transparent 
                rounded-lg md:mt-0  capitalize md:ml-4 {{ Request::is('Electronic') ? 'text-indigo-500 font-bold' : 'text-gray-900'}}"
                    href="{{ route('Electronic') }}">electronics</a>

                <a class="px-4 py-2 mt-2 text-sm   font-semibold bg-transparent 
                rounded-lg md:mt-0 md:ml-4 capitalize  md:mt-0 {{ Request::is('Clothes') ? 'text-indigo-500 font-bold' : 'text-gray-900'}} "
                    href="{{ route('Clothes') }}">clothes</a>

                @guest
                <a class=" py-2 text-red-500 font-bold hover:text-red-800 mt-2 uppercase  text-sm font-semibold  rounded-lg  md:mt-0 md:ml-4  "
                    href="{{ route('Login') }}"> Login</a>
                @endguest

                @auth
                <a class="mt-1 text-red-500   hover:text-red-900 ">
                    <livewire:admin.logout />

                </a>
                @endauth


                @auth
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ auth()->user()->avatar }}">

                        </span>

                    </button>

                </div>

                @endauth



            </nav>
        </div>
    </div>
    @endif

</div>
