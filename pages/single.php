<?PHP
$post = App\App::getDb()->prepare("SELECT * FROM articles WHERE id = ?", [$_GET['id']], 'App\Table\Article', true);
?>

<H1><?= $post->titre; ?></H1>

<p><?= $post->contenu; ?></p>