
<?php

interface MyInterfase
{
    public function checkLogin();
    public function checkDate();
}

trait MyTrait
{
    public function validateDate():bool
    {
        return true;
    }
}

class MyClass implements MyInterfase
{
    use MyTrait;

    private   $a;
    private   $b;
    protected $conn;

    public function myMethod()
    {
        $this->d = 2;

        echo $this->d;
    }

    public function __construct(int $a, int $b, int $c)
    {
        $this->a    = $a;
        $this->b    = $b;
        $this->conn = $c;
    }

    public function __toString()
    {
        return $this->a
            . '|' . $this->b
            . '|' . $this->c;
    }

    public function checkLogin()
    {
        return;
    }
    public function checkDate()
    {
        return;
    }
}

class NewClass extends MyClass
{

}

class NewClassException extends Exception
{
    
}

$var = new MyClass(1,2,3);
echo($var);


?>
