<?php 

if (isset($_POST["calculate"])){

    $salary = $_POST['salary'];
    $taxAllow = $_POST['tax-free'];
    $selected_radio = $_POST['tax-cal'];

    
    if (empty($salary) || empty($taxAllow) || empty($selected_radio)) {
        header("location: calculator.php?error=empty");
    } else if ( $selected_radio == 'yearly' || $selected_radio == 'monthly'){

        $socialFee = $salary * 4 / 100;

        if($salary <= 10000){

            $taxSalary = 0;
            $SAT = $salary - $taxSalary;
            $socialFee = 0;

        } else if ($salary <= 25000) {

            $taxSalary = ($salary * 11 / 100);
            $SAT = $salary - $taxSalary - $socialFee + $taxAllow;
          
        } else if ($salary <= 50000) {
            
            $taxSalary = ($salary * 30 / 100);
            $SAT = $salary - $taxSalary - $socialFee + $taxAllow;

        } else if ($salary > 50000) {

            $taxSalary = ($salary * 45 / 100) ;
            $SAT = $salary - $taxSalary - $socialFee + $taxAllow;

        }
    } 

}  