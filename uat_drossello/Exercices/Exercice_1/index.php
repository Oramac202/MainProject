<?php
/* 
 * Autheur : Damiane
 * Nom application : Exercie_1
 * Version : v1
 * Date : 
 */


// Fonction f'affichage/debugage
// var_dump($myArray);
// print_r($myArray);


// Partie 1
$myVar1 = 'Hello world';

// Partie 2
$messageEnvoye = '';

// $_GET est une variable GLOBAL de php. On l'utilise ici pour récuperer 
// le formulaire envoyé en GET
 
// Cette variable est un tableau. On peut récuperer spécifiquement un champ
// en le spécifiant de cette manière : myArray['champs']

// isset est une fonction php qui verifie si un element existe ou non

// Il existe plusieur facon de compare des données : 
// == comparaison
// != est diférent de
// === est strictement égale
// !== est strictement diférent
// < est plus petit / > grand
// if a plusieur conditions : ()&&() cnd1 ET cnd2 // ()||() cnd1 OU cnd2
if(isset($_GET['myInput']) == true){
    $messageEnvoye = $_GET['myInput'];
}

// Partie 3
// array() == []
$myArray = [
    'Jordan',
    'Damiano',
    'Maelan',
    'Tanguy'
];

// Method 1 : for
$nbLine = count($myArray);
$rslt1 = '';

for($i = 0; $i < $nbLine; $i++){
    $rslt1 .= $myArray[$i];
}

// Method 2 : foreach
$rslt2 = '';
foreach ($myArray as $val) {
    $rslt2 .= $val;
}
?>
<html>
    <header>
    </header>
    <body>
        
        <!-- Partie 1 -->
        <div>
            <p><?php echo $myVar1; ?></p>
        </div>
        
        <!-- Partie 2 -->
        <div>
            <form method='get' action="#">
                <input type="text"   name="myInput">
                <input type="submit" id="mySubmit">
            </form>
            <p>Message précedement envoyé : <?php echo $messageEnvoye;?></p>
        </div>
        <!-- Partie 3 -->
        <div>
            <table style="border: 1px solid black">
                <!-- Method 3 : php + html -->
                <?php foreach ($myArray as $val) {?>
                <tr>
                    <td style="border: 1px solid black">
                        <?php echo $val?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>