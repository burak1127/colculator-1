
<form method="POST">
    <p>SAYI 1:  <input type="text" name="sayi1"></p>
<p>SAYI 2:<input type="text" name="sayi2" ></p>
İŞLEM SEÇİNİZ:<select name="secim">
    <option value="1">topla</option> 
    <option value="2">çıkar</option> 
    <option value="3">çarp</option> 
    <option value="4">böl</option> 
</select>
<input type="submit" name="gonder" value="GÖNDER">
    </form>
<?php
$sayi1=$_POST["sayi1"];
$sayi2=$_POST["sayi2"];
$secim=$_POST["secim"];
if (isset($_POST["gonder"])){
function islem($sayi1,$sayi2,$secim){
    if($secim==1){
       return $sayi1+$sayi2;
    }
    elseif($secim==2){
        return $sayi1-$sayi2;
    }
    if($secim==3){
       return $sayi1*$sayi2;
    }
    if($secim==4){
       return $sayi1/$sayi2;
    }

    
    }
    $sonuc=islem($sayi1,$sayi2,$secim);
echo $sonuc;
}
