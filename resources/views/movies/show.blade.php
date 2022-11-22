<x-layout>
    <div class="text-center mx-auto w-5/12 mt-20 inline-block">
        <h1 class="mb-8 text-left text-4xl mr-8 text-white">{{$movie->title}}</h1>
        @foreach ($quotes as $quote)
        <div class="mb-8 border border-black">
            <img class="h-96 w-full" src="{{asset($quote->image)}}" alt="">
            <div class="bg-white h-28 flex justify-center items-center">
                <h3 class="text-3xl">{{$quote->quote}}</h3>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
