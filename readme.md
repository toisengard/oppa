**Base Installation**

1. Clone Base to xampp/htdocs folder (var/www/html for Linux , /Library/WebServer/Documents/ for mac).

2. Change wp-base and wp-base/wp-content/themes/wp-base folder names to *your project name*. Change Theme name in wp-base/wp-content/themes/wp-base/style.css
 
3. Create base and upload sql/wp-base.sql file.

4. Create wp-config file (copy wp-config-sample.php) and update database variables

5. Change siteurl and home rows in wp_options table. (http://localhost/wp-base to http://localhost/*your project name*);

6. Change webpack.config.js

```
let assetsDirectory    = './wp-content/themes/wp-base/assets' 
```
to
```
let assetsDirectory    = './wp-content/themes/*your project name*/assets' 
```

7. Change composer.json

```
			"Library\\":"wp-content/themes/wp-base/app/library/",
			"Helper\\":"wp-content/themes/wp-base/app/helper/"
```
to
```
			"Library\\":"wp-content/themes/*your project name*/app/library/",
			"Helper\\":"wp-content/themes/*your project name*/app/helper/"
```

8. Create .htaccess file (copy .htaccess-example file)

9. Change all wp-base occurrences to *your project name* in .htaccess file

10. run  !!Check npm compatibility with webpack 3.10.0!! 
```
npm install.
```
11. run 
```
composer dump-autoload
```

12. install webpack globally (if already installed skip this step) 

```
npm install webpack@^3.10.0 -g
```

13. run webpack

14. Log in to localhost/*your project name*/wp-admin  
    User        :    super-admin
    Password    :    super-admin-2018
    
15. Get to Appearance -> Themes. Activate your Theme  