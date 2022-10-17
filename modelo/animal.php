<?php

class animal{

//atributos
private $id;
private $especie;
private $raza;
private $color;
private $nombreanimal;
private $imagen;
private $fecha;
private $zona;
private $nombrepersona;
private $telefono;

//metodos de acceso getters y setters
public function getId(){
    return $this->id;
    }

    public function setId($id){
    $this->id=$id;
}


public function getEspecie(){
    return $this->especie;
    }
    
    public function setEspecie($especie){
    $this->especie=$especie;
}
 
 
public function getRaza(){
    return $this->raza;
    }
        
    public function setRaza($raza){
    $this->raza=$raza;
}


public function getColor(){
    return $this->color;
    }
            
    public function setColor($color){
    $this->color=$color;
}

public function getNombreanimal(){
    return $this->nombre;
    }
                
    public function setNombreanimal($nombre){
    $this->nombre=$nombre;
}
  
public function getImagen(){
    return $this->imagen;
    }
                    
    public function setImagen($imagen){
    $this->imagen=$imagen;
    }

}

public function getFecha(){
    return $this->fecha;
    }
                    
    public function setFecha($fecha){
    $this->fecha=$fecha;
    }

}

public function getZona(){
    return $this->zona;
    }
                    
    public function setZona($zona){
    $this->zona=$zona;
    }

}

public function getNombrepersona(){
    return $this->nombrepersona;
    }
                    
    public function setNombrepersona($fecha){
    $this->nombrepersona=$nombrepersona;
    }

}

public function getTelefono(){
    return $this->telefono;
    }
                    
    public function setTelefono($telefono){
    $this->telefono=$telefono;
    }

}