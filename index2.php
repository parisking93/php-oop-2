<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 
require_once __DIR__ . "/class/Client.php";
require_once __DIR__ . "/class/Product.php";
require_once __DIR__ . "/class/ClientPremium.php";


// cliente normale 
$pippo = new Client('ciccio', 'bruno');

// cliente Premium è obbligato ad aggiungere la carta 
$gino = new ClientPremium('ciccio', 'bruno',23232443,'04/22',345);

// controllo codice premium del cliente Premium
echo 'il codice premio di gino ' . $gino->getPremiumCode();

// aggiungere il numero della carta per cliente normale 
$pippo->setCard(232131313143,'05/22',365);

// contro se il numero della carta è corretto 
echo '<br> la carta  di pippo ' . $pippo->getCard();

//metto i prodotti sullo shop
$product1 = new Product('computer', 250,5);
$product2 = new Product('radio',100,2);

//aggiungo i prodotti sul carrello del cliente
$pippo->addProduct($product1->getProduct());

//aggiungo i prodotti sul carrello del cliente Premium con lo sconto 
$gino->addProduct($product1->getProduct());
$gino->addProduct($product1->getProduct());
$gino->addProduct($product2->getProduct());

//controllo quanti elementi di un determinato prodotto sono rimasti
echo '<br> i prodotti rimasti sono ' . $product1->getItemLeft();


var_dump($gino);
var_dump($pippo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>