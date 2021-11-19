<?php
class Base {
    public function decirHola() {
        echo '¡Hola ';
    }
}

trait DecirMundo {
    public function decirHola() {
        parent::decirHola();
        echo 'Mundo!';
    }
}
class MiHolaMundo extends Base {
    use DecirMundo;
}

$o = new MiHolaMundo();
$o->decirHola();

?>