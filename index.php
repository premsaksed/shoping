<?php
include_once 'head.php';
?>
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/baner.jfif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/baner1.jfif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/baner2.jfif" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

include_once 'connect.php';

$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($objCon, $strSQL);
if (!$objQuery) {
    echo $objCon->error;
    exit();
}
?>
<div class="mt-5 mx-5">



    <div class="row row-cols-1 row-cols-md-4  g-4">
        <?php
        while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
        ?>
            <form action="order.php" method="post">

                <div class="col">
                    <div class="card">
                        <img src="img/<?php echo $objResult["Picture"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $objResult["ProductName"]; ?></h5>
                            <p class="card-text">฿ <?php echo $objResult["Price"]; ?></p>
                            <div>
                                <input type="hidden" name="txtProductID" value="<?php echo $objResult["ProductID"]; ?>" size="2">
                                <input type="text" name="txtQty" value="1" size="2">
                                <input class="btn btn-outline-warning mx-3" type="submit" value="Add"> 
            </form>
    </div>
</div>
</div>
</div>
<?php
        }
?>
</div>

</div>






<?php
mysqli_close($objCon);
?>



<?php
include_once 'footer.php';
?>