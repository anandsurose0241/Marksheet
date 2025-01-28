<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marksheet</title>
  </head>
  <body>
    <main class="border border-2 border-info m-auto p-4 bg-info rounded-3" style="max-width: 600px;">
      <div class="w-100">
        <h4 class="text-center">MAHARASTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, PUNE-411004</h4>
        <h2 class="text-center my-4">MARKSHEET</h2>
        
        <form method="POST" action="Marksheet_print.php" class="border border-2 border-secondary p-4 bg-light rounded-3">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="mothername" class="form-label">Mother Name</label>
            <input type="text" class="form-control" id="mothername" name="mothername" placeholder="Enter your mother's name" required>
          </div>

          <div class="mb-3">
            <label for="dateofbirth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Enter your date of birth" required>
          </div>

          <div class="mb-3">
            <label for="placeofbirth" class="form-label">Place of Birth</label>
            <input type="text" class="form-control" id="placeofbirth" name="placeofbirth" placeholder="Enter your place of birth" required>
          </div>

          <div class="mb-3">
            <label for="seatno" class="form-label">Seat Number</label>
            <input type="text" class="form-control" id="seatno" name="seatno" placeholder="Enter your seat number" required>
          </div>
          
          <div class="mb-3">
            <label for="centernumber" class="form-label">Center Number</label>
            <input type="text" class="form-control" id="centernumber" name="centernumber" placeholder="Enter your center number" required>
          </div>
          
          <div class="mb-3">
            <label for="schoolno" class="form-label">School Number</label>
            <input type="text" class="form-control" id="schoolno" name="schoolno" placeholder="Enter your school number" required>
          </div>

          <div class="mb-3">
            <label for="division" class="form-label">Division</label>
            <select name="division" id="division" class="form-control">
              <option value="0">Select Division</option>
              <option value="Pune">Pune</option>
              <option value="Nashik">Nashik</option>
              <option value="Aurangabad">Aurangabad</option>
              <option value="Kokan">Kokan</option>
              <option value="Amravati">Amravati</option>
              <option value="Nagpur">Nagpur</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="certificateno" class="form-label">Certificate Number</label>
            <input type="text" class="form-control" id="certificateno" name="certificateno" placeholder="Enter your certificate number" required>
          </div>
          <div class="mb-3">
            <label for="certificateno" class="form-label">Passsing date </label>
            <input type="month" class="form-control" id="pass" name="pass" placeholder="Enter your Passsing year " required>
          </div>
          
          
          <div class="mb-3">
            <label for="marathi" class="form-label">Marathi Marks</label>
            <input type="number" class="form-control" id="marathi" name="marathi" placeholder="Enter your Marathi marks" required>
          </div>
          
          <div class="mb-3">
            <label for="english" class="form-label">English Marks</label>
            <input type="number" class="form-control" id="english" name="english" placeholder="Enter your English marks" required>
          </div>
          
          <div class="mb-3">
            <label for="hindi" class="form-label">Hindi Marks</label>
            <input type="number" class="form-control" id="hindi" name="hindi" placeholder="Enter your Hindi marks" required>
          </div>

          <div class="mb-3">
            <label for="maths" class="form-label">Maths Marks</label>
            <input type="number" class="form-control" id="maths" name="maths" placeholder="Enter your Maths marks" required>
          </div>
          
          <div class="mb-3">
            <label for="science" class="form-label">Science Marks</label>
            <input type="number" class="form-control" id="science" name="science" placeholder="Enter your Science marks" required>
          </div>
          
          <div class="mb-3">
            <label for="history" class="form-label">History Marks</label>
            <input type="number" class="form-control" id="history" name="history" placeholder="Enter your History marks" required>
          </div>

          <div class="text-left">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </main>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      function calculateMarks() {
        const marathi = parseInt(document.getElementById('marathi').value);
        const english = parseInt(document.getElementById('english').value);
        const hindi = parseInt(document.getElementById('hindi').value);
        const maths = parseInt(document.getElementById('maths').value);
        const science = parseInt(document.getElementById('science').value);
        const history = parseInt(document.getElementById('history').value);
        
        const totalMarks = marathi + english + hindi + maths + science + history;
        const maxMarks = 600; // Total maximum marks
        const percentage = (totalMarks / maxMarks) * 100;

        document.getElementById('totalMarks').innerText = totalMarks;
        document.getElementById('totalMaxMarks').innerText = maxMarks;
        document.getElementById('percentage').innerText = percentage.toFixed(2);
      }
    </script>
  </body>
</html>
