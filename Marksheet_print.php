<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Retrieve POST data
    $name = $_POST['name'];
    $mothername = $_POST['mothername'];
    $dateofbirth = $_POST['dateofbirth'];
    $placeofbirth = $_POST['placeofbirth'];
    $seatno = $_POST['seatno'];
    $centernumber = $_POST['centernumber'];
    $schoolno = $_POST['schoolno'];
    $division = $_POST['division'];
    $certificateno = $_POST['certificateno'];
    $pass = $_POST['pass'];
    $marathi = $_POST['marathi'];
    $english = $_POST['english'];
    $hindi = $_POST['hindi'];
    $maths = $_POST['maths'];
    $science = $_POST['science'];
    $history = $_POST['history'];

    // Calculate total marks and percentage
    $totalMarks = $marathi + $english + $hindi + $maths + $science + $history;
    $maxMarks = 600; // Total maximum marks
    $percentage = ($totalMarks / $maxMarks) * 100;
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Container for marksheet */
        .container {
            max-width: 1000px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border: 5px solid #000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            background-color: #fff8e1;
        }

        /* Background Image */
        .bg {
            background-image: url('marksheet-background.png'); /* Add a high-resolution background image */
            background-size: cover;
            background-position: center;
            padding: 20px;
        }

        /* Header Styles */
        .text-center {
            text-align: center;
        }

        /* Title and school info */
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #2c3e50;
            line-height: 1.6;
        }

        /* Student Information */
        .student-info {
            margin-top: 20px;
            font-size: 18px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        td {
            font-size: 16px;
        }

        /* Styling rows for subject marks */
        .subject-row {
            background-color: #ecf0f1;
        }

        .subject-row:hover {
            background-color: #bdc3c7;
        }

        /* Footer */
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        .button-print {
            margin-top: 20px;
            text-align: center;
        }

        /* Print Styles */
        @media print {
            body {
                margin: 0;
            }
            
            .container {
                width: 100%;
                max-width: none;
                padding: 10px;
            }

            .button-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="bg"> 
            <img src="images-removebg-preview.png" alt="Logo" class="img-fluid" style="width: 100px; height: 100px; margin-left: 40px; ;">
            <p class="fw-bold text-center title">
                महाराष्ट्र राज्य माध्यमिक व उच्च माध्यमिक शिक्षण मंडळ, पुणे <br>
                𝔐𝔞𝔥𝔞𝔯𝔞𝔰𝔥𝔱𝔯𝔞 𝔖𝔱𝔞𝔱𝔢 𝔅𝔬𝔞𝔯𝔡 <br>
                𝔖𝔢𝔠𝔬𝔫𝔡𝔞𝔯𝔶 𝔞𝔫𝔡 ℌ𝔦𝔤𝔥𝔢𝔯 𝔖𝔢𝔠𝔬𝔫𝔡𝔞𝔯𝔫 𝔈𝔡𝔲𝔠𝔞𝔱𝔦𝔬𝔫 ,𝔓𝔲𝔫𝔢<br>
                माध्यमिक शालान्त प्रमाणपत्र<br> SECONDARY SCHOOL CERTIFICATE
            </p>
            <p class="text-right">असे प्रमाणित करण्यात येते की / This is to certify that</p>
            <p class="text-center"><b><?php echo $name; ?></b></p>
            <p>आईचे नाव / Mother's Name : <b><?php echo $mothername; ?></b></p>
        </div>
        
        <div class="row m-auto mt-4">
            <div class="col-3 border border-2 border-dark text-center bg-secondary bg-gradient">विभागीय मंडळ<br>Division Board</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">आसन क्रमांक<br>Seat No.</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">केंद्र क्रमांक<br>Center No.</div>
            <div class="col-3 border border-2 border-dark text-center bg-secondary bg-gradient">शाळा क्रमाक<br>School No.</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">प्रमाणपत्राचा अनुक्रमाक<br> Sr.No of Certificate</div>
            <div class="col-3 border border-2 border-dark fw-bold text-center"><?php echo $division; ?></div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $seatno; ?></div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $centernumber; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center"><?php echo $schoolno; ?></div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $certificateno; ?></div>
        </div>

        <p class="text-right">माध्यमिक शालान्त प्रमाणपत्र परीक्षा<br> has passed the SECONDARY SCHOOL CERTIFICATE EXAMINATION <b><?php echo $pass; ?></b></p>
        <p class="text-center">श्रेणीमध्ये खाली दर्शविलेले विषय घेऊन उत्तीर्ण झाला / झाली आहे. <br>with subjects shown below.</p>
        
        <div class="row m-auto mt-4 text-align-center">
            <div class="col-3 border border-2 border-dark text-center bg-secondary bg-gradient">मुख्य विषय<br>Main Subject</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">कमाल गुण<br>Max. Mark</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">प्राप्त गुण<br>Marks Obtained</div>
            <div class="col-3 border border-2 border-dark text-center bg-secondary bg-gradient">श्रेणीचे विषय<br>Subject of Grade</div>
            <div class="col-2 border border-2 border-dark text-center bg-secondary bg-gradient">श्रेणी<br>Grade</div>

            <!-- Subject rows -->
            <div class="col-3 border border-2 border-dark fw-bold text-center">MARATHI</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $marathi; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">(WORK EDN./PRE-VOC.)</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">A</div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">HINDI</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $hindi; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">FOOD PRESERVATION</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"></div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">ENGLISH</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $english; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">(SCHOOL SUBJECTS)</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">A</div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">MATHEMATICS</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $maths; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">HEALTH & PHYSICAL EDUCATION</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">A</div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">SCIENCE & TECHNOLOGY</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $science; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">SOCIAL SERVICE</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">A</div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">SOCIAL SCIENCES</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">100</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $history; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">PERSONALITY DEVELOPMENT INFORMATION COMMUNICATION TEC</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">B</div>

            <div class="col-3 border border-2 border-dark fw-bold text-center">एकूण गुण / Total Marks</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center">500</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"><?php echo $totalMarks; ?></div>
            <div class="col-3 border border-2 border-dark fw-bold text-center">Percentage= <?php echo number_format($percentage, 2); ?>%</div>
            <div class="col-2 border border-2 border-dark fw-bold text-center"></div>

            <div class="col-2 border border-2 border-dark fw-bold text-center py-3 m-3">जन्म दिनांक /<br> Date of Birth: <?php echo $dateofbirth; ?></div>
            <div class="col-2 border border-2 border-dark fw-bold text-center py-3 m-3 ">जन्म ठिकाण / Place of Birth: <?php echo $placeofbirth; ?></div>
        </div>

        <div class="text-center p-5">
            <button type="Print" class="btn btn-primary" onclick="window.print()">Print</button>
        </div>
    </div>
</body>
</html>
