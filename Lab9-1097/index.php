<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?PHP
        
?>
<div class="container">
  <h1>PHP Form</h1>
  <form action="save.php" method="post">
    <div class="form-group">
      <label for="usr">Email</label>
      <input type="text" class="form-control" id="usr" placeholder="Email" name="u_email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="u_pwd" required>
    </div>
    <div>
        <h1>Radios</h1>
        <div class="radio">
        <label><input type="radio" name="optradio" value="option1" checked>First Radio</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="optradio" value="option2">Second Radio</label>
    </div>
    <div class="radio disabled">
        <label><input type="radio" name="optradio" value="option3" disabled>Third Disabled Radio</label>
    </div>
    </div>
    <div>
        <h1>CheckBox</h1>
        <div class="checkbox">
  <label><input type="checkbox" value="" name="check">Example CheckBox</label>
</div>
<button class="btn btn-primary" value="save.php">SignIn</button>
</div>
  </form>
</div>

</body>
</html>
