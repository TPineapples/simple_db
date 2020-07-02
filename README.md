# Sample PostgreSQL WebApp

## Javascript
WIP

## PHP

### Setting up
Assuming you are running Windows 10...

- Install XAMPP from [apachefriends.org](https://www.apachefriends.org/index.html) (version used was 7.4.7) using the recommended settings
  - In other words, make sure you install the Apache, MySQL, and all other modules.
- Run XAMPP. In the XAMPP Control Panel, navigate to the Apache row, click on Configure, and select the `php.ini` option.
  - Update the `php.ini` file to uncomment (ie remove the `;` from the beginning of the line) the `pdo_pgsql` and `pgsql` extensions and enable them
  
### Running the code
- Copy the contents of the [php](./php/) directory in this repo to the `htdocs` directory at XAMPP's install location.
  - For example, on my machine I copied `simple_db.php` to `D:\Programs\xampp\htdocs`
- Update the `simple_db.php` file with your PostgreSQL credentials
  - In other words update the following snippet in the `simple_db.php` file with your own info:
    ```
    $host = "";     // hostname or server address
    $port = "5432"; // port (default is 5432)
    $dbname = "";   // database name
    $user = "";     // Username for the account being used in PostgreSQL
    $pass = "";     // Password for the account being used in PostgreSQL
    ```
- Open the XAMPP Control Panel
- Start Apache from the XAMPP Control Panel
- In your internet browser navigate to `http://localhost/simple_db.php`

