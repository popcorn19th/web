<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

      <form name="frmlogin"  method="post" action="login.php">
        <p> </p>
        <p><b> Log In</b></p>
        <p> ชื่อผู้ใช้ :Username
          <input type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน : Password
          <input type="password"   id="Password"required name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form>
</body>
</html>
