<?php 
// $filepath = realpath(dirname(__FILE__));
 include_once($_SERVER['DOCUMENT_ROOT'].'/slide/admin/classes/Process.php'); 
$pro= new Process();
?>
 <?php  
 if (isset($_POST)) {
   var_dump($_POST);
 }
 // if(!empty($_POST['booking_date_picker']) && !empty($_POST['select_event_type']) && !empty($_POST['booking_slot_type']) )
 // {  
 $jd=$_POST['json_chart_data'];

    $result=$pro->add_data($jd);
 //     if($result){ 
 //      echo $result;
 //    }
 //    else{
 //        echo $result;
 //    }
    
 //    }else{
 //      echo "empty";
 //    }
  ?>

  