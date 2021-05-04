<html>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aleman";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    $id_leccion = $_POST["id_leccion"];
    $haben_sein = $_POST["haben_sein"];
    $verbo_aleman = $_POST["verbo_aleman"];
    $verbo_espanol = $_POST["verbo_espanol"];

    $sql = "INSERT INTO verbo(id_leccion,haben_sein,verbo_aleman,verbo_espanol) VALUES ('".$id_leccion."','".$haben_sein."','".$verbo_aleman."','".$verbo_espanol."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Se creó correctamente el registro</h1><br>
        <a href='"."index."."php"."'>Regresar a Inicio</a>
        <br><br>
        <a href='"."llenar_datos_verbos."."html"."'>Registrar otro verbo</a>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    ?>
</body>
</html> 