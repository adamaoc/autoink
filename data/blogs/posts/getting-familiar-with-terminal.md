* Getting familiar with Terminal
* for Designers and Front-end Devs
* 2015-03-19
* webdev
* /assets/img/blog/terminal/macbook-terminal-blur-sm.jpg | /assets/img/blog/terminal/macbook-terminal-blur-sm.jpg | /assets/img/blog/terminal/macbook-terminal-blur.jpg
* default
* published
* terminal, front end, web, development

As a front-end developer I use the terminal quite often but it hasn't always been this way. You can definitely do development work without using the terminal, I just find that it's fast and extremely easy once you get the hang of it. Many front-end developers I work with, and designers moving into a little bit of development, get intimidated by the terminal but there's really no reason to be intimidated. Here's some steps that I use when helping others get familiar with the terminal. 

## Make it pretty

* You're a designer / front-end developer... make sure your terminal looks good
* Look at Terminal settings
* Look at the .bash_profile and .bashrc and how they can help stylize/customize your terminal

## Get familiar with traversing the system

* using `cd` to change directories
* listing out files with `ls`, `ls -l`, and `ls -a`
* know your root and home directories `~` and `/`
* use the up-arrow to bring back the last command you typed

## Know nano or vim for editing files

* once you find a file you can open it up to edit right from the terminal
* `vim ~/.bash_profile` 
* `nano ~/.bash_profile`

Vim is a complex yet powerful tool that's is great to know and understand. It's probably set as your default editor so knowing how to edit files, save files, and quit files can be important.   
Keys to remember:   
`i` - Put you in Insert Mode - this is how you're able to add content to a file. To get out of Insert Mode you use `esc`.   
`:wq` - Using the colon and `wq` will "write" and "quit" the file, essentially saving it.   
`:qa` - This command will quit out of a file without saving it.

Nano is a more traditional Unix style editor that is much easier to understand but not quite as powerful. 

## Know how to make your life easier with bash_profile

* make an alias
* make a function
* make it easy to find your bash_profile in the future

An alias is a shortcut command that is able to point at another command already established. One super common alias that every front-end dev needs is the `subl` command. Being able to open projects or files in Sublime Text is awesome and powerful and is easier than editing files with vim or nano.

```
#Alias for opening Sublime Text
alias subl="/Applications/Sublime\ Text.app/Contents/SharedSupport/bin/subl"
----
# Using in terminal top open a folder
$ subl .
# or open a file
$ subl site.scss
```

I even have an alias called `mybash` to quickly open my .bash_profile in Sublime from anywhere.

```
#quickly open your bash_profile for editing in Sublime
alias mybash="subl ~/.bash_profile"
```

A function can perform multiple tasks and if you get used to the syntax you can write some pretty great stuff. An example of 2 that I use a lot...

* Starting a local server (Python)

```
# Start an HTTP server from a directory, optionally specifying the port
function server() {
	local port="${1:-8000}"
	open "http://localhost:${port}/"
	# Set the default Content-Type to `text/plain` instead of `application/octet-stream`
	# And serve everything as UTF-8 (although not technically correct, this doesnâ€™t break anything for binary files)
	python -c $'import SimpleHTTPServer;\nmap = SimpleHTTPServer.SimpleHTTPRequestHandler.extensions_map;\nmap[""] = "text/plain";\nfor key, value in map.items():\n\tmap[key] = value + ";charset=UTF-8";\nSimpleHTTPServer.test();' "$port"
}
```

* Quickly make a directory and move into it

```
# Create a new directory and enter it
function md() {
	mkdir -p "$@" && cd "$@"
}   
```

In the above 2 functions all you have to do is type `server` or `md` into the terminal and they will run.

------

<h2 class="center">Using the terminal everyday</h2>

------
## Rocking Git and GitHub in the terminal

* clone a repo from GitHub `git clone`
* know your major commands `git status`, `git add`, `git commit`, `git pull`, `git push`

### -What's the status?

Running `git status` will show you your repo's current status. Find out what's been modified, what needs to be committed, and what's being tracked and what's not.

### -Hot to track files locally or "add" them to my repo

Once you create a new file you must add that file and tell git to track it. You do this by running `git add {filename}` or you can run either `git add .` or `git add --all` to add all untracked files. Make sure to look at what your adding to ensure it needs to be there. You don't want to add generated files like `node_modules` or `bower_components`. You can use a file called `.gitignore` to ignore these files and have git not bug you to track them. 

### -Committing files 

Once your files have been added you still need to commit them locally to your repository. 
You can commit single files or a group of files by running `git commit {filename}` or `git commit {filename} {filename}` for multiple. Most of the time you don't want to commit each file individually so running `git commit` will also commit everything available.

Every commit needs a message so when you run `git commit` Terminal will open up vim or nano (or whatever your default text editor is) so you can add a commit message. You can also add a message in line with `git commit -m "my commit message"` for easy and quick committing. The `-m` flag tells Terminal that you're adding a message in line and this is how the majority of git users add messages to their commits. 

### -Pulling and Pushing

To keep your repo up to date with changes other, or yourself, may have made you'll need to run a `git pull`. This finds your repo and pulls down, and merges in, any changes that you don't have. On the other hand, once you have made updates, added those, and made a commit; you now need to push that commit up. You do this with a simple `git push`. 

-------

## Running tasks

One common use of the terminal for front-end devs is to run tasks like compiling code. Popular task runners are Grunt, Gulp, and Broccoli. We're going to look at Grunt.

### -Having node and npm

You need to have node installed first and use node's npm (node package manager) to install Grunt as a package. Node can be downloaded at [https://nodejs.org/](https://nodejs.org/). 
To then add Grunt you run:   
```   
npm install -g grunt-cli
```   

The `-g` flag tells `grunt-cli`, or grunt command line interface, to be added globally. Now you have access to Grunt from any project on your computer. 

### -Running commands

Once you have Grunt setup and you have tasks in your Gruntfile.js you can run those commands in the terminal.

```
# watch files using the watch task
$ grunt watch

# build developers version vs. production version
$ grunt prod
$ grunt dev
```

------

Most of this was a quick walk through but I think it's important to spend the time, as a front-end dev or a designer working with front-end code, with the terminal and being comfortable using it. Let me know your opinions, please... If you think I've missed something that a beginner really needs to know - throw it in the comments.  