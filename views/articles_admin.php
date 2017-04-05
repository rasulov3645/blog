<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8"> 
    <title> Мой Первый Блог </title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <div class="container"> 
        <h1> Мой Первый Блог </h1>
        <div>
            <a href="index.php?action=add"> Добавить статью </a>
            <table class="admin-table">
                <tr> 
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $a): ?>
                    <tr>
                        <td><?=$a['date'] ?></td>
                        <td><?=$a['title'] ?></td>
                        <td> 
                            <a href="index.php?action=edit&id=><?=$a['id']?>">Редактировать</a>
                        </td>
                        <td> 
                            <a href="index.php?action=delete&id=><?=$a['id']?>">Удалить</a>
                        </td> 
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        
        <footer> 
            <p> Мой Первый Блог <br>Copyright &copy; 2017</p>    
        </footer>
    </div>
</body>
    
</html>