<div>
    

    @section('title','Registration')

    <!-- Registration Form -->
    <section class="flex flex-col  md:flex-row  items-center">

        <div class="bg-indigo-600  lg:block w-full md:w-1/2 xl:w-2/3 ">
            <img src="https://img.freepik.com/free-vector/election-referendum-campaign_74855-6386.jpg?w=996" alt="" class="w-full h-full object-cover img-fluid img-responsive">
        </div>
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100 mt-40 ">
                <h1 class="text-xl md:text-2xl font-semibold font-bold leading-tight mt-12 text-gray-400 uppercase ">Register to your account</h1>
      

                <form wire:submit.prevent="register" class="mt-6">
                    @csrf
                    <div>
                        <label class="block text-gray-700 mb-2 uppercase" style="letter-spacing: 1px">username</label>
                        <input wire:model="username" type="text"  placeholder="Enter username"
                            class=" w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200 @error('username') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autofocus >

                            @error('username')
                            <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                            @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 uppercase " style="letter-spacing: 1px">Full Name</label>
                        <input wire:model="name" type="text"  placeholder="Enter Full Name"
                            class="w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  @error('name') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autofocus autocomplete>
                            @error('name')
                            <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 uppercase" style="letter-spacing: 1px">Email Address</label>
                        <input wire:model="email" type="text"  placeholder="Enter Email Address"
                            class="w-full pl-6 pr-2 text-gray-400 py-2 my-2 bg-gray-200  @error('email') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autofocus autocomplete>
                            @error('email')
                            <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                            @enderror
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-700 uppercase">Password</label>
                        <input wire:model="password" type="password"  placeholder="Enter Password"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200  @error('password') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                             autocomplete>
                             @error('password')
                             <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>
                             @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 uppercase">Confirm Password</label>
                        <input wire:model="passwordConfirmation" type="password"   placeholder="Enter Confirm Password"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200 border-0 focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                             autocomplete>
                    </div>

                    <hr class="my-6 border-gray-300 w-full">

                    
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                            Photo</label>
                        <div class='flex items-center justify-center w-full'>
                            <label
                                class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <p
                                        class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                        Select a photo</p>
                                    <input wire:model="avatars" type="file" class="hidden" >

                                 

                                
                                </div>
                          


                        
                            </label>
                      
                       </div>
                        @error('avatars')
                        <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>

                        @enderror
                            
                        <div class="mt-4 mb-4">
                            @if ($avatars)
                                
                            
                            image preview:
                            <img src="{{ $avatars->temporaryUrl() }}" alt=""class="shadow-sm rounded-full mt-3 w-24 h-24 object-cover"   alt="">
                            @endif
                        </div>
                        

 
                            
                        



                    </div>

                    <button type="submit" class="w-full block bg-green-500 hover:bg-green-400 focus:bg-green-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">create new account</button>
                </form>
                <hr class="my-6 border-gray-300 w-full">

                <p class="mt-8">Go back login page <a href="{{ route('Login') }}" class="text-blue-500 hover:text-blue-500 font-semibold hover:text-blue-700">Login Page</a></p>

                <hr class="my-6 border-gray-100 w-full">
                <p class="text-justify capitalize text-gray-400 mb-3">copyright &copy; 2021 All rights reserved by Co.<a
                        class="text-blue-400">Hoshmand Kamal Ahmad</a> and Powered By ZingSoft </p>
            </div>
        </div>

    </section>
</div>
