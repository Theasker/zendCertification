#### Trait
Para la reutilización de código. Es la implementación de multiherencia para php, ya que en php **no existe multiherencia**.

http://www.forosdelweb.com/f68/nuevos-traits-php-5-4-0-a-942486/


1. **contruct:**
2. **get/set:**
3. **AwareInterface:**
4. **Factory:** Los servicios que usa la Factory se pueden cachear, por lo que aumenta la eficiencia.
	* **Inyección de dependencias:** Control de que existe una clase antes de instanciar otra, es decir, depende de otra clase. (http://akrabat.com/wp-content/uploads/2014-10-28-zc-di-in-zf2.pdf)
	* **Service Manager**

#### API RESTful
Suele implementarse en json.

 * /user/index -> GET
 * /user/select -> GET[id]
 * /user/insert -> POST
 * /user/update -> PUT
 * /user/delete -> DELETE

#### SOAP (XML)
Se puede validar contra el XML.

#### Web Service

Referencias
http://jsonlint.com/
http://stateless.co/hal_specification.html
http://phlyrestfully.readthedocs.org/en/latest/halprimer.html


#### php Zend Framework
Seguimos el tutorial: 
http://framework.zend.com/manual/current/en/user-guide/overview.html

Primero instalo el composer
	php -r "readfile('https://getcomposer.org/installer');" | php

Luego instalo el PHP Zend Framework 2
	php composer.phar create-project --stability="dev" zendframework/skeleton-application directorio

Pegamos en index.php
	// Decline static file requests back to the PHP built-in webserver
	if ($_SERVER['APPLICATION_ENV'] == 'development') {
	     error_reporting(E_ALL);
	     ini_set("display_errors", 1);
	 }

Sale un notice y hay que modificar el fichero .htaccess
	SetEnv APPLICATION_ENV development

Generamos la estructura
zf2-tutorial/
     /module
         /Album
             /config
             /src
                 /Album
                     /Controller
                     /Form
                     /Model
             /view
                 /album
                     /album
                     



Peli: Taxi Driver