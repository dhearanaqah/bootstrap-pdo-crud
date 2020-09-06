<?php require_once('inc/header.php'); ?>

    <h3> Edit </h3>

    <?php 
    require_once('inc/db.php');
    $id = $_GET['id'];

    //ambil data
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $pdo->prepare($sql); 
    $result->execute([$id]);

    $row = $result->fetch();
    ?>

    <!-- form-->
    <form class="mt-3" method="post" action="./process.edit.php?id=<?php echo $row['id'];?>">
    
    <div class="form-group">
        <label>First</label>
        <input type="text" name="first_name" class="form-control" placeholder="First" value="<?php echo $row['first_name'];?>">
    </div>
    <div class="form-group">
        <label>Last</label>
        <input type="text" name="last_name" class="form-control" placeholder="Last" value="<?php echo $row['last_name'];?>">
    </div>

    <button type="submit" class="btn btn-success float-right mt-2">Save</button>
    <a class="btn btn-primary float-right mt-2 mr-2" href="./">Back</a>
    
    <!-- / form -->
    </form>

 <?php require_once('inc/footer.php'); ?>