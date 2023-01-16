<?php

class Tigger
{
    private static $instancia;
    private $contador;

    private function __construct()
    {
        echo 'Contruyendo objeto..<br>'.PHP_EOL;
    }

    public static function getInstance()
    {
        if (!self::$instancia instanceof Tigger) {
            self::$instancia = new Tigger();
        }

        return self::$instancia;
    }

    public function roar()
    {
        echo 'Escribimos algo por pantalla.<br>'.PHP_EOL;
        ++$this->contador;
    }

    public function getCounter()
    {
        return $this->contador;
    }
}
Tigger::getInstance();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();

echo 'Contador = '.Tigger::getInstance()->getCounter().PHP_EOL;
