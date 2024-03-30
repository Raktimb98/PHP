<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <input type="text" id="fruit">
  <button onclick="showCase()">Add Fruit</button>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    //$(document).ready(function(){ showCase(); });
    function showCase(){
      var fruit=$('#fruit').val();
      switch (fruit) {
        case "1":
          console.log("Banana is yellow.");
          break;
        case "2":
          console.log("Apple is red.");
          break;
        case "3":
          console.log("Orange is orange.");
          break;
        default:
          console.log("Unknown fruit.");
      }
    }
  </script>
</body>

</html>