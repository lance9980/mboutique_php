<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="july4.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--
 >> include(header)
 >> <div id="xxxxx">
     include($menu[$_GET['page']]['url']);

 </div>
>> include(footer)

http://asdf.com/asdf.php?page=gift.php
-----------------------
<?php
$mArray= [
    'welcome'=>['text'=>'Welcome','url'=>'index.html','default'=>true],
    'macarons'=>['text'=>'Our Macarons','url'=>'our_macarons.html'],
    'gifts'=>['text'=>'Gifts & Parties','url'=>'gifts_parties.html'],
    'contact'=>['text'=>'Contact','url'=>'contact.html']
];
?>
<ul>
<?php
foreach ($mArray as $keys=>$values) {
    print("<li>".$values['text']."</li>");
}
?>
</ul>
-->

============================================
<div id="header">
    <img src="assets/images/logo.png" id="logo">
    <ul id="ul">

        <li class="nav" id="firstbox"><a href="index.html">Welcome</a></li>
        <li class="nav"><a href="our_macarons.html">Our Macarons</a></li>
        <li class="nav">
            <a href="gifts_parties.html">
                Gifts & Parties
            </a>
        </li>
        <li class="nav" id="lastbox">
            <a href="contact.html">
                Contact
            </a>
        </li>
    </ul>
</div>
<img src="assets/images/welcome-image.png" id="welcome-image">
<div id="main-content">
    <img src="assets/images/macarons-image.png" id="macarons-image" class="image_hide">

    <div id="p">
        <p class="p_title">
            Welcome to MBoutique!
        </p>
        <p>
            We're a home-based baking business that specializes in the making of French Macarons, a gluten-free pastry
            item made from ground almonds. Our business began at the West Reading Farmers Market in 2011. Last year
            (2013) marked our third and final season of participation at the market. Mboutique was established to pay
            homage to the delicate French confectionery, the macaron. Our shop has been recognized as the connoisseurs
            of this delicious French pastry because of the wonderful variety of flavors from our great master chefs.
        </p>
        <p class="p_title">
            We love Macarons!
        </p>
        <p>
            Renowned macarons, French delights of the moment can be met in a variety of flavors and colors and are
            brilliant precisely because of their simplicity - a crispy coating, but delicate in a loose blanket of jam,
            chocolate buttercream spread is inviting.
        </p>
        <p>
            Macarons combine perfectly with champagne or white wine, tea or hot chocolate, fresh juices and natural
            fruit flavored coffee and guarantee that these little delights soon become friend that you cannot break.
        </p>
        <p class="p_title">
            Find that flavor you like. Try a sample everyday!
        </p>
    </div>
</div>
<div id="schedule_div">
    <ul id="schedule">
        <li>
            Monday <br><br>
            <span>15:00 - 16:00</span>
        </li>
        <li>
            Tuesday <br><br>
            <span>14:00 - 15:00</span>
        </li>
        <li>
            Wednesday <br><br>
            <span>09:00 - 10:00</span>
        </li>
        <li>
            Thursday <br><br>
            <span>18:00 - 19:00</span>
        </li>
        <li>
            Friday <br><br>
            <span>11:00 - 12:00</span>
        </li>
        <li>
            Saturday <br><br>
            <span>13:00 - 14:00</span>
        </li>
        <li>
            Sunday <br><br>
            <span>10:00 - 11:00</span>
        </li>
    </ul>
    <ul id="second">
        <li class="last" id="chocolate">
            chocolate <img src="assets/images/chocolate.png" class="macaron">
        </li>
        <li class="last" id="violet_cassis">
            violet cassis <img src="assets/images/violet-cassis.png" class="macaron">
        </li>
        <li class="last" id="passion_fruit">
            passion fruit <img src="assets/images/passion-fruit.png" class="macaron">
        </li>
        <li class="last" id="coffee">
            coffee <img src="assets/images/coffee.png" class="macaron">
        </li>
        <li class="last" id="raspberry">
            raspberry <img src="assets/images/raspbery.png" class="macaron">
        </li>
        <li class="last" id="rose">
            rose <img src="assets/images/rose.png" class="macaron">
        </li>
        <li class="last" id="caramel">
            caramel <img src="assets/images/caramel.png" class="macaron">
        </li>
    </ul>
    <ul id="under">
        <li class="last" id="coconut">
            coconut <img src="assets/images/coconut.png" class="macaron">
        </li>
        <li class="last" id="greentea">
            green tea <img src="assets/images/green-tea.png" class="macaron">
        </li>
        <li class="last" id="vanilla">
            vanilla <img src="assets/images/vanilla.png" class="macaron">
        </li>
        <li class="last" id="pistachio">
            pistachio <img src="assets/images/pistachio.png" class="macaron">
        </li>
        <li class="last" id="lemon">
            lemon <img src="assets/images/lemon.png" class="macaron">
        </li>
        <li class="last" id="tiffany_blue">
            tiffany blue <img src="assets/images/tiffany-blue.png" class="macaron">
        </li>
        <li class="last" id="almond">
            almond <img src="assets/images/almond.png" class="macaron">
        </li>
    </ul>
</div>
<div id="footer">
    <ul id="footer_ul">
        <li class="f1">
            <img src="assets/images/mail.png"> order@mboutique.com
        </li>
        <li class="f1">
            <img src="assets/images/phone.png"> 949-800-3111
        </li>
        <li class="f1">
            Follow us <img src="assets/images/facebook.png"> <img src="assets/images/twitter.png">
        </li>
        <li id="copyright">
            Copyright 2015 MBoutique. All rights reserved.
        </li>
    </ul>
</div>
</body>
</html>