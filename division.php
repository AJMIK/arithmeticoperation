<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>division</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="back1">
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
              </li>
          <li class="nav-item active">
            <a class="nav-link" href="addition.php">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subtraction.php">Sub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="multiplication.php">Mul</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="division.php">Div</a>
          </li>
        </ul>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-2"></div>
              <div class="col col-12 col-sm-8">
                  <center><p class="text2">DIVISION</p></center>
                  <table class="table">
                      <tr>
                          <td>FIRST NUMBER</td>
                          <td><input type="text" class="form-control" id="num1"></td>
                      </tr>
                      <tr>
                          <td>SECOND NUMBER</td>
                          <td><input type="text" class="form-control" id="num2"></td>
                      </tr>
                      <tr>
                          <td>RESULT</td>
                          <td><input type="text" class="form-control" id="res"></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><button onclick="division()" class="btn btn-danger">QUOTIENT</button></td>
                      </tr>
                  </table>
              </div>
              <div class="col col-12 col-sm-2"></div>
          </div>
      </div>
      <script>
        function division() 
        {
            
          var getnum1=parseInt(document.getElementById("num1").value)
            var getnum2=parseInt(document.getElementById("num2").value)
         var result=getnum1/getnum2
         document.getElementById("res").value=result

        }
    </script>
</body>
</html>