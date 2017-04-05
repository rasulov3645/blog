<?php 
    require_once("../database.php");
    require_once("../models/articles.php");
    
    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if($action == "add"){
        if (!empty($_POST)){
            articles_new($link,
                         $_POST['title'],
                         $_POST['date'],
                         $_POST['content']);
            header("Location: index.php");
        }
        include("../views/article_admin.php");
    } else {
        $articles = articles_all($link);
        include("../views/articles_admin.php");
    }

?>