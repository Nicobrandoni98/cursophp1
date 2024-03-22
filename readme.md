PHP (Hypertext Preprocessor = Preprosesador de hipertexto) es un lenguaje de scripting de uso general especialmente adecuado para el desarrollo web.

¿Como interactua una pag web con el backend?

Cliente y servidor: Toda nuestra aplicacion esta guardada en un servidor, el cual entrega una copia de la misma a cada cliente que la solicite.
Ademas, el servidor tambien se encarga de responder cada solicitud del usuario.
El servidor es la computadora que se encarga de guardar la pagina web y mantenerla accesible 24/7. 

Dominio: es nuestra direccion en internet.

Metodo GET: Este metodo permite solicitar informacion al servidor. Ejemplo, podemos pedirle una lista de productos en el caso de que estemos haciendo un E-Commerce.

Metodo POST: Este metodo permite guardar informacion. ejemplo, podemos recabar datos del usuario desde un formulario y mandarlos a nuestro servidor para procesarlos.
Podriamos guardarlos para armar una base de datos de usuarios o incluso un sistema de login.

Metodo PUT/PATCH: Estos metodos permiten actualizar informacion ya guardada.
La diferencia es que PUT reemplaza toda la informacion existente y PATCH solo reemplaza lo necesario.

Metodo DELETE: Este metodo lo usamos para eliminar un recurso del servidor. Por ejemplo, lo usamos si queremos eliminar un blogpost o un comentario.
Esto no significa que debamos eliminarlo necesariamente de nuestra base de datos, podemos hacer un "Soft delete"


<!-- IMPORTANTEEEEEEEEEE EN GIT HUB
NANO + (NOMBRE DEL ARCHIVO CON SU EXTENSION ) Y ME ABRE UN EDITOR DE CODIGO, CON CONTROL + O (GUARDO) Y CON CONTROL + X (SALGO DEL EDITOR) -->


USANDO PHP EN VSC:

SINTAXIS: SIEMPRE AL PRINCIPIO DE TODO TENEMOS QUE PONER "<?php" PARA EMPEZAR A CODEAR CON PHP Y AL FINAL PONEMOS LA ETIQUETA DE CIERRE "?>" AUNQUE NO SIEMPRE ES NECESARIOA.
Se usa la equiqueta de cierre cuando vamos a trabajar con PHP y otro lenguaje de programacion, si usamos solo php no hace falta la etiqueta de cierre.



Debugging: es cuando inspeccionamos el contenido de nuestro código o de una variable para verificar que valor tiene en algún punto de nuestro programa. Con respecto a los comentarios, son líneas de texto que podemos dejar en el código y que el lenguaje (PHP) va a ignorar cuando se ejecuten. 
Hay algunas formas para inspeccionar, las basicas son "var_dump()" y "print_r()"

Tipos de datos
En programación tenemos varios tipos de datos, los más conocidos son:

1- Numéricos:

-Integer: Número sin decimales.
-Float: Número con punto flotante o punto decimal. (ejemplo: 3.6 o 2.36)
-Double: Decimales con valores más precisos, con más decimales que float. (ejemplo pi = 3,141612312e)


2- Cadenas ded caracteres:

-Chart: Solo una letra o un simbolo. (tambien puede ser un numero del 0 al 9)
-String: Una cadena de caracteres.


3- Booleanos:

-Bool: Verdadero o falso (true o false).


4- Sin valor:
-Null: No hay valor.
-Undefined: Hay una variable pero no tiene ningun valor.


PHP tiene un tipado débil, no necesita que se defina de forma explicita el tipo de dato ya que lo deduce por si mismo.
PHP es capaz de convertir de un tipo a otro de forma automática. Por ejemplo si sumas un número con un string PHP evaluará ambos como números.


¿Que es casting? 

Casting es cuando forzamos que un tipo de dato se convierta en otro tipo de dato.


Que es la precedencia?
En pocas palabras, la precedencia de operadores es cuando el lenguaje nos dice qué operación pasará primero y qué operación pasará después de acuerdo al operador. Por ejemplo:

<?php
$operacion = 1 + 5 * 3;

¿Primero suma y luego multiplica? O ¿Primero multiplica y luego suma?

La respuesta es: primero multiplica y luego suma, por lo que nuestra variable $resultado valdrá 16. Esto es debido a que la multiplicación tiene mayor precedencia que la suma.