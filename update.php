        <?php
        include "dbconfig.php";
        $id="";
        $name="";
        $email="";
        $Gender="";
        $Address="";
        $phone="";
        $dob="";

        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql="select * from user where id=$id";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            $name=$row["name"];
            $email=$row["email"];
            $password1=$row["password1"];
            $Address=$row['Address'];
            $phone=$row['Phone'];
            $Gender=$row['Gender'];
            $dob=$row['DateOFBrith'];
            
        }
        if(isset($_POST['id'])){
            $id=$_POST["id"];
            $name=$_POST["username"];
            $email=$_POST["email"];
            $Address=$_POST['Address'];
            $phone=$_POST['Phone'];
            $Gender=$_POST['Gender'];
            $dob=$_POST['DateOFBrith'];
            $sql="UPDATE user SET name='$name',email='$email',Address='$Address',Phone='$phone',Gender='$Gender',DateOFBrith='$dob' where id='$id'";
            if($conn->query($sql) ===TRUE){
                header('location: profile.php');
                exit;
            }
            else{
                echo "Error Updating record", $conn->error;
            }
            $conn->close();
        }

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Member Profile</title>
            <link rel="stylesheet" href="update.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        </head>
        <body>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 profile-form-container">
                        <h1 class="text-center">Update Member Profile</h1>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $id?>" class="form-control">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="username" value="<?php echo $name; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="Address" value="<?php echo $Address; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <input type="text" name="Gender" value="<?php echo $Gender; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="Phone" value="<?php echo $phone; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="DateOFBrith" value="<?php echo $dob; ?>" class="form-control">
                            </div>
                            <button type="submit" class="btn submit-btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>
        </html>
