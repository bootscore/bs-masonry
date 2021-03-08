=== bS5 Masonry ===

Contributors: craftwerk

Requires at least: 4.5
Tested up to: 5.6.2
Requires PHP: 5.6
Stable tag: 5.0.0.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds masonry.js to WordPress. It is only required if a *-masonry.php in bootScore-5 is used and replaces the card columns of Bootstrap 4, which are no longer included in Bootstrap 5. Copyright 2021 Bastian Kreiter.


== License & Credits ==

masonry.js by David DeSandro, MIT License https://masonry.desandro.com/#mit-license


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

1. Copy category-masonry.php to child-theme and rename it to category.php
2. Copy author-masonry.php to child-theme and rename it to author.php
3. Copy archive-masonry.php to child-theme and rename it to archive.php


== Changelog ==

    = 5.0.0.1 - March 08 2021 =
    
        * [SEO] Load masonry.pkgd.min.js in footer

    = 5.0.0 - October 08 2020 =
    
        * Initial release