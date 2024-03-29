<x-layout>
    <div class="ml-24 mt-10">
        <h1 class="text-xl-5 font-bold mb-4 text-white">
            <a href={{route('dashboard')}} class={{request()->is(('admin/movies')) ? "bg-blue-500 text-white" : ""}}>
                {{__("language.all movies")}}
            </a>
        </h1>
        <h1 class="text-xl-5 font-bold mb-4 text-white">
          <a href={{route('allQuotes')}} class={{request()->is(('admin/quotes')) ? "bg-blue-500 text-white" : ""}}>
              {{__("language.all quotes")}}
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
    <div class="ml-56 mt-10 w-full">
        @foreach ($quotes as $quote)
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="mt-8 flex flex-col">
              <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                  <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                      <tbody class="h-28 divide-y divide-gray-200 bg-white">
                        <tr v-for="person in people" :key="person.email">
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                            <div class="flex items-center">
                                  <div class="h-12 w-12 flex-shrink-0">
                                    @if (Str::startsWith($quote->image,"images"))
                                    <img class="h-full w-full mb-8" src="{{asset('storage/' . $quote->image)}}" alt="">
                                        @else 
                                    <img class="h-full w-full mb-8" src="{{asset($quote->image)}}" alt="">
                                        @endif
                                  </div>
                            </div>
                          </td>
                          <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <div class="text-gray-900">
                                <h2>
                                  {{$quote->quote}}
                                </h2>
                          </div>
                          </td>
                          <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            <a href={{route("quoteEdit",$quote->id)}} class="text-indigo-600 hover:text-indigo-900"
                              >{{__("language.quote edit")}}</button
                            >
                        </td>
                          <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            <form method="POST" action={{route("deleteQuote",$quote->id)}}>
                              @csrf
                              @method("DELETE")
                              <button class="text-indigo-600 hover:text-indigo-900"
                                >{{__("language.delete")}}
                                </button>
                            </form>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</x-layout>