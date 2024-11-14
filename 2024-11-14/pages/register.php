<div class="register">
    <h1>Register</h1>

    <form method="post" action="">
        <input type="email" name="email" required placeholder="Masukkan Email">
        <input type="password" name="password" required placeholder="Masukkan Password" id="">
        <input type="submit" name="register" value="Register">
    </form>
</div>

<?php 

    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo $email, $password;

        $sql = "INSERT INTO customer (email, password) VALUES ('$email', '$password')";  
        // echo $sql;

        mysqli_query($koneksi, $sql);

        header('location:index.php?menu=login');

    }

?>