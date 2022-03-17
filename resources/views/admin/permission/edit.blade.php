<div>
    @section('title',"Edit ")
    <button class="flex px-8 mx-4 items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100  rounded-lg  focus:outline-none bg-red-500"
       >
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <a  href="{{ route('Permission') }}" class="border border-gray-400 px-2  radius-10">Go back</a>
        </div>


    </button>

    <form wire:submit.prevent="EditUser('{{ $user->id }}')" class="text-gray-400 bg-white body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl text-gray-900 font-medium title-font mb-4 text-white uppercase">
                    {{ $user->name }}</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-900 text-base">Profile Update Form, found within the Members Only
                    page, allows members to update much of the information on their Profile.</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="relative mb-2 mt-2">
                    <label for="name" class="leading-7 text-sm text-gray-900">username</label>
                    <input type="text" wire:model="username" id="name" name="name"
                        class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                    @error('username')
                    <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>

                    @enderror
                </div>
                <div class="flex flex-wrap -m-2">

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-900">Name</label>
                            <input type="text" wire:model="name" id="name" name="name"
                                class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                            @error('name')
                            <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-900">Email</label>
                            <input type="email" wire:model="email" id="email" name="email"
                                class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                            @error('email')
                            <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="p-2 w-full mt-2 mb-2">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-900">Password</label>
                            <input wire:model="password" type="password" id="name" name="name"
                                class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                            @error('password')
                            <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full mt-2 mb-2">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-900">Password Confirmation</label>
                            <input wire:model="passwordConfirmation" type="password" id="name" name="name"
                                class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">

                        </div>
                    </div>
                    <div
                        class="w-full
                        text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                        <div class='flex items-center justify-center w-full mb-5'>




                        </div>


                        <div class="text-gray-900 capitalize mb-4">Profile picture</div>
                        <img src="{{ $user->avatar  }}" class=" rounded rounded-full w-20 h-20  object-cover" alt="">





                    </div>

                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">update
                            profile</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>
