<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Labels
 *
 * @author jeremy
 */
class Labels {

    //put your code here

    private $text;
    private $for;
    private $required;
    private $class;
    private $lstInputs;
    private $objTextArea;

//    ## CONSTRUCTOR
    public function __construct($text, $for = null, $required = true, $class = "", $lstInputs = array(), $objTextArea = null) {
        $this->text = $text;
        $this->for = $for;
        $this->required = $required;
        $this->class = $class;
        $this->lstInputs = $lstInputs;
    }

//    ## GETTERS    

    public function getText() {
        return $this->text;
    }

    public function getFor() {
        return $this->for;
    }

    public function getClass() {
        return $this->class;
    }

    public function getLstInputs() {
        return $this->lstInputs;
    }

    public function getRequired() {
        return $this->required;
    }

    public function getObjTextArea() {
        return $this->objTextArea;
    }

//    ## SETTERS

    public function setText($text) {
        $this->text = $text;
    }

    public function setFor($for) {
        $this->for = $for;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function setRequired($required) {
        $this->required = $required;
    }

    public function setLstInputs($lstInputs) {
        $this->lstInputs = $lstInputs;
    }

    public function addInput($input) {
        array_push($this->lstInputs, $input);
    }

    public function removeInputl($input) {
        $key = array_search($input, $this->lstInputs);
        unset($this->lstInputs[$key]);
    }

    public function setObjTextArea($objTextArea) {
        $this->objTextArea = $objTextArea;
    }

//    ## DISPLAY

    public function toString() {
        $class = "";
        $res = "<label";
        if ($this->for != "" || $this->for != null) {
            $res.= " for='" . $this->for . "'";
        }
        if ($this->required) {
            $this->class.=" required";
        }
        if ($this->class != null || $this->class != "") {
            $res.=" class='" . $this->class . "'";
        }
        $res.=" >" . $this->text . "</label>";
        if (!empty($this->lstInputs)) {
            foreach ($this->lstInputs as $input) {
                $res.=$input->toString();
            }
        }
        if(!empty($this->objTextArea)) {
            $res.=$this->objTextArea->toString();
        }
        return $res;
    }

}
