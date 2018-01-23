* React JS on CodePen
* Helpers and Learning
* 2016-01-20
* codepen.io
* works/react/reactjs-logo-thumb.png | works/react/reactjs-logo.png | works/react/reactjs-logo.png
* 252, 110, 81, 0.8
* codepen
* codepen, react, js, javascript, jsx

I've been working a lot more with newer React (v. 0.14.0) and writing components using ES2015 (ES6+) syntax with JS Classes and more. That, in conjunction to ReactDOM being split out of core React, a lot of things have changed. I've built some examples on CodePen using this newer way of writing React.

The first example is a base template that can be forked and used to start up a new Pen using React. This is important as you need some configuration to have it up and running in CodePen and it shows two new ways of writing components in React - one bing a stateless, pure-render component.

Here is the Base React template made on [CodePen](http://codepen.io/adamaoc/details/GoJwyy/).

<p data-height="268" data-theme-id="0" data-slug-hash="GoJwyy" data-default-tab="result" data-user="adamaoc" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/GoJwyy/'>React Base</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

This second Pen shows off the lifecycle hooks given to us from React and what order they are run in. You'll have to pop open the console to see what's rendering in what order and see how important mounting and unmounting is in React. The gist of it is, your `componentWillMount` is run first and runs before anything is rendered to the page. This is where you want to fetch data or do any initial setup work. Next up is the `render` which renders your JSX to the page. Then you hit the `componentDidMount` indicating that the render is completed. In this step you can now manipulate elements that were rendered. Finally, when the component is unmounted from the page you'll hit the `componentWillUnmount` which is a great place to clean up any existing processes or listeners on the page. Of course, there are more lifecycle hooks but these are key ones you'll be using much more often.

Here is the React Lifecycle example on [CodePen](http://codepen.io/adamaoc/details/ZQvbyX/)

<p data-height="268" data-theme-id="0" data-slug-hash="ZQvbyX" data-default-tab="result" data-user="adamaoc" class='codepen'>See the Pen <a href='http://codepen.io/adamaoc/pen/ZQvbyX/'>React Lifecycle</a> by Adam Moore (<a href='http://codepen.io/adamaoc'>@adamaoc</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

Check out my [Profile on CodePen](http://codepen.io/adamaoc/) for more work.
