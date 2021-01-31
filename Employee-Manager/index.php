<?php
require __DIR__ . '/vendor/autoload.php';

$employeeManager = new \src\EmployeeManager('data.json');

$page = isset($_GET['page']) ? $_GET['page'] : null;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
switch ($page) {
    case "list":
        $employeeManager->getAll();
        break;
    case "delete":
        $index = $_GET['id'];
        $employeeManager->delete($index);
        break;
    case "add":
        $employeeManager->add();
        break;
    default:
        $employeeManager->getAll();
}
?>
</body>
</html>