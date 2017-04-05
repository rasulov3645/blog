<?php
    // Подключаем информацию о базе данных, котораю появиться 
    require_once("database.php");
    // Подключаем набор функциий, для работы с данными
    require_once("models/articles.php");
    
    // Вызываем функциию, которая находиться в моделях и передаем ему id
    $article = articles_get($_GET['id']);
    
    include("views/article.php")


?> 