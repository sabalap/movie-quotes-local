<x-layout>
    <div class="text-center mx-auto w-5/12 mt-20 inline-block">
        @foreach ($quotes as $quote)
            <img class="h-96 w-full mb-8" src="{{asset('/storage/' . $quote->image)}}" alt="">
            <h1 class="text-white mb-10 text-2xl">"{{$quote->quote}}"</h1>
        @endforeach
        <a href={{route("movie",$movies->id)}}>
            <h1 class="text-white text-5xl decoration-solid decoration-white underline">{{$movies->title}}</h1>
        </a>
    </div>
</x-layout>
