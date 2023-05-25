# MASTER-README

## Description
This is a guide to install the necessary files as well as to understand the whole project. This ReadME is about a blog based on the Valorant game.

## Getting Started

### Prerequisites
PHPStorm : Text editor dedicated to PHP, HTML, JS, and many other languages
https://www.jetbrains.com/fr-fr/phpstorm/download/download-thanks.html?platform=windows

Xdebug : Debugger installable on PHPStorm
https://xdebug.org/files/php_xdebug-3.2.1-8.2-vs16-nts-x86_64.dll

MySQL : MySQL is a service for running text editors for databases
https://dev.mysql.com/get/Downloads/MySQL-8.0/mysql-8.0.33-winx64.zip

PHP :
https://windows.php.net/downloads/releases/php-8.2.6-nts-Win32-vs16-x64.zip

### Installation
Put Xdebug in PHP files :
1. Take the previously downloaded .dll file, and rename it "php_xdebug.dll"
2. Access the "php" folder
3. Once in the "php" folder, go to the "ext" folder, and drag the file "php_xdebug.dll" into it

MySQL Installation Guide :
https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/windows-installation.html

PHP (Step 1 is already done): 
https://www.sitepoint.com/how-to-install-php-on-windows/#installingphp

### Configuration
Configure PHPStorm when he's running for the first time :
https://www.jetbrains.com/help/phpstorm/run-for-the-first-time.html

Configure Xdebug on PHPStorm :
https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html

Configure PHP on PHPStorm :
https://www.jetbrains.com/help/phpstorm/configuring-local-interpreter.html

## Deployment

### On dev environnement
PHPStorm :
1. Go to the settings (Ctrl+Alt+S)
2. Scroll down to the "Build, Execute, Deploy" category
3. Go to the "Deployment" tab
4. Click on the "+" sign, and choose the option "In place", and enter the server name of your choice
5. In "Web Server URL", mark: "http://localhost:8080"

### On integration environnement
PHPStorm :
1. Click on the "Current File" tab located to the left of the green arrow to launch your file, at the top of your tab
2. Click on the "+" and choose "PHP Built-in Web Server".
3. Once in the server page, configure the following:
    - Name: name of your choice
    - Host : localhost
    - Port : 8080
4. Once done, press "Apply" and then "OK", and you will normally be able to launch the site via the "index.php" file

## Run Tests
If all is well done, you should have this message appearing in the console when you launch the "index.php" file:
[Thu May 25 16:25:43 2023] PHP 8.2.3 Development Server (http://localhost:8080) started

If you get an error, check that all the steps have been followed, or try changing the port to "8081". If the problem persists, contact us.

## Directory structure
C:.
│   .gitignore   
│   composer.json
│   composer.lock
│   connect.php  
│   data.json    
│   email.php
│   index.php
│   submit.php
│
├───.idea
│       .gitignore
│       GamingBlog.iml
│       modules.xml
│       vcs.xml
│       workspace.xml
│
├───controler
│       navigation.php
│
├───data
│       register.json
│
├───model
│       mail.php
│       registerphp.php
│
└───view
    │   armes.php
    │   cartes.php
    │   gabarit.php
    │   home.php
    │   jeu.php
    │   login.php
    │   lost.php
    │   password.php
    │   personnages.php
    │   register.php
    │
    └───content
        ├───assets
        │   ├───css
        │   │       cartes.css
        │   │       css2.css
        │   │       fontawesome-all.min.css
        │   │       login.css
        │   │       lost.css
        │   │       main.css
        │   │       noscript.css
        │   │       password.css
        │   │       register.css
        │   │
        │   ├───js
        │   │       breakpoints.min.js
        │   │       browser.min.js
        │   │       jquery.min.js
        │   │       main.js
        │   │       util.js
        │   │
        │   ├───sass
        │   │   │   main.scss
        │   │   │   noscript.scss
        │   │   │
        │   │   ├───base
        │   │   │       _page.scss
        │   │   │       _reset.scss
        │   │   │       _typography.scss
        │   │   │
        │   │   ├───components
        │   │   │       _actions.scss
        │   │   │       _box.scss
        │   │   │       _button.scss
        │   │   │       _form.scss
        │   │   │       _icon.scss
        │   │   │       _icons.scss
        │   │   │       _image.scss
        │   │   │       _list.scss
        │   │   │       _table.scss
        │   │   │
        │   │   ├───layout
        │   │   │       _bg.scss
        │   │   │       _footer.scss
        │   │   │       _header.scss
        │   │   │       _main.scss
        │   │   │       _wrapper.scss
        │   │   │
        │   │   └───libs
        │   │           _breakpoints.scss
        │   │           _functions.scss
        │   │           _mixins.scss
        │   │           _vars.scss
        │   │           _vendor.scss
        │   │
        │   └───webfonts
        │           fa-brands-400.eot
        │           fa-brands-400.svg
        │           fa-brands-400.ttf
        │           fa-brands-400.woff
        │           fa-brands-400.woff2
        │           fa-regular-400.eot
        │           fa-regular-400.svg
        │           fa-regular-400.ttf
        │           fa-regular-400.woff
        │           fa-regular-400.woff2
        │           fa-solid-900.eot
        │           fa-solid-900.svg
        │           fa-solid-900.ttf
        │           fa-solid-900.woff
        │           fa-solid-900.woff2
        │
        └───images
                Ascent.png
                bg.jpg
                Bind.png
                Breeze.png
                brim.png
                bucky.png
                classic.png
                cypher.png
                Fracture.png
                Haven.png
                Icebox.png
                jett.png
                judge.png
                killjoy.png
                Lotus.png
                marshal.png
                operator.png
                overlay.png
                Pearl.png
                phantom.png
                phoenix.png
                pic01.jpg
                pic02.jpg
                pic03.jpg
                sage.png
                shorty.png
                sova.png
                spectre.png
                Split.png
                stinger.png
                The_Range.png
                valoblog.png
                valorant-judge-profile-icon.png
                valorant-marshal-profile-icon.png
                valorant-shorty-profile-icon.png
                valorant-vandal-profile-icon.png
                valorant.png
                Vandal.png


## Collaborate
Sacha VOLERY
Matteo DA-CUNHA
Julian PEREZ

## License
https://www.php.net/license/index.php
https://xdebug.org/license
https://www.mysql.com/about/legal/

## Contact
sacha.volery@cpnv.ch
matteo.da-cunha@cpnv.ch
julian.perez@cpnv.ch
