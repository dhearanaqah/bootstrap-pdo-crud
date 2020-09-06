<?php require_once('inc/header.php'); ?>

    <h3> Add </h3>
    <form class="mt-3">
    
    <!-- form-->
    <div class="form-group">
        <label>First</label>
        <input type="text" name="first_name" class="form-control" placeholder="First">
    </div>
    <div class="form-group">
        <label>Last</label>
        <input type="text" name="last_name" class="form-control" placeholder="Last">
    </div>
    <!-- / form -->
    </form>
    
    <button type="submit" class="btn btn-success float-right mt-2">Save</button>
    <a class="btn btn-primary float-right mt-2 mr-2" href="index.html">Back</a>

<?php require_once('inc/footer.php'); ?>