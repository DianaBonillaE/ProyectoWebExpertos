<?php include 'header.php';?>

    <div class="login">
        <h1>Bienvenido</h1>
        <form>
            <input type="text" name="user" id="user" placeholder="Nombre usuario">
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <a class="btn btn-primary btn-md text-uppercase" style="margin-left:70px; margin-top:20px;" onclick="login()" name="" >Ingresar</a>
            
            <br>
        </form>
    </div>

<style>
body {
    margin: 0;
    padding: 0;
    background-image: url("../img/login.jpg");
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
}

.login {
    width: 350px;
    height: 350px;
    background: #fff;
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
}

h1 {
    margin: 0;
    padding: 0 0 10px;
    text-align: center;
   
}

.login p {
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-family: 'Raleway', sans-serif;
}

.login input {
    width: 100%;
    margin-bottom: 20px;
}

.login input[type="text"],
input[type="password"] {
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 40px;
    font-size: 16px;
}

.login .a input {
    border: none;
    outline: none;
    height: 40px;
    background: #de7015;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    text-align: center;
}


.a {
    margin-left:20px;
    text-decoration: none;
    font-size: 14px;
    line-height: 20px;
    color: #000;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}

.a:hover {
    color: #757575;
}
</style>

<script src="../js/sweetalert.js">
<?php include 'footer.php';?>