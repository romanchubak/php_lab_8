
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 8</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php echo (new DateTime("Today"))->diff(new DateTime(date('Y',strtotime('+1 year'))."-01-01"))->format('%R%a днів до нового року');?>
    </body>
</html>
