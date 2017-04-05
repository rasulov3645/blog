<?php
    
    // Вывод всех статей 
    function articles_all(){
        $art1= ["id"=>1, "title"=>"Title1", "date" => "2017-04-05", "content=>Content1"];
        $art2= ["id"=>2, "title"=>"Title2", "date" => "2017-04-05", "content=>Content2"];
        
        $arr[0] = $art1; 
        $arr[1] = $art2; 
        
        return $arr; 
        
    }
    
    // Получение конкретной статье по id
    function articles_get($id){
        if ( $id == 1 ) {
            return ["id"=>1, "title"=>"Это простой заголовок", "date" => "2017-04-05", "content=>Здесь будет счатья"];
        }
        else if ($id == 2){
             return ["id"=>2, "title"=>"Это простой заголовок", "date" => "2017-04-05", "content=>Здесь будет счатья"];
        }
        
    }
    
    // Создание статья 
    function articles_new($title, $date, $content) {
        
    }

    // Редактирование статья 
    function articles_edit($id, $title, $date, $content){
        
    }
    
    // Удаления статья 
    function articles_delete($id) {
        
    }
?> 