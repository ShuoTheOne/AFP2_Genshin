
| Készítette | Vasas Csaba |
| --- | --- |
| Beosztás | Frontend fejlesztő – Junior |
| Dátum | 2021.05.07 |
| Projekt | GenShop |
| Vizsgálat eszköze | Google Chrome |

**Genshop – Tesztelési jegyzőkönyv**

| # | Funkció leírása | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| 1. | Regisztráció küldés gomb | A beírt adatokat átküldi a backendnek, majd eltárolja az adatbázisban | A beírt adatokat átküldi a backendnek, majd eltárolja az adatbázisban | Megfelelt |
| 2. | Login küldés gomb (helytelen adatok esetén) | A felhasználónak hibát dob fel, hogy hibás valamelyik bejelentkezési adat és átirányítja vissza a bejelentkezéshez | Whitelabel Error Page-t dob (Internal server error, status = 500), nem irányít vissza a bejelentkezésre | HIBÁS |
| 3. | Bankkártya hozzáadása felületen keresztül | A beírt adatok a Mentés gombra kattintva átadódnak a backendbe, majd az adatbázisba kerülnek | A beírt adatok a Mentés gombra kattintva átadódnak a backendbe, majd az adatbázisba kerülnek | Megfelelt |
| 4. | Elfelejtett jelszó | Az Email és Felhasználónév megadása után az „Újraküldés&quot; gombra kattintva Emailt küld a rendszer, ahol meg lehet változtatni a jelszót a linkre kattintva | Az Email és Felhasználónév megadása után az „Újraküldés&quot; gombra kattintva Emailt küld a rendszer, viszont nem lehet jelszót változtatni, mivel nem létező oldalra dob át a link. | HIBÁS |
| 5. | Hírlevél | Feliratkozás gombra kattintva emailt küld a rendszer | Feliratkozás gombra kattintva nem történik semmi | HIBÁS |
| 6. | Adatmódosítás gomb | A gombra kattintva elküldi a módosított adatokat a backendre | A gombra kattintva nem történik semmi | HIBÁS |

**Bankkártya hozzáadásának tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Kártyatulajdonos neve | Szekeres János | Üresen hagyás esetén jelez a rendszer. | Üresen hagyás esetén jelez a rendszer. | Megfelelt |
| Kártyaszám | 1234 5678 9123 4567 | Üresen hagyás esetén jelez a rendszer, darabolja 4-esével a beírt számokat, és leellenőrzi, hogy 16 számjegy van-e beírva | Üresen hagyás esetén jelez a rendszer, darabolja 4-esével a beírt számokat, és leellenőrzi, hogy 16 számjegy van-e beírva | Megfelelt |
| Hónap | 10 | Hónap gombra kattintva a hónapok kilistázása, majd kiválasztása | Hónap gombra kattintva a hónapok kilistázása, majd kiválasztása | Megfelelt |
| Év | 2027 | Év gombra kattintva az év kilistázása, majd kiválasztása | Év gombra kattintva az év kilistázása, majd kiválasztása | Megfelelt |
| CVV | 999 | Üresen hagyás esetén jelez a rendszer. Csak 0 és 999 közötti érték adható meg | Üresen hagyás esetén jelez a rendszer. Csak 0 és 999 közötti érték adható meg | Megfelelt |
| Mentés gomb | - | Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Megfelelt |

**Keresés és vélemények tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Keresés gomb | - | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes rendszerben lévő árut. | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes rendszerben lévő árut. | Megfelelt |
| Keresés gomb | pizza | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes pizzát. | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes pizzát. | Megfelelt |
| „Termékhez&quot; gomb | Nagy Pizza | A gombra kattintva átirányít egy egyedi termék oldalra, ahol kilistázza a termék adatait képpel | A gombra kattintva átirányít egy egyedi termék oldalra, ahol kilistázza a termék adatait képpel | Megfelelt |
| Kosárhoz adás gomb | - | Kosárhoz adás gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül, és átirányít a kosárhoz | A gomb csak átirányít a kosárhoz, adatberakás nélkül | HIBÁS |
| Vélemények kilistázása | - | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | Megfelelt |
| Vélemény írása | asdasd | A „Küldés&quot; gombra kattintva, az adott termékhez véleményt küld át a rendszernek. | Semmit nem csinál a gomb. | HIBÁS |

**Termékek tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Dropdown menü | Telefon, Tablet, Laptop -\&gt; Telefon | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | Megfelelt |
| Dropdown menü | Számítástechnika -\&gt; Gaming | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit. Azon belül egy adott termék csoportra kattintva viszont nem történik semmi. | HIBÁS |
| Termék oldal „Termékhez&quot; gombja | Telefon | A gombra kattintáskor átirányít a termék oldalára | A gombra kattintáskor átirányít a termék oldalára | Megfelelt |

**Login tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Felhasználónév | tekerészet | A regisztrációhoz hasonló módon leellenőrzi a rendszer a felhasználónév tulajdonságait | Akármit be lehet gépelni | HIBÁS |
| Jelszó | propeller | A regisztrációhoz hasonló módon leellenőrzi a rendszer a jelszó tulajdonságait | Akármit be lehet gépelni | HIBÁS |
| Bejelentkezés gomb | Korrekt felhasználónév és jelszó | Sikeres bejelentkezés esetén cookie-t ad át a backendnek, ami lehetővé teszi a bejelentkezést | Sikeres bejelentkezés esetén cookie-t ad át a backendnek, ami lehetővé teszi a bejelentkezést | Megfelelt |
| Bejelentkezés gomb | Hibás felhasználónév vagy jelszó | Login esetén „hibás felhasználónév/jelszó&quot; szöveg kiírása, és visszairányítás a login oldalra | Whitelabel oldalra dob ki, error 500-al | HIBÁS |

**Regisztráció tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| Felhasználónév | Lincoln | 2-nél nagyobb karakterszámű név kell | 2-nél nagyobb karakterszámű név kell | Megfelelt |
| Jelszó | pewdiepie | A jelszónak tartalmaznia kell 8 karaktert, köztük kisbetű-nagybetűt és számot! | A jelszónak tartalmaznia kell 8 karaktert, köztük kisbetű-nagybetűt és számot! | Megfelelt |
| Email | [lincoln@gmail.com](mailto:lincoln@gmail.com) | Valós email cím ellenőrzése (@ megléte, karakterek hosszúsága, ABC betűi, @ után 2 karakter legalább) | Valós email cím ellenőrzése (@ megléte, karakterek hosszúsága, ABC betűi, @ után 2 karakter legalább) | Megfelelt |
| Teljes név | Abraham Lincoln | Minimum 5 karakter, ketté tagolva | Minimum 5 karakter, ketté tagolva | Megfelelt |
| Neme | Férfi | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | Megfelelt |
| Születési dátum | 1999/10/05 | Nem lehet jövőbeli dátumot megadni | Nem lehet jövőbeli dátumot megadni | Megfelelt |
| Irányítószám | 4455 | Irányítószám csak 4 karakter hosszú lehet 1000 és 9999 között, és csak szám | Irányítószám csak 4 karakter hosszú lehet 1000 és 9999 között, és csak szám | Megfelelt |
| Város | Winstolm | Város legalább 2 karakter hosszú legyen | Város legalább 2 karakter hosszú legyen | Megfelelt |
| Út/utca | Strasse Street | Utca legalább 2 karakter hosszú legyen | Utca legalább 2 karakter hosszú legyen | Megfelelt |
| Házszám | 88 | Maximum 4 karakter hosszú, 1 és 9999 közötti érték, csak szám | 4 karakter hosszú, 1 és 9999 közötti érték, csak szám | Megfelelt |
| Ország | Anglia | Legalább 2 karakter hosszú | Legalább 2 karakter hosszú | Megfelelt |
| Regisztrálás | - | Adatokat átküldi backenden keresztül az adatbázisba és eltárolja őket, majd átirányít a főoldalra | Adatokat átküldi backenden keresztül az adatbázisba és eltárolja őket, majd átirányít a főoldalra | Megfelelt |
| Rendelkezem felhasználóval gomb | - | Átirányít a login oldalra | Átirányít a login oldalra | Megfelelt |