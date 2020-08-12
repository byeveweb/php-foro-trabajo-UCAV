# MEMORIA DEL TRABAJO DE PHP CAMPUS SEAS


En este trabajo se presenta parte de las utilidades que básicas que puede tener un foro. 

# 1º Estructura de Base de Datos
	Principalmente son 3 tablas: usuarios, temas y posteados.
	Tabla Usuarios: La tabla “usuarios” gestiona la información de todos los usuarios del foro, incluido el administrador. Además de encriptar la contraseña para evitar inyecciones SQL.
 
Si observamos los campos la columna “user_type” corresponde a l tipo de usuario, siendo 1 el administrador y 0 usuarios convencionales.
El administrador tiene privilegios sobre BD, en todas la tablas, como eliminar, modificar o crear temas y post. Sin embargo el resto de usuarios tienen privilegios solo para editar, modificar o eliminar los comentarios o temas que hayan creado. Éste usuario es por defecto, cuando se registra desde la web. El usuario Admin es: eva@prueba1.com Pass: 123.
 
Tabla Temas: Esta tabla gestiona todos los temas volcados en el foro. En este caso como apunte particular, es que se contabiliza en esta tabla el número de post/comentarios que tiene dicho post en la columna “tema_npost”.
 
Tabla posteados: Es la tabla que gestiona los comentarios de cada tema. En este caso, la columna “post_tema” es la que recoge el  “tema_id” que es el que hace referencia a dicho tema.
 

# 2º Visualización del foro:
	El aspecto general página index.php podremos visualizar el navegador que es header, y la tabla temas y el footer.
 
Como se puede observar, una vez iniciado sesión se cambia el aspecto. El header facilitará la navegación, dando inclusive información del estado de tu sesión.  

Además, mostrará los botones de editar, eliminar y añadir.  Solo en caso de que haya sido el propio usuario el que haya realizado esos cambios, a excepción del administrador.
Lo mismo ocurre con la pantalla de post. Aquí en la siguiente imagen, se puede observar, que también se le ha añadido abajo un pequeño navegador de paginación para facilitar el uso del foro.
 
En caso de que no se haya iniciado sesión, no se visualizará los botones de responder, nuevo tema, editar y eliminar.

 
 
