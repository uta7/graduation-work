<!DOCTYPE html>

<head>
  <title>問題</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">

  <script>
    const hide = document.getElementsByClassName("hide");
    hide.addEventListener('click', () => {
      hide.classList.add("hidden");
    });
  </script>  
</head>

<body>
  <input class="checkbox" type="checkbox">
  <p class="hide" onclick="関数名">question</p>
</body>

