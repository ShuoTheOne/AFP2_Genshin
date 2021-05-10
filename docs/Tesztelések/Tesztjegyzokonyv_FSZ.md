
| Készítette | Fekte Szabolcs |
| --- | --- |
| Beosztás | Backend fejlesztő – Junior |
| Dátum | 2021.05.10 |
| Projekt | GenShop |
| Vizsgálat eszköze | Google Chrome, IntelliJ IDEA|

**Genshop – Tesztelési jegyzőkönyv**

| # | Funkció leírása | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| 1. | Regisztráció küldés gomb | A beírt adatokat átküldi a backendnek, majd eltárolja az adatbázisban | A beírt adatokat átküldi a backendnek, majd eltárolja az adatbázisban | Megfelelt |
| 2. | Login küldés gomb | A felhasználó bejelentkezésre kattintva egy Coocie jön létre amit a szervertől kapva ezzel jelevény hogy sikeres volt a bejeletkezés | A bejelentkezés után új menü sorok jelentek meg melyeket csak bejelentkezve lehet elérni, és a Cookie is megjelent  | Megfelelt |
| 3. | Login küldés gomb (helytelen adatok esetén) | A felhasználónak hibát dob fel, hogy hibás valamelyik bejelentkezési adat és átirányítja vissza a bejelentkezéshez | Hibás frontend kérés miatt a szerver  RuntimeError-t dob mely nem a responseban érkezik hanem átirányít a localhost:8080/login ahol megjelenik a hiba üzenete: There was an unexpected error (type=Internal Server Error, status=500). | Hibás|
| 4. | Bankkártya hozzáadása felületen keresztül | A beírt adatok a Mentés gombra kattintva átadódnak a backendbe, majd az adatbázisba kerülnek | A beírt adatok a Mentés gombra kattintva átadódnak a backendbe, majd az adatbázisba kerülnek | Megfelelt |
| 5. | Elfelejtett jelszó | Az Email és Felhasználónév megadása után az „Újraküldés&quot; gombra kattintva Emailt küld a rendszer, ahol meg lehet változtatni a jelszót a linkre kattintva | Az Email és Felhasználónév megadása után az „Újraküldés&quot; gombra kattintva Emailt küld a rendszer, viszont nem lehet jelszót változtatni, mivel nem létező oldalra dob át a link. | Hibás |
| 6. | Hírlevél | Feliratkozás gombra kattintva az emailcímet menti melyre később e-maileket fog kapni| A gombra kattintva nem történik semmi | Hibás|
| 7. | Adatmódosítás gomb | A gombra kattintva elküldi a módosítani kívánt adatokat a backendre és az átírja az adatbázisban | A gombra kattintva nem történik semmi | Hibás|

**Backend-Register unit tesztelés**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelősség státusza |
| --- | --- | --- | --- | --- |
| username | Teszt | A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| password| password| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| email| ujpichaccu@gmail.com| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| real_name| Teszt Elek| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| sex| 1 | A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| birthdate| 1996-09-29| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| zip_code| 3445| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| city| Város | A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| street| Uborka| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| house_number| 69| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |
| country| Magyarország| A teszt hiba nélkül lefusson. | A teszt hiba nélkül lefutott. | Megfelelt |

**Frontend-bankkártya hozzáadásának tesztelés**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| Kártyatulajdonos neve | Teszt Elek | Üresen hagyás esetén jelez a rendszer. | Üresen hagyás esetén jelez a rendszer. | Megfelelt |
| Kártyaszám | 12 3456 7890 1234 | Üresen hagyás esetén jelez a rendszer, darabolja 4-esével a beírt számokat, és le ellenőrzi, hogy 16 számjegy van-e beírva | Üresen hagyás esetén jelez a rendszer, darabolja 4-esével a beírt számokat, és le ellenőrzi, hogy 16 számjegy van-e beírva | Megfelelt |
| Hónap | 03 | Hónap gombra kattintva a hónapok kilistázása, majd kiválasztása | Hónap gombra kattintva a hónapok kilistázása, majd kiválasztása | Megfelelt |
| Év | 2020 | Év gombra kattintva az év kilistázása, majd kiválasztása | Év gombra kattintva az év kilistázása, majd kiválasztása | Megfelelt |
| CVV | 666| Üresen hagyás esetén jelez a rendszer. Csak 0 és 999 közötti érték adható meg | Üresen hagyás esetén jelez a rendszer. Csak 0 és 999 közötti érték adható meg | Megfelelt |
| Mentés gomb |<u>Kattintás</u>| Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Mentés gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül | Megfelelt |

**Frontend-keresés és vélemények tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| Keresés gomb | <u>Kattintás</u> | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes rendszerben lévő árut. | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes rendszerben lévő árut. | Megfelelt |
| Keresés gomb | asus| Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes pizzát. | Adatbázis segítségével átirányít egy oldalra, ahol kilistázza az összes pizzát. | Megfelelt |
| „Termékhez&quot; gomb | ASUS Gladius | A gombra kattintva átirányít egy egyedi termék oldalra, ahol kilistázza a termék adatait képpel | A gombra kattintva átirányít egy egyedi termék oldalra, ahol kilistázza a termék adatait képpel | Megfelelt |
| Kosárhoz adás gomb | <u>Kattintás</u> | Kosárhoz adás gombra kattintva elküldi az adatokat az adatbázisba a backenden keresztül, és átirányít a kosárhoz | A gomb csak átirányít a kosárhoz, adatberakás nélkül | Hibás |
| Vélemények kilistázása | <u>Kattintás</u> | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | A termék oldalra lépve kilistázza az eddigi véleményeket az adott termékhez | Megfelelt |
| Vélemény írása | Vajon működik?| A „Küldés&quot; gombra kattintva, az adott termékhez véleményt küld át a rendszernek. | Semmit nem csinál a gomb. | Hibás |

**Frontend-termékek tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| Dropdown menü | Telefon, Tablet, Laptop -> Laptop| A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | Megfelelt |
| Dropdown menü | Számítástechnika -> Gaming | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit, és azon belül egy adott termék csoportra kattintva átirányít egy keresőoldalra | A dropdown menüre húzva az egeret kilistázza a termékek kategóriáit. Azon belül egy adott termék csoportra kattintva viszont nem történik semmi. | Hibás |
| Termék oldal „Termékhez&quot; gombja | ASUS VivoBook 15 M509DA-BR1421 laptop 194900| A gombra kattintáskor átirányít a termék oldalára | A gombra kattintáskor átirányít a termék oldalára | Megfelelt |

**Frontend-login tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| Felhasználónév | asd| A regisztrációhoz hasonló módon le ellenőrzi a rendszer a felhasználónév tulajdonságait | Hibás formátumú adatot is elfogad | Hibás|
| Jelszó | 1234| A regisztrációhoz hasonló módon le ellenőrzi a rendszer a jelszó tulajdonságait | Hibás formátumú adatot is elfogad | Hibás|
| Bejelentkezés gomb | Korrekt felhasználónév és jelszó | Sikeres bejelentkezés esetén cookie segítségével bejelentkezik amit a backend hoz létre | Sikeres bejelentkezés esetén cookie segítségével bejelentkezik amit a backend hoz létre | Megfelelt |
| Bejelentkezés gomb | Hibás felhasználónév vagy jelszó | Login esetén „hibás felhasználónév/jelszó&quot; szöveg kiírása, és visszairányítás a login oldalra | A szerver runtime errora jelenik meg | Hibás|

**Frontend-regisztráció tesztelése**

| Tesztelt input | Tesztadatok | Elvárt eredmény | Aktuális eredmény | Megfelelőség státusza |
| --- | --- | --- | --- | --- |
| Felhasználónév | OJ49QE | 2-nél nagyobb karakterszámű név kell | 2-nél nagyobb karakterszámű név kell | Megfelelt |
| Jelszó | Asdasdasd1 | A jelszónak tartalmaznia kell 8 karaktert, köztük kisbetű-nagybetűt és számot! | A jelszónak tartalmaznia kell 8 karaktert, köztük kisbetű-nagybetűt és számot! | Megfelelt |
| Email | ujpichaccu@gmail.com | Valós email cím ellenőrzése (@ megléte, karakterek hosszúsága, ABC betűi, @ után 2 karakter legalább) | Valós email cím ellenőrzése (@ megléte, karakterek hosszúsága, ABC betűi, @ után 2 karakter legalább) | Megfelelt |
| Teljes név | Fekete Szabolcs | Minimum 5 karakter, ketté tagolva | Minimum 5 karakter, ketté tagolva | Megfelelt |
| Neme | Férfi | Ha nincs kiválasztva semmi, akkor a rendszer jelez. | Ha nincs kiválasztva semmi, akkor a rendszer jelez. | Megfelelt |
| Születési dátum | 1996-09-29| Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Üresen hagyás esetén jelez a rendszer. Későbbi dátum mint az aktuális dátum nem adható meg. Korábbi dátum mint 1900 nem adható meg. | Megfelelt |
| Irányítószám | 3445| Irányítószám csak 4 karakter hosszú lehet 1000 és 9999 között, és csak szám | Irányítószám csak 4 karakter hosszú lehet 1000 és 9999 között, és csak szám | Megfelelt |
| Város | Város| Város legalább 2 karakter hosszú legyen | Város legalább 2 karakter hosszú legyen | Megfelelt |
| Út/utca | Uborka u. | Utca legalább 2 karakter hosszú legyen | Utca legalább 2 karakter hosszú legyen | Megfelelt |
| Házszám | 69 | 1 és 9999 közötti érték, csak szám | 1 és 9999 közötti érték, csak szám | Megfelelt |
| Ország | Magyarország | Legalább 2 karakter hosszú | Legalább 2 karakter hosszú | Megfelelt |
| Regisztrálás | <u>Kattintás</u> | Adatokat átküldi backenden keresztül az adatbázisba és eltárolja őket, majd átirányít a főoldalra | Adatokat átküldi backenden keresztül az adatbázisba és eltárolja őket, majd átirányít a főoldalra | Megfelelt |
| Rendelkezem felhasználóval gomb | <u>Kattintás</u> | Átirányít a login oldalra | Átirányít a login oldalra | Megfelelt |