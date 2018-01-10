* Using data attributes and
* CSS :before and :after for making clean, dynamic content
* 2013-12-26
* webdev
* default
* default
* published
* tag1, tag2, tag3, tag4

Data attributes are all the rage these days and work wonders with JavaScript integration but they can also work well with CSS. With basically one HTML element you can build something with many dynamic parts such as:

```
<div class=”epa_ratings” data-epa-city=”EPA-Est City MPG 45" data-epa-hwy=”EPA-Est Hwy MPG 40"></div> 
```

This gives you one empty div with two data attributes attached holding what could easily be dynamic placeholders. Now the CSS or SCSS.

```
.epa_ratings {
 background-image: url(“epa-image.png”);
 margin: 1em auto;
 position: relative;
 &:before, &:after {
 text-align: center;
 font-size: 0.8em;
 position: absolute;
 top: 18%;
 width: 5em;
 line-height: 1.4;
 }
 &:before {
 content: attr(data-epa-city);
 left: -5em;
 }
 &:after {
 content: attr(data-epa-hwy);
 right: -5em;
 }
}
```

So the big deal here is the :before and :afterselectors in the CSS that use the content of the data attributes. And your end result looks something like this…

![Real world example using data attributes and css sudo classes](https://d262ilb51hltx0.cloudfront.net/max/800/1*1TwLR7cOg9H94zshNs0ARQ.png)

This is just one small example of how this can be done as well.

Check out the full code on CodePen [HERE »](http://cdpn.io/oBgam)

No front-end tutorial is finished before talking about IE…
So how does this fancy data attribute stuff work in IE? Luckily they seem to work pretty well in IE8, IE9, and IE10 with the :before and :afterselectors so get to using!