<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        @csrf
        <label ><strong>First Name </strong></label><br>
        <input type="text" name="First_name" placeholder="Firstname"><br>
        <br>
        <label ><strong>Last Name </strong></label><br>
        <input type="text" name="Last_name" placeholder="Lastname"><br>
        <br>
        <label ><strong>Email adress </strong></label><br>
        <input type="email" name="email" placeholder="Email adress"><br>
        <br>
        <label ><strong>Choose your new password </strong></label><br>
        <input type="password" name="New_password" placeholder="New Password"><br>
        <br>
        <label ><strong>Confirm your new password </strong></label><br>
        <input type="password" name="Confirm_password" placeholder="Confirm new password"><br>
        <br>
        <input type="submit" value="Register">
    </form>
    
</body>
</html>