<img src="/image.png" alt="">
<h1>
Movie Quotes
</h1>
<p>
Movie Quotes is website where you can see random movies with quotes and images.
website has admin panel where you can add movies or quotes, also edit or delete them.
</p>

<h2>Prerequisites</h2>
<ul>
<li>PHP@7.2 and up</li>
<li>MYSQL@8 and up</li>
<li>composer@2 and up</li>
<li>npm@6 and up</li>
</ul>

<h2>Tech Stack</h2>
<ul>
<li>
Laravel - back-end framework
</li>
<li>
Spatie Translatable - package fro translation
</li>
</ul>

<h2>Getting Started</h2>
1. First of all you need to clone movie-quotes from github:
git clone https://github.com/RedberryInternship/sabalap-movie-quotes.git
2. Next step requires you to run composer install in order to install all the dependencies.
composer install
3. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
npm install 
and also:
npm run dev
4. Now we need to set our env file. Go to the root of your project and execute this command.
cp .env.example .env

And now you should provide .env file all the necessary environment variables

after setting up .env file, execute:
php artisan config:cache

5.  Now execute in the root of you project following:
 php artisan key:generate
 Which generates auth key.

 Migration
 if you've completed getting started section, then migrating database if fairly simple process, just execute:
 php artisan migrate

 Development
You can run Laravel's built-in development server by executing:
php artisan serve
when working on JS you may run:
npm run dev

drawSql Database diagram
Link: https://drawsql.app/teams/redberry-24/diagrams/movie-quotes