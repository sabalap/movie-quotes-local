<x-layout>
    {{-- <div class="mx-auto mt-14">
        <h1 class="text-center text-4xl text-white">All Movies</h1>
        @foreach ($movies as $movie)
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
                                @foreach ($movie->quotes as $quote)
                                  <div class="h-12 w-12 flex-shrink-0">
                                          <img class="h-12 w-12 rounded-full" src="{{asset('/images/'.$quote->image)}}" alt="" />
                                  </div>
                                @endforeach 
                              </div>
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                              <div class="text-gray-900">
                                <a href="movies/{{$movie->title}}">
                                    {{$movie->title}}
                                </a>
                            </div>
                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                              <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                >Edit</a
                              >
                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                              <form method="POST" action="movies/{{$movie->id}}">
                                @csrf
                                @method("DELETE")
                                <button class="text-indigo-600 hover:text-indigo-900"
                                  >Delete
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
    </div> --}}
</x-layout>