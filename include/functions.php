<?php
/**
 *  * fonction permettant de generer des requetes select par ID de maniere dynamique
 *   *
 *    * @param string $table
 *    * @param string $column
 *    * @param int $id
 *    * @param Optionnal. string $param
 *       * @return array
 *        */

function selectOne($table, $column, $id, $param = null) {

    try
    {
        global $pdo;
        $rowToGet = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $column . '=:id');
        $rowToGet->bindValue(':id', $id, $param);
        $req = $rowToGet->execute();

        if ($req)
        {
            $row = $rowToGet->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        elseif (!$req)
        {
            throw new Exception("Pas de lignes trouvées en base de donnée");
        }

    }
    catch (Exception $e)
    {
        return $e->getMessage();
    }
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
    return;
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
            return "<div class='alert alert-success' style='margin-top:50px;' role='alert'>Ajout du produit : \" $name \" effectué avec succès</div>";
            break;
        case 'modify':
            return "<div class='alert alert-success' style='margin-top:50px;' role='alert'>Modification du produit : \" $name \" effectué avec succès</div>";
            break;
        case 'suppr':
            return "<div class='alert alert-success' style='margin-top:50px;' role='alert'>Suppression du produit effectué avec succès</div>";
            break;
        case 'empty':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Il semblerait que le formulaire ne soit pas entièrement rempli, veuillez le compléter s'il vous plait.</div>";
        case 'incorrect':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Pseudo ou mot de passe incorrect, veuillez réessayer</div>";
            break;
        case 'used':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Pseudo déjà utilisé, veuillez en choisir un différent.</div>";
            break;
        case 'email_used':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Email déjà utilisé, veuillez en choisir une différent.</div>";
            break;
        case 'password':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Les deux mots de passes sont différents</div>";
            break;
        case 'connected':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Bonjour $name !</div>";
            break;
        case 'error':
            return "<div class='alert alert-warning' style='margin-top:50px;' role='alert'>Une erreur est survenue, veuillez réessayer ou contacter l'équipe Légumalin</div>";
            break;
        default:
            return '';
            break;
    }
}

/**
 * This function allows to manage datas with session or cookies. It depends of the user choice.
 *
 * @param array $data
 *
 * @return void
 */
function sessionOrCookie($data)
{
    # Le bandeau de cookie permet de créer une variable $_SESSION['cookie'] définie comme null, celui-ci apparait seulement s'il ne trouve pas de cookies ( $_COOKIE )

    #unset($_COOKIE);

    if(is_null($_SESSION['cookie']))
    {
        #dd($_SESSION['cookie']);
        setcookie('id', $data['id'], time() + 365*24*3600, null, null, false, true);
        setcookie('pseudo', $data['login'], time() + 365*24*3600, null, null, false, true);
        setcookie('mail', $data['email'], time() + 365*24*3600, null, null, false, true);
        setcookie('name', $data['name'], time() + 365*24*3600, null, null, false, true);
        setcookie('surname', $data['surname'], time() + 365*24*3600, null, null, false, true);
        setcookie('password', $data['password'], time() + 365*24*3600, null, null, false, true);
        setcookie('statut', $data['statut'], time() + 365*24*3600, null, null, false, true);
        return;
        #dd($_COOKIE);
    }
    elseif( !isset($_SESSION['cookie']) || !is_null($_SESSION['cookie']))
    {
        $_SESSION['id'] = $data['id'];
        $_SESSION['prenom'] = ucfirst($data['surname']);

        return;
        #dd($_SESSION);
    }
}

#TODO: Faire la DOC
/**
 * This function return true if $_COOKIE isn't empty
 *
 * @return bool
 */
function isConnected()
{
    if (!empty($_COOKIE['id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function isFlashMessage()
{
    if (!empty($_SESSION['flashMessage'])):
        echo $_SESSION['flashMessage'];
        $_SESSION['flashMessage'] = '';
    endif;

    return;
}

function addToCart(array $produit, $quantite) {

    if(!empty($_SESSION['cart']) && array_key_exists('id', $_SESSION['cart'])) {
        $positionProduit = array_search($produit['id'],  $_SESSION['cart']['id']);
    }

    if (isset($positionProduit) && $positionProduit !== false)
    {
        $_SESSION['cart']['quantite'][$positionProduit] += $quantite ;
        $_SESSION['cart']['prix_total_produit'][$positionProduit] = $produit['prix'] * $_SESSION['cart']['quantite'][$positionProduit];
    }
    else
    {
        $_SESSION['cart']['id'][]        = $produit['product_id'];
        $_SESSION['cart']['prix_total_produit'][]= $produit['price'] * $quantite;
        $_SESSION['cart']['prix_unitaire'][]= $produit['price'];
        $_SESSION['cart']['reference'][] = $produit['reference'];
        $_SESSION['cart']['titre'][]     = $produit['title'];
        $_SESSION['cart']['description'][] = $produit['description'];
        $_SESSION['cart']['quantite'][]  = $quantite;
        $_SESSION['cart']['photo'][]     = $produit['photo'];
    }
}

function deleteFromCart($productId) {
    if(!empty($_SESSION['cart']) && array_key_exists('id', $_SESSION['cart'])) {
        $positionProduit = array_search($productId,  $_SESSION['cart']['id']);
    }

    if (isset($positionProduit) && $positionProduit !== false)
    {
        array_splice($_SESSION['cart']['id'], $positionProduit,1);
        array_splice($_SESSION['cart']['prix_total_produit'], $positionProduit,1);
        array_splice($_SESSION['cart']['prix_unitaire'], $positionProduit,1);
        array_splice($_SESSION['cart']['reference'], $positionProduit,1);
        array_splice($_SESSION['cart']['titre'], $positionProduit,1);
        array_splice($_SESSION['cart']['quantite'], $positionProduit,1);
        array_splice($_SESSION['cart']['description'], $positionProduit,1);
        array_splice($_SESSION['cart']['photo'], $positionProduit,1);
    }
}