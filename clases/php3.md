implode();
explode();

#### Patrón de diseño MVC (Model View Controller)

 * **Vista:** Lo que muestra
 * **modelo:** (lo que interactua)Acceso a datos, envio de datos,
 * **Controller:** Cerebro de la aplicaión

### Estructura de directorios

├── configs
├── data
├── docs
├── modules (**aplicación**)
│   └── Application
│       ├── config
│       ├── src
│       │   └── Application
│       │       ├── Controller
│       │       ├── Forms
│       │       └── Model
│       │           └── Interface
│       └── views
└── public
    ├── assets
    │   ├── flas
    │   ├── imgs
    │   ├── mp3s
    │   └── pdfs
    ├── css
    └── js


	


Los CSS y js tienen que estar accesibles desde el directorio public.

En public > vendor está todo lo que está en nuestro proyecto pero no es nuestro (módulos de terceros).

docs -> Se versiona

data -> (No se versiona) logs, cache, dump, datos de inicio del proyecto, etc,
configs -> Configuración general de la aplicacion, conexión de la base de datos, .



Factory - Patrón de diseño

Virtual Hosts

host
127.0.0.1 localhost
127.0.0.1 proyecto2.local

httpd-vhosts.conf
		<VirtualHost *:80>
		    ServerAdmin theasker@gmail.com
		    DocumentRoot "C:\www"
		    ServerName localhost
		    ServerAlias localhost
		    ErrorLog "C:\Program Files (x86)\Zend\Apache2\logs/localhost-error_log"
		    CustomLog "C:\Program Files (x86)\Zend\Apache2\logs/locahost-access_log" common
			<Directory "C:\www">
			    Options Indexes FollowSymLinks
			    AllowOverride all
			    Order allow,deny
			    Allow from all
			</Directory>
		</VirtualHost>
		
		<VirtualHost *:80>
		    ServerAdmin theasker@gmail.com
		    DocumentRoot "C:\www\proyecto2\public"
		    ServerName proyecto2.local
		    ServerAlias proyecto2.local
		    ErrorLog "C:\Program Files (x86)\Zend\Apache2\logs/proyecto2-error_log"
		    CustomLog "C:\Program Files (x86)\Zend\Apache2\logs/proyecto2-access_log" common
			<Directory "C:\www\proyecto2\public">
			    Options Indexes FollowSymLinks
			    AllowOverride all
			    Order allow,deny
			    Allow from all
			</Directory>
		</VirtualHost>