# Követelmény Specifikáció

-----------------------------
##BEVEZETÉS
-----------------------------

A dokumentum Nagy Szabolcs Máté, Fekete Szabolcs, Bódi Cintia Maja, Vasas Csaba, Soós Gergő, Rajna Franciska közös projektje
keretein belül létrejött szoftvert specifikálja.

-----------------------------
A RENDSZER CÉLJA
-----------------------------
A szoftver egy megrendelő által kért alkalmazás.
Egy online webáruház megvalósítása.

-----------------------------
ÜTEMTERV
-----------------------------

Az ügyfélell való konzultációk:
	2020-09-21-től 2020-12-17-ig Heti rendszerességgel szerda 13:00-kor.

-----------------------------

MÉRFÖLDKÖVEK

-----------------------------

Utólag határozzuk meg.

-----------------------------

4. Követelmény listák
4.1Funkcionális követelmények:
K1: Belépés
A weboldalt csak olyan felhasználók vehetik igénybe, akik rendelkeznek hozzáféréssel. Sikeres autentikáció után az összes (jogosultságaiknak megfelelő) funkcióhoz hozzáférnek. Az oldalon regisztrációra nincs lehetőség.

K2: Elfelejtett jelszó helyreállítása
Amennyiben egy felhasználó elfelejtette jelszavát, úgy kérhet az email címére egy jelszóhelyreállító linket, amin 1 órán keresztül megváltoztathatja a jelszavát.

K3: Különböző jogosultságok
Az oldalon szükséges a jogosultságok megkülönböztetése, ugyanis pl. egy irodai alkalmazott nem férhet hozzá az ő felettesének funkciójaihoz. Több jogosultsági szint is bevezetésre kerül (külsős, hr, csoportvezető stb...)

K4: Adatbázisban található adatok manipulálása
A rendszer lényege, hogy a cég mindennemű adata egy adatbázisban tárolódjon, amiket egy weboldalon keresztül létrehozni, módosítani, törölni tudnak.

K5: A honlaphoz tartozó képek tárolása és implementálása
Az oldalon szükséges képeket a szerveren tároljuk és onnan jelenítjük meg a frontend segítségével.

4.2 Nemfunkcionális követelmények:

K6: Letisztult design:
A rendszer design legyen letisztult, átlátható, könnyen használható. Törekszünk a lehető legkényelmesebb kinézetre.
K6: Biztonság:
Az adatbázisban tárolt adatok a lehető legbiztonságosabb módon kerüljenek eltárolásra, külső behatásra ne történhessen adatlopás.

Támogatott eszközök:

Webes felülete miatt platform független.


-----------------------------
FIZIKAI KÖRNYEZET
-----------------------------
A webes alkalmazás háttere (backend) a Java alpaján fut. A vizuális megjelenítést (frontend) JavaScript valósítja meg.

-----------------------------
TESZTTERV
-----------------------------

Utólag határozzuk meg.

-----------------------------
TELEPÍTÉSI TERV
-----------------------------

A webes alkalmazás telepítés nélkül futtatható, bármely webböngészőn keresztül, belső hálózaton.

-----------------------------
KARBANTARTÁSI TERV
-----------------------------

A webes alkalmazás minimális karbantartást igényel, amely a következőkre bontható:
- Ellenőrizni kell, hogy a jövőben kiadott böngésző frissítésekkel műkődőképes marad-e.
- A szerver folyamatos karbantartása és megfelelő kezelése.