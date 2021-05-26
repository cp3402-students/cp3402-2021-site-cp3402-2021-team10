Theme: _tk-master_

The starter theme was provided by ThemeKraft which provided a seamless and minimalistic integration of the Twitter Boostrap Framework. This starter theme was chosen as the Boostrap framework allows for many CSS styling changes to be made through HTML classes instead which help provide more clean, efficient code without overcomplicating the code with many CSS classes. 

Bootstrap 3 was originally the version that was being used. In order for a more clean and updated look, this theme now uses Boostrap 5 instead. 

The Boostrap 5 documentation is a good place for finding more about the framework that is primarily used for this theme.

- https://getbootstrap.com/docs/5.0/getting-started/introduction/

The files for Bootstrap 5 have been inserted into the resources directory under bootstrap5. Boostrap 5 also integrates jQuery as well. This is also where other frameworks would be placed into the theme if you wish to add more frameworks as well. The theme must also enqueue these scripts and stylesheets so that they may be used in development. In the functions.php file, wp_enqueue_style and wp_enqueue_script are used for the Bootstrap 5 CSS and JS files respectively. Note that Bootstrap provides multiple versions of CSS and JS files, only min.css or min.js files are enqueued.

https://getbootstrap.com/docs/5.0/migration/
https://getbootstrap.com/docs/4.0/migration/

Using the links above, classes that referred to the depracated Boostrap 3 classes were removed and updated with the most similar Bootstrap 5 
classes. It's important to note that because an older version of Boostrap 3 was implemented into the starter theme, the code was written to 
work with the previous implementation. This allows us to save more time on modifying code instead of re-inventing the wheel. 

For example, 
Bootstrap 5 provides new classes called nav-links for cleaner links that suit the navbar. Using PHP, echoing this class under certain 
conditions was possible using the previous classes that were generating that line. 

Files that require editing are mainly:
    -header.php
    -footer.php
    -content.php
    -functions.php
    -sidebar.php
    -includes
        -extras.php
        -bootstrap-wp-navwalker

header.php:


footer.php:


content-page.php: The changes made in this file are used to edit the styling of the content of the site. The main changes that are made include
editing the page titles and the page content. For this site, the contents mainly wrapped within a semi transparent card as well as the site.
Bootstrap 5 uses its own classes with pre-defined colours. This site makes use of the warning colours which is yellow. Using a find and replace
of warning can be used to change the theme to another colour. Transparency can be changed trough the style tags that specify a background-colour
using the rgb() function where the fourth parameter changes the opacity of the element which value is only between 0 and 1.0. 

functions.php: This file controls the most crucial aspects of the theme. This files handles which css, and scripts are implemented into the
theme. This file was heavily modified to implement the newest version of Boostrap 5 instead of the starter themes Boostrap 3. 
Firstly, _tk_setup() handles what is supported on the theme. Throughout development, theme support was added for title-tags which was suggested
using a Theme check plugin through WordPress. Using the add_theme_support() function allows you to do this while specifying what you want to
support in the parameters. 
The _tk_widgets_init() function was also modified throughout development as well. This was primarily used to customise any custom widgets that
are not accessible through WordPress such as a Facebook Widget etc. Cudtomising the HTML was done through modifying the array that WordPress
iterates through to output the HTML and/or CSS for the custom widget. This theme only wraps the widgets header in a boostrap 5 card header to be
similar to the page titles in content.php for consistency. 
_tk_scripts() is the most important function which provided the stylesheets and scripts used to implement Boostrap 5 into the site. This is the
main file that must be modified in order to add any new frameworks or updated frameworks into the site. Adding Bootstrap CSS stylesheets are done
through wp_enqueue_style('_tk-bootstrap', THEME_DIR_URI . *file name). Only the minified CSS files (.min.css) are enqueued. Boostrap script files
are also added through wp_enqueue_script('_tk-bootstrapjs', THEME_DIR_URI . 'filename', array('jquery'));.
Any new php files in the includes directory such as custom-header.php are also implemented in functions.php first through the require() function.

sidebar.php: sidebar.php is used to customise the widgets provided by WordPress such as search forms. Wrapping the widget titles in a card-header
was done so that the it matched the style of the custom widgets defined in functions.php. This file can also be used to change the positon of the sidebar within the site.

extras.php:The extras.php was specifically used to add classes to the body tag of the site. Line 28 allows you to add any classes the body tag
may need by pushing new HTML classes to the $classes array which WordPress iterates through. 

bootstrap-wp-navwalker.php: This files is used to generate the navigation menu items for the navbar. This ensures that each link is wrapped in
the appropiate styling required for the navigation menu to output along with the Boostrap 5. Due to the difference in Bootstrap 3 and Bootstrap
5, necessary modifications were made to this code. This includes styling for navigation items, and dropdown items. 