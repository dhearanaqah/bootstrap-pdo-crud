<?php require_once('inc/header.php'); ?>
    
    <a class="btn btn-primary" href="add.php">Add</a>
    <table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Options</th>
        </tr>
    </thead>

    <?php
        //1. koneksi basis data
        require_once('inc/db.php');
        //2. query
        $result = $pdo->query('SELECT * FROM user');
    ?>

    <tbody>
        <?php 
            while ($row = $result->fetch())
        {
        ?>
        
        <tr>
            <th scope="row"><?php echo $row ['id']; ?></th>
            <td><?php echo $row ['first_name']; ?></td>
            <td><?php echo $row ['last_name']; ?></td>
            <td>
                <a class="btn btn-sm btn-danger" href="index.html">Delete</a>
                <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a class="btn btn-sm btn-info" href="detail.php?id=<?php echo $row['id']; ?>">Detail</a>
            </td>
        </tr>

        <?php
        }
        ?>

    </tbody>
    </table>

<?php require_once('inc/footer.php'); ?>