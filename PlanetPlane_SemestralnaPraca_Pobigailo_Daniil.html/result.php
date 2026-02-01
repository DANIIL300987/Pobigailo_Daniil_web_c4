<?php
function safe($value) {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

$surname   = safe($_POST['surname'] ?? '');
$name      = safe($_POST['name'] ?? '');
$phone     = safe($_POST['phone'] ?? '');
$email     = safe($_POST['email'] ?? '');
$country   = safe($_POST['country'] ?? '');
$address   = safe($_POST['address'] ?? '');
$date      = safe($_POST['date'] ?? '');
$card      = safe($_POST['card'] ?? '');
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Ďakujeme za objednávku | PlanePlanet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="container">

        <div class="header-left">
    <a href="index.html" class="logo-container">
        <img src="img/logo.png" alt="PlanePlanet Logo" class="logo">
        <span class="logo-text">PlanePlanet</span>
    </a>
</div>


        <div class="header-center">
            <h1>PlanePlanet</h1>
        </div>

    </div>
</header>

<main class="main">
    <div class="container">

        <section class="plane-card">
            <h2>Ďakujeme za Vašu objednávku!</h2>

            <p style="margin: 15px 0;">
                Ďakujeme, že ste využili služby <strong>PlanePlanet</strong>.
                Vaša objednávka bola úspešne spracovaná.
                Náš tím Vás bude kontaktovať v najbližšom čase.
            </p>

            <h3>Údaje o objednávke</h3>

            <table style="width:100%; margin-top:20px;">
                <tr>
                    <td><strong>Meno:</strong></td>
                    <td><?= $name ?> <?= $surname ?></td>
                </tr>
                <tr>
                    <td><strong>E-mail:</strong></td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td><strong>Telefón:</strong></td>
                    <td><?= $phone ?></td>
                </tr>
                <tr>
                    <td><strong>Krajina:</strong></td>
                    <td><?= $country ?></td>
                </tr>
                <tr>
                    <td><strong>Adresa:</strong></td>
                    <td><?= $address ?></td>
                </tr>
                <tr>
                    <td><strong>Dátum doručenia:</strong></td>
                    <td><?= $date ?></td>
                </tr>
                <tr>
                    <td><strong>Platobná karta:</strong></td>
                    <td>**** **** **** <?= substr($card, -4) ?></td>
                </tr>
            </table>

            <br>

            <a href="index.html" class="buy-button">Späť na hlavnú stránku</a>
        </section>

    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>Meno a Priezvisko: Daniil Pobiigailo</p>
        <p>OŠP: Riadenie leteckej prevádzky.skupina Bravo</p>
        <p>Dátum spracovania: 29.01.2026</p>
    </div>
</footer>

</body>
</html>
