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

        @foreach ($module as $module)
       
        <tr>
            <td>{{$module->id}}</td>
            <td>{{$module->name}}</td>
         <td><a href="{{route('module.show',$students->id)}}">Mostrar</a></td>
            <td><a href="{{route('module.edit',$students->id)}}">Editar</a></td>
            <td>
                <form action="{{route('module.destroy',$module->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
</body>
</html>