<?php
$patient = new Patient();
$patient->enqueue("Smith");
$patient->enqueue("Jones");
$patient->enqueue("Fehrenbach");
$patient->enqueue("Brown");
$patient->enqueue("Ingram");
$patient->toString();
echo $patient->dequeue();
$patient->toString();


class Patient
{
    private $font;

    public function __construct()
    {
        $this->font = array();
    }

    public function enqueue($name)
    {
        array_push($this->font, $name);
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return 'empty';
        } else {
            return array_shift($this->font);
        }
    }

    public function isEmpty()
    {
        return empty($this->font);
    }


    public function toString()
    {
        var_dump($this->font);
    }

}