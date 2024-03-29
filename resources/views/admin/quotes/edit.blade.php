<x-layout>
    <div class="w-full flex-col items-center mt-10">
        <h1 class="text-center w-full text-white font-bold text-3xl mb-6">{{__("language.quote edit")}}</h1>
            <form action={{route("quoteUpdate",$quote->id)}} method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                    <div class="flex flex-col items-center mb-5">
                        <x-label name="quote" />
                        <x-input name="quote" :value="old('quote',$quote->quote)"/>
                        @error("quote")
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex justify-center mt-10 mb-8 h-32">
                        @if (Str::startsWith($quote->image,"images"))
                        <img class="h-full w-96 mb-8" width="140px" src="{{asset('storage/' . $quote->image)}}" alt="">
                            @else 
                        <img class="h-full w-96 mb-8" width="140px"  src="{{asset($quote->image)}}" alt="">
                            @endif
                    </div>
                    <div class="flex flex-col items-center mb-5">
                        <x-input name="image" type="file" :value="old('image',$quote->image)"/>
                        @error("image")
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                <div class="w-full flex justify-center">
                    <button class="p-2.5 w-28 rounded mt-4 bg-white">{{__("language.update")}}</button>
                </div>
            </form>
    </div>
</x-layout>