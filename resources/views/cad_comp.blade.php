<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro componente</title>
    <link rel="stylesheet" href="/flex/flex-style.css">
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/css/prof.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>


    <header id="header" class="flex-row content-vcenter space-40 content-space-between box">
        <span class="material-symbols-outlined">
            menu
        </span>

        <h1>
            Timenize
        </h1>

        <span class="material-symbols-outlined">
            account_circle
        </span>
    </header>

    <div class="conteudo grow">

        <nav id="menu" class="flex-col box fit-width space-30">
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
                <span class="material-symbols-outlined">
                    logout
                </span>
                <span>
                    Logout
                </span>
            </a>


        </nav>
        <section>
            <form id="form">
                <div>
                    <label>Cadastro Componente</label>
                </div>
                <div>
                    <input type="text" placeholder="Componente:" name="name" required>
                </div>

                <div>
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </section>

    </div>

    <footer class="flex-row content-center box space-40 ">
        <div>JJP 2023</div>
    </footer>

</body>

</html>