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
		      
		      $body .= "\n" ."Article : Party";
		      $message .= "\n" ."Article : Goblets en carton";
		      $body .= "\n" ."Lieu de livraison : ".$lieu;
		      $message .= "\n" ."Lieu de livraison : ".$lieu;
		      
		      
		      
		       if(isset($_POST['pack'])) {
		      $body .="\n"."Pack Party";
		      $message .="\n"."Pack Party";
		      }else {
		       $body .="\n"."Articles party :";
		       $massage .="\n"."Articles party :";
		      }
		       if(isset($_POST['chapeau'])) {
		      $body .="chapeau ,";
		      $message .="chapeau ,";
		      }
		       if(isset($_POST['masque'])) {
		      $body .="masque ,";
		      $message .="masque ,";
		      }
		      
		      if(isset($_POST['ass_carr'])) {
		      $body .="assiète carré ,";
		      $message .="assiète carré ,";
		      }
		      
		      if(isset($_POST['ass_cerc'])) {
		      $body .="assiète cerculaire ,";
		      $message .="assiète cerculaire ,";
		      }
		      
		       if(isset($_POST['fourchette'])) {
		      $body .="couverts ,";
		      $message .="couverts ,";
		      }
		      
		      if(isset($_POST['paille'])) {
		      $body .="paille ,";
		      $message .="paille ,";
		      }
		      
		      
		      
		      
		      
		      
		      
		      
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
		      if($mail)echo"<script type='text/javascript'>alert('email envoye avec succee')</script>"
		      ;else echo"<script type='text/javascript'>alert('echec')</script>";
		      }else echo"<script type='text/javascript'>alert('chaines vides')</script>";
		      echo "<META http-equiv='refresh' content='0;URL=index.html'>";
		?>