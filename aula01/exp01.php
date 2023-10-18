<!DOCTYPE html>
<body>
    <?php 
//isso é um teste no codigo com o github
    echo "<h1>prefira ser o burro entre os intelingentes</h1>";
    $number = 12;
    $resposta = "";
    if($number > 0):
$resposta = " o numero é positivo";
elseif($number < 0 ):
    $resposta = "o numero é negativo";
else:
$resposta = "o numero é igual zero";
endif;
echo $resposta;
    ?>
</body>
</html>