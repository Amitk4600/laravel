<h1>user page</h1>

{{-- <p>Hello {{$user}}</p>
<p>Hello {{$city}}</p> --}}

@foreach ($users as $id=>$st )
    <h3>{{$id}}|{{$st['first_name']}}|{{$st['last_name']}}|{{$st['age']}}|{{$st['email']}}</h3>
@endforeach