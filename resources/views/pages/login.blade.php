<div>
    @section('title','Login')

    <section class="flex flex-col  md:flex-row  items-center">

        <div class="bg-indigo-600  lg:block w-full md:w-1/3 xl:w-2/3 h-screen" style="background-image: cover">
            <img src="{{ asset('assets/img/login.png') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full ">
                <h1 class="text-xl md:text-2xl font-semibold font-bold leading-tight mt-12 text-gray-400 uppercase ">Log in to your account</h1>

                @if ($check)
                    
                <div class="text-center">
                    <small class="font-semibold text-xs text-red-400 mt-1 mb-1 ">{{ $check }}</small>
                </div>
                @endif

                <form wire:submit.prevent="Login" class="mt-6">
                    @csrf
                    <div>
                        <label class="block text-gray-700 uppercase" style="letter-spacing: 1px">username</label>
                        <input type="text" wire:model="username" placeholder="Enter username"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200 @error('username') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                            autofocus autocomplete>

                            @error('username')
                            <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>                                
                            @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 uppercase">Password</label>
                        <input type="password" wire:model="password" id="myInput"  placeholder="Enter Password"
                            class="w-full pl-6 pr-2 text-gray-400 py-3 my-2 bg-gray-200 @error('password') border border-red-400 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"
                             autocomplete>
                             
                            @error('password')
                            <small class="text-red-400 mt-2 mb-1  font-semibold">{{$message}}</small>                                
                            @enderror
                    </div>

                    <input type="checkbox"  onclick="myFunction()"  class="form-control   p-2"  id="checkbox"> <span class="text-gray-500 uppercase">Show Password</span>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                
                    </script>
                

                 
                    <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6 uppercase">Log In</button>
                </form>
                <hr class="my-6 border-gray-300 w-full">


                <p class="mt-8">Haven't you registered yet? <a href="{{ route('Register') }}" class="text-blue-500 hover:text-blue-500 font-semibold hover:text-blue-700">Create an account</a></p>

                <hr class="my-6 border-gray-100 w-full">
                <p class="text-justify capitalize text-gray-400">copyright &copy; 2021 All rights reserved by Co.<a
                        class="text-blue-400">Hoshmand Kamal Ahmad</a> and Powered By ZingSoft </p>
            </div>
            
        </div>

    </section>
    
</div>
