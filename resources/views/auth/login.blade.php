<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Log In</h2>

    <form method="Post"> 
        @csrf
        <label>Email Adress</label><br>
        <input type="text" name="email" onfocus="this.placeholder=''" placeholder="Email adress"><br>
        <br>
        <label>Password</label><br>
        <input type="text" name="password" onfocus="this.placeholder=''" placeholder="Password"><br>
        <br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>
