<?php
include "mysql_connection.php";
include "utility_functions.php";



$companyName = getRequiredValue('companyName');
$contactName = getRequiredValue('contactName');
$email	     = getRequiredValue('email');
$others      = getOptionalValue('otherDetails');
/*
the order  :
array(
'dbColumName', 'uiFormName')
*/
$corporateOptionNames = array(
        'experts_nomination' => 'noetbos', 
        'fdp' => 'fdp',
        'adjunct_faculty' => 'af',
        'sibtc' => 'sibtc',
        'ioisepicd' => 'ioisepicd',
        'glcbil' => 'glcbil',
        'erf' => 'erf',
        'soets' => 'soets',
        'jpd' => 'jpd',
        'wwafcmmpfce' => 'wwafcmmpfce',
        'owppfifadp' => 'owppfifadp');

$facultyOptionNames = array(
        'edp' => 'edp',
        'consultancy' => 'c',
        'mentorship' => 'pm',
        'sabbatical' => 'sii',
        'sponsored_research' => 'usriiiojwc'
        );

$studentOptionNames = array(
        'industry_visit' => 'iv',
        'workshops' => 'ws',
        'mini_projects' => 'mpfsi',
        'in_plant_training' => 'ipt',
        );

$corporateOptionValues = [];
$facultyOptionValues = [];
$studentOptionValues = [];
foreach ($corporateOptionNames as $key => $value) {
        $corporateOptionValues[$key] = getOption($value);
}
foreach ($facultyOptionNames as $key => $value) {
        $facultyOptionValues[$key] = getOption($value);
}
foreach ($studentOptionNames as $key => $value) {
        $studentOptionValues[$key] = getOption($value);
}


// use mysql_real_escape_string for security against mysql injection
// Insert into Corporate Details
$query = sprintf("insert into corporatedetails " .
        " (experts_nomination, fdp, adjunct_faculty, sibtc, ioisepicd, glcbil, erf, soets, jpd, wwafcmmpfce, owppfifadp) " .
        " values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysql_real_escape_string($corporateOptionValues['experts_nomination']),
        mysql_real_escape_string($corporateOptionValues['fdp']),
        mysql_real_escape_string($corporateOptionValues['adjunct_faculty']),
        mysql_real_escape_string($corporateOptionValues['sibtc']),
        mysql_real_escape_string($corporateOptionValues['ioisepicd']),
        mysql_real_escape_string($corporateOptionValues['glcbil']),
        mysql_real_escape_string($corporateOptionValues['erf']),
        mysql_real_escape_string($corporateOptionValues['soets']),
        mysql_real_escape_string($corporateOptionValues['jpd']),
        mysql_real_escape_string($corporateOptionValues['wwafcmmpfce']),
        mysql_real_escape_string($corporateOptionValues['owppfifadp']));

mysqli_query($con, $query) or die(mysqli_error($con));
$corporateDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for corporateDetails : " . $corporateDetailsId . "<br/>";

// Insert into Faculty Details
$query = sprintf("insert into facultydetails " .
        " (edp, consultancy, mentorship, sabbatical, sponsored_research) " .
        " values ('%s', '%s', '%s', '%s', '%s');",
        mysql_real_escape_string($facultyOptionValues['edp']),
        mysql_real_escape_string($facultyOptionValues['consultancy']),
        mysql_real_escape_string($facultyOptionValues['mentorship']),
        mysql_real_escape_string($facultyOptionValues['sabbatical']),
        mysql_real_escape_string($facultyOptionValues['sponsored_research']));

mysqli_query($con, $query) or die(mysqli_error($con));
$facultyDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for facutlyDetails : " . $facultyDetailsId . "<br/>";

// Insert into Student Details
$query = sprintf("insert into studentdetails " .
        " (industry_visit, workshops, mini_projects, in_plant_training) " .
        " values ('%s', '%s', '%s', '%s');",
        mysql_real_escape_string($studentOptionValues['industry_visit']),
        mysql_real_escape_string($studentOptionValues['workshops']),
        mysql_real_escape_string($studentOptionValues['mini_projects']),
        mysql_real_escape_string($studentOptionValues['in_plant_training']));

mysqli_query($con, $query) or die(mysqli_error($con));
$studentDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for studentDetails : " . $facultyDetailsId . "<br/>";


$query = sprintf("INSERT INTO cap " .
        " (capCompany, contactName, email, others, corporateDetailsId, facultyDetailsId, studentDetailsId) " .
        " VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysql_real_escape_string($companyName),
        mysql_real_escape_string($contactName),
        mysql_real_escape_string($email),
        mysql_real_escape_string($others),
        $corporateDetailsId,
        $facultyDetailsId,
        $studentDetailsId);


mysqli_query($con, $query) or die(mysqli_error($con));

echo "Company details saved successfully<br/>";
echo "<a href='./cap.html'>Click Here</a> to add details of one more company";


mysqli_close($con);
?>