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
                        <td><select name="semester"><option>First Semester</option>
                        <option>Second Semester</option>
                        <option>Third Semester</option>
                        </select></td>
                        </tr>
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
                           <a>Company</a>
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