<div class="relative mt-3 md:mt-0" x-data="{isOpen:true}"
     @click.away="isOpen=false"
>
<input type="text"
        x-ref="search"
       @keydown.window="
        if(event.keyCode===191){
        event.preventDefault();
        $refs.search.focus();
        }
"
       placeholder="Search" wire:model.debounce.500ms="search"
       class="bg-gray-800 rounded-full text-sm w-64 px-4 pl-8 focus:outline-none focus:shadow-outline py-1"
        @focus="isOpen=true"
       @keydown.escape.window="isOpen=false"

       @keydown="isOpen=true"
       @keydown.shift.tab="isOpen=false"

>
@if(strlen($search)>=2)
    <div class="z-50 absolute bg-gray-800 rounded w-64 mt-4"

         x-show.transition.opacity="isOpen"
    >
  @if($searchResults->count()>0)
        <ul>
            @foreach($searchResults as  $result)
                <li class="border-b border-gray-700">
                    <a
                            href="{{route('movies.show',$result['id'])}}"
                            class="block hover:bg-gray-700 text-sm px-3  py-3 flex items-center"
                    @if($loop->last)
                        @keydown.tab="isOpen=false"
                        @endif
                    >
                        <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="Poster" class="w-8">
                        <span class="ml-2">{{$result['title']}}</span></a>
                </li>
            @endforeach
        </ul>
      @else
      <div class="px-3 py-3">No results for "{{$search}}"</div>
      @endif
</div>
    @endif
</div>
