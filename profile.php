    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        exit('User not logged in.');
    }

    $user_id = $_SESSION['id'];

    include_once "dbconfig.php";


    $userData = [];

    if (isset($_SESSION['id'])) {

        $sql = "SELECT * FROM user WHERE id = ?";

        $stmt = $conn->prepare($sql);

        
        $stmt->bind_param("i", $user_id);

    
        $stmt->execute();

    
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            exit('No user found with ID: ' . $user_id);
        }

        $userData = $result->fetch_assoc();
    }

    $stmt->close();
    $conn->close();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>User Profile</title>
        <link rel="stylesheet" href="profile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container my-4">
            <div class="profile-card">
                <div class="profile-header">
                    <h2>User Profile</h2>
                </div>
                <div class="profile-details">
                    <?php if ($userData): ?>
                        <h5><?php echo $userData['name']; ?></h5>
                        <p><strong>Email:</strong> <?php echo $userData['email']; ?></p>
                        <p><strong>Phone:</strong> <?php echo $userData['Phone']; ?></p>
                        <p><strong>Date of Birth:</strong> <?php echo $userData['DateOFBrith']; ?></p>
                        <p><strong>Gender:</strong> <?php echo $userData['Gender']; ?></p>
                        <p><strong>Address:</strong> <?php echo $userData['Address']; ?></p>
                        <div class="action-buttons">
                            <a class='btn btn-success' href='update.php?id=<?php echo $userData['id']; ?>'>Edit</a>
                            <a class='btn btn-danger' href='delete.php?id=<?php echo $userData['id']; ?>' onclick='return confirm("Are you sure you want to delete this?")'>Delete</a>
                        </div>
                    <?php else: ?>
                        <p>User information not available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
    </html>


