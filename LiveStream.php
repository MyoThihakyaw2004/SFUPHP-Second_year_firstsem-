            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Safe Livestreaming</title>
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                <link href="style.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body>
            <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">SafeNet</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav navul">
                                <li class="nav-item active">
                                    <a class="nav-link " href="home.php"> <i class="fa-solid fa-house-user"></i> Home <span class="sr-only">(current)</span></a>
                                </li>
                            
                                <li class="nav-item active">
                                    <a class="nav-link" href="information.php">  <i class="fa-solid fa-circle-info"></i> Information <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="socialMedia.php" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-icons"></i>    Most Popular SMA 
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
                                    <a class="nav-link" href="supporthealth.php"><i class="fa-solid fa-person-circle-question"></i> Help <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="LiveStream.php">  <i class="fa-solid fa-video"></i> Livestreaming<span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.php"> <i class="fa-solid fa-envelope"></i>  Contact <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item active">
                                    <a class="nav-link" href="guidance.php"> <i class="fa-solid fa-lightbulb"></i> Guidance <span class="sr-only">(current)</span></a>
                                </li>
                                
                            </ul>
                        </div>

                        
                    </nav>
                </header>
                <div class="container mt-5">
                    <h1 class="text-center">Safe Livestreaming</h1>
                    <p class="lead text-center">Understanding Livestreaming and Ensuring a Safe Environment</p>
                    
                    
                    <iframe id="youtubeVideo" width="1200" height="600" src="https://www.youtube.com/watch?v=mmoGqkXtNRo&list=RDZaVJCCeQMXM&index=7/mmoGqkXtNRo&list=RDZaVJCCeQMXM&index=7/" frameborder="0" allowfullscreen></iframe>
                    
                    <button id="nextVideoBtn" class="btn btn-primary">Next Video</button>
                </div>
                <footer class="footer mt-3">
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


                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                
                    var videoIds = [
                        'vPlWDFtP0T0', 
                        'NqMTqy4X6h0',
                        'yJ9oEi3Yyg0',

                    ];

                    var currentVideo = 0;
                    var youtubeVideo = document.getElementById('youtubeVideo');
                    var nextVideoBtn = document.getElementById('nextVideoBtn');

                
                    function playCurrentVideo() {
                        var videoId = videoIds[currentVideo];
                        var videoUrl = 'https://www.youtube.com/embed/' + videoId;
                        youtubeVideo.src = videoUrl;
                    }

                
                    playCurrentVideo();

                
                    nextVideoBtn.addEventListener('click', function() {
                        currentVideo++;
                        if (currentVideo >= videoIds.length) {
                            currentVideo = 0;
                        }
                        playCurrentVideo();
                    });
                });
            </script>

            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

            </body>
            </html>
