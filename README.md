# suez-School
شيل اي حاجه متعلقه بالجالاري
كل حاجه تمام ماعادا 
database بتاعت 
1)Online Admission Form
2)Send a Message





<?php
if (isset($_POST['submit']) && $_POST['formId'] === 'registrationForm') {
  // Process registration form data
}



<?php
if (isset($_POST['submit']) && $_POST['formId'] === 'contactUsForm') {
  // Process contact form data
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (isset($_POST['formId']) && $_POST['formId'] === 'registrationForm') {
        // Handle registration form data
        if (isset($_POST['name'], $_POST['gender'], $_POST['dob'], $_POST['grade'], $_POST['contact'], $_POST['email'], $_POST['comment'])) {
            // Process registration form data
            echo "Registration Successfully!";
        } else {
            echo "<p class='alert alert-danger text-center'>All fields are required.</p>";
        }
    } else if (isset($_POST['formId']) && $_POST['formId'] === 'contactUsForm') {
        // Handle contact form data
        if (isset($_POST['name']) && null !== $_POST['name']) {
            // Process contact form data
            echo "Contact-us Successfully!";
        } else {
            echo "Error: Name is not set or is null.";
        }
    }
} else {
    echo "No form submitted.";
}

حلو احنا وصلنا لمرحله كويسه بس ناقص اننا نفصل بيت two form

Error: Name is not set or is null