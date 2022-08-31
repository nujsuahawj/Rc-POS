<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rc Hmong | products details</title>
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

    <header class="header">
        <div class="container">
            <?php require_once 'header.php';?>
        </div>
    </header><!-- header-end ./ -->

    <main class="wrapper">
        <section class="product-details">
            <div class="container-fluid">
                <?php 
                if (isset($_GET['product_id'])) {
                    $id = $_GET['product_id'];
                            include_once '../connection/db.php'; 
                            $sql = 'SELECT `product_variants`.`selling_price` AS sell, `product_variants`.`purchase_price` AS per, products.title AS name, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.id ='.$id.' AND product_variants.enabled=1 ORDER BY products.id DESC;';
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row gap-5">
                    <div class="col-md-12 col-lg-6 mx-auto single-product-img">
                        <div class="big-product">
                            <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" class="pro-img img-fluid" alt="<?php echo $row["name"];?>" />
                        </div>
                        <div class="img-gr d-flex justify-content-between">
                            <div class="col-lg-3 img-col">
                                <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" class="img-sm" alt="<?php echo $row["name"];?>" />
                            </div>
                            <div class="col-lg-3 img-col">
                                <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" class="img-sm" alt="<?php echo $row["name"];?>" />
                            </div>
                            <div class="col-lg-3 img-col">
                                <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" class="img-sm" alt="<?php echo $row["name"];?>" />
                            </div>
                            <div class="col-lg-3 img-col">
                                <img src="../adminrc/public/uploads/products/<?php echo $row["image"] ?>" class="img-sm" alt="<?php echo $row["name"];?>" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5 mx-auto single-details">
                        <h6>ໜ້າຫຼັກ / ລາຍລະອຽດສິນຄ້າ</h6>
                        <h4><?php echo $row["name"] ?></h4>
                        <h2>ລາຄາ<?php echo $row["sell"] ?>₭</h2>
                        <button class="btn-normal"><a href="https://wa.me/8562058782577?text=ສະບາຍດີອ້າຍRc ຂ້ອຍຕ້ອງການສັ່ງຊື້ສິນຄ້າ %28<?php echo $row["name"] ?> ລາຄາ: <?php echo $row["sell"] ?>%29 ຂ້ອຍຈະໂອນເງິນເຂົ້າບັນຊີຂອງເຈົ້າແລະແຈ້ງສະຖານທີສົ່ງລາຍລະອຽດໃຫ້ເດີ້.">ຊື້ເລີຍ</a></button>
                        <h4>ລາຍລະອຽດ</h4>
                        <span>
                            <?php echo $row["details"] ?>
                        </span>
                    </div>
                </div>
                <?php }} }?>
            </div>
        </section>

        <section class="product-support">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-12">
                        <h4>ໂປໂມຊັນພິເສດ &amp; ຮັບໄປເລີຍ</h4>
                        <h2>ຄາຂົນສົ່ງ <span>ຟຣີ</span> ຖ້າຊື້ສິນຄ້າ &amp; ມູນລະຄາ 300 000KIP ຂື້ນໄປ</h2>
                        <button class="btn-normal">ເບິ່ງເພີ່ມຕື່ມ</button>
                    </div>
                </div>
            </div>
        </section><!-- product support-end -->

    </main><!-- main-body-end ./ -->

    <?php require_once '../footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        var proImg = document.querySelector(".pro-img");
        var imgCol = document.querySelectorAll(".img-sm");

        imgCol.forEach((img) => {
            img.onclick = () => {
                proImg.src = img.src;
            }
        });
    </script>
</body>
</html>