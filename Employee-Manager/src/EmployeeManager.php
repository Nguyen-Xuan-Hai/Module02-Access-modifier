<?php

namespace src;
use src\Employee;

class EmployeeManager
{
    protected $pathFile;


    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    function readFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }

    function saveFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->pathFile, $dataJson);
    }

    function getAll() {
        $data = $this->readFile();
        $employees = [];
        foreach ($data as $item) {
            $employee = new Employee($item);
            array_push($employees, $employee);
        }
        include_once "view/list.php";
    }

    function delete($index) {
        $data = $this->readFile();
        array_splice($data, $index, 1);
        $this->saveFile($data);
        header('location: index.php');
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "view/add.php";
        } else {
            $dataFile = $this->readFile();
            $request = [
                "firstName" => $_REQUEST['first_name'],
                "lastName" => $_REQUEST['last_name'],
                "birthday" => $_REQUEST['birthday'],
                "address" => $_REQUEST['address'],
            ];
            array_push($dataFile, $request);
            $this->saveFile($dataFile);
            header('location: index.php');
        }
    }
}