<?php


function cnx()
{
    if (
        !defined("BDD") &&
        !defined("SERVER") &&
        !defined("USERNAME") &&
        !defined("PWD")
        // !defined("PORT")
    ) {
        define('BDD', "candidate");
        define('SERVER', "localhost");
        define('USERNAME', "root");
        define('PWD', "");
        // define('PORT', 03306);
    }
    try {
        $cnx = new PDO(
            'mysql:host=' . SERVER .
                // ';port=' . PORT .
                ';dbname=' . BDD,
            USERNAME,
            PWD,
            array(
                // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //  Attention : renvoi un 'var_dump()' en cas d'erreur du coup pbl pour JS
                PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,       //  => solution de remplacement
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            )
        );
        return $cnx;
    } catch (PDOException $error) {
        var_dump($error->getMessage());
        exit();
    }
}