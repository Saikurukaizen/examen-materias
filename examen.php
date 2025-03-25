<?php

class Materia{
    private $nombre;
    private $tipo;
    private $nivelMax;
    private $nivelActual;
    private $ap;

    public function __construct($nombre, $tipo, $nivelMax, $nivelActual, $ap){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->nivelMax = $nivelMax;
        $this->nivelActual = $nivelActual;
        $this->ap = $ap;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNivelMax(){
        return $this->nivelMax;
    }

    public function getNivelActual(){
        return $this->nivelActual;
    }

    public function getAP(){
        return $this->ap;
    }
}

class Materias{
    private $materias = [];

    public function addMateria(Materia $materia){
        $this->materias[] = $materia;
    }


    public function getInfoMateria(){
        foreach($this->materias as $materia){
            echo 'Nombre: '.$materia->getNombre().'<br>';
            echo 'Tipo: '.$materia->getTipo().'<br>';
            echo 'Nivel Máximo: '.$materia->getNivelMax().'<br>';
            echo 'Nivel actual: '.$materia->getNivelactual().'<br>';
            echo 'AP obtenidos :'.$materia->getAP().'';
        }
    }

    public function getMateriaLessAP(){

        $materiaLessAP = $this->materias[0];

        foreach($this->materias as $materia){
            if($materia->getAP() < $materiaLessAP->getAP()){
                $materiaLessAP = $materia;
            }
        }
        return $materiaLessAP;
    }
}


$materia1 = new Materia("Vit+", "Independientes", 5, 2, 1500);
$materia2 = new Materia("Corte Doble","Comando",3, 1, 20000);
$materia3 = new Materia("Recuperar", "Mágica", 5, 2, 1000);
$materia4 = new Materia("Elemento Básico", "Apoyo",4, 1, 5000);

$totalMaterias = new Materias();
$totalMaterias->addMateria($materia1);
$totalMaterias->addMateria($materia2);
$totalMaterias->addMateria($materia3);
$totalMaterias->addMateria($materia4);

$totalMaterias->getInfoMateria();

$materiaLessAP = $totalMaterias->getMateriaLessAP();
if($materiaLessAP){
    echo 'Materia con AP más bajo: '.$materiaLessAP->getNombre().' con '.$materiaLessAP->getAP().'';
} else{
    echo 'No hay materias';
}
?>