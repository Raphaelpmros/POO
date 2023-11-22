<?php

class Item{

    private $name; //nome
    private $size; //tamanho
    private $class; //classes

    private function __construct($name, $size, $class){
        $this->setName($name);
        $this->setSize($size);
        $this->setClass($class);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function getClass(){
        return $this->class;
    }

    public function setClass($class){
        $this->class = $class;
    }
}