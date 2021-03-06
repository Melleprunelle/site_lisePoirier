<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lise Poirier</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css" />
    <link rel="stylesheet" href="stylesheets/anicollection.css" media="screen and (min-width: 900px)">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body id="wrap">
    <nav>
        <ul>
            <li class="tooltip">
                <a href="#home" class="js-scrollTo">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">ACCUEIL</span>
            </li>
            <li class="tooltip">
                <a href="#savoir" class="js-scrollTo">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">SAVOIR-ÊTRES</span>
            </li>
            <li class="tooltip">
                <a href="#cv" class="js-scrollTo">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">C.V</span>
            </li>
            <li class="tooltip">
                <a href="#techno" class="js-scrollTo">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">TECHNOS</span>
            </li>
            <li class="tooltip">
                <a href="#projects" class="js-scrollTo">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">RÉALISATIONS</span>
            </li>
            <li class="tooltip">
                <a href="#contact" class="js-scrollTo">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">CONTACT</span>
            </li>
            <li class="tooltip">
                <a href="#sociales" class="js-scrollTo">
                    <i class="fa fa-share-square" aria-hidden="true"></i>
                </a>
                <span class="tooltip_text">LIENS SOCIAUX</span>
            </li>
        </ul>
    </nav>
    <!-- END DIV CLASS NAV -->
    <header id="home">
        <span><img src="assets/imgs/logo.svg" alt="">Unicorn</span>
        <h1>WELCOME</h1>
        <h2>
            < Lise Poirier - Développeur web et graphiste />
        </h2>
    </header>
    <section class="savoir-etre" id="savoir">
        <div class="separator"></div>
        <div class="title">
            <h2>LA TÊTE DANS LES ÉTOILES MAIS LES PIEDS SUR TERRE</h2>
            <p>Ne joue jamais à saute-mouton sur une licorne !</p>
        </div>
        <article>
            <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                <img src="assets/imgs/005-symbol.svg" alt="" class="center-block">
                <p>Créative</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                <img src="assets/imgs/004-smile.svg" alt="" class="center-block">
                <p>Jovial</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                <img src="assets/imgs/003-fireworks.svg" alt="" class="center-block">
                <p>Pep's</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
                <img src="assets/imgs/002-target.svg" alt="" class="center-block">
                <p>Méticuleuse</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
                <img src="assets/imgs/001-speech-bubbles-comment-option.svg" alt="" class="center-block">
                <p>Communicante</p>
            </div>
        </article>
        <div class="separator"></div>
    </section>
    <section class="cv" id="cv">
        <div class="separator"></div>
        <img src="assets/imgs/logo2.svg" alt="">
        <div class="title">
            <h2>MAIS TOUJOURS AVEC PLUS D'UN TOUR DANS SON SAC</h2>
            <p>La licorne fut créée par sorcellerie pour permettre aux preux chevaliers de se combattre en tournoi les mains dans les poches. - Eric Chevillard</p>
        </div>
        <a href="assets/imgs/CV.pdf" target="_blank"><button>C.V</button></a>
        <h4>TELECHARGEMENT C.V</h4>
        <div class="separator"></div>
    </section>
    <section class="savoir-etre techno" id="techno">
        <div class="separator"></div>
        <div class="title">
            <h2>TECHNOS</h2>
            <p>Qui sait ? Y a-t-il une licorne en colère sur la face cachée de la lune ?</p>
        </div>
        <div class="separator"></div>
        <article>
            <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                <img src="assets/imgs/icons/005-html-5-logo.svg" alt="" class="center-block">
                <p>HTML5</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                <img src="assets/imgs/icons/004-css-3.svg" alt="" class="center-block">
                <p>CSS3 - SASS</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                <img src="assets/imgs/icons/003-js.svg" alt="" class="center-block">
                <p>JAVA SCRIPT</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
                <img src="assets/imgs/icons/002-wordpress-logo-of-a-letter-in-a-circle.svg" alt="" class="center-block">
                <p>WORDPRESS</p>
            </div>
            <div data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
                <img src="assets/imgs/icons/001-framework.svg" alt="" class="center-block">
                <p>BIBLIOTHÈQUE JS/HTML/CSS &#8226; GIT</p>
            </div>
        </article>
        <div class="separator"></div>
    </section>
    <section class="savoir-etre projects" id="projects">
        <div class="separator separator-black"></div>
        <div class="title">
            <h2>MES RÉALISATIONS</h2>
            <p>Le rhinocéros est une juste une licorne manquant d'activité physique.</p>
        </div>
        <article>
            <div id="bowling">
                <div>
                    <h4><a href="">BOWLING ALMA</a></h4>
                    <p>Réalisation de la page d'accueil d'un site pour le Bowling Rennes Alma.</p>
                    <a href="https://melleprunelle.github.io/site-bowling-alma/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="giant">
                <div>
                    <h4><a href="">TINY GIANT</a></h4>
                    <p>Entrainement d'exécution technique du site internet Tiny Giant.</p>
                    <a href="https://melleprunelle.github.io/tinyGiant.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="bose">
                <div>
                    <h4><a href="">BOSE</a></h4>
                    <p>Reprise de la page d'accueil du site de Bose en html et css.</p>
                    <a href="https://melleprunelle.github.io/bose.github.io/" target="_blank">Voir +</a>

                </div>
            </div>
            <div id="branded">
                <div>
                    <h4><a href="">BRANDED</a></h4>
                    <p>Entrainement d'exécution technique du site internet Branded.</p>
                    <a href="https://melleprunelle.github.io/branded.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="dots">
                <div>
                    <h4><a href="">DOTS</a></h4>
                    <p>Entrainement d'exécution technique du site internet Dots.</p>
                    <a href="https://melleprunelle.github.io/dots.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="veto">
                <div>
                    <h4><a href="">123VETO</a></h4>
                    <p>Création d'un template personnalisé pour la clinique vétérinaire 123 VETO.</p>
                    <a href="http://123-veto.fr/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="audio">
                <div>
                    <h4><a href="">AUDIOTHÈME</a></h4>
                    <p>Projet d'aboutissement de la formation Web dans la techno HTML, CSS et BOOTSTRAP.</p>
                    <a href="https://melleprunelle.github.io/audiotheme.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="bootstrap">
                <div>
                    <h4><a href="">BOOTSTRAP</a></h4>
                    <p>Première prise en main de la techno boostrap avec un projet sur une page contenant la font awesome et des hovers.</p>
                    <a href="https://melleprunelle.github.io/startbootstrap.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="pomodoro">
                <div>
                    <h4><a href="">POMODORO</a></h4>
                    <p>Réalisation d'une application de Pomodoro pour l'organisation du travail.</p>
                    <a href="https://melleprunelle.github.io/jquerypomodoro.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="poney">
                <div>
                    <h4><a href="">CLICKER PONEY</a></h4>
                    <p>Mise en place de la techno JS au travers d'un poney clicker basique.</p>
                    <a href="https://melleprunelle.github.io/poneyclicker.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="pastime">
                <div>
                    <h4><a href="">PASTIME</a></h4>
                    <p>Reprise d'un projet Wordpress à recréer en front scratch. Première acquisition des réelles bases css.</p>
                    <a href="http://melleprunelle.github.io/pastime.github.io/" target="_blank">Voir +</a>
                </div>
            </div>
            <div id="create">
                <div>
                    <h4><a href="">CREATE PRO</a></h4>
                    <p>Réalisation d'une première page HTML5 et CSS3. Reprise d'un projet Wordpress à recréer en front scratch.</p>
                    <a href="https://melleprunelle.github.io/Melleprunelle.createpro.io.github/" target="_blank">Voir +</a>
                </div>
            </div>
        </article>
        <div class="separator separator-black"></div>
    </section>
    <section class="cv contact" id="contact">
        <div class="separator"></div>
        <img src="assets/imgs/icons/paper.svg" alt="">
        <div class="title">
            <h2>Contacter la licorne</h2>
            <p>Avec des paillettes en or tout est permis</p>
        </div>
        <form method="POST" action="mail.php" enctype="multipart/form-data">
            <label for="objet">Objet</label>
            <input type="text" name="objet" value="" required>
            <label for="mail">Email</label>
            <input type="email" name="mail" value="" required/>
            <label for="Commentaire">Message</label>
            <textarea type="text" name="message" value="s" cols="40" rows="10" maxlength="200" placeholder="Pensez à indiquer votre nom et prénom à la fin de votre message..." required></textarea>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
        <div class="separator"></div>
    </section>
    <footer id="sociales">
        <div class="separator separator-black"></div>
        <div>
            <a href="https://github.com/Melleprunelle" target="_blank"><i class="fa fa-2x fa-github-square" aria-hidden="true"></i></a>
            <a href="https://fr.linkedin.com/in/lise-poirier-8b6316a6" target="_blank"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        <p>Créatives commons : attribution • Créateurs des icônes : Simpleicon, freepik, Dave Gandy &#9679; Le logotype licorne est mon entière propriété.</p>
        <div class="separator separator-black"></div>
    </footer>

    <script src="assets/jquery-3.2.1.min.js"></script>
    <script src="assets/relax/rellax.min.js"></script>
    <script src="assets/ani/anijs.js"></script>
    <script src="assets/ani/anijs-helper-scrollreveal.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>