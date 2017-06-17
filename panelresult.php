<?php
session_start();
/**
 * @author Boomer
 * @copyright 2017
 */

if ( isset($_POST['submit'])) {
    $g1 = $_POST['g1'];
    $g2 = $_POST['g2'];
    $g3 = $_POST['g3'];
    $g4 = $_POST['g4'];
    $g5 = $_POST['g5'];
    $g6 = $_POST['g6'];
    $g7 = $_POST['g7'];
    $g8 = $_POST['g8'];
    $g9 = $_POST['g9'];
    $g10 = $_POST['g10'];
    $g11 = $_POST['g11'];
    
$a = $_POST['gc1'];
$b = $_POST['gc2'];
$c = $_POST['gc3'];
$d = $_POST['gc4'];
$e = $_POST['gc5'];
$f = $_POST['gc6'];
$g = $_POST['gc7'];
$h = $_POST['gc8'];
$i = $_POST['gc9'];
$j = $_POST['gc10'];
$k = $_POST['gc11'];
$l = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k;
    
    $gs1 = $g1 * $a;
    $gs2 = $g2 * $b;
    $gs3 =  $g3 * $c;
    $gs4 = $g4 * $d;
    $gs5 = $g5 * $e;
    $gs6 = $g6 * $f;
    $gs7 = $g7 * $g;
    $gs8 = $g8 * $h;
    $gs9 = $g9 * $i;
    $gs10 = $g10 * $j;
    $gs11 = $g11 * $k;
    
    $gst = $gs1 + $gs2 + $gs3 + $gs4 + $gs5 + $gs6 + $gs7 + $gs8 + $gs9 + $gs10 + $gs11;
    $gpa = $gst / $l;
    

}
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Admin Login Page</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1280">
      <!-- HEADER -->
      <header>
         <div class="line">
            <div class="box">
               <div class="s-6 l-2"> 
                  <img src="img/logo.png"> 
               </div>
               <div class="s-12 l-8 right">
                  <div class="margin">
                     <form  class="customform s-12 l-8" method="get" action="http://google.com/">
                        <div class="s-9"><input type="text" placeholder="Search form" title="Search form" /></div>
                        <div class="s-3"><button type="submit">Search</button></div>
                     </form>
                     <div class="s-12 l-4">
                        <p class="right">Admission</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- TOP NAV -->  
         <div class="line">
            <nav>
               <p class="nav-text">Main navigation</p>
               <div class="top-nav s-12 l-10">
                  <ul>
                     <li><a>Home</a></li>
                     <li>
                        <a>Portal</a>
                        <ul>
                           <li><a>Admission</a></li>
                           <li><a>Result</a></li>
                           <li>
                              <a>News</a>
                              <ul>
                                 <li><a>Admission</a></li>
                                 <li><a>Result</a></li>
                                 <li><a>News</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a>School</a>
                        <ul>
                           <li><a>About</a></li>
                           <li><a>Location</a></li>
                        </ul>
                     </li>
                     <li><a>Contact</a></li>
                  </ul>
               </div>
               <div class="hide-s hide-m l-2">
                  <i class="icon-facebook_circle icon2x right padding"></i>
               </div>
            </nav>
         </div>
      </header>
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box">
            <div class="margin2x">
               <!-- CONTENT -->
               <section class="s-12 m-8 l-9 right">
                  <h1>Admin Login</h1>
                  <div class="margin">
                     <div class="s-12 m-6 l-4">
                        <form method="post" action="panelcalc.php">
                        <table border="1" style="border: 1px solid;">
                        <tr>
                        <th colspan="2"><center>CGPA Calculator</center></th>
                        </tr>
                        <tr>
                        <td>School</td><td>Federal polytechnic offa</td></tr>
                        <tr><td>Department</td>
                        <td><select name="depart"><option>Computer Science</option>
                        </select></td>
                        </tr>
                        <tr><td>Semester</td>
                        <td><?php echo $_POST['semester']; ?></td>
                        </tr>
                        <tr><td>GPA</td><td><?php echo $gpa; ?></td></tr>
                        <tr><td></td><td><button type="submit" name="next">NEXT</button></td></tr>
                        </table>
                        </form>
                     </div>
                  </div>
               </section>
               <!-- ASIDE NAV -->
               <aside class="s-12 m-4 l-3">
                  <div class="aside-nav minimize-on-small">
                     <p class="aside-nav-text">Sidebar navigation</p>
                     <ul>
                        <li><a>Home</a></li>
                        <li>
                           <a>Portal</a>
                           <ul>
                              <li><a>Admission</a></li>
                              <li><a>Result</a></li>
                              <li>
                                 <a>News</a>
                                 <ul>
                                    <li><a>Admission</a></li>
                                    <li><a>Result</a></li>
                                    <li><a>News</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a>School</a>
                           <ul>
                              <li><a>About</a></li>
                              <li><a>Location</a></li>
                           </ul>
                        </li>
                        <li><a>Contact</a></li>
                     </ul>
                  </div>
               </aside>
            </div>
         </div>
      </div>
      <!-- FOOTER -->
      <footer class="line">
         <div class="s-12 l-6">
            <p>Copyright 2017</p>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>      
   </body>
</html>