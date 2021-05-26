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
    -includes
        -extras.php
        -bootstrap-wp-navwalker

header.php:


footer.php:


content.php:


functions.php:



extras.php:The extras.php was specifically used to add classes to the body tag of the site. Line 28 allows you to add any classes the body tag may need by pushing new HTML classes to the $classes array which WordPress iterates through. 


bootstrap-wp-navwalker.php: This files is used to generate the navigation menu items for the navbar. This ensures that each link is wrapped in the appropiate styling required for the navigation menu to output along with the Boostrap 5. Due to the difference in Bootstrap 3 and Bootstrap 5, necessary modifications were made to this code. This includes styling for navigation items, and dropdown items. 



https://getbootstrap.com/docs/5.0/migration/
https://getbootstrap.com/docs/4.0/migration/

Using the links above, classes that referred to depracated Boostrap 3 classes were removed and updated with the most similar Bootstrap 5 
classes. It's important to note that because an older version of Boostrap 3 was implemented into the starter theme, the code was written to 
work with the previous implementation. This allows us to save more time on modifying code instead of re-inventing the wheel. 

For example, 
Bootstrap 5 provides new classes called nav-links for cleaner links that suit the navbar. Using PHP, echoing this class under certain 
conditions was possible using the previous classes that were generating that line. 



