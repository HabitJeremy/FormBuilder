<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TextArea
 *
 * @author jeremy
 */
class TextAreas {

    //put your code here
    private $id;
    private $name;
    private $text;
    private $cols;
    private $rows;

//    ## CONSTRUCTOR

    public function __construct($id, $name, $text = "", $cols = "", $rows = "") {
        $this->id = $id;
        $this->name = $name;
        $this->text = $text;
        $this->cols = $cols;
        $this->rows = $rows;
    }

//    ## GETTERS

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getText() {
        return $this->text;
    }

    public function getCols() {
        return $this->cols;
    }

    public function getRows() {
        return $this->rows;
    }

//    ## SETTERS

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function setCols($cols) {
        $this->cols = $cols;
    }

    public function setRows($rows) {
        $this->rows = $rows;
    }

//    ## DISPLAY

    public function toString() {
        $res = "<textarea id='" . $this->id . "' name='" . $this->name . "'";
        if($this->cols != "" || $this->cols != null) {
            $res.= " cols='".$this->cols."'";
        }
        if($this->rows != "" || $this->rows != null) {
            $res.= " rows='".$this->rows."'";
        }
        if($this->text != "" || $this->text != null) {
            $res.= " >".$this->text."</textarea>";
        }
        else
        {
             $res.=" ></textarea>";
        }       
        return $res;
    }

}
