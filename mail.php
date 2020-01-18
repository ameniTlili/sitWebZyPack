	<?php
		   if(isset($_POST)&& !empty($_POST['nom'])&& 
		      !empty($_POST['email'])&& 
		      !empty($_POST['tel'])&& 
		      !empty($_POST['message'])){
		      extract($_POST);
		      $destinataire ='ameni1tlili@gmail.com';
		      $from= "from :". $nom ." , num tel :" . $tel ." , mail : " . $email;
		     
		      $mail=mail($destinataire,$from,$message,$from);
		      if($mail)echo"<script type='text/javascript'>alert('email envoye avec succes')</script>"
		      ;else echo"<script type='text/javascript'>alert('echec')</script>";
		      }else echo"<script type='text/javascript'>alert('chaines vides')</script>";
		      echo "<META http-equiv='refresh' content='0;URL=index.html'>";
		?>