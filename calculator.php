<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecalculator.css">
    <title>Document</title>
</head>
<?php include 'calcode.php'; ?>

<body>
    <h1>Income Tax Calculator</h1>
    
    <form action="" method="post">
        <h3> Please only write down your salary per year !!</h3>
        <h4>then you can check per month.</h4>

        <div class="salary">
        <span> Salary</span>  <input type="number" name="salary" id="salary"> USD
        </div>
         <div class="tax-free">
          <span>Tax Free </span> <input type="number" name="tax-free" id="tax-free"> USD
         </div>      
        <div class="radio-btns">
        <input type="radio" name="tax-cal" value="monthly"> Monthly
        <input type="radio" name="tax-cal" value="yearly"> Yearly 
        </div>
    
         
         <button type="submit" name="calculate">calculate</button>


    </form>


    <div class="tax">
        <div class="columns">
            <h4>Monthly</h4>

           <div class="rows">
               <h3>Total salary :</h3>
               <span>
                   <?php
                    echo $salary / 12;
                   ?>

               </span>
           </div>
           <div class="rows">
               <h3>Tax amount :</h3>
               <span>
                   <?php
                   echo $taxSalary / 12;
                   ?>
               </span>
           </div>
           <div class="rows">
               <h3>Social security fee :</h3>
               <span>
                   <?php
                   echo $socialFee / 12;
                   ?>
               </span>
           </div>
           <div class="rows">
               <h3>Salary after tax :</h3>
               <span>
                   <?php
                   echo $SAT / 12 ;
                   ?>
               </span>
           </div>

        </div>
        <div class="columns">
            <h4>Yearly</h4>

           <div class="rows">
               <h3>Total salary :</h3>
               <span>
                   <?php 
                        echo $salary ;
                   ?>
               </span>
           </div>
           <div class="rows">
               <h3>Tax amount :</h3>
               <span>
                   <?php

                   echo $taxSalary;
                   ?>
               </span>
           </div>
           <div class="rows">
               <h3>Social security fee :</h3>
               <span>
               <?php
                   echo $socialFee;
                ?>
               </span>
           </div>
           <div class="rows">
               <h3>Salary after tax :</h3>
               <span>
                  <?php
                   echo $SAT;
                   ?>
               </span>
           </div>


        </div>
    </div>
</body>
</html>