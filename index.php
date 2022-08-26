<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rc Hmong | Rc Online Store</title>
    <meta name="rchmong" conten="Rc Hmong">
    <meta name="jacksainther" content="nujsuahawj">
    <meta name="rchmong" content="Rc Hmong, Yog tab laj rau peb hmoob txuas tus, ຮ້ານ Rc Hmong ຂາຍທຖກຢ່າງ" />
    <link rel="icon" href="./assets/img/favicon.png" sizes="32x32" />
    <link rel="icon" href="./assets/img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <!-- <div class="page-loader loader">
        <div class="cmps">
            <span class="mt-4 mx-auto d-block text-center">
                ກຳລັງໂຫຼດ<b></b><b></b><b></b>
            </span>
        </div>
    </div> -->

    <?php require_once 'header.php';?>

    <main class="wrapper">
        <section class="carousel">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./assets/img/slider/1.jpg" class="d-block w-100" alt="Dhurat&euml; q&euml; ja Vlen!">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h5>ລາຍລະອຽດຂອງຂໍ້ມູນ</h5>
                            <!-- <p></p> -->
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/img/slider/2.jpg" class="d-block w-100" alt="Citizen">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>ລາຍລະອຽດຂອງຂໍ້ມູນ</h5>
                            <!-- <p></p> -->                            
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section><!-- wrapper&carousel-end ./ -->

        <section class="products pm">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <article class="title text-center">
                            <h2 class="title-sec">ສິນຄ້າປະເພດ</h2>
                            <p class="sub-title">ເຄື່ອງສຳອາງ <i class="uil uil-list-ui-alt"></i></p>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        include_once './connection/db.php'; 
                        $sql = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.id AS id, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.category_id =1 AND product_variants.enabled=1 ORDER BY products.id DESC LIMIT 15;';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="product-item discount">
                            <div class="product-item-inner">
                                <span class="discount"><?php $pur =$row["per"]; $sell =$row["sell"]; $per = $pur-$sell; echo substr($per, 0, 3); ?>%</span>
                                <a href="../products/single-products.php?product_id=<?php echo $row["id"]; ?>" class="link">
                                    <figure class="img-box">
                                        <img src="./adminrc/public/uploads/products/<?php echo $row["image"] ?>" alt="<?php echo $row["name"];?>">
                                    </figure>
                                </a>
                                <div class="details">
                                    <span class="cat"><?php echo $row["name"]; ?></span>
                                    <a href="../products/single-products.php?product_id=<?php echo $row["id"]; ?>" class="link">
                                    </a>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <h4><?php echo floor($row["sell"]. 0); ?>₭</h4>
                                    </div>
                                    <a href="../products/single-products.php?product_id=<?php echo $row["id"]; ?>" class="go-to-cart"><i class="uil uil-shopping-bag shopping-cart cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- products-end ./ -->
                <?php }?>
                <div class="row">
                    <div class="col-12 text-center mt-5 mx-auto">
                        <a href="../products/products.php?cagory=1" class="btn btn-theme">ເບິ່ງທັງໝົດ <i class="uil uil-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php    }else{
                        echo '
                            <div class="row">
                                <div class="col-12 text-center mt-5 mx-auto">
                                    <a href="#" class="btn btn-theme">ສິນຄ້າຈະມີໄຫວໆນີ້...</a>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
        </section><!-- products-end ./ -->

        <?php require_once 'promotions.php';?>

        <section class="products pm">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <article class="title text-center">
                            <h2 class="title-sec">ສິນຄ້າປະເພດ</h2>
                            <p class="sub-title">ເຄື່ອງນຸ່ງຮົ່ມ <i class="uil uil-list-ui-alt"></i></p>
                        </article>
                    </div>
                </div>
                <div class="row">
                <?php 
                        include_once './connection/db.php'; 
                        $sql1 = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.id AS id, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.category_id =2 AND product_variants.enabled=1 ORDER BY products.id DESC LIMIT 15;';
                        $result1 = mysqli_query($conn, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                            while($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="product-item discount">
                            <div class="product-item-inner">
                                <span class="discount"><?php $pur =$row1["per"]; $sell =$row1["sell"]; $per = $pur-$sell; echo substr($per, 0, 3); ?>%</span>
                                <a href="../products/single-products.php?product_id=<?php echo $row1["id"]; ?>" class="link">
                                    <figure class="img-box">
                                        <img src="./adminrc/public/uploads/products/<?php echo $row1["image"] ?>" alt="<?php echo $row1["name"];?>">
                                    </figure>
                                </a>
                                <div class="details">
                                    <span class="cat"><?php echo $row1["name"]; ?></span>
                                    <a href="../products/single-products.php?product_id=<?php echo $row1["id"]; ?>" class="link">
                                    </a>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <h4><?php echo floor($row1["sell"]. 0); ?>₭</h4>
                                    </div>
                                    <a href="../products/single-products.php?product_id=<?php echo $row1["id"]; ?>" class="go-to-cart"><i class="uil uil-shopping-bag shopping-cart cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- products-end ./ -->
                    <?php }?>
                    <div class="row">
                        <div class="col-12 text-center mt-5 mx-auto">
                            <a href="../products/products.php?cagory=2" class="btn btn-theme">ເບິ່ງທັງໝົດ <i class="uil uil-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php    }else{
                            echo '
                                <div class="row">
                                    <div class="col-12 text-center mt-5 mx-auto">
                                        <a href="#" class="btn btn-theme">ສິນຄ້າຈະມີໄຫວໆນີ້...</a>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </section><!-- products-end ./ -->

        <section class="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <article class="banner-img">
                            <div class="circle-img">
                                <div class="circle-img-inner">
                                    <div class="img-circle"></div>
                                    <div class="c-gift">
                                        <article class="banner-text">
                                            <h2 class="mb-3">ຮ້ານ &amp; Rc Hmong.</h2>
                                            <h1 class="mb-3">ຍິນດີຕ້ອນຮັບ!</h1>
                                            <p>
                                                ລູກຄ້າທຸກຄົນສາມາດສັ່ງຊື້ຄ້າທີ່ຕົນເອງຕ້ອງການໄດ້ ພາຍໃນຮ້ານນີ້ ແລະຂໍໃຫ້ລູກຄ້າທຸຄົນມີຄວາມສຸກໃນການເລືອກສິນຄ້າຂອງຕົນເອງ.
                                            </p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section><!-- banner-end ./ -->

        <section class="products pm">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <article class="title text-center">
                            <h2 class="title-sec">ສິນຄ້າປະເພດ</h2>
                            <p class="sub-title">ເຄື່ອງອື່ນໆ <i class="uil uil-list-ui-alt"></i></p>
                        </article>
                    </div>
                </div>
                <div class="row">
                <?php 
                        include_once './connection/db.php'; 
                        $sql2 = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.id AS id, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.category_id =3 AND product_variants.enabled=1 ORDER BY products.id DESC LIMIT 15;';
                        $result2 = mysqli_query($conn, $sql2);
                        if (mysqli_num_rows($result2) > 0) {
                            while($row2 = mysqli_fetch_assoc($result2)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="product-item discount">
                            <div class="product-item-inner">
                                <span class="discount"><?php $pur =$row2["per"]; $sell =$row2["sell"]; $per = $pur-$sell; echo substr($per, 0, 3); ?>%</span>
                                <a href="../products/single-products.php?product_id=<?php echo $row2["id"]; ?>" class="link">
                                    <figure class="img-box">
                                        <img src="./adminrc/public/uploads/products/<?php echo $row2["image"] ?>" alt="<?php echo $row2["name"];?>">
                                    </figure>
                                </a>
                                <div class="details">
                                    <span class="cat"><?php echo $row2["name"]; ?></span>
                                    <a href="../products/single-products.php?product_id=<?php echo $row2["id"]; ?>" class="link">
                                    </a>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <h4><?php echo floor($row2["sell"]. 0); ?>₭</h4>
                                    </div>
                                    <a href="../products/single-products.php?product_id=<?php echo $row2["id"]; ?>" class="go-to-cart"><i class="uil uil-shopping-bag shopping-cart cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- products-end ./ -->
                    <?php }?>
                    <div class="row">
                        <div class="col-12 text-center mt-5 mx-auto">
                            <a href="../products/products.php?cagory=3" class="btn btn-theme">ເບິ່ງທັງໝົດ <i class="uil uil-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php    }else{
                            echo '
                                <div class="row">
                                    <div class="col-12 text-center mt-5 mx-auto">
                                        <a href="#" class="btn btn-theme">ສິນຄ້າຈະມີໄຫວໆນີ້...</a>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
            </div>
        </section><!-- products-end ./ -->

        <section class="feature">
            <div class="container">
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/free_shipping.png" alt="rchmong" />
                        <figcaption>ຄາຂົນສົ່ງ</figcaption>
                    </figure>
                </div>
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/shopping.gif" alt="rchmong" />
                        <figcaption>ສັ່ງຊື້ online</figcaption>
                    </figure>
                </div>
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/safe-box.gif" alt="rchmong" />
                        <figcaption>ປະຫຍັດເງິນ</figcaption>
                    </figure>
                </div>
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/shopping-online.png" alt="rchmong" />
                        <figcaption>ມີໂປຣ...</figcaption>
                    </figure>
                </div>
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/computer.png" alt="rchmong" />
                        <figcaption>ມ່ວນຊື່ນ</figcaption>
                    </figure>
                </div>
                <div class="fe-box">
                    <figure class="feature-box">
                        <img src="./assets/img/features/social-care.gif" alt="rchmong" />
                        <figcaption>ໃຫ້ຄຳແນະນຳ</figcaption>
                    </figure>
                </div>
            </div>
        </section><!-- features-end ./ -->

    </main><!-- main-body-end ./ -->


    <?php require_once 'footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>