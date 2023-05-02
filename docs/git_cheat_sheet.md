# Git cheat-sheet

## Co to jest git?
Git to system kontroli wersji. Służy on do zarządzania historią kodu źródłowego.
- pozwala na jednoczesną pracę na tym samym kodzie przez kilka osób,
- umożliwia transferowanie i łączenie zmian z różnych branchy w jednym projekcie,
- pozwala na pracę offline we własnym repozytorium,
- jest szybki i wydajny

## Podstawowe pojęcia:
- repozytorium (tzw. repo) – miejsce przechowywania całego projektu, wszystkich wersji kodu i historii wprowadzonych zmian
- branch (gałąź) – jest to oddzielna gałąź, na której znajduje się kod. Na nowym branchu znajduje się oddzielny katalog roboczy, oddzielny staging area oraz całkiem inna historia projektu. Przy tworzeniu nowego repozytorium zawsze automatycznie jest tworzony branch o nazwie master. Przeważnie (zależy od ustaleń w zespole) przy naprawianiu bugów lub tworzeniu nowych funkcjonalności nowy piszemy na oddzielnym branchu. W ten sposób nie mieszamy commitów nieskończonej funkcjonalności z kodem działającym na produkcji. Po skończonej pracy scalamy nasz branch z branchem głównym.
- clone – utworzenie lokalnego repozytorium, które jest identyczną kopią tego, które jest klonowane
- commit – ostateczne zatwierdzenie wprowadzonych zmian oraz utworzenie 'punktu kontrolnego' w historii kodu
- merge – łączy zmiany wprowadzone w poszczególnych branchach

## Polecenia
| Polecenie                                                                    | Do czego służy                                                                                                                           | Przykład użycia                                                            |
|------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------|
| git config --global user.name “imię nazwisko”                                | ustawienie nazwy użytkownika która będzie wyświetlana przy sprawdzaniu historii kodu                                                     | `git config --global user.name "Kuba Grabowski"`                           |
| git config --global user.email “email@exaple.com”                            | ustawianie adresu email który będzie wyświetlany przy sprawdzaniu historii kodu                                                          | `git config --global user.email "kuba.grabowski@example.com"`              |
| git init                                                                     | zainicjowanie istniejącego katalogu jako repozytorium Git                                                                                | `git init`                                                                 |
| git clone                                                                    | pobranie całego repozytorium z hostowanej lokalizacji poprzez URL                                                                        | `git clone https://github.com/kubaty007/praktyki-05-2023.git`              |
| git pull                                                                     | pobierz wszystkie commity ze zdalnego repozytorium (github,gitlab itp.) których nie ma lokalnie na twojej gałęzi                         | `git pull`                                                                 |
| git status                                                                   | pokaż zmodyfikowane pliki w katalogu roboczym, dodane do następnego commit'a oraz gałąź na której aktualnie się znajdujesz               | `git status`                                                               |
| git add (plik)                                                               | dodaj plik (w takim stanie jakim jest teraz) do swojego następnego commit'a (stage)                                                      | `git add index.php`, `git add .`                                           |
| git reset (plik)                                                             | dodaj plik (w takim stanie jakim jest teraz) do swojego następnego commit'a (unstage)                                                    | `git reset index.php`, `git reset .`                                       |
| git commit -m "#(numer issue) - (opis tego co zostało zmienione w commicie)" | stwórz commit'a ze zmianami które są dodane do następnego commit'a                                                                       | `git commit -m "#82 - dodanie opcji eksportu produktów do pliku csv"`      |
| git push                                                                     | wyślij wszystkie lokalne commity, które jeszcze nie zostały wysłane do zdalnego repozytorium na gałąź na której aktualnie się znajdujesz | `git push`                                                                 |
| git branch                                                                   | wyświetl listę wszystkich gałęzi oraz oznacz gałąź na której aktualnie się znajduję gwiazdką (*)                                         | `git branch`                                                               |
| git branch (nazwa gałęzi)                                                    | stwórz nową gałąź, która jest kopią gałęzi na której aktualnie się znajdujesz                                                            | `git branch wyszukiwarka_produktów`                                        |
| git checkout (nazwa gałęzi)                                                  | przejdź na inną gałąź                                                                                                                    | `git checkout wyszukiwarka_produktów`                                      |
| git merge (nazwa gałęzi)                                                     | skopiuj commity z określonej gałęzi na aktualną gałąź                                                                                    | `git merge develop`                                                        |
| git remote add (alias) (url)                                                 | dodaj alias do zdalnego repozytorium do którego podamy odpowiedni link                                                                   | `git remote add origin https://github.com/kubaty007/praktyki-05-2023.git`  |
| git stash                                                                    | utwórz 'tymczasowego commita' z którego zmiany możesz potem przywrócić                                                                   | `git stash`                                                                |
| git stash list                                                               | wyświetl listę 'tymczasowych commitów'                                                                                                   | `git stash list`                                                           |
| git stash apply                                                              | przywróć zmiany z 'tymczasowego commita'                                                                                                 | `git stash apply`                                                          |
