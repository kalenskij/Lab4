<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  String: <input type="date" name="string">
  <input type="submit">
</form>

<?php
  $name = $_POST['string'];
  echo $name;
?>

</body>
</html