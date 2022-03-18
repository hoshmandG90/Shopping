<div>
        
    @section('title','Sales')
    @if ($authentication)

 <div
        class="flex flex-col justify-center mx-auto max-w-3xl p-6 space-y-4 sm:p-10 dark:bg-coolGray-900 dark:text-coolGray-100">
        <h2 class="text-xl font-semibold">Your cart</h2>
        <ul class="flex flex-col divide-y divide-coolGray-700">
            @foreach ($sales as $item)

            <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                <div class="flex w-full space-x-2 sm:space-x-4">
                    
                    <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                    src="Uploads/Electronics/{{ $item->image }}" 
                    alt="{{ $item->title }}">
                
                    
                    <div class="flex flex-col justify-between w-full pb-4">
                        <div class="flex justify-between w-full pb-2 space-x-2">
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold leading-snug sm:pr-8 capitalize text-red-900">{{ $item->title }}</h3>
                                <div class="flex">
                                    <p class="text-sm dark:text-coolGray-400 mr-1">
                                        Brand
                                    </p>
                                    <p class="text-sm text-gray-400 capitalize">{{ $item->brand }}</p>

                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-semibold text-green-500">{{ number_format($item->price,0,'.','.') }} USD</p>
                                <p class="text-xs font-bold capitalize">
                                    quantity

                                    <span class="text-red-500">{{ $item->quantity }}</span>
                                </p>

                            </div>
                        </div>
                        <div wire:click.prevent="remove('{{ $item->id }}')" class="flex text-sm divide-x">
                            <button type="button" class="flex items-center px-2 py-1 pl-0 space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-4 h-4 fill-current">
                                    <path
                                        d="M96,472a23.82,23.82,0,0,0,23.579,24H392.421A23.82,23.82,0,0,0,416,472V152H96Zm32-288H384V464H128Z">
                                    </path>
                                    <rect width="32" height="200" x="168" y="216"></rect>
                                    <rect width="32" height="200" x="240" y="216"></rect>
                                    <rect width="32" height="200" x="312" y="216"></rect>
                                    <path
                                        d="M328,88V40c0-13.458-9.488-24-21.6-24H205.6C193.488,16,184,26.542,184,40V88H64v32H448V88ZM216,48h80V88H216Z">
                                    </path>
                                </svg>
                                <span>Remove</span>
                            </button>

                        </div>
                    </div>
                </div>
            </li>
            @endforeach



        </ul>
        <div class="space-y-1 text-right">
            <p>Total amount:
                <span class="font-semibold"> 
                    @php
                    $sum=0;
                    for($i=0;$i<count($sales);$i++){
                      $total_price=$sales[$i]['price']*$sales[$i]['quantity'];
                      $sum+=$total_price;
                    }
                @endphp

{{ number_format($sum,0,'.','.') }}
                    USD</span>
            </p>
        </div>
        <form wire:submit.prevent="processcheckout" class="flex justify-end space-x-4">

            <button type="submit"
                class="px-6 py-2 hover:bg-green-500 border rounded-md dark:bg-violet-400 dark:text-coolGray-900 dark:border-violet-400">
                <span class="sr-only sm:not-sr-only">Continue to</span>Checkout
            </button>
        </form>
    </div>
    @endif

</div>
