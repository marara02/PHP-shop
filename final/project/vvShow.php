<?php
session_start();
include_once 'database/authorization.php';
include_once 'footer.php';

class vvShow{
    public function choose($information)
    {
        $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        $link = $conn->connect();
        $statement = $link->prepare("SELECT * FROM vacancies");
        $statement->execute();

        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $vacancy = new Vacancy();
        $vacancy->setPosition($row['position']);
        $vacancy->setSalary($row['salary']);
        $vacancy->setDescription($row['description']);

        setcookie("Vacancy",$information,time()+3600);
        $_COOKIE['Vacancy'] = array(
            'position'=>$vacancy->getPosition(),
            'salary'=>$vacancy->getSalary(),
            'description'=>$vacancy->getDescription()
        );

        return $vacancy;
    }

}