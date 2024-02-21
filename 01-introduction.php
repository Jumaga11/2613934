<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Suma</title>
    <link rel="stylesheet" href="CSS/master.css">
</head>
<body>
    <h2>Calculadora de Suma</h2>
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Primer número: <input type="number" name="num1" placeholder="Ingrese un número" ><br>
        Segundo número: <input type="number" name="num2" placeholder="Ingrese un número" ><br>
        <input type="submit" name="submit" value="Calcular Suma">
    </form>
    
</body>
</html>

<?php
/*
#Linear Programing
$num1 = 54;
$num2 = 32;

echo "{$num1} * {$num2} = " . ($num1 * $num2);

#Structured Programing
$num1 = 54;
$num2 = 32;

echo "{$num1} * {$num2} = " . ($num1 * $num2);
echo "<br>";

$string = "hola";
echo "{$string} = " . md5($string);
echo "<br>";
echo "PASSWORD_HASH({$string}) = " . password_hash($string, PASSWORD_DEFAULT);
echo "<br>";
$hash = password_hash($string, PASSWORD_DEFAULT);

if (password_verify($string, $hash)) {
    echo "verified successfull!";
}

function adition($num1, $num2){
    return ($num1 + $num2);

}

$rs=adition(34, 890);
echo "<br>" .$rs ."<br>"*/



# Object Orioented Programing

class Adition {
    public $num1;
    public $num2;
    
    public function getResult() {
        return ($this->num1 + $this->num2);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sum = new Adition;
    $sum->num1 = $_POST['num1'];
    $sum->num2 = $_POST['num2'];
    echo "<br>La suma de {$sum->num1} y {$sum->num2} es: " . $sum->getResult();
}
?>

