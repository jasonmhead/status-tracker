<?php

    if($_POST['action'] == "write"){
        $links_html = $_POST['links_html'];
        $status_html = $_POST['status_html'];

        $status_data = array($links_html, $status_html);
        $json_data = json_encode($status_data);

        if(file_put_contents('status_html.json', $json_data) === false){
            echo "Cannot open/write datafile";
            exit;
        }

        echo "Data written.";
    }


    if($_POST['action'] == "read"){
        $json_data = file_get_contents('status_html.json');
        echo $json_data;
    }