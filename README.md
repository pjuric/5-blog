<h1>Blog App</h1>

<h2>Description</h2>

<p>This is classic Laravel blog application/system with functionalities such as: registration, login, user management, blog post creation and editing, category creation and editing, localization, image storing and optimization...</p>

<h2>Abstract:</h2>
<ul>
<li><b>Complex database structure </b> - demonstrated by applying concepts such as: normalization, Eloquent models & ORM, migrations, seeders, query builder, database relations...</li>
<li><b>Laravel packages for authorization and authentication </b> - the foundation of this application's login system is developed using Laravel's native authorization and authentication packages.</li>
<li><b>Use and implementation of the Bootstrap templating system </b> - the basic layout of the interface and menu (topbar and sidebar) is taken from <a href="https://startbootstrap.com/theme/sb-admin-2">SB Admin</a> free bootstrap template and adapted with certain modifications within the Laravel blade system.</li>
<li><b>Implementation of 3rd party JS libraries (<a href="https://ckeditor.com/">CkEditor</a>) </b> - this application also offers the ability to input and create posts through WYSIWYG editor such as ckEditor.
<li><b>Images/files storage, management and optimization</b> -  management of files such as images is demonstrated using various features. One of them is the <i>gd</i> php extension thanks to which every loaded user profile image is saved in 300x300 size. Additionally, deleting a user or changing a profile picture deletes the unused/old profile picture. In addition, deleting a post that contains images also deletes those same images from storage. For image storage is used Laravel's local storage feature.</li>
<li><b>User management </b> - every user has option to edit its account info. Aside from this, admin user has permissions of editing other blog users data. This includes, updating, deleting, assigning or removing admin rights...</li>
<li><b>Localization </b> - this blog app is fully localized on 3 different languages: English, German and Croatian. This does not include content localization (e.g. blog posts contents)</li>
</ul>

<h3>Prerequisites, versions and other notes:</h3>
<ul>
<li><b>PHP version:</b> 8.2</li>
<li><b>Laravel version:</b> 11</li>
<li><b>PHP extensions:</b> gd, fileinfo, mysqli</li>
<li>If the forms with image upload (eg registration form, account update...) do not work, it is likely due to the php configuration and the <i>max_upload_size</i> directive. So make sure that the image you upload is below the maximum allowed size or, alternatively, change this directive in your local php configuration.</li>
<li>If you use antivirus such as Avast, he may recognize some files as viruses (e.g. server.php) and move them to quarantine. This will crash your app so make sure you whitelist this project repo in your antivirus or disable it before setting up and running this blog locally.</li>
</ul>


<h2>Steps for local setup:</h2>

<ol>
<li>Clone repo:</li> <br>
<code>git clone https://github.com/pjuric/5-blog.git</code>

<br><li>Position inside root:</li><br>
<code>cd 5-blog</code>

<br><li>Create and customize the dotenv (<i>.env</i>) file, i.e. copy the content from the <i>.env.example</i> file and paste it into the newly created <i>.env</i> file. After that, adjust the parameters (such as <i>DB_XXX</i>, <i>APP_URL</i>) according to your local configuration and preferably with an empty database.</li>

<br><li>Install the necessary composer packages:</li> <br>
<code>composer install</code>

<br><li>Run migrations to create and update tables:</li> <br>
<code>php artisan migrate</code>

<br><li>[Optional] Run seeders, which will also create an admin user:</li> <br>
<code>php artisan db:seed</code><br><br>
<i>\*This creates an admin user with which you can log in with the following credentials:</i>

<ul>
<li><b>Email:</b> admin@email.com</li>
<li><b>Password:</b> password</li>
</ul>

<br><li>[Optional] Fill the database with randomly (faker) created 10 users, 20-30 posts and 4 categories:</li> <br>
<code>php artisan generate:sample-data</code><br>

<br><li>Create a symlink to store images to local storage:</li> <br>
<code>php artisan storage:link</code><br>

<br><li>Install npm packages:</li> <br>
<code>npm install</code><br>

<br><li>Run node server:</li> <br>
<code>npm run dev</code><br>

<br><li>Finally, run Laravel blog app:</li> <br>
<code>php artisan serve</code><br><br>
<i>...and, depending on local configuration and port availability, access it via http://127.0.0.1:8000</i>

</ol>

<br>
<br>

