<?php

function Sql_connect()
{
    return mysqli_connect('localhost', 'root', '', 'geekbrains');
}

function Sql_select_db()
{
    mysqli_select_db(Sql_connect(), 'gallery');
}

function Sql_query($sql) //Можем выполнить абсолютно любой запрос(вызываем и возвращаем)
{
    Sql_connect();
    Sql_select_db();
    $res = mysqli_query(Sql_connect(), $sql);
    $ret = [];
    while(null != ($row = mysqli_fetch_assoc($res)))
    {
        $ret[] = $row;
    }
    return $ret;
}
