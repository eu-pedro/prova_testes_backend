<?php

use PHPUnit\Framework\TestCase;
use App\Continente;

class ContinenteTest extends TestCase{
  public function testcontarPaisesContinente(){
    $meuContinente = new Continente();
    $this->assertTrue($meuContinente->setPaisesContinente("França"));
  }
  public function oi(){
    
  }
}