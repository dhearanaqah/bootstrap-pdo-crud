<?php require_once('inc/header.php'); ?>    

    <h3> Detail </h3>

    <?php 
    require_once('inc/db.php');
    $id = $_GET['id'];

    //ambil data
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $pdo->prepare($sql); 
    $result->execute([$id]);

    $row = $result->fetch();
    ?>

    <!-- table-->
    <table class="table mt-3">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?php echo $row['id'];?></td>
        </tr>
        <tr>
            <td>First</td>
            <td><?php echo $row['first_name'];?></td>
        </tr>
        <tr>
            <td>Last</td>
            <td><?php echo $row['last_name'];?></td>
        </tr>
    </tbody>
    <!-- / table -->
    </table>

    <a class="btn btn-primary float-right mt-2 mr-2" href="./">Back</a>

<?php require_once('inc/footer.php'); ?>