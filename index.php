<?php
require 'header.php';

$test1= 14; 
$test2 = 10; 

if($test1 > $test2){
    $result = $test1-$test2; 

} else{
    $result = $test2-$test1; 
}

echo $result;

while($test1 > $test2){
    $result = $test1+$test2; 
    $test1= 5; 
    $test2=7;
    echo $result;  
}
?>


<div class="accordion" id="accordionExample">
<?php 
$acc_count=3;
while($acc_count >=0){ ?> 
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #<?php echo $test1;?> 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
    <?php 
    $acc_count = $acc_count - 1; 
    } ?> 
  </div>
 
 
</div>


<?php require 'database.php'; 

$query ='SELECT * FROM `person_info`'; 
$query_exc = $conn->query($query);
//executing query to save results in $results

while($results= $query_exc->fetch(PDO::FETCH_ASSOC)){ ?>             
<?php echo $result['fname']; ?>
           <?php } ?>

?>

<form action="submit.html" method="GET">
            <input type="text" name="firstName" value="First Name" disabled>
            <input type="text" name="LastName">
            <input type="color" name="colour">
            <input type="month" name="month">
            <input type="submit">
 </form>

 <?php
require 'footer.php';
?>
