<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
 
body {
    margin: 30px auto;
    text-align: center;
    width: 800px;
    background-color: #F5EFE6;
}
 
h1 {
    color: #2D2424;
    font-family: 'Passion One';
    font-size: 1.5rem;
    text-transform: uppercase;
}
 
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1rem;
    font-family: 'Lato';
}
 
input {
    border: 2px solid #ccc;
    font-size: 1rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
 
form {
    margin: 25px auto;
    padding: 20px;
    border-radius:200px 200px 200px 200px black;
    width: 500px;
    background:#7D6E83 ;
    margin-top: 200px;
}
 
div.form-element {
    margin: 20px 0;
}
 
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: #06283D;
    color: white;
    border: none;
}
 
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
 
p.error {
    background: orangered;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>
<body>
    <h1>Register</h1>
    

<form action="">
<div class="form-element">
<label for="uname"><b>Username</b></label> <br>
<input type="text" name="Username" required><br>
<label for="email"><b>email</b></label><br>
<input type="email" name="Email" required><br>
<label for="psw"><b>Password</b></label><br>
<input type="password" name="Password" required><br>
<label for="pswr"><b>Password repoat</b></label><br>
<input type="password" name="pswr" required><br>
<input id="submit" type="submit" name="login" value="login">

  </form>

    </div>
</body>
</html>