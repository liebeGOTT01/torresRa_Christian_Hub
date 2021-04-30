<?php
    session_start();
    require_once("store.php");

    $mystore->login();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <title>Christian Hub | login</title>
</head>

<style>
    body {
        margin-top:10%
    }
    
    .form-style input {
        border: 0;
        height: 50px;
        border-radius: 0;
        border-bottom: 1px solid #ebebeb;
    }
    
    .form-style input:focus {
        border-bottom: 1px solid #007bff;
        box-shadow: none;
        outline: 0;
        background-color: #ebebeb;
    }
    
    .sideline {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #ccc;
    }
    
    button {
        height: 50px;
    }
    
    .sideline:before,
    .sideline:after {
        content: '';
        border-top: 1px solid #ebebeb;
        margin: 0 20px 0 0;
        flex: 1 0 20px;
    }
    
    .sideline:after {
        margin: 0 0 0 20px;
    }

    .con_border {
        background-image: url("data:image/jpeg;base64,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");
        padding:8px;
    }
</style>

<body>
    <div class="container d-flex justify-content-center">
        <div class="con_border">
            <div class="row no-gutters shadow-lg">
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://www.quickanddirtytips.com/sites/default/files/styles/insert_large/public/images/14171/calvary-cavalry.jpg?itok=cIZbqkVz" alt="" class="img-fluid h-100">
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="pb-3">Login Form</h3>
                    <div class="form-style">
                        <form method = "post">
                            <div class="form-group pb-3">
                                <input type="text" placeholder="Email" class="form-control" name="username">
                            </div>
                            <div class="form-group pb-3">
                                <input type="password" placeholder="Password" class="form-control" name="password">
                            </div>
                            <br>
                            <div class="pb-2">
                                <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2" name="submit">Submit</button>
                            </div>
                        </form>
                        <div class="sideline">OR</div>
                        <div>
                            <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>