<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sendico form</title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Sendico form</h2>
            <p class="lead">Test form with validation for Sendico company with Ajax send form and save data to MySQL</p>
        </div>

        <div class="row g-3">
            <div class="col-lg-12">
                <h4 class="mb-5">Billing address</h4>

                <form class="needs-validation" id="send-form">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">First name and Last name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Mikki Satto" value="" required>
                            <div class="invalid-feedback name">
                                Valid first name and Last name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="Japan">Japan</option>
                                <option value="Japan">China</option>
                                <option value="Russia">Russia</option>
                                <option value="United States">United States</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="1234 Main St" required>
                        </div>

                        <div class="col-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Еxact address" required>
                        </div>

                        <div class="col-4">
                            <label for="apartment" class="form-label">Apartment <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="apartment" name="apartment" placeholder="House number">
                        </div>

                        <div class="col-12">
                            <label for="date" class="form-label">Delivery date</label>
                            <input type="date" class="form-control" id="date" name="date" value="<? echo date("Y-m-d", strtotime("now")) ?>" required>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg">Continue to checkout</button>

                    <div class="spinner-border spinner text-primary text-center mt-3 none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="alert alert-success none mt-3" role="alert">
                        Your billing details is stored!
                    </div>
                </form>

            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 Sendico</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>
