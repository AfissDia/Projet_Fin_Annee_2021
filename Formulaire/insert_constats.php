<?php

	require('conn.php');
		
	// $nom=$_POST['nom_matiere'];
	// $nombre_heure_total=$_POST['nombre_heure_total'];
	// $nombre_heure_tp=$_POST['nombre_heure_tp'];
	// $nombre_heure_th=$_POST['nombre_heure_th'];
	// $coef=$_POST['coef'];
	// $choix=implode(',',$_POST['choix']);

$date_accident=$_POST['date_accident'];
$heure=$_POST['heure'];
$ville=$_POST['ville'];
$lieu=$_POST['lieu'];
$blesse=implode(',',$_POST['blesse']);
$dega=implode(',',$_POST['dega']);
$temoin=$_POST['temoin'];

//mon 2 eme test pour les formulaires
    $prenom_a=$_POST['prenom_a'];
    $nom_a=$_POST['nom_a'];
    $adresse_a=$_POST['adresse_a'];
    $tel_a=$_POST['tel_a'];
    $mail_a=$_POST['mail_a'];
    $numero_contrat_a=$_POST['numero_contrat_a'];
    $nom_assure_a=$_POST['nom_assure_a'];
    $prenom_assure_a=$_POST['prenom_assure_b'];
    $code_postal_a=$_POST['code_postal_a'];
    $observation_a=$_POST['observation_a'];
    $point_choc_a=$_POST['point_choc_a'];
    $degat_matriel_a=$_POST['degat_matriel_a'];

//mon 3 eme test pour les formulaires

$ch1=implode(',',$_POST['ch1']);
$ch2=implode(',',$_POST['ch2']);
$ch3=implode(',',$_POST['ch3']);
$ch4=implode(',',$_POST['ch4']);
$dt1=implode(',',$_POST['dt1']);

$dt2=implode(',',$_POST['dt2']);
$dt3=implode(',',$_POST['dt3']);
$dt4=implode(',',$_POST['dt4']);
$ch5=implode(',',$_POST['ch5']);
$ch6=implode(',',$_POST['ch6']);

//mon 4 eme test pour les formulaires
    $prenom_b=$_POST['prenom_b'];
    $nom_b=$_POST['nom_b'];
    $adresse_b=$_POST['adresse_b'];
    $tel_b=$_POST['tel_b'];
    $mail_b=$_POST['mail_b'];
    $numero_contrat_b=$_POST['numero_contrat_b'];
    $nom_assure_b=$_POST['nom_assure_b'];
    $prenom_assure_b=$_POST['prenom_assure_b'];
    $code_postal_b=$_POST['code_postal_b'];
    $observation_b=$_POST['observation_b'];
    $point_choc_b=$_POST['point_choc_b'];
    $degat_matriel_b=$_POST['degat_matriel_b'];


	$requete_insert_matiere="INSERT INTO constat VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
    ?,?,?,?,?,?)";
	$valeurs_insert_matiere=array(
						NULL,
						$date_accident,
						$heure,
						$ville,
                    
                        $lieu,
                        $blesse,
                        $dega,
                        $temoin,
                        $prenom_a,
                        
                    $nom_a,
                    $adresse_a,
                    $tel_a,
                    $mail_a,
                    $numero_contrat_a,
                    
                        $nom_assure_a,
                        $prenom_assure_a,
                        $code_postal_a,
                        $observation_a,
                        $point_choc_a,
                    
                    $degat_matriel_a,
                    $ch1,
                    $ch2,
                    $ch3,
                    $ch4,

                       $dt1,
                        $dt2,
                        $dt3,
                        $dt4,
                        $ch5,
                        
                    $ch6,
                    $prenom_b,
                    $nom_b,
                    $adresse_b,
                    $tel_b,
                    
                    $mail_b,
                    $numero_contrat_b,
                    $nom_assure_b,
                    $prenom_assure_b,
                    $code_postal_b,
        
                    $observation_b,
                    $point_choc_b,
                    $degat_matriel_b
        
					);
					
	$resultat_insert_matiere=$pdo->prepare($requete_insert_matiere);
	$resultat_insert_matiere->execute($valeurs_insert_matiere);
	
	// $msg= "Matiere ajoutée avec succès";
	// $url= "matieres/page_les_matieres.php";		
	header("location:page_add_constats.php");
	
?>
