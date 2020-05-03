<div class="relative">
<input type="text" placeholder="Search" wire:model.debounce.500ms="search" class="bg-gray-800 rounded-full text-sm w-64 px-4 pl-8 focus:outline-none focus:shadow-outline py-1">
@if(strlen($search)>0)
    <div class="absolute bg-gray-800 rounded w-64 mt-4">
  @if($searchResults->count()>0)
        <ul>
            @foreach($searchResults as  $result)
                <li class="border-b border-gray-700">
                    <a href="{{route('movies.show',$result['id'])}}" class="block hover:bg-gray-700 text-sm px-3  py-3 flex items-center">
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
