<?php
include './php/configure.php';


$id=$_GET['id'];






     $sql = "SELECT * FROM report WHERE id='$id'";
     $resultSelect = mysqli_query($conn, $sql);

     $row = mysqli_fetch_array($resultSelect);




?>









<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }


        .people {
            padding: 15px 10px;
            border: 1px solid rgb(78, 78, 78);
            margin: 10px auto;
            border-radius: 12px;
        }

        .modal-footer button {
            margin: 5px 25px;
            /* width: 50%; */
            padding: 7px 200px;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <title>View Reports</title>
</head>

<body>

    <div class="container people">


        <form action="./php/update_record.php" method="post" enctype="multipart/form-data">
            <div class="h2">Medical Reports No.<?php echo $row['id'];   ?> </div>


            <div class="container mt-3">
                <label for="exampleDataList" class="form-label">Report no:</label>
                <input class="form-control border border-2 border-success" list="datalistOptions" id="exampleDataList"
                    name="id"  readonly   value=<?php echo $id;  ?>
                    
            

            <div class="container mt-3">
                <label for="exampleDataList" class="form-label">Patients's Username(बिरामीको प्रयोगकर्ता नाम)</label>
                <input class="form-control border border-2 border-success" list="datalistOptions" id="exampleDataList"
                    name="pusername"     value=<?php echo $row['username'];  ?>
                    >

                <div class="form-group mt-3 ">
                    <label for="exampleFormControlInput1">Patients's Email Address(बिरामीको इमेल ठेगाना)</label>
                    <input type="email" class="form-control border border-2 border-success" name="pemail"
                        id="exampleFormControlInput1"  value=<?php echo $row['email'];  ?>>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
                    <select class="form-control border border-2 border-success" id="exampleFormControlSelect1"
                        name="witness">
                        <option value="No-one" >No-one</option>
                        <option value="Father">Father</option>
                        <option value="Mother"  selected>Mother</option>
                        <option value="Sister">Sister</option>
                        <option value="Brother">Brother</option>
                        <option value="Friends">Friends</option>
                        <option value="Staff">Staff</option>
                        <option value="someone">Other</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Symptoms(लक्षणहरू) Of The Patient</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="symptoms" ><?php echo $row['symptom'];  ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Description Of The Disease(रोग को विवरण)</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="7" name="disease"  ><?php echo $row['description'];  ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Description Of Medicines(औषधिको विवरण)</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="medicine" ><?php echo $row['medicines'];  ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Necessary Medical Reports(आवश्यक मेडिकल रिपोर्टहरू)</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="reports" ><?php echo $row['reports'];  ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Instruction Regarding Diet(आहार सम्बन्धि निर्देशन)</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="diet" ><?php echo $row['instruction'];  ?></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlInput1">Next Visit Date</label>
                    <input type="date" class="form-control border border-2 border-success"
                        id="exampleFormControlInput1" placeholder="dd/mm/yyyy" name="visit_date" >
                </div>
                <?php echo $row['visit_date'];?>


                <!-- Report photo  -->

                <div class="form-group mt-3">
                    <label for="exampleFormControlFile1">Input the File Photo (Everything_All_About_Disease)</label>
                    <input type="file" class="form-control-file border border-2 border-success"
                        id="exampleFormControlFile1" name="photo"  ?>
                </div>
                <?php     
                        echo $row['photo'];  ?>

                <!-- report photo End here  -->
                <hr style="height: 2px ;">

                <div class="modal-footer">
                    <a >
                        <button type="submit"name="submit" class="btn btn-success" data-bs-dismiss="modal"
                        >Update</button>
                    </a>
                    <a>
                        <button  type="button" class="btn btn-danger data-bs-dismiss=" modal" onclick="delete_records(<?php echo $row['id'];?>)">Delete</button>
                    </a>
                </div>
            </div>
        </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

         crossorigin="anonymous"></script>
<script type="text/javascript">
     
       function delete_records(id){
           
       
       report_id=id;

        location.replace("./php/delete_record.php?id="+ report_id);

          
        }

        </script>
</body>

</html>