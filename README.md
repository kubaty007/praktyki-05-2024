
# 1. Wymagania funkcjonalne

Sklep internetowy w standardzie RWD (Responsive Web Design) w podejściu Mobile First z funkcją rejestracji konta i możliwością zalogowania się. Na ten moment nie implementujemy samych funkcji zakupowych. Oferta produktowa powinna być prezentowana w oparciu o minimum dwupoziomową kategoryzację.

Projekt graficzny: 
https://xd.adobe.com/view/78db40f1-fe66-4e89-bc40-17146c585105-2d88/

Poniżej szczegółowa specyfikacja poszczególnych modułów.

## 1.1. Top

### 1.1.1. Ogólne

- [ ] Logo i ikonki są stałym elementem layoutu (nie pobieramy z bazy)
- [ ] Kliknięcie ikonki 'moje konto' przenosi do widoku logowanie/rejestracja. Po zalogowaniu kliknięcie ikonki 'moje konto' przenosi do widoku, w którym dostępny jest przycisk 'Wyloguj'

### 1.1.2. Menu kategorii

- [ ] Wszystkie informacje na temat kategorii powinny być pobierane z bazy danych

## 1.2. Stopka

- [ ] Wszystkie dane w stopce traktujemy jako stałe elementy layoutu (nie pobieramy z bazy)

## 1.3. Strona główna

### 1.3.1. Slider wizerunkowy

- [ ] Slajdy powinny zostać wygenerowane na podstawie danych zapisanych w bazie
- [ ] Maksymalna liczba slajdów, jaka powinna wyświetlić się w sliderze to 5
- [ ] W przypadku, gdy dostępny jest tylko 1 slajd, nie powinny być widoczne strzałki oraz nawigacja slidera (kropki na dole)

### 1.3.2. Sekcje zdjęcie/tekst

- [ ] Wszystkie informacje wyświetlane w ramach tej sekcji powinny być pobierane z bazy danych

### 1.3.3. Slider produktowy

- [ ] Kliknięcie etykietki "Nowości", "Promocje" itp. powinno powodować wczytanie wyłącznie produktów oznaczonych wybraną etykietą
- [ ] Jeśli produktów jest mniej, niż 5, strzałki oraz nawigacja nie powinny się wyświetlać
- [ ] W sliderze powinno wyświetlać się maksymalnie 5 stron produktów (5 * 5 produktów)

### 1.3.4. Sekcja 'Sprawdź, dlaczego my'

- [ ] Teksty pobierane z bazy danych
- [ ] Ikonki są stałym elementem layoutu

## 1.4. Lista produktów

### 1.4.1. Breadcrumbs

- [ ] Standardowy moduł nawigacji okruszkowej, powinien pokazywać ścieżkę kategorii, w której aktualnie się znajdujemy

### 1.4.2. Kategorie na pasku bocznym

- [ ] Dane powinny być pobierane z bazy
- [ ] Możliwość rozwijania kategorii, tak by wyświetlić podkategorie
- [ ] Po kliknięciu danej kategorii/podkategorii powinna wyświetlić się lista z produktami należącymi do niej

### 1.4.3. Filtry

- [ ] Dane pobierane z bazy
- [ ] Filtrowanie produktów odbywa się po 2 sekundach, podczas których klient nie zaznaczy żadnego filtra (debounce)
- [ ] Filtrowanie powinno odbyć się bez przeładowania całej strony
- [ ] W górnej części sekcji znajduje się lista z aktywnymi filtrami. Naciśnięcie ikony 'X' powinno deaktywować dany filtr 
- [ ] Jeśli w filtrach jest ponad 5 producentów, reszta powinna się wyświetlić po naciśnięciu opcji 'więcej'
- [ ] Liczba w nawiasach przy opcji 'więcej' to liczba ukrytych producentów
- [ ] Filtry powinny być przesyłane metodą GET, ponieważ pozwala to na przesyłanie aktywnych filtrów w adresie URL, co ułatwia udostępnianie wyników filtrowania innym osobom

### 1.4.4. Nazwa kategorii i opis

- [ ] Dane pobierane z bazy
- [ ] Funkcja rozwijania, jeśli opis jest za długi

### 1.4.2. Baner kategorii

- [ ] Każda kategoria produktowa może mieć przypisany inny baner
- [ ] Wszystkie informacje dotyczące banera pobieramy z bazy

### 1.4.3. Produkty

- [ ] Możliwość sortowania listy produktowej po cenie i nazwie produktu — wybrana przez użytkownika opcja powinna zostać zapamiętana podczas poruszania się po kolejnych kategoriach w sklepie
- [ ] Kliknięcie przycisku "Zobacz kolejne" powoduje przejście na drugą stronę listy produktów i jednocześnie obok po lewej stronie pojawia się drugi przycisk "Zobacz poprzednie", którym możemy powrócić do poprzedniej strony
- [ ] Wszystkie informacje dotyczące produktów pobieramy z bazy 

## 1.5. Karta produktu

### 1.5.1. Panel zakupowy i galeria zdjęć produktu

- [ ] Wszystkie informacje w ramach tej sekcji powinny być pobierane z bazy danych
- [ ] Po kliknięciu miniaturki zdjęcia powinno wyświetlić się ono obok jako duże zdjęcie
- [ ] Miniaturki zdjęć można przewijać, jeśli jest ich więcej niż 5, jeśli jest mniej, strzałki powinny znikać, ale w taki sposób, aby pozycja miniaturek pozostała niezmieniona
- [ ] Warianty to inne warianty kolorystyczne danego produktu, kliknięcie konkretnego wariantu powinno przenieść nas do odpowiedniego produktu

### 1.5.2. Opis produktu i dane podstawowe

- [ ] Wszystkie informacje w ramach tej sekcji powinny być pobierane z bazy danych
- [ ] Jeśli parametrów technicznych jest więcej niż 9, powinien wyświetlić się przycisk "Pokaż więcej"

### 1.5.3. Slider produktowy

- [ ] Zasada działania analogicznie jak w przypadku slidera produktowego na stronie głównej — z wyjątkiem klikalnych etykiet
- [ ] W ramach tej sekcji powinny wyświetlać się inne produkty, należące do tej samej kategorii co oglądany produkt

## 1.6. Rejestracja

- [ ] formularz rejestracji zawierający następujące pola:
  - imię
  - nazwisko
  - email (walidacja pod kątem poprawności formatu)
  - hasło (walidacja długości hasła - min. 8 znaków)
  - zgoda na przetwarzanie danych
- [ ] po rejestracji konta użytkownik powinien zostać automatycznie zalogowany, a jego konto aktywowane
- [ ] na dany adres email można zarejestrować tylko jedno konto

## 1.7. Logowanie

- [ ] loginem użytkownika w sklepie jest podany przy rejestracji adres email

