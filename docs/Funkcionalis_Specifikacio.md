# Funkcionális specifikáció

## 1. A rendszer céljai és nem céljai

A webshop fejlesztésének célja egy online felület készítése és kiépítése, tekintettel a járványhelyzetre, illetve a személyes találkozások redukálására. Ez a rendszer hatékonyabbá teszi a rendelés folyamatának végbemenetelét, a személyes adatok tárolását, és a rendelés lebonyolítását.
A rendszer felhasználói különböző jogosultságokkal rendelkeznek (vendég/regisztrált/admin), ezeknek a jogoknak a kezelése az adminisztrációs felületen történik meg.
Célok közé tartozik a webshop kategória szerinti keresésének a megvalósítása, melyben nyilván van tartva az összes elérhető termék. Ezeknek a termékeknek manuálisan is kereshetőeknek kell lenniük amellett, hogy kategória szerint is megtörténhet a keresésük.
A rendszer fő felhasználói a vendégek és regisztrált felhasználók, így céljaink közé tartozik az ő számukra való legkönnyebb felület kiépítése is. Fontos cél az oldal fórumának kiépítése kommenteken és hozzászólásokon keresztül, így nagy figyelmet kell fordítani az oldal közösségi kommunikációjának egyszerűségére is. 
Webshopunk kínálata teljesen elérhető lesz regisztráció nélkül is, így az átlag felhasználók, akik nem szeretnének a regisztrációval bajlódni, is könnyedén tudnak vásárolni platformunkról.
A fejlesztés első részében a fő funkciók kerülnek elkészítésre (ki-bejelentkezési funkció, felhasználók nyilvántartása / kezelése, termékek és kategóriáik adminisztrációja, rendelési műveletek nyilvántartása), melynek célja a megbízható működés és alapok lefektetése, de itt még nem cél például a bankkártyás fizetés megvalósítása, avagy egyéb komplexebb műveletek implementálása.
Továbbá az sem cél jelenleg, hogy rendszerünk több webshopot is kiszolgáljon, kapacitásaink hiánya miatt, így a teljes figyelmünk jelenleg erre az egy webshopra fog irányulni. 

## 2. Használati esetek
A rendszer használói a következők:
-	vendég
-	regisztrált
-	adminisztrátor
A rendszerhez tartozik még a vásárlási folyamatban használt kosár funkció is.

A rendszernek a következő funkciókat kell ellátnia:
-	az adminisztrátorok tudjanak termékeket regisztrálni és törölni
-	A regisztrált és vendég felhasználók tudjanak termékeket összehasonlítani
-	A regisztrált és vendég felhasználók tudjanak termékeket rendelni
-	A regisztrált és vendég felhasználók tudjanak fizetni
-	A regisztrált felhasználók tudjanak fiók adatot módosítani
- 	A regisztrált felhasználók tudjanak	hozzászólásokat írni
-	A regisztrált felhasználók tudjanak új jelszót kérni
-	A regisztrált felhasználók tudják a kosár tartalmát menteni 
-	Az adminisztrátorok tudjanak felhasználókat moderálni
-	Az adminisztrátorok tudjanak jogosultságokat kezelni
-	Az adminisztrátorok tudjanak új termékeket hozzáadni
-	Az adminisztrátorok képesek legyenek a webshopot hibamentesen karbantartani
-	vendégek belépés nélkül is tudnak keresni és rendelni

Előfeltételek:
-	adminisztrátorok és regisztráltak részére a rendszer használatához jogosultság, azaz jelszó szükséges
-	fiókadat módosításhoz, hozzászóláshoz, új jelszó kéréshez, és kosár tartalmának mentéséhez regisztráció szükséges

![usecase_dia](https://github.com/ShuoTheOne/AFP2_Genshin/tree/main/docs/usecase.png)