</head>
<body>
    <h2>Calculadora Soma</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Núm 1: <input type="text" name="num1"><br><br>
    Núm 2: <input type="text" name="num2"><br><br>
    <input type="submit" value="Somar">
</form>

<?php
//verifica se os numeros foram enviados pelo formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //verifica se os campos foram preenchidos
    if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        //realiza a soma dos numeros
        $soma = $num1 + $num2;

        // Exibe o resultodo da soma 
        echo "<h3>A soma de $num1 e $num2 é: $soma</h3>";

    } else {
        //caso algm campo não tenha sido preenchido, exibe uma mensagem de erro
        echo "<h3>Preencha todos os campos.</h3>";
    }
}
?>

</body>
</html>