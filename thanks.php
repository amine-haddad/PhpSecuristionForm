<?php
$errors=[];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //verifier le prenom
    if (empty($_POST['user_prenom'])) {
        $errors ['user_prenom'] = 'Veuillez indiquer votre prenom';
        echo $errors ['user_prenom'].'</br>';
    };
    //verifier le nom /*
    if (empty($_POST['user_name'])) {
        $errors ['user_name'] = 'Veuillez indiquer votre adresse nom';
        echo $errors ['user_name'].'</br>';
    };
    //verifier le email
    if (empty($_POST['user_email'])) {
        $errors ['user_email'] = 'Veuillez indiquer votre adresse mail';
        echo $errors ['user_email'].'</br>';
    };
    //verifier le numero
    if (empty($_POST['user_phone'])) {
        $errors ['user_phone'] = 'Veuillez indiquer votre numero de telphone';
        echo $errors ['user_phone'].'</br>';
    };
    //verifier le message
    if (empty($_POST['user_message'])) {
        $errors ['user_message'] = 'Veuillez indiquer votre adresse message';
        echo $errors ['user_message'].'</br>';
    }
  
    //condition pour verifier que tout les chanps ne sont pas vide
    if (!empty( $_POST['user_prenom'])&&!empty($_POST['user_name'])&&!empty($_POST['user_sujet'])&&!empty($_POST['user_phone'])&&!empty($_POST['user_email'])&&!empty($_POST['user_message'])){
        
        //trim  $_POST
        $data = array_map('trim', $_POST);
        //securisé les entrées de données
        $userMailOk = filter_var($data['user_email'], FILTER_VALIDATE_EMAIL);
        if ($userMailOk === false){
            $errors ['user_email'] = 'Veuillez renseigner une adresse mail valide!';
            echo $errors ['user_email'].'</br>';
        };
        $secureEmail = htmlentities($data['user_email']);
        $securePrenom = htmlentities($data['user_prenom']);
        $secureName = htmlentities($data['user_name']);
        $securePhone = htmlentities($data['user_phone']);
        $secureMessage = htmlentities($data['user_message']);
        echo 'Merci'.' '.$securePrenom .' '. $secureName .' '.'de nous avoir contacté à propos de “'.($_POST['user_sujet']).'” .</br>'.'Un de nos conseiller vous contactera soit à l’adresse '.$secureEmail.' ou par téléphone au '.$securePhone.' dans les plus brefs délais pour traiter votre demande :</br> '.$secureMessage;
    
    }
   
};