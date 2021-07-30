<?php get_header();?>
    <div class="haut-de-page">
        <img class="image-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/image-1.png" alt="">
            <div class="article-haut">
                <h1>SHAPE</h1>
                <h3 class="sous-titre">Vos projets prennent forme.</h3>
                <p>SHAPE est une jeune agence web basée à Dijon spécialisée dans la création de site vitrine et e-commerce pour les artisans, les indépendants et les TPE <br><br>Nous proposons une écoute personnalisée de vos besoins pour réaliser un site qui vous ressemble vraiment. <br><br> Récupérez une soluton clef en main avec un Wordpress sur-mesure et érez sans intermédiaire votre communication digitale</p>
            </div>
    </div>
    <div class="titre-haut-carte">
        <div class="encadremenet-nos-services">
        <h2 class="nos-services">NOS SERVICES</h2>
        <div class="trait-nos-services"></div>
        </div>
    </div>
    <div class="carte">
        <div class="carte1">
            <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/plume.svg" alt="">
            <h2 class="titre-carte">IDENTITÉ VISUELLE</h2>
            <div class="trait-titre-carte"></div>
            <p>Ensemble, bâtissons la communication visuelle de votre entreprise, elle a pour but de représenter la marque sur l'ensemble de ses supports de communication (logo, couleurs, typographies, iconographie...)</p>
            </div>
            
        <div class="carte2">
        <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/code.svg" alt="">
            <h2 class="titre-carte"> DÉVELOPPEMENT</h2>
            <div class="trait-titre-carte"></div>
        </div>
        <div class="carte3">
        <img class="img-carte" src="<?php echo get_template_directory_uri(); ?>/assets/img/fusee.svg" alt="">
            <h2 class="titre-carte">WEBMARKETING</h2>
            <div class="trait-titre-carte"></div>
        </div>
        
    </div>
    <div class="test">

    </div>

    <div class="contact ">
        
        <h2 class="contact">CONTACT</h2>
        <div class="contact_form">
            <form action="form.php" method="post">
                <div>
                    <label for="name" aria-placeholder="Votre nom">  </label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail" aria-placeholder="Votre email">  </label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                
                <div>
                    <label for="msg" aria-placeholder="Votre message">  </label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>
                <div>
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>

    </div>

    
    <div id="equipe" >
        <div class="container">
            <h2 class="notre_equipe">NOTRE ÉQUIPE</h2>
            <div class="equipe_card container">
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
            <p class="equipe_para">
                Nous sommes une équipe de trois stagiaires de l'Access code school de Dijon.<br> <br>
                Nous avions pour objectif de fonder une agence web fictive, l'interface visiteur est un thème Wordpress personnalisé donc le contenu est administré par le back-office de Wordpress. <br>
                Nous avons choisi d'offrir une solution web adaptée aux besoins des artisans de Bourgogne-Franche-Comté. 
            </p>
        </div>
    </div>

<?php get_footer(); ?>