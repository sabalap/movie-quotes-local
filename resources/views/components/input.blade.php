@props(["name"])
<input class="outline-none p-1.5 border text-left w-6/12" name="{{$name}}" id="{{$name}}" {{$attributes(['value' => old($name)])}}>