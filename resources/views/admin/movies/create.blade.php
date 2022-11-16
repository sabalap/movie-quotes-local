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
    <form class="ml-48 w-2/3 mt-24 mx-auto" action={{route("dashboard")}} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col w-full">
        <x-label name="{{__('language.title')}}" />
        <x-input name="{{__('language.title')}}" />
        @error("title")
                <p class="text-red-500">{{$message}}</p>
        @enderror
        </div>
        <button class="mt-10 p-3 bg-white w-1/2">{{__("language.publish")}}</button>
    </form>
</x-layout>