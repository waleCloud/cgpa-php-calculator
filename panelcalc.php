<?php

/**
 * @author Boomer
 * @copyright 2017
 */

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Panel calculator</title>
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
                  <h1>Calculator Panel</h1>
                  <div class="margin">
                     <div class="s-12 m-6 l-4">
                        <form method="post" action="panelresult.php">
                        <table border="1" style="border: 1px solid;">
                        <tr>
                        <th colspan="2"><center><select name="semester"><option>First Semester</option><option>Second Semester</option></select></center></th>
                        </tr>
                        <tr>
                        <td>Course code</td><td>Course name</td><td>Credit</td><td>Grade</td></tr>
                        <tr><td>ACC 211</td><td>Principles of Accounting</td><td><select name="gc1"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g1" required="required" placeholder="Enter Grade e.g 3.50"/></td>
                        </tr>
                        <tr><td>COM 211</td>
                        <td>Computer programming using OO Basic</td><td><select name="gc2"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g2" required="required" placeholder="Enter Grade e.g 4.00"/></td>
                        </tr>
                        <tr><td>COM 212</td><td>Introduction to system programming</td><td><select name="gc3"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g3" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>COM 213</td><td>Commercial programming language using OOCobol</td><td><select name="gc4"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g4" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>COM 214</td><td>File Organization and Management</td><td><select name="gc5"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g5" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>COM 215</td><td>Computer Packages II</td><td><select name="gc6"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g6" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>COM 216</td><td>Introduction to system analysis</td><td><select name="gc7"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g7" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>EED 217</td><td>Enterprenuership practical I</td><td><select name="gc8"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g8" required="required" placeholder="Enter Grade e.g 2.00"/></td></tr>
                        <tr><td>GNS 201</td><td>Use of English II</td><td><select name="gc9"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g9" required="required" placeholder="Enter Grade e.g 2.50"/></td></tr>
                        <tr><td>SIW 211</td><td>SIWES</td><td><select name="gc10"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g10" required="required" placeholder="Enter Grade e.g 3.25"/></td></tr>
                        <tr><td>COM 217</td><td>Troubleshooting I</td><td><select name="gc11"><option>4</option><option>3</option><option>2</option></select></td><td><input type="text" name="g11" required="required" placeholder="Enter Grade e.g 2.25"/></td></tr>
                        <tr><td></td><td><button name="submit" type="submit">Calculate</button></td></tr>
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
<?php

?>