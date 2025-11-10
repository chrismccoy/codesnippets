<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the two
 * required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

get_header(); ?>

<div class="lg:col-span-2">

    <section class="mb-12 text-center">

        <h2 class="text-5xl font-extrabold uppercase tracking-tighter md:text-7xl">
            All Snippets
        </h2>

        <p class="mx-auto mt-6 max-w-2xl text-lg">
            The latest code snippets.
        </p>

    </section>

    <div class="space-y-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'snippet'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="border-2 border-black p-8 text-center">
                <h3 class="text-3xl font-bold uppercase">No Snippets Found</h3>
                <p class="mt-3 text-base">It looks like there are no snippets here yet.</p>
            </div>
        <?php endif; ?>
    </div>

    <?php codesnippets_custom_pagination(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
