* Getting Started with Zurb Foundation5
* A talk for Front-End Web Developers
* 2014-05-15
* webdev
* http://ampnetmedia.com/assets/img/zurb-blog-img.svg | http://ampnetmedia.com/assets/img/zurb-blog-img.svg | http://ampnetmedia.com/assets/img/zurb-blog-img.svg
* default
* published
* tag1, tag2, tag3, tag4

Foundation is a `Responsive Front-End Framework` that gives you a base for building responsive websites.

[http://foundation.zurb.com/](http://foundation.zurb.com/)

![Foundation5](http://foundation.zurb.com/assets/img/homepage/hero-image.svg)

## Getting Started   
* Using the builder to [download](http://foundation.zurb.com/develop/download.html)...   
* Pure [CSS](http://foundation.zurb.com/docs/css.html) (also comes with a boilerplate)    
* Get it in [Sass](http://foundation.zurb.com/docs/sass.html) (uses grunt / bower / libsass) or (use compass)  
 
## What do you get out of the box?   

* Responsive Grid   
* Responsive Navigation
* Typography      
* Button Styles   
* Prebuilt Plugins   

## Build it   

We’ll choose to build our Foundation project using the Sass way.

```

[sudo] npm install -g bower grunt-cli   

gem install foundation   

cd path/to/sites   

foundation new project_name --libsass   

```
## Now What?   
* Look in Gruntfile.js   
  * The "Default" task runs a `build` and starts to `watch` your sass files.
  * For deployment you can just run the "Build" task using `grunt build`.    
* Look at `_settings.scss` and `app.scss` under the Sass folder.
  * Notice that Foundation lets you include everything or just bits to help control file size.
  * Notice you that almost all settings and variables can be overwritten.     
* Look at the `bower.json` file   
  * Look at `bower_components`, notice Foundation has a dependency of jQuery and Modernizr   
  * Look at how scripts are linked on the page  using `bower_components`.    

### Start Building a Page!   
* Add navigation   
  * Use the off-canvas nav   
  * Make a linked menu item   
* Make some content and add a Responsive Grid   
* Add Orbit   
* Add a second page   

## Taking it to the next level   

With all the flexibility of using Node, Grunt, and Bower there are so many directions you could quickly take your project. Do you want to build out a template setup for your html files? Look at [assemble](https://github.com/assemble/assemble/) or [grunt html build](https://www.npmjs.org/package/grunt-html-build) or many more. Do you want to add support for [minifying JS](https://github.com/gruntjs/grunt-contrib-uglify) or building out [responsive images](https://github.com/andismith/grunt-responsive-images)? Do you want to add [Live Reload](https://github.com/gruntjs/grunt-contrib-livereload)? All of this can be done using Grunt plugins. 

## Extras
[Ruby](https://www.ruby-lang.org/en/)   
[Node](http://nodejs.org/)     
[Grunt](http://gruntjs.com/)   
[Bower](http://bower.io/)   
[LibSass](http://libsass.org/)   
[Yeoman](http://yeoman.io/community-generators.html) - [Yo zf5](https://github.com/juliancwirko/generator-zf5)   

![Foundation5](http://foundation.zurb.com/assets/img/develop/contribute/github-yeti.png)