<?php
include __DIR__ . "/../src/functions.php";
require_once '../vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader("../App/templates/");
$twig = new \Twig\Environment($loader, [
    'cache' => '/../src/cache',
]);
$template = $twig->load('template.html');
echo $twig->render('template.html');


main();
connect();
getUser($db);
addUser($email, $name, $phone, $db, $submit, $street, $home, $appt, $errors);
addOrder($street, $home, $part, $appt, $user_email, $db, $submit, $floor, $comment, $payment, $callback, $errors, $email, $user_id);
imageAction();
