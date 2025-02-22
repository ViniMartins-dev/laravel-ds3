<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

        .header {
            
        }

        .container {

        }

        .form {

        }

    </style>

</head>
<body>

    <div class="header">

        <p>Login de usuário</p>

    </div>

    <div class="container">
        <div class="form">
            <form action="{{ route('home.post') }}" method="POST">
                @csrf 
                <!-- gera um token que previne ataques no http (necessário para que a página home carrege) -->
                
                <label for="login">Login</label>
                <input type="text" name="username" id="login">
                
                <label for="pass">Senha</label>
                <input type="password" name="password" id="pass">
                
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>
