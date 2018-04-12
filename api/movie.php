<?php
        $auth = "c9d8ddfd";
        $title = $_POST["title"];
        $title = str_replace(' ', '+', $title);
        $year = $_POST["year"];
        $url = "http://www.omdbapi.com/?apikey=$auth&t=$title&y=$year";
        if (isset($_POST["plot"])) {
          $url = $url . "&plot=full";
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);
        echo $url;
        echo $output;
?>
