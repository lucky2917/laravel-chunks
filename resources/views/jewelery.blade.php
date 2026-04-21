<h1>Jewelery available in shop</h1>
<ul>
    @foreach ($jewellery as $id =>$item)
        <li>
            <a href="{{ url('/jewelery/' . $id) }}">{{ $item['name'] }} - {{ $item['price'] }}</a>
        </li>
    @endforeach
</ul>