<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <header>
        <h1> Page 2 </h1>

        <h2> Questi sono i link per altre pagine</h2>
            <ul>
                <li>
                    <a href="{{ route('homepage') }}">Vai alla home page</a>
                </li>

                <li>
                    <a href="{{ route('page_one') }}">Vai pagina 1</a>
                </li>

                <li>
                    <a href="{{ route('page_three') }}">Vai pagina 3</a>
                </li>
            </ul>
    </header>
</body>
</html>