<?php

require('conn.php');
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"/>
    <title> Constat accident ! </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css
    /font-awesome.min.css">
    <link rel="stylesheet" href="../css/jquery-ui-1.10.4.custom.css">
    <link rel="stylesheet" href="../css/monStyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui-1.10.4.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/school.js"></script>

    <script src="js/jquery-ui-i18n.min.js"></script>
    <script>
        $(function () {
            // définit les options par défaut du calendrier
            $.datepicker.setDefaults({
                showButtonPanel: true,// affiche des boutons sous le calendrier
                showOtherMonths: true, // affiche les autres mois
                selectOtherMonths: true // possibilités de sélectionner les jours des autres mois
            });

            //$("#calendar").datepicker(); // affiche le calendrier par défaut
            //$("#calendar").datepicker($.datepicker.regional["fr"]); // affiche le calendrier en fr
            $("#calendar").datepicker({
                dateFormat: "yy-mm-dd",

            });
            $("#calendar1").datepicker({
                dateFormat: "yy-mm-dd",

            });
        });
    </script>


</head>

<body>
<?php //include('../menu.php'); ?>
<br><br><br>
<div class="contaiiner">

    <div class="panel panel-primary">
        <div class="panel-heading" align="center" id="panel-headingg"> CONSTAT AMIABLE D'ACCIDENT AUTOMOBILES</div>
        <div class="panel-body">
            <form method="post" action="insert_constats.php" enctype="multipart/form-data">

            <!--formulaire obligatoire a remplire  -->
            <!-- **************************** Formulaire en tete de la page ************************************* -->

						  <div class="container col-md-4 ">			
                        <div class="panel panel-primary">
                            <div class="panel-heading">Date et L'Heure de l'accident</div>
                                <div class="panel-body">
                                    <label for="calendar" class="control-label col-sm-1"> Date</label>
                                     <div class="col-sm-5">
                        <input required type="text" name="date_accident" id="calendar" class="form-control">
                                     </div>            
                                        <label for="heure" class="control-label col-sm-1"> Heure </label>
                                        <div class="col-sm-3">
                    	<input required type="text" name="heure" id="heure" class="form-control">
                                        </div>
                                    </div>
                        </div>
                </div>
                            <!-- formulaire pour remplir le pays -->
          
            <div class="container col-md-5  ">			
                <div class="panel panel-primary">
                    <div class="panel-heading">Localisation</div>
                                        <div class="panel-body">
                                   
                                        <label for="ville" class="control-label col-sm-1"> Ville</label>
                                                <div class="col-sm-4">
                                    <input required type="text" name="ville" id="ville" class="form-control">
                                                </div>        
                                    <label for="lieu" class="control-label col-sm-1">Lieu</label>
                                                <div class="col-sm-6">
                                    <input required type="text" name="lieu" id="lieu" class="form-control">
                                            </div>
                                            </div>
                                </div>
                            </div>
                <!-- presiser s'il ya des bléssé oubien -->
                            
                            <!-- presiser s'il ya des bléssé oubien -->
<!--
                                    <div class="container col-md-2  ">			
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Bélessé(s) et meme legé(s)</div>
                                            <div class="panel-body">
                                                <label class="form-check-label" for="blesse"> Oui</label>
                                                <input class="form-check-input" type="radio" name="blesse[]" id="possionA" value="op1" >
                                                <div id="positionB">
                                                <label class="form-check-label" for="blesse"> Non</label>
                                                <input class="form-check-input" type="radio" name="blesse[]" value="op2" > 
                                                </div>     
                                                </div>
                                            </div>
                                        </div>
-->
            <!-- remplissage des dega ùatériel sur lieu de l'accident  -->
                              <!-- presiser s'il ya des bléssé oubien -->
                                    <div class="container col-md-2  ">			
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Bélessé(s) et meme legé(s)</div>
                                        <div class="panel-body">
                                            <label class="form-check-label" for="blesse"> Oui</label>
                    <input class="form-check-input" type="radio" name="blesse[]" id="possionA" value="op1" >
                                            <div id="positionB">
                                            <label class="form-check-label" for="blesse"> Non</label>
                                    <input class="form-check-input" type="radio" name="blesse[]" value="op2" > 
                                            </div>     
                                            </div>
                                        </div>
                                    </div>
            <!-- remplissage des dega ùatériel sur lieu de l'accident  -->
                            
         <!-- remplissage des dega ùatériel sur lieu de l'accident  -->
                                    <div class="container col-md-4  ">			
                                    <div class="panel panel-primary">
                <div class="panel-heading">Dégats matériéls a des Véhiculs ou Autres qu A et B : </div>
                    <div class="panel-body">
                        <label class="form-check-label" for="dega"> Oui</label>
                        <input class="form-check-input" type="radio" name="dega[]" id="possionA" value="op3" >
                                    <div id="positionB">
                                    <label class="form-check-label" for="dega"> Non</label>
                                    <input class="form-check-input" type="radio" name="dega[]" value="op4" > 
                                    </div>     
                                    </div>
                                        </div>
                                    </div>
        <!-- ***************   fin  dega ùatériel **********************************************  -->
                            
                            <div class="container col-md-6  ">			
                            <div class="panel panel-primary">
                            <div class="panel-heading"><strong>Témoins :</strong>Noms,Adresses,et Tél.</div>
                            <div class="panel-body">
                    <textarea name="temoin" id="temoin" class="form-control rounded-0" rows="2"> </textarea>
                            </div>
                            </div>
                            </div>
           
            <!-- Formulaire secondaire a replir important  -->
           <!-- ***************   fin  dega matériel **********************************************  -->
            <!-- ***************   fin  dega matériel **********************************************  -->
            <!-- ***************   fin  dega matériel **********************************************  -->
            <br>
                        <h2><hr>
            <marquee>********** !!!!!!! fin et debut du 1er partie et debut du deuxieme partie ************</marquee>
                        <hr></h2>
                            <br>
        
                            <table>
            <tr>
             <td>
            <!-- Les formulaire pour la voitur A  -->
    <fieldset class="fies">
            <legend class="legs">Véhicule A !</legend>

                <!-- formulaire nom prenom adresse et tel -->

                    <label for="prenom_a" class="control-label col-sm-3"> Prenom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="prenom_a" id="prenom_a" class="form-control">
                    </div>
                    <br><br>
                    <label for="nom_a" class="control-label col-sm-3"> Nom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="nom_a" id="nom_a" class="form-control">
                    </div>
                    <!--  -->
                    <br><br>
                    <label for="adresse_a" class="control-label col-sm-3"> Adress </label>
                    <div class="col-sm-6">
                        <input required type="text" name="adresse_a" id="adresse_a" class="form-control">
                    </div>
                    <br><br>
                    <!--  -->
                    <label for="tel_a" class="control-label col-sm-3"> Tél </label>
                    <div class="col-sm-6">
                        <input type="text" name="tel_a" id="tel_a" class="form-control">
                     </div>
                     <!--  -->
                    <br><br>
                    <label for="mail_a" class="control-label col-sm-3"> Mail </label>
                    <div class="col-sm-6">
                        <input type="text" name="mail_a" id="mail_a" class="form-control">
                    </div>
                         <h3>Véhicule </h3>
                    <br><hr><br>
                    <label for="numero_contrat_a" class="control-label col-sm-3"> Marque </label>
                    <div class="col-sm-6">
                        <input type="text" name="marque_a" id="numero_contrat_a" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assure_a" class="control-label col-sm-3"> Type </label>
                    <div class="col-sm-6">
                        <input type="text" name="type_a" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assure_a" class="control-label col-sm-3">Numéro d'immatriculation :</label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_im_a" id="prenom_assure_a" class="form-control">
                    </div>
        
                     <br><hr><br>
                    <h3>Société d'Assurance</h3>
                    <br>
                    <label for="numero_contrat_a" class="control-label col-sm-3"> Numéro du Contrat </label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_contrat_a" id="numero_contrat_a" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assure_a" class="control-label col-sm-3"> Nom de l'Assurance</label>
                    <div class="col-sm-6">
                        <input type="text" name="nom_assure_a" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assure_a" class="control-label col-sm-3">Téléphone ou mail </label>
                    <div class="col-sm-6">
                        <input type="text" name="prenom_assure_a" id="prenom_assure_a" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="code_postal_a" class="control-label col-sm-3">Code_Postale </label>
                    <div class="col-sm-6">
                        <input required type="text" name="code_postal_a" id="code_postal_a" class="form-control">
                    </div>
                    <br><hr><br>
<!--                     
                    <fieldset class=fieldsett>
                    <div class="form-group">
                    <legend class="legendd"> Date et l'heure de l'accident</legend>
                    <label for="calendar" class="control-label col-sm-2"> Date </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date_accident" id="calendar" class="form-control">
                    </div>
                    <br><br>
                    <label for="heure" class="control-label col-sm-2"> L'heure </label>
                    <div class="col-sm-4">
                        <input required type="text" name="heure" id="heure" class="form-control">
                    </div>
                    </div>            
            </fieldset>
            <br> -->

            <fieldset class="fieldsett">
         <div class="form-group">
                <legend class="legendd">Observation et Description du lien de L'accident </legend>
                  
                <label for="observation"> Observation :</label>
                    <textarea name="observation_a" id="observation_a" class="form-control rounded-0" rows="3"> 
                </textarea>
                <br>
                <label for="point_choc"> Point de Choc :</label>
                    <textarea name="point_choc_a" id="point_choc_a" class="form-control rounded-0" rows="2"> 
                </textarea>
                <br>
                <label for="degat_matriel_a"> Dégats apparents du véhicule B :</label>
                    <textarea name="degat_matriel_a" id="degat_matriel_a" class="form-control rounded-0" rows="2"> 
                </textarea>
         </div>
            </fieldset>
            <br>

            <div class="row my-row">
                    <label for="photo" class="control-label col-sm-2">Ajouter des PHOTOS </label>
                    <div class="col-sm-8">
                        <input type="file" name="photo_a" id="photo" class="form-control">
                    </div>
            </div>
    </fieldset>
    </td>

<!-- ********************** les circonstance de l'accident ***************************** -->

    <td class="dia">
        <fieldset class="circonstance">
            <legend class="circonstances"> 12 Circonstances </legend>
            <h3>Mettez une Croix dans chacune des cases utils pour préciser le croquis </h3>
            <label><h1>A</h1></label><label id="positionB"><h1>B</h1></label>
           
            <!-- detaille 1 pour la base de donnee  -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ch1[]" id="ch1A" value="option1" >
            <label class="form-check-label" for="ch1"> En Stationnement</label>
            <input class="form-check-input" type="radio" name="ch1[]" id="positionB" value="option2" >
        </div>
            
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ch2[]" id="choix2" value="option3" >
            <label class="form-check-label" for="ch2"> A l'arret</label>
            <input class="form-check-input" type="radio" name="ch2[]" id="positionB" value="option4" >
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ch3[]" id="choix3" value="option5" >
            <label class="form-check-label" for="ch3">Quittait un Stationnement</label>
            <input class="form-check-input" type="radio" name="ch3[]" id="positionB" value="option6" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ch4[]" id="choix4" value="option7" >
            <label class="form-check-label" for="ch4"> Ouvrait une Portiere </label>
            <input class="form-check-input" type="radio" name="ch4[]" id="positionB" value="option8" >
        </div>
        <hr>
        <!-- detaille 1 pour base de donnee  -->
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="detaille1" name="dt1[]" value="option9">
        <label for="dt1" class="form-check-label" >Prenait Un Stationnement </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt1[]" value="optio8"> 
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dt1" name="dt1[]" value="optio7">
        <label for="dt1" class="form-check-label" > Sortait d'une Parking, un lieu privé, un chemin de terre </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt1[]" value="optio6">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="detaille3" name="dt1[]" value="optio5">
        <label for="dt1" class="form-check-label" > S'engageait dans d'une Parking, un lieu privé, un chemin de  </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt1[]" value="optio4">
    </div>
    <!-- detaille 2 pour base de donnee  -->

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="detaille2" name="dt2[]" value="optio3">
        <label for="dt2" class="form-check-label" > S'engageait sur une place gigatoire </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt2[]" value="optio1">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix54" name="dt2[]" value="optio">
        <label for="dt2" class="form-check-label" > Roulait sur une place a sens gigatoire </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt2[]" value="option017">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix66" name="dt2[]" value="option016">
        <label for="dt2" class="form-check-label" > Heurtait a l'arriere en roulant dans le meme sens et sur une file</label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt2[]" value="option015">
    </div>
<!-- detaille 3 pour la base de donnee  -->

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="detaille3" name="dt3[]" value="option014">
        <label for="dt3" class="form-check-label" >Roulair dans le meme sens et sur une file differente </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt3[]" value="option013">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix9" name="dt3[]" value="option012">
        <label for="dt3" class="form-check-label" > Changait de file </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt3[]" value="option011">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix10" name="dt3[]" value="option010">
        <label for="ch3" class="form-check-label" > Reculait </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt3[]" value="option09">
    </div>
    <!-- detaille 4 pour la base de donnees  -->
    
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="detaille4" name="dt4[]" value="option08">
        <label for="dt4" class="form-check-label" > Virait a gauche </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt4[]" value="option07">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix12" name="dt4[]" value="option06">
        <label for="dt4" class="form-check-label" > Doublait </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt4[]" value="option05">
    </div>
    <!-- detaille 4 pour la base de donnees  -->
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix13" name="dt4[]" value="option04">
        <label for="dt4" class="form-check-label" > Empietait sur une voie reservee a la circulation en sens inverse </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt4[]" value="option03">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix14" name="dt4[]" value="option02">
        <label for="dt4" class="form-check-label" > Venait de droite(dans un carafour) </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="dt4[]" value="option01">
    </div>
    <hr>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="ch5[]" id="choix5" value="option09" >
            <label class="form-check-label" for="ch5"> N'avait pas observé un signale de priorité </label>
            <input class="form-check-input" type="radio" name="ch5[]" id="positionB" value="option10" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="ch6[]" id="choix6" value="option9" >
            <label class="form-check-label" for="ch6"> N'avait pas observé un feu rouges  </label>
            <input class="form-check-input" type="radio" name="ch6[]" id="positionB" value="option010" >
        </div>

    </fieldset>
    </td>

    <td>
                   
   <!-- formulaire pour la voitur B -->
<fieldset class="fiesb">
    <legend class="legsb">Véhicule B</legend>
    <label for="prenom" class="control-label col-sm-3"> Prenom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="prenom_b" id="prenom" class="form-control">
                    </div>
                    <br>
                    <br>


                    <label for="nom" class="control-label col-sm-3"> Nom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="nom_b" id="nom_b" class="form-control">
                    </div>
                    <br>
                    <br>
                    <label for="adresse_b" class="control-label col-sm-3"> Adress </label>
                    <div class="col-sm-6">
                        <input required type="text" name="adresse_b" id="adresse" class="form-control">
                    </div>
                    <br><br>
                    
                    <label for="tel_b" class="control-label col-sm-3"> Tél </label>
                    <div class="col-sm-6">
                        <input type="text" name="tel_b" id="tel" class="form-control">
                     </div>
                    <br><br>
                    <label for="mail_b" class="control-label col-sm-3"> Mail </label>
                    <div class="col-sm-6">
                        <input type="text" name="mail_b" id="mail_b" class="form-control">
                    </div>
                    <br><hr><br>
    
                     <h3>Véhicule </h3>
                    <br><hr><br>
                    <label for="numero_contrat_a" class="control-label col-sm-3"> Marque </label>
                    <div class="col-sm-6">
                        <input type="text" name="marque_b" id="numero_contrat_a" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assure_a" class="control-label col-sm-3"> Type </label>
                    <div class="col-sm-6">
                        <input type="text" name="type_b" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assure_a" class="control-label col-sm-3">Numéro d'immatriculation :</label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_im_b" id="prenom_assure_a" class="form-control">
                    </div>
        
                     <br><hr><br>
                    <h3>Société d'Assurance</h3>
                    <label for="numero_contrat" class="control-label col-sm-3"> Numéro du Contrat </label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_contrat_b" id="numero_contrat" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assure" class="control-label col-sm-3"> Nom d'Assurance</label>
                    <div class="col-sm-6">
                        <input type="text" name="nom_assure_b" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assurance" class="control-label col-sm-3"> Téléphone ou email </label>
                    <div class="col-sm-6">
                        <input type="text" name="prenom_assure_b" id="prenom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="code_postal" class="control-label col-sm-3">Code_Postale </label>
                    <div class="col-sm-6">
                        <input required type="text" name="code_postal_b" id="code_postal" class="form-control">
                    </div>
                </fieldset>
                    <br><hr><br>
                    
                    <!-- <fieldset class="fieldsett">
        <div class="form-group">
                    <legend class="legendd">Date et l'heure de l'accident</legend>
                    <label for="calendar" class="control-label col-sm-2"> Date </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date_accident" id="calendar" class="form-control">
                    </div>
                    <br><br>
                    <label for="heure" class="control-label col-sm-2"> L'heure </label>
                    <div class="col-sm-4">
                        <input required type="text" name="heure" id="heure" class="form-control">
                    </div>
    </div>s            
            </fieldset > -->

           
            <fieldset class="fieldsett">
         <div class="form-group">
                <legend class="legendd">Observation et Description du lien de L'accident </legend>
                  
                <label for="observation"> Observation :</label>
                    <textarea name="observation_b" id="observation" class="form-control rounded-0" rows="3"> 
                </textarea>
                <br>
                <label for="point_choc"> Point de Choc :</label>
                    <textarea name="point_choc_b" id="point_choc" class="form-control rounded-0" rows="2"> 
                </textarea>
                <br>
                <label for="degat_materiel"> Dégats apparents du véhicule B :</label>
                    <textarea name="degat_matriel_b" id="degat_matriel" class="form-control rounded-0" rows="2"> 
                </textarea>
         </div>
            </fieldset>
            <br>

            <div class="row my-row">
                
                    <label for="photo" class="control-label col-sm-2">Ajouter des PHOTOS </label>
                    <div class="col-sm-8">
                        <input type="file" name="photo_b" id="photo" class="form-control">
                    </div>
     
    
        </div> 
    </td>
    </tr>
               
    </table>
<!-- ******************************************* fin table formulaire constat acccident ****************************************-->
  <!-- ******************************************* fin table formulaire constat acccident ****************************************-->        
               
            
                <!-- <button type='submit' class="btn btn-success"> Enregistrer le stagiaire</button> -->

                <button type='submit' class="btn btn-success btn-block"> 
								<h3> Enregistrer  <span class="fa fa-save"></span></h3> 
							</button>
            </form>
        

</div>
</div>
</div>
</body>
</html>
