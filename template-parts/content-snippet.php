<?php
/**
 * Template part for displaying post content in a snippet format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

?>
<div class="snippet-card border-2 border-black dark:border-gray-600">

    <div class="flex flex-col sm:flex-row sm:items-baseline sm:justify-between border-b-2 border-black p-4 gap-4 dark:border-gray-600">

        <div>
            <?php $categories = get_the_category(); if (!empty($categories)) : ?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="border border-black px-3 py-1 text-sm font-bold uppercase hover:bg-yellow-300 dark:border-gray-600 dark:hover:text-black">
                    Category: <?php echo esc_html($categories[0]->name); ?>
                </a>
            <?php else : ?>
                <p class="text-sm font-bold uppercase">Uncategorized</p>
            <?php endif; ?>
        </div>

	<?php codesnippets_tags();?>
    </div>

    <div class="p-6 pb-16 relative">

        <h3 class="text-3xl font-bold uppercase">
            <a href="<?php the_permalink(); ?>" class="hover:bg-yellow-300 dark:hover:text-black">
                <?php the_title(); ?>
            </a>
        </h3>

        <p class="mt-3 text-base"><?php the_excerpt(); ?></p>

        <div class="absolute bottom-6 right-6 border border-black px-3 py-1 text-sm hover:bg-yellow-300 font-bold uppercase dark:hover:text-black dark:border-gray-600">
            <span class="text-bold-500">Author:</span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
        </div>
    </div>

    <div class="flex items-center justify-between border-t-2 border-black p-4 dark:border-gray-600">
        <div>
            <?php $languages = get_the_terms(get_the_ID(), 'language'); if ($languages && !is_wp_error($languages)) : ?>
                <a href="<?php echo esc_url(get_term_link($languages[0])); ?>" class="border border-black px-3 py-1 text-sm font-bold uppercase hover:bg-yellow-300 dark:border-gray-600 dark:hover:text-black">
                    Language: <?php echo esc_html($languages[0]->name); ?>
                </a>
            <?php endif; ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="inline-block border-2 border-black bg-white px-4 py-2 font-bold uppercase text-black hover:bg-yellow-300 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black">View Snippet</a>
    </div>
</div>
