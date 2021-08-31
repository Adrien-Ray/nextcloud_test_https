<?php get_header();?>

    <?php $loop = new WP_Query((array('post_type' => 'presentation','order'=>'DSC', 'posts_per_page'=>1)));
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="haut-de-page" id="lagence">
            <div class="image-1">
                <img class="div-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="article-haut">
                <h1 class="titre_shape"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; wp_reset_query(); ?>

    <div class="titre-haut-carte">
        <div class="encadremenet-nos-services">

            <h2 class="nos-services" id="services" href="#">NOS SERVICES</h2>
        </div>
    </div>

    <div class="carte">

    <?php $loop = new WP_Query((array('post_type' => 'services','order'=>'DSC', 'posts_per_page'=>24))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="carte1 carte__child">
                    <?php the_post_thumbnail() ?>
                    <h2 class="titre-carte"><?php the_title() ?></h2>
                    <?php the_content() ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
    </div>
   
    <?php $loop = new WP_Query((array('post_type' => 'confiance','order'=>'DSC', 'posts_per_page'=>1)));
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
        <div class="titre-centre">
            <div class="encadremenet-faites-nous-confiance">
                <div class="trait-faites-nous-confiance">
                    <h2 class="faites-nous-confiance"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="centre">
            <div class="article-centre">
                <?php the_content(); ?>
            </div>
            <div class="div_image_2">
                <img class="div-img div-img-2" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
        </div>
    <?php endwhile; wp_reset_query(); ?>

<?php $loop = new WP_Query((array('post_type' => 'contact','order'=>'DSC', 'posts_per_page'=>1)));
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="container " id="contact">

    <div id="contact-h2-parent">
        <h2 id="contact-h2"><?php the_title(); ?></h2>
    </div>
<?php endwhile; wp_reset_query(); ?>
    <div class="contact">

        <?php $loop = new WP_Query((array('post_type' => 'contactForm','order'=>'DSC', 'posts_per_page'=>1)));
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="contact_form">
            <?php the_content(); ?>
            </div>
        <?php endwhile; wp_reset_query(); ?>

        <?php $loop = new WP_Query((array('post_type' => 'contact','order'=>'DSC', 'posts_per_page'=>1)));
while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="contact_para"> 
            <div class="contact_para-1">
                <?php the_content(); ?>
            </div>
            <div class="contact_para-2">
                <button id="contact_para-2_bouton">Découvrir notre équipe</button>
            </div>
        </div> 
    </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>

<?php $loop = new WP_Query((array('post_type' => 'contactHide','order'=>'DSC', 'posts_per_page'=>1)));
while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div id="equipe" style="display:none">
    <div class="container">
        <div id="equipe-h2-parent">
            <h2 id="equipe-h2"><?php the_title(); ?></h2>
        </div>
<?php endwhile; wp_reset_query(); ?>

        <div class="equipe_card">
        <?php $loop = new WP_Query((array('post_type' => 'contactTeam','order'=>'DSC', 'posts_per_page'=>40)));
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="equipe_card_membre">
                <span><?php the_title(); ?></span> <br> 
                <img class="equipe_card_membre_img" src="<?php the_post_thumbnail_url(); ?>" alt=""> <br> <br>
                <?php the_content(); ?>
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>

        <?php $loop = new WP_Query((array('post_type' => 'contactHide','order'=>'DSC', 'posts_per_page'=>1)));
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="equipe_para">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; wp_reset_query(); ?>

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