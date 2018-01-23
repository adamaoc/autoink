* Reactjs Photo Gallery
* Building React Components
* 2014-12-23
* codepen.io
* works/react/reactjs-logo-thumb.png | works/react/reactjs-logo-thumb.png | works/react/reactjs-logo.png
* 239, 141, 34, 0.8
* codepen
* reactjs, react, photo gallery, JavaScript

I'm still playing with [React](http://facebook.github.io/react/index.html), from Facebook, and have been thinking about ways to learn more about the library. One of the best ways to learn something new is to start a project using that thing so that's what I've begun doing. I'm going to be working on many small examples of React elements, or components, and then work toward turning them into a larger project.  

This week I've decided to try my hand at making a simple photo gallery using ReactJS. There's not a whole lot going on here but I'll try to cover some of the things I went back and forth on. 

First the images are being pulled from a service called [Place Babies](http://placebabies.com) which will serve up a photo of a baby at a specified size. You can tack a numerical ID to the end of the path to give you a specific image and that's how I'm using the service to get the same image in a larger size. So my data array, declared at the top of the JavaScript file, is just an array of numbers. This could easily be pulling a full url from a service but this is the way I decided to go for this component. 

Next we start building the `Gallery` component and passing the data array in as a property. Inside the component we use that property to setup our initial state and pass those values to our inner elements; we have an `imgRow` and an `imgItem`. The image row is exactly what it sounds like, the row of images at the top of the gallery. This is created by running a loop over the array of image id's with the JavaScript `map()` function. Because the click event is nested inside this function I needed to be a little creative on the way we would handle the click. This took some figuring out but you're able to bind the `this` value of the previous element using the `.bind()` method.

Once an image is clicked the `handleClick` function takes over and resets the state of our hero image; found in the `selectedImg` element. And that's it. We have a simple React Photo Gallery. 

Check out the code below and check out my [Profile on CodePen](http://codepen.io/adamaoc/) for more work.

<div class="codepen-code">
<p data-height="668" data-theme-id="0" data-slug-hash="KwMLpb" data-default-tab="result" data-user="adamaoc" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/KwMLpb/'>React Image Gallery</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script></div>