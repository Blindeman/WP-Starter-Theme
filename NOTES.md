# NOTES
The version of h5bp I downloaded is html5-boilerplate_v7.2.0 on 18 September 2019. In this document I'm trying to be accountable about what I'm chosing to do with the content of that packag, or at the least transparent about my thought process and intentions.

## htaccess
* The htaccess file had to go, because I don't want to overwrite existing ones and I'm not writing functionality to add h5bp's .htaccess to an existing one.

## Google Analytics
* Removed. This should not be part of the theme, in case people change themes. Presumably they'll want to keep tracking visitors.

## JavaScript
* If you want to load any JS beyond Modernizer that's on you. You decide what you want to enqueue, and please do it in functions.php and place files in a js-folder.

## 404
* Removed style from the head.

## site.webmanifest
* Removed the site.webmanifest because this theme is primarily aimed at websites not native-like web apps.
* Removed <meta name="theme-color" content="#fafafa"> from the head section.

## CSS
* Moved the styles I wanted to keep from main.css to style.css, mainly: selection (bc i like it so much), styles for screen readers, browserupgrade alert and clearfix
* Moved styles from normalize.css to style.css
* Removed most of the comments in the stylesheets. I like them for reading and learning but I find they distract me from the styles when I'm trying to develop a site. The linkies to the originals are at the top of style.css