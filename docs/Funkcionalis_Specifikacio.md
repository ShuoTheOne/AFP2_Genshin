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