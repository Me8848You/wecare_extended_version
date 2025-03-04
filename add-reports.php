<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patients login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>
  <!-- favicon ko link  -->
  <link rel="shortcut icon" href="./images/logooo.png" type="image/x-icon">

  <style>
    input {
      border: 2px solid green;
    }

    .border-success {
      --bs-border-opacity: 1;
      border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
    }
  </style>

</head>

<body>

  <header class="p-3 mb-3 border-bottom bg-success">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <a class="navbar-brand fw-bold fs-3" href="#">We<i class="fa-solid fa-circle-nodes"></i>Care</a>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-light fs-5 ">Add-Reports</a></li>
          <li><a href="./doctor-report.php" class="nav-link px-2 link-dark fs-5">Medi-Reports</a></li>
          <!-- <li><a href="/Medicine.html" class="nav-link px-2 link-light fs-5">Medi-Cine</a></li> -->
          <!-- <li><a href="./symptoms.html" class="nav-link px-2 link-light fs-5">Symptoms</a></li> -->
          <li><a href="#" class="nav-link px-2 link-dark fs-5">FAQs</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./images/yubi (1).jpeg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="./php/logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- nav header part end here  -->
  <!-- <datalist id="datalistOptions">
      <option value="Prof. Dr. Suman Sharma  ">
      <option value="Dr. Binay Rijal महिला तथा यौन रोग विशेषज्ञ">
      <option value="Dr. Yubraj Adhikari  प्रसुति वार्ड">
      <option value="Dr. Aanjana Bhattrai आकस्मिक वार्ड">
      <option value="Dr. Shreejana Sitaula  GYNAECOLOGY">
      <option value="Dr.Pooja Paudyal GYNAECOLOGY">
      <option value="Dr. Nepal Nepali VASCULAR SURGERY">
      <option value="Dr. Sujeet Poudyal
      Department of UROLOGY">
      <option value="Dr. Ghanshyam Kharel
      Department of Neurology">
      <option value="Dr. Krishna Bhattarai
      Department of Anaesthesiology">
      <option value="Dr. Bishika Pun
      Department of Radiology">
    </datalist> -->

  <!-- <form action=""></form> -->
  <form action="./php/add_reports.php" method="post" enctype="multipart/form-data">


    <div class="container mt-3">
      <label for="exampleDataList" class="form-label">Patients's Username(बिरामीको प्रयोगकर्ता नाम)</label>
      <input class="form-control border border-2 border-success" list="datalistOptions" id="exampleDataList"
        name="pusername" placeholder="Type Username to search...">

      <div class="form-group mt-3 ">
        <label for="exampleFormControlInput1">Patients's Email address(बिरामीको इमेल ठेगाना)</label>
        <input type="email" class="form-control border border-2 border-success" name="pemail"
          id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
        <select class="form-control border border-2 border-success" id="exampleFormControlSelect1" name="witness">
          <option value="No-one">No-one</option>
          <option value="Father">Father</option>
          <option value="Mother">Mother</option>
          <option value="Sister">Sister</option>
          <option value="Brother">Brother</option>
          <option value="Friends">Friends</option>
          <option value="Staff">Staff</option>
          <option value="someone">Other</option>
        </select>
      </div>

      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Symptoms Of The Disease(रोग को लक्षण)</label>
        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5"
          name="symptoms"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Description Of The Disease(रोग को विवरण)</label>
        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="7"
          name="disease"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Description Of Medicines(औषधिको विवरण)</label>
        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5"
          name="medicine"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Necessary Medical Reports(आवश्यक मेडिकल रिपोर्टहरू)</label>
        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5"
          name="reports"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1">Instruction Regarding Diet(आहार सम्बन्धि निर्देशन)</label>
        <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1" rows="5"
          name="diet"></textarea>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlInput1">Next Visit Date(अर्को भ्रमण मिति)</label>
        <input type="datetime-local" class="form-control border border-2 border-success" id="exampleFormControlInput1"
          placeholder="dd/mm/yyyy" name="visit_date">
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlInput1">Doctor's Name(डाक्टरको नाम)</label>
        <input type="text" class="form-control border border-2 border-success"
          id="exampleFormControlInput1" readonly value=<?php echo $_SESSION['doctor']; ?> name="doctor_name">
      </div>


      <!-- Report photo  -->

      <div class="form-group mt-3">
        <label for="exampleFormControlFile1">Input the File Photo (Everything_All_About_Disease)</label>
        <input type="file" class="form-control-file border border-2 border-success" id="exampleFormControlFile1"
          name="photo">
      </div>

      <!-- report photo End here  -->

      <div class="d-grid gap-2 mt-3">
        <button class="btn btn-success" type="submit" name="submit" value="submit">Update Details</button>
      </div>
    </div>
  </form>


  <!-- footer start form here  -->
  <div class="container-fluid">

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 px-5 py-5 my-5 border-top bg-secondary">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <p class="text-muted">WeCare 2022 © All Rights Reserved</p>
      </div>

      <div class="col mb-3">

      </div>

      <div class="col mb-3">
        <h5>Pages</h5>
        <ul class="nav flex-column ">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-light">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">About</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Contacts</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning">About</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Social Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                class="fa-brands fa-facebook"></i>Facebook</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                class="fa-brands fa-telegram"></i>Telegram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                class="fa-brands fa-twitter"></i>Twitter</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                class="fa-brands fa-instagram"></i>Instagram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted link-warning"><i
                class="fa-brands fa-youtube"></i>Youtube</a></li>
        </ul>
      </div>
    </footer>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>