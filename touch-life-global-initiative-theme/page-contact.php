<?php
/*
Template Name: Contact Us Page
*/
get_header(); ?>

<div class="container">
    <main id="main" class="site-main" role="main">
        <?php
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); // This will display any content added in the WordPress editor ?>

                    <!-- NOTE: This is a static HTML form. To make it functional,
                         you will need to use a WordPress plugin like Contact Form 7
                         or implement a custom backend handler to process the form data. -->
                    <form action="#" method="post" class="contact-form">
                        <p>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </p>
                        <p>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </p>
                        <p>
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject">
                        </p>
                        <p>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="8" required></textarea>
                        </p>
                        <p>
                            <button type="submit">Send Message</button>
                        </p>
                    </form>
                </div>
            </article>
            <?php
        endwhile; // End of the loop.
        ?>
    </main>
</div>

<?php get_footer(); ?>
