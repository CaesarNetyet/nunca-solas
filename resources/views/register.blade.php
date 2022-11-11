<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registarse</title>
    @vite('resources/css/app.css')  
</head>
<body class="p-20 display: flex justify-center">
    <div class="display: flex bg-morado-300 p-10  border-2 border-sky-300 rounded">
        <div class="flex-1">
            <h1>Registrarse es muy facil</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam error numquam repellat sequi dolore aspernatur harum facere quam ut. Dolore quasi natus iusto minus, repellendus ducimus velit soluta cum nobis eaque voluptatum saepe aliquid hic possimus perspiciatis rem tenetur similique, eos minima debitis laborum ex quisquam? Dolor minima porro unde?</p>
        </div>
        <form class="flex-1" action="" >
            <h2 class="text-center text-red-500">Registrate :)</h2>
            <div class="display: flex bg-yellow-50 p-2 rounded-3xl my-2">
                <x-heroicon-o-user class="h-6 w-6" />
                <input type="text" class="bg-transparent" name="name" placeholder="Nombre" required>
            </div>
            <div class="display: flex bg-yellow-50 p-2 rounded-3xl my-2">
                <x-heroicon-o-user class="h-6 w-6" />
                <input type="email" class="bg-transparent" name="email" placeholder="Correo electronico" required>
            </div>
            <div class="display: flex bg-yellow-50 p-2 rounded-3xl my-2">
                <x-heroicon-o-user class="h-6 w-6" />
                <input type="password" class="bg-transparent" name="password" placeholder="contraseña" required>
            </div>
            <button type="submit" class="bg-green-300 rounded-xl w-9/12 display: block mx-auto text-white shadow-md p-2">Registrarse</button>
        </form> 
    </div>
</body>
</html>