<?php
$product = $_GET['product'];
if (filter_var($product, FILTER_VALIDATE_INT) === false) {
    die("No valid ID");
}

$conn = new mysqli("localhost", "Kurinton", "@@90210@@", "ebooks");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
    exit();
}
$sql = 'SELECT `ebook_name`, `ebook_price` FROM ebook_list WHERE `ebook_id` = ' . $product . ' ';
$result = mysqli_query($conn, $sql);
$rows = $result->num_rows;
if (!$rows) {
    echo "No Results Found";
} else {
    while ($product = $result->fetch_assoc()) {

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Product Page</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        </head>

        <body>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">businesshelpNG</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Blog</a>
                            <a class="nav-link" href="#">News</a>
                            <a class="nav-link" href="#">Ebooks</a>
                            <a class="nav-link" href="#">Hire a Digital Marketing</a>
                            <a class="nav-link" href="#">Hire a web developer</a>
                            <a class="nav-link" href="#">Connect with Us</a>
                        </div>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <div class="container pt-5 mt-5">
                <form id="paymentForm" class="mb-3" action="paystack.php?product=<?php echo $product['ebook_price'] ?>" method="POST">
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email-address" name="user_email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="amount" class="form-label">Amount</label>
                        <!--<input type="tel" id="amount" class="form-control" required />-->
                        <input class="form-control" id="disabledInput" name="amount" type="text" placeholder="NGN<?php echo $product['ebook_price'] ?>" value="<?php echo $product['ebook_price']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" id="first-name" name="first-name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" id="last-name" name="last-name" class="form-control" />
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary">Pay <?php echo $product['ebook_price'] ?></button>
                    </div>
                </form>
                </section>
            </div>

            <footer class="py-3 my-4 bg-dark">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
                <p class="text-center text-muted">© 2022 Company, Inc</p>
            </footer>




            <script src="paystack.js"></script>
            <script src="https://js.paystack.co/v1/inline.js"></script>
        </body>

        </html>

<?php
    }
}

?>