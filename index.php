<?php

include 'connect.php';




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {


    if (isset($_POST['name'], $_POST['gender'], $_POST['dob'], $_POST['grade'], $_POST['contact'], $_POST['email'], $_POST['comment'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $grade = $_POST['grade'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        // Assuming your table name is 'registration'
        $sql = "INSERT INTO registration (name, gender, dob, grade, contact, email, comment) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $name, $gender, $dob, $grade, $contact, $email, $comment);

            if (mysqli_stmt_execute($stmt)) {
                echo " Registration Successfully!";
            } else {
                echo "Wellcome You In Suez Intarnational School " . mysqli_error($con) . "</p>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<p class='alert alert-danger text-center'>Error in preparing statement: " . mysqli_error($con) . "</p>";
        }
    } else {
        echo "<p class='alert alert-danger text-center'>All fields are required.</p>";
    }
}

        
// Another Form
if (isset($_POST['name']) && null !== $_POST['name']) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (isset($_POST['message']) && null !== $_POST['message']) {
        $message = $_POST['message'];
    } else {
        $message = '';
    }

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "Contact-us Successfully!";
    } else {
        die(mysqli_error($con));
    }
} else {
    // Handle the case where $_POST['name'] is not set or is null
    echo "Wellcome You In Suez Intarnational School.";
}


    
?>

<!DOCTYPE html>
<html>

<head>
    <title>Suez Intarnational School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>

        <div class="logo">
            <img src="./img/Job-Board-Website-Like-Glassdoor.jpg" alt="Intarnational School">

            <h1 class=" m-m">Suez International School</h1>
            </a>
        </div>
        <nav>
            <div class="toggle-button">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="close-button"></div>
            <ul>
                <li>
                    <a href="#Home"> Home </a>
                </li>
                <li>
                    <a href="#About">About</a>
                </li>
                <li>
                    <a href="#payments">payments</a>
                </li>
                <li>
                    <a href="#registration">registration</a>

                </li>
                <li>
                    <a href="#Contact">Contact</a>

                </li>
            </ul>
        </nav>
    </header>


    <section id="Home" class="home-section">
        <h1>About Our School</h1>
        <div class="flex-container">
            <div class="about-info">
                <br>
                <h2>Established Date</h2>
                <p>Year of Excellence: Embarking on a Legacy of Educational Excellence Since 1995

                    Suez International School: A Beacon of Learning Since 1995

                    Nurturing Minds, Shaping Futures: Suez International School Celebrates 28 Years of Excellence
                </p>
                <h2>Our Mission</h2>
                <p> Our mission is to provide high-quality education to students of all ages and backgrounds. We
                    believe
                    that education is the key to unlocking a brighter future, and we are committed to helping our
                    students achieve their full potential.It is an English medium school that trains student for
                    good
                    discipline, moral education, technical education and quality education.

                    Our team of experienced educators and staff are dedicated to creating a welcoming and inclusive
                    learning environment, where every student can thrive. Whether you're just starting your
                    educational
                    journey or looking to further your skills, we have a wide range of programs and courses to meet
                    your
                    needs. We believe that learning should be an engaging and enjoyable experience. That's why we
                    use
                    innovative teaching methods and technology to create dynamic and interactive classrooms. We are
                    passionate about education, and we are excited to help you achieve your goals. Thank you for
                    choosing ABC School. We look forward to helping you succeed!


                </p>
                <div class="img">
                    <img src="./img/egyptschoolkids.jpg" alt="">
                    <img src="./img/121546083_3499156220131013_6378676440372428645_o.jpg" alt="">
                    <img src="./img/5153381d930b47aaf673c750afd2b600.jpg" alt="">
                </div>
            </div>
            <div class="members">
                <span class="span-text">Principal</span>
                <div class="img-container">
                    <img src="img/pcp.png" alt="Principal">
                </div>
                <div class="principal-info">
                    <h2>John Doe</h2>
                    <p>John Doe has been the principal of Suez International School Shikshya for over 10 years. He
                        is
                        passionate about
                        education and is dedicated to providing a supportive and inclusive learning environment for
                        all
                        students. Under his leadership, ABC Shikshya has become one of the top educational
                        institutions in the region.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- <section id="About" class="about-section">
        <h1>Yahya ah,ed</h1> -->
    <section id="About" class="about-section">
        <h2>About [Suez International School]</h2>
        <p>
            Suez International School: Where Learning Takes Flight

            A World of Opportunities Awaits: Discover Suez International School

            Igniting Passions, Empowering Dreams: Suez International School, Your Gateway to Success

            [Suez International School] is a leading educational institution committed to providing a high-quality
            learning experience for
            students of all backgrounds. We offer a comprehensive curriculum that prepares students for success in
            college and beyond. Our dedicated faculty and staff are committed to helping students reach their full
            potential.
        </p>
        <img src="./img/503625_main.jpg" alt="Suez International School">
    </section>

    <section id="curriculum">
        <h2>
            Curriculum Overview
        </h2>

        <p>

            A Journey of Holistic Development: Explore the Curriculum at Suez International School

            Nurturing Well-Rounded Individuals: Unveiling the Comprehensive Curriculum at Suez International School

            Academic Excellence, Creative Expression, and Global Citizenship: The Enriching Curriculum at Suez
            International School

            [Suez International School] offers a rigorous and engaging curriculum that aligns with state and national
            standards. Our core courses provide a strong foundation in math, science, English, and history. We also
            offer a variety of electives to meet the diverse interests of our students.


        </p>
        <ul>
            <li>Mathematics: Where numbers dance with reason.</li>
            <li>Science:Unveiling the mysteries of the universe.</li>
            <li>English:Crafting stories that echo through time.</li>
            <li>History:Journeying through the epochs of human triumphs</li>
            <li>Art & Music: Expressing the ineffable through the canvas and melody.</li>
            <li>Music</li>
            <li>Foreign Languages: Bridging cultures through the eloquence of words.</li>
        </ul>
    </section>

    <section id="announcements">
        <h2>Announcements</h2>
        <p>
            New school year starts on September 5th: We are excited to welcome all of our students back for another year
            of learning and growth. Please be sure to check the school website and your email for important updates
            throughout the year.

            Open House on August 25th: We invite all prospective families to join us for our Open House on August 25th.
            This is a great opportunity to tour our facilities, meet our teachers, and learn more about our school's
            programs.

            After-school activities registration now open: We offer a variety of after-school activities for students of
            all interests. Registration is now open for the fall semester.
        </p>
    </section>

    <section id="news">
        <h2>News & Events</h2>
        <p>
            School wins robotics competition: Our robotics team won first place at the regional robotics competition! We
            are so proud of their hard work and dedication.

            Student art exhibition: Our student art exhibition is now on display in the school library. Come and see the
            amazing work of our talented students!

            Guest speaker to talk about climate change: We are excited to welcome guest speaker Dr. Jane Doe to our
            school on October 12th. Dr. Doe will be talking about the importance of climate change and what we can do to
            protect our planet
        </p>
    </section>

    <section id="Academic" class="academic-section">

        <h2>Academics</h2>
        <div class="education-levels">
            <div class="education-level">
                <h3>Pre-primary</h3>
                <p>Age: 3-5 years, Nursery, LKG, UKG</p>
                <p>Curriculum: Play-based learning</p>
            </div>
            <div class="education-level">
                <h3>Primary</h3>
                <p>Class 1 to Class 5</p>
                <p>Curriculum: Reading, writing, math, science, english, nepali, social studies etc.</p>
            </div>
            <div class="education-level">
                <h3>Lower Secondary</h3>
                <p>Class 6 to Class 8</p>
                <p>Curriculum: Science, math, social studies, english, nepali etc.</p>
            </div>
            <div class="education-level">
                <h3>Secondary</h3>
                <p>Class 9 & Class 10</p>
                <p>Curriculum: Science, math, social studies, english, nepali and other optional subjects as
                    directed by
                    NEB.</p>
            </div>
            <div class="education-level">
                <h3>Higher Secondary (+2 Level)</h3>
                <p> Intermediate Level: Class 11 & 12</p>
                <p>Curriculum: Science / Management / Arts</p>
            </div>
        </div>
    </section>

    <hr>
    <section id="payments" class="payments-section">
        <h2>Fees</h2>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tuition Fee</td>
                    <td>$10,000</td>
                    <td>September 1st</td>
                </tr>
                <tr>
                    <td>Registration Fee</td>
                    <td>$500</td>
                    <td>July 15th</td>
                </tr>
                <tr>
                    <td>Technology Fee</td>
                    <td>$200</td>
                    <td>August 15th</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="payment-calendar">
        <h2>Payment Calendar</h2>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Due Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>September</td>
                    <td>$5,500</td>
                </tr>
                <tr>
                    <td>October</td>
                    <td>$2,750</td>
                </tr>
                <tr>
                    <td>November</td>
                    <td>$2,750</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- registration -->
    <section id="registration" class="registration-section">
        <h2>Online Admission Form</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text"  name="name"  placeholder="Enter Name " required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender"  name="gender" required>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="grade">Grade:</label>
                <select name="grade" id="grade" name="grade" required>
                    <option value="1">Grade 1</option> 
                    <option value="2">Grade 2</option>
                    <option value="3">Grade 3</option>
                    <option value="4">Grade 4</option>
                    <option value="5">Grade 5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel"  name="contact" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email"  name="email" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="5"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Submit Application</button>
            </div>
        </form>
        <div class="alert" id="success-message" style="display: none;">
  <p class="alert alert-success text-center">Registration successful</p>
</div>

<script>
  if (registrationSuccessful) {
    document.getElementById('success-message').style.display = 'block';
  }
</script>

    </section>
    <hr>
    <!-- contact -->
    <section id="Contact" class="Contact-section">
        <h2>Contact Us</h2>

        <div class="Contact-us">
            <h3>School Address</h3>
            <p>
                Suez International School<br>
                P.O. Box 1234<br>
                Suez, Egypt<br>
            </p>
        </div>
        <!-- map -->
        <div class="google-map">
            
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110594.6637751734!2d32.593896858319084!3d29.97703760385037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1456257838ae4111%3A0x1f0a056a97ea1bc0!2z2KfZhNiz2YjZitiz2Iwg2YXYrdin2YHYuNipINin2YTYs9mI2YrYsw!5e0!3m2!1sar!2seg!4v1700705787924!5m2!1sar!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="Contact-us" class="">
            <h3>Key Persons</h3>
            <ul>
                <li>Principal: John Doe - principal@suezintlschool.com</li>
                <li>Vice Principal: Jane Doe - viceprincipal@suezintlschool.com</li>
                <li>Admissions Officer: Mary Smith - admissions@suezintlschool.com</li>
            </ul>
        </div>

        <div class="send-message">
            <h3>Send a Message</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea type="message" name="message" rows="5" required></textarea>
                    
                </div>

                <div class="form-group">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h4>Suez Intarnational School</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#About">About us</a></li>
                        <li><a href="#Payments">Payments</a></li>
                        <li><a href="#registration">Registration</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100005204853382&mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/sniiipper"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sniiipper/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="creator">
                <span>Created by Yahya Ahmed </span>
            </div>
        </div>
    </footer>
    <script src="script/nav-menu.js"></script>
</body>

</html>