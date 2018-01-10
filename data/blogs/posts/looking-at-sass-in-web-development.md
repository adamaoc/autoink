* Looking at Sass in Web Development
* A talk for Front-End Developers
* 2014-02-14
* webdev
* http://ampnetmedia.com/assets/img/sass-blog-img.png | http://ampnetmedia.com/assets/img/sass-blog-img.png | http://ampnetmedia.com/assets/img/sass-blog-img.png
* default
* published
* tag1, tag2, tag3, tag4

Sass is a powerfull tool for moder front-end web development. It's a preprocessor made to make coding CSS easier. Let's look at what Sass has to offer. 

## Using variables for selectors or properties.

* look at our home-page.scss and keyframs or ie10-useragent selector
* notice $engine-transform is a variable for the property and not the value.

```  
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

* and here we use that variable with a #{$variable} syntax   

```   
@include keyframes(vertical-box-flip) {
	0% {
		#{$engine-transform}: rotatex(0deg);	
	}
}
```   

* here we declare the selector as a variable

```
$ie10-useragent: "html[data-useragent*='MSIE 10.0']";
``` 

* and here we use that variable with the same #{$variable} syntax
* because the animation property doesn’t work in IE10 correctly we give it a none value.

```
.call-box .flip-box {
	width: 100%;
	height: 100%;
	@include transform-style(preserve-3d);
	@include animation(vertical-box-flip, 20s, ease-in-out, infinite);
	#{$ie10-useragent} & {
		animation: none;
	}
}
```

## Can you import a regular CSS file without changing the extension?

* NO... :(

## Mixin, Placeholder, Functions, Extend

* __mixin__ is like a function that can take variables

``` 
@mixin stuff($variable1, $variable2, $variable3) {
    selector: $variable1;
    selector: $variable2;
    selector: $variable3;
}

.thing {
    @include stuff(red, green, yellow);
}
```

* a __placeholder__ is more like a class to extend without variables
* placeholders are not compiled to source.

```
%center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.container {
    @extend %center;
}
```

* a __function__ variables and returns only one value (calculations)

```
@function my-calculation-function($some-number, $another-number){
    @return $some-number + $another-number
}

.my-module {
    padding: my-calculation-function(10px, 5px);
}

// Compass functions
color: lighten(#333, 10%);
color: darken(#fff, 20%);

// We use a function!
@function min-max($max){
    @if $max == true {
		@return 'max-width';
	} @else {
		@return 'min-width';
	}
}

```

* an __extend__ will duplicate a class into another 
* we use this for modules
* the difference between extend and placeholder is that the base class will be compiled into your css file.

```
.module {
    background: $header-pannel-background-color;
	padding: 0.5rem;
	border-top: 1px solid $module-border-color;
	border-bottom: 1px solid $module-border-color;
	@include bp(ipad-portrait) {
		border-left: 1px solid $module-border-color;
		border-right: 1px solid $module-border-color;
	}
}

.this-div {
    @extend .module;
}
```