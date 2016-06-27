<?PHP
namespace App;

class App {

    private static $_instance;

    private static $title = 'Blog de ouf';

    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }


//    ----------------

    private static $database;

    public static function getDb() {
        if (self::$database === NULL) {
            self::$database = new Database('blog.db');
        }
        return self::$database;
    }

    public static function notFound() {
        header('HTTP/1.0 404 Not Found');
        header('Location:index.php?p=404');
    }

    public static function getTitle() {
        return self::$title;
    }

    public static function setTitle($title) {
        self::$title = $title . ' | ' . self::$title;
    }
}