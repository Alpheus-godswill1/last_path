<?php include "connect.php"?>
<?php
 function insert_counsel(){
    global $connect;
    if(isset($_POST['send'])){
        $counsel_email =$_POST['email'];
        $counsel_fname =$_POST['fname'];
        $counsel_lname =$_POST['lname'];
        $counsel_state = $_POST['sta'];
        $counsel_numb = $_POST['numb']; 

        $query = "INSERT INTO counsel_path(email,couns_msg,First_name,last_name,couns_state,couns_numb) VALUES('$counsel_email','$counsel_fname','$counsel_lname','$counsel_state','$counsel_numb')";
        $result = mysqli_query($connect,$query);

        if(!$result){
            die("could_not_send_data_to_tabel".mysqli_error($connect));
        }
        header("location:counsel.php?file_successfully_uploaded");
    }

}
 insert_counsel();

 function locat_insert(){
    global $connect;
    if(isset($_POST['move'])){
        $locat_email= $_POST['locat_email'];
        $locat_msg= $_POST['locat_msg'];

        $query = "INSERT INTO locate_path(locate_email,locate_msgs) VALUES('$locat_email','$locat_msg')";
        $result = mysqli_query($connect,$query);

        if(!$result){
            die("could_not_send_data_to_tabel".mysqli_error($connect));
        }
        header("location:location.php?make_sure_to_fill_the_fields");
    }
 }
 locat_insert();

 function Insert_newbeliever(){
    global $connect;
    if(isset($_POST['pour'])){
        $bel_email =$_POST['email'];
        $bel_fname =$_POST['fname'];
        $bel_lname =$_POST['lname'];
        $bel_state = $_POST['sta'];
        $bel_numb = $_POST['numb']; 

        $query = "INSERT INTO believer_path(bel_email,bel_fname,bel_lname,bel_state,bel_numb) VALUES('$bel_email','$bel_fname','$bel_lname','$bel_state','$bel_numb')";
        $result = mysqli_query($connect,$query);

        if(!$result){
            die("could_not_send_data_to_tabel".mysqli_error($connect));
        }
        header("location:newbeliever.php?fill_form_before_uploading");
 }
}
 Insert_newbeliever();
?>