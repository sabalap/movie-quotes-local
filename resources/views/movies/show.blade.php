<x-layout>
    <button class="ml-5 w-10 h-10 bg-white mt-5 rounded">
        <a href={{route("home")}}>Back</a>
    </button>
    <div class="text-center mx-auto w-5/12 mt-20 inline-block">
        <h1 class="mb-8 text-left text-4xl mr-8 text-white">{{$movie->title}}</h1>
        @foreach ($quotes as $quote)
        <div class="mb-8">
            <img class="h-96 w-full" src="{{asset('/storage/' . $quote->image)}}" alt="">
            <div class="bg-white h-28 flex justify-center items-center">
                <h3 class="text-3xl">{{$quote->quote}}</h3>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
