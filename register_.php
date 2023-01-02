<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.80">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title> Register | ADS20A00079Y</title>

    <style>
        nav:hover {
			position: absolute;
			background: var(--color4);
			box-shadow: 0 6px 5px 1px rgba(0, 0, 0, 0.384);
		}
        section{
            padding-top: 10rem;
        }
        section div{
            display: block;
            justify-content: center;
            width: 100%;
            margin: auto;
        }
        .error, .success {
            text-align: center;
            font-weight: bold;
            font-size: 36px;
        }
        .error{
            color: red;
        }
        .success{
            color: green;
        }
        .show-data{
            display: inherit;
            max-width: 300px;
        }
        .show-data h2{
            text-align: center;
            font-size: 28px;
        }
        .show-data p{
            display: grid;
            font-weight: bold;
            color: var(--color2);
            font-size: large;
            margin: 3px auto;
        }
    </style>

</head>

<body>
<nav class="ease">
        <div class="navbar">
            <div class="logo"> FIFAVILLA </div>
            <div class="menu">
                <ul class="menu-list A">
                    <li><a href="index.html" fill="orange" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg> Home
                        </a>
                    </li>
                    <li><a href="images.html" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                            </svg> Images
                        </a>
                    </li>
                    <li><a href="audio.html" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z" />
                            </svg> Audio
                        </a>
                    </li>
                    <li><a href="video.html" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                            </svg> Video
                        </a>
                    </li>
                    <li><a href="about.html" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg> About Us
                        </a>
                    </li>
                </ul>

                <div id="menuBtn">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="dropdown-menu" id="dropdown-menu">
                    <ul class="menu-list B">
                        <li><a href="index.html" fill="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg> Home
                            </a>
                        </li>

                        <li><a href="images.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                </svg> Images
                            </a>
                        </li>

                        <li><a href="audio.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z" />
                                </svg> Audio
                            </a>
                        </li>

                        <li><a href="video.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                </svg> Video
                            </a>
                        </li>

                        <li><a href="about.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg> About Us
                            </a>
                        </li>
                    </ul>
                </div>
                <script src="./script.js"></script>
            </div>
        </div>
    </nav>

    <section>
        <div>
            <?php
            // Create variables for user data input
            $fname = $lname = $gender = $dateofbirth = $email = $phone = $userphoto = $reach = $rating = $review = "";
            
            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                if (empty($_POST["fname"])) {
                    echo "<span class=\"error\">Error: First Name Required</span>";;
                } elseif (empty($_POST["lname"])) {
                    echo "<span class=\"error\">Error: Surname Required</span>";
                } elseif (empty($_POST["gender"])) {
                    echo "<span class=\"error\">Error: Gender Required</span>";
                    echo "<br><span style=\"font-size: 14px; margin-top: 5px;\">Click <a href=\"register.php\" style=\"color: blue;\">here</a> to go back to the form page.</span>";
                    die();
                } elseif (empty($_POST["dateofbirth"])) {
                    echo "<span class=\"error\">Error: Date of Birth Required</span>";
                } elseif (empty($_POST["email"])) {
                    echo "<span class=\"error\">Error: Email Required</span>";
                } elseif (empty($_POST["phone"])) {
                    echo "<span class=\"error\">Error: Phone Required</span>";
                } elseif (empty($_POST["userphoto"])) {
                    echo "<span class=\"error\">Error: Profile Photo Required</span>";
                } elseif (empty($_POST["reach"])) {
                    echo "<span class=\"error\">Error: Reach Required</span>";
                } elseif (empty($_POST["rating"])) {
                    echo "<span class=\"error\">Error: Rating Required</span>";
                } elseif (empty($_POST["review"])) {
                    echo "<span class=\"error\">Error: Review Required</span>";
                } else {

                    //Validation Function - removes unwanted spaces & invalid characters
                    function val($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    //Assign variables to user input
                    $fname = val($_POST["fname"]);
                    $lname = val($_POST["lname"]);
                    $gender = val($_POST["gender"]);
                    $dateofbirth = val($_POST["dateofbirth"]);
                    $email = val($_POST["email"]);
                    $phone = val($_POST["phone"]);
                    $userphoto = val($_POST["userphoto"]);
                    $reach = val($_POST["reach"]);
                    $rating = val($_POST["rating"]);
                    $review = val($_POST["review"]);

                }
                
            }

            
            // Initializing server connection for mysql database
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "fifavilla";

            // Creating connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Checking connection
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }

            //PHP SQL Queries
            $sql = "INSERT INTO fifavilla.user (fname, lname, gender, dateofbirth, email, phone, userphoto, reach, rating, review)
                    VALUES ('$fname', '$lname', '$gender', '$dateofbirth', '$email', '$phone', '$userphoto', '$reach', '$rating', '$review')";
            
            
            //Checking connection to database
            /*if ($conn->query($sql) === TRUE) {
                echo "<h2 class=\"success\">New record created. Registration successful.</h2><br><br>";
            } else {
                die("Error: " . $sql . "<br>" . $conn->error);
            }*/
            
            if (!mysqli_query($conn, $query)) {
                die("Error: " . $sql . "<br>" . $conn->error);    
            } else {
                echo "<h2 class=\"success\">New record created. Registration successful.</h2><br><br>";
            }
            ?>
            
            <div class="show-data">
                <?php
                    // Show registration data 
                    echo "<h2> New Record </h2>";
                    echo "<p>Name: </p>" . $fname . " " . $lname;
                    echo "<br>";
                    echo "<p>Date of Birth: </p>" . $dateofbirth;
                    echo "<br>";
                    echo "<p>Gender: </p>" . $gender;
                    echo "<br>";
                    echo "<p>Email: </p>" . $email;
                    echo "<br>";
                    echo "<p>Phone: </p>" . $phone;
                    echo "<br>";
                    echo "<p>Profile Photo: </p>" . $userphoto;
                    echo "<br>";
                    echo "<p>Reach: </p>" . $reach;
                    echo "<br>";
                    echo "<p>Rating: </p>" . $rating;
                    echo "<br>";
                    echo "<p>Review: </p>" . $review;
                    echo "<br>";

                    //Close server connection
                    $conn->close();
                ?>
            </div>

        </div>
    </section>

    <footer id="footer">
        <div class="footer flex ease">
            <div class="useful-links">
                <h4>Useful Links</h4>
                <ul class="text-body">
                    <li><a href=""> Blog </a></li>
                    <li><a href=""> Terms</a></li>
                    <li><a href=""> Privacy Policy </a></li>
                    <li><a href=""> Contact </a></li>
                    <li><a href=""> Frequently Asked Questions </a></li>
                    <ul>
            </div>
            <div class="about">
                <h4>About Us</h4>
                <p class="text-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptates officiis optio nulla quia
                    rem sapiente vero error animi corrupti, dolorem dignissimos molestias perspiciatis repellendus
                    perferendis libero quod at, minima dolore illum enim vitae dolor veniam? Quos, ipsum voluptatem
                    aspernatur magnam eos sed vitae voluptates est hic magni dignissimos laboriosam.<br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eveniet alias molestias similique vitae
                    praesentium veniam ratione accusantium, perferendis aut labore minus quisquam explicabo expedita
                    enim quibusdam ipsum tempore maxime ullam nisi consectetur cum repellat. Quidem labore nulla
                    expedita culpa pariatur.
                </p>
            </div>
            <div class="email-us">
                <h4>Reach Us</h4>
                <ul class="text-body">
                    <form href="mailto:ads20a00079y@ait.edu.gh">
                        <li>
                            <label>Name:</label>
                            <input type="text" name="name" placeholder="Your name" required>
                        </li>
                        <li>
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="username123@email.com" required>
                        </li>
                        <li>
                            <label>Subject:</label>
                            <input type="text" name="message-subject" placeholder="Subject matter" required>
                        </li>
                        <li>
                            <label>Message:</label>
                            <textarea type="text" name="message-body" placeholder="Write to us.." required></textarea>
                        </li>
                        <li>
                            <button>Send
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.6" height="13.6" fill="white" class="bi bi-upload" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                </svg>
                            </button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <div class="social-links">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                </a>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
            </div>
            &copy ADS20A00079Y | <a href="index.html">FIFAVILLA 2022</a>
        </div>
    </footer>
    <a href="#" class="go-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>

</body>

</html>