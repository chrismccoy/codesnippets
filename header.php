<?php
/**
 * The template for displaying the header.
 *
 * This is the template that displays all of the <head> section and everything up
 * until main content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('//', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black font-mono transition-colors duration-300 dark:bg-gray-900 dark:text-gray-200'); ?>>

    <div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">

        <header class="flex items-center justify-between border-b-4 border-black py-4 dark:border-gray-600">

            <h1 class="text-2xl font-bold uppercase md:text-3xl">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:bg-yellow-300 dark:hover:text-black">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            <div class="flex items-center space-x-6">

                <button
                  id="theme-switcher"
                  type="button"
                  class="border-2 border-black p-2 hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:border-gray-600 dark:hover:bg-yellow-300 dark:hover:text-black"
                  aria-label="Toggle theme"
                >
                  <svg
                    id="theme-icon-sun"
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                    ></path>
                  </svg>
                  <svg
                    id="theme-icon-moon"
                    class="w-6 h-6 hidden"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                    ></path>
                  </svg>
                </button>

            </div>

        </header>

        <main class="mt-12">

            <section class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-12">
