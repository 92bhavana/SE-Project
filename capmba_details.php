<?php
include "mysql_connection.php";
include "utility_functions.php";

$companyName = getRequiredValue('companyName');

$query = sprintf("select * from capMba where capCompany = '%s';",mysql_real_escape_string($companyName));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$companyDetailsMba = mysqli_fetch_array($result);

$corporateDetailsId = $companyDetailsMba['corporateDetailsId'];
$query = sprintf("select * from corporateDetailsMba where id = '%s';",mysql_real_escape_string($corporateDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$corporateDetailsMba = mysqli_fetch_array($result);

$facultyDetailsId = $companyDetailsMba['facultyDetailsId'];
$query = sprintf("select * from facultyDetailsMba where id = '%s';",mysql_real_escape_string($facultyDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$facultyDetailsMba = mysqli_fetch_array($result);

$studentDetailsId = $companyDetailsMba['studentDetailsId'];
$query = sprintf("select * from studentDetailsMba where id = '%s';",mysql_real_escape_string($studentDetailsId));
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$studentDetailsMba = mysqli_fetch_array($result);


$companyDetailsMba['corporateDetailsMba'] = $corporateDetailsMba;
$companyDetailsMba['facultyDetailsMba'] = $facultyDetailsMba;
$companyDetailsMba['studentDetailsMba'] = $studentDetailsMba;

print_r(json_encode($companyDetailsMba));