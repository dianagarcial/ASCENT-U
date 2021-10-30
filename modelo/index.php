<?php
class Modelo{
    private $Modelo;
    private $db;
    public function __construct(){
        $this->Modelo = array();
        $this->db=new PDO('mysql:host=localhost;dbname=bdascent',"ascent","ascent123");
    }
    
    public function mostrarDirectGen($condicion){
       // $consul="SELECT RUBRICA.nombre as documento, ASIGNATURA.nombre as asignatura, CALIFICACION.estado as estado, RUBRICA.fecha as fecha, GRUPO.codigo as grupo FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo = DIRECTORPROGRAMA.CORREO JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNACION ON PROGRAACADEMICO.CODIGO = ASIGNACION.codigoprogra JOIN ASIGNATURA ON ASIGNACION.codigoasig=ASIGNATURA.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN RUBRICA ON GRUPO.codigo=RUBRICA.codigo_grp where ".$condicion.";";
       $consul="SELECT * FROM DIRECTORPROGRAMA where ".$condicion.";";
          
       $resu=$this->db->query($consul);
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->actividades[]=$filas;
            }
            return $this->actividades;
        }   
    
    }
    
    /*
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
    
    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}
*/