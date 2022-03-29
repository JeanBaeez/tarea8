<?php
include './Modelos/Formulario.php';
class Api
{
   
  
  
   public $username = "u180490950_admin";
   public  $password = "assessin23J";
  
    function __construct()
    {
        $conn =  new mysqli("185.212.71.204:3306", "u180490950_admin", "assessin23J", "u180490950_Tarea8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;

       
      
    }


    function getCasosUcrania()
    {
       
        $sql = "SELECT * FROM CasosUcrania";
        $result = $this->conn->query($sql);
      
        $casos = array();
        while ($row = $result->fetch_array()) {
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
        $sql = "INSERT INTO CasosUcrania (Fecha, Hora, Ciudad, Latitud, Longitud, TipoArma, Muertos, Heridos, TotalDanos, Autor) VALUES ('$fecha', '$hora', '$ciudad', '$latitud', '$longitud', '$tipoArma', '$muertos', '$heridos', '$totalDanos', '$autor')";
        $result = $this->conn->query($sql);

        return $result;
    }

    function GetCasosById($id)
    {
        $formulario = new Formulario();

        $sql = "SELECT * FROM CasosUcrania WHERE id = $id";
        $result = $this->conn->query($sql);
        $row = $result->fetch_array();
       
        $formulario->id = $row['id'];
        $formulario->fecha = $row['Fecha'];
        $formulario->hora = $row['Hora'];
        $formulario->ciudad = $row['Ciudad'];
        $formulario->latitud = $row['Latitud'];
        $formulario->longitud = $row['Longitud'];
        $formulario->tipoArma = $row['TipoArma'];
        $formulario->muertos = $row['Muertos'];
        $formulario->heridos = $row['Heridos'];
        $formulario->totalDanos = $row['TotalDanos'];
        $formulario->autor = $row['Autor']; 
    
        return $formulario;
    }
}
