<x-layout>
    <div class="w-full flex-col items-center mt-10">
        <h1 class="text-center w-full text-white font-bold text-3xl mb-6">Quote Edit</h1>
            <form action="/admin/quotes/{{$movie_id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                @foreach ($quotes as $quote)
                @if($quote->movie_id === +$movie_id)
                    <div class="flex flex-col items-center mb-5">
                        <x-label name="Quote" />
                        <x-input name="Quote" :value="old('quote',$quote->quote)"/>
                    </div>
                @endif
                @endforeach
                <div class="w-full flex justify-center">
                    <button class="p-2.5 w-28 rounded mt-4 bg-white">Update</button>
                </div>
            </form>
    </div>
</x-layout>