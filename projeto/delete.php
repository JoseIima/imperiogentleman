<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuarios_form WHERE id=$id";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios_form WHERE id=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>