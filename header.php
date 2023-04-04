

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      padding: 0;
    }

    body {
      /* font-family: Verdana, sans-serif; */
      margin: 0
    }



    header {
      height: -10vh;
      background-size: 100% 100%;
      background-position: center;
      background-attachment: fixed
    }

    .main {
      overflow: hidden;
      position: fixed;
      background-color: rgba(135, 206, 250, 0.4);
      top: 0;
      width: 100vw;
      height: 8vh;
      max-width: 1550px;
    }

    ul {
      list-style-type: none;
      margin-top: 20px;
      margin-right: 50px;
    }

    ul li {
      display: inline;
    }

    .list {
      position: fixed;
      display: block;
      top: 9px;
      float: left;
    }

    .list li.logo img {
      position: relative;
      float: left;
      top: -18px;
      margin-left: 10%;
      margin-right: 35px;
    }

    .list input[type=image] {
      position: relative;
      float: right;
      top: -88px;
      left: 10%;
      margin-left: 20%;
      padding: 4px;
      border-radius: 10px;
      border: 1px solid #00f;
      background-color: #fff;
    }

    .list input[type=image]:hover {
      background-color: #739ac5;
    }

    .list2 {
      position: relative;
      top: -20px;
      float: right;
    }

    .list2 li a {
      text-decoration: none;
      color: #fff;
      padding: 5px 20px;
      border: 1px solid transparent;

    }

    .list2 li a:hover {
      background-color: #fff;
      color: #000;

    }

    .search {
      display: inline;
      color: black;
      text-align: center;
      text-decoration: none;
    }

    .search input[type=text] {
      position: relative;
      float: left;
      top: -53px;
      left: 22%;
      padding: 6px;
      font-size: 15px;
      border-radius: 15px;
      border: 1px solid #0000ff;

    }

    .search input[type=image] {
      position: relative;
      width: 22;
      height: 22;
      margin-left: 60px;
      margin-top: 34px;

    }

    .search input[type=text]:hover {
      background-color: #dcdcdc;
    }

    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-top: -27px;
      margin-left: 615px;
      float: right;
      background-color: #000;
      background-size: fixed;
      background-size: cover;
      position: fixed;
    }
  </style>

</head>


<body onload="imageLoad()">

  <header>
    <div class="main">
      <ul>
        <ul class="list">
          <li class="logo"><a href="home.php"><img src="logo.png" alt="Logo" style="width:40px;height:40px"></a></li>

          <div class="search">
            <form method="POST">
              <input type="text" name="search_p" placeholder="Search.." size="35">
              <input type="image" name="submit_p" src="search_icon.png" alt="Search image">
            </form>
          </div>
        </ul>

        <ul class="list2">
          <li><a href="home.php">Home</a></li>
          <li><a href="touristplace.php">Tourist Places</a></li>
          <li><a href="virtual.php">Virtual Tour Guide</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <div id="imagePhoto" class="avatar" >
          </div>
        </ul>
      </ul>
    </div>
    </div>
  </header>

</body>
<script>
  function imageLoad(){
    document.getElementById('imagePhoto').style.backgroundImage = "url('uploaded/<?php echo $_SESSION['image']; ?>')";
  }
</script>

</html>