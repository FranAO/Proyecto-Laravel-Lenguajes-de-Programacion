# Proyecto Laravel Lenguajes de Programación

Este proyecto es una aplicación web que muestra información sobre diferentes lenguajes de programación, sus características, creadores y detalles técnicos. La aplicación está construida con Laravel y ofrece una interfaz moderna y responsive para explorar el mundo de los lenguajes de programación.

## Características Principales

- 📚 Catálogo completo de lenguajes de programación
- 🔍 Información detallada de cada lenguaje
- 🖼️ Imágenes y logos de los lenguajes
- 📱 Diseño responsive y moderno
- 🎨 Interfaz de usuario intuitiva
- 🔄 Actualización dinámica de contenido
- 📊 Características técnicas detalladas
- 🌐 Enlaces a sitios web oficiales

## Requisitos del Sistema

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js (opcional, para desarrollo)
- Extensión PHP para MySQL
- Extensión PHP para BCMath
- Extensión PHP para Ctype
- Extensión PHP para Fileinfo
- Extensión PHP para JSON
- Extensión PHP para Mbstring
- Extensión PHP para OpenSSL
- Extensión PHP para PDO
- Extensión PHP para Tokenizer
- Extensión PHP para XML

## Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/FranAO/Proyecto-Laravel-Lenguajes-de-Programacion.git
cd Proyecto-Laravel-Lenguajes-de-Programacion
```

2. Instala las dependencias de PHP:
```bash
composer install
```

3. Copia el archivo de entorno:
```bash
copy .env.example .env
```

4. Genera la clave de la aplicación:
```bash
php artisan key:generate
```

5. Configura la base de datos en el archivo `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

6. Ejecuta las migraciones:
```bash
php artisan migrate
```

7. Crea el enlace simbólico para el almacenamiento:
```bash
php artisan storage:link
```

8. Inicia el servidor de desarrollo:
```bash
php artisan serve
```

## Estructura del Proyecto

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProgrammingLanguageController.php
│   └── Models/
│       └── ProgrammingLanguage.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── ProgrammingLanguageSeeder.php
├── public/
│   └── storage/
├── resources/
│   └── views/
│       └── languages/
│           ├── index.blade.php
│           └── show.blade.php
└── storage/
    └── app/
        └── public/
            └── languages/
```

## Tecnologías Utilizadas

- **Backend:**
  - Laravel 10.x
  - PHP 8.1+
  - MySQL

- **Frontend:**
  - Bootstrap 5
  - Font Awesome
  - Google Fonts (Inter)
  - CSS3 con variables personalizadas
  - JavaScript vanilla

- **Herramientas de Desarrollo:**
  - Composer
  - Git
  - VS Code (recomendado)

## Características Técnicas

- Sistema de rutas RESTful
- Controladores con inyección de dependencias
- Modelos Eloquent con relaciones
- Vistas Blade con layouts
- Sistema de almacenamiento de archivos
- Migraciones y seeders para la base de datos
- Diseño responsive con Bootstrap
- Animaciones y transiciones CSS
- Optimización de imágenes
- Enlaces simbólicos para archivos públicos

## Contribuir

Las contribuciones son bienvenidas. Para contribuir:

1. Haz un Fork del proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## Autor

FranAO

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## Agradecimientos

- Laravel Framework
- Bootstrap
- Font Awesome
- Google Fonts
- Todos los contribuidores

---

<p align="center">
<a href="https://github.com/FranAO/Proyecto-Laravel-Lenguajes-de-Programacion">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
