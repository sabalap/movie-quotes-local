<x-layout>
    <div class="w-full flex-col items-center mt-10">
        <h1 class="text-center w-full text-white font-bold text-3xl mb-6">Quote Edit</h1>
            <form action="/admin/quotes/{{$quote->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                    <div class="flex flex-col items-center mb-5">
                        <x-label name="quote" />
                        <x-input name="quote" :value="old('quote',$quote->quote)"/>
                        @error("quote")
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex justify-center mt-10 mb-8 h-20">
                        <img src="{{asset('storage/' . $quote->image)}}" width="140px" alt="">
                    </div>
                    <div class="flex flex-col items-center mb-5">
                        <x-input name="image" type="file" :value="old('image',$quote->image)"/>
                        @error("image")
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                <div class="w-full flex justify-center">
                    <button class="p-2.5 w-28 rounded mt-4 bg-white">Update</button>
                </div>
            </form>
    </div>
</x-layout>