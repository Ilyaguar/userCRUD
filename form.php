<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Регистрация</title>
  </head>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .main {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .main h2 {
        color: #4caf50;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .button[type="submit"] {
        padding: 15px;
        border-radius: 10px;
        border: none;
        background-color: #4caf50;
        color: white;
        cursor: pointer;
        width: 100%;
    }
</style>
  <body>
    <?php include "registration.php";?>
    <div class="main">
        <h2>Registration Form</h2>
        <form method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />

            <label for="login">Login</label>
            <input type="text" id="login" name="login" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                    title="Password must be at 
                    least 8 characters long" required />

            <input type="submit" name="button_submit"
                    class="button" />
        </form>
        <?php 
        if(array_key_exists('button_submit',$_POST)){
            $registration_state = reg_user();
            if ($registration_state == 0){
                header('Location: adminPanel.php');
                exit();
            }
        }
        ?>
  </body>
</html>
