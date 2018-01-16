
class User {
 
 
 
 // Propriété de la classe
 private $name,
 private $lastname;
 
 function __construct($name) {
 $this-> name = $name;
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

 -------

 $user1 = new User;
 $user1 = setName('PafPaf Le Loup');
 echo $user1;
 
 
 $user2 = new User('Le Comté fruité');
 $use2->presentation();
 
