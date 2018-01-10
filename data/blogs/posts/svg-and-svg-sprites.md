* SVG and SVG Sprites
* Making better responsive icons
* 2014-08-21
* webdev
* http://ampnetmedia.com/assets/img/sandcastle.jpg | http://ampnetmedia.com/assets/img/sandcastle.jpg | http://ampnetmedia.com/assets/img/sandcastle.jpg
* default
* published
* tag1, tag2, tag3, tag4

Scalable Vector Graphics are basically images or icons that are scalable, up or down, and will not lose quality in doing so. SVG’s are just now really gaining traction because the browser support if finally to a point where it makes since to use them. 

Checking Can I Use – [caniuse.com](http://caniuse.com/#search=svg) – shows every major browser fully supporting SVG’s at least 2 version back. It shows that IE8 doesn’t support them but in my testing they seem to work for the situations we’re using them for, and we are using them on production websites. 

##How to use?

Using an SVG could be as simple as throwing it in an image tag. 

```
<img src=”icon.svg” >
```

This isn’t the preferred way to use SVG’s though and can be a little wonky in some cases. There are many ways to use SVG’s on a page and the most simple is declaring the SVG inline.   

```
<svg xmlns="http://www.w3.org/2000/svg">
    <circle id="greencircle" cx="80" cy="80" r="80" fill="green" />
</svg>
```    

The above code generates a circle that can be infinitely scaled without losing quality. You can also declare the color and shape of your circle right in line, or you can modify those values using CSS.   

```
svg circle { fill: red;}
```   

By giving your circle an #ID you could have multiple circles and target them individually with CSS as well. 

##Wow, but trying to draw shapes with code is hard. What if I wanted something more complex?

You don’t have to rely on defining shapes in code to build the SVG you want. Tools like Illustrator or Sketch. Here you can make any vector shape you want, including using gradients, and save them out as SVG. 

![SVG is a built in format inside of Illustrator](http://ampnetmedia.com/assets/img/SVG/SVG-illustrator-saveas-ampnet.jpg)   
SVG is a built in format inside of Illustrator so do a normal Save As.

![Use the Format dropdown in Illustrator to select SVG](http://ampnetmedia.com/assets/img/SVG/SVG-illustrator-format-svg-ampnet.jpg)   
Use the Format dropdown in Illustrator to select SVG

![Make sure you select the correct SVG Profile in Illustrator](http://ampnetmedia.com/assets/img/SVG/SVG-illustrator-svg-profile-ampnet.jpg)   
This dialog box can be a little confusing at first but just make sure to set your profile to SVG 1.1 - also when saving the file make sure that you don’t check the option to “Preserve Illustrator Editing Capabilities.” Illustrator will already allow you to reopen an SVG and edit it but checking this will make the file size much larger.  

If you open up that file in a text editor you’ll see a large mess of code. There are SVG optimizers that can easily optimize these for better performance on the web. 

Now you can drop that SVG code right on your page and use CSS to scale, color, or animate it. 

##The Sprite

But what if you only want to define your SVG once and use it all over your site like an icon font? We can do those too using SVG Spriting methods.

This can be manual labor or there’s a nifty [grunt task](https://github.com/FWeinb/grunt-svgstore) that can do this for you as well. I’ll show you the manual way here so you have an idea of how it works. 

Take a look at the code inside that SVG you created. Inside of the SVG-tag itself you’ll notice things like `<path>` `<polygon>` `<circle>` and so on.  These are the shapes that make up your SVG image. If you surround those within a `<symbol>` tag, it will group those into one defined symbol. This is basically how you do spriting. Add many SVG symbols to one SVG definition and give those symbols #ID’s so you can target them with CSS. 

<p data-height="268" data-theme-id="0" data-slug-hash="hoKBq" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/hoKBq/'>Playing with SVG icons</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>

This is really cool because to use an image or icon from this set you simply have a "use" statement.

```
<svg class="icon"><use xlink:href="#twitter" /></svg>
```

No need to have quadrants baked into CSS trying to find the exact location of an image. Just call the #ID assigned to that icon and boom!

You can also even have your SVG Sprite defined in an external file and pull it in with the `use` tag. This allows these to be cached and still takes minimal http requests. 

```
<!-- `<use>` shape defined ON THIS PAGE somewhere else -->
<svg viewBox="0 0 100 100">
   <use xlink:href="#icon-1"></use>
</svg>

<!-- `<use>` shape defined in an EXTERNAL RESOURCE -->
<svg viewBox="0 0 100 100">
   <use xlink:href="defs.svg#icon-1"></use>
</svg>
```

###More SVG Pens

Here are a few more pens showing how to use SVG inside webpages.   


<p data-height="268" data-theme-id="0" data-slug-hash="hIqxG" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/hIqxG/'>Messing with SVG</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>


<p data-height="268" data-theme-id="0" data-slug-hash="tuCGk" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/tuCGk/'>floorplan</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>

[iPhone Mask Effect](http://codepen.io/jhoward/full/jyeFr/)


###More Resources

[CSS-Tricks Swapping SVG Icons](http://css-tricks.com/swapping-svg-icons/)   

[CSS-Tricks Mega List SVG Information](http://css-tricks.com/mega-list-svg-information/)

[The Noun Project - SVG Icons](http://thenounproject.com/)

[Grunt SVG Store on GitHub](https://github.com/FWeinb/grunt-svgstore)

[Icon System with SVG Sprites](http://css-tricks.com/svg-sprites-use-better-icon-fonts/)

[Iconic Tour - SVG Icons](https://useiconic.com/tour/)

[Fallback with SVGeezy](http://benhowdle.im/svgeezy/)

[SVG Border Animation](http://tympanus.net/Tutorials/BorderAnimationSVG/)

[SVG Animated Icons](http://tympanus.net/Development/AnimatedSVGIcons/)

[SnapSVG by Adobe](http://snapsvg.io/demos/)

[SVG Shape Hover Effects](http://tympanus.net/Tutorials/ShapeHoverEffectSVG/)