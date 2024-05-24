<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('student.update', $teacher)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$student->name) }}">
        <br>
        </label>
        <br>
        <label>
        Apellido:
        <br>
        <input name="apellidos" type="text" value="{{old('apellidos',$student->apellidos)}}">
        <br>
            </label>
            <br>
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>
