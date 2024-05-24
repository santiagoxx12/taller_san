<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('teacher.update', $teacher)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$teacher->name) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="description" type="text" value="{{old('description',$teacher->description)}}">
        <br>
        </label>
        <br>
        <label>
        Telefono:
            <br>
            <input name="cell_phone" type="text" value="{{old('cell_phone',$teacher->cell_phone)}}">
            <br>
            </label>
            <br>
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>
