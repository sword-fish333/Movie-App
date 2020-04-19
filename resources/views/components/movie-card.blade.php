<div class="mt-8">
    <a href="{{route('movies.show',$movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show',$movie['id'])}}" class="text-lg mt-2 hover:text-grey:300">{{$movie['title']}}</a>
        <div class="flex items-center text-grey-400">
            <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                <span class="ml-1" >
                               {{($movie['vote_average'] *10).'%'}}
                            </span>
                <span class="mx-2">|</span>
                <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
                <div class="text-grey-400">
                    @foreach($movie['genre_ids'] as $genre)
                        {{$genres->get($genre)}} @if(!$loop->last) , @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
