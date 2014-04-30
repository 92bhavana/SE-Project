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
        'noetbos' => 'noetbos', 
        'mdp' => 'mdp',
        'vfm' => 'vfm',
        'sibmc' => 'sibmc',
        'ioise' => 'ioise',
        'glcbil' => 'glcbil',
        'ecoe' => 'ecoe',
        'soe' => 'soe',
        'iwaasbse' => 'iwaasbse');

$facultyOptionNames = array(
        'mdpcpcstp' => 'mdpcpcstp',
        'c' => 'c',
        'pm' => 'pm',
        'sii' => 'sii',
        'cmempfce' => 'cmempfce'
        );

$studentOptionNames = array(
        'iv' => 'iv',
        'ws' => 'ws',
        'p' => 'p',
        'si' => 'si',
        'pp' =>'pp',
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
$query = sprintf("insert into corporateDetailsMba " .
        " (noetbos,mdp,vfm,sibmc,ioise,glcbil,ecoe,soe,iwaasbse) " .
        " values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysql_real_escape_string($corporateOptionValues['noetbos']),
        mysql_real_escape_string($corporateOptionValues['mdp']),
        mysql_real_escape_string($corporateOptionValues['vfm']),
        mysql_real_escape_string($corporateOptionValues['sibmc']),
        mysql_real_escape_string($corporateOptionValues['ioise']),
        mysql_real_escape_string($corporateOptionValues['glcbil']),
        mysql_real_escape_string($corporateOptionValues['ecoe']),
        mysql_real_escape_string($corporateOptionValues['soe']),
        mysql_real_escape_string($corporateOptionValues['iwaasbse']));

mysqli_query($con, $query) or die(mysqli_error($con));
$corporateDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for corporateDetails : " . $corporateDetailsId . "<br/>";

// Insert into Faculty Details
$query = sprintf("insert into facultyDetailsMba " .
        " (mdpcpcstp,c,pm,sii,cmempfce) " .
        " values ('%s', '%s', '%s', '%s', '%s');",
        mysql_real_escape_string($facultyOptionValues['mdpcpcstp']),
        mysql_real_escape_string($facultyOptionValues['c']),
        mysql_real_escape_string($facultyOptionValues['pm']),
        mysql_real_escape_string($facultyOptionValues['sii']),
        mysql_real_escape_string($facultyOptionValues['cmempfce']));

mysqli_query($con, $query) or die(mysqli_error($con));
$facultyDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for facutlyDetails : " . $facultyDetailsId . "<br/>";

// Insert into Student Details
$query = sprintf("insert into studentDetailsMba " .
        " (iv,ws,p,si,pp) " .
        " values ('%s', '%s', '%s', '%s','%s');",
        mysql_real_escape_string($studentOptionValues['iv']),
        mysql_real_escape_string($studentOptionValues['ws']),
        mysql_real_escape_string($studentOptionValues['p']),
        mysql_real_escape_string($studentOptionValues['si']),
        mysql_real_escape_string($studentOptionValues['pp']));

mysqli_query($con, $query) or die(mysqli_error($con));
$studentDetailsId = mysqli_insert_id($con);
echo "<br/>Insert id for studentDetails : " . $facultyDetailsId . "<br/>";


$query = sprintf("INSERT INTO capMba " .
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
echo "<a href='./capMba.html'>Click Here</a> to add details of one more company";


mysqli_close($con);
?>