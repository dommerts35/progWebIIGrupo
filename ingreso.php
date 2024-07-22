<?php 
// Crear conexión con la base de datos utilizando la extensión MySQLi de PHP
$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "isphpmysql"; 

$loginContraseña=$_POST["contraseña"];// con la clave le damos el valor que ingresamos

$lUsuario= $_POST["usuario"];// con la clave le damos el valor que ingresamos


//$conn generalmente se refiere a una variable que se utiliza para almacenar la conexión a una base de datos.
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificar si la conexión fue exitosa
if (!$conn) {
     // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para obtener todos los productos de la tabla "productos"
$sql = "SELECT Usuario, Clave FROM `users` WHERE Usuario='$lUsuario' AND Clave='$loginContraseña'";

$result = mysqli_query($conn, $sql);

// Verificar si la consulta fue exitosa
if ($result) {
    // Comprobar si se encontró algún resultado
    if (mysqli_num_rows($result) > 0) {
        
        // inngreso a la pagina de incio --------------------- cambiar  a la pagina principal
        header("Location:perfil.html");

    } else {
        // ingrenso a la pagina de error
        header("Location:erroUsuario.html");
    }
} else {
    // Error al ejecutar la consulta SQL
    echo "Error al ejecutar la consulta: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos al finalizar
mysqli_close($conn);
?>