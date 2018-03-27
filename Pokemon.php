<?php
//create parrentclass "pokemon"
class Pokemon {
  public $name;
  public $energyType;
  public $hitpoints;
  public $health;
  public $attacks;
  public $weakness;
  public $resistance;

  public function __construct($name, $gender, $team, $oneliner){
      $this->name = $name;
      $this->energyType = $energyType;
      $this->hitpoints = $hitpoints;
      $this->health = $hitpoints;
      $this->attacks = $attacks;
      $this->weakness = $weakness;
      $this->resistance = $resistance;
  }
}
