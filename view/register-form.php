<?php
    require_once(__DIR__ . "/../model/cofig.php");
?>
<body class="black">
<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div class="black">
        <label for="email">email:</label>
        <input type="text" name="email" />
    </div>

    <div class="black">
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>

    <div class="black">
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    
    <div class="black">
        <button type="submit">Submit</button>   
    </div>
</form>
</body>
