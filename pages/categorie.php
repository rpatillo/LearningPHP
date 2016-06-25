<?PHP
use App\App;
use App\Table\Categorie;
use App\Table\Article;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}

$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>

<h1><?= $categorie->titre ?></h1>
<div class="row">
    <div class="col-sm-8">

        <?PHP foreach($articles as $post) : ?>

        <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

        <p><em><?= $post->categorie; ?></em></p>

        <p><?= $post->extrait; ?></p>

        <?PHP endforeach; ?>

    </div>

    <div class="col-sm-4">

        <ul>

            <?PHP foreach(\App\Table\Categorie::all() as $categorie) : ?>

            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>

            <?PHP endforeach; ?>

        </ul>
    </div>
</div>