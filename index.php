<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mine dos Crias</title>
    <link rel="stylesheet" href="Css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <main>
        <div id="Formulario">
            <header class="form-header">
                <h1 id="login">LOGIN</h1>
                <h2 id="adm">ADM MINE DOS CRIAS</h2>
            </header>
            
            <form action="ADM" class="form-body">
                <div class="input-group">
                    <label for="Name">Nome:</label>
                    <input type="text" id="Name" placeholder="Insira seu nome">
                </div>
                
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Insira seu email cadastrado">
                </div>
                
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" placeholder="Insira sua senha">
                </div>
                
                <div class="form-actions">
                    <button type="button" onClick="Login(event)" class="btn-enviar">ENVIAR</button>
                    <button type="button" class="btn-esqueci">ESQUECI<br>A SENHA</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>