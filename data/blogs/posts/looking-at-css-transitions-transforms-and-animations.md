* Looking at CSS Transitions, Transforms, and Animations
* A talk for Front-End Web Developers
* 2014-03-10
* webdev
* http://ampnetmedia.com/assets/img/css-animate-blog.png | http://ampnetmedia.com/assets/img/css-animate-blog.png | http://ampnetmedia.com/assets/img/css-animate-blog.png
* default
* published
* tag1, tag2, tag3, tag4

Notes for CSS Transitions / Transforms / Animations
----------------

Can I use? [Let's See...](http://caniuse.com/)

CodePen Demo [here &raquo;](http://codepen.io/adamaoc/pen/aemov)

## Transitions

[css-tricks almanac](http://css-tricks.com/almanac/properties/t/transition/)

```
.example {
    transition: [transition-property] [transition-duration] [transition-timing-function] [transition-delay];
}

div {
    transition: background-color 0.5s ease;
	background-color: red;
}
div:hover {
	background-color: green;
}

```

For compatibility in all supporting browsers, vendor prefixes are required, with the standard syntax declared last:

```
.example {
    -webkit-transition: background-color 500ms ease-out 1s;
    -moz-transition: background-color 500ms ease-out 1s;
    -o-transition: background-color 500ms ease-out 1s;
    transition: background-color 500ms ease-out 1s;
}
```

Compass? [Well yes](http://compass-style.org/reference/compass/css3/transition/#mixin-single-transition).

```
transition($transition-1, $transition-2, $transition-3, $transition-4, $transition-5, $transition-6, $transition-7, $transition-8, $transition-9, $transition-10)


---
@import "compass/css3/transition";

div {
    @include single-transition(all, 0.5s, ease);
}
```

## Transform 
[css-tricks almanac](http://css-tricks.com/almanac/properties/t/transform/)
```
div {
  transform: transform-function || none; /* can list multiple, space-separated */
}
```

prefixed...

```
div {
  -webkit-transform: value;
  -moz-transform:    value;
  -ms-transform:     value;
  -o-transform:      value;
  transform:         value;
}
```

Compass? [Yup &raquo;](http://compass-style.org/reference/compass/css3/transform/)

```
@import "compass/css3/transform";

@include transform( transforms [, 3D-only ] );
@include rotate3d($vector-x, $vector-y, $vector-z, $rotate, $perspective);

```

SO MUCH MORE!

## Animation
[css-tricks almanac](http://css-tricks.com/almanac/properties/a/animation/)

```
.element-to-animate {
  animation: NAME-YOUR-ANIMATION 5s infinite;
}

@keyframes NAME-YOUR-ANIMATION {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
```

Crazy Prefixing...

```
@-webkit-keyframes NAME-YOUR-ANIMATION {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes NAME-YOUR-ANIMATION {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@-o-keyframes NAME-YOUR-ANIMATION {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes NAME-YOUR-ANIMATION {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}

#box {
  -webkit-animation: NAME-YOUR-ANIMATION 5s infinite;
  -moz-animation:    NAME-YOUR-ANIMATION 5s infinite;
  -o-animation:      NAME-YOUR-ANIMATION 5s infinite;
  animation:         NAME-YOUR-ANIMATION 5s infinite;
}
```
Compass? Nope :(   

But, You can write a custom mixin or look through GitHub for a prebuilt solution. 

```
@mixin animation($name, $time, $ease: ease-in-out, $loop: none) {
    -webkit-animation: $name $time $ease $loop;
    animation: $name $time $ease $loop;
}

$engine-transform: transform !default;
@mixin keyframes($name) {
	@-webkit-keyframes $name {
		$engine-transform: -webkit-transform;
		@content;
	}
	@keyframes $name {
		$engine-transform: transform;
		@content;
	}
}


```

More on CodePen:   
[Transform and Animate](http://codepen.io/adamaoc/full/dwljz)   
[404 Animate](http://codepen.io/adamaoc/pen/xDtkE)   
[Treehouse boat Animation](http://codepen.io/adamaoc/pen/AveuD)   
[Treehouse Transform Flip](http://codepen.io/adamaoc/pen/gADup)   
