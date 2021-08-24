<?php get_header();?>


    <div class="haut-de-page">
        <div class="image-1">
            <img class="div-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/image-1.png" alt="">
        </div>
        <div class="article-haut">
            <h1 class="titre_shape">SHAPE</h1>
            <h5 id="sous-titre">Vos projets prennent forme.</h5>
            <p class="para_shape">SHAPE est une jeune agence web basée à Dijon spécialisée dans la création de site vitrine et e-commerce pour les artisans, les indépendants et les TPE <br><br>Nous proposons une écoute personnalisée de vos besoins pour réaliser un site qui vous ressemble vraiment. <br><br> Récupérez une soluton clef en main avec un Wordpress sur-mesure et érez sans intermédiaire votre communication digitale</p>
        </div>
    </div>
    <div class="titre-haut-carte">
        <div class="encadremenet-nos-services">
            <h2 class="nos-services" href="#">NOS SERVICES</h2>
        </div>
    </div>
    <div class="carte">
        <div class="carte1 carte__child">
            <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/plume.svg" alt="">
            <h2 class="titre-carte">IDENTITÉ-VISUELLE</h2>
            <p class="para-carte">Ensemble, bâtissons la communication visuelle de votre entreprise, elle a pour but de représenter la marque sur l'ensemble de ses supports de communication (logo, couleurs, typographies, iconographie...)</p>
        </div>
            
        <div class="carte2 carte__child">
            <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/code.svg" alt="">
            <h2 class="titre-carte"> DÉVELOPPEMENT</h2>
            <p class="para-carte">Nous concevons pour vous un site internet dont le but est de générer du trafic des propects. Nos développeurs et web designer créent des interfaces utilisateur uniques et modernes pour la croissance de votre entreprise</p>
        </div>
        <div class="carte3 carte__child">
            <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/fusee.svg" alt="">
            <h2 class="titre-carte">WEBMARKETING</h2>
            <p class="para-carte"> Nous vous propulsons au succées grâce nos stratégies webmarketing pour vous permettre de toucher une audience ciblée, référencement naturel, Google Adwords, Facebook et Linkedin Ads/p>
        </div>
        
    </div>
   
    <div class="titre-centre">
        <div class="encadremenet-faites-nous-confiance">
            <h2 class="faites-nous-confiance">FAITES-NOUS CONFIANCE</h2>
            <div class="trait-faites-nous-confiance">

            </div>
        </div>
    </div>

    <div class="centre">
        <div class="article-centre">
            <h3>Donnez forme à votre projet.</h3>
            <p> 
                Une question concernant notre fonctionnement?<br>Un devis détaillant les réponses que nous pouvons vous apportez vous sera transmis. SHAPE ne fait pas de copier/coller:Nous ne proposons que des stratégies web personnalisées à nos clients 
            </p>
            <button id="button">Je souhaite un devis</button>
        </div>
        <div class="div_image_2">
            <img class="div-img div-img-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/image-2.png" alt="">
        </div>
    </div>
    

    <div class="container ">

        <div id="contact-h2-parent">
            <h2 id="contact-h2">CONTACT</h2>
        </div>

        <div class="contact_para-mobile">
            <h3>Je souhaite vous contacter</h3>
            <p 
             class="contact_para-1_p"> Nous sommes disponibles du Lundi au Vendredi de 9h à 12h et de 14h à 17h et nous nous ferons une joie de répondre à vos questions !
            </p>
        </div>

        <div class="contact">
            <div class="contact_form">
                <form action="form.php" method="post">
                    <div>
                        <label for="name"> </label>
                        <input type="text" id="name" name="user_name" placeholder="Votre nom">
                    </div>
                    <div>
                        <label for="mail">  </label>
                        <input type="email" id="mail" name="user_mail" placeholder="Votre email">
                    </div>
                    <div>
                        <label for="msg">  </label>
                        <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                    </div>
                    <div class="contact_form_bouton">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>

            <div class="contact_para"> 
                <div class="contact_para-1">
                    <h3 class="contact_para-h3">Je souhaite vous contacter</h3>
                    <p 
                     class="contact_para-1_p"> Nous sommes disponibles du Lundi au Vendredi de 9h à 12h et de 14h à 17h et nous nous ferons une joie de répondre à vos questions !
                    </p>
                </div>
                <div class="contact_para-2">
                    <h3 class="contact_para-h3">Qui se cache derrière SHAPE ?</h3>
                    <button id="contact_para-2_bouton">Découvrir notre équipe</button>
                </div>
           </div> 
        </div>
    </div>

    <div id="equipe" style="display:none">
        <div class="container">
            <div id="equipe-h2-parent">
                <h2 id="equipe-h2">NOTRE ÉQUIPE</h2>
            </div>

            <div class="equipe_card ">
                <div class="equipe_card_membre">
                    <span>KARINA</span> <br> 
                    <img class="equipe_card_membre_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar-karina.png" alt=""> <br> <br>
                    <span>Co-fondatrice <br>Web Designer </span>
                </div>
                <div class="equipe_card_membre">
                    <span>JEAN-BAPTISTE</span> <br> 
                    <img class="equipe_card_membre_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar-JB.png" alt=""> <br> <br>
                    <span>Co-fondatrice <br>Web Designer </span>
                </div>
                <div class="equipe_card_membre">
                    <span>CHLOÉ</span> <br> 
                    <img class="equipe_card_membre_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Avatar-chloé.png" alt=""> <br> <br>
                    <span>Co-fondatrice <br>Web Designer </span>
                </div>
            </div>
            <p 
             class="equipe_para"> Nous sommes une équipe de trois stagiaires de l'Access code school de Dijon.<br> <br> Nous avions pour objectif de fonder une agence web fictive, l'interface visiteur est un thème Wordpress personnalisé donc le contenu est administré par le back-office de Wordpress. <br> Nous avons choisi d'offrir une solution web adaptée aux besoins des artisans de Bourgogne-Franche-Comté. 
            </p>
        </div>
    </div>
    <script>
        const ekip = document.getElementById('equipe');
        const button = document.getElementById('contact_para-2_bouton');
        var ie = 0;
        button.addEventListener('click', toogleteam);
        function toogleteam() {
            if (ie == 0) {
                ie++;
                ekip.style.display = 'block';
            }else{
                ie = 0;
                ekip.style.display = 'none';
            }
        }
    </script>

<?php get_footer(); ?>