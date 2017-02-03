<?php 

 require 'Armoire.php';


 
 $tab= Armoire::all();
 ?>
 



<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>SQL</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="ui segment">
  <table class="ui celled striped table">
    <thead>
      <tr>
	<th>id</th>
	<th>pointure</th>
	<th>description</th>
	<th>temp_lavage</th>
	<th>couleur</th>
	<th>date_lavage</t>

	    <?php foreach ($tab as $key=>$value)
  	
  {
            ?>
           <tr>
             <td>
               <?= $value['id']; 
               ?>

             </td>
             <td>
               <?= $value['pointure']?>
             </td>
             <td>
               <?= $value['description']?>
             <td>
               <?= $value['temp_lavage']; ?>

             </td>
             <td>
               <?= $value['couleur']; ?>
             </td>
             <td>
               <?= $value['date_lavage']; ?>
             </td>
           </tr>
           </div>
         

<?php
}
?>

 	






