<div class="pt-10 p-4 m-4 font-bold text-yellow-100 shadow-md rounded-xl flex flex-col items-center bg-yellow-800 bg-opacity-75 prose-yellow prose-lg md:prose-xl md:px-10 w-full md:max-w-screen-lg border-4 border-yellow-500 relative">
    {{$slot}}

@isset($icon)
    <img class="absolute -right-24 bottom-0 w-40 md:w-60" src="{{$icon}}" />
@endisset
</div>

