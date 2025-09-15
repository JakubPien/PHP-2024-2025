<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T571</title>
</head>
<body>

<header>
    <h3>Zadanie T571</h3>
    <h2>Autor: Jakub Pieniężny</h2>
</header>

<section>
    <h3>Tu przesyłamy kod z klasą Osoba z dodanym polem wiek.</h3>

<?php
class Osoba {
    private $name;
    public $email;
    public $password;
    public $wiek;

    public function __construct($name, $email, $password, $wiek) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->wiek = $wiek;
    }


    function getName() {
        return "Imie użytkownika: $this->name.<br>";
    }

    function login() {
        return "Użytkownik $this->name jest zalogowany.<br>";
    }

    function getYear() {
        return "Wiek użytkownika to $this->wiek.<br>";
    }

    function __destruct() {
        echo "Nazwa użytkownika to {$this->name}.<br>";
    }
}

$jakub = new Osoba("Jakub", "jakub.pieniezny@onet.pl", "Jakub11", "17");
echo $jakub->login();
echo $jakub->getName();
echo $jakub->getYear();
?>

</section>


</body>
</html>


