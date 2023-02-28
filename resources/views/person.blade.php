<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Person</title>
</head>
<body>
    <div class="container mt-3">
        <h1 style="color: {{ $color }}">Person</h1>
        <p>This is the person view!</p>
        <hr>
        <p><b>Name:</b> {{ $name }}</p>
        <p><b>Age:</b> {{ $age }}</p>
        <p><b>Address:</b> {{ $address }}</p>
        <p>
            <b>Can vote or not:</b>
            @if($age < 18)
                <span style="color: red">Cannot vote!</span>
            @else
                <span style="color: green">Can vote!</span>
            @endif
        </p>
        <hr>
        <h3>Siblings</h3>
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="table-dark">
                    <th>No.</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>CAN VOTE or NOT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siblings as $sibling)
                    <tr
                        class="{{  ($sibling['age'] < 18) ? 'table-danger' : 'table-success'  }}"
                        style="vertical-align: middle"
                    >
                        <td align="right">{{ $loop->index + 1 }}.</td>
                        <td>{{ $sibling['name'] }}</td>
                        <td>{{ $sibling['age'] }}</td>
                        <td>
                            @if($sibling['age'] < 18)
                                <span style="color: red">Cannot vote!</span>
                            @else
                                <span style="color: green">Can vote!</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>