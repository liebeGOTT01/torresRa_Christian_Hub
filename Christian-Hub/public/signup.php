<?php 
    include "database.php";

    if (isset($_GET['create'])){
        $email  = $_GET["thisEmail"];
        $pass  = $_GET["thisPass"];
    }

    $sql = "INSERT INTO accounts(username, password, email) VALUES ('".$values['username']."','".password_hash($values['password'], PASSWORD_DEFAULT)."')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert ("succesfully created")</script>';
        echo '<script>window.location.href = "index.php"</script>';
    } else {
        echo '<script>alert (""Error: " . $sql . "<br>" . $conn->error;")</script>';
        echo '<script>window.location.href = "index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Hub | Sign up</title>
</head>
<body>
<div class="container"> 
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <form method='POST' action='create.php'>
                <h4 class="display-4 font-weight-normal text-center">SIGN UP</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" 
                        class="form-control" 
                        id="name" 
                        name="thisName"
                        placeholder="Enter your User Name">
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" 
                        class="form-control" 
                        id="name"
                        name='thisEmail' 
                        placeholder="Enter your email">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" 
                        class="form-control" 
                        id="name"
                        name='thisPass' 
                        placeholder="Enter your password">
                </div>                    
            </div>
            <div class="modal-footer">
              <center>
              <button type="submit" 
                        class="btn btn-primary"
                        name='create'
                >Submit</button>
              <a href= "index.php" class="link-primary">view</a>
              </center>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div> 

</body>
</html>