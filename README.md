# IPL Records DB

## Steps to set up a server on Linux Mint

Here are the instructions to setup LAMP(Linux-Apache-MySQL-PHP)

### Step 1: Install Apache Web Server

Type the following commands in the given ordr in your terminal

>sudo apt-get install apache2

You are gonna need to enable Apache2 web server for it to start at system boot time, and as well startup the service as follows:

>sudo systemctl enable apache2
>sudo systemctl start apache2

#### Testing Apache

Open up any web browser and then enter the following into the web address:

>http://localhost/

You should see a folder entitled apache2-default/. Open it and you will see an Apache server page, which means all good.

__Reminder__: The Apache default root directory is located in _/var/www/html_, and all of your web files are gonna be stored in this directory.

### Step 2: Install MySQL Database Server

For this next step, we must install the MySQL database server by typing in the following command:

>sudo apt-get install mysql-client mysql-server

While the package is being installed, you are gonna be prompted to choose the root user password for MySQL, type in a good and secured password, then press the OK button twice to continue further.

The database server deployment isn’t quite secure yet, for that reason, type in the next command to maximize it’s security:

>sudo mysql_secure_installation

First, you are gonna be requested to install the ‘_validate_password_’ plugin, so you will need to type in Y/Yes and press Enter, and as well choose the default password strength level.

It’s important to know if you don’t want to change the root password, type N/No when requested to do so. Answer Y/Yes for the next subsequent questions.

### Step 3: Install PHP and Modules

For this step, we will install PHP and a few other modules for it to be able to work with the web and database servers using the following command:

>sudo apt-get install php7.0 php7.0-mysql libapache2-mod-php7.0 php7.0-cli php7.0-cgi php7.0-gd

Next, to test if php is working along with the web server, we will have to create a _info.php_ file inside _/var/www/html_.

>sudo gedit /var/www/html/info.php

And copy & paste the following command into the file, save it and exit.

```php
<?php 
phpinfo();
?>
```

When you’re done with that, open the web browser and type in the address _http://localhost/info.php_

You will be able to view the php info page below as confirmation.

### Extras:

You can also install a GUI tool to manage your MySQL database easily. The tool is called PHPMyAdmin. To install it, enter the following in your terminal

>sudo apt-get install phpmyadmin

To access it, open the web browser of your choice and enter the following link: _http://localhost/phpmyadmin/_

__NOTE__ : You may need to restart the Apach Web Server after different steps of the installation.To do that, enter the command below in your terminal:

>sudo /etc/init.d/apache2 restart
