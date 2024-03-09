        <?php
        include 'dbconfig.php'; 
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $dateofbrith = isset($_POST['date']) ? $_POST['date'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';


            $dateofbrith = (DateTime::createFromFormat('Y-m-d', $dateofbrith) !== false) ? $dateofbrith : '0000-00-00';

        
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            
            $stmt = $conn->prepare("INSERT INTO user (name, email, password1, DateOFBrith, Phone, Address,Gender) VALUES (?, ?, ?, ?, ?, ?,?)");
            $stmt->bind_param("sssssss", $name, $email, $hashedPassword, $dateofbrith, $phone, $address,$gender);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                header("Location: home.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
        $conn->close();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Registration Page</title>
            <link rel="stylesheet" href="register.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        </head>
        <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="registration-card">
                        <h2 class="text-center">Sign Up</h2>
                        <form action="register.php" method="post">
                            <div class="form-group">
                                <label for="username"><i class="fas fa-user"></i> Username</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fas fa-lock"></i> Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="date"><i class="fas fa-calendar-alt"></i> Date of Birth</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="gender"><i class="fas fa-venus-mars"></i> Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" required>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="fas fa-home"></i> Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        </body>
        </html>

