<?php

class Externa
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Externa {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Externa)->func2()->func3();

function clase_anonima1()
{
    return new class {};
}
function clase_anonima2()
{
    return new class {};
}

if (get_class(clase_anonima2()) === get_class(clase_anonima1())) {
    echo 'misma clase';
} else {
    echo 'clase diferente';
}
