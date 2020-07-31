<?php

class Frog extends Animal {
  public $sounds1 = "hop hop";

  function __construct($name) {
    $this->name = $name;
  }
  function getName() {
    echo $this->name;
  }
  function jump() {
    echo $this->sounds1;
  }
}