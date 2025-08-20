<?php
        Include 'functions2.php';

        $num1 = $_POST["numero1"];
        $num2 = $_POST["numero2"];
        echo "<p>A soma de $num1 e $num2 é: " . calcularSoma($num1, $num2) . "</p>";

?>