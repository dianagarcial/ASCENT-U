<?php
class Modelo{
    private $Modelo;
    private $db;
    public function __construct(){
        $this->Modelo = array();
        $this->db=Database::connect();
    }
    
    public function mostrarDirectGen(){
       // $consul="SELECT RUBRICA.nombre as documento, ASIGNATURA.nombre as asignatura, CALIFICACION.estado as estado, RUBRICA.fecha as fecha, GRUPO.codigo as grupo FROM USUARIO JOIN DIRECTORPROGRAMA ON USUARIO.correo = DIRECTORPROGRAMA.CORREO JOIN PROGRAMAACADEMICO ON DIRECTORPROGRAMA.codigo_prog= PROGRAMAACADEMICO.codigo JOIN ASIGNACION ON PROGRAACADEMICO.CODIGO = ASIGNACION.codigoprogra JOIN ASIGNATURA ON ASIGNACION.codigoasig=ASIGNATURA.codigo JOIN GRUPO ON ASIGNATURA.codigo=GRUPO.codigo_asgs JOIN RUBRICA ON GRUPO.codigo=RUBRICA.codigo_grp where ".$condicion.";";
       $sql="SELECT * FROM DIRECTORPROGRAMA where 'juan.carlos@uao.edu.co';";
       $fila=$this->db->query($sql);
            $this->Modelo=$fila;
            return  $this->Modelo;
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