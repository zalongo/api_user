<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## La aplicación

<p>Gestiona una pequeño crud de usuario, pudiéndose consumir los recursos como una api.</p>

<br/><br/>

## Solución

<p>La creación de la base de datos ser realizó mediante migraciones.</p>
<p>Para la gestión del token se utilizó Sanctum</p>
<p>En la carpeta /SCRIPTS/BDD se encuentra el archivo api_user.sql el cual permite crear y cargar la data en la base de datos. De todos modos, se puede implementar la base de datos con toda la info cargada mediante migrations y seeders con el comando:<br>
<code>php artisan migrate --seed</code>
</p>

<br/><br/>

## Instalación

<p>La instalación es la misma que para cualquier proyecto de Laravel.</p>
<p>Primero es necesario crear una base de datos MySql llamada "api_user"</p>
<p>Posteriormente se deben ejecutar las siguientes líneas  de comando:</p>
<ul>
	<li><code>git clone https://github.com/zalongo/api_user.git</code></li>
	<li><code>cd api_user</code></li>
	<li><code>composer install</code></li>
	<li><code>cp .env.example .env</code></li>
	<li><code>php artisan key:generate</code></li>
	<li>(En el caso de no haber cargado el archivo sql) <code>php artisan migrate --seed</code></li>
</ul>

<br/><br/>

## Comentarios

<p>En la carpeta /SCRIPTS/REQUESTS se encuentra el archivo que permiten realizar las consultas a los distintos endpoints. Este archivo funciona con el plugin "REST Client" por Huachao Mao para VSCode.</p>

<br/><br/>

## End Points

<dl>
	<dt>Login</dt>
	<dd><code>POST /api/auth/login</code></dd>
	<dt>Params</dt>
	<dd>{"email": "patana@gmail.com", "password": "password"}</dd>
	<dt>Return</dt>
	<dd>Token</dd>
</dl>
<hr>

<dl>
	<dt>Logout</dt>
	<dd><code>POST /api/auth/logout</code></dd>
	<dt>Params</dt>
	<dd>Authorization: Bearer xxxtokenxxx</dd>
	<dt>Return</dt>
	<dd>Confirmation Message</dd>
</dl>
<hr>

<dl>
	<dt>Get Users</dt>
	<dd><code>GET /api/user</code></dd>
	<dt>Params</dt>
	<dd>Authorization: Bearer xxxtokenxxx</dd>
	<dt>Return</dt>
	<dd>All Users</dd>
</dl>
<hr>

<dl>
	<dt>Show User</dt>
	<dd><code>GET /api/user/{user_id}</code></dd>
	<dt>Params</dt>
	<dd>Authorization: Bearer xxxtokenxxx</dd>
	<dt>Return</dt>
	<dd>User Data</dd>
</dl>
<hr>

<dl>
	<dt>Store User</dt>
	<dd><code>POST /api/user</code></dd>
	<dt>Params</dt>
	<dd>
		Authorization: Bearer xxxtokenxxx<br>
		{
			"name": "Juan Carlos Bodoque",
			"email": "jbodoque@gmail.com",
			"password": "password",
			"password_confirmation": "password"
		}
	</dd>
	<dt>Return</dt>
	<dd>Confirmation Message & Client Data</dd>
</dl>
<hr>

<dl>
	<dt>Update Client</dt>
	<dd><code>PUT /api/user/{user_id}</code></dd>
	<dt>Params</dt>
	<dd>
		Authorization: Bearer xxxtokenxxx<br>
		{
			"name": "Tulio Triviño",
			"email": "ttrivino@gmail.com",
			"password": "12345678",
			"password_confirmation": "12345678"
		}
	</dd>
	<dt>Return</dt>
	<dd>Confirmation Message & Client Data</dd>
</dl>
<hr>

<dl>
	<dt>Delete User</dt>
	<dd><code>DELETE /api/user/{user_id}</code></dd>
	<dt>Params</dt>
	<dd>
		Authorization: Bearer xxxtokenxxx
	</dd>
	<dt>Return</dt>
	<dd>Confirmation Message</dd>
</dl>
<hr>
