# Rendszerterv

## BEVEZETÉS
-----------------------------

A dokumentum Nagy Szabolcs Máté, Fekete Szabolcs, Bódi Cintia Maja, Vasas Csaba, Soós Gergő, Rajna Franciska közös projektje
keretein belül létrejött szoftvert specifikálja.


A RENDSZER CÉLJA
-----------------------------
A szoftver egy megrendelő által kért alkalmazás.
Egy online webáruház megvalósítása.

ÜTEMTERV
-----------------------------

Prototipus elkészítése és bemutatása.
A kész szoftver átadása a megrendelőnek.



Üzleti modell
-----------------------------


![igenyeltuzletimodell](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/igenyeltuzletimodell.png)
![jelenlegiuzletimodell](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/jelenlegiuzletimodell.png)



Követelmény listák
-----------------------------

Funkcionális követelmények:
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

Nemfunkcionális követelmények:

K6: Letisztult design:
A rendszer design legyen letisztult, átlátható, könnyen használható. Törekszünk a lehető legkényelmesebb kinézetre.
K6: Biztonság:
Az adatbázisban tárolt adatok a lehető legbiztonságosabb módon kerüljenek eltárolásra, külső behatásra ne történhessen adatlopás.

Támogatott eszközök:

Webes felülete miatt platform független.


FIZIKAI KÖRNYEZET
-----------------------------
A webes alkalmazás háttere (backend) a Java alpaján fut. A vizuális megjelenítést (frontend) JavaScript valósítja meg.


TESZTTERV
-----------------------------

Tesztterv.md -ben megtalálható.

TELEPÍTÉSI TERV
-----------------------------

A webes alkalmazás telepítés nélkül futtatható, bármely webböngészőn keresztül, belső hálózaton.

KARBANTARTÁSI TERV
-----------------------------

A webes alkalmazás minimális karbantartást igényel, amely a következőkre bontható:
- Ellenőrizni kell, hogy a jövőben kiadott böngésző frissítésekkel műkődőképes marad-e.
- A szerver folyamatos karbantartása és megfelelő kezelése.