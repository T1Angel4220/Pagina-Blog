# 📝 BlogSphere - Plataforma Web de Gestión y Publicación de Blogs

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![PDO](https://img.shields.io/badge/Security-PDO%20Prepared%20Statements-4EBA6F?style=for-the-badge)](https://www.php.net/manual/es/book.pdo.php)
[![Frontend](https://img.shields.io/badge/Frontend-HTML5%20%7C%20CSS3%20%7C%20JS-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/)

---

## 📌 Descripción del Proyecto

**BlogSphere** es una aplicación web dinámica e interactiva desarrollada en **PHP y MySQL** que permite gestionar publicaciones, autores, comentarios y reacciones de usuarios. El proyecto cuenta con una arquitectura de dos niveles: un **portal público de lectura e interacción** para la comunidad y un **panel de control administrativo (CMS)** robusto para la creación y moderación de contenidos.

Diseñado con un enfoque modular, limpio y responsive, este proyecto demuestra habilidades de desarrollo web backend y frontend, modelado de bases de datos relacionales, autenticación de usuarios y prácticas de desarrollo seguro.

---

## 🚀 Funcionalidades Principales

### 👨‍💻 Portal de Usuarios y Lectores
* **Feed Dinámico de Publicaciones:** Visualización de posts organizados cronológicamente con imágenes de portada, autor, fecha y categorías.
* **Exploración por Categorías:** Filtros temáticos (*Naturaleza, Educación, Negocios, Viajes, Gaming, Deportes, Diseño, etc.*).
* **Búsqueda Avanzada:** Barra de búsqueda en tiempo real por palabras clave en títulos y contenidos.
* **Filtrado por Autores:** Acceso directo al perfil y publicaciones de cada creador de contenido.
* **Sistema de Reacciones (Likes):** Los usuarios registrados pueden dar "me gusta" a artículos y consultar su historial en un panel dedicado.
* **Sistema de Comentarios:** Hilo de discusión en cada artículo con moderación y gestión de comentarios propios.
* **Gestión de Perfil:** Registro de usuarios, inicio de sesión seguro y actualización de credenciales.

### 🛡️ Panel de Administración (CMS)
* **Dashboard Estadístico:** Métricas en tiempo real sobre número de posts publicados, borradores, comentarios totales, likes y administradores activos.
* **Gestión de Contenido (CRUD Completo):**
  * Redacción y edición de publicaciones con subida de imágenes optimizadas.
  * Publicación inmediata o almacenamiento como borrador (*draft / active*).
  * Eliminación segura de artículos (incluyendo borrado automático de imágenes del servidor para evitar basura en disco).
* **Moderación de Comentarios:** Monitoreo y eliminación de comentarios inapropiados.
* **Control de Cuentas:** Registro de nuevos administradores y auditoría de cuentas de usuarios registrados.

---

## 🔒 Seguridad y Buenas Prácticas

* **Prevención de Inyecciones SQL (SQLi):** Implementación integral de sentencias preparadas (**PDO Prepared Statements**) en todas las transacciones a la base de datos.
* **Sanitización de Entradas:** Filtrado estricto mediante `filter_var()` para mitigar ataques de Cross-Site Scripting (XSS).
* **Control de Sesiones:** Manejo seguro de sesiones en PHP (`session_start()`) con validación de roles en cada endpoint protegido.
* **Gestión Segura de Credenciales:** Sin contraseñas ni secretos hardcodeados en el repositorio; soporte integrado para variables de entorno y archivo `.gitignore` completo.
* **Cero Basura de Almacenamiento:** Las imágenes asociadas a publicaciones eliminadas se desvinculan del sistema de archivos (`unlink()`) previniendo consumo innecesario de almacenamiento.

---

## 🛠️ Tecnologías Utilizadas

| Capa | Tecnología | Descripción |
| :--- | :--- | :--- |
| **Backend** | PHP 7.4+ / 8.x | Lenguaje del lado del servidor para lógica de negocio y APIs |
| **Base de Datos** | MySQL / MariaDB | Motor de base de datos relacional |
| **Acceso a Datos** | PHP Data Objects (PDO) | Capa de abstracción segura para operaciones en base de datos |
| **Frontend** | HTML5 Semántico, CSS3 | Diseño responsive con variables CSS y layouts modernos |
| **Interactividad** | JavaScript (ES6) | Control de menús laterales, confirmaciones y modales |
| **Iconografía** | FontAwesome 6 | Biblioteca de iconos vectoriales |

---

## 📂 Estructura del Proyecto

```text
Pagina-Blog/
│
├── admin/                      # Módulo del panel de control de administración
│   ├── add_posts.php           # Formulario para redactar nuevos posts
│   ├── admin_accounts.php      # Gestión de administradores
│   ├── admin_login.php         # Login exclusivo para administradores
│   ├── comments.php            # Moderación global de comentarios
│   ├── dashboard.php           # Tablero con estadísticas y métricas clave
│   ├── edit_post.php           # Editor y actualizador de posts existentes
│   ├── read_post.php           # Vista previa interna de un post con sus comentarios
│   ├── register_admin.php      # Registro de nuevos perfiles de administración
│   ├── update_profile.php      # Actualización de datos del admin activo
│   ├── users_accounts.php      # Lista y gestión de usuarios registrados
│   └── view_posts.php          # Catálogo general de posts (activos y borradores)
│
├── components/                 # Componentes modulares reutilizables
│   ├── admin_header.php        # Barra de navegación del panel de administración
│   ├── admin_logout.php        # Manejador de cierre de sesión de admin
│   ├── connect.php             # Conexión centralizada a base de datos vía PDO
│   ├── footer.php              # Pie de página compartido
│   ├── like_post.php           # Controlador del sistema de likes
│   ├── user_header.php         # Barra de navegación y buscador para usuarios
│   └── user_logout.php         # Manejador de cierre de sesión de usuarios
│
├── css/                        # Hojas de estilo
│   ├── admin_style.css         # Estilos específicos del panel de administración
│   └── style.css               # Estilos principales del portal de usuarios
│
├── js/                         # Scripts del lado del cliente
│   ├── admin_script.js         # Lógica interactiva del CMS
│   └── script.js               # Lógica interactiva del portal público
│
├── uploaded_img/               # Directorio donde se almacenan las imágenes de posts
│   └── .gitkeep                # Mantiene la estructura del directorio en Git
│
├── all_category.php            # Vista de todas las categorías disponibles
├── authors.php                 # Directorio de autores / creadores
├── author_posts.php            # Posts filtrados por un autor en particular
├── blog_db.sql                 # Script DDL/DML de la base de datos
├── category.php                # Posts filtrados por una categoría específica
├── home.php                    # Página principal / Feed de publicaciones
├── index.php                   # Punto de entrada con redirección automática
├── login.php                   # Inicio de sesión de usuarios lectores
├── posts.php                   # Vista completa de todos los artículos publicados
├── register.php                # Registro de nuevos lectores
├── search.php                  # Resultados de búsqueda de posts
├── update.php                  # Actualización de perfil de usuario
├── user_comments.php           # Panel de comentarios realizados por el usuario
├── user_likes.php              # Panel de artículos que le gustaron al usuario
├── view_post.php               # Vista detallada de un artículo y comentarios
├── .env.example                # Plantilla de variables de entorno
└── .gitignore                  # Exclusión de archivos sensibles, temporales y subidas
```

---

## ⚙️ Instalación y Configuración Local

Sigue estos pasos para desplegar el proyecto en tu entorno local:

### 1. Requisitos Previos
* Servidor local como **XAMPP**, **Laragon**, **WampServer** o **Docker**.
* PHP **7.4** o superior.
* MySQL o MariaDB.
* Git instalado.

### 2. Clonar el Repositorio
```bash
git clone https://github.com/T1Angel4220/Pagina-Blog.git
cd Pagina-Blog
```
> Si usas **XAMPP**, clona o coloca la carpeta dentro de `C:/xampp/htdocs/Pagina-Blog`.

### 3. Crear e Importar la Base de Datos
1. Inicia los servicios de **Apache** y **MySQL** desde el panel de control de tu entorno local (ej. XAMPP).
2. Ingresa a **phpMyAdmin** (`http://localhost/phpmyadmin/`).
3. Crea una base de datos llamada `blog_db` (con cotejamiento `utf8mb4_general_ci`).
4. Haz clic en la pestaña **Importar** y selecciona el archivo `blog_db.sql` incluido en la raíz de este repositorio.
5. Ejecuta la importación.

### 4. Configurar la Conexión (`components/connect.php`)
Por defecto, la conexión está configurada con las credenciales estándar de entornos locales:
* **Host:** `localhost`
* **Base de datos:** `blog_db`
* **Usuario:** `root`
* **Contraseña:** `""` (vacía)

Si tu servidor utiliza una contraseña o puerto diferente, puedes ajustarlo directamente en `components/connect.php` o exportar las variables de entorno:
```bash
DB_HOST=localhost
DB_NAME=blog_db
DB_USER=root
DB_PASS=tu_contraseña
```

### 5. Iniciar la Aplicación
Abre tu navegador web e ingresa a:
```text
http://localhost/Pagina-Blog/
```

---

## 🔑 Credenciales de Prueba

Para evaluar las funciones del panel administrativo:

| Rol | URL de Acceso | Usuario | Contraseña |
| :--- | :--- | :--- | :--- |
| **Administrador** | `http://localhost/Pagina-Blog/admin/admin_login.php` | `admin` | `111` |

> *Nota: También puedes registrar nuevos usuarios lectores directamente desde el botón "Register" del portal público.*

---

## 🎯 Próximas Mejoras (Roadmap)

- [ ] Migrar el algoritmo de hashing de contraseñas de `sha1` a `password_hash()` con algoritmo `BCRYPT` / `ARGON2ID`.
- [ ] Incorporar paginación asíncrona en el listado de posts.
- [ ] Integrar un editor de texto enriquecido (WYSIWYG) como TinyMCE o Quill para la redacción de contenidos.
- [ ] Implementar soporte para subida de avatares de perfil.

---

## 👤 Autor

* **Angel Ayuquina**
* **GitHub:** [@T1Angel4220](https://github.com/T1Angel4220)
* **Objetivo:** Proyecto desarrollado para portafolio profesional de desarrollo web.
