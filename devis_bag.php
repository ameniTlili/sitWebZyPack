<?php
		   if(isset($_POST)&& !empty($_POST['nom'])&& 
		      !empty($_POST['email'])&& 
		      !empty($_POST['tel'])&& 
		      !empty($_POST['adr'])){
		      extract($_POST);
		      $destinataire ='ameni1tlili@gmail.com';
		      $company="ZY PACK COMPANY \n".$nom." , merci pour votre choix";
		      $message="Vos informations : \n \n";
		      $from= "from :". $nom ." , num tel :" . $tel ." , mail : " . $email;
		      $body="Nom du client :" . $nom."\n" ."Numero de tel :" . $tel ."\n" ."Email : " . $email ;
		      $message .= $body ."\n \n Vos choix : \n";
		      
		      $body .= "\n" ."Article : Sac en papier";
		      $message .= "\n" ."Article : Goblets en carton";
		      $body .= "\n" ."Lieu de livraison : ".$lieu;
		      $message .= "\n" ."Lieu de livraison : ".$lieu;
		      
		      
		      
		       if(isset($_POST['craft'])) {
		      $body .="\n"."Type de papier : craft";
		      $message .="\n"."Type de papier : craft";
		      }		      
		       if(isset($_POST['craft_blanchi'])) {
		      $body .="\n"."Type de papier : craft blanchi";
		      $message .="\n"."Type de papier : craft blanchi";
		      }
		       if(isset($_POST['couche'])) {
		      $body .="\n"."Type de papier : couché";
		      $message .="\n"."Type de papier : couché";
		      }
		      
		    
		      $body .= "\n" ."Largeur " . $largeur;
		      $message .= "\n" ."Largeur " . $largeur;
		      
		       $body .= "\n" ."Hauteur " . $hauteur;
		      $message .= "\n" ."Hauteur " . $hauteur;
		      
		        
		       $body .= "\n" ."Soufflet " . $soufflet;
		      $message .= "\n" ."Soufflet " . $soufflet;
		      
		      
		      $body .= "\n" ."Qantité " . $qt;
		      $message .= "\n" ."Qantité " . $qt;
		      if($type =="goblet_standard") {
		      	$body .="\n" ."Type : standard"; 
		      	$massage .="\n" ."Type : standard"; 
		      	}
		      else 
		      {
		      	$body .="\n" ."Type : personalisé" ;
		      	$message .="\n" ."Type : personalisé" ;
		      	$body .="\n" ."Nbr couleurs : ".$nbr_couleur ;
		      	$message .="\n" ."Nbr couleurs : ".$nbr_couleur ;
		      	$body .="\n" ."Description : ".$description ;
		      	$message .="\n" ."Description : ".$description ;
		      	
		      
		      }
		     
		      $mail=mail($destinataire,$from,$body,$from);
		      $mail=mail($email,$from,$message,$company);
		      if($mail)echo"<script type='text/javascript'>alert('email envoye avec succee')</script>";
		     else echo"<script type='text/javascript'>alert('echec')</script>";
		      }else echo"<script type='text/javascript'>alert('chaines vides')</script>";
		      echo "<META http-equiv='refresh' content='0;URL=index.html'>";
		?>