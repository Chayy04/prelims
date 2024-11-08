<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment and Grade Processing System</title>
</head>
<body>
    
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

    
</body>
</html>