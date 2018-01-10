* Introduction to Firebase
* a powerful real-time api
* 2014-12-17
* webdev
* http://ampnetmedia.com/assets/img/blog/firebase/firebase-screenshot-thumb.png | http://ampnetmedia.com/assets/img/blog/firebase/firebase-screenshot-thumb.png | http://ampnetmedia.com/assets/img/blog/firebase/firebase-screenshot.png
* default
* published
* firebase, api, js, baas

Firebase is a powerful API to store and sync data in realtime helping front-end developers build realtime apps for the web. Use tools you’re already familiar with including JavaScript and JSON. You can save data, update data, and listen for data changes in realtime with only a few lines of code. Data is stored as standard JSON and is accessible from any platform. Firebase also has safety and security built in to keep your data and your users data safe. 

This is a paid service but Firebase has a “Hacker Plan” which is FREE!

##Why use Firebase at all?

Obviously it takes more than client side code to build a true web app. You’ll need a backend that handles a database, authentication, ajax, an accessible api, and you'll need somewhere to host that backend. There are many things that make backend development easier like Ruby on Rails, or services like Heroku but there is still a lot of development time that goes into building these. Firebase takes care of most of the backend concerns and is dubbed a Backend as a Service (BaaS). 

Firebase is also a realtime api utilizing web sockets for pushing state to your application. This means that an interactive app can be even more interactive as you don’t need to refresh the browser to get updates; they are pushed in real-time. 

##Taking a quick look at the backend GUI

The backend makes it easy to visualize your data in a no-SQL type of setup. You can easily add nodes to your data set or import an existing JSON file.  You can also watch as data is updated, deleted, or added and see the flashes of colors that signify these actions. Add a node and it flashes green. Update some data and the node flashes orange. Completely remove or delete a node and you’ll see it flash red before disappearing. 

You can also view the outputted JSON by adding .json to the end of your applications url. This is handy for visualizing what JavaScript is pulling in. You can also navigate to your child nodes in the browser and add .json to only return a particular node. 

![Firebase GUI](https://dl.dropboxusercontent.com/u/65131811/firebase-screenshot.png)

##Adding Firebase to the page

``` html
<script src="https://cdn.firebase.com/js/client/2.0.2/firebase.js"></script>
```

##The JavaScript API

You can create new Firebase object in JavaScript quite easily then run many prebuilt functions and methods on that object for interacting with your data. 

### Setting up your data with .set()

``` js
// set up a new reference to your firebase app
var myFirebaseRef = new Firebase("https://app-name.firebaseio.com/");
 
// use the .set() method to add data in the form of an object
myFirebaseRef.set({name: "adam"});
 
myFirebaseRef.set({comment: [{name: "adam"},{name: "john"}]});

```
Running the `set()` method on your Firebase reference will allow you to setup new data. You need to be careful with your use of set as it wipes out all of the existing data and resets it for the node you’re referencing. 

### Getting to a Child Reference with .child()

There are a few different ways to access child nodes with Firebase. One is to just set your reference point to that child node. As we discussed earlier, you can navigate in your browser, pointing at a child node. You can do the same when you’re creating a reference in your JavaScript. 

``` js
// sets up a reference to your comments child node
var myCommentsRef = new Firebase("https://app-name.firebaseio.com/comments/");

```
This code sets myCommentsRef to include only your comments node.

You could also use the `.child()` method to get a child node off your current reference. 

``` js
// this uses the .child() method to set data
myFirebaseRef.child('news').set({story: "title this"});
```

This is setting new data for the ‘news’ child node. You can also use this method to create new child nodes. If you run this command and there is no ‘news’ node setup, it will create it for you and set its content accordingly. 


### Updating Data:

Sometimes you don’t want to reset all the data in a node; actually most of the time you wont want to. For this, Firebase gives you the `.update()` method. 

``` js
// use .update() method to update data
myFirebaseRef.update({news: {story: "my new title"}});

```
This will find the news node and update the story property with the new data provided. 

You can also use the `.push()` method to push new nodes or data points but push also incorporates its own unique identifier. 

``` js
// using .push() method to push new data
myFirebaseRef.child('comments').push({name: "james", text: "this text"});

```
This code pushes a new node onto the comments node with a unique identifier. The push method and update method are what you’ll probably end up using the most when interacting with a web application. 

### Deleting Data:

You can also completely remove or delete data using the `.remove()` method. It’s use is pretty straightforward and you can target any reference point just like you would to set or update data. 

``` js
// removes all data in your reference
myFirebaseRef.remove()
 
// removes all data in the child node of news
myFirebaseRef.child('news').remove();

```

### Pulling Data:

So obviously all of this is useless if you don’t have access to your data within your app, but of course Firebase makes this easy as well with the `.on()` method. 

The `.on()` method is what sets up your data to be realtime, as it listens for data changes at a particular location. Your callback within the `.on()` method will be triggered for the initial data and again whenever the data changes. 

There are many options you can use with this method but the most popular way to interact with it, and the way we’ll be talking about right now, is the ‘value’ option. 

The ‘value’ event gives you back a Snapshot of your data. The snapshot is a representation of your data at the time it was called. You can then use this snapshot to extract many things about the data your referenced. 

``` js
// log the value of the data snapshot
myFirebaseRef.on("value", function(snapshot) { console.log(snapshot.val()); });

```

The code above is getting a snapshot of all the data in our reference and logging the value of that data to the console with the `.val()` method. You can also run other methods on your snapshot including:   
`.child()`   
`.forEach()`   
`.hasChild()`   
`.hasChildren()`   
`.ref()`   
* more listed here [https://www.firebase.com/docs/web/api/datasnapshot/](https://www.firebase.com/docs/web/api/datasnapshot/)

``` js

// shows the number of children associated with the snapshot
myFirebaseRef.on("value", function(snapshot) { var data = snapshot.numChildren(); $(".data").html(data); });
 
 
// return a boolean if the snapshot has a child node of comments
myFirebaseRef.on("value", function (snapshot) { var data = snapshot.hasChild('comments'); $(".data").html(data); });
     
// loop through each node with the .forEach() method and append it to the DOM
myFirebaseRef.child('messages').on("value", function(snapshot) { 
	var data = snapshot.forEach(function(child) {
    	console.log(child.val());
    	var message = child.val();
    	$('.data').append("<li>" + message + "</li>" );
	}); 
});

```

There’s so much more that Firebase can do that I didn’t touch on here. It’s easy to work with and easy to testout using the console of your browser. So my suggestion is, if you’re interested in learning more, get a simple page setup and run a bunch of commands in the browser console to see what you can get back. Or throw it into CodePen and make it even easier!
