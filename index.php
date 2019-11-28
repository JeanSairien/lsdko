
<!DOCTYPE html>
<html>
<head>
  <title>LeSonDuko</title>
  <meta charset="utf-8">
  <meta name="description" content="Voici mes créations faites a la palette avec gimp, paint.net, inkscape, photoshop CS8, blender et le logiciel bamboo , bon visionnage !!">
</head>
<body>

<center>
<table style="border: 1px solid black">
<?php 
                    $img =scandir('../lsdko');
                   
         foreach ($img as $key => $val) {
                      $vals = pathinfo($val, PATHINFO_EXTENSION);
                      
                      
                      // if( $key == ""  && $key != "." || $key != ""){
                        if($val == "." || $vals == "php" || $vals == "psd" || $vals == "psd" || $val == ".." || $vals == "db" || $vals == "blend" || $vals == "blend1" || is_dir($val) ){
                          
                      // echo '<img src="../lsdko/'.$val.'" style="height: 250px ; width: 250px;"/>';
                      ?>                          
              
                          <div style="display:none;" class="files"></div>
                          
              
              <?php
                        
                  }else{
              ?>
                          <!--fichiers-->
                          <a target="_blank" href="../lsdko/<?= $val ?>">
                           <img height="250" width="250" src="../../lsdko/<?= $val ?>"/>
                          </a> 
                          
              <?php                
                    }
                  }
                
              ?>
              </table>
              <table style="border: 1px solid black">
<?php 
                    $img =scandir('../lsdko/discord/');
                   
         foreach ($img as $key => $val) {
                      $vals = pathinfo($val, PATHINFO_EXTENSION);
                      
                      
                      // if( $key == ""  && $key != "." || $key != ""){
                        if($val == "." || $vals == "php" || $vals == "psd" || $vals == "psd" || $val == ".." || $vals == "db" || $vals == "blend" || $vals == "blend1" || is_dir($val) ){
                          
                      // echo '<img src="../lsdko/'.$val.'" style="height: 250px ; width: 250px;"/>';
                      ?>                          
              
                          <div style="display:none;" class="files"></div>
                          
              
              <?php
                        
                  }else{
              ?>
                          <!--fichiers-->
                          <a target="_blank" href="../lsdko/discord/<?= $val ?>">
                           <img height="250" width="250" src="../../lsdko/discord/<?= $val ?>"/>
                          </a> 
                          
              <?php                
                    }
                  }
                
              ?>
              </table>
</center>
</table>              
</body>
</html>




