# Cos'è questo sito
Questo sito nasce dalla necessità di conoscere quali esercizi commerciali effettuano consegna a domicilio nel mio quartiere o in zone limitrofe.

L'attuale emergenza medica impone di non uscire di casa, se non per lo stretto necessario, a beneficio della salute nostra e della comunità. Ma andare al supermercato sta diventando sempre più difficile con code di diverse ore e gli orari di apertura si stanno riducendo.

Molti negozianti si sono attivati fornendo consegna a domicilio o la possibilità di telefonargli per prenotare il ritiro della spesa già preparata.

In questo momento è anche molto importante sostenere le piccole imprese locali, dato che è quasi impossibile andare nei centri commerciali, possiamo rivolgerci ai negozi di quartiere garantedo un flusso di cassa diverso e magari inaspettato.

Così, su questo sito, gli utenti possono trovare facilmente chi offre questi servizi e i negozianti possono inserire la loro attività. O gli utenti stessi possono alimentare la base datii inserendo i negozi che conoscono.

# Instalazione e configurazione

## Requisiti
L'applicazione è basata su [Laravel 7](https://laravel.com/docs/7.x/installation) e MySQL.

- XAMPP o equivalente
- MySQL
- PHP 
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/it/) con versione compatibile con Mix

## Installazione

Clonare il repository
```
git clone https://github.com/shardick/look-for-home-delivery.git
```

Installare Laravel e le sue dipendenze
```
cd look-for-home-delivery
composer install
php artisan key:generate
```

Instalare i pacchetti Node per Mix
```
npm install
```

Copiare .env.example in .env

Creare un utente MySQL e relativo database e configurare le rispettive chiavi nel file .env

Riempire il database con dati iniziali e le tabelle:

```
php artisan migrate
php artisan db:seed 
```

Compilare gli asset JS e CSS
```
npm run dev
```

Avviare il webserver di dev
```
php artisan serve 
```

Visitare http://localhost:8000

## Uso di LocationIQ

[LocationIQ](https://locationiq.com/) viene usato per geolocalizzare gli indirizzi, il piano free da 250k chiamate API al mese.

E' necessario registrarsi e inserire il token personale nella variabile di ambiente `LOCATIONIQ_API_KEY`