##### Creación de una arquitectura Master - Slave

La eficiencia es:

Lectura a disco / Lectura a RAM

Lectura a disco
Lectura a RAM

Mostrar variables de Status:
	SHOW STATUS LIKE “%SLOW%” 
	SHOW STATUS LIKE “%READ%” 

'key_burrfer_size' es para el uso de memoria para el uso de índices.

Tiene que aumentar la lectura de índices a RAM y disminuir la lectura de índices a disco.

Para guardar las variables Status antes de reiniciar, ya que al reiniciar las variables cambian:

	show status > status.sql


#### MASTER

Cuando creamos un master para escritura se crea un binlog

#### SLAVE
Le diremos quién es su master
Su posición que es el momento en el que se sincroniza, ya que sino habría que sincronizar todo el binlog
Usuario slave
Un slave puede estar conectado a varios master según la arquitectura que necesitemos según si hay más lecturas o escrituras.

#### Creación de un Master

	mysql> CREATE USER 'repl'@'%.mydomain.com' IDENTIFIED BY 'slavepass';
	mysql> GRANT REPLICATION SLAVE ON *.* TO 'repl'@'%.mydomain.com';

y copiar en my.ini esta parte de my-large.ini  en la parte de [mysqld]. Y podemos modificar el server-id si queremos tener más MASTERS.

	# Replication Master Server (default)
	# binary logging is required for replication
	log-bin=mysql-bin
	
	# binary logging format - mixed recommended
	binlog_format=mixed
	
	# required unique id between 1 and 2^32 - 1
	# defaults to 1 if master-host is not set
	# but will not function as a master if omitted
	server-id	= 1

Para ver el status del MASTER
	show master status;

Blooqueamos las trablas para escritura
	flush tables with read lock;

Generamos el dump de la base de datos (crud es la base de datos):
	mysqldump -u root -p crud > crud.sql

Desbloqueamos las tablas
	msql> unlock tables;
	
#### Creación de un Slave

Creamos primero la base de datos a replicar:
	create database crud;

Cargamos el dump de la base de datos que ha hecho el MASTER
	mysql -u root -p crud < crud.sql

El id de los slaves no son obligatorios

Ejecutamos el la consola de MySQL:

	CHANGE MASTER TO MASTER_HOST='192.168.2.6', MASTER_PORT=3306,
	MASTER_USER='slaveme', MASTER_PASSWORD='1234';

Modificamos el my.ini en la parte de servidor [mysqld]
'''
	# Replication Master Server (default)
	# binary logging is required for replication
	log-bin=mysql-bin
	
	# binary logging format - mixed recommended
	binlog_format=mixed
	
	# required unique id between 1 and 2^32 - 1
	# defaults to 1 if master-host is not set
	# but will not function as a master if omitted
	#server-id	= 1
'''

Y comenzamos el slave:
	mysql> Start slave;

Mostramos el status del slave:
	show slave status \G; (\G es para visualizarlo bin)

Mostrar los procesos
	show processlist \G;
