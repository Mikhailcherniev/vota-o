<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Votação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    idade : <input type="text" name="idade"><br><br>
   
    <input type="submit" value="verificar">
</form>

<?php
//verifica se os numeros foram enviados pelo formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (!empty($_POST['idade'])) {
        $idade = $_POST['idade'];

        $resultado = $idade;

        if($idade >= 18 && $idade = 69){
            echo "<h3>você tem $idade, pode votar</h3>";
        } 
        if ($idade >= 70 && $idade = 99){

            echo "<h3>você tem $idade, pode votar mas não é obrigatorio</h3>";
        } 

        if ($idade = 16){
            echo "<h3>você tem $idade, pode votar mas não é obrigatorio</h3>";
        }
        
         if( $idade <= 15){
            "você tem $idade, não pode votar";
        }
        
    }
}
?>

</body>
</html>