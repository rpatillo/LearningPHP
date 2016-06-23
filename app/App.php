<?PHP
namespace App;

class App {
    
    private static $database;
    
    public static function getDb() {
        if (self::$database === NULL) {
            self::$database = new Database('blog.db');
        }
        return self::$database;
    }
    
}