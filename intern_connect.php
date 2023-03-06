<?php
include 'data.php';
if(isset($_POST['submit']))
{
    $F_name= $_POST['F_name'];
    $M_name= $_POST['M_name'];
    $L_name= $_POST['L_name'];
    $Gender= $_POST['Gender'];
    $Marital_Status=$_POST['Marital_Status'];
    $City=$_POST['City'];
    $Login_Email=$_POST['Login_Email'];
    $Contact_No=$_POST['Contact_No'];
    $UG_Course=$_POST['UG_Course'];
    $PG_Course=$_POST['PG_Course'];
    $Organization=$_POST['Organization'];
    $Designation=$_POST['Designation'];
    $Notice_Period=$_POST['Notice_Period'];
    $IT_Exp=$_POST['IT_Exp'];
    $Total_Exp=$_POST['Total_Exp'];
    $Current_CTC=$_POST['Current_CTC'];
    $Expected_CTC=$_POST['Expected_CTC'];
    $Skill_Category=$_POST['Skill_Category'];
    $Key_Skills=$_POST['Key_Skills'];
    $Resume_Title=$_POST['Resume_Title'];
    $Attach_Resume=$_POST['Attach_Resume'];
    $sql ="insert into Candidate(F_name,M_name,L_name,Gender,Marital_Status,City,Login_Email,Contact_No,UG_Course,PG_Course,Organization,
    Designation,Notice_Period,IT_Exp,Total_Exp,Current_CTC,Expected_CTC,Skill_Category,Key_Skills,Resume_Title,Attach_Resume) 
    values('$F_name','$M_name','$L_name','$Gender','$Marital_Status','$City','$Login_Email','$Contact_No','$UG_Course','$PG_Course','$Organization',
    '$Designation','$Notice_Period','$IT_Exp','$Total_Exp','$Current_CTC','$Expected_CTC','$Skill_Category','$Key_Skills','$Resume_Title','$Attach_Resume')";
    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('new record inserted')</script>";
    }
    else{
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}
?>