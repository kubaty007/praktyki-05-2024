## Struktura katalogów

Krótki opis roli poszczególnych katalogów w systemie.

### controller

Katalog zawierający pliki kontrolerów w rozumieniu wzorca MVC. 
Nazwy wszystkich plików w tym katalogu powinny kończyć się sufiksem Controller.php.

### helper

Katalog zawierający pliki z funkcjami pomocniczymi, które przeznaczone są do użytku w całym systemie. Pliki z tego katalogu można załączyć poprzez wywołanie \Load\helper('nazwa-helpera-bez-koncowki-Helper.php').

Nazwy wszystkich plików w tym katalogu powinny kończyć się sufiksem Helper.php.
Każdy plik z tego katalogu powinien należeć do przestrzeni nazw Helper.

### library

Katalog zawierający biblioteki systemowe niezbędne do prawidłowego funkcjonowania systemu, np. routing systemowy.

### model

Katalog zawierający pliki modeli w rozumieniu wzorca MVC, odpowiedzialnych za logikę biznesową systemu.
Nazwy wszystkich plików w tym katalogu powinny kończyć się sufiksem Model.php.

### template

Katalog zawierający szablony HTML poszczególnych sekcji, modułów, etc., przeznaczone do załączania jako części składowe widoków.

### view

Katalog zawierający pliki widoków w rozumieniu wzorca MVC, odpowiedzialnych za prezentację zasobów systemu użytkownikowi.
Nazwy wszystkich plików w tym katalogu powinny kończyć się sufiksem View.php.
