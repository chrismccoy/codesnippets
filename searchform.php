<?php
/**
 * The template for displaying the search form.
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

?>
<form role="search" method="get" class="flex gap-2" id="search-form" action="">
    <input
        type="search"
        name="s"
        required
        class="w-full border-2 border-black bg-white p-3 text-base focus:outline-none focus:ring-4 focus:ring-yellow-300"
        value="<?php echo get_search_query(); ?>"
        placeholder="Search snippets..."
    />
    <button
        type="submit"
        class="border-2 border-black bg-yellow-300 px-4 py-2 font-bold uppercase text-black"
    >
        Go
    </button>
</form>
