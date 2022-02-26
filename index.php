<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Manu Formulaire</title>
    <!-- lien css -->
    <link rel="stylesheet" href="./assets/css/style.css?version=<?= time(); ?>">
    <!-- lien Js -->
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-wrapper">
            <nav class="header-nav">
                <a href="#"><img src="./assets/img/LaManuCompact_RVB.svg" alt="Logo de La Manu" class="header-logo"></a>
                <!-- burger menu -->
                <a href="#"><div class="burger">
                    <div class="mid-line"></div>
                </div></a>
            </nav>
        </div>
    </header>
    <!-- main content -->
    <main>
        <form action="" method="get">
            <!-- bannière -->
            <section class="banner-wrapper">
                <div class="empty"></div>
                <div class="banner">
                    <div class="banner-left"><h1>fiche de <br> renseignement</h1></div>
                    <div class="banner-right">
                        <img src="./assets/img/IllusForm.png" alt="illustration bannière formulaire">
                    </div>
                </div>
                
            </section>
        
            <h2>Fiche de renseignement de l'étudiant</h2>


            <!----------------------------------------------------- PROGRESS BAR ---------------------------------------------------------------->
            <div class="progressbar">
                <div class="progress"></div>
                <div class="progress-step progress-step-active"></div>
                <div class="progress-step"></div>
                <div class="progress-step"></div>
                <div class="progress-step"></div>
                <div class="progress-step"></div>
            </div>
            <!----------------------------------------------------- STEP ---------------------------------------------------------------->

        <!-- INFORMATIONS PERSONNELLES -->

            <section class="step step-active info-perso-wrapper">
                <div class="info-perso-intro">
                    <div class="info-perso-title">Informations<span>Personnelles</span></div>
                    <div class="info-perso-img">
                        <img src="./assets/img/infoPerso.png" alt="">
                    </div>
                </div>
                <div class="info-perso-form">
                    <div class="formulaire">
                        <input type="text" placeholder="Nom" id="lastname" name="lastname">
                        <input type="text" placeholder="Prénom" id="firstname" name="firstname">
                        <input type="text" placeholder="Adresse" id="adress" name="adress">
                        <input type="text" placeholder="Code postal et ville" id="city" name="city">
                        <input type="text" placeholder="Téléphone portable" id="mobile-phone" name="mobilePhone">
                        <input type="text" placeholder="Téléphone fixe" id="phone" name="phone">
                        <input type="text" placeholder="Adresse mail" id="email" name="email">
                        <input type="text" placeholder="Date de naissance" id="birth-date" name="birthDate">
                        <input type="text" placeholder="Lieu de naissance" id="birth-city" name="birthCity">
                        <input type="text" placeholder="Pays de naissance" id="birth-country" name="birthCountry">
                        <input type="text" placeholder="Nationalité" id="nationality" name="nationality">
                        <div class="btn next">Suivant</div>
                    </div>
                </div>
            </section>

            <!-- DERNIERE CLASSE SUIVIE -->


            <section class="step scolaire-wrapper">
                <div class="scolaire-intro">
                    <div class="scolaire-img">
                        <img src="./assets/img/scolaire.png" alt="">
                    </div>
                    <div class="scolaire-title">Parlons<span>Scolaire ?</span></div>
                </div>
                <div class="scolaire-form-wrapper">
                    <div class="scolaire">
                        <h3>Dernière classe suivie ?</h3>
                        <div class="scolaire-form">
                            <div class="radio">
                                <input type="radio" id="term" name="classe" value="term">
                                <label for="term">Terminale</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="etudeSup" name="classe" value="etudeSup">
                                <label for="etudeSup">1ère ou 2ème année de DEUG,DUT,BTS</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="preparatoire" name="classe" value="preparatoire">
                                <label for="preparatoire">Classe préparatoire</label>
                            </div>
                            <h4>Diplôme obtenue</h4>
                            <div class="checkbox">
                                <input type="checkbox" id="bac" name="diplome">
                                <label for="bac">Baccalauréat général, technologique, professionnel</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="bac3" name="diplome">
                                <label for="bac3">DEUG,DUT,BTS, ou autre diplôme de niveau BAC+3</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="bac3plus" name="diplome">
                                <label for="bac3plus">Diplôme de niveau BAC+3 ou plus</label>
                            </div>
                            <div class="btns">
                                <div href="" class="btn prev">Précédent</div>
                                <div href="" class="btn next">Suivant</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- PERSONNES A PREVENIR EN CAS D'URGENCES -->

            <section class="step urgences-wrapper">
                <div class="urgences-intro">
                    <div class="urgences-title">Personnes à prévenir<span>en cas d'Urgences </span></div>
                    <div class="urgences-img">
                        <img src="./assets/img/urgencesImg.png" alt="">
                    </div>
                </div>
                <div class="urgences-form">
                    <div class="num">
                        <p>1</p>
                    </div>
                    <div class="formulaire">
                        <input type="text" placeholder="Nom" id="lastname-1" name="lastname-1">
                        <input type="text" placeholder="Prénom" id="firstname-1" name="firstname-1">
                        <input type="text" placeholder="Téléphone portable" id="mobilephone-1" name="mobilephone-1">
                        <input type="text" placeholder="Téléphone fixe" id="phone-1" name="phone-1">
                        <input type="text" placeholder="Adresse" id="city-1" name="city-1">
                    </div>
                </div>
                <div class="blank"></div>
                <div class="urgences-form">
                    <div class="num">
                        <p>2</p>
                    </div>
                    <div class="formulaire">
                        <input type="text" placeholder="Nom" id="lastname-2" name="lastname-2">
                        <input type="text" placeholder="Prénom" id="firstname-2" name="firstname-2">
                        <input type="text" placeholder="Téléphone portable" id="mobilephone-2" name="mobilephone-2">
                        <input type="text" placeholder="Téléphone fixe" id="phone-2" name="phone-2">
                        <input type="text" placeholder="Adresse" id="city-2" name="city-2">
                    </div>
                </div>
                <div class="urgences-form">
                    <div class="num">
                        <p>3</p>
                    </div>
                    <div class="formulaire">
                        <input type="text" placeholder="Nom" id="lastname-3" name="lastname-3">
                        <input type="text" placeholder="Prénom" id="firstname-3" name="firstname-3">
                        <input type="text" placeholder="Téléphone portable" id="mobilephone-3" name="mobilephone-3">
                        <input type="text" placeholder="Téléphone fixe" id="phone-3" name="phone-3">
                        <input type="text" placeholder="Adresse" id="city-3" name="city-3">
                        <div class="btns">
                            <div href="#" class="btn prev">Précédent</div>
                            <button type="submit" value="submit" class="btn send">Envoyer</button>
                        </div>
                    </div>
                </div> 
            </section>
        </form>    
    </main>
    <footer class="footer-wrapper">
        <img src="./assets/img/LaManuFull_RVB_white.svg" alt="Logo La Manu">
    </footer>

</body>
</html>





