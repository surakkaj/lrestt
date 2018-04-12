<?php
        $isbn = $_POST["isbn"];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://openlibrary.org/api/books?bibkeys=ISBN:"$isbn"&jscmd=data");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);
        echo $output;
?>
