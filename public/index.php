<?PHP
define('ROOT', dirname(__DIR__));
//date_default_timezone_set('Europe/Paris');

require ROOT . '/app/App.php';
App::load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();
if ($page === 'home') {
    require ROOT . '/pages/articles/home.php';
}
$content = ob_get_clean();
require ROOT . '/pages/template/default.php';