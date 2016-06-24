<?PHP

function var_dump_pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}

?>


<div class="row">
    <div class="col-sm-8">
    
        <?PHP foreach(\App\Table\Article::getLast() as $post) : ?>
    
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
