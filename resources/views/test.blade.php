@php
    $user = 'amit';
    $fruits = ["Apple","orange","banana"];
    $name = ["anil","amit","mandy","sandy",];
@endphp

<script>
    var data = @json($user);
    console.log(data);

    var data1 = @json($fruits);
    console.log(data1);
// with foreach
    data1.forEach(element => {
        console.log(element);
    });
    
    // new format
    var data3 = {{Js::from($name)}};
    data3.forEach(e => {
        console.log(e);
    });
</script>