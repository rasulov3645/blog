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
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>"> 
                <label> 
                    Название 
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label> 
                    Дата 
                    <input type="date" name="date" value="<?=$article['date']?></inpu>>" class="form-item" required> 
                </label>
                <label> 
                    Содержимое
                    <textarea class="form-item" name="content" required><?=$article['content']?></textarea> 
                </label>
                <input type="submit" value="Сохранить" class="btn">    
            </form>
        </div>
        
        <footer> 
            <p> Мой Первый Блог <br>Copyright &copy; 2017</p>    
        </footer>
    </div>
</body>
    
</html>