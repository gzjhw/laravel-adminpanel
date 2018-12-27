# Laravel Adminpanel

## Version
0.0.1-alpha


## Quick Start
``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate

# Install JS Dependencies
npm install

# Watch Files
npm run watch
```

## Setup Installation
### Required
-	github Desktop
	https://desktop.github.com/
	
-	nodejs
	https://nodejs.org/en/download/

- 	Web development environment for PHP, Apache, MySQL or MariaDB database
	such as: 
		- Wamp, 
		https://sourceforge.net/projects/wampserver/
		- Xampp
		https://www.apachefriends.org/de/index.html, 
		- Mamp,
		https://www.mamp.info/de/

1. Download and install github Desktop on your local computer

	If you`re not familiar with Git and GitHub, I recommend	
	Git & GitHub Crash Course For Beginners from Traversy Media
	https://www.youtube.com/watch?v=SWYqp7iY_Tc
	
2. Download and install nodejs on your local computer
		
	Again, if you also need startup help for nodejs, here is another 
	very good crash course tutorial for absolute Node.js beginners.	
	https://www.youtube.com/watch?v=U8XF6AFGqlc
	
3. Download and install one of your favorite Web development environment (Wamp or Xampp or Mamp)
	And once again, Bred did also a wonderful job, explaining and teaching how
	to install and use Web developement environment the perfect way.
	https://www.youtube.com/watch?v=6tCWiexc05U
	
4. Clone laravel-adminpanel repository
	on your computer, navigate to your web folder which is in reach of 
	your local PHP server in my case on my windows computer it is:
	``` C:/www/```
	
	Open command-prompt such as GitBash or any other which can access node and git.
	You can check this by simly typing:
	``` bash
	$ git --version
	```
	After you hit *enter* you should see something like:
	
	``` bash
	> git version 2.19.0.windows.1
    ```
	
	To check node js, type in your command-prompt:
	``` bash
	$ npm -version
	```
	And again, after you hit enter you should see something like:
	``` bash
	> 5.6.0
	```
	
	If all this is done, you are ready to go.
	
	Create a folder where you want, to set up your copy of laravel-adminpanel.
	In my case I will navigate to my webfolder:
	``` C:\Users\Dennis>cd /www ```
	
	and create a new folder:
	``` C:\www>mkdir test ```
	
	change into the ne folder:
	``` C:\www>cd test ```
	
	and clone this repository:
	``` bash
	C:\www\test> git clone https://github.com/dxDennis/laravel-adminpanel
	```
	
	now you can see git downloading this repository to your local computer
	
	Cloning into 'laravel-adminpanel'...
	``` bash
	remote: Enumerating objects: 181, done.
	remote: Counting objects: 100% (181/181), done.
	remote: Compressing objects: 100% (138/138), done.
	remote: Total 181 (delta 23), reused 181 (delta 23), pack-reused 0
	Receiving objects: 100% (181/181), 639.02 KiB | 1.19 MiB/s, done.
	Resolving deltas: 100% (23/23), done.
	```
	now my copy lives in following path: ```C:\www\test\laravel-adminpanel```	
	the folder laravel-adminpanel was created by git automaticly.
	
5. Install Dependencies
	change directory to C:\www\test\laravel-adminpanel and type:
    ``` bash
	$ composer install	
    ```
	
6. Create DB

	Create a new database i.e. "'laravel-test'" or anything you like.
	
	Then, back in your ```C:\www\test\laravel-adminpanel``` folder copy the file ```.env.example``` to ```.env```
	
	open ```.env``` in your text-editor and go to the section ```DB_CONNECTION```
	
	Edit this section in the file according to your settings:
	
	in my case:
	```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE="laravel-test"
	DB_USERNAME=root
	DB_PASSWORD=1234
	```
	Save the file and close the editor.
	
7.  Now let laravel write your db / migrate

	Laravel has a very easy and comfortable way to create and edit your database for you
	simply use "artisan" to do this for you.
	
	Back in your command-prompt inside of your folder: ```C:\www\test\laravel-adminpanel``` type:
	
	```
	$ php artisan migrate
	```
	you should now see something like:
	
	```
	Migration table created successfully.
	Migrating: 2014_10_12_000000_create_users_table
	Migrated:  2014_10_12_000000_create_users_table
	Migrating: 2014_10_12_100000_create_password_resets_table
	Migrated:  2014_10_12_100000_create_password_resets_table
	```
	###### If you get an error about an encryption key type:
	``` 
	php artisan key:generate 
	```
	
8. Setup Node.js package manager (NPM)

	Still in your command-prompt and also inside your folder: ```C:\www\test\laravel-adminpanel``` type:
	```
	$ npm install
	```
	Now this can take a while, depending on the speed of your internet.
		
9. Point your server to your new installation
	
	locate the **vhost** file of your web environment program and add another vhost

	######In my case (wamp-server) the file is located in: C:\wamp64\bin\apache\apache2.4.35\conf\extra\httpd-vhosts.con
	
	open the file in any text-editor and add:
	``` 
	<VirtualHost *:80>
		ServerName laravel.copy
		DocumentRoot "C:/www/test/laravel-adminpanel/public"
		<Directory  "c:/www/test/laravel-adminpanel/public/">
			Options +Indexes +Includes +FollowSymLinks +MultiViews
			AllowOverride All
			Require local
		</Directory>
	</VirtualHost>
	```
	
	As you see the webserver needs to point to the subfolder **public** inside the new **laravel-adminpanel** 
	folder.
	
	######This makes sense, since this way, it is not too easy, to get access to the other private folders inside the laravel environment from the internet.
	
	Now we need to tell your computer about our new ServerName "laravel.copy" to use it as a webside.
	This can be done in the hostfile of your OS.
	
	- On Windows press the windows button and type "note". Notepad should appear on the top of your searchlist now.
	
	- Right-click notepad and click "run as administrator"
	- now click file -> open file and change file-extenson *(at the bottom right)*
	  
	  from textfile (*.txt) to any (*.*) and navigate to ```C:\Windows\System32\drivers\etc```
	- open file ```C:\Windows\System32\drivers\etc\host```
	
	- at the bottom of the file simply add:
	```
	127.0.0.1   laravel.copy
	::1	    laravel.copy
	```
	
	start or restart your webserver ***(wamp or xampp or mamp)***
	
	open your browser and try http://laravel.copy
	
	
	----------------------------------------------------------------------------------------
	NOTE: if you have MDBootstrap PRO simply copy / overwrite the 
	content of your PRO-ZIP-Folder into i.e.

	source C:\Users\Dennis\Downloads\MDB-Pro_4.6.0\*.*
	destination C:\www\test\laravel-adminpanel\node_modules\mdbootstrap\*.*
	----------------------------------------------------------------------------------------
	


after all that, type in your terminal (command-prompt):

```
$ npm run watch
```

##Happy coding ;)
 

## Description
This is just a simple Boilerplate for a Laravel Adminpanel including
- Material Design for Bootstrap 4 - 
    https://github.com/mdbootstrap/bootstrap-material-design
    
- Laravel DataTables Html Plugin - 
    https://github.com/yajra/laravel-datatables-html
    
- <img src="https://img.fortawesome.com/349cfdf6/logo-fa-free.svg" alt="Font Awesome 5 Free" width="50%">
    https://github.com/FortAwesome/Font-Awesome


## Inspired by Brad Traversy
https://github.com/bradtraversy

Thanks man, I love your youtube videos.
Will get a Patron soon. no doubt ;)



## Contributing

1. Fork it ( https://github.com/dxDennis/laravel-adminpanel/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
