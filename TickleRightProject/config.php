  <?php
  $conn = mysqli_connect("localhost", "root", "", "tickleright");
  if (mysqli_connect_error()) {
    echo "Failed to connect" . mysqli_connect_error();
  }
//   $query = "Select * from detail";
//   $query1 = mysqli_query($conn, $query);
//   if($query1)
//   {
//     echo "YES";
//   }
//   else
//   {
//     echo "NO";
//   }



  // if (isset($_POST['Submit'])) {
    
  //   $fname = $_POST['fname'];
  //   $phone = $_POST['phone'];
  //   $email = $_POST['email'];
  //   $add = $_POST['add'];


  //   if (!empty($fname) && !empty($phone) && !empty($email) && !empty($add)) 
  //   {

  //     $insert = mysqli_query($conn, "Insert into detail (Name, Mobile, Email, Address)
  //     values ('$fname','$phone','$email','$add')");

  //     if ($insert) {
  //       // echo "Data Inserted";
  //       $status = "Data Inserted";        
  //       header("Location:http://localhost/tickleRightProject/ThankYou.php?refid=<?=$id");


  //     } else {
  //       // echo "Data Not Inserted";
  //       $status = "Data Not Inserted";
  //       header("Location:http://localhost/tickleRightProject/ThankYou.php?status=$status&$pemail");
  //     }
  //   } else {
  //   //   echo "No data";
  //     $status = "Fill";
  //     header("Location:http://localhost/tickleRightProject/ThankYou.php?status=$status&$pemail");
  //   }
  // } 
  // ?>  