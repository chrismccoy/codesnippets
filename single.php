<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

get_header(); ?>

<div class="lg:col-span-3">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article>

            <div class="border-2 border-black dark:border-gray-600 print-hidden">

                <div class="flex flex-col sm:flex-row sm:items-baseline sm:justify-between border-b-2 border-black p-4 gap-4 dark:border-gray-600">

                    <div>
                        <?php $categories = get_the_category(); if (!empty($categories)) : ?>
                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="border border-black px-3 py-1 text-sm font-bold uppercase hover:bg-yellow-300 dark:border-gray-600 dark:hover:text-black">
                                Category: <?php echo esc_html($categories[0]->name); ?>
                            </a>
                        <?php endif; ?>
                    </div>

		<?php codesnippets_tags();?>

                </div>

                <div class="p-6 pb-20 relative">

                    <h1 class="text-4xl font-extrabold uppercase lg:text-5xl"><?php the_title(); ?></h1>

                    <p class="mt-3 text-lg"><?php echo get_the_excerpt(); ?></p>

                    <div class="absolute bottom-6 right-6 border font-bold border-black px-3 py-1 text-sm hover:bg-yellow-300 uppercase dark:hover:text-black dark:border-gray-600">
                        <span class="text-neutral-700">Author:</span>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                    </div>

                </div>
            </div>

            <div class="my-8 space-y-6 text-lg leading-relaxed">
                 <div class="flex justify-between items-center flex-wrap gap-4 print-hidden">
                    <?php
                    $languages = get_the_terms(get_the_ID(), 'language');
                    if ($languages && !is_wp_error($languages)) :
                        $lang_slug = $languages[0]->slug;
                        $lang_name = $languages[0]->name;
                    ?>
                        <div>
                            <h3 class="inline-block bg-black px-3 py-1 text-xl font-bold uppercase text-yellow-300">
                                // Language:
                                <a href="<?php echo esc_url(get_term_link($languages[0])); ?>" class="hover:underline">
                                    <?php echo esc_html($lang_name); ?>
                                </a>
                            </h3>
                        </div>
                    <?php else: $lang_slug = 'plaintext'; endif; ?>

                    <div class="flex items-center gap-4">
                        <button id="download-btn" type="button" data-filename="<?php echo esc_attr($post->post_name); ?>.txt" class="border-2 border-black bg-white px-4 py-2 font-bold uppercase text-black hover:bg-yellow-300 transition-colors dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black">Download</button>
                        <button id="print-btn" type="button" class="border-2 border-black bg-white px-4 py-2 font-bold uppercase text-black hover:bg-yellow-300 transition-colors dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black">Print</button>
                        <button id="copy-code-btn" type="button" class="border-2 border-black bg-white px-4 py-2 font-bold uppercase text-black hover:bg-yellow-300 transition-colors dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black">Copy Code</button>
                        <button id="share-btn" type="button" data-shortlink="<?php echo esc_url(wp_get_shortlink()); ?>" class="border-2 border-black bg-white px-4 py-2 font-bold uppercase text-black hover:bg-yellow-300 transition-colors dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black">Share</button>
                    </div>
                 </div>

                <pre class="text-base overflow-x-auto p-4 border-2 border-black dark:border-gray-600"><code id="code-content" class="language-<?php echo esc_attr($lang_slug); ?>"><?php echo esc_html(get_the_content(null, false, $post)); ?></code></pre>
            </div>
        </article>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
