<h1> single Usrs</h1>
@foreach ($data as $id => $usr)
    <h2>Id:{{ $usr->id }} </h2>
    <h2>name: {{ $usr->name }}</h2>
    <h2>email:{{ $usr->email }}</h2>
    <h2>city:{{ $usr->city }}</h2>
    <h2>age:{{ $usr->age }}</h2>
@endforeach
