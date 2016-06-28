<?php
namespace App\Table;

use Core\Table\Table;

class PostTable extends Table {

    /**
     * Recup les derniers articles
     * @return array
     */

    public function last() {
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles 
            LEFT JOIN categories ON articles.category_id = categories.id
            ");
    }

}