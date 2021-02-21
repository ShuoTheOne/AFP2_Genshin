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

![usecase_dia](https://github.com/ShuoTheOne/AFP2_Genshin/blob/main/docs/imgs/usecase.png)

## Jelenlegi helyzet leírás
Jelenleg a vevőnek a boltba kell jönni személyesen vagy telefonon kell intéznie a megrendelését, azonban ez gyakran félreértések és hibákat eredményez. Ahhoz, hogy a bolt feltudja venni a versenyt a többi boltokkal szemben, szükségük van egy felületre amely könnyen elérhető bárki számára. Egy webes felülettel már nem szükséges többé a személyes találkozásokra, illetve könnyebb a vevőknek pontos információkat nyújtani egy adott termékről. Jelenleg csak a környező településeknek a figyelmét tudják felkelteni. A különböző akciók a termékekre nem mindig érte el az embereket, illetve nem tudtak személyre szóló kedvezményeket adni , mert nem tároltak információkat a vevőkről. Az adatok hiányában a bolt nem tudja követni, hogy egy adott termék mennyire népszerű vagy népszerűtle, így nehéz felkészülni egy adott termék készlethiányára.  Papíron nehéz volt nyilvántartani a leltáron milyen készletek állnak rendelkezése, emiatt gyakoriak voltak a késések.

## Vágyálomrendszer leírása
Az oldalra látogatók platformfüggetlen és webböngésző függetlenül látogathatják az oldalt és vásárolhatnak terméket. A látogatók szabadon böngészhetnek az oldalon. A kategória résznél szűkíthető lenne, hogy pontosan mely termékekre kíváncsiak. Az árukról leírást kapnak, illetve megtekinthetik a regisztrál felhasználók által írt véleményeket. A kívánt termékeket bele tudják rakni a kosarukba, amely tételesen információkat nyújt a termékekről és a végösszegről.  A vásárlás eldönthető, hogy előre kifizetik a számlát vagy a termék megérkezésekor kéz pénz vagy bankkártyás fizetéssel egyenlíti a tartozását. Ha a vásárló mindent belerakott, amit szeretett volna, akkor a szállítási adatok megadása után megkezdődik a szállítási folyamat. A regisztrált látogatók előtt új lehetőségek nyílnak meg. Többek között menteni tudják a kosaruk tartalmát, így bármikor keresés nélkül feltudják a mentett termékekkel tölteni a kosarukat. Előre megtudnak adni számlázási címet, illetve bankkártya adatokat, hogy a következő alkalommal pár kattintással is intézni tudják a rendelést. A weboldal segítésével könnyebben nyomon tudnák követni, hogy jelenleg miből mennyi áll rendelkezésre a raktáron. Ez a vásárlók felé is egy információt nyújt, ha például éppen nem elérhető egy adott termék. Mindezek mellett minden vásárlás után a felhasználók GenPontokat kapnak, amiket később beválthatja kedvezményekre egy termék megvásárlásakor. 