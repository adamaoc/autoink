* Getting Started with Assemble
* the Static Site Generator
* 2014-06-13
* webdev
* http://ampnetmedia.com/assets/img/Puzzle-pieces.jpg | http://ampnetmedia.com/assets/img/Puzzle-pieces.jpg | http://ampnetmedia.com/assets/img/Puzzle-pieces.jpg
* default
* published
* assemble, gurnt, javascript, generator

Assemble is a Grunt task which runs off of Node so you use `npm` as your package manager to install assemble to your project. The `--save-dev` saves this to your package.json file so that it can easily be installed anytime someone starts up new with your project.

##Add assemble to your project:

```
$ npm install assemble --save-dev
```   

##Add assemble to your Gruntfile.js

```
gurnt.loadNpmTask('assemble');
```   
This is where we load in our task within our Gruntfile. Put it toward the bottom of that file or wherever other modules are being loaded.

__The Task__
   
```
assemble: {
  options: {
    assets: "./",
    flatten: true,
    data: "data/*.json"
  },
  project: {
    options: {
      layout: "templates/layouts/layout.hbs",
      partials: "templates/partials/*.hbs"
    },
    files: {
      'dist/': ["templates/pages/*.hbs"]
    }
  }
}
grunt.loadNpmTasks('assemble' );
grunt.registerTask('build', ['assemble' ]);
```   
This shows the full task being stacked out. The top options setup paths to your assets and data. The "project" task can be named anything, but we'll keep it easy and leave project. You have individual options for your project task as well. Here you see us setting up the path to the layout file and the partials. Notice we're opting to use `.hbs` or handlebars but you can use `YAML` as well. Next we're setting up the destination for our files to be assembled. 

##Scaffold out your directories and files

You can basically arrange them however you want as long as it's pointed to correctly in your Gruntfile.js. I usually put all of my templating files into a "templates" folder and separate layouts, partials, and pages into respective folders.    
/templates/   
--/layouts/   
----layout.hbs   
--/pages/   
----index.hbs   
--/partials/   
----header.hbs   
----footer.hbs   
    
    
##Build out your layout file

```
<!DOCTYPE html> 
<html  lang="en"> 
  <head> 
    <meta  charset ="UTF-8"> 
    <title> {{title}} </title> 
  </head> 
  <body> 
    {{> body }} 
  </body> 
</html> 
```

Your layout can include as much or as little as you want it to but everything in here is what's included on every page of your site. Where you see the `{{>body}}` declared is where your page content is going to be injected. The `{{title}}` is a handlebars variable that can be defined in a page or inside a data file. We'll get more into that later.

##Build out a Page

```
---
title: Home Page
---

<h1>Home Page</h1>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
```

There's nothing too special here, you can have just simple markup included within this page and it will render out just fine into the layout. The top is how you declare variables specific to pages. Notice we're setting the `title` variable to "Home Page" so when our website is assembled the `<title></title>` of our page will be "Home Page" or whatever we declare. 

##Build out a Partial
```
<nav>
  <a href="/">Home</a>
  <a href="about.html">About</a>
</nav>
```
Just like pages you can have simple markup inside of partials or you can have more complex things using handlebars. We'll keep it simple for the moment. 

### Include that Partial into a Page

```
---
title: Home Page
---
{{>nav}}
<h1>Home Page</h1>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
```
Assuming you named your partial `nav.hbs` this takes our home page from before and adds the nav to that page. This can, and for this example probably should, be included in the layout the same way.

##Build it with Grunt

Now it's time to assemble this bad boy with some grunt magic. If you look in your Gruntfile you'll see we registered the `assemble` task to `build` command. So just run...

```
grunt build
```

This should create a file called `dist` and build out your pages. If you get any errors look at your paths and make sure they are correct. 

##Pull some data   
Assemble ties in nicely with JSON so adding data is really quite simple. Add a file in your data directory called `mylist.json` and add the following JSON code.   

```
{
  "people": [
    {"firstName": "Yehuda", "lastName": "Katz"},
    {"firstName": "Carl", "lastName": "Lerche"},
    {"firstName": "Alan", "lastName": "Johnson"}
  ]
}
```
Now you have this data available in any of your pages or partials so you can loop over it with handlebars like so...

```
<ul>
    {{#each mylist.people}}
		<li>{{firstName}} {{lastName}}</li>
	{{/each}}
</ul>
```
And it's as easy as that! This will output an unordered list of first and last names from your people list. 

##Moving your assembled site live   
This process can be as easy as FTP'ing up the `dist` folder and letting that take care of everything. You could also have this running on a node server or I've even used a php server using a `.htaccess` file for cleaner urls. Either way, your site will be faster and more secure than many other templating engines and it was that easy!

-----------------------

*Resources:*   
[assemble.io/](http://assemble.io/)   
[handlebarsjs.com/](http://handlebarsjs.com/)   
[link to my slides](http://slides.com/adamaoc/assemble)   
