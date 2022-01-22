<?php
require_once './db/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Nos billets</title>
</head>
<body>
<?php
require 'header.php'
?>
    <main class="main">
        <section class="top-article" id="accueil">
            <h1 class="top-title">Hollidays, sweet hollidays</h1>
            <div class="top-article-bottom">
                <div class="top-article-infos">
                    <div class="top-article-react">
                        <a href="#" class="top-article-likes">20 likes</a>
                        <a href="#" class="top-article-commentaires">10 Commentaires</a>
                    </div>
                    <div class="infos">        
                        <p class="auteur">Auteur</p>
                        <p class="date">Le 21/01/19</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="last-article carousel-section" id="last-article">
                <h2 class="article-title">Nos derniers articles</h2>
                <p class="text">Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup d'oeil que la page contenant ces lignes n'est pas valide, et surtout</p>
                <div class="carousel-container">
                    <div class="carousel-slider">
                        <div class="carousel-element active" id="first-carousel-element">
                            <div class="carousel-img-div">
                                <img class="carousel-img" src="img/tiffanys.jpg" alt="photo de l'article">
                            </div>
                            <p class="carousel-date">Le 22/01/21</p>
                            <p class="carousel-title">Diamonds are a girl bestfriends</p>
                        </div>
                        <div class="carousel-element" id="second-carousel-element">
                            <div class="carousel-img-div">
                                <img class="carousel-img" src="img/flowergirl.jpg" alt="photo de l'article">
                            </div>
                            <p class="carousel-date">Le 12/09/21</p>
                            <p class="carousel-title">Un vent d'automne</p>
                        </div>
                        <div class="carousel-element" id="third-carousel-element">
                            <div class="carousel-img-div">
                                <img class="carousel-img" src="img/picnic.jpg" alt="Photo de l'article">
                            </div>
                            <p class="carousel-date">Le 08/07/21</p>
                            <p class="carousel-title">Le déjeuner sur l'herbe</p>
                        </div>
                        <div class="carousel-element" id="fourth-carousel-element">
                            <div class="carousel-img-div">
                                <img class="carousel-img" src="img/tv.jpg" alt="Photo de l'article">
                            </div>
                            <p class="carousel-date">Le 23/09/21</p>
                            <p class="carousel-title">Netflix and Chill ?</p>
                        </div>
                        <div class="carousel-element" id="fifth-carousel-element">
                            <div class="carousel-img-div">
                                <img class="carousel-img" src="img/santiago.jpg" alt="Photo de l'article">
                            </div>
                            <p class="carousel-date">Le 06/05/21</p>
                            <p class="carousel-title">L'histoire du Santiago Bernabeu</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-btn">
                    <div class="carousel-btn-nav" id="button-next"><span class="crsl-span">←</span></div>
                    <div class="carousel-btn-nav" id="button-previous"><span class="crsl-span">→</span></div>
                </div>
        </section>

        <section class="lesderniersarticles-section">
            <div class="unarticle-div voyages" id="voyages">
                    <div class="intro-last-article">
                        <h2 class="article-title">Articles voyages les plus lus</h2>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor unde consequatur deserunt iusto perspiciatis at numquam, culpa, ut natus autem enim. Voluptates neque beatae placeat quod modi odit, nam ut?</p>
                    </div>
                    <div class="last-article" id="article-voyage1">
                        <div class="last-article-illustration">
                            <div class="last-article-date">10 JAN</div>
                            <img src="img/voyage/voyage-article1.jpg" alt="homme face à la montagne" class="last-article-img">
                        </div>
                        <h3 class="last-article-title">Lorem ipsum dolor</h3>
                        <p class="last-article-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dolorum distinctio magni</p>
                        <div class="last-article-react">
                            <a href="#" class="last-article-likes">5 Likes</a>
                            <a href="#" class="last-article-commentaires">2 Commentaires</a>
                        </div>
                    </div>
                    <div class="last-article" id="article-voyage2">
                        <div class="last-article-illustration">
                            <div class="last-article-date">20 MAR</div>
                            <img src="img/voyage/voyage-article2.jpg" alt="Village italien" class="last-article-img">
                        </div>
                        <h3 class="last-article-title">Viva Italia</h3>
                        <p class="last-article-description">Lasciatemi cantare con la guitare al mano, lasciatemi cantare una cancione piano piano</p>
                        <div class="last-article-react">
                            <a href="#" class="last-article-likes">10 Likes</a>
                            <a href="#" class="last-article-commentaires">4 Commentaires</a>
                        </div>
                    </div>
                    <div class="load-more">
                        <a href="#" class="last-article-a">Plus d'articles</a>
                    </div>
            </div>
            <div class="unarticle-div cuisine" id="cuisine">
                <div class="intro-last-article">
                    <h2 class="article-title">Articles de cuisine les plus lus</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor unde consequatur deserunt iusto perspiciatis at numquam, culpa, ut natus autem enim. Voluptates neque beatae placeat quod modi odit, nam ut?</p>
                </div>
                <div class="last-article" id="article-cuisine1">
                    <div class="last-article-illustration">
                        <div class="last-article-date">7 FEV</div>
                        <img src="img/cuisine/cooking.jpg" alt="personne qui cuisine" class="last-article-img">
                    </div>
                    <h3 class="last-article-title">Lorem ipsum dolor</h3>
                    <p class="last-article-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae dolorum distinctio magni</p>
                    <div class="last-article-react">
                        <a href="#" class="last-article-likes">6 Likes</a>
                        <a href="#" class="last-article-commentaires">9 Commentaires</a>
                    </div>
                </div>
                <div class="last-article" id="article-cuisine2">
                    <div class="last-article-illustration">
                        <div class="last-article-date">20 MAR</div>
                        <img src="img/cuisine/cake.jpg" alt="Gâteaux" class="last-article-img">
                    </div>
                    <h3 class="last-article-title">Yummy yummy</h3>
                    <p class="last-article-description">Si vous avez Justin Bieber en tête maintenant, ce n'est pas de ma faute.</p>
                    <div class="last-article-react">
                        <a href="#" class="last-article-likes">3 Likes</a>
                        <a href="#" class="last-article-commentaires">1 Commentaires</a>
                    </div>
                </div>
                <div class="load-more">
                    <a href="#" class="last-article-a">Plus d'articles</a>
                </div>
            </div>
            <div class="unarticle-div cinema" id="cinema">
                <div class="intro-last-article">
                    <h2 class="article-title">Articles sur le cinéma les plus lus</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor unde consequatur deserunt iusto perspiciatis at numquam, culpa, ut natus autem enim. Voluptates neque beatae placeat quod modi odit, nam ut?</p>
                </div>
                <div class="last-article" id="article-cinema1">
                    <div class="last-article-illustration">
                        <div class="last-article-date">15 FEV</div>
                        <img src="img/cinema/cine1.jpg" alt="James Bond" class="last-article-img">
                    </div>
                    <h3 class="last-article-title">Quel avenir pour 007 ?</h3>
                    <p class="last-article-description">James Bond est il devenu l'anti-héros américain ?</p>
                    <div class="last-article-react">
                        <a href="#" class="last-article-likes">1 Likes</a>
                        <a href="#" class="last-article-commentaires">25 Commentaires</a>
                    </div>
                </div>
                <div class="last-article" id="article-cine2">
                    <div class="last-article-illustration">
                        <div class="last-article-date">31 MAI</div>
                        <img src="img/cinema/cine2.jpg" alt="Un cinéma" class="last-article-img">
                    </div>
                    <h3 class="last-article-title">Les grands écrans</h3>
                    <p class="last-article-description">Top 10 des plus belles salles de cinéma française</p>
                    <div class="last-article-react">
                        <a href="#" class="last-article-likes">7 Likes</a>
                        <a href="#" class="last-article-commentaires">11 Commentaires</a>
                    </div>
                </div>
                <div class="load-more">
                    <a href="#" class="last-article-a">Plus d'articles</a>
                </div>
            </div>
        </section>

    </main>
    <script src="index.js" defer></script>
    <?php
    require 'footer.php';
    ?>
</body>
</html>
