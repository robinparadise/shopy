### Examen de Shopy

---

# **Examen de Shopy**

---

**Instrucciones:**
- Este examen consta de varias tareas relacionadas con la creación de un sitio web llamado Shopy.
- Lee cuidadosamente cada tarea y sigue las instrucciones proporcionadas.
- Puedes utilizar HTML, CSS, JavaScript y PHP para completar el examen.
- Se te evaluará tanto por la precisión como por la calidad de tu código.
- Envía el proyecto en un Zip (con tu nombre) al correo:
  - rgiles@metrodoraeducation.com
  - robinchogiles@gmail.com
- ¡Buena suerte!

---

**Configuración:** Configuración de la base de datos

Crea la base de datos `shopy` con una tabla `products` que tenga los siguientes campos:
- id (int)
- title (varchar)
- category (varchar)
- description (text)
- image (varchar)

Asegúrate de que la función `populateData();` en `config.php` esté descomentada para añadir datos a la base de datos. Luego, recuerda volver a comentarla. Además, asegúrate de introducir tu usuario y contraseña de MySQL en `config.php`.

---

**Tarea 1 (3 puntos):** Página de inicio.

La página principal (`index.php`) debe contener:

- Una card de Bootstrap que muestre el título, la categoría y la imagen de un artículo de la tabla `products`.
- La card debe de ser responsive y mostrar la imagen en la parte superior, el título centrado y la categoría en la parte inferior también centrado.
- Intenta que la card tenga al menos unos 500px de ancho, y en mobile se vea correctamente.
- Añade un botón "Ver todos los productos" que lleve a la página de productos `products.php`.


**Tarea 2 (3 puntos):** Página de productos.


Crea una página llamada `products.php` que utilice un grid con cards de Bootstrap para mostrar los artículos de la tabla `products`. Cada card debe mostrar el título, la categoría y la imagen del artículo.

Usa la función `getProducts` en `db.php` para obtener los datos de la tabla `products` y mostrarlos en la página principal.

Se valorará:
- La capacidad de hacer el grid responsive.
- El uso de componentes de Bootstrap para el diseño.
- Guarda en `/components` los componentes que se repiten en las páginas. Usa los componentes `card.php`, `grid.php`
- Recomendación: Al menos 3 productos por fila en desktop y 1 en mobile.

---

**Tarea 3 (2 puntos):** Navbar

Crea un navbar (`navbar.php`) con un logo y un menú de navegación con las siguientes opciones:
- Logo
- Products

---

**Tarea 4 (3 puntos):** Modal

Crea un modal que se abra al hacer clic en una card de la página de productos.

- El modal debe de mostrar en orden: el título, la categoría y la imagen del artículo.
- Además añade el precio fijo de 10€. Usa un badge (color verde) de Bootstrap para ello: https://getbootstrap.com/docs/5.0/components/badge/#background-colors

---


**Puntuación total: 10 puntos**

¡Buena suerte!
