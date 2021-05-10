| Készítette | Nagy Szabolcs Máté |
| --- | --- |
| Beosztás | Frontend fejlesztő – Junior |
| Dátum | 2021.05.05 |
| Projekt | Genshop |
| Vizsgálat eszköze | Opera GX |

**Genshop – Tesztelési jegyzőkönyv**

| # | Funkció leírása | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| 1. | Navigációk megfelelő megjelenése be nem jelentkezett felhasználó esetén | Még be nem jelentkezett felhasználó az alábbiakat látja a navigációs sávon: főoldal, ajánlatok, hírlevél, termékek | Még be nem jelentkezett felhasználó az alábbiakat látja a navigációs sávon: főoldal, ajánlatok, hírlevél, termékek | Megfelelt |
| 2. | Felhasználói profilkép átirányítása | Ha a felhasználó nincs bejelentkezve, a profilkép alapértelmezett, rákattintva a bejelentkezés oldalra irányít | Ha a felhasználó nincs bejelentkezve, a profilkép alapértelmezett, rákattintva a bejelentkezés oldalra irányít | Megfelelt |
| 3. | Navigációk megfelelő megjelenítése bejelentkezett felhasználó esetén | A bejelentkezett felhasználó számára az alábbiaknak kell megjelennie: főoldal,profil, bankkártya hozzáadás, ajánlatok, hírlevél, kijelentkezés | A bejelentkezett felhasználó számára az alábbiaknak jelenik meg: főoldal, profil, bankkártya hozzáadás, ajánlatok, hírlevél, kijelentkezés | Megfelelt |
| 4. | Navigációs gombok, jó oldalakra visznek mind be és kijelentkezett felhasználó esetén. | A navígációs gombok a megfelelő helyekre irányítanak át. | A navígációs gombok a megfelelő helyekre irányítanak át, kivéve a kijelentkezés esetén. Ekkor errorokat dob és nem jelentkezik ki. | HIBÁS |

**Regisztráció tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Felhasználónév | mikimi, Genshop2021 | Üresen hagyás esetén jelez a rendszer. | Üresen hagyás esetén jelez a rendszer. | Megfelelt |
| Jelszó | mikimi, Genshop2021 | Üresen hagyás esetén jelez a rendszer. Minimum 8 karakteres kell legyen, és tartalmazni kell nagybetűt és számot is. Ha kevés vagy hibás az adat akkor jelez a rendszer. | Üresen hagyás esetén jelez a rendszer. Minimum 8 karakteres kell legyen, és tartalmazni kell nagybetűt és számot is. Ha kevés vagy hibás az adat akkor jelez a rendszer. | Megfelelt |
| E-mail | [valami@gmail.com](mailto:valami@gmail.com)valami, valami@, valami@gmail, valami@gmail.c | Üresen hagyás esetén jelez a rendszer. 4-es tagolás: név + @ + oldal neve + domain cím. Ha ezek egyike is hiányzik, akkor azt a rendszer jelzi. | Üresen hagyás esetén jelez a rendszer. 4-es tagolás: név + @ + oldal neve + domain cím. Ha ezek egyike is hiányzik, akkor azt a rendszer jelzi. | Megfelelt |
| Teljes név | Valaki Valami,Va, Va V | Üresen hagyás esetén jelez a rendszer. Legalább 4 karakter hosszúnak kell lennie, és a formátumnak megkell felelnie (egy teljes név legalább 2 részből áll) | Üresen hagyás esetén jelez a rendszer. Legalább 4 karakter hosszúnak kell lennie, és a formátumnak megkell felelnie (egy teljes név legalább 2 részből áll) | Megfelelt |
| Neme | Férfi | Ha nincs kiválasztva semmi, akkor a rendszer jelez. | Ha nincs kiválasztva semmi, akkor a rendszer jelez. | Megfelelt |
| Születési dátuma | 2012.12.31 | Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Megfelelt |
| Irányítószám | 2345, 234 | Üresen hagyás esetén jelez a rendszer. Legalább 1000-től nagyobb de 9999-től kisebb értékű kell egyen. Szöveg nem írható. | Üresen hagyás esetén jelez a rendszer. Legalább 1000-től nagyobb de 9999-től kisebb értékű kell egyen. Szöveg nem írható. | Megfelelt |
| Város | Eger | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Megfelelt |
| Út/utca | Lehel út | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Megfelelt |
| Házszám | 9 | Üresen hagyás esetén jelez a rendszer. Csak szám input, szöveg nem írható | Üresen hagyás esetén jelez a rendszer. Csak szám input, szöveg nem írható | Megfelelt |
| Ország | Magyarország | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Üresen hagyás esetén jelez a rendszer.Csak szöveges input, szám nem írható | Megfelelt |
| Regisztrálás gomb | - | A küldés gombra kattintva, az adatokat elküldi az adatbázisba, az oldalon átirányít a loginra. A rendszer küld egy emailt a regisztráció megerősítéséhez. A linkre kattintva a regisztráció sikeresen megtörténik, az adatbázisban frissül az adat. | Megfelelően működik mindaddig, míg a felhasználónév vagy az email cím még nem foglalt. Ilyenkor errort dob ki, azonban ez nem értelmezhető a felhasználó számára. | HIBÁS |

** Bankkártya hozzáadás **
| # | Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- | --- |
| 1. | Kártyatulajdonos neve | Hajdu Anna | Üresen hagyása esetén a rendszer jelez | Üresen hagyása esetén a rendszer jelez | Megfelelt |
| 2. | Kártyaszám | 1234 5678 9123 0000 | Üresen hagyása esetén a rendszer jelez. 16 számjegyet kell tartalmazni a beírt számsornak. Betűket nem lehet megadni. | Üresen hagyása esetén a rendszer jelez. 16 számjegyet kell tartalmazni a beírt számsornak. Betűket nem lehet megadni. | Megfelelt |
| 3. | Hónap | 12 | A menü lenyitható és kiválasztható a hónap. Nem választás esetén jelez a rendszer. | A menü lenyitható és kiválasztható a dátum. Nem választás esetén jelez a rendszer. | Megfelelt |
| 4. | Év | 2025 | A menü lenyitható és kiválasztható az év. Nem választás esetén jelez a rendszer. | Megfelelt |
| 5. | CVV | 258 | A cvv kód 3 számjegyből kell álnia.| A cvv kód 3 számjegyből áll és jelez a rendszer, ha kevesebb | Megfelelt |
| 6. | Mentés gomb | - | A küldés gombra az adatok mentésre kerülnek az adatbázisban | A küldés gombra az adatok mentésre kerülnek az adatbázisban | Megfellet |

**Keresés - (Nem központi adatbázis alapján)**

| # | Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- | --- |
| 1. | Keresés input box | - | A keresés gombra kattintva, kilistázásra kerülnek a termékek az adataikkal. A kép róluk megjelenik, megfelelő méretekben. Ha nincs kép a termékről akkor megfelelő méretben egy "nincs kép" jelenik meg. | Az adatok megfelelően jelennek meg, megfelelő képekkel. Azonban ha nincs kép megadva a termékhez, akkor elcsúszik a kinézete, és nem jelenik meg egy "nincs kép" a kép helyére. | HIBÁS |
| 2. | Keresés input box | sajt, tok | A "sajt"/"tok" szó beütése a keresés mezőbe, majd a keresés gombra kattintva, a sajt/"tok" nevű termékek kerülnek megjelenítésre.  |  A "sajt"/"tok" szó beütése a keresés mezőbe, majd a keresés gombra kattintva, a sajt/"tok" nevű termékek kerülnek megjelenítésre.  | Megfelelt |
| 3. | Keresés input box | Sándor, kocsi | Ha bármilyen szó megadásra kerül, amely az adatbázisban nem létezik, nincs rá keresési találat, akkor egy "nincs találat" kerül kiírása az adott keresési szóval. | Ha bármilyen szó megadásra kerül, amely az adatbázisban nem létezik, nincs rá keresési találat, akkor egy "nincs találat" kerül kiírása az adott keresési szóval. | Megfelelt |
| 4. | Keresés input box | - | Navigációs sávon lévő termékeknél, a kiválasztott termékre kattintva az adott szóval indul egy keresés és az eredmény megjelenítésre kerül. Például.: "telefon"-ra kattintva a telefonok jelennek meg.  | Navigációs sávon lévő termékeknél, a kiválasztott termékre kattintva az adott szóval indul egy keresés és az eredmény megjelenítésre kerül. Például.: "telefon"-ra kattintva a telefonok jelennek meg. | Megfelelt |
