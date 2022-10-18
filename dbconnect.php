<?php 
    function connect(){
        $hostname = "localhost";
        $username = "M.EDWIN";
        $password = "Eddy37115436";
        $dbname = "myfoodwebsite";
        $link = new mysqli($hostname,$username,$password,$dbname) or die("Could not connect");
        return $link;
    }

    function getData($sql) {
        $link = connect();
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function setData($sql) {
        $link = connect();
        if (mysqli_query($link, $sql)) {
	        # code...
            return true;
        } else {
            return false;
        }

    }

?>