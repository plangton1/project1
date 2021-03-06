<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>

<body>
    <section class="items-grid section custom-padding">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">เพิ่มเอกสารที่ยื่นขอ มอก.</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">

                            <form action="standard/insert_sql2.php" method="POST">
                                <input type="hidden" name="mode" value="insert_data">
                                <div class="grid-3">

                                    <div class="form-group mb-2">
                                        <label for="">วาระจากที่ประชุม สมอ. </label>
                                        <input type="text" name="standard_meet" class="form-control">
                                    </div>

                                    <div class="form-group mb-2 f-red">
                                        <label for="">เลขที่ มอก.*</label>
                                        <input type="text" name="standard_number" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">ชื่อมาตรฐาน</label>
                                        <input type="text" name="standard_detail" class="form-control">
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="form-group mb-2">
                                            <label for="">มาตรฐานบังคับ</label>
                                            <input type="text" name="standard_mandatory" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">หมายเลข tracking</label>
                                        <input type="text" name="standard_tacking" class="form-control">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">หมายเหตุ</label>
                                        <input type="text" name="standard_note" class="form-control">
                                    </div>



                                    <div class="form-group mb-2">
                                        <label for="">ไฟล์แนบ</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                                <hr>

                                <!-- หลายฟอร์ม -->
                                <a href="javascript:void(0)" class="add-more-form float-end btn btn-success">เพิ่ม</a>
                                <div class="main-form mt-3 ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label for="">กลุ่มผลิตภัณฑ์</label>
                                                <select name="group_id[]" id="group_id"> 
                                                    <?php 
                                                    $sql = "SELECT * FROM group_tb";
                                                    $query = sqlsrv_query($conn, $sql);
                                                    while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                                                       <option value="<?php echo $result['group_id'];  ?>"><?php echo $result['group_name'];  ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="paste-new-forms"></div>

                                <!--  -->
                                <hr>
                                <!-- หลายฟอร์ม -->
                                <a href="javascript:void(0)" class="add-more-form1 float-end btn btn-success">เพิ่ม</a>
                                <div class="main-form1 mt-3 ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label for="">หน่วยงานที่สามารถทดสอบได้</label>
                                                <select name="agency_id[]" id="agency_id">
                                                    
                                                    <?php 
                                                    $sql2 = "SELECT * FROM agency_tb";
                                                    $query2 = sqlsrv_query($conn, $sql2);
                                                    while ($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) { ?>
                                                       <option value="<?php echo $result['agency_id'];  ?>"><?php echo $result['agency_name'];  ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="paste-new-forms1"></div>
                                <!--  -->
                                <hr>
                                <!-- หลายฟอร์ม -->
                                <a href="javascript:void(0)" class="add-more-form2 float-end btn btn-success">เพิ่ม</a>
                                <div class="main-form2 mt-3 border-bottom">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label for="">ประเภทผลิตภัณฑ์</label>
                                                <select name="type_id[]" id="type_id">
                                                    
                                                    <?php 
                                                    $sql3 = "SELECT * FROM type_tb";
                                                    $query3 = sqlsrv_query($conn, $sql3);
                                                    while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                                       <option value="<?php echo $result['type_id'];  ?>"><?php echo $result['type_name'];  ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="paste-new-forms2"></div>
                                <center>
                                    <!--  -->
                                    <button type="submit" class="btn btn-primary mt-3">บันทึกข้อมูล</button>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('insert_2_script.php'); ?>

</body>

</html>