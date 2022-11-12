<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registarse</title>
    @vite('resources/css/app.css')  
</head>
<body class="p-20 display: flex justify-center h-screen overflow-hidden">
<img class="display: absolute top-[-20%] z-0 left-[24%]" src="{{ asset('images/blob-haikei.svg') }}" alt="">
<img class="display: absolute top-[50%] z-0 left-[-10%]" src="{{ asset('images/blob-haikei.svg') }}" alt="">
<img class="display: absolute top-[45%] z-0 left-[60%]" src="{{ asset('images/blob-haikei.svg') }}" alt="">
    <div class="z-10 display: flex bg-slate-50  shadow-xl h-[100%] gap-10 justify-evenly   border-2 border-sky-300 rounded">
        <div class="flex-1 h-full w-full bg-morado-100 p-3">
        <div class="display: flex flex-col text-slate-50 rounded-xl  items-center justify-evenly h-2/3 my-10  text-center">
            <h1 class="text-3xl "><strong>Nunca solas:</strong> Tu voz no volverá a ser callada</h1>
            <p class="text-xl" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam error numquam repellat sequi dolore aspernatur harum facere quam ut. Dolore quasi natus iusto minus, repellendus ducimus velit soluta cum nobis eaque voluptatum saepe aliquid hic possimus perspiciatis rem tenetur similique, eos minima debitis laborum ex quisquam? Dolor minima porro unde?</p>
        </div>
        </div>
        <form class="flex-1 mt-2" action="" >
           
            <div class="display: flex gap-1 bg-yellow-50 p-2 rounded-l my-3">
                <input type="text" class=" bg-transparent  w-full" name="name" placeholder="Nombre Completo" required>
            </div>
            <div class="display: flex gap-1 bg-yellow-50 p-2 rounded-l my-3">
                <input type="text" class=" bg-transparent  w-full" name="name" placeholder="Apellidos" required>
            </div>
            <div class="display: flex gap-1 bg-yellow-50 p-2 rounded-l my-3">
                <input type="text" class=" bg-transparent  w-full" name="name" placeholder="Campo Especialista" required>
            </div>
            <div class="display: flex gap-1 bg-yellow-50 p-2 rounded-l my-3">
                <input type="email" class="bg-transparent w-full" name="email" placeholder="Correo electronico" required>
            </div>
            <div class="display: flex gap-1 bg-yellow-50 p-2 rounded-l my-2">
                <input type="password" class="bg-transparent w-full" name="password" placeholder="Contraseña" required>
            </div>
            <h2 class="text-l text-center text-slate-500">Queremos verificar que la informacion proporcionada sea veridica, mandanos fotos de los siguietes documentos<h2>
            <h3 class="text-l text-center text-slate-500">INE Y Certificado de Titulacion<h3>
            <input class="cursor-pointer display: flex gap-1 bg-yellow-50 p-2 rounded-l my-2 dark:text-gray-400  dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <input class="cursor-pointer display: flex gap-1 bg-yellow-50 p-2 rounded-l my-2 dark:text-gray-400  dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
           
            <button type="submit" class=" mt-5 bg-green-300 rounded-xl w-9/12 display: block mx-auto text-white shadow-md p-2">Enviar Solicitud</button>
        </form> 
    </div>

</body>
</html>