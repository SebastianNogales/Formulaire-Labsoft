<?php

    $nom = !empty($_POST['nom']) ? $_POST['nom'] : 'anonyme';
    $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : 'anonyme';
    $date = !empty($_POST['dateEntree']) ? $_POST['dateEntree'] : NULL;
    $fonction = !empty($_POST['fonction']) ? $_POST['fonction'] : NULL;
    $contrat = !empty($_POST['typeContrat']) ? $_POST['typeContrat'] : NULL;
    $parrain = !empty($_POST['parrain']) ? $_POST['parrain'] : NULL;
    $radio1 = !empty($_POST['radio1']) ? $_POST['radio1'] : NULL;
    $radio2 = !empty($_POST['radio2']) ? $_POST['radio2'] : NULL;
    $radio3 = !empty($_POST['radio3']) ? $_POST['radio3'] : NULL;
    $radio4 = !empty($_POST['radio4']) ? $_POST['radio4'] : NULL;
    $radio5 = !empty($_POST['radio5']) ? $_POST['radio5'] : NULL;
    $radio6 = !empty($_POST['radio6']) ? $_POST['radio6'] : NULL;
    $radio7 = !empty($_POST['radio7']) ? $_POST['radio7'] : NULL;
    $question1 = !empty($_POST['question1']) ? $_POST['question1'] : NULL;
    $question2 = !empty($_POST['question2']) ? $_POST['question2'] : NULL;
    
    $message = '<h1>Rapport</h1>
    <p><b>Nom : </b>' . $nom . '<br>
    <b>Prénom : </b>' . $prenom . '<br>
    <b>Date entrée : </b>' . $date . '<br>
    <b>Fonction : </b>' . $fonction . '<br>
    <b>Type de contrat : </b>' . $contrat. '<br>
    <b>Parrain / Marraine : </b>' . $parrain . '<br>
    <b>à vous de cocher - question 1 : </b>' . $radio1 . '<br>
    <b>à vous de cocher - question 2 : </b>' . $radio2 . '<br>
    <b>à vous de cocher - question 3 : </b>' . $radio3 . '<br>
    <b>à vous de cocher - question 4 : </b>' . $radio4 . '<br>
    <b>à vous de cocher - question 5 : </b>' . $radio5 . '<br>
    <b>à vous de cocher - question 6 : </b>' . $radio6 . '<br>
    <b>à vous de cocher - question 7 : </b>' . $radio7 . '<br>
    <b>Question 1 : </b>' . $question1 . '<br>
    <b>Question 2 : </b>' . $question2 . '</p>';
    
    if(isset($message)){
        mail('nancy_pinde_naunay@hotmail.com', 'Rapport', $message);
        echo($message);
    }else{
        echo('message est vide');
    }

    $retour = mail('sebasnp1997@hotmail.com', 'Rapport', $message);
    if ($retour){
        echo '<p>ok</p>';
    }else{
        echo('ko');
    }
    
?>

