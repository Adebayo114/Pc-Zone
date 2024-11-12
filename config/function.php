<?php

    session_start();
    require 'dbcon.php';

    // Set to your appropriate time zone
    date_default_timezone_set('Africa/Lagos'); 


    // input field validation
    function validate($inputData){
        global $conn;
        $validatedData = mysqli_real_escape_string($conn, $inputData);
        return trim($validatedData);
    }

    // Function to redirect with status message and optional color
    function redirect($url, $status, $colorClass) {
        $_SESSION['status'] = $status;
        $_SESSION['colorClass'] = $colorClass; // Store the color class in the session
        header('Location: ' . $url);
        exit(0);
    }

    // Display alert messages with dynamic color
    function alertMessage() {
        if(isset($_SESSION['status']) && isset($_SESSION['colorClass'])){
            echo "<div class='alert {$_SESSION['colorClass']} alert-dismissible fade show' role='alert'>
                    <h6>{$_SESSION['status']}</h6>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>    
                </div>";
            unset($_SESSION['status']);
            unset($_SESSION['colorClass']); // Clear the color class from session
        }
    }

    // Display toast messages with dynamic color
    function alertMessageTwo() {
        if(isset($_SESSION['status']) && isset($_SESSION['colorClass'])){
            echo '<div class="toast-container">
                    <div class="bs-toast toast fade show toast-placement-ex m-2 ' . $_SESSION['colorClass'] . ' top-0 end-0" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="bx bx-bell me-2"></i>
                        <div class="me-auto fw-semibold">Agora Case</div>
                        <small>Just now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">'
                        . $_SESSION['status'] .
                        '</div>
                    </div>
                </div>';
            unset($_SESSION['status']);
            unset($_SESSION['colorClass']); // Clear the color class from session
        }
    }

    //insert record using this function
    function insert($tableName, $data){
        global $conn;

        $table = validate($tableName);

        $colums = array_keys($data);
        $values = array_values($data);

        $finalColums = implode(',', $colums);
        $finalValues = "'" . implode("', '", $values) . "'";

        $query = "INSERT INTO $table ($finalColums) VALUES ($finalValues)";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    //Update data using this function
    function update($tableName, $id, $data){
        
        global $conn;

        $table = validate($tableName);
        $id = validate($id);

        $updateDataString = "";

        foreach($data as $colums => $value){
            $updateDataString .= $colums. '=' . "'$value',";
        }

        $finalUpdateData = substr(trim($updateDataString), 0, -1);

        $query = "UPDATE $table SET $finalUpdateData WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    //Extract status using this function
    function getAll($tableName, $status = NULL){

        global $conn;

        $table = validate($tableName);
        $status = validate($status);

        if($status == 'status'){
            $query = "SELECT * FROM $table WHERE $status='0'";
        }else{
            $query = "SELECT * FROM $table";
        }
        return mysqli_query($conn, $query);
    }

    // Get each record using this function
    function getByid($tableName, $id){

        global $conn;

        $table = validate($tableName);
        $id = validate($id);

        $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result){

            if(mysqli_num_rows($result) == 1){

                $row = mysqli_fetch_assoc($result);
                $response = [
                    'status' => 200,
                    'data' => $row,
                    'message' => 'Record Found'
                ];
                return $response;
            }else{
                $response = [
                    'status' => 404,
                    'message' => 'No Data Found'
                ];
                return $response;
        }

        }else{
            $response = [
                'status' => 500,
                'message' => 'Something Went Wrong'
            ];
            return $response;
        }

    }

    //Delete data from data base using id
    function delete($tableName, $id){

        global $conn;

        $table = validate($tableName);
        $id = validate($id);

        $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
        $result = mysqli_query($conn, $query);
        return $result;

    }

    function checkParamId($type){

        if(isset($_GET[$type])){

            if($_GET[$type] != ''){

                return $_GET[$type];

            }else{
                return '<h5>No Id Given</h5>';
            }

        }else{
            return '<h5>No Id Given</h5>';
        }

    }

    function logoutSession(){
        unset($_SESSION['loggedIn']);
        unset($_SESSION['loggedInUser']);
        unset($_SESSION['loggedInAdmin']);
    }

 

    function jsonResponse($status, $status_type, $title, $text, $data = []){
        $response = [
            'status' => $status,
            'status_type' => $status_type,
            'title' => $title,
            'text' => $text,
        ];
        $response = array_merge($response, $data);

        echo json_encode($response);

        return;
    }


    function getCount($tableName)
    {
        global $conn;

        $table = validate($tableName);
        $query = "SELECT * FROM $table";
        $query_run = mysqli_query($conn, $query);
        if($query_run){

            $totalCount = mysqli_num_rows($query_run);
            return $totalCount;
            
        }else{
            return 'Something Went Wrong';
        }
    }
