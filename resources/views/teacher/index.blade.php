<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde listar</h1>

    <table>

        @foreach ($teachers as $teachers)
       
        <tr>
            <td>{{$teachers->id}}</td>
            <td>{{$teachers->name}}</td>
            <td>{{$teachers->description}}</td>
            <td>{{$teachers->cell_phone}}</td>
            <td><a href="{{route('teacher.show',$teachers->id)}}">Mostrar</a></td>
            <td><a href="{{route('teacher.edit',$teachers->id)}}">Editar</a></td>
            <td>
                <form action="{{route('teacher.destroy',$teachers->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
</body>
</html>