<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Manu Formulaire</title>
    <!-- lien css -->
    <link rel="stylesheet" href="./assets/css/style.css?version=<?= time(); ?>">
</head>
<body>
    <header>
        <div class="header-wrapper">
            <nav class="header-nav">
                <a href="#"><img src="./assets/img/LaManuUltraCompact_RVB_white.svg" alt="Logo de La Manu" class="header-logo"></a>
                <a href="#"><div class="burger">
                    <div class="mid-line"></div>
                </div></a>
            </nav>
        </div>
    </header>
    <section class="banner-wrapper">
        <div class="empty"></div>
        <div class="banner">
            <div class="banner-left"><h1>fiche de <br> renseignement</h1></div>
            <div class="banner-right">
                <img src="./assets/img/IllusForm.png" alt="illustration bannière formulaire">
            </div>
        </div>
        
    </section>
    <main>
        <h2>Fiche de renseignement de l'étudiant</h2>
        <section class="info-perso-wrapper">
            <div class="info-perso-intro">
                <div class="info-perso-title">Informations<span>Personnelles</span></div>
                <div class="info-perso-img">
                    <img src="./assets/img/infoPerso.png" alt="">
                </div>
            </div>
            <div class="info-perso-form">
                <form action="" method="GET" class="formulaire">
                    <input type="text" placeholder="Nom" id="lastname">
                    <input type="text" placeholder="Prénom" id="firstname">
                    <input type="text" placeholder="Adresse" id="adress">
                    <input type="text" placeholder="Code postal et ville" id="city">
                    <input type="text" placeholder="Téléphone portable" id="mobile-phone">
                    <input type="text" placeholder="Téléphone fixe" id="phone">
                    <input type="text" placeholder="Adresse mail" id="email">
                    <input type="text" placeholder="Date de naissance" id="birth-date">
                    <input type="text" placeholder="Lieu de naissance" id="birth-city">
                    <input type="text" placeholder="Pays de naissance" id="birth-country">
                    <input type="text" placeholder="Nationalité" id="nationality">
                </form>
            </div>
        </section>
    </main>
</body>
</html>





