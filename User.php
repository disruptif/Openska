<?php
class User {
 
  public static $compteur = 0;
 
 // Propriété de la classe
  private $name;
  private $lastname;
 
  function __construct($name, $lastname) {
   $this-> name = $name;
   self::$compteur++;
  }
 
 //Getter
  public function getName() {
   return $this->name;
  }
 
 // Setter
  public function setName($str) {
   // nom en majuscule
   $this->name = stroupper($str);
  }
 
  public function presentation() {
   echo "bonjour je suis".$this->name;
  }
}


?>