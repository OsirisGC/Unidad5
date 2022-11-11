<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>edit</h1>

        <form method="post" action="{{ url('/users')}}">
            @csrf
            @method('PUT')

            <input type="hidden" value="{{$user ->name}}" name="name">

            <label>
                nombre
            </label>
            <input type="text" value="{{$user -> name}}" name="name">
            <br>

            <label>
                apellido
            </label>
            <input type="text" value="{{$user -> lastname}}" name="lastname">
            <br>

            <label>
                email
            </label>
            <input type="email" value="{{$user -> email}}" name="email">
            <br>
            
            <button>
                edit
            </button>
        </form>

    </body>
</html>