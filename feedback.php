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
  </nav>

    <div class="modal-body container">
        <h5>Send us a message</h5>
        <form method="POST" action="https://formspree.io/f/mbjqeopd">
        <input name="app-name" class="w-100 hidden" type="text" value="PHP Text IQ"><br>
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" required><br>
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" required><br>
        <label for="subject">Subject</label>
        <input name="subject" type="text" class="form-control" required><br>
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" cols="30" rows="5" required></textarea><br>
        <label for="range">Rate this app</label>
        <input name="rate" type="range" class="w-100 form-control" id="range" max="10" min="0" value="0"><br>
        <button name="submit" class="w-100 btn btn-lg btn-dark" type="submit" id="submit"><span>Submit<span></button>
        </form>
    </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2021 <a class="navbar-brand" href="#"> <span class="tcolorii">Text</span> <span
              class="tcolor">IQ</span></a></span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="nav-item">
          <span class="navbar-brand text-muted foot">Made with ❤</span>
        </li>
      </ul>

      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-sm btn-dark"><a class="text-light link" data-bs-toggle="modal" data-bs-target="#myModal"
            href="./index.php">Go to app</a>
          </button>
      </div>
    </footer>
  </div>

</body>

</html>