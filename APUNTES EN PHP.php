
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Apuntes EN PHP</title>
	<meta name="keywords" content="curso, responsive, html5, css3">
	<meta name="author" content="josè luis Tineo">

	<!--Viewport para dispositivos mòviles-->
	<meta name="viewport" content="width=device-width", initial-scale=1.0">
	<link  href='https://fonts.googleapis.com/css?family=Roboto' rel="stylesheet" type="text/css">
	<link rel="stylesheet"  href="Formulario/estilos.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">
   	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen">
	<link rel="icon"  href="favicon.ico">
		
</head>
<body>

<!-- Items el menú -->

<ul class=" main-menu main-nav">
	<li class="menu-item"><a class="menu-link" href="#">Home</a></li>
	<li class="menu-item"><a class="menu-link" href="#item1">ITEM 1</a></li>
	<li class="menu-item"><a class="menu-link" href="#item2">ITEM 2</a></li>
	<li class="menu-item"><a class="menu-link" href="#item3">ITEM 3</a></li>
	<li class="menu-item"><a class="menu-link" href="#item4">ITEM 4</a></li>
	<li class="menu-item"><a class="menu-link" href="#item5">ITEM 5</a></li>
	<li class="menu-item"><a class="menu-link" href="#item6">Sesiones</a></li>
	<li class="menu-item"><a class="menu-link" href="#item7">Cookies</a></li>
	<li class="menu-item"><a class="menu-link" href="#item8">ITEM 8</a></li>
	<li class="menu-item"><a class="menu-link" href="#item9">ITEM 9</a></li>
	<li class="menu-item"><a class="menu-link" href="#item10">ITEM 10</a></li>
	<li class="menu-item"><a class="menu-link" href="#item11">ITEM 11</a></li>
	<li class="menu-item"><a class="menu-link" href="#item12">ITEM 12</a></li>
	<li class="menu-item"><a class="menu-link" href="#item13">ITEM 13</a></li>
	<li class="menu-item"><a class="menu-link" href="#item14">ITEM 14</a></li>
	<li class="menu-item"><a class="menu-link" href="#item15">ITEM 15</a></li>
</ul>

         <!--Sliders-->
		<section id="slideshow">
		<div id="slider">
		<div class="slide"> <img src="image/slideshow/slide1.png"  alt="PHP"></div>
		

		<!--fin del slider-->
		</section> 

		<!--Fin del slideshow-->
<!--teoría de sesiones-->
<main class="main">
<section id="item6">
<article>
<h2 class="sesion">SESIONES</h2>
<h3>¿ Qué son ?</h3>
Compliquemos el tema un poco, aunque veras que no es nada que te funda el cerebro, presta atención y lee 2 veces el tema como minimo. Una sesión es el período de tiempo que un usuario permanece en un sitio web, desde el instante que ingresa hasta que sale de ese sitio. La sesión continúa mientras el usuario navega de página en página, para administrar esas sesiones usamos:<br>
cookies HTTP : <b>$_COOKIE</b><br>
variables de Sesion : <b>$_SESSION</b> <br>Una sesión es un archivo que se almacena en el servidor de cada una de las personas que se conectan
en su sitio Web. Se destruye automáticamente cuando la persona abandona el sitio Web. $_SESSION es una tabla asociativa que permite almacenar cualquier valor de cada usuario. Esta tabla
es válida en todas las páginas PHP del sitio Web y permite pasar variables de una página a otra. Tenga
cuidado con no abusar de ella, porque si se conecta mucha gente en su sitio Web puede llenar la
memoria del servidor Web.
Antes de utilizar $_SESSION, es imprescindible reiniciar la sesión o llamar a una sesión existente en
cada página donde quiera utilizar $_SESSION. Esto se denomina session_start();.
La función session_destroy() sirve para destruir la sesión actual. Tenga cuidado porque esta función
no destruye las variables de la sesión asociadas a la sesión actual. Debe utilizar también
la función unset($_SESSION). La sesión se destruirá automáticamente cuando el usuario cierre la
ventana de su navegador.Puede utilizar la función session_status(), que devuelve 0 si se desactivan las sesiones, 1 si se
activan, pero sin guardar ninguna aquí, y 2 si se activan las sesiones, siempre y cuando se guarde al
menos una de ellas.La sesión permite conservar datos asociados a un usuario a través de diferentes accesos de éste a un mismo sitio web, las sesiones son necesarias porque HTTP es un protocolo sin estados y por tanto no tiene forma de almacenar datos de un usuario particular entre diferentes peticiones.
<h3>Administración de sesiones</h3>
Si en una App web tuviéramos muchos clientes, que acceden a la aplicación al mismo tiempo, haciendo solicitudes particulares y enviando datos propios, como HTTP no guarda los estados, el servidor no puede determinar en un momento dado quién hizo tal solicitud o tal envío de datos. Por ello cada cliente debe presentarse a si mismo, antes de hacer la solicitud al servidor y debemos llevar el control de los usuarios a partir de esa identificación. Esto se conoce como "Administración de Sesión".
<br>
 <br><b>IMPORTANTE :</b> Las sesiones en casi todas las tecnologías se implementan con las cookies. Recuerda que las sesiones las establece el servidor asignando un ID automáticamete para cada usuario y se almacenará en una cookie o como parámetro URL, generalmente es con una cookie ya que con la URL se establece un delay o retardo de procesamiento. El nombre por defecto de la cookie será PHPSESSID y en otras tecnologías se puede llamar JSESSIONID o ASPSESSIONID. <br>
Cada usuario tiene un ID PHPSESSIONID único para identificarlo en las siguientes sesiones. Ejemplo : <br><br>

	

		
		

<br>
Las sesiones expiran y cambian con el tiempo de ejecución. Ojo las sesiones son riesgosas, pueden ser secuestradas o usurpadas. en XAMMP se almacenan en la carpeta tmp como ficheros, en el servidor se almacenan como ficheros pero en Bases de datos
<br>
<h2>Comprobación de sesiones</h2>
La sesión permite almacenar un objeto en la memoria hasta que el usuario se conecte a su sitio Web. Es
el caso, por ejemplo, de un sitio Web que contiene una página que permite iniciar sesión antes de
acceder a otras páginas de su sitio Web, que son: pagina1.php, pagina2.php...
Compruebe en su página de inicio que la persona existe en la base de datos antes de dirigirse a la
pagina1.php. Nada impide que la persona escriba directamente http://www.misitio.es/pagina1.php para
acceder de forma inmediata a esta página sin tener que identificarse. Esta persona debe conocer el
nombre de la página PHP, pero algunas veces los nombres de estas páginas son muy concretos:
login.php, mostrar.php, forum.php.
Para solucionar este problema, utilice las sesiones. Cuando una persona se identifique, almacene en la
sesión su identificador y compruebe que la sesión se reconoce en cada página de su sitio Web.
De este modo, se mostrará en todas las páginas PHP de su sitio Web (salvo la página de conexión, que
utiliza el identificador de la sesión)
Ejemplo: 


Las sesiones tienen más segurida que las cookies, las cookies duran más que las sesiones. La duración de la sesión depende del servidor en donde nosotros vayamos a subir los scripts.
Las sesiones son más seguras cuando la abrimos en el server, busca las cookies existentes en nuestro navegador, la sesión es un archivo en el servidor web, no en el browser como las cookies, cuando tenemos varios usuarios accediendo al server, necesitamos varias sesiones a la vez, se crear varios archivos para poder ubicar esos archivos, según cada usuario tiene que haber una relación entre el usuario final y el archivo que estamos creando de sesión . En el server web usamos ua cookie. Ojo las sesiones se crean antes el HTML, mientras la sesión dure puedo navegar entre página y página y las variables siguen teniendo validez sólo en el script actual, pero si navego hacia otras páginas no tendrá validez.


LOs valores se almacenan en pares "nombre = valor", delimitados por (;)
se pueden crear nombres de variables y asignarles valores
<h2><b>variables de Sesion :</b></h2>
en PHP éstas variables se guardan en el array asociativo, <b>$_SESSION</b>
</article>
<article id="item7">
	<h2 class="sesion">COOKIES</h2>
	<h3>¿ Qué son ?</h3><br>
	Las cookies provienen de "Magic cookies" son datos que el navegador almacena cuando visitamos la web, ni son software ni fragmentos de codigo, no llevan incorporados virus etc. Aunque se pueden utilizar  para rastrear usuarios en la red, las desarrollo en 1994 NETSCAPE, su primer uso fue para carrito de compras virtual, las cookies de seguimiento permiten crear campañas publicitarias. Las cookies son simples archivos de texto plano (sin formato, sin ninguna
decoración), creados por el navegador del usuario en su propia
computadora, en el momento en que un servidor Web se lo solicita.<br><br>
<h3>Usos de las Cookies</h3><br>
Algunos usos posibles: el servidor puede almacenar el nombre del usuario para saludarlo
cada vez que entre a una página de ese sitio; memorizar los productos que lleva elegidos
de un carrito de compras hasta que complete la operación de compra; recordar el idioma
preferido por el usuario para navegar por ese sitio; o la fecha de su última visita. Y muchísimos
otros usos más. La forma en que un servidor Web (típicamente Apache, el servidor Web instalado en la
mayoría de los hostings) le ordenará al navegador del usuario (Firefox, Explorer, Opera, etc.)
que cree alguno de esos archivos de texto denominados cookies, estará totalmente bajo
nuestro control, ya que será nuestro propio código PHP el que le ordenará al servidor Web
que éste, a su vez, le solicite al navegador la creación de la cookie y, una vez creada, otro
código PHP será capaz de solicitar que se almacenen datos dentro de ese archivo, o que se
lean los que allí fueron guardados.
La manera en que estos archivos de texto se crean en el disco rígido del usuario no
debe preocuparnos: de eso se encarga el navegador del usuario, luego de que ejecutemos
la instrucción de PHP. ATENCIÓN: esta comodidad de “que lo haga todo el navegador” es también un arma
de doble flo, porque así como el navegador nos simplifca el trabajo, también puede impedirnos por completo utilizar cookies, si el usuario ha confgurado a su navegador para
que no permita crearlas. Por lo cual, cuando usemos cookies, en la medida de lo posible,
deberíamos tener un plan B alternativo (por ejemplo, plantearnos si no sería mejor usar
sesiones) para no dejar afuera a quien tenga desactivada esta posibilidad en su navegador. Por ejemplo, podríamos memorizar si un usuario ya visitó un producto o una categoría
de productos de un catálogo. Si gracias a una cookie detectamos que visitó el producto
“Mesa de ping pong”, entonces podríamos mostrarle una publicidad de “Paletas de ping
pong”, o de “Clases de ping pong a domicilio”. Contenido a medida...
Otro uso interesante sería detectar cuáles de nuestros visitantes ya ingresaron anteriormente
a una página de un formulario de inscripción o de contacto, pero sin usarlo (el haberlo
usado hubiese cargado en una cookie un valor especial al llegar a la página de recepción del
formulario), y mostrarles un contenido especial que los “anime” a completar la consulta o la
inscripción que no se decidieron a concretar en su anterior visita.
Del mismo modo, en un sitio que venda algún producto (ecommerce) mediante un
carrito de compras, podríamos detectar si alguien está usando la cookie (es decir, si ya eligió
productos, o sea, se interesa por alguno de ellos), pero no fnalizó la compra, y mostrarle un
texto específco (igual que en el caso anterior, en la página de fnalización de compra deberíamos
modifcar o borrar la cookie anterior del carrito, para que ya no se le muestre ese texto).
Y, complementariamente, si alguien “sí” compró un producto o servicio, al momento de
la compra, podríamos almacenarle una cookie para que en cierta cantidad de días más tarde
(que dependerá de la duración del producto vendido), al entrar a nuestro sitio, le recordemos
que se está por acabar su producto y que es el momento de que lo compre nuevamente.
En sitios que publican contenidos con cierta frecuencia (diaria, semanal, mensual) podríamos
guardar la fecha de la última visita del usuario a nuestro sitio y, calculando la diferencia
entre la fecha actual y la última visita, mostrarle un cartel de “¡Contenido Nuevo!” en
los enlaces que apunten hacia contenidos publicados luego de su última visita (muy pronto
aprenderemos a manejar funciones para cálculos con fechas que nos permitirán hacer este
tipo de cosas).
Realmente son muchísimas las aplicaciones que se nos pueden ocurrir mediante el uso
de cookies. Pero, siempre dentro del tema de identifcación del usuario, es posible ir un nivel
más allá, y comenzar a trabajar con sesiones. <br><br>
<h3>Almacenar variables en cookies</h3><br>
En una cookie se pueden almacenar muy pocos datos (hasta un máximo de 4093 caracteres
por cada cookie), y sólo es posible almacenar hasta 20 cookies por dominio (esto es importante
tenerlo presente por si en distintas secciones de nuestro sitio hacemos uso de cookies),
y un navegador sólo puede almacenar hasta 300 cookies en total, compartidas entre todos
los sitios que ese usuario visita (de lo contrario, el navegador empezará a eliminar las cookies
más antiguas, lo que constituye la razón de que algunos sitios que usan cookies para recordar
nuestros datos, nos vuelvan a pedir una y otra vez que nos identifquemos, periódicamente:
es porque su cookie fue borrada, desplazada por otras cookies más nuevas de otros sitios
que fuimos visitando).
Debido a esa “escasez” de recursos de las cookies, es muy común almacenar únicamente
un código en la cookie, para que identifque a ese usuario en ese navegador en esa
computadora, y el resto de los datos asociados se almacena en el servidor (en el hosting,
generalmente en bases de datos).
Un antiguo mito (más de diez años, ¡una eternidad en la historia de la Web!) genera toda
clase de rumores en torno a las cookies: se dice que revelan nuestros datos privados, que
espían nuestra computadora, y muchas otras fantasías, causadas por el desconocimiento de
sus verdaderos límites.
La única capacidad real de una cookie es la de almacenar algunos pocos datos en
variables, que luego podremos utilizar cuando, desde la misma máquina y usando el mismo
navegador, ese usuario ingrese nuevamente a nuestra página Web. Este detalle casi trivial
merece ser recalcado: no es el usuario en sí, y ni siquiera es la computadora del usuario la
que queda identifcada, sino apenas el navegador que se utilizó; si desde la misma computadora
ingresara al mismo sitio Web el hermano o el compañero de trabajo de nuestro usuario
utilizando el mismo navegador, lo confundiríamos con nuestro usuario. Y, por el contrario, si
el mismo usuario ingresara usando otro navegador, o desde otra computadora, no lo reconoceremos...
Y algo más: solamente se puede leer la cookie desde el dominio que la creó,
así que de “espionaje”, poco y nada. Salvo en casos demasiado sofsticados, que sólo son
posibles para grandes empresas de publicidad online, que hospedan sus banners en un mismo
dominio pero los publican en distintos sitios y, de esta manera, detectan el código de su
cookie a lo largo de varios sitios, y pueden llevar estadísticas del perfl de visitas de un usuario:
si visitó tal diario, y luego tal otro sitio de remates, etc. Pero eso únicamente crea perfles para
mostrar publicidades afnes al usuario, y no datos individualizables con nombre y apellido
(salvo excepciones que, como las brujas, no existen, pero “que las hay, las hay...” aunque
requieren que alguno de los sitios de la cadena comparta sus bases de datos, algo que entra
en el terreno de lo legal más que de la programación).
Existen algunas consideraciones a tener en cuenta antes de pasar al código. Las
cookies se generan a través de una orden que debe llegar al navegador del usuario antes
de que éste procese el código HTML que nos hará ver una página en nuestra pantalla. Para
lograr esto, la orden para la creación de la cookie debe viajar en el header o encabezado de la petición HTTP que nos trae el archivo HTML, desde el servidor hacia el navegador; por lo
que la ejecución de la función que crea un archivo de cookies debe ser anterior a cualquier
código HTML o a cualquier echo de PHP que haya en la página (igual que con las sesiones,
como veremos pronto), para que llegue dentro de los encabezados de la petición HTTP.
En PHP las cookies son datos que se pasan en el encabezado HTTP header, se almacenan en la PC del cliente en forma de archivo de texto. Sus valores son en formato ASCII y no aceptan datos binarios . Un archivo cookie contiene:

	<li>Nombre de dominio del server que creo la cookie
	</li>
	<li>ruta donde ésta se almacena</li>
	<li>Nombre de la cookie</li>
	<li>Tiempo de vida de la cookie o su expiración</li>
	<li>valor de la cookie</li>
	<li>Marca de sólo conexion segura</li><br>
	<h2>Método para acceder a cookies</h2>
	setcookie("nombre","Juancito") // define modifica o envía<br>
	La función setcookie, incluida en el lenguaje PHP,
recibe como primer “argumento” (primera cosa dentro de sus paréntesis) el nombre de la
variable que se almacenará en la cookie y, como segundo argumento (separado por una
coma del argumento anterior), el dato que desea almacenarse dentro de esa variable, que el
navegador guardará en un archivo de texto dentro de la computadora del usuario: La función setcookie permite especifcar varios otros argumentos dentro de sus paréntesis,
pero son todos opcionales: setcookie (nombre, valor, duración, ruta, dominio, seguridad)
	$_cookie[  ] // para acceder con arrays.<br>
	sintaxis : bool setcookie(string $name) //$name es argumento obligatorio.<br>
	OJO: el código PHP de las cookies debe estar al inicio, antes de DOCTYPE. Esto debido a que setcookie define una cabecera HTTP, en el fichero de configuración "php.ini" hay que modificar :<br>
	output_buffering = OFF , aunque eso incide en el rendimiento negativo de la web.<br>
	Para leer cookies usamos la variable SUPER GLOBAL disponoble en cualquier ámbito el código fuente llamada: <br>
	$_COOKIE ["nombre"]<br> Ejemplo de una cookie para mostrar hora y fecha <br><br>
<img src="image/cookie.jpg"><br> La salida de ese codigo en el navegador es:<br><br><br>
<img src="image/cookie_view.jpg"> <br>
Para ver la cookie abro la herramienta en Chrome developer tools y en resources
puedo ver sus valores actualizados. Pero si estoy en localhost al borrar la cookie con delete se borra la cookie automaticamente. Si apago el Apache como servidor local esta desaparece del resource, al prenderlo nuevamente veo que permanece, pero modifica la expiracion.<br> Nota: no podemos leer una cookie en el mismo momento en que ordenamos
crearla con la función setcookie, sino que recién a partir de la siguiente petición al
servidor, el valor de la cookie será enviado por el navegador hacia el servidor y allí podrá
utilizarse.<br>
<img src="image/browserCookie.jpg"> <br>
Si en php.ini modifico el valor de sesion_cookie_lifetime = 0 en segundos, al cerrar el browser los datos desaparecen. Si existe la sesión la ubico con la cookie, de no existir la sesión crea la cookie en el navegador y el archivo de sesion en el servidor.<br>
<h3>Borrar una variable o una cookie</h3><br>
No es lo mismo eliminar el archivo de cookie completamente del disco del usuario, que simplemente
vaciar el valor de alguna de sus variables.
La forma de vaciar el valor de una variable de una cookie es muy simple, y consiste en
defnirla tal como si la estuviéramos creando, pero sin especifcarle ningún valor: De todos los parámetros posibles que podemos proporcionar dentro de los paréntesis
al crear una cookie, el único obligatorio es el nombre de la variable y, en el caso de ser el
único que proporcionemos, produce el vaciamiento de los datos que hubiéramos almacenado
con anterioridad en esa variable. Con la misma lógica que en el caso de crear una cookie, si luego de ordenar borrar
una cookie, en el mismo código de la misma página que se está ejecutando en el servidor
intentamos leer esa cookie, ésta todavía existirá, ya que recién en la siguiente petición al
servidor dejará de estar disponible su dato. Complementariamente, si queremos eliminar del servidor inmediatamente una variable
de cookie ya leída, será necesario utilizar la función unset: Esto no solo vacía el valor de la variable, sino que elimina la variable misma.
En cambio, para eliminar por completo el archivo de la cookie del disco del usuario.Tengamos presente, entonces, que existen tres herramientas distintas para “eliminar”
datos relacionados con las cookies, pero que no son iguales:
1. Vaciar una variable de cookie sin eliminarla, con setcookie sin valor.
2. Eliminar del servidor una variable ya leída con unset.
3. Eliminar el archivo físico del disco del usuario con setcookie y fecha anterior.
será necesario utilizar un argumento extra de la función setcookie, que aprenderemos a
continuación.<br><br>
<h3>Argumentos opcionales en cookies</h3><br>
El único parámetro obligatorio es el nombre de la cookie o variable (que de ser usado
sin ningún otro dato, causa la eliminación de esa variable de la cookie, tal como hemos
aprendido recién).
Si al utilizar esta función deseamos saltear (omitir) alguno de los argumentos para luego
especifcar otro, igualmente debemos completar su posición con "" (nada, ni siquiera un
espacio, entre comillas), salvo en el caso de la duración o vencimiento, que debe completarse
con un 0, y salvo también el último de los argumentos, el de limitar la cookie que se transmitirá
sólo bajo una conexión https (segura), en el cual los valores posibles de ese argumento son
1 (se obliga a transmitirla por https) o 0 (no es necesario https). El cuarto argumento de la función que crea una cookie, la ruta, indica desde qué
directorio (carpeta) de un servidor se accederá a los datos de esa cookie, impidiendo la
lectura de sus datos a toda página PHP que no esté almacenada dentro de esa carpeta. 
</article>

</section>
</main>

	 
</body>
</html>
