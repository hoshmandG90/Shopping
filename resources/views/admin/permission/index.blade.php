<div>
    @section('title','Permissions')
    <main class="mx-auto h-full pb-16 overflow-y-auto">
        <div class="mx-auto grid px-6 mx-auto">



            <div class="w-full flex  mb-3 mt-2">
                <div class="w-3/6 mx-1">
                    <div class="flex">
                        <div class="relative w-full max-w-sm mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input wire:model="search"
                                class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                type="text" placeholder="Advanced Search for user" aria-label="Search" />
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-2 border-gray-900">
            <div class="w-full flex  mb-3 mt-2">

                <div class="w-1/4 relative mx-1">
                    <select wire:model="sortField"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state">
                        <option value="id">ID</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="created_at">Sign Up Date</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
                <div class="w-1/4 relative mx-1">
                    <select wire:model="sortAsc"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state">
                        <option value="1">Ascending</option>
                        <option value="0">Descending</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
                <div class="w-1/4 relative mx-1">
                    <button wire:click="deleteUsers"
                        class="block appearance-none w-full bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight focus:border-gray-500">Delete</button>
                </div>

                <div class="w-1/4 relative mx-1">


                    @if ($selectedRows)
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen"
                            class="block appearance-none w-full  bg-gray-800 rounded p-2 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight">
                            Permissions Activities
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class=" inset-0 h-full w-full z-10">
                        </div>

                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-20">
                            <a href="#" wire:click.prevent="MarkedPersonal"
                                class="block px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">Marked As <span
                                    class="text-green-400">Personal</span></a>
                        

                            <a href="#" wire:click.prevent="MarkedAdministrator"
                                class="block px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">Marked As <span
                                    class="text-red-400">Administrator</span></a>

                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @if ($Users->IsNotEmpty())
        <!-- component -->
        <div class="overflow-x-auto">
            <div class=" flex items-center justify-center  font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">

                                    <th class="py-3 px-6 text-left">#</th>

                                    <th class="px-4 text-left py-2">
                                        <div class="icheck-primary d-inline ml-2">
                                            <input wire:model="selectedPageRows" type="checkbox" value="" name=""
                                                id="todoCheck2">
                                            <label for="todoCheck2"></label>
                                        </div>
                                    </th>
                                    <th class="py-3 px-6 text-left">client</th>
                                    <th class="py-3 px-6 text-left">email</th>
                                    <th class="py-3 px-6 text-center">show password</th>
                                    <th class="py-3 px-6 text-center">rules</th>
                                    <th class="py-3 px-6 text-center">created at</th>
                                    <th class="py-3 px-6 text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($Users as $user)

                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">

                                        <span class="font-medium">{{ $user->id }}</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <div class="icheck-primary d-inline ml-2">
                                            <input wire:model="selectedRows" type="checkbox" value="{{$user->id}}"
                                                name="todo2" id="{{$user->id}}">
                                            <label for="{{$user->id}}"></label>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative  w-8 h-8 mr-3 rounded-full ">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="{{ $user->avatar }}" alt="" loading="lazy">
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="font-semibold dark:text-gray-300 capitalize">{{ $user->name }}
                                                </p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400 ">
                                                    <small class="text-xs">username</small>
                                                    <small>{{ $user->username }}</small>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">

                                        <span class="font-medium">{{ $user->email }}</span>
                                    </td>

                                    <td class="py-3 px-6 text-center whitespace-nowrap">

                                        <span class="font-medium">{{ $user->show_password }}</span>
                                    </td>
                                    @if ($user->rules == 1)

                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Administrator</span>
                                    </td>
                                    @elseif($user->rules == 2)
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Cashier</span>
                                    </td>
                                    @elseif($user->rules == 3)
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Doctor</span>
                                    </td>

                                    @else

                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Personal</span>
                                    </td>

                                    @endif

                                    </td>

                                    <td class="py-3 px-6 text-center whitespace-nowrap">

                                        <span class="font-medium">{{ $user->created_at->format(' M D , Y') }}</span>
                                    </td>


                                    <td class="py-3 px-6 ">
                                        <div class="flex item-center justify-center">
                                           
                                            <a href="{{ route('Edit',$user->username) }}"
                                                class="w-4 cursor-pointer mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <div wire:click.prevent="delete('{{ $user->id }}')"
                                                title="do you want to delete this {{ $user->name }}"
                                                class="w-4 mr-2 transform  cursor-pointer hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                        <span class="flex items-center col-span-3">
                            Showing {{ $Users->currentPage() }}-{{ $Users->lastItem() }} of {{ $Users->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
            
                                    {{ $Users->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
     
</div>

@else
<a href="#" class="capitalize flex justify-center mx-auto text-center items-center mt-3 mb-1">
    <img src="{{ asset('assets/img/error.svg') }}" class="img-responsive shadow rounded-lg" width="200px" height="200px"
        alt="">
    <br>
</a>
<p class="text-center">Whoops! No Client were found 🙁</p>

@endif
</div>
</main>
</div>
