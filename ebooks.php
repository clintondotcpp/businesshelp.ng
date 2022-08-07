<?php
$conn = new mysqli("localhost", "Kurinton", "@@90210@@", "ebooks");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
    exit();
}

$sql = "SELECT * FROM ebook_list";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebooks</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">businesshelpNG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link" href="news.php">News</a>
                    <a class="nav-link active" aria-current="page" href="ebooks.php">Ebooks</a>
                    <a class="nav-link" href="marketing.php">Hire a Digital Marketer</a>
                    <a class="nav-link" href="websites.php">Hire a web developer</a>
                    <a class="nav-link" href="calendly.php">Speak with a business consultant</a>
                </div>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <?php foreach ($products as $product) { ?>
        <div class="container mt-5 pt-5 mb-5 pt-5">
            <div class="card product-card card-static pb-3"><span class="badge bg-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="https://cartzilla.createx.studio/img/grocery/catalog/01.jpg" alt="Product" class="loaded tns-complete"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Self Help</a>
                    <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html"><?php $product['ebook_name']; ?></a></h3>
                    <div class="product-price"><span class="text-accent">NGN <?php echo $product['ebook_price'] ?></span>
                        <del class="fs-sm text-muted">NGN 10,000</del>
                    </div>
                </div>
                <div class="product-floating-btn">
                    <a class="btn btn-primary btn-shadow btn-sm" type="button" href="payment.php?product=<?php echo $product['ebook_id']; ?>">View Details</a>
                </div>
            </div>
        </div>
    <?php } ?>




</body>

</html>