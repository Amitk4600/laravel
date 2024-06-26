<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All users</h1>
                <table class="table table-boarderd table-striped">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>city</th>
                        <th>age</th>
                        <th>view</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($data as $id => $u)
                        <tr>

                            <td> {{ $u->id }}</td>
                            <td> {{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->city }}</td>
                            <td>{{ $u->age }}</td>
                            <td><a href="{{ route('single.Usrs', $u->id) }}" class="btn btn-primary btn-sm">view</a>
                            <td><a href="{{ route('delete.user', $u->id) }}" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>
