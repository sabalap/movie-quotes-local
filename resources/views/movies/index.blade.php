<x-layout>
    <div class="text-center mx-auto w-5/12 mt-20">
        @foreach ($quotes as $quote)
            <img class="w-full mb-8" src="{{asset('/images/'.$quote->image)}}" alt="">
            <h1 class="text-white">{{$quote->quote}}</h1>
        @endforeach
        @foreach ($movies as $movie)
            <h1 class="text-white text-5xl">{{$movie->title}}</h1>
        @endforeach
    </div>
</x-layout>