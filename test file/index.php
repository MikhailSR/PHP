<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
      <title>Ture</title>
</head>
<body>
   <form name="tur" method="POST" action="form.php">
      <label>Количество дней отдыха: <input type="text" name="count"></label><br>
      <check>Скидка: <input type="checkbox" name="discount"></label></br>
      <select name="country">
         <option value="turkey">Турция</option>
         <option value="egipet">Египет</option>
         <option value="italy">Италия</option>
      </select>
      <input type="submit" name="send" value="Рассчитать стоимость отдыха">
   </form>
</body>
</html>








