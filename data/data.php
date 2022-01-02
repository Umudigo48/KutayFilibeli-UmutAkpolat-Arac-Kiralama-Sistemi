<?php
session_start();

function aracSayfasi($db){
    $stmt = $db->prepare("SELECT * FROM aracBilgileri WHERE id=?");
    $stmt->execute([$_GET['aracId']]); 
    $arac = $stmt->fetch();
    return $arac;
    
}

function anonimMain($db){
    $stmt = $db->prepare("SELECT * FROM aracBilgileri");
    $stmt->execute(); 
    $arac_listesi = array();
    
    while($cars = $stmt->fetch()){
        $teslimTarihi = $cars['teslim_edilecegi_tarih'];
        $today = date("Y-m-d");
        if($teslimTarihi<$today ){
            array_push($arac_listesi,$cars);
        }
    }

    return $arac_listesi;
    
}

function anonimAracSayfasi($db){
    $stmt = $db->prepare("SELECT * FROM aracBilgileri WHERE id=?");
    $stmt->execute([$_GET['aracId']]); 
    $arac = $stmt->fetch();
    return $arac;
}

function kiralamaSayfasi($db){
    if(!empty(@$_POST['isim'])){
       
        $stmt = $db->prepare("UPDATE aracBilgileri SET teslim_alinma_tarihi=?, teslim_edilecegi_tarih=? WHERE id=?");
        $stmt->execute([$_POST['kiralanma_zamani'],$_POST['kiralanma_bitis_zamani'],$_POST['aracId']]); 
        $way = './main.php';
        header('Location: '.$way);
    }

}
function kiralamaIslemiMusteriEkle($db){
    if(!empty(@$_POST['isim'])){
        
        $insert = $db->prepare("INSERT  INTO kiralik_bilgileri(kullanici_id,verilme_tarihi,alinma_tarihi,verilis_km,alinan_ucret,musteri_ad,musteri_soyad,son_km) VALUES(?,?,?,?,?,?,?,?)");
        $insert->execute([$_SESSION['userid'],$_POST['kiralanma_zamani'],$_POST['kiralanma_bitis_zamani'],$_POST['anlikKM'],$_POST['fiyat'],$_POST['isim'],$_POST['soyisim'],$_POST['son_km']]); 
        
    }


}


function rezervasyon($db){

    if(!empty(@$_POST['isim'])){
        include('db.php');
        $stmt = $db->prepare("UPDATE aracBilgileri SET rezerve=1 WHERE id=?");
        $stmt->execute([$_POST['aracId']]); 
    
        $way = './anonimMain.php';
        header('Location: '.$way);
    }

}