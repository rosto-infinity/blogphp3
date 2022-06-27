<?php
namespace Controllers;


class Controller{
    protected $model;
    protected $modelName;// =" Models\Article();" 
    public function __construct(){
        $this-> model = new $this->modelName; // new Models\Article(); 
    }  
}