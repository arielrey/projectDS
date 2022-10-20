<?php
include("animal.php");

class manejo_objetos{


private $conexion;

public function __construct($conexion){
    $this->setConexion($conexion);
}

public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
}

public function getContenidoPorFecha(){

    $matriz=array();
    $contador=0;
    $resultado=$this->conexion->query("SELECT * FROM animal ORDER BY FECHA");

     while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
       
        $blog=new animal();

        $blog->setId($registro["id"]);
        $blog->setEspecie($registro["especie"]);
        $blog->setRaza($registro["raza"]);
        $blog->setColor($registro["color"]);
        $blog->setNombre($registro["nombre"]);
        $blog->setImagen($registro["imagen"]);
        $blog->setFecha($registro["fecha"]);
        $blog->setZona($registro ["zona"]);
        $blog->setNombrepersona($registro["nombrepersona"]);
        $blog->setTelefono($registro["telefono"]);


        $matriz[$contador]=$blog;
        $contador++;

     }

     return $matriz;
}

public function insertContenido(animal $blog){

//    insertar contenido a la BD 

$sql= "INSERT INTO animal"

}

}

?>