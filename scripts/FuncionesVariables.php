<?php
/**
* Defino dos funciones
*/
function uno(){
   echo "función uno";
}
 
function dos(){
   echo "función dos";
}
 
/**
* Defino una clase para utilizarla como ejemplo
*/
class Prueba{
   function Prueba(){}
   function metodo1(){
      echo "Prueba.metodo1";
   }
   function metodo2(){
      echo "Prueba.metodo2";
   }
}
 
/**
* Ejemplo de llamada dinámica a una función
*/
$fname = 'uno';
$fname();
 
/**
* Ejemplo de llamada dinámica a un método de un objeto
*/
$mname = 'metodo1';
$prueba =& new Prueba();
$prueba->$mname();