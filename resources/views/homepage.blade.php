<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Data di Uscita</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic['id']}}</th>
                            <td>{{$comic['title']}}</td>
                            <td>{{$comic['price']}}</td>
                            <td>{{$comic['series']}}</td>
                            <td>{{$comic['sale_date']}}</td>
                            <td>{{$comic['type']}}</td>
                            <td><a href="#" class="btn btn-primary">Maggiori Dettagli</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </main>

</body>

</html>
