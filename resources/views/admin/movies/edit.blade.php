<x-layout>
    <div class="w-full flex-col items-center mt-10">
        <h1 class="text-center w-full text-white font-bold text-3xl mb-6">Movie Edit</h1>
            <form action={{route("movieUpdate",["movie" => $movie->id])}} method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="flex flex-col items-center mb-5">
                    <x-label name="title" />
                    <x-input name="title" :value="old('title',$movie->title)"/>
                    @error("title")
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="w-full flex justify-center">
                    <button class="p-2.5 w-28 rounded mt-4 bg-white">Update</button>
                </div>
            </form>
    </div>
</x-layout>