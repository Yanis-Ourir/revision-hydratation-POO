<?php

class ChatManager
{
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function create(Chat $cat) {
        $request = $this->database->prepare("INSERT INTO cat (nom, age, couleur) VALUES (:nom, :age, :couleur)");
        $request->execute([
            'nom' => $cat->getNom(),
            'age' => $cat->getAge(),
            'couleur' => $cat->getCouleur()
        ]);
    }

    public function hydrate() {
        $request = $this->database->query("SELECT * FROM cat");
        $allCats = $request->fetchAll();

        $chats = [];

        foreach ($allCats as $cat) {
            $newChat = new Chat($cat);
            $chats[] = $newChat;
        }

        return $chats;
    }

}