<?php
	session_start();
	require ('../../models/user.php');
	require ('../../controllers/function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Envoyer un message</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="../../controllers/messageComputing.php" method="POST">	
		<p><strong>Selectionnez le(s) destinataire(s):</strong></p>
		<?php 
			$studentTab = listPotentialRecipients();
			$i = 1;
			foreach ($studentTab as $val){
				?>
				<?php echo $val['id_etudiant']?>
				<input type="checkbox" id=<?='email_'.$i?> name="recipient[]" value=<?php echo $val['id_etudiant']?>>
				<label for=<?='email_'.$i?>><?=ucfirst($val['prenom_etudiant'])?></label><br>           
				<?php
				$i++;
			}
		?>
		<p><strong>Message :</strong></p>
		<textarea name="message" id="message" cols="50" rows="10"></textarea><br>
		<input type="hidden" name="send" value="1">
		<input type="submit" value="Envoyer">
	</form>	
</body>
</html>