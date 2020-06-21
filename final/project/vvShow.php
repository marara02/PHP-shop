<?php
session_start();
include_once 'database/authorization.php';
session_start();

class vvShow  {
    public function choose()
    {
        $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        $link = $conn->connect();
        $statement = $link->prepare("SELECT * FROM vacancies");
        $statement->execute();
        $result = $statement->get_result();
        while ($row = mysqli_fetch_assoc($result)) {

            $vacancy = new Vacancy();
            $vacancy->setPosition($row['position']);
            $vacancy->setSalary($row['salary']);
            $vacancy->setDescription($row['description']);
            $a = $vacancy->getPosition();
            $b = $vacancy->getSalary();
            $c = $vacancy->getDescription();
            echo "
            <div class=\"container p-3 my-3 border\">
  <h1>".$a."</h1>
  <p>".$c."</p>
</div>
            ";
            return $vacancy;
        }
    }
}
$show = new vvShow();
$show->choose();