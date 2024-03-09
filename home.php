            <?php
            session_start();
            // session_destroy();
            if(!isset($_SESSION['id'])){
                header("location:login.php");
            }

            include 'dbconfig.php'; 

            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Social Media Safety Campaign</title>
                <link rel="stylesheet" href="card.css">
                <link href="style.css" rel="stylesheet">
                

                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script async src="https://cse.google.com/cse.js?cx=7498bfc320b9f48f9">
                </script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            </head>
            <body  id="context">
                <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
                        <a class="navbar-brand" href="">SafeNet</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav navul" >
                                <li class="nav-item active">
                                    <a class="nav-link " href="home.php"> <i class="fa-solid fa-house-user"></i> Home <span class="sr-only">(current)</span></a>
                                </li>
                            
                                <li class="nav-item active">
                                    <a class="nav-link" href="information.php"> <i class="fa-solid fa-circle-info"></i> Information <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="socialMedia.php" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-icons"></i>   Most Popular SMA
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fcampaign%2Flanding.php%3Fcampaign_id%3D1652877014%26extra_1%3Ds%257Cc%257C318304347043%257Ce%257Cfacebook%2527%257C%26placement%26creative%3D318304347043%26keyword%3Dfacebook%2527%26partner_id%3Dgooglesem%26extra_2%3Dcampaignid%253D1652877014%2526adgroupid%253D64176044540%2526matchtype%253De%2526network%253Dg%2526source%253Dnotmobile%2526search_or_content%253Ds%2526device%253Dc%2526devicemodel%253D%2526adposition%253D%2526target%253D%2526targetid%253Dkwd-362360550869%2526loc_physical_ms%253D2702%2526loc_interest_ms%253D9065344%2526feeditemid%253D%2526param1%253D%2526param2%253D%26gclid%3DCj0KCQiA35urBhDCARIsAOU7QwmXWOMlPpyn4rTLJJnhDJ9SJdpz3TCvyM2GzliOkAyEEEb7zNzvWO4aAqujEALw_wcB&campaign_id=1652877014&partner_id=googlesem&gclid=Cj0KCQiA35urBhDCARIsAOU7QwmXWOMlPpyn4rTLJJnhDJ9SJdpz3TCvyM2GzliOkAyEEEb7zNzvWO4aAqujEALw_wcB"> <i class="bi bi-facebook">Facebook</i></a></li>
                                    <li><a class="dropdown-item" href="https://twitter.com/?lang=en"><i class="bi bi-twitter-x"></i>Twitter</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="https://www.instagram.com"><i class="bi bi-instagram"></i>Instagram</a></li>
                                    <li><a class="dropdown-item" href="https://www.LinkedIn.com"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                                    <li><a class="dropdown-item" href="socialMedia.php"> <i class="bi bi-search-heart"></i> Search!</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="supporthealth.php"> <i class="fa-solid fa-person-circle-question"></i> Help <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="LiveStream.php"> <i class="fa-solid fa-video"></i> Livestreaming<span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.php"> <i class="fa-solid fa-envelope"></i> Contact <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item active">
                                    <a class="nav-link" href="guidance.php"><i class="fa-solid fa-lightbulb"></i>  Guidance <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link " href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout <span class="sr-only">(current)</span></a>
                                </li>    
                            </ul>
                        
                        </div>
            <nav>
                        <div class="search_box row">
                        
                            <form id="searchForm" class="form-inline">
                                <div class="input-group formdiv">
                                    <input type="text" id="searchInput" class="form-control" placeholder="search" style=" background-color:whitesmoke;">
                                    <button class="btn btn-primary search-button" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        
                            <?php 
            if (isset($_SESSION['id'])) {
                $userId = $_SESSION['id'];

                $stmt = $conn->prepare("SELECT name FROM user WHERE id = ?");
                $stmt->bind_param("i", $userId);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                } else {
                    $name = 'Unknown User'; 
                }
            ?>
                <div>
                    <div class="nav-item active">
                        <a class="nav-link" href="profile.php">
                            <i class="bi bi-person-circle me-2"></i>
                            <?php echo htmlspecialchars($name); ?>
                        </a>
                    </div>    
                </div>
            <?php 
                $stmt->close();
            }
            ?>

                            </div>    
            </div>
                        </div>



            <div id="myModal" class="modal">



            </nav>
                    </nav>
                    </header>
                    <div class="carousel slide" id="ksk"  >
                        <div class="carousel-inner" >
                            <div class="carousel-item show active">
                                <div class="zero">
                                    <div class="zeus">
                                        <div id="liveAlertPlaceholder"></div>
                                        <button type="button" class="btn btn-outline-secondary"id="liveAlertBtn" >See more➡️</button>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item" >
                                <img src="https://c8.alamy.com/comp/2F9WM20/social-media-social-network-background-design-2F9WM20.jpg" alt="" width="100%" height="800px">
                            </div>
                            <div class="carousel-item ">
                                <img src="https://wallpaperaccess.com/full/1308902.jpg" alt="" width="100%" height="800px">
                            </div>
                        </div>
                        <a href="" class="carousel-control-prev" data-bs-target="#ksk" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="" class="carousel-control-next" data-bs-target="#ksk" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="tokegyi">Next Slide</span>
                        </a>
                        <div class="carousel-indicators">
                        <a href="" class="active" data-bs-target="#ksk" data-bs-slide-to="0"></a>
                        <a href=""  data-bs-target="#ksk" data-bs-slide-to="1"></a>
                        <a href=""  data-bs-target="#ksk" data-bs-slide-to="2"></a>
                        </div>
                        
                    </div>


        <div class="safety-section">

                <div class="container mt-2 font">
            <h3 class="text-center">How to stay save online</h3>
        </div>
        <div class="container my-container  ">
                <div class="row row-cols-1 row-cols-md-3 g-5 animation">
                <div class="col">
                <div class="card1 h-100">
                    <img src="./image/p20.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Use a VPN </h5>
                    <p class="card-text">A Virtual Private Network (VPN) can provide an additional layer of security, especially when you are using public Wi-Fi.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card1 h-100">
                    <img src="./image/p21.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Use Strong and Unique Passwords </h5>
                    <p class="card-text">Create complex passwords that use a combination of letters, numbers, and symbols.  It's also important to use different passwords for different accounts.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card1 h-100">
                    <img src="./image/p22.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Be Careful What You Share Online: </h5>
                    <p class="card-text">Think twice before posting personal information, photos, or other details that could be used maliciously.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card1 h-100">
                    <img src="./image/p23.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Monitor Your Accounts </h5>
                    <p class="card-text">Regularly check your online accounts for any unauthorized activity.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
                
                <div class="col">
                <div class="card1 h-100">
                    <img src="./image/p24.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Be Aware of Phishing Scams </h5>
                    <p class="card-text"> Be cautious with emails, messages, or phone calls asking for personal information or directing you to websites where you need to enter personal information. Verify the source before clicking on links or providing any details.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="container mt-5 font">
        <h3 class="text-center">The Most Popular Social Media App</h3>
        </div>
            <div class="container mt-5">
                <div class="row">
                
                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p25.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FaceBook</h5>
                        <p class="card-text">Known for connecting friends and family, it offers various features like news, entertainment, and business pages.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p28.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Twitter</h5>
                        <p class="card-text">Known for its microblogging format, it's popular for real-time news, updates, and public discussions. another

        2 / 2</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p29.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LinkedIn </h5>
                        <p class="card-text"> A professional networking site, it's used for job searching, professional networking, and sharing industry-related news.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p27.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Instagram </h5>
                        <p class="card-text">Popular for photo and video sharing, Instagram also includes Stories, Reels, and shopping features. </p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p30.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Snapchat</h5>
                        <p class="card-text">Popular with younger users, it offers ephemeral photo and video sharing, along with unique filters and AR features.</p>
                    </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card1 h-100 card-teenager">
                    <img src="./image/p26.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">YouTube</h5>
                        <p class="card-text">The largest platform for video sharing and viewing, offering content ranging from entertainment to educational videos.</p>
                    </div>
                    </div>
                </div>
            
            
                
                </div>
            </div>
                    <div class="mainmap mt-2 font" >
                    
                        <div class="row ">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                            <div id="map">
                            <h5>You can find your location</h5>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.7747791384304!2d96.08731538275607!3d21.943208128234197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d66fa6066d9%3A0xe9ad00989e6a1dd8!2sStrategy%20First%20University!5e0!3m2!1sen!2smm!4v1703153229974!5m2!1sen!2smm" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                            </div>
                            <div class="col-md-4">
                            <div class="calendar">
                                <h5>View Calendar</h5>
                                <iframe src="https://calendar.google.com/calendar/embed?height=400&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FYangon&showTitle=0&showTz=0&showTabs=1&showPrint=0&showDate=1" style="border:solid 1px #777" width="400" height="400" frameborder="0" scrolling="no"></iframe>
                            </div>
                            </div>
                        </div>
                

                            </div>

                            </div>



                <footer class="footer mt-2">
            <div class="footer-container">

        
                <div class="footer-section links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="information.php">Information</a></li>
                        <li><a href="LiveStream.php">LiveStream</a></li>
                        <li><a href="socialMedia.php">Social Media</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section contact">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> City, State, Zip</p>
                    <p><i class="fas fa-phone"></i> +1 091-234-5678</p>
                    <p><i class="fas fa-envelope"></i> contact@socialmediacamping.com</p>
                </div>

                <div class="footer-section social">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/YourPage"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/YourPage"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/YourPage/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/YourPage/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p>© <script>document.write(new Date().getFullYear());</script> Social Media Camping. All rights reserved.</p>
            </div>
        </footer>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('#searchForm').submit(function (e) {
                        e.preventDefault();
                        var searchTerm = $('#searchInput').val();
                        $("#context").unmark({
                            done: function(){
                                $("#context").mark(searchTerm, {
                                    "element": "span",
                                    "className": "underline"
                                });
                            }
                        });
                    });
                });
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="snippets.js"></script>
            <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
            </body>
            </html>
            
