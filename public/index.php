<?PHP
define('ROOT', dirname(__DIR__));
//date_default_timezone_set('Europe/Paris');

require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();
if ($page === 'home') {
    require ROOT . '/pages/posts/home.php';
} elseif ($page === 'posts.category') {
    require ROOT . '/pages/posts/category.php';
} elseif ($page === 'posts.show') {
    require ROOT . '/pages/posts/show.php';
}
$content = ob_get_clean();
require ROOT . '/pages/template/default.php';