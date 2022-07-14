<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<body>
    <h1> Hello! I am Product page.</h1>

    <p>{{ $data1}}</p>

    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach

    @for ($i = 0; $i < 3; $i++)

        <p>
            {{ $i }}
        </p>

    @endfor

    <p>{{ $title }}</p>
    <P>{{ $description }}</P>



    {{-- <form method="POST" action="{{ url('products') }}">

        <input type="text" name="input">

    </form> --}}


</body>

</html>
