#  Sistema Cliente-Servidor de Gestión de Productos

Este proyecto corresponde a la **Actividad 2 – Desarrollo Producto 1 (Cliente-Servidor)**.  
Implementa un sistema funcional con arquitectura cliente-servidor utilizando **Laravel** como framework principal.  

---

##  Objetivos
- Implementar un sistema cliente-servidor funcional.
- Crear un módulo de autenticación (login y registro).
- Conectar con una base de datos para persistencia.
- Implementar un CRUD de productos.
- Probar y documentar el funcionamiento.

---

##  Tecnologías utilizadas
- **Backend (Servidor):** Laravel 11 (PHP 8+)
- **Frontend (Cliente):** Blade + Bootstrap
- **Base de datos:** MySQL / MariaDB
- **Gestión de dependencias:** Composer
- **Control de versiones:** Git & GitHub

---

##  Funcionalidades
1. **Autenticación de usuarios**
   - Registro de nuevos usuarios.
   - Inicio y cierre de sesión.

2. **Gestión de productos**
   - Crear, listar, editar y eliminar productos.
   - Cada producto pertenece a un usuario autenticado.

3. **Persistencia**
   - Base de datos MySQL con tablas relacionadas (`users` y `products`).

---

## 🗄️ Modelo de Datos
Diagrama de la base de datos:

```dbml
Table users {
  id int [pk]
  name varchar(255)
  email varchar(255) [unique]
  password varchar(255)
  created_at timestamp
  updated_at timestamp
}

Table products {
  id int [pk]
  user_id int [ref: > users.id]
  name varchar(255)
  description text
  price decimal(10,2)
  stock int
  created_at timestamp
  updated_at timestamp
}
Instalación y ejecución

Clonar el repositorio:
git clone https://github.com/usuario/proyecto-cliente-servidor.git
cd proyecto-cliente-servidor

Instalar dependencias:
composer install
npm install && npm run dev

Configurar el archivo .env:
DB_DATABASE=nombre_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña

Ejecutar migraciones:
Ejecutar migraciones:

Levantar el servidor:
php artisan serve
