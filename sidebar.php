<?php
/**
 * The template for displaying the sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

?>
<aside class="h-fit space-y-8 lg:col-span-1 lg:sticky lg:top-8">

    <div class="border-2 border-black p-6">
        <h3 class="mb-4 text-xl font-bold uppercase">// Search</h3>
        <?php get_search_form(); ?>
    </div>

    <div class="border-2 border-black">

        <h3 class="bg-black p-4 text-xl font-bold uppercase text-yellow-300">
            // Recent Snippets
        </h3>

        <ul class="space-y-4 p-6">
            <?php $recent = wp_get_recent_posts(['numberposts' => 5, 'post_status' => 'publish', 'post_type' => 'post']); foreach ($recent as $p) : ?>
                <li>
                    <a href="<?php echo get_permalink($p['ID']); ?>" class="font-bold hover:bg-yellow-300">
                        <?php echo esc_html($p['post_title']); ?>
                    </a>
                </li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </div>

    <div class="border-2 border-black">

        <h3 class="bg-black p-4 text-xl font-bold uppercase text-yellow-300">
            // Categories
        </h3>

        <ul class="space-y-3 p-6">
            <?php $categories = get_categories(['taxonomy' => 'category', 'post_type' => 'snippet']); foreach ($categories as $category) : ?>
            <li>
                <a href="<?php echo get_category_link($category->term_id); ?>" class="flex items-center justify-between">
                    <span class="font-bold uppercase hover:bg-yellow-300"><?php echo esc_html($category->name); ?></span>
                    <span class="border border-black px-1 text-xs"><?php echo esc_html($category->count); ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="border-2 border-black">

        <h3 class="bg-black p-4 text-xl font-bold uppercase text-yellow-300">
            // Tag Cloud
        </h3>

        <div class="flex flex-wrap gap-2 p-6">
            <?php $tags = get_tags(); if ($tags) : foreach ($tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="border border-black px-2 py-1 text-sm hover:bg-yellow-300">
                        <?php echo esc_html($tag->name); ?>
                        <span class="text-neutral-700"><?php echo esc_html($tag->count); ?></span>
                    </a>
            <?php endforeach; endif; ?>
        </div>
    </div>
</aside>
