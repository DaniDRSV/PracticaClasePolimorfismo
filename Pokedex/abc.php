<?php
class ABC{
    public function Hablar(){
        echo "El ";
    }
}

class Alfabeto extends ABC {
    public $abc;
    public function __construct($abc){
        $this->abc = $abc;
    }

    public function Hablar(){
        echo $this->abc."A, B, C, D, E, F, G, H, I, J, K, L, M, N, Ñ, O, P, Q, R, S, T, U, V, W, X, Y, Z.";
    }
}

$alfabetito = new ABC();

if (isset($_POST['abecedario'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php gritoPokemon($alfabetito) ?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
?>