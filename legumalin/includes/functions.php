<?php

/**
 *  * fonction permettant de generer des requetes select par ID de maniere dynamique
 *   *
 *    * @param string $table
 *     * @param int $id
 *      *
 *       * @return mixed
 *        */

function selectOne($table, $column, $id) {

    global $pdo; // je recupere $pdo de l'exterieur de la fonction
    $rowToGet = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $column . '=:id');
    $rowToGet->bindValue(':id', $id, PDO::PARAM_INT);
    $rowToGet->execute();
    $row = $rowToGet->fetch(PDO::FETCH_ASSOC);

    return $row;

}

/**
 *  * Recuperer toutes les infos d'une table
 *   *
 *    * @param $table string // Nom de la table
 *     *
 *      * @return array // resultats de la requete
 *       */
function selectAll($table) {
    global $pdo; // je recupere $pdo de l'exterieur de la fonction
    $rowsToGet = $pdo->query('SELECT * FROM ' . $table);
    $rows = $rowsToGet->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}


/**
 * SQL DELETE FUNCTION
 *
 * The deleteGeneric() function is developped to delete a line in DB table.
 *
 * @param $table  - DB table name (TYPE: STRING)
 * @param $param  - Param choosen in url to get the id of line (TYPE: STRING)
 *
 ** IMPORTANT :
 * The two parameters are STRING
 *
 *@return, no returns expected except a delete in DB.
 *
 **** Example
 * deleteGeneric('DB_NAME', 'id');
 */
function deleteGeneric($table, $column, $param)
{
    $get = $_GET["$param"];
    if (!empty($get) && is_numeric($get))
    {
        global $pdo;
        $delete = $pdo->query('DELETE FROM '.$table.' WHERE ' . $column . '='.$get);
        $execute = $delete->execute();

        if($execute)
        {
            return 1;

        }
        return 0;
    }
}


/**
 * Function dd() allows to design the var_dump output and kill the program
 *
 * @param $arg : type Any
 */
function dd($arg)
{
    echo '<div style="background-color: yellow; padding: 20px;">';
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    echo '<div>';
    die();
}


/**
 * Function to_slug() will create a slug from a reference
 *
 * @param $string
 * @return string
 *
 *
 * NOTE: This function is taken from : https://stackoverflow.com/questions/2955251/php-function-to-make-slug-url-string
 */
function to_slug($string)
{
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $string)));

    return $slug;
}


/**
 *  Function FlashMessage create message about the previous action.
 *
 * @param $element
 * @param $name
 * @return string
 *
 */
function flashMessage($element, $name = null)
{
    switch ($element)
    {
        case 'add':
            return "<div class='alert alert-success' role='alert'>Ajout du produit : \" $name \" effectué avec succès</div>";
            break;
        case 'modify':
            return "<div class='alert alert-success' role='alert'>Modification du produit : \" $name \" effectué avec succès</div>";
            break;
        case 'suppr':
            return "<div class='alert alert-success' role='alert'>Suppression du produit effectué avec succès</div>";
            break;
        case 'error':
            return "<div class='alert alert-warning' role='alert'>Une erreur est survenue, veuillez réessayer ou contacter l'équipe Légumalin</div>";
            break;
        default:
            return '';
            break;
    }
}