<?php

require_once "class/Inputs.php";
$page = "view/form.php";
// ## instances    
$inputNom = new Inputs("nom", "nom", "Votre nom", "text", "jean-michel...", "Nom attendu !");

// ## traitement du formulaire
if (!empty($_POST)) {
    $error = false;
    $inputs = array($inputNom->getName());
    foreach ($inputs as $input) {
        if (empty($_POST[$input])) {
            ${"error" . $name} = "<label class='error'>! obligatoire</label>";
            $error = true;
        }
    }
    if (!$error) {
        $page = "success.php";
    }
}

// ## display formulaire
require $page;

?>