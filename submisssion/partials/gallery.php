<?php

    require './admin/database/connect.php';

    $check = "SELECT * FROM `rhuman_group`";

    $result = mysqli_query($conn, $check);

    if ($result) {

        $tracker = [];

        while ($row = mysqli_fetch_assoc($result)) {

            $group_name = $row['name'];

            array_push($tracker, $group_name);

        }

        if(empty($tracker)) {

            echo "<p style='
                    font-size: 30px;
                    font-weight: 800;
                    line-height: 27px;
                    letter-spacing: 0em;
                    color: white;
                    '>
                    No Pictures Check back later
                </p>";

            return;

        }

        $tracker_two = [];

        for($k = 0; $k < count($tracker); $k++) {

            $check_again = "SELECT * FROM `rhuman_image` WHERE `category`= '$tracker[$k]'";

            $result_again = mysqli_query($conn, $check_again);

            if($result_again) {

                while ($row_again = mysqli_fetch_assoc($result_again)) {

                    array_push($tracker_two, $row_again);

                }

                    
            }

        }

        $grouped_array = array();

        foreach ($tracker_two as $row) {
            $category = $row['category'];
            $grouped_array[$category][] = $row;
        }

        foreach ($grouped_array as $category => $rows) {

            $total_ok = count($rows);

            $work_with_future = json_encode($rows);

            foreach ($rows as $row) {

                $image_again =  $row['image_path'];

                $hmm_hmm = strtoupper($category);
                
                echo "
                <div class='col-md-4'>
                    <div class='box-one'>
                        <div class='image'>
                            <img src='./admin/$image_again' alt=''>
                        </div>
                        <p class='one'>$hmm_hmm</p>
                        <p class='two'>( $total_ok Pictures )</p>
                        <input type='hidden' class='hidden' value='$work_with_future'>
                    </div>
                </div>
                ";

                break;
            }

        }

    } else {
        // Handle the case where the query fails
        echo "Error executing query: " . mysqli_error($conn);
    }


?>