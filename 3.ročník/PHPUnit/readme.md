# PHPUnit

- Jedná se o program, který náš kód otestuje a ukáže nám výsledek. Podle výsledku zjistíme, zda nemáme v kódu chybu.

## Instalace PHPUnit

Pokud chceme spustit testování postupujeme následujícím způsobem:

1. Nejdříve si vytvoříme novou složku, do které budeme vše ukládat a otevřeme ji ve VS studiu.
1. Nainstalujeme si program [Composer](https://getcomposer.org/). Musíme si ho uložit i jako proměnnou v systémových proměnných "PATH".
1. Nainstalujeme si PHPUnit jednoduše příkazem v terminálu: `composer require --dev phpunit/phpunit ^9.5`. Po nainstalování se vytvoří složka _vendor_.
1. Vstoupíme do souboru composer.json a nastavíme:
   - Název projeku: `"name": "phpunit"`
   - Popis projektu: `"description": "Basic using PHPUnit"`
   - Autoload necháme ve standardu PSR-4: `"autoload": { "psr-4": { "BasicPHPUnitTest\\": "app/" } }`
   - Namespace BasicPHPUnitTest povede do složky app.
1. Aktualizujeme si složku vendor příkazem: `composer dump-autoload`.
1. Vytvoříme si soubor [index.php](index.php) a vložíme do něj autoload: `require "vendor/autoload.php";` případně k němu přidáme další kód našeho programu.
1. Ve složce app si vytvoříme program, který budeme chtít otestovat.
1. Ve složce tests si vytvoříme testy pro třídy, které nám ověří funkčnost programu.
## Spuštění testu
1. Testy spustíme příkazem: `vendor/bin/phpunit --verbose tests`.
