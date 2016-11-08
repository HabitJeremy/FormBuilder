<?php

require_once "class/Forms.php";
require_once "class/Labels.php";
require_once "class/Inputs.php";
require_once "class/TextAreas.php";


// ## instances 

$inputMr = new Inputs("Monsieur", "qualite", "", "radio", "Mr", true, true);
$inputMme = new Inputs("Madame", "qualite", "", "radio", "Mme", true);
$lblQualite = new Labels("Qualité :", "", false);
$lblQualite->addInput($inputMr);
$lblQualite->addInput($inputMme);

$inputPrenom = new Inputs("prenom", "prenom", "Jérémy");
$lblPrenom = new Labels("Prénom :", $inputPrenom->getId());
$lblPrenom->addInput($inputPrenom);

$inputNom = new Inputs("nom", "nom", "Habit");
$lblNom = new Labels("Nom :", $inputNom->getId());
$lblNom->addInput($inputNom);

$inputEmail = new Inputs("email", "email", "jeremy.habit@gmail.com", "email");
$lblEmail = new Labels("Email :", $inputEmail->getId());
$lblEmail->addInput($inputEmail);

$inputComplet = new Inputs("complet", "complet", "", "checkbox", "complet", true);
$inputBlanc = new Inputs("blanc", "blanc", "", "checkbox", "blanc", true);
$inputSeigle = new Inputs("seigle", "seigle", "", "checkbox", "seigle", true);
$lblPain = new Labels("Vous aimez le pain :", "", false);
$lblPain->addInput($inputComplet);
$lblPain->addInput($inputBlanc);
$lblPain->addInput($inputSeigle);

$txtarea = new TextAreas("txtarea", "txtarea", "Saisissez votre texte ici ...", "50", "10");
$lblTxtarea = new Labels("Que faites-vous dans la vie ?", $txtarea->getId());
$lblTxtarea->setObjTextArea($txtarea);

$inputSubmit = new Inputs("submit", "submit", "", "submit", "Validez");
$inputReset = new Inputs("reset", "reset", "", "reset", "Annulez");
$lblAction = new Labels("", "", false);
$lblAction->addInput($inputSubmit);
$lblAction->addInput($inputReset);

$form = new Forms("traitement.php");
$form->addLabel($lblQualite);
$form->addLabel($lblPrenom);
$form->addLabel($lblNom);
$form->addLabel($lblEmail);

$form->addLabel($lblPain);
$form->addLabel($lblTxtarea);
$form->addLabel($lblAction);

$content = $form->toString();

include "view/form.php";
