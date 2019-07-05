<?php

class Usuario{
    private $pdo;

    private $usu_id;
    private $usu_user;
    private $usu_nom;
    private $usu_ape;
    private $usu_ema;
    private $usu_rol;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getUsu_id() : ?int{
        return $this->usu_id;
    }

    public function setUsu_id(int $id){
        $this->usu_id=$id;
    }

    public function getUsu_user() : ?string{
        return $this->usu_user;
    }

    public function setUsu_user(string $user){
        $this->usu_user=$user;
    }

    public function getUsu_nom() : ?string{
        return $this->usu_nom;
    }

    public function setUsu_nom(string $nom){
        $this->usu_nom=$nom;
    }

    public function getUsu_ape() : ?string{
        return $this->usu_ape;
    }

    public function setUsu_ape(string $ape){
        $this->usu_ape=$ape;
    }

    public function getUsu_ema() : ?string{
        return $this->usu_ema;
    }

    public function setUsu_ema(string $ema){
        $this->usu_ema=$ema;
    }

    public function getUsu_rol() : ?int{
        return $this->usu_rol;
    }

    public function setUsu_rol(int $rol){
        $this->usu_rol=$rol;
    }




}