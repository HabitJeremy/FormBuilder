<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inputs
 *
 * @author 21608681
 */
class Inputs {

    private $id;
    private $name;
    private $type;
    private $placeholder;
    private $value;
    private $sublabel;
    private $checked;

//    ## CONSTRUCTOR
    public function __construct($pId, $pName, $pPlaceholder= "", $pType = "text" , $pValue = "", $pSublabel = false, $pChecked= false) {
        $this->id = $pId;
        $this->name = $pName;
        $this->type = $pType;
        $this->sublabel = $pSublabel;
        $this->checked = $pChecked;
        $this->placeholder = $pPlaceholder;
        $this->value = $pValue;
    }

//    ## GETTERS

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getPlaceholder() {
        return $this->placeholder;
    }

    public function getValue() {
        return $this->value;
    }
    
    public function getChecked() {
        return $this->checked;
    }

    public function getSublabel() {
        return $this->sublabel;
    }

//    ## SETTERS

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    public function setValue($value) {
        $this->value = $value;
    }
    
    public function setChecked($checked) {
        $this->checked = $checked;
    }

    public function setSublabel($sublabel) {
        $this->sublabel = $sublabel;
    }

//    ## DISPLAY
    public function toString() {
        $res = "<input id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "' value='" . $this->value . "'";
        if($this->placeholder != null || $this->placeholder != ""){
            $res.= " placeholder='" . $this->placeholder . "'";
        }
        if($this->checked){
            $res.= " checked";
        }
        $res.= " />";
        if ($this->sublabel) {
            $res.=" " . $this->value;
        }
        return $res;
    }

}
