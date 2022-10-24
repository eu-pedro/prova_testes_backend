<?php

namespace App;



class Continente{


  private $nomeContinente;
  private $nomePaises = [];

  public function __construct($nomeContinente = "Europa")
  {
    $this->nomeContinente = $nomeContinente;
  }
  
  public function setPaisesContinente($paises){
    if(empty($paises)){
      return false;
    }
    else{
      $this->nomePaises = $paises;
      return true;
    }
  }


  public function contarPaisesContinente(){
    return count($this->nomePaises);
    
  }

  public function removePais(){
    if(empty($this->nomePaises)){
      return false;
    } 
    else{
      array_pop($this->nomePaises);
      echo "<pre>";
      print_r($this->nomePaises);
      echo "</pre>";
    }
  }

  public function verificarPaisAdicionado($pais){
    if(!in_array($pais, $this->nomePaises)){
      array_push($this->nomePaises, $pais);
      echo "<pre>";
      print_r($this->nomePaises);
      echo "</pre>";
    }
    else{
      echo "Este país já está inserido";
    }
  }
}

// $paises = new Continente();
// $paises->setPaisesContinente(["Holanda", "França", "Grecia"]);
// $paises->contarPaisesContinente();
// $paises->removePais();
// $paises->verificarPaisAdicionado("Belgica");