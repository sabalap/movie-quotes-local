<x-layout>
    <div class="ml-24 mt-10">
        <h1 class="text-xl-5 font-bold mb-4 text-white">
            <a href={{route('dashboard')}} class={{request()->is(('admin/movies')) ? "bg-blue-500 text-white" : ""}}>
                {{__("language.all movies")}}
            </a>
        </h1>
        <h1 class="text-xl-5 font-bold mb-3 text-white">
            <a href={{route("movieCreate")}} class={{request()->is('admin/movies/create') ? "bg-blue-500 text-white" : ""}}>
                {{__("language.new movie")}}
            </a>
        </h1>
        <h1 class="text-xl-5 font-bold mb-3 text-white">
          <a href={{route("quoteCreate")}} class={{request()->is('admin/quotes/create') ? "bg-blue-500 text-white" : ""}}>
              {{__("language.new quote")}}
          </a>
      </h1>
    </div>
    <form class="ml-48 w-2/3 mt-24 mx-auto" action={{route("quoteStore")}} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col w-full mb-5">
        <x-label name="quote_en" />
        <x-input name="quote_en" />
        @error("quote_en")
        <p class="text-red-500">{{$message}}</p>
        @enderror
        </div>
        <div class="flex flex-col w-full mb-5">
            <x-label name="quote_ka" />
            <x-input name="quote_ka" />
            @error("quote_ka")
            <p class="text-red-500">{{$message}}</p>
            @enderror
            </div>
        <div class="flex flex-col w-full mb-5">
            <x-label name="image" />
            <x-input name="image" type="file" required />
            @error("image")
                <p class="text-red-500">{{$message}}</p>
            @enderror
            </div>
        <select class="block mt-10" name="movie_id" id="movie_id">
        @foreach ($movies as $movie)
            <option value="{{$movie->id}}"
                {{old('movie_id') === $movie->id ? 'selected' : ''}}>
                {{ucwords($movie->title)}}
            </option>
        @endforeach
        </select>
        <button class="mt-10 p-3 bg-white w-1/2">{{__("language.publish")}}</button>
    </form>
</x-layout>