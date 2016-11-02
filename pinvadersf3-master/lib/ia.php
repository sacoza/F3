<?php
/**

 */
class ia
{

  // Declaración de una propiedad
  public $mapaCol = '3';
  public $mapaFil = '1';
  public $numNaves = '3';
  public $navesHumano = '3';
  public $navesIA = '3';

  // Declaración de un método
  public function getmapaCol() {
      return $this->mapaCol;
  }
  public function getmapaFil() {
      return $this->mapaFil;
  }
  public function getnumNaves() {
      return $this->numNaves;
  }

  // Setters
  public function setMapaCol($mapaCol) {
    $this->fila = $mapaCol;
  }
  public function setMapaFil($mapaCol) {
    $this->columna = $mapaCol;
    public function setnumNaves($numNaves) {
      $this->columna = $numNaves;
  }// Random
  public function RandomPos() {
  }
  public function setnavesHumano () {
    $navesHumano=[
        "tipo" => "nave",
        "col" => "0",
        "fil" => "1",
      ];
    $navesHumano=[
        "tipo" => "nave",
        "col" => "1",
        "fil" => "1",
      ];
    $navesHumano=[
        "tipo" => "nave",
        "col" => "2",
        "fil" => "1",
      ];
    }

}

?>
