<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
               <?php  if (in_category('galerie')){
                get_template_part("template-parts/categorie","galerie");
               } else { echo ('');
                get_template_part("template-parts/categorie","notes-4w4");
               }?>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
    </main>
<?php get_footer(); ?>