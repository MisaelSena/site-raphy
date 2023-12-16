<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado!</title>
    <style>      

        @font-face {
        font-family: 'Archia-Regular';
        src: url('../fonts/Archia-Regular.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
        }
        
        body {
            background-color: #333;
            color: #fff;
            font-family: 'Archia-Regular';
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            justify-content: center; 
        }

        .container {
            width: 80%;
            margin: auto;
        }

        header {           
            padding: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .content {
            margin-top: 20px;
        }

        h1 {
            font-size: 2em;
        }

        p {
            font-size: 1.2em;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="../img/signature-red.png" alt="Logo da Empresa">
        </header>

        <div class="content">
            <h1>Atenção!</h1>
            <p>Sua mensagem não foi enviada! Tente Novamente!</p>
        </div>
    </div>
</body>
</html>