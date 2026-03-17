<!DOCTYPE html>
<html>
<body>
    <h1>Multiplication Table of {{ $number }}</h1>
    <table>
        @for ($i = 1; $i <= 10; $i++)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $i }}</td>
            <td>{{ $number * $i }}</td>
        </tr>
        @endfor
    </table>
</body>
</html>