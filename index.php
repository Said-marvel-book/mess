<form action="ph.php" method="post">
<p>Ваш e-mail: <input type="text" name="email"/></p>
    <p>Ваше имя: <input type="text" name="name"/></p>
<p><input type="submit" /></p>
</form>
<?php $tim = strval(intval(date("G"))+5).date(":i");
echo htmlspecialchars($_POST['email']), "<sub>".$tim."</sub>";
//echo (int)$_POST['name'];
file_put_contents("1.html", "");
//echo($tim);
?>