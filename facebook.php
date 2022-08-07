<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Ads</title>
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
                    <a class="nav-link" href="blog.php">Blog</a>
                    <a class="nav-link" href="news.php">News</a>
                    <a class="nav-link" href="ebooks.php">Ebooks</a>
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

    <div class="container pt-5 mt-5">
        <header>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Facebook Ads Pricing</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers
                    with this Bootstrap example. It’s built with default Bootstrap components and utilities with
                    little customization.</p>
            </div>
        </header>


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Weekly Plans
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <main>
                            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Free</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">N11,000<small class="text-muted fw-light">/week</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>10 users included</li>
                                                <li>2 GB of storage</li>
                                                <li>Email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Pro</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">NGN 22,000<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>20 users included</li>
                                                <li>10 GB of storage</li>
                                                <li>Priority email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                        <div class="card-header py-3 text-bg-primary border-primary">
                                            <h4 class="my-0 fw-normal">Enterprise</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">NGN 33,000<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>30 users included</li>
                                                <li>15 GB of storage</li>
                                                <li>Phone and email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Contact us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="display-6 text-center mb-4">Compare plans</h2>

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 34%;"></th>
                                            <th style="width: 22%;">Starter</th>
                                            <th style="width: 22%;">Pro</th>
                                            <th style="width: 22%;">Enterprise</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Public</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Private</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Permissions</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Sharing</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Unlimited members</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Extra security</th>
                                            <td></td>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Biweekly Plans
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <main>
                            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Free</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">N10,000<small class="text-muted fw-light">/week</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>10 users included</li>
                                                <li>2 GB of storage</li>
                                                <li>Email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Pro</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>20 users included</li>
                                                <li>10 GB of storage</li>
                                                <li>Priority email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                        <div class="card-header py-3 text-bg-primary border-primary">
                                            <h4 class="my-0 fw-normal">Enterprise</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>30 users included</li>
                                                <li>15 GB of storage</li>
                                                <li>Phone and email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Contact us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="display-6 text-center mb-4">Compare plans</h2>

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 34%;"></th>
                                            <th style="width: 22%;">Free</th>
                                            <th style="width: 22%;">Pro</th>
                                            <th style="width: 22%;">Enterprise</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Public</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Private</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Permissions</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Sharing</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Unlimited members</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Extra security</th>
                                            <td></td>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Monthly Plans
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <main>
                            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Free</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">N10,000<small class="text-muted fw-light">/week</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>10 users included</li>
                                                <li>2 GB of storage</li>
                                                <li>Email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Sign up for
                                                free</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="my-0 fw-normal">Pro</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>20 users included</li>
                                                <li>10 GB of storage</li>
                                                <li>Priority email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                        <div class="card-header py-3 text-bg-primary border-primary">
                                            <h4 class="my-0 fw-normal">Enterprise</h4>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li>30 users included</li>
                                                <li>15 GB of storage</li>
                                                <li>Phone and email support</li>
                                                <li>Help center access</li>
                                            </ul>
                                            <button type="button" class="w-100 btn btn-lg btn-dark">Contact us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="display-6 text-center mb-4">Compare plans</h2>

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 34%;"></th>
                                            <th style="width: 22%;">Free</th>
                                            <th style="width: 22%;">Pro</th>
                                            <th style="width: 22%;">Enterprise</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Public</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Private</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">Permissions</th>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Sharing</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Unlimited members</th>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-start">Extra security</th>
                                            <td></td>
                                            <td></td>
                                            <td><svg class="bi" width="24" height="24">
                                                    <use xlink:href="#check"></use>
                                                </svg></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                <small class="d-block mb-3 text-muted">© 2017–2022</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>