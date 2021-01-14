<?php
require_once('./includes/bdd.inc.php'); 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    require('./templates/head.inc.html');
    ?>
</head>
<body>
    
<header>
    <?php
require('./templates/header.html')
    ?>
</header>

<main class="container-fluid">
<div class="row">
<div class="col-3">
<?php
require('./templates/nav.html')
?>
</div>
<div class="col-9">
<?php
if(isset($_GET['read'])){
    echo 'le read ici';
}
elseif(isset($_GET['create'])){
    echo 'le create ici';
}
// else{
//     echo 'rien à afficher';
// }
?>
</div>
</div>
</main>

<footer>
<?php
require('./templates/footer.html')
?>
</footer>

</body>
</html>