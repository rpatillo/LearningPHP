<?PHP

function var_dump_pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}

?>

<ul>

    <?PHP foreach(App\App::getDb()->query('SELECT * FROM articles', 'App\Table\Article') as $post) : ?>

    <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

    <p><?= $post->extrait; ?></p>

    <?PHP endforeach; ?>

</ul>