<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde index</h1>

    <table>

        @foreach ($students as $students)
       
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->apellidos}}</td>
            <td><a href="{{route('student.show',$students->id)}}">Mostrar</a></td>
            <td><a href="{{route('student.edit',$students->id)}}">Editar</a></td>
            <td>
                <form action="{{route('student.destroy',$students->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
</body>
</html>