<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    @vite('resources/css/app.css')

</head>
<body>
<x-layout.navbar />
<main class="display: flex gap-5">
       
            <x-post/>
            <div class="bg-slate-500">
            Hello world
        </div>
        <x-chat />
    </main>
 
</body>
</html>