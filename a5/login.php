<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<form action="" method='post'>
  <div class="login">
    <h1>Login</h1>
    <div class="text-box">
      <i class="fas fa-user"></i>
      <input name="Username" type="text" placeholder="Username">
    </div>

    <div class="text-box">
      <i class="fas fa-lock"></i>
      <input name="Password" type="password" placeholder="Password">
    </div>

    <input name="Submit" type="submit" class="button" value="Sign in">
  </div>
</form>
  </body>
  <?php
session_start();
$login = array('admin1' => 'test1', 'admin2' => 'test2', 'dat' => '123456');
if (isset($_POST['Submit'])) {

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    if (isset($login[$Username]) &&  $login[$Username] == $Password) {
        $_SESSION['Userdata']['Username'] = $Username;
        header("location: adminindex.php");
        exit;
    }
    else {
        $Msg = "<span style='color: red'> Invalid Login Details </span>";
        echo $Msg;
    }
}
?>
</html>
