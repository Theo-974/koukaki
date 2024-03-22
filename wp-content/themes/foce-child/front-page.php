<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="video" autoplay loop muted>
                <source src=" <?php echo get_stylesheet_directory_uri() . '/assets/videos/video.mp4'; ?> " type="video/mp4" />
            </video>

            <img class="logobanner" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="histoire" class="story">
            <h2 class="fade-in-title slide-top">L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="slide-top">
               <div> 
                    <h3 class="fade-in-title">Les personnages</h3>            
                    <!-- Slider main container -->
                    <swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true" loop="true"
                    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false" autoplay-delay="2500">   
                            <?php
                            while ( $characters_query->have_posts() ) {
                                $characters_query->the_post();?>
                                    <swiper-slide>
                                        <figure>
                                            <?= get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                            <figcaption>
                                            <?= the_title();?> 
                                            </figcaption>    
                                        </figure>
                                    </swiper-slide> 
                            <?php };
                            ?>  
                    </swiper-container>
               </div>
            </article>
                
            <article id="place" class="slide-top">
                <div>
                    <h3 class="fade-in-title">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="clouds">
                        <img class="big-cloud" src="<?php echo get_template_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="Big Cloud">
                        <img class="little-cloud" src="<?php echo get_template_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="Little Cloud">
                    </div>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="fade-in-title">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>


        <section id="nomination" class="nomination">
            <div class="nomination-content">
                <h4 class="h4"> Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h4>
            </div>
            <img class="nomination_logo" src="<?php echo get_template_directory_uri() . '/assets/images/oscars-2021.png'; ?>" alt="Nomination aux Oscars 2021">
        </section>


    </main><!-- #main -->

<?php
get_footer();
