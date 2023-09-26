<?php require 'controllers/database.php';
 
try {
    $sql_query = "SELECT * FROM countries";
    $result = mysqli_query($connection, $sql_query);
    $sql_query_2 = "SELECT * FROM states WHERE country_code = 'HU'";
    $result_2 = mysqli_query($connection, $sql_query_2);
} catch (\Throwable $th) {}

?>
 
<!DOCTYPE html>
<html lang="hu">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentikációs rendszer alapjai</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="style.css" src="style.css"></link>

    <script src="scripts/jquery.js"></script>
    
    <script src="scripts/input-mask.js"></script>
</head>
 
<body>
 
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card" :hover>
                    <div class="card-body text-center">
                        <h4 class="card-title"><p class="feher">Registration form</p></h4>
                        <form action="controllers/register.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@example.com" oninput="checkInput(this)">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="name@example.com" oninput="checkInput(this)">
                                <label for="username">Username</label>
                            </div>
                            <div class="pwd mb-3">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" oninput="checkInput(this)">
                                <span class="passwordIconHolder">
                                    <i class="passwordIcon" id="passwordIcon" onclick="showPassword()"></i>
                                </span>
                            </div>
                            <div class="pwd mb-3">
                                <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm"
                                    placeholder="Password Confirm" oninput="checkInput(this)">
                                <span class="passwordIconHolder">
                                    <i class="passwordIcon" id="passwordIcon" onclick="showPasswordConfirm()"></i>
                                </span>
                            </div>
                            <select class="form-select mb-3" name="country" id="country">
                                <option value="" disabled selected>Please choose a country...</option>
 
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                }
                                ?>
                            </select>
                            <select class="form-select mb-3" name="state" id="state">
                                <option value="" disabled selected>Please choose a state...</option>
 
                                <?php
                                while ($row = mysqli_fetch_assoc($result_2)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['state_name'] . '</option>';
                                }
                                ?>
                            </select>                        
                            <div class="form-floating mb-3">
                                <input type="street" class="form-control" name="street" id="street"
                                    placeholder="Utca" oninput="checkInput(this)">
                                <label for="email">Utca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="postalcode" class="form-control" name="postal" id="postal"
                                    placeholder="Irányitószám" oninput="checkInput(this)">
                                <label for="email">Irányitószám</label>
                            </div>
                            <div class="form-group">
                                <label><p class="feher">Phone</p></label>
                                <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control phone" oninput="checkInput(this)">
                                <span class="font-13 text-muted"><p class="feher">(999) 999-9999</p></span>
                            </div>
                            <hr>
                            <button class="btn btn-secondary waves-effect button mb-2" name="submit" type="submit" id="submit"><p class="feher">Register</p></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- Password show / hide -->
    <script>
        let pwdInput = document.getElementById("password");
        let passwordSeen = false;
 
        function showPassword() {
            if (passwordSeen == false) {
                pwdInput.setAttribute("type", "text");
                passwordSeen = true;
            }
            else {
                pwdInput.setAttribute("type", "password");
                passwordSeen = false;
            }
        }
 
        let pwdConfirmInput = document.getElementById("passwordConfirm");
        let passwordConfirmSeen = false;
        function showPasswordConfirm() {
            if (passwordConfirmSeen == false) {
                pwdConfirmInput.setAttribute("type", "text");
                passwordConfirmSeen = true;
            }
            else {
                pwdConfirmInput.setAttribute("type", "password");
                passwordConfirmSeen = false;
            }
        }
    </script>
 
</body>
 
 
 
</html>
<script>
function checkInput(input) {
  if(input.value.length > 0) {
    input.style.backgroundColor = "green";
  } else {
    input.style.backgroundColor = "white";
  }
}
</script>