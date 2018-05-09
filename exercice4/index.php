<?php
include_once('./classes/chat.php');

$chat1= new Chat;
    $chat1->set_prenon('Louis');
    $chat1->set_age(4);
    $chat1->set_couleur('blanc');
    $chat1->set_sexe('mâle');
    $chat1->set_race('grimousi');

    $chat1->get_info();

    $chat2= new Chat;
    $chat2->set_prenon('lor');
    $chat2->set_age(3);
    $chat2->set_couleur('bleu');
    $chat2->set_sexe('femelle');
    $chat2->set_race('craspouille');

    $chat2->get_info();

    $chat3= new Chat;
    $chat3->set_prenon('bernard');
    $chat3->set_age(17);
    $chat3->set_couleur('blouge');
    $chat3->set_sexe('mâle');
    $chat3->set_race('luigi');

    $chat1->get_info();
