<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rc Hmong | products</title>
    <meta name="rchmong" conten="Rc Hmong">
    <meta name="jacksainther" content="nujsuahawj">
    <meta name="rchmong" content="Rc Hmong, Yog tab laj rau peb hmoob txuas tus, ຮ້ານ Rc Hmong ຂາຍທຖກຢ່າງ" />
    <link rel="icon" href="../assets/img/favicon.png" sizes="32x32" />
    <link rel="icon" href="../assets/img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="page-loader loader">
        <div class="cmps">
            <span class="mt-4 mx-auto d-block text-center">
                ກຳລັງໂຫຼດ<b></b><b></b><b></b>
            </span>
        </div>
    </div>

    <?php require_once '../header.php';?>

    <main class="wrapper">
        <section class="hero">
            <div class="container-fluid">
                <div class="row">
                    <h2>#ສິນຄ້າ</h2>
                    <p>ລາຍລະອຽດຕ່າງໆ &amp; ທີ່ກ່ຽວຂ້ອງກັບສິນຄ້າ!</p>
                </div>
            </div>
        </section><!-- hero ./ -->

        <section class="products pm">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <article class="title text-center">
                            <h2 class="title-sec">ສິນຄ້າປະເພດ</h2>
                            <p class="sub-title">ທັງໝົດ <i class="uil uil-list-ui-alt"></i></p>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        if (isset($_GET['cagory'])) {
                            $id = $_GET['cagory'];
                            include_once '../connection/db.php'; 
                            $sql = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.id AS id, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.category_id ='.$id.' AND product_variants.enabled=1 ORDER BY products.id DESC;';
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="product-item discount">
                            <div class="product-item-inner">
                                <span class="discount"><?php $pur =$row["per"]; $sell =$row["sell"]; $per = $pur-$sell; echo substr($per, 0, 3); ?>%</span>
                                <a href="./single-products.php?product_id=<?php echo $row["id"]; ?>" class="link">
                                    <figure class="img-box">
                                        <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" alt="<?php echo $row["name"];?>">
                                    </figure>
                                </a>
                                <div class="details">
                                    <span class="cat"><?php echo $row["name"]; ?></span>
                                    <a href="./single-products.php?product_id=<?php echo $row["id"]; ?>" class="link">
                                    </a>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <h4><?php echo floor($row["sell"]. 0); ?>₭</h4>
                                    </div>
                                    <a href="./single-products.php?product_id=<?php echo $row["id"]; ?>" class="go-to-cart"><i class="uil uil-shopping-bag shopping-cart cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }}}else{
                            include_once '../connection/db.php'; 
                            $sql1 = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.id AS id, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id ORDER BY products.id DESC;';
                            $result1 = mysqli_query($conn, $sql1);
                            if (mysqli_num_rows($result1) > 0) {
                                while($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="product-item discount">
                            <div class="product-item-inner">
                                <span class="discount"><?php $pur =$row1["per"]; $sell =$row1["sell"]; $per = $pur-$sell; echo substr($per, 0, 3); ?>%</span>
                                <a href="./single-products.php?product_id=<?php echo $row1["id"]; ?>" class="link">
                                    <figure class="img-box">
                                        <img src="../adminrc/public/uploads/products/<?php echo $row1["image"] ?>" alt="<?php echo $row1["name"];?>">
                                    </figure>
                                </a>
                                <div class="details">
                                    <span class="cat"><?php echo $row1["name"]; ?></span>
                                    <a href="./single-products.php?product_id=<?php echo $row1["id"]; ?>" class="link">
                                    </a>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <h4><?php echo floor($row1["sell"]. 0); ?>₭</h4>
                                    </div>
                                    <a href="./single-products.php?product_id=<?php echo $row1["id"]; ?>" class="go-to-cart"><i class="uil uil-shopping-bag shopping-cart cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }}}
                    ?>
                </div>
        </section><!-- products-end ./ -->

        <!-- <section class="pagination">
            <div class="container">
                <div class="row">
                    <div class="pagination justify-content-center">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">...</a>
                        <a href="#">30</a>
                        <a href="#"><i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section> -->

        <?php require_once '../promotions.php';?>

    </main><!-- main-body-end ./ -->

    <?php require_once '../footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>