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
    function articles_new($link, $title, $date, $content)
    {
        // Подготовка. 
        $title = trim($title);
        $content = trim($content);
        
        // Проверка. 
        if ($title == '')
            return false;
        
        // Запрос. 
        $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
        
        $query = sprintf($t,
                        mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $date),
                        mysqli_real_escape_string($link, $content)
                        );
        
        $result = mysqli_query($link, $query);
        
        if (!$result) die(mysqli_error($link));
        
        return true;
    }

    // Редактирование статья 
    function articles_edit($link, $id, $title, $date, $content)
    {
        // Подготовка. 
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        
        // Проверка. 
        if ($title == '')
            return false;
        
        // Запрос. 
        $sql = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";
        
        $query = sprintf($sql,
                        mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $date),
                        mysqli_real_escape_string($link, $content), 
                        $id);
        
        $result = mysqli_query($link, $query);
        
        if (!$result) die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
    
    // Удаления статья 
    function articles_delete($id)
    {
        
    }
?> 