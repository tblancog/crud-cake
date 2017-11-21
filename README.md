# ABM de Turbinas nucleares

Aplicación de demostración que soporta operaciones básicas de un modelo de datos: alta, baja, modificación y detalle.

## Installación
1. Clonar repositorio via https.
```bash
git clone https://github.com/tblancog/crud-cake.git
```
2. Entrar al directorio recién creado e instalar dependencias
```bash
cd crud-cake
composer install
```
3. Crear base de MySql con el nombre 'turbinas', las credenciales deben coincidir con las definidas en el archivo config/app.php (línea 234).
4. Correr el script sql database.sql para crear la tabla 'turbina'
5. Servir la aplicación de cake localmente en algún puerto disponible
```bash
./bin/cake server -p PUERTO
```
Ir entrar a la url servida `http://localhost:PUERTO/turbina`

