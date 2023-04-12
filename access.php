<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <link rel="shortcut icon" href="/static/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/static/vendor/bootstrap/css/bootstrap.min.css">
    <script src='/static/vendor/bootstrap/js/bootstrap.bundle.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body style="background-color: #f0f0f0;background-position:center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
  <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('msg')){
      document.write("<div style='position:fixed;bottom:30px; right:30px;background-color:green;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 5000)
  </script>
  <div  data-aos="zoom-in" class="container" style="margin-top:120px;margin-bottom:100px;width:500px;max-width:100vw;background-color: white;padding:30px 0px;border-radius: 30px;box-shadow: 2px 2px 8px #ccc;">
    <h1 style="text-align: center;color:#2b74e2"><b>ATM</b></h1>
    <p style="padding:20px">Welcome user!</p>
    <center>
        <button class="btn">Withdrow</button>
        <br><br>
        <button class="btn">Balance Check</button>
        <br><br>
        <a href="/" class="btn">Logout</a>
    </center>
  </div>
  <style>
    button{
      background-color: #2b74e2 !important;
      color:white !important;
      height:45px !important;
      font-size:22px !important;
    }
    .form-control:focus , .form-control:active{
      box-shadow: none !important;

    }
  </style>
  <script>
    AOS.init();
  </script>
</body>
</html>
