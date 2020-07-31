<?php

class Animal
{
  public $legs = 2;
  public $cold_blooded = false;
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
  function getName() {
    echo $this->name;
  }
  function getLegs() {
    echo $this->legs;
  }
}