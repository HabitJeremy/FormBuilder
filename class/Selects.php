<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Selects
 *
 * @author jeremy
 */
class Selects {
    
    

    //put your code here
    
    private $id;
    private $nom;
    private $lstOptions;
    
    // ## CONSTRUCTOR
    
    function __construct($id, $nom, $lstOptions) {
        $this->id = $id;
        $this->nom = $nom;
        $this->lstOptions = $lstOptions;
    }
}