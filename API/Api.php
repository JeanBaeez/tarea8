<?php
include './Modelos/Formulario.php';
class Api
{
    private $loaction = '/Applications/XAMPP/xamppfiles/htdocs/Itla/tarea8/resourses/tarea8.sqlite';
  
  
   public $username = "u180490950_admin";
   public  $password = "assessin23J";
    function __construct()
    {
        $conn = mysqli_connect("185.212.71.204:3306", "u180490950_admin", "assessin23J");

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }


    function getCasosUcrania()
    {
        $sql = "SELECT * FROM CasosUcrania";
        $result = $this->conn->query($sql);
        $casos = array();
        while ($row = $result->fetchArray()) {
            $casos[] = $row;
        }
        return $casos;
    }
    public  function registrarCasos($formulario)
    {
        $fecha = $formulario['fecha'];
        $hora = $formulario['hora'];
        $ciudad = $formulario['ciudad'];
        $latitud = $formulario['latitud'];
        $longitud = $formulario['longitud'];
        $tipoArma = $formulario['tipoArma'];
        $muertos = $formulario['muertos'];
        $heridos = $formulario['heridos'];
        $totalDanos = $formulario['totalDanos'];
        $autor = $formulario['autor'];
        $sql = "INSERT INTO CasosUcrania (Fecha, Hora, Ciudad, Latitud, Longitud, TipoArma, Muertes, Heridos, TotalDanos, AutorAtaque) VALUES ('$fecha', '$hora', '$ciudad', '$latitud', '$longitud', '$tipoArma', '$muertos', '$heridos', '$totalDanos', '$autor')";
        $result = $this->db->query($sql);

        return $result;
    }

    function GetCasosById($id)
    {
        $formulario = new Formulario();

        $sql = "SELECT * FROM CasosUcrania WHERE id = $id";
        $result = $this->db->querySingle($sql, true);
        $formulario->Id = $result['id'];
        $formulario->Fecha = $result['Fecha'];
        $formulario->Hora = $result['Hora'];
        $formulario->Ciudad = $result['Ciudad'];
        $formulario->Latitud = $result['Latitud'];
        $formulario->Longitud = $result['Longitud'];
        $formulario->TipoArma = $result['TipoArma'];
        $formulario->Muertos = $result['Muertos'];
        $formulario->Heridos = $result['Heridos'];
        $formulario->TotalDanos = $result['TotalDanos'];
        $formulario->AutorAtaque = $result['AutorAtaque'];

        json_encode($result);
        return $formulario;
    }
}
