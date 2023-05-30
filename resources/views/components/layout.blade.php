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
</head>

<body>
    <header id="header" class="flex-row content-vcenter space-40  content-space-between box">
        <span onclick="mostarMenu()" class="material-symbols-outlined">
            menu
        </span>

        <h1>
            Timenize
        </h1>

        <span onclick="volteLogin()" class="material-symbols-outlined">
            account_circle
        </span>
    </header>

    <nav id="menu" class="flex-col box fit-width space-30 hidden">
        <a href="" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                home
            </span>
            <span>
                Home
            </span>
        </a>

        <a href="" class="flex-row gap-10 content-vcenter">
            <span class="material-symbols-outlined">
                settings
            </span>

            </span>
            <span>
                Configurações
            </span>
        </a>

        <a href="" class="flex-row gap-10 content-vcenter">
            <span onclick="volteLogin()" class="material-symbols-outlined">
                logout
            </span>
            <span onclick="volteLogin()">
                Logout
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