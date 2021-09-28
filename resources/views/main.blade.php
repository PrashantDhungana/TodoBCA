<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <td>ID</td>
            <td>Detail</td>
            <td colspan="2">Actions</td>
        </tr>

        @foreach ($todos as $todo)
            <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->detail}}</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>

            </tr>
        @endforeach
    </table>
</body>
</html>