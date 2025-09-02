<?php 
      $usuarios = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo"];
      $cursos = ["ADS","COMEX","DSM","GE","PQ"];
      $periodos = ["Matutino", "Vespertino", "Noturno"];
      $fotos = [
            "https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987265163-9XILMVT3TK4HZ5X6538M/VH_01_1080pjpg.jpg",
            "https://th.bing.com/th/id/R.f1a83630b91b3f128e8f9dd58f3f8eed?rik=jkPZWEeSAZbPjQ&pid=ImgRaw&r=0",
            "https://th.bing.com/th/id/R.f5c52749d681a49d981200c3dadcf5b4?rik=y4kgyCqpGua8Uw&pid=ImgRaw&r=0"
      ];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Select</title>
</head>
<body>
      <form action="#" method="post">
            <label>Usuario:</label>
            <br>
            <?php
                  foreach ($usuarios as $user){
                        echo "<input type='radio' name='usuario' value='$user'>$user<br>";
                  }
            ?>
      
            <br>
            <label>Curso:</label>
            <select name="sltcurso">
                  <?php
                        foreach ($cursos as $c){
                              echo "<option>$c</option>";
                        }
                  ?>
            </select>
            <br><br>

            <label>Período</label>
            <?php
                  foreach($periodos as $p){
                        echo "<input type='checkbox' name='periodo[]' value='$p'>$p";
                  }
            ?>
            <br><br>
            <input type="submit" value="Enviar">

            <br>
            <h2>Galeria</h2>
            <?php
                  foreach($fotos as $f){
                        echo "<img src=$f width='200px' style='margin:10px; border-radius:10px;'>";
                  }
            ?>
      </form>

      <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                  
                  $usuarios = isset($_POST["usuario"]) ? $_POST["usuario"] : 'NI';
                  $curso = isset($_POST["sltcurso"]) ? $_POST["sltcurso"] : 'NI';
                  $periodo = isset($_POST["periodo"]) ? $_POST["periodo"] : [];
                  
                  echo "$usuarios matriculado em $curso";
                  echo "<h3>Períodos: </h3>";

                  echo "<ul>";
                  foreach ($periodo as $p){
                        echo "<li>$p</li>";
                  }
                  echo "</ul>";

            }
      ?>
</body>
</html>