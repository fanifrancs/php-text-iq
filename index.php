<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="Text IQ">
  <meta name="description"
    content="Text IQ: Paste and perform simple functions on your texts such as finding number of characters, auto-capitalization, finding and replacing etc. ">
  <meta name="author" content="Francisco">
  <title>Text IQ</title>
  <link rel="icon" href="./favicon.png">
  <link rel="stylesheet" href="./css/navbar-top-fixed.css">
  <link rel="stylesheet" href="./css/footers.css">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar-dark fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"> <span class="tcolorii">Text</span> <span class="tcolor">IQ</span><span class="text-muted"> •PHP</span></a>
    </div><br>
    <form action="./index.php" method="POST" class="container">
        <textarea type="text" name="input" class="form-control" rows="5" placeholder="paste/enter input here"></textarea>
        <div class="row" style="margin-top:5px">
          <div class="col">
            <h3><span class="badge bg-secondary badgefont"><b>Find & Replace</b></span></h3><h6><tt>(Case-sensitive)</tt></h6>
            <input name="fnds" type="text" class="form-control w-100" placeholder="Find what?">
            <input name="rpls" class="form-control w-100" style="margin-top:5px" placeholder="Replace with?">
          </div>
          <div class="col">
            <h3><span class="badge bg-secondary badgefont"><b>Find & Replace</b></span></h3><h6><tt>(Case-insensitive)</tt></h6>
            <input name="fnd" type="text" class="form-control w-100" placeholder="Find what?">
            <input name="rpl" type="text" class="form-control w-100" style="margin-top:5px;" placeholder="Replace with?">
          </div>
        </div>
        <input name="submit" type="submit" class = "btn btn-lg btn-primary w-100" style="margin-top:5px; border-radius:0px">
        
    </form>
  </nav><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="container mt-5">
    <div class="mt-4 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b># of Keystrokes</b></span></h3>
      <p style="font-size:50px">
      <?php
        define("input", $_POST['input']);
        echo iconv_strlen(input);
      ?>
      </p>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-1 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b># of Characters</b></span></h3>
      <p style="font-size:50px">
      <?php
        $x = preg_replace('/\s+/', '', input);
        echo iconv_strlen($x);
      ?>
      </p>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-4 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b># of Words</b></span></h3>
      <p style="font-size:50px">
      <?php
      echo str_word_count(input);
      ?>
      </p>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-1 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b>Uppercase Output</b></span></h3>
      <textarea disabled class="form-control nbord" id="ucase" rows="5" placeholder="Result will appear here.">
      <?php
        echo strtoupper(input);
      ?>
      </textarea>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-1 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b>Lowercase Output</b></span></h3>
      <textarea disabled class="form-control nbord" id="lcase" rows="5" placeholder="Result will appear here.">
      <?php
        echo strtolower(input);
      ?>
      </textarea>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-1 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b>Find & Replace</b></span><h6><tt>(Case-sensitive)</tt></h6>
      <textarea disabled class="form-control nbord" id="fp" rows="5" placeholder="Result will appear here.">
      <?php
      $fnds = $_POST['fnds'];
      $rpls = $_POST['rpls'];
      echo str_replace($fnds, $rpls, input);
      ?>
      </textarea>
    </div>
  </div>

  <div class="container mt-3">
    <div class="mt-1 p-3 bg-dark text-white rounded">
      <h3><span class="badge bg-secondary badgefont"><b>Find & Replace</b></span><h6><tt>(Case-insensitive)</tt></h6>
      <textarea disabled class="form-control nbord" rows="5" placeholder="Result will appear here.">
      <?php
      $fnd = $_POST['fnd'];
      $rpl = $_POST['rpl'];
      echo str_ireplace($fnd, $rpl, input);
      ?>
      </textarea>
    </div>
  </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">© 2021 <a class="navbar-brand" href="#"> <span class="tcolorii">Text</span> <span
              class="tcolor">IQ</span></a></span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="nav-item">
          <span class="navbar-brand text-muted foot">Made with ❤</span>
        </li>
      </ul>

      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-sm btn-dark"><a class="text-light link" data-bs-toggle="modal" data-bs-tarPOST="#myModal"
            href="./feedback.php">Submit Feedback</a>
          </button>
      </div>
    </footer>
  </div>

</body>

</html>