<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <header>
        <h1> Hello World </h1>

        <h2> Questa è {{ $name_page }} </h2>

        <h2> Questi sono i link per altre pagine</h2>
        <ul>
            <li>
                <a href="{{ route('page_one') }}">Vai pagina 1</a>
            </li>

            <li>
                <a href="{{ route('page_two') }}">Vai pagina 2</a>
            </li>

            <li>
                <a href="{{ route('page_three') }}">Vai pagina 3</a>
            </li>
        </ul>

        @if (count($data_test) > 0)
        <ul>
            Test:
            @foreach ($data_test as $test)
                <li> {{ $test }} </li>
            @endforeach
        </ul>
        @endif
    </header>
</body>
</html>