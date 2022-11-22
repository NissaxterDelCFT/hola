<?php
    try{
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "hola";

        $cnx = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
        $query = $cnx->query('SELECT * FROM productos');
        echo "<br><h1>Listado de Productos</h1></br>";
        foreach($query as $registros){
            var_dump($registros);
            echo "producto: ", $registros['PRO_ID'];
            echo "<br> producto descripción: ", $registros['PRO_DESCRIPCION'];
            echo "<hr>";

        }
    }catch(PDOexception $err){
        var_dump($err->getMessage());
    }
    echo "<table border='1'>";
    for($i=0; $i<3; $i++){
    
    echo "<tr>";
        for($j=0; $j<3; $j++){
    
    echo "<form action='tabla.php' method='POST'>";
    echo "<td>
            <table border='1'>
                <tr>
                    <td colspan='2'>Marca</td>
                </tr>
                <tr>
                    <td colspan='2'>Descripción</td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type='submit' name='agregar' value='agregar'
                </tr>
            </table>
        </td>
        </form>";
    }
    echo "</tr>";
    }
    echo "</table>";
?>