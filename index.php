<?php
try{
    $bdd = new PDO('mysql:hodt=127.0.0.1;dbname=test;charset=utf8','root','');
}catch(Exception $e){
    exit('Erreur: '.$e->getMessage());
}
$requete = $bdd->query('SELECT * FROM news');

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
</head>
<body>
<?php  while ($news = $requete->fetch(PDO::FETCH_ASSOC)){ ?>
    <p><b><?= $news['id'] ?>: </b><?= $news['contenu'] ?></p>
<?php }?>
</body>
</html>