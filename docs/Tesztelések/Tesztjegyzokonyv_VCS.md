
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
| Év | 2027 | Év gombra kattintva a hónapok kilistázása, majd kiválasztása | Év gombra kattintva a hónapok kilistázása, majd kiválasztása | Megfelelt |
| CVV | 999 | Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Megfelelt |
| Mentés gomb | - | Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Megfelelt |
-- --
| | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| | Teszt sikeressége | Sikeres Teszt | Megfelelt |