<!DOCTYPE html>
<html>
<head>
   <title> Try It Yourself </title>
</head>
<body>
   <p id="demo"></p>
   <button onclick="getRandomInt(255)"> Generate a Random Number From 1 to 255 </button>

   <script>
      // minimum is included, maximum is excluded
      function getRandomInt(num) {
         document.getElementById("demo").innerHTML = Math.floor(Math.random() * (num)) + 1;
      }
   </script>
</body>
</html>