<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')  

</head>

<body>
    <div class="flex gap-10">
        <aside class="w-2/12 bg-blue-100 h-screen">
            <div class="bg-blue-500 p-3 text-white text-2xl rounded-b-xl py-3">
                <h1>Bienvenido doctor</h1>
            </div>
            <ul class="pl-3 pt-2">
               
                <li class="block mx-auto py-4 text-xl text-center">
                    <a href="/doctor/dashboard">Dashboard</a>
                </li>
                <li class="block bg-white rounded-l-full mx-auto py-4 text-xl text-center">
                    <a href="/doctor/messages">Mensajes</a>
                </li>
                <li class="block mx-auto py-4 text-xl text-center">
                    <a href="/finanzas">Finanzas</a>
                </li>
                <li class="block mx-auto py-4 text-xl text-center">
                    <a href="/opciones">Opciones</a>
                </li>
                <li class="block mx-auto py-4 text-xl text-center">
                    <a href="/logout">Cerrar Sesion</a s>
                </li>
            </ul>
        </aside>
        <main class="display: flex flex-1">
            <section class="w-8/12 mt-5 p-5">
                <div class="header p-4 bg-blue-600 text-white ">
                    <h2>Bienvenido doctor <strong>Maria Luisa</strong></h2>
                </div>
                <div class="graphics">
                <div class="shadow-lg rounded-lg overflow-hidden">
  <canvas class="p-10" id="chartLine"></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart line -->
<script>
  const labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];
  const data = {
    labels: labels,
    datasets: [
      {
        label: "Historial de clientes atendidos",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [0, 10, 5, 2, 20, 30, 45],
      },
    ],
  };

  const configLineChart = {
    type: "line",
    data,
    options: {},
  };

  var chartLine = new Chart(
    document.getElementById("chartLine"),
    configLineChart
  );
</script>
                </div>
                <div class="citas mt-4 display: flex">
                    <div class="citas-pendientes  text-center flex-1">
                        <h2>Citas satisfactorias</h2>
                        <x-doctor.pacients />                        
                        <x-doctor.pacients />                        
                        <x-doctor.pacients />                        
                        
                    </div>
                    <div class="citas-proceso text-center flex-1">
                        <h2>Citas en proceso</h2>
                        <x-doctor.pacients />
                        <x-doctor.pacients />
                        <x-doctor.pacients />
                        </div>
                    </div>
                   
            </section>
            <section class="w-full p-3 bg-blue-500 " >
               <div class="bg-white p-5 shadow-xl mt-6">
               <div class="mi-perfil ">
                    <div class="persona text-center">
                            <img class="display: block mx-auto rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                        <h1 class="text-center text-xl text-purple-400">Maria Luisa</h1>
                        <h3 class="border-b-2  border-b-red-500">Psicologo especialista - Torreon Coahuila</h3>

                    </div>
                </div>
                <div class="pacientes-satisfactorios">
                    <h1><strong>10</strong> mujeres atendidas esta semana</h1>
                    <p>Progreso para ingresos</p>
                    <div class="relative pt-1">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-pink-200">
                            <div style="width: 50%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                        </div>
                    </div>
                        <div class="atendidos-totales text-xl mb-4">
                            <strong class="bg-blue-500 p-3 rounded text-white">200</strong> Pacientes atendidos
                        </div>
                        <div class="ingresos-totales text-xl mb-4 mt-5">
                            <h1 class="mb-4">Ingresos:</h1>
                            <strong class="bg-blue-500 p-3 rounded text-white">$2000</strong> Pesos mexicanos 
                        </div>
                        <p>Nuevos Mensajes</p>
                    <div class="notificaciones flex">
                     
                        <x-tabler-message class="w-[25px] h-[25px]" />

                        <p  >15</p>
                        </div>
                    </div>
               </div>
            </section>
           
        </main>
        
    </div>
</body>

</html>