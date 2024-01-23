<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Upload Form</title>
  <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
nav{
    background-color: rgb(4, 25, 88, 0.808);
    height: 70px;
    width: 100%;
    font-family: Tahoma;
}
#comp-eng{
    padding-right: 20px;
}

label.logo{
    font-size: 20px;
    color: aliceblue;
    line-height: 70px;
    padding: 0 50px;
}

nav ul{
    float: right;
    margin-right: 50px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
nav ul li a{
    color: white;
    font-size: 17px;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}
a.active a:hover{
    background-color: #1b9ff1;
    transition: .5s;
}
.heading{
    padding: 20px;
    text-align: center;
    background-color: rgb(184, 217, 243);
    
}

#uploadForm{
    padding-top: 60px;
    
}

h1{
    padding-top: 20px;
}

    </style>
</head>
<body>
<nav>
        <label class="logo">GCTUTTMS </label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
        </ul>

    </nav>
  
    <center><h1> Timetable Upload Page</h1>
    </center>
  <center><form id="uploadForm" enctype="multipart/form-data">
    <input type="file" id="pdfFile" accept=".pdf" required>
    <button type="button" onclick="uploadFile()">Upload</button><br>

    <p></p>
    <!-- <button type="button"><a href="preview.php">Preview Page</a></button> -->
  </form></center>

  <div id="uploadStatus"></div>

  <script src="upload.js"></script>
</body>
</html>
