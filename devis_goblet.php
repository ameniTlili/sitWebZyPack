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
		      
		      $body .= "\n" ."Article : Goblets en carton";
		      $message .= "\n" ."Article : Goblets en carton";
		      $body .= "\n" ."Lieu de livraison : ".$lieu;
		      $message .= "\n" ."Lieu de livraison : ".$lieu;
		      
		       if(isset($_POST['goblet1'])) {
		      $body .="\n"."Goblet de 15cl";
		      $message .="\n"."Goblet de 15cl";
		      }
		       if(isset($_POST['goblet2'])) {
		      $body .="\n"."Goblet de 20cl";
		     $message .="\n"."Goblet de 20cl";
		      }
		        if(isset($_POST['goblet3'])) {
		      $body .="\n"."Goblet de 25cl";
		      $message .="\n"."Goblet de 25cl";
		      }
		        if(isset($_POST['goblet4'])) {
		      $body .="\n"."Goblet de 33cl";
		      $message .="\n"."Goblet de 33cl";
		      }
		      
		      $body .="\n"."Couvercle :".$couvercle;
		      $message .="\n"."Couvercle :".$couvercle;
		      
		      
		    
		      if($type =="goblet_standard") {
		      	$body .= "\n" ."Qantité " . $qt;
		      	  $message .= "\n" ."Qantité " . $qt;
		      	$body .="\n" ."Type : standard";
		      	$message .="\n" ."Type : standard";
		       }
		      else 
		      {
		      	$body .= "\n" ."Qantité " . $qt;
		      	  $message .= "\n" ."Qantité " . $qt;
		      	$body .="\n" ."Type : personalisé" ;
		      	$message .="\n" ."Type : personalisé" ;
		      	$body .="\n" ."Nbr couleurs : ".$nbr_couleur ;
		      	$message .="\n" ."Nbr couleurs : ".$nbr_couleur ;
		      	$body .="\n" ."Description : ".$description ;
		      	$message .="\n" ."Description : ".$description ;
		      	
		      
		      }
		     
		      $mail=mail($destinataire,$from,$body,$from);
		      $mail=mail($email,$from,$message,$company);
		      if($mail)echo"<script type='text/javascript'>alert('email envoye avec succee')</script>"
		      ;else echo"<script type='text/javascript'>alert('echec')</script>";
		      }else echo"<script type='text/javascript'>alert('chaines vides')</script>";
		      echo "<META http-equiv='refresh' content='0;URL=index.html'>";
		?>