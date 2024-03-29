<x-layout>
    <div class="text-center mx-auto w-4/12 mt-20 inline-block">
        @foreach ($quotes as $quote)
        @if (Str::startsWith($quote->image,"images"))
        <img class="h-96 image mb-8" src="{{asset('storage/' . $quote->image)}}" alt="">
            @else 
        <img class="h-96 w-full mb-8" src="{{asset($quote->image)}}" alt="">
            @endif
            <h1 class="text-white mb-10 text-2xl">"{{$quote->quote}}"</h1>
        @endforeach
        <a href={{route("movie",$movies->id)}}>
            <h1 class="text-white text-5xl decoration-solid decoration-white underline">{{$movies->title}}</h1>
        </a>
    </div>
</x-layout>
