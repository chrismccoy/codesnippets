<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the main content and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

?>
			</div>
                    </section>
                </main>
                <footer class="mt-16 border-t-4 border-black py-12 text-center dark:border-gray-600 print-hidden">
                    <p class="mt-12 text-sm text-neutral-600 dark:text-neutral-400">
                        &copy; <?php echo date('Y'); ?> ALL RIGHTS RESERVED.
                    </p>
                </footer>
            </div>

            <button
              id="scroll-to-top-btn"
              type="button"
              aria-label="Scroll to top"
              class="hidden fixed bottom-5 right-5 p-3 border-2 border-black bg-yellow-300 text-black dark:bg-white dark:text-black dark:border-black transition-opacity duration-300 hover:opacity-80"
            >
              <svg
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
                  d="M5 15l7-7 7 7"
                ></path>
              </svg>
            </button>

        <?php wp_footer(); ?>
    </body>
</html>
