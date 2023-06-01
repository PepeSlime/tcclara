<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timenize</title>
    <link rel="stylesheet" href="/flex/flex-style.css">
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/g-icons.css" />
    <link rel="stylesheet" href="/css/layout.css">
    <script src="/js/menu.js"></script>
</head>

<body>
    <header id="header" class="flex-row content-vcenter space-40  content-space-between box">
        <span onclick="mostarMenu()" class="material-symbols-outlined">
            menu
        </span>
    <img id="logo" src="/img/timelogor.png" alt="">
    
        

        <span onclick="volteLogin()" class="material-symbols-outlined">
            account_circle
        </span>
    </header>

    <nav id="menu" class="flex-col box fit-width space-30 hidden">
        <a href="/inicio" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                home
            </span>
            <span>
                Início
            </span>
        </a>
        <a href="/professor/listagem" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                person
            </span>


            <span>
                Professor
            </span>
        </a>

        <a href="/componente/listagem" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                grid_view
            </span>
            <span>
                Componentes
            </span>
        </a>

        <a href="/horario" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                schedule
            </span>
            <span>
               Horário
            </span>
            </a>

            <a href="/" class="flex-row gap-10 content-vcenter">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <span onclick="volteLogin()">
                    Sair
                </span>
            </a>


    </nav>

    <div class=" conteudo grow ">
        {{ $slot }}
    </div>

    <footer class="flex-row box content-center  space-40 ">
        <div>JJP 2023</div>
    </footer>

</body>

</html>