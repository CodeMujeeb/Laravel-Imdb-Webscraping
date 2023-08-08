@foreach($movies as $movie)
<ul>
    <li>
        <div> <a href="{{ $movie->url }}">{{ $movie->title }} </a> </div>
        <div> Year {{ $movie->year }} </div>
        <div> Rating {{ $movie->rating }} </div>
    </li>

</ul>

@endforeach