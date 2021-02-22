# Funkcionális specifikáció

## A rendszer céljai és nem céljai

A webshop fejlesztésének célja egy online felület készítése és kiépítése, tekintettel a járványhelyzetre, illetve a személyes találkozások redukálására. Ez a rendszer hatékonyabbá teszi a rendelés folyamatának végbemenetelét, a személyes adatok tárolását, és a rendelés lebonyolítását.
A rendszer felhasználói különböző jogosultságokkal rendelkeznek (vendég/regisztrált/admin), ezeknek a jogoknak a kezelése az adminisztrációs felületen történik meg.
Célok közé tartozik a webshop kategória szerinti keresésének a megvalósítása, melyben nyilván van tartva az összes elérhető termék. Ezeknek a termékeknek manuálisan is kereshetőeknek kell lenniük amellett, hogy kategória szerint is megtörténhet a keresésük.
A rendszer fő felhasználói a vendégek és regisztrált felhasználók, így céljaink közé tartozik az ő számukra való legkönnyebb felület kiépítése is. Fontos cél az oldal fórumának kiépítése kommenteken és hozzászólásokon keresztül, így nagy figyelmet kell fordítani az oldal közösségi kommunikációjának egyszerűségére is. 
Webshopunk kínálata teljesen elérhető lesz regisztráció nélkül is, így az átlag felhasználók, akik nem szeretnének a regisztrációval bajlódni, is könnyedén tudnak vásárolni platformunkról.
A fejlesztés első részében a fő funkciók kerülnek elkészítésre (ki-bejelentkezési funkció, felhasználók nyilvántartása / kezelése, termékek és kategóriáik adminisztrációja, rendelési műveletek nyilvántartása), melynek célja a megbízható működés és alapok lefektetése, de itt még nem cél például a bankkártyás fizetés megvalósítása, avagy egyéb komplexebb műveletek implementálása.
Továbbá az sem cél jelenleg, hogy rendszerünk több webshopot is kiszolgáljon, kapacitásaink hiánya miatt, így a teljes figyelmünk jelenleg erre az egy webshopra fog irányulni. 

## Használati esetek
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

![usecase_dia](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/usecase.png)


## Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
* K01, K02, K03: Az alkalmazást úgy hozzuk létre, hogy tartalmazza a admin, product és a user adminisztrációját, melyet a adminok felhasználó név/jelszó megadásával a rendszerbe belépve fognak elérni. Ezek fogják adni a rendszer fő funkcióit.
* K04: Különböző jogosultsági szinteket fogunk kialakítani. Az adminisztrátori jogosultsággal rendelkező felhasználóknak minden funkcióhoz hozzá fognak férni, felhasználói fiókokat tudnak létrehozni/törölni, termékeket létrehozni/törölni.
* K05: A felhasználói felületet úgy alakítjuk ki, amely egy általános weboldal képét fogja nyújtani, az egyes funkciók egyértelmű elnevezést kapnak, és könnyen elérhetők lesznek.
* K06: A web alkalmazást úgy hozzuk létre, hogy rendszerbe való belépés nélkül is az online felületen keresztül is lehessen termékeket keresni a honlapon. 
* K07: A rendszer elkészítésekor ügyelünk a platformfüggetlen, robosztus működés kialakítására, ezért ellenőrizzük kódunk helyességét, hogy egy adott HTML elemet támogatják-e a böngészők, fontosabb alkalmazások és kisegítő technológiák. A HTML vizsgálathoz beleértjük a css vizsgálatot is. A teszteléseket elvégezzük Firefox, Chrome, Edge, Opera, böngészőkön, ill. Windows, Linux, iOs operációs rendszeren is.
* K08: A szabványos és elterjedt technológiák használata biztosítja. 
* K09: A kezelt adatokat MYSQL adatbázisban fogjuk tárolni. Az adatbázis használatával biztosítjuk az adatok bővíthetőségét. A applikációt JavaScript objektum orientált módon valósítjuk meg, amellyel új funkciókat könnyedén tudunk utólag hozzáadni a rendszerhez.
* K10: Azonos webáruház folyamatok esetén a migrálás könnyedén megvalósítható, esetleges bővítések a K09 ponthoz írtak alapján gyorsan elérhetők. 

## Képernyőtervek
![kepernyo1](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/kepernyo1.png)
![kepernyo2](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/kepernyo2.png)
![kepernyo3](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/kepernyo3.png)

## Forgatókönyvek
Minden felhasználó/látogató számára a Kezdőlap oldal jelenik meg először. Az oldal logójára kattintva szintén, erre az oldalra navigálja a látogatót.
A navigáció sáv a Kezdőlap, Kategóriák, Kiemelet Ajánlatok és Hírlevélre való feliratkozás menüpontokat tartalmazza.
Az oldal logója mellett egy keresővel lehet keresni a termékek között, neveik szerint.
A header tartalmaz még egy kosarat, amire kattintva meg lehet tekinteni a kosár tartalmát, valamint egy a bejelentkező felületre navigáló ikont.
A bejelentkező felületen  keresztül lehet regisztrációs folyamatot végrehajtani.
Ezen funkciók a rendszerbe való belépés előtt minden esetben elérhetők.

A látogató bármelyik megjelenített oldalon kezdeményezheti az alább részletezett műveleteket vagy oldalak megjelenítését:
- A Kezdőlapra kattintva megjelennek az újdonságok.
- A Kategóriák menüpontot választva egy legördülő menüben megjelennek a választható kategóriák, ezekre kattintva mellettük az alkategórák.
- A Kiemelt ajánlatok az éppen akciós, vagy fogyó termékeket jeleníti meg.
- A Hírlevél pont segítségével lehet feliratkozni a hírlevélre az e-mail cím megadása után.
- A Belépést választva be lehet lépni a rendszerbe. Aki adminisztrátori jogosultsággal rendelkezik adminisztrátorként jelentkezik be. Hibás felhasználó név vagy jelszó megadása esetén újból meg kell adni az adatokat.

Amennyiben a felhasználó adminisztrátor a Kezdőlap menüpont mellett a Módosítás opció jelenik meg. Ezt választva egy egyzser adminisztrációs felületet kapunk, ahol az oldallal kapcsolatos változtatásokat lehet elvégezni.
Termék hozzáadsáa, törlése, módosítása, akciózás, áremelés, árcsökkentés. Felhasználó hozzáadása, törlése, módosítása, jogosuétságának beállítása.

Emellett a felhasználó ikonra kattintva megjelenik a belépett felhasználó neve (pl. Belépve: jucika957), a Személyes adatok, Jelszó csere, Kijelentkezés pontok közül lehet választani.

A Személyes adatok űrlapon végrehajtható feladatok:
 - A felhasználó tudja módosítani:
   - nevét
   - a telefonszámát
   - e-mail címét
   - lakcímét
 - Ennek értelemszerűen csak abban az esetben van jelentősége, ha a felhasználó adminisztátori jogosultsággal nem rendelkezik.

Egy kategóriát kiválasztva listázva megjelennek a termékek a nevüket és árukat feltűntetve, valamint egy "Kosárba" gomb. Ezt használva csak egy db kerül a kosárba a termékből.
Ha egy adott termék elfogyott jelzi a vásárlónak.
A "Kiemelt ajénlatok" és a "Keresés" is hasonlóan épül fel.

Egy termék választása esetén:
- Láthatunk egy képet a termékről.
- Mellette a termékről kaphatunk pontosabb információkat:
  - Neve
  - Ára
  - Vásárlói visszajelzések: Csak bejelentkezett felhasználó tud írni.
  - Rövid leírás
- A "Kosárba" gomb mellett megadhatjuk, hogy hány db ilyen terméket szerenénk vásárolni.
- Ha nincs a termékből elég, vagy egyáltalán nincs, akkor igénylést küldhet az adminisztrtátoroknak.
- Ha elfogyott / limitált mennyiségben van jelezi.
- Akció esetén a régi ár is megjelenik.

A Regisztrációra kattintva különböző adatokat kell a felhasználónak megadni.
- Felhasználónév
- Jelszó
- Jelszó mégegyzser: Egyeznie kell a jelszó pontban megadottal.
- Teljes név
- Születési dátum: 16 év alatt nem lehet regisztrálni.
- Irányítószám
- Város
- Utca
- Házszám
- E-mail cím

A regisztrálás gombra kattintva, ha minden megfelelő az oldal a Belépés-hez navigálja a felhasználót.
Sikertelen regisztráció esetén a hibás cellákat újra ki kell tölteni.

A kosárra kattintva:
- Bejelentkezett felhasználó esetén:
  - Elmenti a kosár tartalmát, hogy legközelebbi látogatásakor is hozzáférhessen.
  - Vásárlás alkalmával nem szükséges megadni az adatait.
- Nem bejelentkezett felhasználó esetén:
  - A kosár tartalma az oldal bezárásával törlődik.
  - A vásárlásra kattintva meg kell adni az adatait

A következőkben az adminisztrációs felületet fogom tárgyalni:

Termék:
- Termék hozzáadása pontban a termék adatait kell megadni:
  - Nevét
  - Kategóriáját
  - Alkategóriáját
  - Árát
  - Rövid leírás.
  - Raktáron lévő mennyiség.
- Termék módosítása pontban meg lehet változtatni a termék nevét, árát, kategóriáját, alkategóriáját, leírását, kiemelt-e és mennyiségét.
- Ezek helytelen kitöltése esetén a rosszul megadott adat celláját újra ki kell tölteni.
- A mentés gombra kattintva megjelenik egy összefoglaló a változtatásokról. Az Mégse gomb visszavetez az űrlaphoz.
- Akció esetén meg lehet adni, hány százalékkal esik az ára és a rendszer automatikusan kiszámolja az új árat.
- Termék törlésével minden adat a termékről megsemmisül.
- Az oldal jelzi az adminisztrátornak, ha egy termék fogyóban van.


Felhasználó:
- Az adminisztrátor magasabb jogosultsággal tudja felhatalmazni a felhaszálókat, így ők is tudnak a termékeket módosítani, hozáadni.
- Felhasználó törlésével minden adata megsemmisül.
- Felhasználó módosításával lehet megváltoztani a felhasználó minden adatát: nevét, lakcímét, telefonszámát, e-mail címét, születési idejét és jelszavát.




## Jelenlegi helyzet leírás
Jelenleg a vevőnek a boltba kell jönni személyesen vagy telefonon kell intéznie a megrendelését, azonban ez gyakran félreértések és hibákat eredményez. Ahhoz, hogy a bolt feltudja venni a versenyt a többi boltokkal szemben, szükségük van egy felületre amely könnyen elérhető bárki számára. Egy webes felülettel már nem szükséges többé a személyes találkozásokra, illetve könnyebb a vevőknek pontos információkat nyújtani egy adott termékről. Jelenleg csak a környező településeknek a figyelmét tudják felkelteni. A különböző akciók a termékekre nem mindig érte el az embereket, illetve nem tudtak személyre szóló kedvezményeket adni , mert nem tároltak információkat a vevőkről. Az adatok hiányában a bolt nem tudja követni, hogy egy adott termék mennyire népszerű vagy népszerűtle, így nehéz felkészülni egy adott termék készlethiányára.  Papíron nehéz volt nyilvántartani a leltáron milyen készletek állnak rendelkezése, emiatt gyakoriak voltak a késések.

## Vágyálomrendszer leírása
Az oldalra látogatók platformfüggetlen és webböngésző függetlenül látogathatják az oldalt és vásárolhatnak terméket. A látogatók szabadon böngészhetnek az oldalon. A kategória résznél szűkíthető lenne, hogy pontosan mely termékekre kíváncsiak. Az árukról leírást kapnak, illetve megtekinthetik a regisztrál felhasználók által írt véleményeket. A kívánt termékeket bele tudják rakni a kosarukba, amely tételesen információkat nyújt a termékekről és a végösszegről.  A vásárlás eldönthető, hogy előre kifizetik a számlát vagy a termék megérkezésekor kéz pénz vagy bankkártyás fizetéssel egyenlíti a tartozását. Ha a vásárló mindent belerakott, amit szeretett volna, akkor a szállítási adatok megadása után megkezdődik a szállítási folyamat. A regisztrált látogatók előtt új lehetőségek nyílnak meg. Többek között menteni tudják a kosaruk tartalmát, így bármikor keresés nélkül feltudják a mentett termékekkel tölteni a kosarukat. Előre megtudnak adni számlázási címet, illetve bankkártya adatokat, hogy a következő alkalommal pár kattintással is intézni tudják a rendelést. A weboldal segítésével könnyebben nyomon tudnák követni, hogy jelenleg miből mennyi áll rendelkezésre a raktáron. Ez a vásárlók felé is egy információt nyújt, ha például éppen nem elérhető egy adott termék. Mindezek mellett minden vásárlás után a felhasználók GenPontokat kapnak, amiket később beválthatja kedvezményekre egy termék megvásárlásakor. 

## Funkció–követelmény megfeleltetés
ID | Verzió | Követelmény| Funkció
--|------|---|--------
K01|V1.0|Admin adminisztrációja | Admin regisztrálása, törlése és adataik módosítása, amit a rendszergazdák végezhetnek a leírtak szerint.  
K02|V1.0|Product adminisztrációja | Product regisztrálása és törlése, amit a adminok végezhetnek a leírtak szerint.
K03|V1.0|User adminisztrációja | User regisztrálása, törlése és adataik módosítása, amit a rendszer végezhet a leírtak szerint.
K04|V1.0|Felhasználói fiókok kezelése | A felhasználók bejelentkezésének kezelése és a felhasználói adatok módosításának lehetőségének biztosítása. Admin regisztrálása, törlése és adataik módosítása, amit az rendszergazdák végezhetnek a leírtak szerint.  
K05|V1.0|Egyszerűen használható kezelőfelület|A felhasználói felület megvalósítása szabványos html, css és javascript technológiák felhasználásával, a képernyőtervek fejezetben vázol módon. 
K06|V1.0|Online elérhető nyilvános katalógus | A honlapon elérhető és kereshető lesz a termékek katalógusa a látogatók számára bejelentkezés nélkül is.  
K07,K08|V1.0|Platformfüggetlen, robosztus működés és költséghatékony üzemeltetés| Szabványos, elterjedt platform független technológiák használata.
K09|V1.0|Bővíthetőség | Adatbáziskezelő rendszer használata, a tervezésnél figyelembe vesszük a későbbi bővítési igényeket.
K10|V1.0|Rendszer migrálása|A rendszer rövid időn belül bevezethető más webáruházakba is ahol a feladatok ugyanazok.  
