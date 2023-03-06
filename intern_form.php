<!DOCTYPE html>
<html>
<!--
F_name
M_name
L_name

<!column_dob date
column_college_id>

Contact_No.
Login_Email
Gender 
Marital_Status 
City 
UG_Course 
PG_Course
Oraganization
Designation
Notice_Period
IT_Exp
Total_Exp
Preferred_Location
Current_CTC
Expected_CTC
Skill_Category
Key_Skills
Resume_Title
Attach_Resume-->
<body>
<h2 style="color:#4d004d;background-color:#ffe6ff;"> Register Candidate Profile</h2>

<form method="post" action="intern_connect.php">
        <label for="Enter first name"><b>First Name</b></label>
        <input type="text" name="F_name" id="F_name"><br><br>
        <label for="Enter middle name"><b>middle Name</b></label>
        <input type="text" name="M_name" id="M_name"><br><br>
        <label for="Enter last name"><b>Last Name</b></label>
        <input type="text" name="L_name" id="L_name"><br><br>
        <label for="Gender"><b>Selecr your gender</b></label>
        <select name="Gender" id="Gender">
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="other">other</option>
        </select><br><br>
        <label for="Marital Status"><b>Selecr your marital status</b></label>
        <select name="Marital_Status" id="Marital_Status">
            <option value="unmarried">unmarried</option>
            <option value="married">married</option>
            <option value="other">other</option>
        </select><br><br>
        <label for="Enter city"><b>Enter city</b></label>
        <input type="text" name="City" id="City"><br><br>
        <label for="Login Email"><b>Enter Login Email</b></label>
        <input type="text" name="Login_Email" id="Login_Email"><br><br>
        <label for="Contact No"><b>Enter Contact No</b></label>
        <input type="text" name="Contact_No" id="Contact_No"><br><br>
        <label for="UG Course"><b>Enter UG Course</b></label>
        <input type="text" name="UG_Course" id="UG_Course"><br><br>
        <label for="PG Course"><b>Enter PG Course</b></label>
        <input type="text" name="PG_Course" id="PG_Course"><br><br>
        <label for="Organization"><b>Enter Organization</b></label>
        <input type="text" name="Organization" id="Organization"><br><br>
        <label for="Designation"><b>Enter Designation</b></label>
        <input type="text" name="Designation" id="Designation"><br><br>
        <label for="Notice Period"><b>Enter Notice Period</b></label>
        <input type="text" name="Notice_Period" id="Notice_Period"><br><br>
        <label for="IT Exp"><b>Enter IT Exp</b></label>
        <input type="text" name="IT_Exp" id="IT_Exp"><br><br>
        <label for="Total Exp"><b>Enter Total Exp</b></label>
        <input type="text" name="Total_Exp" id="Total_Exp"><br><br>
        <label for="Current CTC"><b>Enter Current CTC</b></label>
        <input type="text" name="Current_CTC" id="Current_CTC"><br><br>
        <label for="Expected CTC"><b>Enter Expected CTC</b></label>
        <input type="text" name="Expected_CTC" id="Expected_CTC"><br><br>

        <label for="Skill Category"><b>Enter Skill Category</b></label>
        <input type="text" name="Skill_Category" id="Skill_Category"><br><br>
        <label for="Key Skills"><b>Enter Key Skills</b></label>
        <input type="text" name="Key_Skills" id="Key_Skills"><br><br>
        <label for="Resume Title"><b>Enter Resume Title</b></label>
        <input type="text" name="Resume_Title" id="Resume_Title"><br><br>

        <label for="Attach Resume"><b>Enter Attach Resume</b></label>
        <input type="file" name="Attach_Resume" id="Attach_Resume"><br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
        </form>
        
    </body>
</html> 