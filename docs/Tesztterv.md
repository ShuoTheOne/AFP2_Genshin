
# GenShop tesztelési terv!

| **Dokumentum címe: (azonosítója)** | MuffinShop tesztterv |
| --- | --- |
| **Minősítés: (állapot)**_(tervezet, jóváhagyott, stb.)_ | tervezet|
| **Verziószám:** | 1.0 |
| **Projekt név:** | GenShop|
| **Készítette:** | Genshin csapata | 
| **Utolsó mentés kelte:** | 2021.02.18. |
| **Dokumentum célja:** | A GenShop tesztelésének bemutatása. |
| **Fájlnév:** | Tesztterv.md |


# Tartalomjegyzék

**1 Bevezetés** 

_1.1_ Tesztelési terv hatóköre, célja 

_1.2_ Elvárások

**2  Szükséges erőforrások** 

2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása) 

2.2 Tesztkörnyezet 

## Dokumentáció

**Változtatások jegyzéke**

| **Verzió** | **Dátum** | **Készítette** | **Megjegyzés** | 
| --- | --- | --- | --- |
| 0.1 | 2021.02.18 | Fekete Szabolcs| Dokumentáció létrehozása |
| 0.2 | 2021.02.18 | Vasas Csaba| Dokumentum hibajavítás, kiegészítés |  
| 1.0 |  | |  |

**A dokumentumot megkapják**

| Név | Funkció |
|--|--|
| Rajna Franciska | Felülvizsgálás és ellenőrzés |
| Soós Gergő | Felülvizsgálás és ellenőrzés |
|  |  |

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
- Proci: Intel(R) Core(TM) i5-5200 CPU @ 2.20GHz
- RAM: 8 GB
- Oprendszer: Windows 10 Pro (64-bit)
- 10Mbps/100Mbps internetkapcsolat
- Böngésző: Google Chrome (88.0.4324.150)

## 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)


**Feladatkörök és felelősségek**

| | | |
|-|-|-|
|**Feladatkör**|  **Felelősség/tevékenység**	|  **Személy/Személyek**	|
| Tesztelő |  A teszt végrehajtása, Észrevételek dokumentálása, Teszt dokumentáció archiválása	|  	|
|Szakértő 	 |  A szakértő az észrevételek elemzi és megoldást javasol.	|  	|
| Teszt koordinátor |  Teszt terv készítése,  A tesztterv jóváhagyatásá a projektmenedzserrel,  Teszt forgatókönyvek létrehozása,  Inkonzisztenciák kezelése,   Helyes és időbeni hibakezelés,   Szükség esetén problémák eszkalálása a projekt menedzsernek,   Végső riport készítése,   Teszt dokumentum archiválása,   Az észrevételek státuszának követése, ill. dokumentálása 	|  	|
|  Projektvezető		|  Teszt terv jóváhagyása, Teszt forgatókönyv (testscript) jóváhagyása	| Rajna Franciska/Soós Gergő 	|

## 2.2 Tesztkörnyezet

Ebben a részben meg kell határozni, hogy a tesztelés milyen környezetben történjen (fejlesztői vagy tesztkörnyezet), a környezetek hogyan érthetőek el, továbbá a tesztelők milyen hozzáféréssel végezzék a tesztelést.

| Környezet neve és feladata | A hozzáférés módja  | Konfiguráció | Kapcsolattartó személyek |
|-|-|-|-|
| Fejlesztői környezet | Dokumentáció | Fentebb említett számítógép konfiguráció | Rajna Franciska/Soós Gergő |

## 4.4 Elfogadási kritériumok

A teszt sikerességének kritériumai:

-   Technikai, a teszt forgatókönyvben leírtak szerint.
    
-   A projekt menedzser jóváhagyása a teszt leszállítandókra.
    

## 4.5 Kockázat kezelés

| Kockázat | Hatás (magas/közepes/alacsony) | Kockázatkezelési mód |
|---|---|---|
| Csapattag megbetegedés  | közepes | Adott feladatok áthárulnak egy másik csapattagra |
| Számítógép meghibásodás | magas  | Erőforrások megosztása a csapattagoknál |
| Adatveszteség  | magas | Folyamatos biztonságimentés, verziókövetés |
| Kiosztott feladat elmulasztása | magas  | Szigorú határidők betartása, folyamatos törekvés hátráltató probléma esetén a mielőbbi megoldást megtalálására. |

# Tesztjegyzőkönyv minta

| **Tesztelési jegyzőkönyv** |
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

# Tesztelési jelentés minta

| **Tesztelési jelentés** |
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