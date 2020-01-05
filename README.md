# WP Starter Theme: Beachfire
Lean and flexible starter theme for WordPress, based on / inspired by [`H5BP`](https://github.com/h5bp/html5-boilerplate/tree/v7.2.0), [`_s`](https://github.com/Automattic/_s) and [`BlankSlate`](https://github.com/tidythemes/blankslate).

Tested up to: 5.2.3
Stable tag: 0.0.3


## License
This starter theme is licensed under an [GPLv3](https://www.gnu.org/licenses/gpl-3.0.html) license.


## Credit and Reason
Several years ago, I used to make WordPress themes from scratch based on `H5BP`. Those themes have proven to have the most longevity of any theme I've ever worked with and have needed very little maintenance unless clients wanted aesthetic changes. This is partly of course because they were made to fit the needs of only that client and there is nothing extraneous in them. 

It was time consuming to make them, so I switched to `_s` as a starter theme. For me `_s` does too much though and every time I use it, I'm ripping things out and once in a blue moon, a WP update will break something in a theme build with `_s` and I have to fix it. The main reason I stuck with them for so long, is because of how flexible their templating system is. To allow for a CPT, all I have to do is add content-mycpt.php to the template-parts folder and an archive-mycpt.php to the root folder of the theme and I’m set. Basically.

More recently, I used `BlankSlate` and I liked it a lot. So lean, so clean, so beautiful! I loved it. I just didn’t find their templating system as flexible, so I decided to go back to where I started and make my own.


## Instructions
Just like with `_s` or `BlankSlate`, if you're using `Beachfire` to create your own theme, open up all files and do a "Find and Replace All in All Files" on the word "beachfire" with your own slug and prefix. And don't forget to change the directory name of the theme to match.
Also see NOTES.md!


## Changelog

### 0.0.3 / January 5, 2020
* Checked if post has tags before adding markup for tags
* Changed the `content`-class to `primary`
* Gave the sidebar a class of `secondary`
* Gave the `<div id="container">` a class of `site-content`

### 0.0.2 / November 27, 2019
* Added a class of `content` to the `<main id="content">` tag, to allow for lower specifity style rules