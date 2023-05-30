<x-layout>
    
    <title>Cadastro componente</title>
<link rel="stylesheet" href="/css/prof.css">
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

    

</body>

</x-layout>