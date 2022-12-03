.env 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=movie_quotes
DB_USERNAME=saba
DB_PASSWORD=saba12345


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
<h3>1. First of all you need to clone movie-quotes from github:</h3>
<p>git clone https://github.com/RedberryInternship/sabalap-movie-quotes.git</p>
<h3>2. Next step requires you to run composer install in order to install all the dependencies.</h3>
<p>composer install</p>
<h3>3. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:</h3>
<p>npm install </p>
<p>and also:</p>
<p>npm run dev</p>
<h3>4. Now we need to set our env file. Go to the root of your project and execute this command.</h3>
<p>cp .env.example .env</p>

<h3>And now you should provide .env file all the necessary environment variables</h3>

<h3>after setting up .env file, execute:</h3>
<p>php artisan config:cache</p>

<h3>5. Now execute in the root of you project following:</h3>
 <p>php artisan key:generate</p>
 <p>Which generates auth key.</p>

 <h3>Migration</h3>
 <h3>if you've completed getting started section, then migrating database if fairly simple process, just execute:</h3>
 <p>php artisan migrate</p>

 <h1>Development</h1>
<h3>You can run Laravel's built-in development server by executing:</h3>
<p>php artisan serve</p>
<h3>when working on JS you may run:</h3>
<p>npm run dev</p>

<h3>drawSql Database diagram</h3>
<a href="https://drawsql.app/teams/redberry-24/diagrams/movie-quotes">
drasql Diagram
</a>