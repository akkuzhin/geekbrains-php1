<?php
require_once __DIR__ . '/../functions/sql.php';

function Photo_getAll()
{

    $sql = 'SELECT * FROM gallery';
    return Sql_query($sql);
}

function Photo_insert($data)
{
    $sql = "
        INSERT INTO gallery
        (nameFile, pathToFile)
        VALUES 
        ('" . $data['title'] . "', '" . $data['image'] . "')";

        $res = Sql_connect();
        Sql_select_db();
        mysqli_query($res, $sql);

}
