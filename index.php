<?php

require_once 'utils/autoload.php';
require_once 'utils/database.php';

/**
 * @var PDO $database;
 */
$chatManager = new ChatManager($database);
if(isset($_POST['nom_chat']) && isset($_POST['age_chat'])) {
    $chat = new Chat([
            'nom' => $_POST['chat'],
            'age' => $_POST['age_chat'],
            'couleur' => $_POST['couleur_chat']
    ]);

    echo "<p> Le prénom du chat est : " . $chat->getNom() . " il a " . $chat->getAge() . " ans, et il est de couleur " . $chat->getCouleur();
    $chatManager->create($chat);
}

$chats = $chatManager->hydrate();






?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="">
        <label for="nom_chat">Nom du chat : </label>
        <input type="text" name="nom_chat" id="nom_chat">

        <label for="age_chat">Age du chat:</label>
        <input type="number" name="age_chat" id="age_chat">

        <label for="couleur_chat">Couleur du chat : </label>
        <input type="text" name="couleur_chat" id="couleur_chat">

        <button type="submit">Créer chat</button>
    </form>

    <?php foreach ($chats as $chat) { ?>
        <p> Prénom du chat : <?php echo $chat->getNom() ?>,
            age du chat : <?php echo $chat->getAge() ?>,
            couleur du chat : <?php echo $chat->getCouleur() ?>,
        </p>
    <?php }?>

</body>
</html>
