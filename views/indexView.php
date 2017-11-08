

 <!doctype html>
 <html class="no-js" lang="">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title></title>
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="assets/css/bootstrap.css">
         <link rel="icon" href="favicon.ico" />
         <!-- Place favicon.ico in the root directory -->

         <link rel="stylesheet" href="css/normalize.css">
         <link rel="stylesheet" href="assets/css/main.css">
         <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     </head>
     <body>



 <!-- ~~~~~~~~~~~~~~~ ARRAY WITH ALL VEHICULES ~~~~~~~~~~~~~~~ -->
<div class="container arrayVehicules">

 <table class="table">
   <thead class="thead-default">
     <tr>
       <th>Id Accound</th>
       <th>Name</th>
       <th>Amount of Money</th>
     </tr>
   </thead>

   <tbody>

     <?php

     foreach ($vehicules as $key => $vehicule) {
      ?>
       <tr>
       <th scope="row"><?php echo $vehicule->getId_vehicule(); ?></th>
       <td><?php echo $vehicule->getType(); ?></td>
       <td><?php echo $vehicule->getNumber_wheels(); ?></td>
       <td><?php echo $vehicule->getColor(); ?></td>
       <td><?php echo $vehicule->getPrice(); ?></td>

       <td><?php if (method_exists($vehicule,'getCabin_color')){
                  echo $vehicule->getCabin_color();
          } else {
                  echo 'NULL';
            } ?> </td>

        <td><?php if (method_exists($vehicule,'getLuggage_rest_color')){
                   echo $vehicule->getLuggage_rest_color();
          } else {
                 echo 'NULL';
            } ?> </td>




       <!-- BUTTONS SEE / MODIFY / DELETE -->
       <!-- <td>
         <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
           <button type="button" class="btn btn-secondary">Delete</button>
           <button type="button" class="btn btn-secondary">Update</button>
           <button type="button" class="btn btn-secondary">See</button>
         </div>
       </td> -->

       </tr>

       <?php
   }
     ?>

   </tbody>
 </table>

</div>

         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
         <script src="js/plugins.js"></script>
         <script src="js/main.js"></script>

         <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
         <script>
             (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
             function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
             e=o.createElement(i);r=o.getElementsByTagName(i)[0];
             e.src='https://www.google-analytics.com/analytics.js';
             r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
             ga('create','UA-XXXXX-X','auto');ga('send','pageview');
         </script>
         <script src="js/bootstrap.js"></script>
     </body>
 </html>
