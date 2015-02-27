<?php
    require_once(__DIR__ . "/../model/cofig.php");
?>

<body>
    <div></div>
    <div class="black"><h1>Login</h1></div>

    <form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
        <div>
            <label class="center-text" for="username">Username: </label>
            <input type="text" name="username" />
        </div>

        <div>
            <label class='center-text' for="password">Password: </label>
            <input type="password" name="password" />
        </div>

        <div>
            <button type="submit">Submit</button>   
        </div>
    </form>
</body>

