<?php
include('connect.php');

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];

    $sql = "INSERT INTO quiz(q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES('$q1', '$q2', '$q3', '$q4',  '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";

        if($conn->query($sql)==true){
            echo "<script language='javascript' type='text/javascript'>
                alert('Cadastro realizado com sucesso!');
                window.location.href='genshin.html';</script>";
            die();
        }else{
            echo "Error ".$sql."<br>".$conn->error;
            echo "Favor preencher todas as alternativas.";
        }
        $conn->close();
?>