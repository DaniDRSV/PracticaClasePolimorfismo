<?php
class Pokemon{
    public function grito(){
        echo "El ";
    }
}

class Bulbasaur extends Pokemon {
    public $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function grito(){
        echo $this->nombre." Grita, Bulbasauuuuurrr!!";
    }
}

class Charmander extends Pokemon {
    public $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function grito(){
        echo $this->nombre." Grita, Chaaaarmander!!";
    }
}

class Squirtle extends Pokemon {
    public $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function grito(){
        echo $this->nombre." Grita, Quirtleeee!!";
    }
}

class Alfabeto extends Pokemon {
    public $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function grito(){
        echo $this->nombre."A, B, C, D, E, F, G, H, I, J, K, L, M, N, Ñ, O, P, Q, R, S, T, U, V, W, X, Y, Z.";
    }
}

function gritoPokemon(Pokemon $pokemon){
    $pokemon->grito();
}

$alfabetito = new Alfabeto("El alfabeto es: ");

$Bulbasaur = new Bulbasaur("Bulbasaur");
$Charmander = new Charmander("Charmander");
$Squirtle = new Squirtle("Squirtle");

if (isset($_POST['bulbasaur'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php gritoPokemon($Bulbasaur) ?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['charmander'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php gritoPokemon($Charmander) ?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['squirtle'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php gritoPokemon($Squirtle) ?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['abecedario'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php gritoPokemon($alfabetito) ?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
?>

