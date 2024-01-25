<?php
get_header();
?>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();
    the_content();

    // Le contenu de la page va ici

    get_footer();
    ?>
