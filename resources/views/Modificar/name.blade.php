<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloqueo</title>
</head>
<body>
    <div class="testbox">
        
        <h1>Bloqueador</h1>  
       
        <form action= {{ route('agregar') }} method="POST" role="form">
            @csrf
            
        <hr>
         <button type="submit">Enviar datos</button>
        </form>

        <form action= {{ route('borrar') }} method="POST" role="form">
            @csrf
            
        <hr>
         <button type="submit">Borrar el 2do elemento</button>
        </form>
    </div>
</body>
</html> 