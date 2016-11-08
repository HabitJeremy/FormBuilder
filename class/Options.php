<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Options
 *
 * @author jeremy
 */
class Options {

    //put your code here

    private $value;
    private $text;
    private $selected;

    // ## CONSTRUCTOR

    function __construct($value, $text = "", $selected = false) {
        $this->value = $value;
        if($text == "" || $text == null)
        {
           $this->text = $value;   
        }else{
              $this->text = $text;
        }        
        $this->selected = $selected;
    }

//    ## GETTERS

    function getValue() {
        return $this->value;
    }

    function getText() {
        return $this->text;
    }

    function getSelected() {
        return $this->selected;
    }

//    ## SETTERS

    function setValue($value) {
        $this->value = $value;
    }

    function setText($text) {
        $this->text = $text;
    }

     function setSelected($selected) {
        $this->selected = $selected;
    }
    
//    ## DISPLAY
    
    public function toString()
    {
        $res = "<option value='".$this->value."'";
        if($this->selected){
            $res.= " selected";
        }
        $res.= " >".$this->text."</option>";
        return $res;
    }

}
