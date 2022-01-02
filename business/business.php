<?php


function loginPageAlreadyInCheck(){

   
  if(!empty($_SESSION['userid'])){
    $way = './main.php';
    header('Location: '.$way);

  }
  else{


    if(!empty(@$_POST['kullanici_adi']) && !empty(@$_POST['password'])){
     
      
      include('db.php');

      $stmt = $db->prepare("SELECT id FROM kullanicilar WHERE kullanici_adi=? AND sifre=?");
      $stmt->execute([$_POST['kullanici_adi'],md5($_POST['password'])]); 
      $user = $stmt->fetch();

      if(!empty($user[0])){
        $_SESSION['userid'] = $user[0];
        $way = './main.php';
        header('Location: '.$way);
        
      }else{
        $way = './login.php?mismatch=1';
        header('Location: '.$way);

      }
    }
    }
}

function logout(){

    if($_SESSION['userid']){
        unset($_SESSION['userid']); 
        $way = './anaSayfa.php';
        header('Location: '.$way);
    }
}




































