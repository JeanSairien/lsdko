<table style="border: 1px solid black">
<?php
                    $img =scandir('../lsdko/');

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
                          <a target="_blank" href="<?= $val ?>">
                           <img height="250" width="250" src="lsdko/discord/<?= $val ?>"/>
                          </a>

              <?php
                    }
                  }

              ?>
              </table>
