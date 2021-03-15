
# GenShop tesztelési terv!

| **Dokumentum címe: (azonosítója)** | GenShop tesztterv |
| --- | --- |
| **Minősítés: (állapot)**_(tervezet, jóváhagyott, stb.)_ | tervezet|
| **Verziószám:** | 1.0 |
| **Projekt név:** | GenShop|
| **Készítette:** | Genshin csapata | 
| **Utolsó mentés kelte:** | 2021.03.11. |
| **Dokumentum célja:** | A GenShop tesztelésének bemutatása. |
| **Fájlnév:** | Tesztterv.md |


# Tartalomjegyzék

**1 Bevezetés** 

_1.1_ Tesztelési terv hatóköre, célja 

_1.2_ Elvárások

**2  Szükséges erőforrások** 

2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása) 

2.2 Tesztkörnyezet 

2.3 Tesztadatok

2.4 Leszállítandó teszt dokumentumok

2.5 Tesztelési eszközök

**3 Tesztelési terv**
3.1 Fejlesztői teszt

3.2	Integrációs teszt

3.3	Elfogadási teszt

3.4	Terheléses teszt

3.5	Biztonsági teszt

3.6	Tesztelési feladatok, teszt-esetek leírása

3.7	Teszt forgatókönyv

**4 Tesztelési jegyzőkönyv és tesztelési jelentés**


4.1 Tesztelési jegyzőkönyv

4.2 Tesztelési jelentése

4.3 Tesztelési elvárások

4.4 Elfogadási kritériumok

4.5 Kockázatkezelés

4.6 Tesztjegyzőkönyv minta

4.7 Tesztelési jegyzőkönyv minta

## Dokumentáció

**Változtatások jegyzéke**

| **Verzió** | **Dátum** | **Készítette** | **Megjegyzés** | 
| --- | --- | --- | --- |
| 0.1 | 2021.02.18 | Fekete Szabolcs| Dokumentáció létrehozása |
| 0.2 | 2021.02.18 | Vasas Csaba| Dokumentum hibajavítás, kiegészítés | 
| 0.5 | 2021.02.18 | Nagy Szabolcs Máté | Bővítés: tesztelési terv | 
| 0.6 | 2021.02.19 | Vasas Csaba | Helyesírási hibák, struktúrajavítás | 
| 0.7 | 2021.02.20 | Bódi Cintia Maja | Bővítés: Dokumentumok, eszközök, adatok, tesztelési jegyzőkönyv és jelentés |
| 1.0 | 2021.03.11 | Vasas Csaba | Helyesírási hibák javítása, struktúrajavítás, tartalomjegyzék bővítés | 
| 1.1 |  | |  |

**A dokumentumot megkapják**

| Név | Funkció |
|--|--|
| Rajna Franciska | Felülvizsgálás és ellenőrzés |
| Soós Gergő | Felülvizsgálás és ellenőrzés |


# 1. Bevezetés

A fejlesztőcsapat célja, hogy a produktum kikerülése előtt lehető legnagyobb mértékű tesztelésen essen át a szoftver. Ezzel rengeteg problémát megelőzve, és a hibajavítások elvégzése után egy megbízható szoftvert adhatunk át a megrendelőnek.

A tesztelés teljeskörű, mind UI (user interface) mind szerveroldal részéről igyekszünk minden tesztesetet megnézni.

A UI tesztelése során fontos, hogy nagyjából minden felbontáson használható legyen a program, és ugyanolyan könnyen kezelhető legyen akár telefonról vagy tabletről a weboldal, mint egy asztali számítógép vagy laptopról.

A Backend tesztelése azért is tartozik a legfontosabb és legnehezebb feladatok közé, ugyanis a lehető legtöbb hibát itt lehet elkövetni.

## 1.1 Tesztelési terv hatóköre, célja

A tesztelési terv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával.

A teszt végrehajtásáért a projekt menedzser felel Soós Gergő és Rajna Franciska, és a teszt/fejlesztőcsapat hajtja végre a 2.1. fejezetben meghatározott módon.

 
## 1.2 Elvárások

Az alábbi alap elvárások képezik ennek a teszttervnek az alapját:

- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert.
- A Genshin szervezeti egység/projektcsapat felelős a tesztadatok előállításáért.
- A tesztprogram az ebben a dokumentumban meghatározott tesztterv alapján fut.


# 2. Szükséges erőforrások

A teszteléshez szükség van egy olyan eszközre mely az internethez  van csatlakozva.
A csapatunk által használt erőforrások:
- Processzor: Intel(R) Core(TM) i5-5200 CPU @ 2.20GHz
- RAM: 8 GB
- Operációs rendszer: Windows 10 Pro (64-bit)
- 10Mbps/100Mbps internetkapcsolat
- Böngésző: Google Chrome (88.0.4324.150)

## 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)


**Feladatkörök és felelősségek**

|**Feladatkör**|  **Felelősség/tevékenység**	|  **Személy/Személyek**	|
| --- | --- | --- |
| Tesztelő |  A teszt végrehajtása, Észrevételek dokumentálása, Teszt dokumentáció archiválása	|  	|
|Szakértő 	 |  A szakértő az észrevételek elemzi és megoldást javasol.	|  	|
| Teszt koordinátor |  Teszt terv készítése,  A tesztterv jóváhagyatása a projektmenedzserrel,  Teszt forgatókönyvek létrehozása,  Inkonzisztenciák kezelése,   Helyes és időbeni hibakezelés,   Szükség esetén problémák eszkalálása a projekt menedzsernek,   Végső riport készítése,   Teszt dokumentum archiválása,   Az észrevételek státuszának követése, ill. dokumentálása 	|  	|
|  Projektvezető		|  Teszt terv jóváhagyása, Teszt forgatókönyv (testscript) jóváhagyása	| Rajna Franciska/Soós Gergő 	|

## 2.2 Tesztkörnyezet

Ebben a részben meg kell határozni, hogy a tesztelés milyen környezetben történjen (fejlesztői vagy tesztkörnyezet), a környezetek hogyan érthetőek el, továbbá a tesztelők milyen hozzáféréssel végezzék a tesztelést.

| Környezet neve és feladata | A hozzáférés módja  | Konfiguráció | Kapcsolattartó személyek |
|-|-|-|-|
| Fejlesztői környezet | Dokumentáció | Fentebb említett számítógép konfiguráció | Rajna Franciska/Soós Gergő |

## 2.3 Tesztadatok
A teszt végrehajtásához szükséges rekordok (tesztadatok) száma: 3
A tesztadatok elkészítéséért és feltöltéséért felelős személy(ek): Rajna Franciska / Soós Gergő

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:
- Az alapadatok értékkészlete az éles rendszerrel megegyező kell, hogy legyen.

## 2.4 Leszállítandó teszt dokumentumok

| **Cím** | **Felelős személy** | **Szállítás gyakorisága** | **Szállítás módja** |
| --- | --- | --- | --- |
| Tesztterv | Rajna Franciska / Soós Gergő | heti 1x | online feltöltés |
| Teszt-esetek | Genshin csapata | heti 2x | online feltöltés |
| Tesztjegyőkönyvek | Genshin csapata | heti 2x | online feltöltés |
| Tesztelési jelentés | Genshin csapata | heti 2x | online feltöltés |

## 2.5 Tesztelési eszközök
- Böngésző beépíített segédeszközei
- Weboldal validator

# 3 Tesztelési terv
A frontend teszteléséhez a böngészőkbe beépített segédeszközökkel kerülnek tesztelésre. Előre beállítható képernyő méretekkel ellenőrizzük, hogy a méretek jól beállítottak a különböző képernyőkhöz. A teszt akkor sikeres, ha a főbb funkciók jól olvashatók és alkalmazhatók.
A backend tesztelése minta input-okkal történik. A beviteli mezőkbe elsősorban a kívánt intervallumok és értékek kerülnek tesztelésre, majd ezután véletlenszerű értékekkel is ellenőrzés alá esnek. A teszt abban az esetben sikeres, ha a kívánt értékek elfogadásra kerülnek, a hibás értékekre a rendszer hibaüzenetet küld a felhasználó számára ami számára is információval szolgál.
Azért, hogy hibás adat ne kerülhessen az adatbázisba, illetve illetéktelen személyen ne jussanak információkhoz a felhasználókról, ezért több figyelmet fordítunk ezen részek tesztelésére.

## 3.1 Fejlesztői teszt
Tervezés és fejlesztés során ügyelünk arra, hogy lehetőleg minden hibát kiküszöböljünk, de természetesen előfordulhatnak problémák, amikre nem gondoltunk. Ennek megelőzése képen, amikor egy modul elkészülésével megkezdjük a tesztelését.

## 3.2 Integrációs teszt
A szoftver nem használ külső rendszert, sem API ,se egyéb módon, viszont az oldal által használt adatbázist többféle szerveren és adatbázis motor alatt tesztelésre kerülnek, hogy egy verzióváltás / platformváltás esetén se történhessen nagyobb kimaradás.

## 3.3 Elfogadási teszt
A megrendelőnek számára átadásra kerül egy példány a weboldalról, aki egy hozzáértő személy segítségével, vagy általa kiválasztott felhasználókkal teszteli. Ha a megrendelő hibát tapasztal, azt a lehető leghamarabb jelezze a fejlesztő csapat felé, hogy a hiba minél előbb javításra kerüljön. Ha a megrendelő számára megfelel a szoftver, úgy elfogadásra kerül a teszt és megkezdődik az éles tesztelés.

## 3.4 Terheléses teszt
Az elfogadási teszt jóváhagyását követően, a termék kiadása előtt, terhelés alá kell vetni a szoftvert. A tesztelés történhet valódi felhasználók bevonásával vagy script segítségével, mely több felhasználót kezel egyszerre és mindegyikkel az összes funkciót egy időben teszteli. A teszt során a szerver monitorozásra kerül. A teszt végeztével kiértékelésre kerül sor. Ha az előre megszabott határértékeket tapasztaljuk, a terhelési teszt sikerrel zárul. Ha nem, a megrendelővel és csapattal kommunikációt kell folytatni a probléma kiküszöbölésére.

## 3.5 Biztonsági teszt
Az oldalon történő regisztráció során a felhasználói adatok mentésre kerülnek. Hogy ezek ne kerülhessenek rossz kézbe, alapos tesztelésre van szükség. Akkor tekinthető sikeresnek a teszt, ha illetéktelen személy nem juthat információhoz. Ha mégis sikerül bejelentkeznie, nyomon követhető az illető és a felhasználó erről értesítést kap.

## 3.6 Tesztelési feladatok, teszt-esetek leírása
A tesztelési feladat a következő teszt-eseteket foglalja magába:
	- Frontend teszt (UI)
	- Backend teszt (programlogika)

## 3.7 Teszt forgatókönyv
A teszt elvégzésének meghatározott sorrendjét és függőségeit teszt forgatókönyvben kell rögzíteni. A teszt forgatókönyv elkészítése során ügyelni kell a párhuzamosan elvégezhető tevékenységek lehetőség szerinti kihasználásra, az tesztelési idő csökkentésének érdekében. 

# 4 Tesztelési jegyzőkönyv és tesztelési jelentés

## 4.1 Tesztelési jegyzőkönyv
- A tesztelők a tesztforgatókönyvnek megfelelően elvégzik a tesztelést és az eredményt tesztjegyzőkönyvekben dokumentálják.
- A teszt kimenetelét minden esetben jelenteni kell a tesztkoordinátornak.
- A tesztkoordinátor a csapattal együtt megoldást keres a problémákra, ezután frissíti a tesztforgatókönyvet.
- Ha a problémát megoldották, a tesztelő újrakezdheti a tesztelést, majd dokumentálja az eredményeket.
- Ha a hiba továbbra is fennáll, és harmadik félen múlik a megoldása eszkalálni kell a problémát a projekt menedzsernek.

## 4.2 Tesztelési jelentés
A tesztelési jelentést a tesztkoordinátor készíti el. Ez egy részletes áttekintése a lefutott teszteknek, azok eredményeinek, státuszának és a megjegyzéseknek.
A tesztkoordinátornak ezután el kell juttatnia a projektmenedzsernek a tesztelési jelentést. 

## 4.3 Tesztelt elvárások

Az alábbi funkcionális elvárások szerepelnek az üzleti, illetve fejlesztői specifikációban, amelyek tesztelésre is kerültek: 

| **#** | **Leírás**|
| --- | --- |
| 1. |  |
| 2. |  |
| 3. |  |
| 4. |  |
| 5. |  |
| 6. |  |

Az alábbi nem-funkcionális elvárások szerepelnek az üzleti, illetve fejlesztői specifikációban, amelyek tesztelésre is kerültek: 

| **#** | **Leírás**|
| --- | --- |
| 1. |  |
| 2. |  |
| 3. |  |
| 4. |  |
| 5. |  |
| 6. |  |

Az alábbi elvárások szerepelnek az üzleti, illetve fejlesztői specifikációban, amelyek nem kerültek tesztelésre: 

| **#** | **Leírás**|
| --- | --- |
| 1. |  |
| 2. |  |
| 3. |  |

## 4.4 Elfogadási kritériumok

A teszt sikerességének kritériumai:

-   Technikai, a teszt forgatókönyvben leírtak szerint.
    
-   A projekt menedzser jóváhagyása a teszt leszállítandókra.

## 4.5 Kockázatkezelés

| Kockázat | Hatás (magas/közepes/alacsony) | Kockázatkezelési mód |
|---|---|---|
| Csapattag megbetegedés  | közepes | Adott feladatok áthárulnak egy másik csapattagra |
| Számítógép meghibásodás | magas  | Erőforrások megosztása a csapattagoknál |
| Adatveszteség  | magas | Folyamatos biztonsági mentés, verziókövetés |
| Kiosztott feladat elmulasztása | magas  | Szigorú határidők betartása, folyamatos törekvés hátráltató probléma esetén a mielőbbi megoldást megtalálására. |

## 4.6 Tesztjegyzőkönyv minta

| **Tesztelési jegyzőkönyv** | |
|---|---|
| A teszt-eset leírás és célja: | |
| A tesztelt folyamat/funkció leírása: | |
| A tesztelés előfeltételei: | | 
| A tesztelés dátuma és időpontja: | |
| A tesztadatok típusa: | |
| A tesztet végző személy(ek): | |
|  A tesztelt rendszer beállításai: | |
| A teszt-eset elvárt eredménye: | |
|  A tesztelés eredménye: | |
|  Megjegyzések: |  |

| **Tesztelést elvégezte** | |
|--|--|
| Név: | |
| Szervezeti egység/ beosztás: | |
| Aláírás: | |
| Dátum: | |

**Jóváhagyások:**

| **Jóváhagyó** | |
|--|--|
| Név: | |
| Szervezeti egység/ beosztás: | |
| Aláírás: | |
| Dátum: | |

## 4.7 Tesztelési jelentés minta

| **Tesztelési jelentés** | |
|---|---|
| A hivatkozott tesztjegyzőkönyvek rövid leírása és eredménye: | |
| A tesztelt folyamatok/funkciók/modulok leírása: | |
| A tesztadatok típusa: | | 
| A tesztelt rendszer beállításai: | |
| A tesztelések eredménye: | ||
|  Megjegyzések: |  |

| **Tesztelést elvégezte** | |
|--|--|
| Név: | |
| Szervezeti egység/ beosztás: | |
| Aláírás: | |
| Dátum: | |


**Jóváhagyások:**

| **Jóváhagyó** | |
|--|--|
| Név: | |
| Szervezeti egység/ beosztás: | |
| Aláírás: | |
| Dátum: | |
