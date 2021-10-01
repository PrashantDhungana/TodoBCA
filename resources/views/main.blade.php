<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>

  <!--       @if (session('error'))
            <div class="alert alert-danger">
                {{ session('errors') }}
            </div>
        @endif -->

        @if (session('success'))
            <div style="background: blue;">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <a href="/add_todo"><button>Add New </button></a>
        </div>

    <table border="1px solid black">
        <tr>
            <td>ID</td>
            <td>Detail</td>
            <td>Image</td>
            <td colspan="2">Actions</td>
        </tr>

        @foreach ($todos as $todo)
            <tr>
                <td>{{$todo->id}}</td>
                <td>{{$todo->detail}}</td>
                <td><img src="/storage/images/{{$todo->images}}" height="100px" width="100px"></td>
                <td><a class="btn btn-primary" href="/edit/{{$todo->id}}">Edit</a></td>
                <td>
                    <form method="post" action="{{url('delete-todo/'.$todo->id)}}"  >
                            @csrf
                            <button class="btn btn-danger" >Delete </button>
                    </form>
                </td>

              
            </tr>
        @endforeach
    </table>
</body>
</html>

