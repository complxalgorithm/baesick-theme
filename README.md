# Baesick - Bootstrap/Skeleton WordPress Theme
-------------------------------------

This is a responsive, customizable [Bootstrap](https://getbootstrap.com/)-based WordPress starter theme forked from wycks' WP-Skeleton-Theme, which itself is based on [Skeleton](https://getskeleton.com).

### Features:

* Very Easy to customise.
* Responsive Media Query Layout
* Fairly small footprint: Entire theme is roughly 5.5 MB
* Fair load query, about 25-30 WordPress queries made to the DB by default.
* Bundled with full 960 based CSS Responsive Grid
* Bootstrap, jQuery, and Font Awesome support, which can be easily removed from header.php
* Easily customizable SCSS variables in base-styles.scss file.
* Icon support for mobile and web
* IE HTML5shim support

### Default 4 layouts:
- Base 960 Grid       960px
- Tablet (Portrait)   768px
- Mobile (Portrait)   320px
- Mobile (Landscape)  480px

-------------------------------

### What's included:

*WordPress Menu support ( Drag & Drop)*
 - The menu floats right on the large sizes, then floats left on mobile.

*Widget Support*
 - By default it has a widgitized sidebar and footer.

*Comment, Full Width Page, Author, Search, Hero, Call-to-Action, Top Bar, 404* --> Templates

Some basic template tags for Site Title, Tagline, Post Meta.

-------------------------------

### What it does not have:

Image template or any real image CSS - This is best left outside a framework

Support for `the_excerpt` , by default you must use the "Read More" to split posts in the main loop.

Support for `tag` output in the main loop, I never use tags and they can add to db overhead.

Some pages are just handled by the main loop, such as single.php, archives , category, tags, etc.

Snippets have been removed and put into a [gist here](https://gist.github.com/wycks/7013704) by the original developer.

### Notes
Stripped out the JavaScript tabs that came with the original HTML Skeleton Framework.
The CSS for those elements is still present but it is best to `wp_enqueue` the javascript using native WP functions.

The footer is left completely unstyled, up to you which grids you want to use, supports 1, 2, 3 or 4 columns easily.

To have a left sidebar just move `get_template_part( 'sidebar', 'index' );` to above the loop call (might need minor tweaks).

More grid layout and examples on http://www.getskeleton.com/ and https://getbootstrap.com/docs/4.0/examples/

-------------------------------
© 2020-2021 [Stephen C. Sanders](https://stephensanders.me). Licensed under the GPL.