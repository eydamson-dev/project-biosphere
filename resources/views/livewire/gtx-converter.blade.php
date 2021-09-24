<div class="container mx-auto">
    <div class="flex flex-col justify-center items-center w-full">
        <h1 class="font-bold text-glow text-3xl text-yellow-100 uppercase">
            buy game token
        </h1>
        <x-content-box icon="/img/yam.png">
            <form class="flex flex-col items-center justify-center" wire:submit.prevent="store" method="GET">
                @csrf
                <span class="uppercase text-2xl text-glow">buy gtx</span>
                <span class="uppercase text-xl text-glow mt-5">gtx amount</span>
                <div class="flex flex-col text-center items-stretch justify-center">
                    <input wire:model="bitcoinAmount" class="text-center bg-transparent border-0 border-b-2" type="number" />
                    <span class="text-sm font-light text-white bg-red-500">
                        @error('bitcoinAmount')
                        {{$message}}
                        @enderror
                    </span>
                    <span class="uppercase text-xl mt-5">bitcoind deposite amount</span>
                    <span class="text-center">{{$this->gtx}}</span>
                </div>

                <div class="flex flex-col items-center justify-center mt-5">
                    <input wire:model="email" class="bg-transparent border-0 border-b-2" type="email" name="email" />
                    <span class="text-sm font-light text-white bg-red-500">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                    <span class="uppercase text-xl">email address</span>
                </div>

                <div class="flex flex-col items-center justify-center mt-5">
                    <input wire:model="referral" class="bg-transparent border-0 border-b-2" type="email" name="referral" />
                    <span class="text-sm font-light text-white bg-red-500">
                        @error('referral')
                        {{$message}}
                        @enderror
                    </span>
                    <span class="uppercase text-xl">reffered by:</span>
                </div>
                <div class="flex mt-5">
                    <p class="text-center text-sm">By Clicking <span class="text-yellow-300 uppercase font-extrabold">Submit</span> you are hereby <span class="uppercase text-yellow-300 font-extrabold">Agreed</span> the <a href="#" class="uppercase text-yellow-300 font-extrabold">Terms and Conditions</a></p>
                </div>
                <button wire:loading.remove class="font-bold text-xl uppercase mt-5 p-2 w-full bg-transparent border-2 border-blue-500 rounded-md hover:bg-blue-600">Submit</button>
                <button wire:loading disabled class="font-bold text-xl uppercase mt-5 p-2 w-full bg-transparent border-2 border-blue-500 rounded-md hover:bg-blue-600">Sending request..</button>
            </form>
        </x-content-box>
    </div>
</div>
