<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Brief me!</title>
</head>
  <body>
   
<h1>Brief me !</h1>
<p>Pas d'inspi ? Brief me !</p>


  <div class="text"><H2>Fais</H2><div id="display"></div><H2>pour</H2><div id="display2"></div></div>

  <div id="randomizeBtn">Brief me !</div>

<p class="credits">v1.0 - © Lylian FAUCON. - 2023</p>

    <script>
      var btn = document.getElementById("randomizeBtn");
      var display = document.getElementById("display");
      var display2 = document.getElementById("display2");

      btn.addEventListener("click", function() {

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_random_item.php", true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {

            var items = JSON.parse(xhr.responseText)
            display.innerHTML = items[0];
            display2.innerHTML = items[1];
          }
        };
        xhr.send();
      });

     
    </script>
  </body>
</html>
