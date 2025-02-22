<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

        .container {
        }

        .header {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
            background-color: #239ED0;
            color: #FFFFFF;
            font-family: Arial Black;
            border-radius: 10px;
        }


        .form {
            padding-top: 70px;
            width: 30%;
            margin: auto;
        }

        form > label {
            font-family: helvetica;
            font-weight: bold;
        }

        form > input {
            padding: 5px;
            margin: 5px;
            margin-left: 0px;
            width: 97%;
            border: none;
            border-bottom: 2px #239ED0 solid;
        }
        
        .btn {
            border: none;
            width: 100px;
            font-family: helvetica;
            font-weight: bold;
            border-radius: 3px
        }

        .btn:hover {
            border: 1px black solid;
        }

    </style>

</head>
<body>

    <div class="container">

        <div class="header">

            <p>Login de usuário</p>

        </div>

        <div class="form">
            <form action="{{ route('home.post') }}" method="POST">
                @csrf 
                <!-- gera um token que previne ataques no http (necessário para que a página home carregue) -->
                
                <label for="login">Login</label><br>
                <input type="text" name="username" id="login"><br>
                
                <label for="pass">Senha</label><br>
                <input type="password" name="password" id="pass"><br>
                
                <input type="submit" value="Entrar" class='btn'>
            </form>
        </div>
    </div>
</body>
</html>
