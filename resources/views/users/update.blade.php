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

        <form method="post" action="http://127.0.0.1:8000/users/">
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