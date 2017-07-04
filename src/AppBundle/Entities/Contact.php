<?php

namespace AppBundle\Entities;

class Contact {

  protected $name;
  protected $firstname;
  protected $mail;
  protected $text;

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getFirstname(){
    return $this->firstname;
  }

  public function setFirstname($firstname){
    $this->firstname = $firstname;
  }

  public function getMail(){
    return $this->mail;
  }

  public function setMail($mail){
    $this->mail = $mail;
  }
  public function gettext(){
  return  $this->text;
  }

  public function setText($text){
    $this->text = $text;
  }
}
