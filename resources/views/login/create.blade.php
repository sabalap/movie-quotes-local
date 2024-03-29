<x-layout>
  <div class="flex-col w-full mx-auto">
      <div class="flex min-h-full w-full flex-col justify-center py-12 sm:px-6 lg:px-8">
          <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white w-full py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <form action={{route("loginStore")}} class="space-y-6" method="POST">
          @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">{{__("language.email_adress")}}</label>
          <div class="mt-1">
            <input id="email" value="{{old('email')}}" name="email" type="email" autocomplete="email" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
          @error("email")
              <p class="text-red-500">{{$message}}</p>
          @enderror
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">{{__("language.password")}}</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
          @error("password")
              <p class="text-red-500">{{$message}}</p>
          @enderror
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{__("language.sign in")}}</button>
        </div>
      </form>
  </div>
</x-layout>