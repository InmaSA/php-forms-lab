<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form action="retrieve.php" method="">
     <input type="text" placeholder="Name:" name="name">

     <input type="radio" name="sex" id="woman" value="woman" checked>
        <label for="woman">Woman</label>
     <input type="radio" name="sex" id="man" value="man" >
        <label for="man">Man</label>   

     <p>Birth year:</p> 
     <select name="year" id="year">
        <?php
        for($i = 1970; $i <= 2019; $i++) {
          echo "<option value=$i>$i</option>";
        }
        ?>
        <!-- <option value="2000">2000</option> -->
     </select>   

     <input type="checkbox" name="terms" id="terms" value="yes">
        <label for="terms">Agree terms of use</label>
     <input type="submit" value="Send">
  </form>

</body>
</html>