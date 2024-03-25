<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio de valores e dados através de formulario<br><br>";
            ?>
            <!-- Utiliza o metodo GET para envio dos dados para o arquivo
                 exemplo19.php
                 O atributo name do input é o que o arquivo exemplo19 ira
                 interpretar como parâmentro da URL($_GET["valor]).
                 O type="submit" cria um botão que fará a ação do envio-->
            <form method="get" action="exemplo19.php" name="formulario">
                <p>VALOR: <input type="text" name="valor"></p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </div>
    </body>
</html>