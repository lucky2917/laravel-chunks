@php
$name = 'ravi';
$color = ['red','green','blue'];
@endphp

{{ $name }}
<ul>
    @foreach ($color as $index => $value)
        <li>{{ $index }}: {{ $value }}</li>
    @endforeach
</ul>
