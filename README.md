# old_not_dead
Some good ole php lurnin

# Setting up Dev Env

1. Make sure to install XAMPP 
2. Install composer located at https://getcomposer.org/ and follow the directions. On windows its easiest to run the exe.
3. Make sure laravel sample app is created
4. Add the following edit to bootstrap > app.php --> `$app->useStoragePath("/kode/storage");`
   1. Under that directory add the following folder structure
   2. storage > logs
   3. storage > framework
      1. storage > framework > cache
      2. storage > framework > sessions
      3. storage > framework > views
5. Finally run the command `chmod 777 -R /kode/storage`
6. VS Code Extensions "PHP Intelephense"

# Configure Laravel
1. If the .htaccess file is not working you might need to run `sudo a2enmod rewrite` on the apache server.
   1. You will know its not working if you cant get to routes without index.php in the route name....eg...localhost/index.php/mycoolroute
2. Update apache VHost to point to app directory. Host config located at /etc/apache2/sites-available