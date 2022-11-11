<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-layout.navbar />
  <div class="flex flex-wrap m-20 text-2xl text-center w-[85%] text-white">
    <div class="flex bg-morado-200 p-6  rounded-lg ">¿Qué es Nunca Solas? </div>
    <div class="flex-1 bg-morado-100 p-6  rounded-lg">Plataforma diseñada para brindar apoyo a todas las mujeres violentadas 
      que sufren, sufrieron o podrían sufrir algún tipo de maltrato.
      </div>
  </div>

  <div class="flex flex-wrap m-20  w-[85%]  text-2xl text-center text-white">
  <div class="flex bg-morado-200 w-[100%] rounded-lg p-3">Trabajamos para tener un lugar de confianza </div>
  <div class="flex flex-flow bg-morado-100 w-[100%] justify-center">
    <x-layout.div_inicio titulo="FOROS" class="flex" imagen="{{asset('images/ciruculo.png') }}" 
    info="En donde podrás 
    comunicarte con 
    otras mujeres" />
    <x-layout.div_inicio titulo="ESPECIALISTA" class="flex" imagen="{{ asset('images/ciruculo.png') }}" 
    info="Te brindarán ayuda
    " />
    <x-layout.div_inicio titulo="BOLSA DE TRABAJO" imagen="{{ asset('images/ciruculo.png') }}"  
    info="Oportunidades de 
    empleo para aquellas
    mujeres dispuestas 
    a salir adelante." />
    <x-layout.div_inicio titulo="PRODUCTOS" imagen="{{ asset('images/ciruculo.png') }}"  
    info="Productos de 
    defensa personal." />
    <x-layout.div_inicio titulo="GUIAS" imagen="{{ asset('images/ciruculo.png') }}"  
    info="¿Qué hacer en 
    caso de sufrir algún 
    tipode maltrato?" />
  </div>
  </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
</html>
