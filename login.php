    <?php

    session_start();
    include_once 'dbconfig.php';

    $lockoutDurationTime = 600;  

    if (isset($_SESSION['lockoutKey'])) {
        $lockoutTime = $_SESSION['lockoutKey'];
        $timeSinceLockout = time() - $lockoutTime;
        if ($timeSinceLockout < $lockoutDurationTime) {
            $_SESSION['error_message'] = "Account is locked. Please try again later.";
        } else {
            unset($_SESSION['lockoutKey']);
            $_SESSION['login_attempts'] = 0;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $_SESSION['error_message'] = "Please enter both email and password.";
        } else {
            if (isset($_SESSION['lockoutKey'])) {
                $timeSinceLockout = time() - $_SESSION['lockoutKey'];
                if ($timeSinceLockout < $lockoutDurationTime) {
                    $_SESSION['error_message'] = "Account is locked. Please try again later.";
                    return;
                } else {
                    unset($_SESSION['lockoutKey']);
                }
            }

            $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;

            $sql = "SELECT id, password1 FROM user WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $storedPassword = $row['password1'];

                if (password_verify($password, $storedPassword)) {
                    $_SESSION['id'] = $row['id']; 
                    $_SESSION['login_attempts'] = 0;
                    unset($_SESSION['lockoutkey']);
                    header('location: home.php');
                    exit;
                } else {
                    $_SESSION['error_message'] = "Incorrect password.";
                }
            } else {
                $_SESSION['error_message'] = "User not found. Please check your email or sign up.";
            }

            if ($_SESSION['login_attempts'] >= 3) {
                $_SESSION['lockoutKey'] = time();
                $_SESSION['error_message'] = "Account is locked. Please try again later.";
            }
        }
    }

    $conn->close();


    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Page</title>

    </head>
    <link rel="stylesheet" href="login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <body>
        <div class="wraper">
            <form action="login.php" id="signinForm" class="signin-form" method="post">
                <h1>Login</h1>

                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error_message']; ?>
                    </div>
                <?php unset($_SESSION['error_message']); endif; ?>

                <div class="input-box">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your  password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn" <?php echo (isset($_SESSION['lockoutKey'])) ? 'disabled' : ''; ?>>Login</button>
                <div class="register-link">
            <p>Don't have an account
            <a href="register.php">Register</a></p>
        </div>
            </form>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>

