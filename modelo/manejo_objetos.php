<?php
include_once("animal.php");

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
        $blog->setNombreanimal($registro["nombreanimal"]);
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

$sql="INSERT INTO animal (especie, raza, color, nombreanimal, imagen, fecha, zona, nombrepersona, telefono) VALUES";
$sql=" (?,?,?,?,?,?,?,?,?)";
$query=$this->conexion->prepare($sql);
$especie=$blog->getEspecie();
$raza=$blog->getRaza();
$color=$blog->getColor();
$nombreanimal=$blog->getNombreanimal();
$imagen=$blog->getImagen();
$fecha=$blog->getFecha();
$zona=$blog->getZona();
$nombrepersona=$blog->getNombrepersona();
$telefono=$blog->getTelefono();

/*$query->bindValue("sssssssss", $especie, $raza, $color, $nombreanimal, $imagen, $fecha, $zona, $nombrepersona, $telefono);*/
$query->bindValue(1, $especie, PDO::PARAM_STR);
$query->bindValue(2, $raza, PDO::PARAM_STR);
$query->bindValue(3, $color, PDO::PARAM_STR);
$query->bindValue(4, $nombreanimal, PDO::PARAM_STR);
$query->bindValue(5, $imagen, PDO::PARAM_STR);
$query->bindValue(6, $fecha, PDO::PARAM_STR);
$query->bindValue(7, $zona, PDO::PARAM_STR);
$query->bindValue(8, $nombrepersona, PDO::PARAM_STR);
$query->bindValue(9, $telefono, PDO::PARAM_STR);
$query->execute();
}
} 

?>