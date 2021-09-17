<?php
    error_reporting(0);
    include_once("dbconnect.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
      session_start();
      $to_acc_num=$_POST['to_acc_num'];
      $t_amount=$_POST['t_amount'];

      $_SESSION['to_acc_num']=$to_acc_num;
      $_SESSION['t_amount']=$t_amount;
      
      $account_num = $_SESSION['account_num'];
      $account_name = $_SESSION['account_name'];
      $bank_type = $_SESSION['bank_type'];
      $city = $_SESSION['city'];
      $branch_name = $_SESSION['branch_name'];
      $mobile = $_SESSION['mobile'];
      $balance = $_SESSION['balance'];

      if ($account_num != $to_acc_num) {
        $sql = "SELECT  * FROM customer where acno='".$to_acc_num."'";

                   $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                      $_SESSION['r_balance']=$row["bal"];
                      $_SESSION['r_name']=$row["name"];
                    }
                  } else {
                    echo "0 results";
                  }
      $r_balance = $_SESSION['r_balance'];
      $r_name = $_SESSION['r_name'];
      }


      if ($account_num == $to_acc_num) {
        echo "<script>alert(\"Account Numbers Should Not Be Same \")</script>";
        echo "<script> window.location=\"select.php\"</script>";
      }
      else{
          if ($balance < $t_amount) {
            echo "<script>alert(\" Account Balance is Less. \")</script>";
            echo "<script> window.location=\"select.php\"</script>";
          }
          else{
            $sender_amt = $balance - $t_amount;
            $reciver_amt = $r_balance + $t_amount;

            $sql1="UPDATE customer SET bal ='$sender_amt' WHERE acno = '$account_num'";
            $sql2="UPDATE customer SET bal ='$reciver_amt' WHERE acno = '$to_acc_num'";
            $sql3="INSERT INTO transactions(sender_acno, sender_name, sender_ac_bal, rec_acno, rec_name, amnt_transfrd, rec_bal) 
                                 VALUES ('$account_num','$account_name','$balance','$to_acc_num','$r_name','$t_amount','$sender_amt')";

            if((mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)) && mysqli_query($conn,$sql3)){
              echo "<script>alert(\"Amount Tranfered Successfully.\")</script>";
              echo "<script> window.location=\"customers.php\"</script>";
            }

            else{
              echo "<span>Error</span>";
            }

          }
      }
    }
    
?>