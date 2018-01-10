* Building Modern Web Apps
* With Web Components
* 2015-07-02
* webdev
* /assets/img/blog/web-components/building-modern-web-applications-with-web-components-small.jpeg | /assets/img/blog/web-components/building-modern-web-applications-with-web-components-small.jpeg | /assets/img/blog/web-components/building-modern-web-applications-with-web-components.jpg
* default
* published
* web components, ember, angular, polymer, react

In 2013, many influential community members from Google, Mozilla, Microsoft, and assorted communities building and maintaining the Web signed a document known as the Extensible Web Manifesto. In short, this document declared that we're tired of waiting on slow standards bodies to perfect a feature and roll it out to the masses, stating the need for an extensible platform that allows us to build our own features, while enabling those features to become standardized as they become more popular.

From this manifesto came what are now know as web components. Web components are a way to build your own markup tags with their own native styling, functionality and ability to be passed along or used by the masses to easily integrate with or add functionality to websites or web apps.

So why are web components such a desired feature of the Web? Here are four reasons:

###THEY'RE REUSABLE.   

Building web components makes it easy to reuse code that has already been written and perfected, whether it be code that you have written for your specific project or code that someone else has written and shared to help you complete a bit of functionality within your project. One great example of this is Google's Google Maps component. Wouldn’t it be nice to be able to add a map to your website or application with all the power of the map’s API without having to know too much about what that API is doing behind the scenes? By using web components, you can let Google worry about making the code and integrating with the API itself while you just supply a HTML tag with special attributes. Now you have a component that is easy to throw on the page and reuse many times without worrying about duplicating code or having one map component out of sync with another.

###THEY'RE MODULAR.   

Modularity enables you to keep your code easy to read, easy to reuse in small chunks and limits problems. Even if you’re not building components to share with others or reusing the code multiple times throughout your project, using components to keep your code modular and more succinct helps keep problems small and readability high. The idea of taking components at an elemental level, often called Atomic Design thanks to Brad Frost's famous post, is so widely accepted that Google has now adopted it.

No matter what you call it, your components should start off very small; like a single "search" button. Then you can take a few small components, a single button and a text file, and put those together creating a searching component built of smaller components. This means that the button does not know about the text field and visa versa but the search component knows how to string the functionality of the two together and create its own unique interaction. Now you could add that search component into a header component that also includes a navigation component and it could go on and on. All of the styling, markup, and functionality for each component lives within its own world, not to be affected by other things on the page.

###THEY ALLOW BETTER TESTING.   

Testing has always been a difficult task in web development. Knowing where an element is on the page and knowing what could and could not be affecting it is challenging. Building up components with specific functionality and no interference from outside influencers makes it much easier to test on its own. Using the search example above, you could easily use fake data to write a test so that your search field returns what it expects. If you then include that search component into an application, you already know that its base functionality does what it’s supposed to do. This is made even better with phantom web browsers or headless browsers. There is no need to even open up a browser for most functionality testing these days if you can test each component on its own right inside the terminal.

###MORE PLAYERS = MORE INNOVATION.
Even though web components are not officially supported just yet, there are many players in the game today working to make the Web a more component-oriented place. Here are a few worth mentioning:

####Polymer

Google's Polymer project uses a polyfill to enable your component in any modern browser and gives you guidelines on how you should be building your components. This is the closest thing out there to what the W3C’s specification will be and their hope is that once the spec is out in the wild, you’ll be able to keep all the code you’ve written and just remove the need for a polyfill.

####Angular

Angular is another Google project that most developers and software development firms are following closely. The Angular and Polymer teams have been working closely as Angular 2.0 is pushing developers to build in a more component-friendly way.

####Ember

One of Angular’s big competitors in the world of JavaScript frameworks is Ember, and it's a technology that our teams here at Dialexa lean upon to help us build great web apps. Similarly, the community behind Ember is on board web components and the Extensible Web in general. Ember 2.0 is also moving more toward components and away from traditional web views. While you’re not literally making HTML tags like you would with Polymer, Ember is still adhering to a lot of the specifications of web components as it builds the functionality into its template rendering engine.

####React

Another big player in this realm happens to run the largest and most robust application on the Internet. As Facebook serves its billions of users each day, the Facebook application is constantly being put to the test. It's also constantly being worked on as Facebook improves features or rolls out new ones. How are you able to keep all of that code maintainable? Make it very modular with components. Facebook has been developing its own JavaScript framework and many aspects of the site are now powered by React. React is all about web components and actually skimps on most of the other features you would find in frameworks like Angular and Ember. Want to "like" a post? That’s React at work. Checking notifications, commenting, searching, or promoting a post; these are all small components built in React. Again, although you’re not necessarily building out W3C style web components, React is all about building out small components and keeping functionality internal to that component then nesting these to make larger components. Most React applications start with an app component and are essentially a ton of components nested within one another.

###MOVING FORWARD   

With all of these big players, and many more pushing toward making the web more extensible and more modular, it’s only a matter of time before everyone is building their web apps this way. At Dialexa, we have already started and are moving more and more of our products to this type of development each day inside our product development process. I can attest to the improvement in workflow and ease of development when you begin to think of your web application as lots of small components instead of one large page. No one has it all figured out just yet, and there are still issues with things like styling bleeding in or out of your component, but as we move forward, we continue to learn more and refine. In the end, it feels good to be part of a community that's helping bring the Web to a better place.
