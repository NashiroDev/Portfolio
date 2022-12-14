<?php

include_once('/app/config/mysql.php');

/**
 * Find a file by it's id
 *
 * @param integer $id
 * @return array|boolean
 */
function getInfoByID(int $id): array|bool
{
    global $db;

    $query = 'SELECT * FROM data where id = :id';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute([
        ':id' => $id
    ]);

    return $sqlStatement->fetch();
}

function getRepositoryContent(string $folder): array|bool
{
    $pathList = array();
    foreach (glob('/app'.$folder . "/*") as $file) {
        array_push($pathList, str_replace('/app', '',$file));
    }

    return $pathList;
}




?>