<?php
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$prLanguage = $_POST["pLang"];
$level = $_POST["level"];
$language = $_POST["lang"];
$compr = $_POST["comprehension"];
$read = $_POST["reading"];
$write = $_POST["writing"];
$company = $_POST["company"];
$number = $_POST["phone"];
$email = $_POST["email"];
$progLangArray =$_POST["pLang"];
$progLangLevelArray =$_POST["level"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];
$fromDate = $_POST["from"];
$toDate = $_POST["to"];
$bDate = $_POST["bdate"];
$driverLicenses = array();
if (isset($_POST['a'])) {
    array_push($driverLicenses, 'A');
}
if (isset($_POST['b'])) {
    array_push($driverLicenses, 'B');
}
if (isset($_POST['c'])) {
    array_push($driverLicenses, 'C');
}
$driverLicenses = implode(', ', $driverLicenses);
//Validate user input:
$nameLangPattern = array("options"=>array("regexp"=>"/[^A-Za-z]/"));
$companyPattern = array("options"=>array("regexp"=>"/[^A-Za-z0-9]/"));
$phonePattern = array("options"=>array("regexp"=>"/[^0-9-\+ ]+/"));
$emailPattern = array("options"=>array("regexp"=>"/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]+$/"));
if (filter_var($firstName, FILTER_VALIDATE_REGEXP, $nameLangPattern) ||
    filter_var($lastName, FILTER_VALIDATE_REGEXP, $nameLangPattern) ||
    strlen($firstName) < 2 || strlen($firstName) > 20 || strlen($lastName) < 2 ||
    strlen($lastName > 20)) {
    die ('First Name and Last Name must contain only letters between 2 and 20 symbols!');
}
foreach ($language as $l) {
    if (filter_var($l, FILTER_VALIDATE_REGEXP, $nameLangPattern)) {
        die ('Language must contain only letters between 2 and 20 symbols!');
    }
}
if (filter_var($company, FILTER_VALIDATE_REGEXP, $companyPattern) ||
    strlen($company) < 2 || strlen($company) > 20) {
    die ('Company Name must contain only letters and numbers between 2 and 20 symbols!');
}
if (filter_var($number, FILTER_VALIDATE_REGEXP, $phonePattern)) {
    die ('Phone Number must contain only numbers, "+", "-" and " "!');
}
if (!filter_var($email, FILTER_VALIDATE_REGEXP, $emailPattern)) {
    die ('Email must contain numbers, letters, only one "@" and only one "."!');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>
    <style>
        td, table, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th colspan="2">Personal Information</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>First Name</td>
        <td><?= htmlspecialchars($firstName) ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= htmlspecialchars($lastName) ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= htmlspecialchars($email) ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?= htmlspecialchars($number) ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= htmlspecialchars($gender) ?></td>
    </tr>
    <tr>
        <td>Birth Date</td>
        <td><?= htmlspecialchars($bDate) ?></td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td><?= htmlspecialchars($nationality) ?></td>
    </tr>
    </tbody>
</table>
<br />

<table>
    <thead>
    <tr>
        <th colspan="2">Last Work Position</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Company Name</td>
        <td><?= htmlspecialchars($company) ?></td>
    </tr>
    <tr>
        <td>From</td>
        <td><?= htmlspecialchars($fromDate) ?></td>
    </tr>
    <tr>
        <td>To</td>
        <td><?= htmlspecialchars($toDate) ?></td>
    </tr>
    </tbody>
</table>
<br />

<table>
    <thead>
    <tr>
        <th colspan="2">Computer Skills</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Programming Languages</td>
        <td>
            <table>
                <thead>
                <tr>
                    <th>Language</th>
                    <th>Skill Level</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i < count($progLangArray); $i++): ?>
                    <tr>
                        <td><?= htmlspecialchars($progLangArray[$i]) ?></td>
                        <td><?= htmlspecialchars($progLangLevelArray[$i]) ?></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<br />

<table>
    <thead>
    <tr>
        <th colspan="2">Other Skills</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Languages</td>
        <td>
            <table>
                <thead>
                <tr>
                    <th>Language</th>
                    <th>Comprehension</th>
                    <th>Reading</th>
                    <th>Writing</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i < count($language); $i++): ?>
                    <tr>
                        <td><?= htmlspecialchars($language[$i]) ?></td>
                        <td><?= htmlspecialchars($compr[$i]) ?></td>
                        <td><?= htmlspecialchars($read[$i]) ?></td>
                        <td><?= htmlspecialchars($write[$i]) ?></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </td>
    <tr>
        <td>Driver`s License</td>
        <td><?= htmlspecialchars($driverLicenses) ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>