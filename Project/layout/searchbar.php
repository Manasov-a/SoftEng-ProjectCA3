<?php include("layout/header.php"); ?>
<form action="Product.php" method="get" class="navbar-form navbar-right">
    <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="Search..." 
               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    </div>
    <input type="submit" value="Search" class="btn btn-success">
</form>

