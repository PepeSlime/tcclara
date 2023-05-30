<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="/css/logintest.css">
</head>

<body>
    <div class="box">
        <form action="/"  method="post">
            <fieldset>
                <legend><b>Login</b></legend>
                <br>
                <div class="inputBox">
                    <input type="password"  name="senha"  id="senha" class="inputSenha" required>
                    <label for="senha" class="labelInput">Senha</label>
                    <button type="submit">Logar</button >
                    @csrf
                </div>
            </fieldset>

        </form>

    </div>

</body>

</html>