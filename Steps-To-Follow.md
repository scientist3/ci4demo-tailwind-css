No pre setup:
  1) Install:
    - Xampp (Server+Mysql):
      - Windows:
    - Vscode (Editor):
      - Windows: https://code.visualstudio.com/download
    - DBeaver (Database):
      - Windows: https://dbeaver.io/download/
    - Node Js (Third Party Packages Manager- Install, update, etc)
      - Note: Check the latest (02 Jun 2023)
      - Windows: https://nodejs.org/dist/v18.16.1/node-v18.16.1-x64.msi
    - Composer (PHP Dependency Manager)
      - Windows: https://getcomposer.org/download/
    - Git (Managing Repositories)
      - Windows: https://git-scm.com/download/win

  2) Create github account: https://github.com/
      - For tracking Repositories

If Pre Setup is done:
  1) Create the Codeigniter 4 Application:
      - Method #1: 
        - Open CMD and locate your destination folder.
        - Then run this command c:\yourFolderPath\> composer create-project codeigniter4/appstarter
  
  2) If you need database setup or skip:
      a) Necessary detials required (with Example):
          Database Name: democi4-tailindcss-db
          Host: localhost
          Username: root
          Password: 
        - Create One Database (Example: democi4-tailindcss-db)
        - For default root access, user will be root and password will be blank.
        - If you have installed xampp, then mysql will be installed and host will be localhost or 127.0.0.1
      b) Configuration:
        - open app/Config/Database.php
        - Locate this code:
          public $default = [
                              'DSN'      => '',
                              'hostname' => 'localhost',
                              'username' => 'root',
                              'password' => '',
                              'database' => 'democi4-tailindcss-db',
                              'DBDriver' => 'MySQLi',
                              'DBPrefix' => '',
                              'pConnect' => false,
                              'DBDebug'  => (ENVIRONMENT !== 'development'),
                              'cacheOn'  => false,
                              'cacheDir' => '',
                              'charset'  => 'utf8',
                              'DBCollat' => 'utf8_general_ci',
                              'swapPre'  => '',
                              'encrypt'  => false,
                              'compress' => false,
                              'strictOn' => false,
                              'failover' => [],
                              'port'     => 3306,
                          ];
        - Save, and that is it.
        Now the database is connected, you have multiple ways to add the tables:
        1) Using phpmyadmin (Manual)
        2) Using DBeaver (Manual)
        3) Using CodeIgniter 4 Model (Code)

  3) Running Codeigniter 4 Project (Commands only)
    1) Serving the project:
      - php spark serve
      This step you can do at last or first your choice. This will make start the local development server for this project.
      Here is the sample run output:
        $ php spark serve
          CodeIgniter v4.3.6 Command Line Tool - Server Time: 2023-07-01 04:35:09 UTC+00:00
          CodeIgniter development server started on http://localhost:8080
    
    [Note Rest steps can be done manuall, that is create the files(controllers, models, migrations etc) as per your need or you can use the below commands for automatic creating of such files at desired locaitons]


    2) Creating Controllers:
      - php spark make:controller SignupController
      
    3) Creating Model
      - php spark make:model UsersModel

    4) Setup a Route for the controller
      - To create a route we edit the file app/Config/Routes.php to add routes to controller methods.
      - For example to add a route to the User controller, method index(), add the following line
        $routes->get('/users', 'Users::index');

Special Topics:
  1) Working with data – Migrations, Models, and Seeds
  {
    - First, we will work with our database to create tables and data associated. When we create a Codeigniter 4 application, there are 3 main elements we need to create:

    a) MIgrations: To set up and define de database tables (schema), including operations like create, alter, and drop tables, columns and indexes.
    b) Seeds: To program and populate table data for regular operation and for tests.
    c) Models: To create an abstract data interface to be used in views and controllers.

    Examples:
      a) php spark make:migration CreateUsers
        - Common Operations:
          The common operations for migrations are:
            - Add fields. Field config can have type, constraint (size) , null (nullable) and other properties.
            
            -- $this->forge->addField(["fieldname"=>["type"=>'TYPE',constraint=>SIZE]]);
            - Setup the primary key
            -- $this->forge->addKey('fieldname', true);
            - Create a unique key
            -- $this->forge->addUniqueKey(['field1','field2']);
            - Finally, create the table
            -- $this->forge->createTable('tablename');
            
          Operations to rollback changes:
            - Drop table
            -- $this->forge->dropTable('tablename'); )
            -- $this->forge->dropTable('tablename',true); // drop if exists
            -- $this->forge->dropTable('tablename',true, true); // if exists + cascade
            - Remove columns
            -- $forge->dropColumn('table_name', ['column_1', 'column_2']);
            - Drop keys
            -- $forge->dropKey('tablename', 'index_name');

      b) Run the first migration
        - php spark migrate
  }

  2) Create a Database Seeder (Table data)
  {
    - php spark make:seeder UsersData

    Seed Example: Users data:
      <?php
        namespace AppDatabaseSeeds;
        use CodeIgniterDatabaseSeeder;
        class UsersData extends Seeder
        {
            public function run()
            {
                // clear data
                $this->db->table('user')->truncate(); 
                $this->db->table('users')->insert([
                    "id" => 1001,
                    "email" => "admin@example.com",
                    "password" => md5("Admin.123"),
                    "user_type" => 1, // admin type
                ]); 
                $this->db->table('users')->insert([
                    "id" => 1002,
                    "email" => "user@example.com",
                    "password" => md5("User.123"),
                    "user_type" => 0, // regular user
                ]); 
            }
        }
      ?>
  }

  3) Run the seeder
      - php spark db:seed UsersData

  4) Create a Model
    {
      - php spark make:model ModelName

      Model Example: Users Model
      - php spark make:model Users
    }

Reference Links:
  Authentication: https://www.positronx.io/codeigniter-authentication-login-and-registration-tutorial/
  Tailwind CSS with Laravel mix: https://tailwindcss.com/docs/guides/laravel#mix
  Youtube CI4 with TailwindCSS (CodeIgniter 4): https://www.youtube.com/watch?v=YEb6XWt4noA
  Steps to create a Codeigniter 4 Application: https://developerhowto.com/2022/12/27/create-a-codeigniter-4-application/