<?php $title="Bases 1";?>
<?php include('partials/_header.php');?>
<?php include('partials/_nav.php');?>
<?php include('partials/_flash.php');
$result=$db->query("SELECT * FROM lecon");
$result->execute();
$table=$result->fetchAll();
?>

<body >
<div class="main">
    <img style="margin-bottom: 20px;" src="assets/fonts/module1/grand-oeuf.png">
    <div class="container" style="">
        <?php
        for ($i=0; $i <count($table); $i++)
        {
            echo '
                  <div class="col-sm-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:3px;">
                          <h5 class="panel-title">'.$table[$i]['libelle'].'</h5>
                        </div>
                        <div class="panel-body">
                          <b>'.$table[$i]['content'].'</b>
                        </div>
                         <div class="panel panel-success panel-footer" id="commencer">
                                 <a href="'.$table[$i]['debut'].'?le='.$table[$i]['id'].'">Commencer</a>
                          </div>
                    </div>
                  </div>
             ';
            // <a href=$table[$i][debut]>Commencer</a>
        }
        ?>
    </div>
</div>
<?php include('partials/_footer.php');?>

    <!-- FOOTER -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- Magnific cdn -->     
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
          <!-- LITY  cdn --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.2.2/lity.min.js"></script>

      <!-- jQuery library -->
   
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>    

