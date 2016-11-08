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
    private $name;
    private $size;
    private $lstOptions;

    // ## CONSTRUCTOR

    function __construct($id, $name, $size = 1, $lstOptions = array()) {
        $this->id = $id;
        $this->name = $name;
        $this->size = $size;
        $this->lstOptions = $lstOptions;
    }

//    ## GETTERS

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }
    
    function getSize() {
        return $this->size;
    }

    function getLstOptions() {
        return $this->lstOptions;
    }

//    ## SETTERS

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }
    
     function setSize($size) {
        $this->size = $size;
    }

    function setLstOptions($lstOptions) {
        $this->lstOptions = $lstOptions;
    }

    public function addOption($option) {
        array_push($this->lstOptions, $option);
    }

    public function removeOption($option) {
        $key = array_search($option, $this->lstOptions);
        unset($this->lstOptions[$key]);
    }

//    ## DISPLAY

    public function toString() {
        $res = "<select id='".$this->id."' name='".$this->name."'";
        if($this->size != null && $this->size != ""){
            $res.= " size='".$this->size."'";
        }
        $res.= " >";
        if(!empty($this->lstOptions)) {
            foreach($this->lstOptions as $option){
                $res.= $option->toString();
            }
        }
        $res.= "</select>";
        return $res;
    }

}
