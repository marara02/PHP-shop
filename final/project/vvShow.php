<?php
session_start();
include_once 'database/authorization.php';
include_once 'footer.php';

class vvShow{
    public function choose()
    {
        $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        $sql = "SELECT * FROM vacancy";
        $stmt = $conn->prepare($sql);
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        while ($row != null) {
            $Vacancy = new Vacancy();
            $Vacancy->setPosition($row['position']);
            $Vacancy->setSalary($row['salary']);
            $first = $Vacancy->ShortDescription($row['description']);
            $position = $Vacancy->getPosition();
            $money = $Vacancy->getSalary();
            echo "<div class='container p-3 my-3 border'>
                  <h1>$position: Salary: $money</h1>
                   <p>$first</p>
                     </div>

";
        }
    }
}
$vvv = new vvShow();
$vvv->choose();