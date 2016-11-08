<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forms
 *
 * @author jeremy
 */
class Forms {

    //put your code here

    private $action;
    private $method;
    private $required;
    private $class;
    private $lstLabels;

    /* ### CONSTRUCTOR */

    public function __construct($pAction, $pMethod = "POST", $pRequired = true, $pClass = "", $pLstLabels = array()) {
        $this->action = $pAction;
        $this->method = $pMethod;
        $this->required = $pRequired;
        $this->class = $pClass;
        $this->lstLabels = $pLstLabels;
    }

    /* ### GETTERS */

    public function getAction() {
        return $this->action;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getHasclass() {
        return $this->hasclass;
    }

    public function getClass() {
        return $this->class;
    }

    public function getLstLabels() {
        return $this->lstLabels;
    }

    /* ### SETTERS */

    public function setAction($action) {
        $this->action = $action;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setHasclass($hasclass) {
        $this->hasclass = $hasclass;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function setLstLabels($lstLabels) {
        $this->lstLabels = $lstLabels;
    }

    public function addLabel($label) {
        array_push($this->lstLabels, $label);
    }

    public function removeLabel($label) {
        $key = array_search($label, $this->lstLabels);
        unset($this->lstLabels[$key]);
    }

//    ## DISPLAY

    public function toString() {
        $res = "<form action='" . $this->action . "' method='" . $this->method . "'";
         if($this->required)
        {
            $this->class.=" required";
        }
        if($this->class != null || $this->class != "") {
            $res.=" class='".$this->class."'"; 
        }
        $res.= " >";
        if (!empty($this->lstLabels)) {
            foreach ($this->lstLabels as $label) {
                $res.= "<div class='formGroup'>".$label->toString()."</div>";
            }
        }
        $res.=" </form>";
        return $res;
    }

}
