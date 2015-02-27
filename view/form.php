<?php
    require_once(__DIR__ . "/../model/cofig.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
  
    if(!authenticateUser()) {
        header("location: " . $path . "index.php");
        die();
    }
    
?>
<h1 class>Create Blog Post</h1>
<!--submits all my posts from localhost and posting them as code-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!--the title for my posts-->
    <div class="white">
        <lable for="title">Title:</lable>
        <input type="text" name="title"/>
    </div>
<!--submits the text that goes with the title-->    
    <div class="white">
        <label for="post">Post:</label>
        <textarea name="post"></textarea>
    </div>
<!--if pressed it will send the title and post to the localhost-->    
    <div class="white">
        <button type="submit">Submit</button>
    </div>
</form>