### Installation

1. Install composer packages
    ```sh
    composer install
    ```

2. Install dependencies 
    ```sh
    npm install
    ```

3. Copy the env.example file to .env 
   ```sh
   cp .env.example .env
   ```

4. Generate encryption key (it used to hash user passwords)
    ```sh
    php artisan key:generate
    ```

5. Run database migrations to create all required tables.
    ```sh
    php artisan migrate
    ```
   
6. Build vite
    ```sh
    npm run build
    ```

### Run Development Server

1. Run vite
    ```sh
    npm run dev
    ```

2. Run laravel server
    ```sh
    php artisan serv
    ```
