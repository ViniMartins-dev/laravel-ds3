<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

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

        .container {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .container > h1 {
            text-align: center;
            font-family: Courier;
        }

        .container > p {
            font-family: times;
        }

    </style>
</head>


<body>

    <div class="header">Bem vindo à página principal!</div>

    <div class="container">
        <h1>Título da noticia</h1>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At labore doloribus optio, dolores odit aperiam excepturi voluptate fugiat deleniti aliquam, facere rerum consequuntur corrupti obcaecati impedit. Architecto, saepe commodi. Ipsa.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eligendi neque veritatis odit, ad dolore quod esse aut, dicta ea maiores laudantium tempora repudiandae officia, ab iusto fugiat nesciunt nisi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam pariatur iusto laudantium eaque eligendi voluptatibus iure, adipisci beatae, dignissimos doloribus, consequuntur ducimus. Repudiandae dolore reprehenderit ipsum officia a, et neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt pariatur nisi repellat iusto est amet delectus? Quia, quaerat neque numquam excepturi odit voluptatem debitis architecto alias dicta harum itaque. Quo.</p>

        
    </div>

    <p>Usuário: <?php echo $username?></p>
</body>
</html>