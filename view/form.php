<?php
    require_once(__DIR__ . "/../model/cofig.php");
?>
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php" ?>">
    <div> 
        <lable for="title">Title:</lable>
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">Post:</label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>