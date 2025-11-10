<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

get_header(); ?>

<div class="lg:col-span-2">

    <section class="text-center mb-12">

        <h2 class="text-5xl md:text-7xl font-extrabold uppercase tracking-tighter">Search Results</h2>

        <p class="mx-auto mt-6 max-w-2xl text-lg">
            For the term: <span class="bg-yellow-300 px-2">'<?php echo get_search_query(); ?>'</span>
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
                <p class="mt-3 text-base">Sorry, we couldn't find any snippets matching your search term.</p>
            </div>
        <?php endif; ?>
    </div>

    <?php codesnippets_custom_pagination(); ?>
</div>

<?php get_footer(); ?>
