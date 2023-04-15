<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
  <style>
    .container-custom {
      height: 407px;
      background-color: #CD8C3F;
    }

    .profile-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    form {
      margin-top: 20px;
      text-align: center;
    }

    button {
      margin-top: 20px;
    }

    .submit-button {
      background-color: #CD8C3F;
      color: #FFFFFF;
    }
  </style>
</head>
<body>
  <div class="container-fluid container-custom">
    <div class="profile-container">
      <h2>Profile</h2>
      <img src="profile.png" alt="Profile" class="rounded-circle" style="width: 150px; height: 150px;">
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
          <input type="tel" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary submit-button">Submit</button>
      </form>
      <button type="button" class="btn btn-secondary mt-3">Logout</button>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>
</html>
