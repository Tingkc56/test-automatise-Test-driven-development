<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikaface</title>
</head>
<body>

<!-- 这里的action和method是一种php的方式，点击后他会让你直接进入toto.php的页面 -->
<!-- <form action="toto.php" method="post"> -->
    <div class="form-group" >
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" id="password" class="form-control" placeholder="" >
    </div>
    <button id="submit">Submit</button>
    <!-- </form> -->
</body>

<!-- ajax, 避免用php指向另外一个页面，用这个的话不用进入后台，可以方便直接在front解决各种简单问题并不用进入后台 -->
<script type="text/javascript">
document.querySelector("#submit").addEventListener('click',() => {
  alert('thank you!');
  
  let pseudo = document.querySelector("#pseudo").value;

  let psw = document.querySelector("#password").value;

  fetch(`toto.php?user=${pseudo}&passeword=${psw}`)
  .then(response => response.json())
  .then(data => console.log(data));

});

</script>

</html>