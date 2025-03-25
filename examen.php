<?php

class Materia{
    private string $nombre;
    private string $tipo;
    private int $nivelMax;
    private int $nivelActual;
    private int $ap;

    public function __construct(string $nombre,string $tipo,int $nivelMax,int $nivelActual,int $ap){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->nivelMax = $nivelMax;
        $this->nivelActual = $nivelActual;
        $this->ap = $ap;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getTipo(): string{
        return $this->tipo;
    }

    public function getNivelMax(): int{
        return $this->nivelMax;
    }

    public function getNivelActual(): int{
        return $this->nivelActual;
    }

    public function getAP(): int{
        return $this->ap;
    }

    public function __toString(): string{
        return '
        Nombre: '.$this->nombre.'<br>'.
        'Tipo: '.$this->tipo.'<br>'.
        'Nivel Máximo: '.$this->nivelMax.'<br>'.
        'Nivel actual: '.$this->nivelActual.'<br>'.
        'AP obtenidos :'.$this->ap;
    }
}

class Materias{
    private $materias = [];

    public function addMateria(Materia $materia): void{
        $this->materias[] = $materia;
    }


    public function getInfoMateria(): void{
        foreach($this->materias as $materia){
            echo 'Nombre: '.$materia->getNombre().'<br>';
            echo 'Tipo: '.$materia->getTipo().'<br>';
            echo 'Nivel Máximo: '.$materia->getNivelMax().'<br>';
            echo 'Nivel actual: '.$materia->getNivelactual().'<br>';
            echo 'AP obtenidos :'.$materia->getAP().'';
        }
    }

    public function getTipoMateria($tipo): array{
        $tipoMateria = [];
        foreach($this->materias as $materia){
            if($materia->getTipo() === $tipo){
                $tipoMateria[] = $materia;
            }
        }
        return $tipoMateria;
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
$materia5 = new Materia("Cubrir", "Independientes", 5, 1, 1200);

$totalMaterias = new Materias();
$totalMaterias->addMateria($materia1);
$totalMaterias->addMateria($materia2);
$totalMaterias->addMateria($materia3);
$totalMaterias->addMateria($materia4);
$totalMaterias->addMateria($materia5);

$totalMaterias->getInfoMateria();

$tipo = "Independientes";
$tipoMaterias = $totalMaterias->getTipoMateria($tipo);
if($tipoMaterias){
    foreach($tipoMaterias as $materia){
        echo 'Nombre: '.$materia->getNombre().'<br>';
        echo 'Tipo: '.$materia->getTipo().'<br>';
        echo 'Nivel Máximo: '.$materia->getNivelMax().'<br>';
        echo 'Nivel actual: '.$materia->getNivelactual().'<br>';
        echo 'AP obtenidos :'.$materia->getAP().'';
    }
} else {
    echo 'No hay materias de '.$tipo.'<br>';
}

$materiaLessAP = $totalMaterias->getMateriaLessAP();
if($materiaLessAP){
    echo 'Materia con AP más bajo: '.$materiaLessAP->getNombre().' con '.$materiaLessAP->getAP().'';
} else{
    echo 'No hay materias';
}
?>