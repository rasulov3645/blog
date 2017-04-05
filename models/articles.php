<?php
    
    // Вывод всех статей 
    function articles_all($link)
    {
        
        // Запрос. 
        $query = "SELECT * FROM articles ORDER BY id DESC"; 
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
        // Извлечение из БД. 
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++) 
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row; 
        }
        
        return $articles;
        
    }
    

    // Получение конкретной статье по id
    function articles_get($link, $id_article)
    {
        // Запрос. 
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query); 
        
        if(!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
        
    }
    
    // Создание статья 
    function articles_new($title, $date, $content)
    {
        
    }

    // Редактирование статья 
    function articles_edit($id, $title, $date, $content)
    {
        
    }
    
    // Удаления статья 
    function articles_delete($id)
    {
        
    }
?> 