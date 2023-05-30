<!DOCTYPE html>
<html lang="pt-br">



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

    <div class=" conteudo grow ">

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
            
            <div class="app-content">
                {{ $slot }}
            </div>

            <footer class="flex-row box content-center  space-40 ">
                <div>JJP 2023</div>
            </footer>

</body>

</html>