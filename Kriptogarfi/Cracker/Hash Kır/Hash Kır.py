#!/usr/bin/env python2
#-*- coding:utf-8 -*-
import argparse 
import random 
import hashlib
import sys
import os
yardim = """-y , --yardim : Yardım menüsü
-k , --kelime : Sözlük saldırısı yapar , kelime listesi girmeniz gerekli ör : -k sifre.txt
-K , --kabakuvvet : Kaba kuvvet saldırısı yapar , karakter belirtilmesi gerekir ör : -K 123abc (GİRİLEN KARAKTERLER İÇİN RANDOM ŞİFRE OLUŞTURUR)
-e , --enaz : Oluşturulucak kelimenin en az uzunluğu ör : -K 123456 -e 1 (EN AZ 1 KARAKTERLİK ŞİFRE OLUŞTURULUR), girilmesine gerek yoktur VARSAYILAN : 1
-f , --fazla : Oluşturulucak en fazla kelime uzunluğu ör : -K 123456 -f 8 (EN FAZLA 8 KARATERLİK ŞİFRE OLUŞTURUR) VARSAYILAN : 8
-md5 : MD5 Hashlar üzerinde işlem yapar
-sha1 : MD5 Hashlar üzerinde işlem yapar
-sha224 : SHA224 Hashlar üzerinde işlem yapar
-sha256 : SHA256 Hashlar üzerinde işlem yapar
-sha384 : SHA384 Hashlar üzerinde işlem yapar
-sha512 : SHA512 Hashlar üzerinde işlem yapar"""
parser = argparse.ArgumentParser(add_help=False)
parser.add_argument("-y","--yardim",action="store_true")
parser.add_argument("-k","--kelime")
parser.add_argument("-K","--kabakuvvet")
parser.add_argument("-e","--enaz",type=int)
parser.add_argument("-f","--fazla",type=int)
parser.add_argument("-md5")
parser.add_argument("-sha1")
parser.add_argument("-sha224")
parser.add_argument("-sha256")
parser.add_argument("-sha384")
parser.add_argument("-sha512")
args = parser.parse_args()
 
if args.yardim:
    print yardim
def kabakuvvet(kelimeler):
    e = 1
    f = 8
    if args.enaz:
        e = args.enaz
    if args.fazla:
        f = args.fazla
    print "En az oluşturulucak : %d"%(e)
    print "En fazla oluşturulucak : %d"%(f)
    print "Karakterler : %s"%(kelimeler)
    while True:
            yap = random.randint(e,f)
            kir = ''.join(random.choice(kelimeler) for x in range(yap))
            if args.md5:
                saldiri = hashlib.md5(kir).hexdigest()
            elif args.sha1:
                saldiri = hashlib.sha1(kir).hexdigest()
            elif args.sha224:
                saldiri = hashlib.sha224(kir).hexdigest()
            elif args.sha384:
                saldiri = hashlib.sha384(kir).hexdigest()
            elif args.sha512:
                saldiri = hashlib.sha512(kir).hexdigest()
            else:
                print "--kabakuvvet , -K seçeneği girildi ancak hash ve türü belli edilmedi"
            sys.stdout.write("\r"+kir+":"+saldiri)
            if saldiri == args.md5:
                print "\nHash kırıldı : %s"%(kir)
                break
            elif saldiri == args.sha1:
                print "\nHash kırıldı : %s"%(kir)
                break
            elif saldiri == args.sha224:
                print "\nHash kırıldı : %s"%(kir)
                break
            elif saldiri == args.sha256:
                print "\nHash kırıldı : %s"%(kir)
                break
            elif saldiri == args.sha384:
                print "\nHash kırıldı : %s"%(kir)
                break
            elif saldiri == args.sha512:
                print "\nHash kırıldı : %s"%(kir)
                break
def liste_kir(tur,liste):
    try:
        kirdi = False
        for kir in open(liste,'r').read().split():
            if tur == "md5":
                saldiri = hashlib.md5(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.md5)
                if saldiri == args.md5:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
            elif tur == "sha1":
                saldiri = hashlib.sha1(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.sha1)
                if saldiri == args.sha1:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
            elif tur == "sha224":
                saldiri = hashlib.sha224(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.sha224)
                if saldiri == args.sha224:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
            elif tur == "sha256":
                saldiri = hashlib.sha256(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.sha256)
                if saldiri == args.sha256:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
            elif tur == "sha384":
                saldiri = hashlib.sha384(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.sha384)
                if saldiri == args.sha384:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
            elif tur == "sha512":
                saldiri = hashlib.sha512(kir).hexdigest()
                sys.stdout.write('\r' + saldiri + "(" + kir + ")" + ":" + args.sha512)
                if saldiri == args.sha512:
                    kirdi = True
                    print "\nHash kırıldı :" + kir
                    break
        if kirdi == False:
            print "\nHash kırılamadı"
    except IOError:
        print "Dosya bulunamadı"
if args.kelime:
    if args.md5:
        liste_kir("md5",args.kelime)
    if args.sha1:
        liste_kir("sha1",args.kelime)
    elif args.sha224:
        liste_kir("sha224",args.kelime)
    elif args.sha224:
        liste_kir("sha224",args.kelime)
    elif args.sha256:
        liste_kir("sha256",args.kelime)
    elif args.sha384:
        liste_kir("sha384",args.kelime)
    elif args.sha512:
        liste_kir("sha512",args.kelime)
    else:
        print "-k , --kelime seçeneği girildi ancak hash ve türü belli edilmedi"
if args.kabakuvvet:
    try:
        kabakuvvet(args.kabakuvvet)
    except ValueError:
        print "Geçersiz karakter uzunluğu girildi --enaz : %d --fazla : %d" % (args.enaz,args.fazla)
    except KeyboardInterrupt:
        print "\n"
        pass
