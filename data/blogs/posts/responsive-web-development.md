* Responsive Web Development 
* A talk for front-end devs looking to jump into RWD
* 2014-01-23
* webdev
* http://ampnetmedia.com/assets/img/baseballfield-header-sm.jpeg | http://ampnetmedia.com/assets/img/baseballfield-header-lg.jpg | http://ampnetmedia.com/assets/img/baseballfield-header-lg.jpg
* default
* published
* tag1, tag2, tag3, tag4

For the past year I've been working with a small team inside my company, building out a new Responsive Design skin to be used with our existing platform. It’s been a long road, mainly because of back-end hurdles and platform limitations, but we’re chugging along with close to 100 automotive dealerships using our skin as their everyday website.

I landed the front-end position on this team because I’ve had experience building responsive sites and thought I knew what I was doing. In the time since though I’ve really found out how much it takes to build a really well flushed out responsive site. Now that most of the hard work is behind us I decided to organize a round-table for the other front-end developers at my office covering the subject.

![Show of hands, who's built a responsive site?](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-1.jpg)

We all talk shop here but I wasn't really sure who has or has not spent some time building a responsive website outside of work. After asking the question I only received one definite yes and lots of answers that started out like, “ummm… sort of.”

Good, I’m on the right track here.

![How many have used Bootstrap, Foundation, or other frameworks?](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-2.jpg)

Next, I wanted to know whose spent time with some of the larger frameworks and whose spent time really doing it from scratch. Frameworks like Bootstrap and Foundation are great, and we used Foundation for our project at work, but to really understand the development side it’s good to dive in without any help.

![Learning Media Queries.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-3.jpg)

One of the most basic tools for developing a responsive design is the media query. This is what tells your CSS code that you’re ready to change something at a particular size. Luckily everyone was pretty familiar with what a media query is and how it works.

![Learning the basics of Box-Sizing Border-Box in CSS.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-4.jpg)

I was happy I included this slide as most of my fellow developers didn’t really know or understand the box-sizing property of CSS. Box-sizing changes the traditional CSS box model so that padding and the border become one with the width of the container. In traditional CSS if you add padding to your element it stretches the width or height. With box-sizing your dimensions stay the same and the padding or border grows inside the box.

This is key for setting up responsive grids and both Foundation and Bootstrap take full advantage of this property.

![The basics of using em's and what they bring to responsive design.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-5.jpg)

I know for a fact not many in my office use em’s and there is still a large majority of developers out there that are happy sticking with pixels. Using em’s isn't necessary for developing a responsive site but they can be useful. In this slide I show the easy conversion from pixels to em’s in a traditional setting. All browsers use a 16px base font size so as long as you’re not resetting this, 1em will always equal 16px.

After getting out of the mindset of pixel based design, using em’s becomes like second nature. But they are not without their quarks.

![The difference between CSS EM's vs REM's.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-6.jpg)

If you’re having trouble understanding em’s, then getting the difference between em’s and rem’s is even more elusive. One of the biggest gotcha’s with em’s is its cascading affect. As you set elements to a larger em value things within that element have their base em reset. So this slide illustrates that setting a list-item’s font size to 2em makes anything within it automatically 2em’s. When you set an anchor tag within the list-item to 2em then your anchor tag actually equals 4em’s. On the other hand, rem’s always stay true to the base size so setting widths makes more sense with rem’s. But rem’s do not have as heavy support as em’s. That being said, Foundation 5 takes advantage of rem’s throughout its setup.

![How using preprocessors like Sass make responsive easier.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-7.jpg)

Obviously you can develop a responsive site using basic CSS but the process becomes that much easier when you throw in a pre-processor like SASS. Building a mixin that lets you easily declare a breakpoint anywhere nested within your code is the way to go.

![Buzzwords with Responsive Design.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-8.jpg)

In the past few years we’ve really generated some good buzzwords and terms around what we do. Knowing the difference between these design principals will more easily allow you to grasp developing for responsive. Adaptive design is one of the biggest hurdles we have to get around. In adaptive design you “adapt” to a specific width or device. Saying I want a site that works on desktop and on my iPhone is basically saying you want an adaptive website. Saying you want a site that works on any device of any size means you want responsive.

![Why a mobile-first approch is the best way to go.](https://dl.dropboxusercontent.com/u/65131811/Responsive-Web-Design-Roundtable-9.jpg)

So if you’re going responsive, and you should, the way to go is mobile first. Mobile first is more than just a way of writing code and breakpoints. It really forces you to think about content and what is best for smaller devices. It’s not always about turning 3 columns into 1 and hiding the navigation behind a “hamburger” icon.

Letting the content define your breakpoint mean you build the site for the smallest screen, make it larger and when it starts looking bad add a breakpoint. It also means you should take a close look at the content you’re serving on a mobile device and see what is and isn’t needed. There are lots of components built into websites as filler so that they don’t look empty on larger screens but if that content isn’t necessary on a small screen; why is it on a larger one?

Responsive images become a whole article, or two, in of itself. It is important to think about and research though. There are many JavaScript libraries out there than help developers handle this and both Foundation and Bootstrap have some built in. Find something that works for your project and save some major download bottlenecks.

Making sure that any added widgets or videos are responsive is another key ingredient. For videos you have JavaScript libraries like FitVids. If you’re building on an existing platform, like we did, which comes with its own baked in widgets you need to find a way to make those responsive as well.

There’s really a lot going on with responsive websites but it becomes hard to see the complexity you face until you really dive into a big project. I would suggest for any developer looking to learn more, just start from scratch and try to improve an existing site. Start with a mobile first mindset and work your way through it. Don’t start picking up any frameworks until you know how they work and could build one on your own anyway. Get the basics figured out and you’ll be a Responsive Master in no time.