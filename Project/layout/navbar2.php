<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CustomBuilt.</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li"><a href="index.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                
            <form class="navbar-form navbar-right" method="get" action="Product.php">
                <div class="form-group">
                    <?php include("layout/searchbar.php"); ?> 
                </div>
            </form>
            </ul>
            <div>
                <?php include("layout/sigin.php");?>
                <?php include("layout/signup.php");?>
            </div>
        </div>
    </div>
</div>