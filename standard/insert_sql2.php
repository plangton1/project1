<?php
require 'connection/connection.php' ; 
if(isset($_POST['save_multiple_data']))
{
    //  echo '<pre>'.var_export($_POST, 1).'</pre>';
    // $loop = max(count($_POST['group_name']), count($_POST['agency_name']), count($_POST['department_name']));
    // foreach (range(1, $loop) as $value) {
    //     $query = "INSERT INTO standard_tb (department_name,agency_name,standard_mandatory,group_name,standard_meet,standard_tacking,standard_number,standard_detail,standard_note) VALUES (?,?,?,?,?,?,?,?,?)";
    //     echo '<pre>'.$query.'</pre>';
    // }
    $loop = max(count($_POST['group_name']), count($_POST['agency_name']), count($_POST['department_name']));
    $group_name_each = $_POST['group_name'];
    $group_name = $_POST['group_name'];
    $department_name = $_POST['department_name'];
    $agency_name_each = $_POST['agency_name'];
    $agency_name = $_POST['agency_name'];
    $department_name_each = $_POST['department_name'];
    $standard_meet = $_POST['standard_meet'];
    $standard_number = $_POST['standard_number'];
    $standard_detail = $_POST['standard_detail'];
    $standard_tacking = $_POST['standard_tacking'];
    $standard_note = $_POST['standard_note'];
    $standard_mandatory = $_POST['standard_mandatory']; 

    foreach (range(0, $loop - 1) as $index) {

                        $group_name_each = @$group_name[$index];
                        $department_name_each = @$department_name[$index];
                        $agency_name_each = @$agency_name[$index];
                        $group_name = $group_name;
                        $agency_name = $agency_name;
                        $department_name= $department_name;
                        $standard_meet = $standard_meet;
                        $standard_number = $standard_number;
                        $standard_detail = $standard_detail;
                        $standard_tacking = $standard_tacking;
                        $standard_note = $standard_note;
                        $standard_mandatory = $standard_mandatory;

                        $query = "INSERT INTO standard_tb (group_name , department_name , agency_name , standard_mandatory , standard_meet , standard_tacking , standard_number , standard_detail , standard_note ) 
                        VALUES (? , ? , ? , ? , ? , ? , ? , ? , ?)";
                        $params = array($group_name_each , $department_name_each , $agency_name_each , $standard_mandatory , $standard_meet , $standard_tacking , $standard_number , $standard_detail , $standard_note );
                        // echo '<pre>'.var_export($params, 1).'</pre>';
                        $sss = sqlsrv_query($conn, $query, $params);
    }

    // if (sqlsrv_query($conn, $query , $params)) {
    //     $alert = '<script type="text/javascript">';
    //     $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
    //     $alert .= 'window.location.href = "?page=status";';
    //     $alert .= '</script>';
    //     echo $alert;
    //     exit();
    // } else {
    //     echo "Error: " . $query . "<br>" . sqlsrv_errors($conn);
    // }
    // sqlsrv_close($conn);
}

    $sql1 = "SELECT * FROM type_tb";
    $query1 = sqlsrv_query($conn , $sql1);

    // $sql2 = "SELECT * FROM group_tb";
    // $query2 = sqlsrv_query($conn , $sql2);

    // $sql3 = "SELECT * FROM agency_tb";
    // $query3 = sqlsrv_query($conn , $sql3);
?> 