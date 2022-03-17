 <!-- component -->
 <footer class="bg-gray-50 text-gray-600 px-6 lg:px-8 py-12">
     <div class="flex max-w-screen-xl mx-auto mb-12 lg:mb-16  ">

         <img class="h-8" src="{{ asset('assets/img/logo.png') }}" alt="Ramada">
         <span class="text-red-500 uppercase text-xl px-2 mt-1">kurd shop</span>

     </div>
     <div class="max-w-screen-xl mx-auto ">
         <div
             class="grid grid-cols-8 md:grid-cols-9  lg:grid-cols-8  divide-gray-200 divide-y-2 md:divide-x-2 md:divide-y-0 md:-mx-8">
             <div class="col-span-8 md:col-span-3 lg:col-span-2 md:px-8 py-4 md:py-0">
                 <h5 class="text-xl font-semibold text-gray-700 uppercase">welcome </h5>
                 <nav class="mt-4">
                     <ul class="space-y-2">


                         @guest
                         <li>
                             <a href="" class="font-bold  uppercase   text-base text-gray-400">kurd shop</a>
                         </li>
                         @endguest

                         @auth
                         <li>
                             <a href=""
                                 class="font-normal  uppercase   text-base text-gray-400">{{ auth()->user()->name }}</a>
                         </li>

                         @endauth




                         @guest
                         <li>
                             <a href="{{ route('Register') }}"
                                 class="font-normal  text-base hover:text-gray-400 uppercase  {{ Request::is('Register')  ?  'text-red-500 font-bold' :' '}} ">Register</a>
                         </li>
                         <li>
                             <a href="{{ route('Login') }}"
                                 class="font-normal text-base hover:text-gray-400 uppercase {{ Request::is('Login')  ?  'text-red-500 font-bold' :' '}} ">Login</a>
                         </li>
                         @endguest

                         @auth
                         <livewire:pages.logout />

                         @endauth



                         <li>
                             <a href="{{ route('welcome') }}"
                                 class="font-normal text-base  hover:text-gray-400 uppercase  {{ Request::is('/') ?  'text-red-500 font-bold' :' '}} ">home
                                 Page</a>
                         </li>





                     </ul>
                 </nav>
             </div>

             @auth
             @if (auth()->user()->rules === 1)

             <div class="col-span-8 md:col-span-3 lg:col-span-3 md:px-8 py-4 md:py-0">

                 <h5 class="text-xl font-semibold text-red-700 uppercase">Published Post</h5>
                 <nav class="mt-4">
                     <ul class="grid lg:grid-cols-2">
                         <li class="mb-2">
                             <a  href="{{ route('ViewClo') }}"
                             class="font-normal text-base  hover:text-gray-400 uppercase   ">Create Clothes</a>
                                 
                         </li>
                         <li class="mb-2">
                             <a href="" class="font-normal text-base hover:text-gray-400 ">
                                 Services</a>
                         </li>

                         <li class="mb-2">
                             <a href="{{ route('ViewElc') }}"
                                 class="font-normal text-base  hover:text-gray-400 uppercase  ">Create
                                 Electronics</a>
                         </li>
                     </ul>
                 </nav>
             </div>
             @endif


             @endauth



             <div class="col-span-8 md:col-span-3 lg:col-span-3 md:px-8 py-4 md:py-0">
                 <h5 class="text-xl font-semibold text-gray-700">Follow us</h5>
                 <nav class="mt-4">
                     <ul class="grid lg:grid-cols-2">
                         <li class="mb-2">
                             <a href="https://github.com/hoshmandg90"
                                 class="flex space-x-2 font-normal text-base hover:text-gray-400">
                                 <svg height="32" aria-hidden="true" class="w-5 h-5" viewBox="0 0 16 16" version="1.1"
                                     width="32" data-view-component="true"
                                     class="octicon octicon-mark-github v-align-middle">
                                     <path fill-rule="evenodd"
                                         d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                     </path>
                                 </svg>
                                 <span>
                                     Github
                                 </span>
                             </a>
                         </li>

                         <li class="mb-2">
                             <a href="https://www.instagram.com/_hos6mand_/"
                                 class="flex space-x-2  font-normal text-base hover:text-gray-400">
                                 <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                     <path fill-rule="evenodd"
                                         d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                         clip-rule="evenodd" />
                                 </svg>
                                 <span>
                                     Instagram
                                 </span>
                             </a>
                         </li>


                         <li class="mb-2">
                             <a href="https://www.facebook.com/hoshman12"
                                 class="flex space-x-2  font-normal text-base hover:text-gray-400">
                                 <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                     <path fill-rule="evenodd"
                                         d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                         clip-rule="evenodd" />
                                 </svg>
                                 <span>
                                     Facebook
                                 </span>
                             </a>
                         </li>

                     </ul>
                     <div class="flex justify-around">
                         <div class="mb-2">
                             <a href="#" class="flex space-x-2  font-normal text-base hover:text-gray-400">

                                 <span>

                                     contact us <br>
                                     7/24 Live Support

                                 </span>
                             </a>
                         </div>


                         <div class="mb-2">
                             <a href="#" class="flex space-x-2  font-normal text-base hover:text-gray-400">

                                 <span>
                                     +(90) 216 54 75200 <br>
                                     info@Katreisislandhotels.com.tr

                                 </span>
                             </a>
                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
     <div
         class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 mt-8 lg:mt-12 border-t-2 border-gray-200 pt-8">
         <nav class="flex flex-wrap justify-center space-x-6">
         </nav>
         <p class="">&copy;2022 All rights reserved<a href="https://github.com/hoshmandg90" class="text-blue-400">
                 Hoshmand Kamal</a> </p>
     </div>
 </footer>
