<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div>
        <aside>
            <div>
                <h1>Bienvenido doctor</h1>
            </div>
            <ul>
                <li>
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/mensajes">Mensajes</a>
                </li>
                <li>
                    <a href="/finanzas">Finanzas</a>
                </li>
                <li>
                    <a href="/opciones">Opciones</a>
                </li>
                <li>
                    <a href="/logout">Cerrar Sesion</a s>
                </li>
            </ul>
        </aside>
        <main class="display: flex">
            <section>
                <div class="header">
                    <h1>Dashboard</h1>
                    <h2>Bienvenido doctor <strong>Pe</strong></h2>
                </div>
                <div class="graphics">
                    graficos
                </div>
                <div class="citas display: flex">
                    <div class="citas-pendientes flex-1">
                        <h2>Citas satisfactorias</h2>
                    </div>
                    <div class="citas-proceso flex-1">
                        <div>Citas en proceso</h2>
                        </div>
                    </div>
                   
            </section>
            <section>
                <div class="mi-perfil">
                    <div class="persona">
                        <div class="avatar">
                            <img src="https://i.pravatar.cc/150?img=1" alt="">
                        </div>
                        <h1>Nombre</h1>
                        <h3>Psicologo - Torreon Coahuila</h3>

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
                    <div class="datos display: flex">
                        <div class="atendidos-totales">
                            200 pacientes atendidos
                        </div>
                        <div class="ingresos-totales">
                            $2000 pesos
                        </div>
                    </div>
                    <div class="notificaciones">
                        <div class="mensajes">
                            <p>15</p>
                            <p>Nuevos Mensajes</p>
                            <x-tabler-message class="w-[25px] h-[25px]" />
                        </div>
                    </div>
            </section>
            <div class="pacientes-recientes">
                
            </div>

        </main>
    </div>
</body>

</html>