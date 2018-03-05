<!DOCTYPE html>
<html>
<head>
<title>Légumalin - Profil</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
    
<body>
    
<?php include "include/header.php"; ?>
    
<main class="jardinier_profil">
    
   <h1 class="h1_marron">Je suis jardinier</h1> 
    
    <div class="profil_jardinier_infos">
    
    <div class="profil_jardinier_id">
        
    <h3 class="profil_jardinier_h3">Prénom nom</h3>
    <div class="profile_bloc">
        <div class="profile_img" style=" background: url(img/nain.jpg) center;"></div>
        
        <ul>
            <li><label class="profil_label">âge :</label></li>
            <li><label class="profil_label">activité :</label></li>
            <li><label class="profil_label">adresse :</label></li>
        </ul>
            
        <ul>
            <li><label class="profil_label">Description :</label></li>
        </ul>
    </div>
    </div>
        
    <div class="profil_jardinier_partage">
    <h3 class="profil_jardinier_h3">Je compte partager ma récolte ...</h3>
    <div class="profile_bloc"></div>
    </div>
    
        
    
    
    
    <div class="profil_jardinier_jardins"></div> 
    
</main> 
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
    
</html>