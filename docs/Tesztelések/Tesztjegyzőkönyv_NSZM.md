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

| | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| | A küldés gombra kattintva, az adatokat elküldi az adatbázisba, az oldalon átirányít a loginra. A rendszer küld egy emailt a regisztráció megerősítéséhez. A linkre kattintva a regisztráció sikeresen megtörténik, az adatbázisban frissül az adat. | Megfelelően működik mindaddig, míg a felhasználónév vagy az email cím még nem foglalt. Ilyenkor errort dob ki, azonban ez nem értelmezhető a felhasználó számára. | HIBÁS |