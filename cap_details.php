<?php
include "mysql_connection.php";
include "utility_functions.php";

$companyName = getRequiredValue('companyName');

$query = sprintf("select * from cap where capCompany = '%s';",mysql_real_escape_string($companyName));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$companyDetails = mysqli_fetch_array($result);

$corporateDetailsId = $companyDetails['corporateDetailsId'];
$query = sprintf("select * from corporateDetails where id = '%s';",mysql_real_escape_string($corporateDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$corporateDetails = mysqli_fetch_array($result);

$facultyDetailsId = $companyDetails['facultyDetailsId'];
$query = sprintf("select * from facultyDetails where id = '%s';",mysql_real_escape_string($facultyDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$facultyDetails = mysqli_fetch_array($result);

$studentDetailsId = $companyDetails['studentDetailsId'];
$query = sprintf("select * from studentDetails where id = '%s';",mysql_real_escape_string($studentDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$studentDetails = mysqli_fetch_array($result);


$companyDetails['corporateDetails'] = $corporateDetails;
$companyDetails['facultyDetails'] = $facultyDetails;
$companyDetails['studentDetails'] = $studentDetails;

print_r(json_encode($companyDetails));
?>