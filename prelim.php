<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment and Grade Processing System</title>
</head>
<body>
    <h3 class="center" >Student Enrollment and Grade Processing System</h3>

<?php
    // Initialize variables 
    $studentInfoSubmitted = false;
    $gradesSubmitted = false;
    $firstName = $lastName = $age = $gender = $course = $email = "";
    $prelim = $midterm = $final = $averageGrade = 0;
    $gradeStatus = "";

    // Check if the student info form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitStudentInfo'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $studentInfoSubmitted = true;
    }

    // Check if the grades form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitGrades'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        
        $prelim = $_POST['prelim'];
        $midterm = $_POST['midterm'];
        $final = $_POST['final'];
        $averageGrade = ($prelim + $midterm + $final) / 3;
        $gradeStatus = $averageGrade >= 75 ? "Passed" : "Failed";
        $gradesSubmitted = true;
    }
    ?>

<!-- studentform -->
    <form method="post">
        <h4>Student Enrollment Form</h4>
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>

        <label>Gender</label>
        <div class="gender-container">
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="Male">
            
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="Female" checked>
        </div>

        <label for="course">Course</label>
        <select id="course" name="course" required>
            <option value="BSIT">BSIT</option>
            <option value="BSHRM">BSHRM</option>
            <option value="BSCRIM">BSCRIM</option>
        </select>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <button type="submit" name="submitStudentInfo" class="submit-btn">Submit Student Information</button>
    </form>

<!-- gradeform -->
    <form method="post">
        <h4>Enter Grades for <?php echo htmlspecialchars($firstName . " " . $lastName); ?></h4>
        
        <label for="prelim">Prelim</label>
        <input type="number" id="prelim" name="prelim" required>

        <label for="midterm">Midterm</label>
        <input type="number" id="midterm" name="midterm" required>

        <label for="final">Final</label>
        <input type="number" id="final" name="final" required>

        <button type="submit" name="submitGrades" class="submit-btn" style="background-color: #28a745;">Submit Grades</button>
    </form>


<!-- Display Student Details and Grades -->
    <div class="student-details">
        <h4>Student Details</h4>
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstName); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastName); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
        <p><strong>Course:</strong> <?php echo htmlspecialchars($course); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

        <h4>Grades</h4>
        <p><strong>Prelim:</strong> <?php echo htmlspecialchars($prelim); ?></p>
        <p><strong>Midterm:</strong> <?php echo htmlspecialchars($midterm); ?></p>
        <p><strong>Final:</strong> <?php echo htmlspecialchars($final); ?></p>
        <p><strong>Average Grade:</strong> 
            <?php echo number_format($averageGrade, 2); ?> - 
            <span class="<?php echo $gradeStatus == 'Passed' ? 'text-success' : 'text-danger'; ?>">
                <?php echo $gradeStatus; ?>
            </span>
        </p>
    </div>
    
</body>
</html>