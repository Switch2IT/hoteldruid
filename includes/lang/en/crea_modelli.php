<?php

if (substr($messaggio, 0, 4) != "var_") {
    switch ($messaggio) {

# translate YES and NO in upper case
        case "SI":
            $messaggio = "YES";
            break;
        case "NO":
            $messaggio = "NO";
            break;
        case "Torna indietro":
            $messaggio = "Go back";
            break;
        case "Crea pagine per il sito web":
            $messaggio = "Create website pages";
            break;
        case "Dati comuni":
            $messaggio = "Common data";
            break;
        case "Utilizza i dati attuali per la connessione al database":
            $messaggio = "Use current data to connect to the database";
            break;
        case "Utilizza altri dati per la connessione al database":
            $messaggio = "Use other data to connect to the database";
            break;
        case "Tipo di database":
            $messaggio = "Database type";
            break;
        case "Postgresql":
            $messaggio = "Postgresql";
            break;
        case "Mysql":
            $messaggio = "Mysql";
            break;
        case "Nome del database da utilizzare":
            $messaggio = "Name of the database to be used";
            break;
        case "Nome del computer a cui collegarsi":
            $messaggio = "Name of the computer to connect to";
            break;
        case "Numero della porta a cui collegarsi":
            $messaggio = "Number of the port to connect to";
            break;
        case "Normalmete 5432 per Postgresql o 3306 per Mysql":
            $messaggio = "Normally 5432 for Postgresql or 3306 for Mysql";
            break;
        case "Nome per l'autenticazione al database":
            $messaggio = "Username for database authentication";
            break;
        case "Parola segreta per l'autenticazione al database":
            $messaggio = "Password for database authentication";
            break;
        case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":
            $messaggio = "Load the dinamic library \"pgsql.so\" or \"mysql.so\"";
            break;
        case "Si":
            $messaggio = "Yes";
            break;
        case "No":
            $messaggio = "No";
            break;
        case "scegliere si se non viene caricata automaticamente da php":
            $messaggio = "choose yes if it is not loaded automatically by php";
            break;
        case "Percorso alla directory dati da dove verrà posizionato lo script":
            $messaggio = "Path to \"dati\" folder from where the script will be placed";
            break;
        case "solo per mysql":
            $messaggio = "only for mysql";
            break;
        case "Anno":
            $messaggio = "Year";
            break;
        case "Lingua":
            $messaggio = "Language";
            break;
        case "Formato di visualizzazione dei soldi":
            $messaggio = "Money viewing format";
            break;
        case "Formato di visualizzazione delle date":
            $messaggio = "Dates viewing format";
            break;
        case "Nome della valuta al singolare":
            $messaggio = "Singular currency name";
            break;
        case "Nome della valuta al plurale":
            $messaggio = "Plural currency name";
            break;
        case "Pagina per la disponibilità":
            $messaggio = "Availability page";
            break;
        case "Le date sono sbagliate":
            $messaggio = "Dates are wrong";
            break;
        case "Indirizzo email non valido":
            $messaggio = "Non valid email address";
            break;
        case "INIZIO VARIABILI MODIFICABILI":
            $messaggio = "BEGINNING OF MODIFIABLE VARIABLES";
            break;
        case "Inserire in questa variabile il nome della pagina se \$PHP_SELF non è definita":
            $messaggio = "Insert in this variable the name of the page if \$PHP_SELF is not defined";
            break;
        case "europa":
            $messaggio = "europe";
            break;
        case "usa":
            $messaggio = "usa";
            break;
        case "FRASI":
            $messaggio = "PHRASES";
            break;
        case "FRASI EMAIL":
            $messaggio = "EMAIL PHRASES";
            break;
        case "PERIODI NEI MENU":
            $messaggio = "MENUS PERIODS";
            break;
        case "FINE VARIABILI MODIFICABILI":
            $messaggio = "END OF MODIFIABLE VARIABLES";
            break;
        case "NON MODIFICARE NIENTE A PARTIRE DA QUI":
            $messaggio = "DO NOT MODIFY ANYTHING FROM HERE";
            break;
        case "La variabile \\\$PHP_SELF non è definita, si dovrà editare a mano questa pagina per inserirne il nome":
            $messaggio = "The \\\$PHP_SELF variable is not defined, you'll have to edit this page by hand to add its name";
            break;
        case "Non ho il permesso di scrittura nella cartella":
            $messaggio = "I don't have write permission on folder";
            break;
        case "OK":
            $messaggio = "OK";
            break;
        case "Pagina per controllare la disponibilità":
            $messaggio = "Page to check availability";
            break;
        case "Date nei menù a tendina":
            $messaggio = "Dates in drop-down menus";
            break;
        case "Tariffe (tipologie) da mostrare ed eventuali loro nomi sostitutivi con cui mostrarle":
            $messaggio = "Rates (types) to show and their eventual substitutive names to be shown with";
            break;
        case "col nome":
            $messaggio = "with name";
            break;
        case "Chiedere se aggiungere i costi presenti nella pagina di inserzione prenotazioni?":
            $messaggio = "Ask for adding costs showing in the reservations insertion page?";
            break;
        case "Aggiungere al prezzo i costi aggiuntivi fissi associati alle tariffe?":
            $messaggio = "Add to the price the extra costs associated with the choosen rate?";
            break;
        case "Costi aggiuntivi da mostrare ed eventuali loro nomi sostitutivi con cui mostrarli":
            $messaggio = "Extra costs to show and their eventual substitutive names to be shown with";
            break;
        case "Costo settimanale":
            $messaggio = "Weekly cost";
            break;
        case "Costo unico":
            $messaggio = "Single cost";
            break;
        case "Costo giornaliero":
            $messaggio = "Daily cost";
            break;
        case "Motivazioni delle regole di assegnazone 1 per disponibilità condizionata da tenere in conto":
            $messaggio = "Motivations of assignment rules 1 for conditional availability to consider";
            break;
        case "nessuna":
            $messaggio = "no motivation";
            break;
        case "comportati come se non vi fosse più disponibilità":
            $messaggio = "Show that there is no more availability";
            break;
        case "dai ancora disponibilità con questa frase alternativa":
            $messaggio = "Show that there is still availability with this alternative phrase";
            break;
        case "Disponibilità incerta per la tipologia scelta, per ulteriori informazioni contattateci via email":
            $messaggio = "Uncertain availability for the choosen type, contact us by email for more information";
            break;
        case "Mostrare la caparra se presente?":
            $messaggio = "Show the deposit if present?";
            break;
        case "Mostrare quali sono i giorni pieni all'interno dei periodi dove non c'è più disponibilità?":
            $messaggio = "Show which days are full inside the periods where there is no more availability?";
            break;
        case "Mostrare la form di richiesta prenotazione?":
            $messaggio = "Show the request reservation form?";
            break;
        case "Indirizzo email a cui inviare le richieste di prenotazione":
            $messaggio = "Email address to which send the requests for reservation";
            break;
        case "Mascherare la provenienza dell'email sull'envelope?":
            $messaggio = "Masquerade sender on the email envelope?";
            break;
        case "provare a cambiare se non si riescono a spedire le email":
            $messaggio = "try to change this if you can't send the email";
            break;
        case "Tag html di apertura per la formattazione delle font":
            $messaggio = "Opening html tag for formatting fonts";
            break;
        case "Tag html di chiusura per la formattazione delle font":
            $messaggio = "Closing html tag for formatting fonts";
            break;
        case "Tag html di apertura per la formattazione delle font rosse":
            $messaggio = "Opening html tag for formatting red fonts";
            break;
        case "Tag html di chiusura per la formattazione delle font rosse":
            $messaggio = "Closing html tag for formatting red fonts";
            break;
        case "Crea la pagina per la disponibilità":
            $messaggio = "Create availability page";
            break;
        case "Controlla la disponibilità":
            $messaggio = "Check availability";
            break;
        case "dal":
            $messaggio = "from";
            break;
        case "al":
            $messaggio = "to";
            break;
        case "per la tipologia":
            $messaggio = "for type";
            break;
        case "tariffa":
            $messaggio = "rate";
            break;
        case "per":
            $messaggio = "for";
            break;
        case "Le date sono sbagliate":
            $messaggio = "Dates are wrong";
            break;
        case "La tipologia è sbagliata":
            $messaggio = "The type is wrong";
            break;
        case "è":
            $messaggio = "is";
            break;
        case "pien":
            $messaggio = "full";
            break;
        case "Non c'è più disponibilità nel periodo richiesto":
            $messaggio = "There is not availability anymore in the requested period";
            break;
        case "C'è ancora disponibilità":
            $messaggio = "There is still availability";
            break;
        case "nel periodo richiesto":
            $messaggio = "in the requested period";
            break;
        case "nei periodi richiesti":
            $messaggio = "in the requested periods";
            break;
        case "per la tipologia":
            $messaggio = "for type";
            break;
        case "per le tipologie richieste":
            $messaggio = "for requested types";
            break;
        case "Non c'è più disponibilità":
            $messaggio = "There is not availability anymore";
            break;
        case "Periodo di":
            $messaggio = "Period of";
            break;
        case "Non c'è ancora nessuna tariffa per la tipologia richiesta in questo periodo":
            $messaggio = "There is still not any rate for the requested type in this period";
            break;
        case "E' necessario inserire il numero di persone per questa tipologia":
            $messaggio = "The number of people is needed for this type";
            break;
        case "Prezzo":
            $messaggio = "Price";
            break;
        case "Caparra":
            $messaggio = "Deposit";
            break;
        case "compresi":
            $messaggio = "including";
            break;
        case "di":
            $messaggio = "of";
            break;
        case "Nuovo controllo":
            $messaggio = "New check";
            break;
        case "Nome":
            $messaggio = "Name";
            break;
        case "Email":
            $messaggio = "Email";
            break;
        case "Commento":
            $messaggio = "Comment";
            break;
        case "Invia la richiesta di prenotazione":
            $messaggio = "Send the request for reservation";
            break;
        case "Richiesta di prenotazione inviata":
            $messaggio = "Request for reservation sent";
            break;
        case "Non è stato possibile inviare la richiesta":
            $messaggio = "It was not possible to send the request";
            break;
        case "da":
            $messaggio = "from";
            break;
        case "Periodo":
            $messaggio = "Period";
            break;
        case "Tariffa":
            $messaggio = "Rate";
            break;
        case "Costi aggiuntivi":
            $messaggio = "Extra costs";
            break;
        case "Prezzo totale":
            $messaggio = "Total price";
            break;
        case "Riferimento":
            $messaggio = "Reference";
            break;
        case "Richesta prenotazione":
            $messaggio = "Reservation request";
            break;
        case "modificare il valore sulla destra":
            $messaggio = "modify the value on the right";
            break;
        case "settimane":
            $messaggio = "weeks";
            break;
        case "giorni":
            $messaggio = "days";
            break;
        case "settimana":
            $messaggio = "week";
            break;
        case "giorno":
            $messaggio = "day";
            break;
        case "La":
            $messaggio = "The";
            break;
        case "Il":
            $messaggio = "The";
            break;
        case "piena":
            $messaggio = "full";
            break;
        case "pieno":
            $messaggio = "full";
            break;
        case "Una pagina chiamata":
            $messaggio = "A page called";
            break;
        case "è stata creata nella directory":
            $messaggio = "has been created in folder";
            break;
        case "Si può cambiare la directory dove vengono create le pagine da \"configura e personalizza\"":
            $messaggio = "You can change the directory where pages are created from \"configure and customize\"";
            break;
        case "INSERISCI QUI IL TUO HTML":
            $messaggio = "INSERT YOUR HTML HERE";
            break;
        case "FINE DELLA PRIMA PARTE DELL'HTML PERSONALE":
            $messaggio = "END OF THE FIRST PART OF CUSTOM HTML";
            break;
        case "INIZIO DELLA SECONDA PARTE DELL'HTML PERSONALE":
            $messaggio = "BEGINNING OF THE SECOND PART OF CUSTOM HTML";
            break;
        case "FINE DELLA SECONDA PARTE DELL'HTML PERSONALE":
            $messaggio = "END OF THE SECOND PART OF CUSTOM HTML";
            break;
        case "Prefisso nel nome delle tabelle":
            $messaggio = "Prefix in tables name";
            break;
        case "Parte html del file prima della form di disponibilità":
            $messaggio = "Html portion of the file before the availability form";
            break;
        case "Parte html del file dopo la form di disponibilità":
            $messaggio = "Html portion of the file after the availability form";
            break;
        case "0 per scelta libera":
            $messaggio = "0 for free choice";
            break;
        case "Possibilità di aggiungere più tipologie da controllare contemporaneamente?":
            $messaggio = "Possibility to add more types to be checked contemporaneously?";
            break;
        case "Numero massimo di tipologie":
            $messaggio = "Maximum number of types";
            break;
        case "Numero massimo di tipologie errato":
            $messaggio = "Maximum number of types is wrong";
            break;
        case "Numero di":
            $messaggio = "Number of";
            break;
        case "Il numero di":
            $messaggio = "The number of";
            break;
        case "richiesto è sbagliato":
            $messaggio = "inserted is wrong";
            break;
        case "in":
            $messaggio = "in";
            break;
        case "Totale":
            $messaggio = "Total";
            break;
        case "Aggiungi una nuova tipologia":
            $messaggio = "Add a new type";
            break;
        case "Numero di colonne dei costi aggiuntivi errato":
            $messaggio = "The number of extra costs columns is wrong";
            break;
        case "Numero di colonne dei costi aggiuntivi":
            $messaggio = "Number of extra costs columns";
            break;
        case "tipologia":
            $messaggio = "type";
            break;
        case "Elimina questa tipologia":
            $messaggio = "Delete this type";
            break;
        case "Scegliere le settimane in cui applicare":
            $messaggio = "Choose the weeks to be applied for";
            break;
        case "Scegliere i giorni in cui applicare":
            $messaggio = "Choose the days to be applied for";
            break;
        case "Chiedere il numero di persone?":
            $messaggio = "Ask for the number of people?";
            break;
        case "persone":
            $messaggio = "people";
            break;
        case "Persone":
            $messaggio = "People";
            break;
        case "persona":
            $messaggio = "person";
            break;
        case "Continua":
            $messaggio = "Continue";
            break;
        case "singolare":
            $messaggio = "sigular";
            break;
        case "per ogni":
            $messaggio = "for each";
            break;
        case "Si deve inserire il numero delle persone per":
            $messaggio = "The number of people must be inserted for";
            break;
        case "Errore nei servizi opzionali richiesti":
            $messaggio = "Error in requested optional services";
            break;
        case "Numero massimo di persone":
            $messaggio = "Maximum number of people";
            break;
        case "Se le persone superano la capienza massima utilizzare il costo aggiuntivo":
            $messaggio = "If the number of people is bigger than the maximum capacity use the extra cost";
            break;
        case "Se il costo può essere moltiplicato aggiungere al massimo":
            $messaggio = "If the cost can be multiplied add at most";
            break;
        case "letti aggiuntivi":
            $messaggio = "extra beds";
            break;
        case "Numero massimo di persone errato":
            $messaggio = "Wrong maximum number of people";
            break;
        case "Numero massimo di letti aggiuntivi errato":
            $messaggio = "Wrong maximum number of extra beds";
            break;
        case "supera la capienza massima della tipologia richiesta":
            $messaggio = "is bigger than the maximum capacity of requested type";
            break;
        case "Si può creare un link verso questa pagina dal proprio sito internet":
            $messaggio = "You can create a link to this page from your own internet site";
            break;
        case "Cancella":
            $messaggio = "Delete";
            break;
        case "tutte le pagine create":
            $messaggio = "all created pages";
            break;
        case "Si è sicuri di voler <b style=\"color: red;\">cancellare</b>":
            $messaggio = "Are you sure you want to <b style=\"color: red;\">delete</b>";
            break;
        case "la pagina":
            $messaggio = "the page";
            break;
        case "tutte le pagine create nella directory":
            $messaggio = "every page created in directory";
            break;
        case "tutte le pagine create nelle directory":
            $messaggio = "every page created in directories";
            break;
        case "Cancellate tutte le pagine":
            $messaggio = "Deleted all pages";
            break;
        case "OK":
            $messaggio = "OK";
            break;
        case "Modifica le frasi predefinite":
            $messaggio = "Modify default phrases";
            break;
        case "Frasi predefinite":
            $messaggio = "Default phrases";
            break;
        case "Mostrare il quadro indicativo della disponibilità?":
            $messaggio = "Show the availability indicative overview?";
            break;
        case "Non mostrare":
            $messaggio = "Do not show";
            break;
        case "Colore di sfondo della tabella":
            $messaggio = "Table background color";
            break;
        case "Colore del giorno di inizio settimana":
            $messaggio = "Beginning week day color";
            break;
        case "Colore dei periodi liberi":
            $messaggio = "Free periods color";
            break;
        case "Colore dei periodi occupati":
            $messaggio = "Full periods color";
            break;
        case "Tag di apertura dei font della tabella":
            $messaggio = "Table fonts opening tag";
            break;
        case "Tag di chiusura dei font della tabella":
            $messaggio = "Table fonts closing tag";
            break;
        case "Quadro indicativo disponibilità":
            $messaggio = "Indicative availability overview";
            break;
        case "Gennaio":
            $messaggio = "January";
            break;
        case "Febbraio":
            $messaggio = "February";
            break;
        case "Marzo":
            $messaggio = "March";
            break;
        case "Aprile":
            $messaggio = "April";
            break;
        case "Maggio":
            $messaggio = "May";
            break;
        case "Giugno":
            $messaggio = "June";
            break;
        case "Luglio":
            $messaggio = "July";
            break;
        case "Agosto":
            $messaggio = "August";
            break;
        case "Settembre":
            $messaggio = "September";
            break;
        case "Ottobre":
            $messaggio = "October";
            break;
        case "Novembre":
            $messaggio = "November";
            break;
        case "Dicembre":
            $messaggio = "December";
            break;
        case "settimane di intervallo":
            $messaggio = "weeks of interval";
            break;
        case "giorni di intervallo":
            $messaggio = "days of interval";
            break;
        case "Estendere l'ultima data fino a quella massima disponibile nel database?":
            $messaggio = "Extend the last date until the maximum available in the database?";
            break;
        case "necessario":
            $messaggio = "needed";
            break;
        case "opzionale":
            $messaggio = "optional";
            break;
        case "non chiedere":
            $messaggio = "do not ask";
            break;
        case "Inviare la richiesta di prenotazione come messaggio a":
            $messaggio = "Send the request for reservation as a messagge to";
            break;
        case "Campi della form da chiedere":
            $messaggio = "Form fields to be asked";
            break;
        case "Cognome":
            $messaggio = "Surname";
            break;
        case "Genere":
            $messaggio = "Gender";
            break;
        case "Data di nascita":
            $messaggio = "Birthdate";
            break;
        case "Documento":
            $messaggio = "Document";
            break;
        case "Nazione":
            $messaggio = "Nation";
            break;
        case "Città":
            $messaggio = "City";
            break;
        case "Regione":
            $messaggio = "Region";
            break;
        case "Via":
            $messaggio = "Street";
            break;
        case "Numero civico":
            $messaggio = "House number";
            break;
        case "Codice postale":
            $messaggio = "Postal code";
            break;
        case "Telefono":
            $messaggio = "Telephone";
            break;
        case "Secondo telefono":
            $messaggio = "Second telephone";
            break;
        case "Terzo telefono":
            $messaggio = "Third telephone";
            break;
        case "Fax":
            $messaggio = "Fax";
            break;
        case "Orario stimato di arrivo":
            $messaggio = "Estimated arrival time";
            break;
        case "Metodo di pagamento della caparra":
            $messaggio = "Deposit method";
            break;
        case "Metodi di pagamento della caparra da chiedere e loro eventuali nomi sostitutivi":
            $messaggio = "Deposit methods to show and their eventual substitutive names to be shown with";
            break;
        case "Campi della form personalizzati":
            $messaggio = "Custom form fields";
            break;
        case "tutti":
            $messaggio = "everybody";
            break;
        case "<small>campi necessari</small>":
            $messaggio = "<small>required fields</small>";
            break;
        case "<span style=\\\"color: red;\\\">*</span>":
            $messaggio = "<span style=\\\"color: red;\\\">*</span>";
            break;
        case "<small>*</small>":
            $messaggio = "<small>*</small>";
            break;
        case "M":
            $messaggio = "M";
            break;
        case "F":
            $messaggio = "F";
            break;
        case "Prenota":
            $messaggio = "Book";
            break;
        case "Mostrare il bottone per prenotare con la pagina di prenotazione immediata se presente?":
            $messaggio = "Show the button to book with the instant booking page if present?";
            break;
        case "Nome file della pagina di prenotazione immediata":
            $messaggio = "Instant booking page filename";
            break;
        case "--- OPPURE ---":
            $messaggio = "--- OR ---";
            break;
        case "Prenotazione istantanea con PayPal":
            $messaggio = "Instant booking with PayPal";
            break;
        case "Accetta solo richieste che cominciano almeno dopo":
            $messaggio = "Accept only requests that begin at least after";
            $tr = 1;
            break;
        case "Numero di settimane dopo cui prendere richieste errato":
            $messaggio = "Wrong number of weeks after which take requests";
            $tr = 1;
            break;
        case "Numero di giorni dopo cui prendere richieste errato":
            $messaggio = "Wrong number of days after which take requests";
            $tr = 1;
            break;
        case "Mostrare i calendari per la scelta delle date?":
            $messaggio = "Show the calendars to pick the dates?";
            break;
        case "Stile riquadro calendario":
            $messaggio = "Calendar box style";
            break;
        case "Stile tabella calendario":
            $messaggio = "Calendar table style";
            break;
        case "Stile bottoni interni":
            $messaggio = "Internal buttons style";
            break;
        case "Stile bottone apertura":
            $messaggio = "Opening button style";
            break;
        case "Colore date attive":
            $messaggio = "Active dates color";
            break;
        case "Colore data selezionata":
            $messaggio = "Selected date color";
            break;
        case "Chiudi":
            $messaggio = "Close";
            break;
        case "mostra":
            $messaggio = "show";
            break;
        case "non mostrare":
            $messaggio = "do not show";
            break;
        case "Inviare una copia della email di richiesta prenotazione al richiedente?":
            $messaggio = "Send a copy of the reservation request email to the applier?";
            break;
        case "Abbiamo ricevuto la sua richiesta di prenotazione e risponderemo al più presto possibile":
            $messaggio = "We have received your reservation request and will answer as soon as possible";
            break;
        case "Copia della richiesta è stata inviata a":
            $messaggio = "A copy of the request has been sent to";
            break;
        case "NON MODIFICARE MANUALMENTE":
            $messaggio = "DO NOT MODIFY BY HAND";
            break;
        case "Anteporre il nome della valuta?":
            $messaggio = "Put currency name in front of price?";
            break;
        case "Stile della tabella che racchiude la form di prenotazione":
            $messaggio = "Style of the table that encloses the booking form";
            break;
        case "Allineare la disponibilità con la data di arrivo?":
            $messaggio = "Align availability with arrival date?";
            break;
        case "Origine della prenotazione":
            $messaggio = "Reservation origin";
            break;
        case "Cartella":
            $messaggio = "Directory";
            break;
        case "Pagina cancellata":
            $messaggio = "Page deleted";
            break;
        case "Importa le pagine dalla cartella":
            $messaggio = "Import pages from directory";
            break;
        case "alla cartella":
            $messaggio = "to directory";
            break;
        case "Importa":
            $messaggio = "Import";
            break;
        case "Si è sicuri di voler importare le pagine dalla cartella":
            $messaggio = "Are you sure you want to import pages from directory";
            break;
        case "eventuali pagine già presenti nella cartella":
            $messaggio = "pages eventually already present in directory";
            break;
        case "verranno <b style=\"font-weight: normal; color: red;\">sovrascritte</b>":
            $messaggio = "will be <b style=\"font-weight: normal; color: red;\">overwritten</b>";
            break;
        case "Pagine importate":
            $messaggio = "Pages imported";
            break;
        case "con i servizi opzionali selezionati":
            $messaggio = "with selected optional services";
            break;
        case "Utilizzare le liste di nazioni, regioni, etc. dell'utente":
            $messaggio = "Use lists of nations, regions, etc. from user";
            break;
        case "Url del file css per la modalità frame":
            $messaggio = "Url of css file for framed mode";
            break;
        case "Utilizza per l'aspetto della pagina":
            $messaggio = "Use for page appearance";
            break;
        case "html personalizzato":
            $messaggio = "custom html";
            break;
        case "il tema chiamato":
            $messaggio = "the theme called";
            break;
        case "Colore del tema":
            $messaggio = "Color of theme";
            break;
        case "Data di arrivo":
            $messaggio = "Arrival date";
            break;
        case "Data di partenza":
            $messaggio = "Departure date";
            break;
        case "Tipologia":
            $messaggio = "Type";
            break;
        case "default - frame orizzontale":
            $messaggio = "default - horizontal frame";
            break;
        case "Condizioni da accettare nella form":
            $messaggio = "Agreements to be accepted in the form";
            break;
        case "nomi dall'utente delle liste":
            $messaggio = "names from lists user";
            break;
        case "Accetto":
            $messaggio = "I accept";
            break;
        case "documento":
            $messaggio = "document";
            break;
        case "larghezza":
            $messaggio = "width";
            break;
        case "altezza":
            $messaggio = "height";
            break;
        case "Dalla modalidà frame, aprire il secondo passo in una nuova finestra?":
            $messaggio = "From framed mode, open second step in new window?";
            break;
        case "Geometria della nuova finestra":
            $messaggio = "New window geometry";
            break;
        case "Torna alla HOME":
            $messaggio = "Back to HOME";
            break;
        case "URL della home":
            $messaggio = "Home URL";
            break;
        case "URL del logo":
            $messaggio = "Logo URL";
            break;
        case "Valore del tema":
            $messaggio = "Value of theme";
            break;
        case "Esempio di codice html per includere il primo passo della form in modalità frame su altre pagine del sito":
            $messaggio = "Example of html code to include te first step of the form in framed mode on other website pages";
            break;
        case "selezionare \"html personalizzato\" nell'aspetto della pagina per modificarla":
            $messaggio = "select \"custom html\" in page appearance to modify it";
            break;
        case "Categoria":
            $messaggio = "Category";
            break;
        case "Attenzione":
            $messaggio = "Warning";
            break;
        case "le regole 1 di chiusura vengono sempre applicate":
            $messaggio = "rules 1 for closure are always applied";
            break;
        case "La tipologia richiesta è chiusa in questo periodo":
            $messaggio = "The requested type is closed in this period";
            break;
        case "Spostamento orizzontale della posizione":
            $messaggio = "Horizontal offset for position";
            break;
        case "aggiunto al commento":
            $messaggio = "added to comment";
            break;
        case "aggiunto al campo":
            $messaggio = "added to field";
            break;
        case "del cliente":
            $messaggio = "in client data";
            break;
        case "URL file css":
            $messaggio = "URL of css file";
            break;
        case "ci sono tariffe senza regola di assegnazione n. 2":
            $messaggio = "there are rates without assignment rule n. 2";
            break;
        case "Codice fiscale":
            $messaggio = "Fiscal code";
            break;
        case "Partita iva":
            $messaggio = "VAT number";
            break;
        case "mai":
            $messaggio = "never";
            break;
        case "se possibile":
            $messaggio = "when possible";
            break;
        case "sempre":
            $messaggio = "always";
            break;
        case "chiedere":
            $messaggio = "ask";
            break;
        case "posizioni vicine":
            $messaggio = "nearby positions";
            break;
        case "con posizioni vicine":
            $messaggio = "with nearby positions";
            break;
        case "":
            $messaggio = "";
            break;
        case "":
            $messaggio = "";
            break;

# NAME OF THE FILE: same rules as varibles below
        case "mdl_disponibilita":
            $messaggio = "availability_tpl";
            break;

    } # fine switch ($messaggio)
} # fine if (substr($messaggio,0,4) != "var_")


else {
    switch ($messaggio) {

# NAMES OF VARIABLES: for translation leave the beginning as var_ and use only a-z, A-Z, 
# 0-9 and _ (underscore). No spaces, no accents! There must not be 2 with the same name.
# NOTE: names of variables are only shown when editing files, actually they don't need to be translated
        case "var_nome_pagina":
            $messaggio = "var_page_name";
            break;
        case "var_anno":
            $messaggio = "var_year";
            break;
        case "var_tipo_db":
            $messaggio = "var_db_type";
            break;
        case "var_nome_db":
            $messaggio = "var_db_name";
            break;
        case "var_computer_db":
            $messaggio = "var_db_host";
            break;
        case "var_porta_db":
            $messaggio = "var_db_port";
            break;
        case "var_utente_db":
            $messaggio = "var_db_user";
            break;
        case "var_password_db":
            $messaggio = "var_db_password";
            break;
        case "var_carica_estensione_db":
            $messaggio = "var_db_load_extension";
            break;
        case "var_prefisso_tabelle_db":
            $messaggio = "var_db_tables_prefix";
            break;
        case "var_lingua_modello":
            $messaggio = "var_template_language";
            break;
        case "var_cartella_mysql_lock":
            $messaggio = "var_mysql_lock_dir";
            break;
        case "var_stile_soldi":
            $messaggio = "var_money_format";
            break;
        case "var_stile_data":
            $messaggio = "var_dates_format";
            break;
        case "var_anteponi_nome_valuta":
            $messaggio = "var_currency_name_in_front";
            break;
        case "var_utente_liste":
            $messaggio = "var_lists_user";
            break;
        case "var_estendi_ultima_data":
            $messaggio = "var_extend_last_date";
            break;
        case "var_tariffe_mostra":
            $messaggio = "var_rates_to_show";
            break;
        case "var_nomi_tariffe_imposte":
            $messaggio = "var_imposed_rates_names";
            break;
        case "var_aggiungi_costi_fissi":
            $messaggio = "var_add_extra_costs";
            break;
        case "var_chiedi_costi_aggiuntivi_di_pag_inserzione":
            $messaggio = "var_ask_for_extra_costs_in_insertion_page";
            break;
        case "var_costi_aggiuntivi_mostra":
            $messaggio = "var_extra_costs_to_show";
            break;
        case "var_nomi_costi_agg_imposti":
            $messaggio = "var_imposed_extra_costs_names";
            break;
        case "var_categorie_costi_agg_imposte":
            $messaggio = "var_imposed_extra_costs_categories";
            break;
        case "var_assegna_con_regola2":
            $messaggio = "var_assign_with_rule1";
            break;
        case "var_considera_motivazioni_regola1":
            $messaggio = "var_motivations_of_rule1_to_consider";
            break;
        case "var_mostra_frase_alternativa_regola1":
            $messaggio = "var_show_alternative_phrase_for_rule1";
            break;
        case "var_mostra_caparra":
            $messaggio = "var_show_deposit";
            break;
        case "var_mostra_richiesta_via_mail":
            $messaggio = "var_show_request_by_mail";
            break;
        case "var_indirizzo_email":
            $messaggio = "var_email_address";
            break;
        case "var_maschera_email":
            $messaggio = "var_masquerade_email_envelope";
            break;
        case "var_mostra_giorni_pieni":
            $messaggio = "var_show_full_days";
            break;
        case "var_mostra_bottone_paypal":
            $messaggio = "var_show_paypal_button";
            break;
        case "var_nome_modello_paypal":
            $messaggio = "var_paypal_template_name";
            break;
        case "var_origine_prenotazione":
            $messaggio = "var_reservation_origin";
            break;
        case "var_apertura_tag_font":
            $messaggio = "var_font_tag_opening";
            break;
        case "var_chiusura_tag_font":
            $messaggio = "var_font_tag_closing";
            break;
        case "var_apertura_tag_font_rosse":
            $messaggio = "var_red_font_tag_opening";
            break;
        case "var_chiusura_tag_font_rosse":
            $messaggio = "var_red_font_tag_closing";
            break;
        case "var_chiedi_numero_persone":
            $messaggio = "var_ask_people_number";
            break;
        case "var_periodi_no_richieste":
            $messaggio = "var_periods_no_requests";
            break;
        case "var_mostra_calendario_scelta_date":
            $messaggio = "var_show_dates_picker_calendar";
            break;
        case "var_stile_riquadro_calendario":
            $messaggio = "var_calendar_box_style";
            break;
        case "var_stile_tabella_calendario":
            $messaggio = "var_calendar_table_style";
            break;
        case "var_stile_bottoni_calendario":
            $messaggio = "var_calendar_buttons_style";
            break;
        case "var_stile_bottone_apertura_calendario":
            $messaggio = "var_open_calendar_button_style";
            break;
        case "var_spostamento_orizzontale_calendario":
            $messaggio = "var_calendar_horizontal_offset";
            break;
        case "var_colore_data_attiva_calendario":
            $messaggio = "var_color_active_calendar_date";
            break;
        case "var_colore_data_selezionata_calendario":
            $messaggio = "var_color_selected_calendar_date";
            break;
        case "var_stile_tabella_prenotazione":
            $messaggio = "var_reservation_table_style";
            break;
        case "var_file_css_frame":
            $messaggio = "var_framed_css_file";
            break;
        case "var_apri_nuova_finestra_da_frame":
            $messaggio = "var_open_new_window_from_frame";
            break;
        case "var_larghezza_finestra_da_frame":
            $messaggio = "var_window_from_frame_width";
            break;
        case "var_altezza_finestra_da_frame":
            $messaggio = "var_window_from_frame_height";
            break;
        case "var_tema_modello":
            $messaggio = "var_template_theme";
            break;
        case "var_colore_tema":
            $messaggio = "var_theme_color";
            break;
        case "var_valore_tema":
            $messaggio = "var_theme_value";
            break;
        case "var_allinea_disponibilita_con_arrivo":
            $messaggio = "var_align_availability_with_arrival";
            break;
        case "var_fr_Valuta_sing":
            $messaggio = "var_phr_Currency_sing";
            break;
        case "var_fr_Valuta_plur":
            $messaggio = "var_phr_Currency_plur";
            break;
        case "var_fr_Controlla_la_disponibilita":
            $messaggio = "var_phr_Check_availability";
            break;
        case "var_fr_dal":
            $messaggio = "var_phr_from";
            break;
        case "var_fr_al":
            $messaggio = "var_phr_to";
            break;
        case "var_fr_per_la_tipologia":
            $messaggio = "var_phr_for_type";
            break;
        case "var_fr_tariffa":
            $messaggio = "var_phr_rate";
            break;
        case "var_fr_per":
            $messaggio = "var_phr_for";
            break;
        case "var_fr_Le_date_sono_sbagliate":
            $messaggio = "var_phr_Dates_are_wrong";
            break;
        case "var_fr_La_tipologia_e_sbagliata":
            $messaggio = "var_phr_Type_is_wrong";
            break;
        case "var_fr_parola_La":
            $messaggio = "var_phr_word_the";
            break;
        case "var_fr_parola_settimana":
            $messaggio = "var_phr_word_week";
            break;
        case "var_fr_est":
            $messaggio = "var_phr_is";
            break;
        case "var_fr_pien":
            $messaggio = "var_phr_full";
            break;
        case "var_fr_lettera_a":
            $messaggio = "var_phr_letter_sing_fem";
            break;
        case "var_fr_Non_c_e_piu_disponibilita_nel_periodo_richiesto":
            $messaggio = "var_phr_There_is_not_availability_anymore_in_the_requested_period";
            break;
        case "var_fr_C_e_ancora_disponibilita":
            $messaggio = "var_phr_There_is_still_availability";
            break;
        case "var_fr_Non_c_e_piu_disponibilita":
            $messaggio = "var_phr_There_is_not_availability_anymore";
            break;
        case "var_fr_alternativa_regola1":
            $messaggio = "var_phr_rule1_alternative";
            break;
        case "var_fr_Periodo_di":
            $messaggio = "var_phr_Period_of";
            break;
        case "var_fr_parola_settimane":
            $messaggio = "var_phr_word_weeks";
            break;
        case "var_fr_Non_c_e_tariffa_per_questa_tipologia_ecc":
            $messaggio = "var_phr_There_is_still_not_rate_for_the_requested_type_etc";
            break;
        case "var_fr_E_necessario_inserire_il_numero_di_persone_ecc":
            $messaggio = "var_fr_The_number_of_people_is_needed_etc";
            break;
        case "var_fr_Prezzo":
            $messaggio = "var_phr_Price";
            break;
        case "var_fr_Caparra":
            $messaggio = "var_phr_Deposit";
            break;
        case "var_fr_compresi":
            $messaggio = "var_phr_including";
            break;
        case "var_fr_di":
            $messaggio = "var_phr_of";
            break;
        case "var_fr_Nuovo_controllo":
            $messaggio = "var_phr_New_check";
            break;
        case "var_fr_Nome":
            $messaggio = "var_phr_Name";
            break;
        case "var_fr_Email":
            $messaggio = "var_phr_Email";
            break;
        case "var_fr_Commento":
            $messaggio = "var_phr_Comment";
            break;
        case "var_fr_Invia_la_richiesta_di_prenotazione":
            $messaggio = "var_phr_Send_the_request_for_reservation";
            break;
        case "var_fr_Richiesta_di_prenotazione_inviata":
            $messaggio = "var_phr_Request_for_reservation_sent";
            break;
        case "var_fr_Non_e_stato_possibile_inviare_la_richiesta":
            $messaggio = "var_phr_It_was_not_possible_to_send_the_request";
            break;
        case "var_fr_da":
            $messaggio = "var_phr_from2";
            break;
        case "var_fre_Email":
            $messaggio = "var_phre_Email";
            break;
        case "var_fre_Nome":
            $messaggio = "var_phre_Name";
            break;
        case "var_fre_Commento":
            $messaggio = "var_phre_Comment";
            break;
        case "var_fre_Periodo":
            $messaggio = "var_phre_Period";
            break;
        case "var_fre_dal":
            $messaggio = "var_phre_from";
            break;
        case "var_fre_al":
            $messaggio = "var_phre_to";
            break;
        case "var_fre_Tariffa":
            $messaggio = "var_phre_Rate";
            break;
        case "var_fre_Costi_aggiuntivi":
            $messaggio = "var_phre_Extra_costs";
            break;
        case "var_fre_sett":
            $messaggio = "var_phre_weeks";
            break;
        case "var_fre_Prezzo_totale":
            $messaggio = "var_phre_Total_price";
            break;
        case "var_fre_Riferimento":
            $messaggio = "var_phre_Reference";
            break;
        case "var_fre_Caparra":
            $messaggio = "var_phre_Deposit";
            break;
        case "var_fre_Richesta_prenotazione":
            $messaggio = "var_phre_Reservation_request";
            break;
        case "var_fr_Richesta_prenotazione":
            $messaggio = "var_phr_Reservation_request";
            break;
        case "var_periodi_menu":
            $messaggio = "var_menu_periods";
            break;
        case "var_fr_appartamenti":
            $messaggio = "var_phr_apartments";
            break;
        case "var_fr_appartamento":
            $messaggio = "var_phr_apartment";
            break;
        case "var_chiedi_numero_appartamenti_per_tipologia":
            $messaggio = "var_ask_number_apartments_for_type";
            break;
        case "var_massimo_numero_appartamenti_per_tipologia":
            $messaggio = "var_maximum_number_apartments_for_type";
            break;
        case "var_aggiungi_altre_tipologie":
            $messaggio = "var_add_other_types";
            break;
        case "var_massimo_numero_altre_tipologie":
            $messaggio = "var_maximum_number_other_types";
            break;
        case "var_cerca_appartamenti_vicini":
            $messaggio = "var_search_nearby_apartments";
            break;
        case "var_fr_Numero_di":
            $messaggio = "var_phr_Number_of";
            break;
        case "var_fr_Il_numero_di":
            $messaggio = "var_phr_The_number_of";
            break;
        case "var_fr_richiesto_e_sbagliato":
            $messaggio = "var_phr_inserted_is_wrong";
            break;
        case "var_fr_in":
            $messaggio = "var_phr_in";
            break;
        case "var_fr_Totale":
            $messaggio = "var_phr_Total";
            break;
        case "var_fre_Numero_di_appartamenti":
            $messaggio = "var_phre_Number_of_apartments";
            break;
        case "var_fre_Persone":
            $messaggio = "var_phre_People";
            break;
        case "var_fr_Aggiungi_una_nuova_tipologia":
            $messaggio = "var_phr_Add_a_new_type";
            break;
        case "var_numero_colonne_costi_aggiuntivi":
            $messaggio = "var_extra_costs_columns_number";
            break;
        case "var_fr_per_la_tipologia":
            $messaggio = "var_phr_for_type";
            break;
        case "var_fr_per_le_tipologie_richieste":
            $messaggio = "var_phr_for_requested_types";
            break;
        case "var_fr_nel_periodo_richiesto":
            $messaggio = "var_phr_in_the_requested_period";
            break;
        case "var_fr_nei_periodi_richiesti":
            $messaggio = "var_phr_in_the_requested_periods";
            break;
        case "var_fr_tipologia":
            $messaggio = "var_phr_type";
            break;
        case "var_fr_Torna_indietro":
            $messaggio = "var_phr_Go_back";
            break;
        case "var_fr_Elimina_questa_tipologia":
            $messaggio = "var_phr_Delete_this_type";
            break;
        case "var_fr_Scegliere_le_settimane_in_cui_applicare":
            $messaggio = "var_phr_Choose_the_weeks_to_be_applied_for";
            break;
        case "var_fr_persone":
            $messaggio = "var_phr_people";
            break;
        case "var_fr_persona":
            $messaggio = "var_phr_person";
            break;
        case "var_fr_Continua":
            $messaggio = "var_phr_Continue";
            break;
        case "var_fr_per_ogni":
            $messaggio = "var_phr_for_each";
            break;
        case "var_fr_Si_deve_inserire_il_numero_delle_persone_per":
            $messaggio = "var_phr_The_number_of_people_must_be_inserted_for";
            break;
        case "var_fr_Errore_nei_servizi_opzionali_richiesti":
            $messaggio = "var_phr_Error_in_requested_optional_services";
            break;
        case "var_massimo_numero_persone":
            $messaggio = "var_maximum_number_people";
            break;
        case "var_costo_aggiungi_letti":
            $messaggio = "var_cost_add_beds";
            break;
        case "var_massimo_numero_letti_aggiuntivi":
            $messaggio = "var_maximum_number_extra_beds";
            break;
        case "var_fr_supera_la_capienza_massima_della_tipologia_richiesta":
            $messaggio = "var_phr_is_bigger_than_the_maximum_capacity_of_requested_type";
            break;
        case "var_mostra_quadro_disponibilita":
            $messaggio = "var_show_availability_overview";
            break;
        case "var_raggruppa_quadro_disponibilita_con_regola_2":
            $messaggio = "var_group_availability_overview_with_rule_2";
            break;
        case "var_raggruppa_quadro_disponibilita_con_persone":
            $messaggio = "var_group_availability_overview_with_people";
            break;
        case "var_colore_sfondo_quadro_disponibilita":
            $messaggio = "var_background_color_availability_overview";
            break;
        case "var_colore_inizio_settimana_quadro_disponibilita":
            $messaggio = "var_color_week_beginning_availability_overview";
            break;
        case "var_colore_libero_quadro_disponibilita":
            $messaggio = "var_color_free_availability_overview";
            break;
        case "var_colore_occupato_quadro_disponibilita":
            $messaggio = "var_color_full_availability_overview";
            break;
        case "var_apertura_font_quadro_disponibilita":
            $messaggio = "var_opening_font_availability_overview";
            break;
        case "var_chiusura_font_quadro_disponibilita":
            $messaggio = "var_closing_font_availability_overview";
            break;
        case "var_mostra_numero_liberi_quadro_disponibilita":
            $messaggio = "var_show_free_number_availability_overview";
            break;
        case "var_fr_Quadro_indicativo_disponibilita":
            $messaggio = "var_phr_Indicative_availability_overview";
            break;
        case "var_fr_Gennaio":
            $messaggio = "var_phr_January";
            break;
        case "var_fr_Febbraio":
            $messaggio = "var_phr_February";
            break;
        case "var_fr_Marzo":
            $messaggio = "var_phr_March";
            break;
        case "var_fr_Aprile":
            $messaggio = "var_phr_April";
            break;
        case "var_fr_Maggio":
            $messaggio = "var_phr_May";
            break;
        case "var_fr_Giugno":
            $messaggio = "var_phr_June";
            break;
        case "var_fr_Luglio":
            $messaggio = "var_phr_July";
            break;
        case "var_fr_Agosto":
            $messaggio = "var_phr_August";
            break;
        case "var_fr_Settembre":
            $messaggio = "var_phr_September";
            break;
        case "var_fr_Ottobre":
            $messaggio = "var_phr_October";
            break;
        case "var_fr_Novembre":
            $messaggio = "var_phr_November";
            break;
        case "var_fr_Dicembre":
            $messaggio = "var_phr_December";
            break;
        case "var_utente_messaggio":
            $messaggio = "var_message_user";
            break;
        case "var_chiedi_cognome":
            $messaggio = "var_ask_surname";
            break;
        case "var_chiedi_nome":
            $messaggio = "var_ask_name";
            break;
        case "var_chiedi_email":
            $messaggio = "var_ask_email";
            break;
        case "var_chiedi_sesso":
            $messaggio = "var_ask_sex";
            break;
        case "var_chiedi_datanascita":
            $messaggio = "var_ask_birthdate";
            break;
        case "var_chiedi_documento":
            $messaggio = "var_ask_document";
            break;
        case "var_chiedi_nazione":
            $messaggio = "var_ask_nation";
            break;
        case "var_chiedi_citta":
            $messaggio = "var_ask_city";
            break;
        case "var_chiedi_regione":
            $messaggio = "var_ask_region";
            break;
        case "var_chiedi_via":
            $messaggio = "var_ask_street";
            break;
        case "var_chiedi_numcivico":
            $messaggio = "var_ask_housenumber";
            break;
        case "var_chiedi_cap":
            $messaggio = "var_ask_postalcode";
            break;
        case "var_chiedi_telefono":
            $messaggio = "var_ask_telephone";
            break;
        case "var_chiedi_telefono2":
            $messaggio = "var_ask_telephone2";
            break;
        case "var_chiedi_telefono3":
            $messaggio = "var_ask_telephone3";
            break;
        case "var_chiedi_fax":
            $messaggio = "var_ask_fax";
            break;
        case "var_chiedi_codfiscale":
            $messaggio = "var_ask_fiscalcode";
            break;
        case "var_chiedi_partitaiva":
            $messaggio = "var_ask_vatnumber";
            break;
        case "var_chiedi_commento":
            $messaggio = "var_ask_comment";
            break;
        case "var_chiedi_oracheckin":
            $messaggio = "var_ask_checkintime";
            break;
        case "var_chiedi_metodopagamento":
            $messaggio = "var_ask_paymentmethod";
            break;
        case "var_metodi_pagamento_da_chiedere":
            $messaggio = "var_payment_methods_to_ask";
            break;
        case "var_nomi_metodi_pagamento_imposti":
            $messaggio = "var_imposed_payment_methods_names";
            break;
        case "var_campi_form_personalizzati":
            $messaggio = "var_custom_form_fields";
            break;
        case "var_chiedi_campi_form_personalizzati":
            $messaggio = "var_ask_custom_form_fields";
            break;
        case "var_ins_campi_form_personalizzati":
            $messaggio = "var_ins_custom_form_fields";
            break;
        case "var_campi_form_doc_condizioni":
            $messaggio = "var_doc_conditions_form_fields";
            break;
        case "var_chiedi_campi_form_doc_condizioni":
            $messaggio = "var_ask_doc_conditions_form_fields";
            break;
        case "var_fr_Cognome":
            $messaggio = "var_phr_Surname";
            break;
        case "var_fr_Genere":
            $messaggio = "var_phr_Gender";
            break;
        case "var_fr_Data_di_nascita":
            $messaggio = "var_phr_Birthdate";
            break;
        case "var_fr_Documento":
            $messaggio = "var_phr_Document";
            break;
        case "var_fr_Nazione":
            $messaggio = "var_phr_Nation";
            break;
        case "var_fr_Citta":
            $messaggio = "var_phr_City";
            break;
        case "var_fr_Regione":
            $messaggio = "var_phr_Region";
            break;
        case "var_fr_Via":
            $messaggio = "var_phr_Street";
            break;
        case "var_fr_Numero_civico":
            $messaggio = "var_phr_House_number";
            break;
        case "var_fr_Codice_postale":
            $messaggio = "var_phr_Postal_code";
            break;
        case "var_fr_Telefono":
            $messaggio = "var_phr_Telephone";
            break;
        case "var_fr_Secondo_telefono":
            $messaggio = "var_phr_Second_telephone";
            break;
        case "var_fr_Terzo_telefono":
            $messaggio = "var_phr_Third_telephone";
            break;
        case "var_fr_Fax":
            $messaggio = "var_phr_Fax";
            break;
        case "var_fr_Codice_fiscale":
            $messaggio = "var_phr_Fiscal_code";
            break;
        case "var_fr_Partita_iva":
            $messaggio = "var_phr_VAT_number";
            break;
        case "var_fr_Orario_stimato_di_arrivo":
            $messaggio = "var_phr_Estimated_arrival_time";
            break;
        case "var_fr_Metodo_di_pagamento_della_caparra":
            $messaggio = "var_phr_Deposit_payment_method";
            break;
        case "var_fre_Cognome":
            $messaggio = "var_phre_Surname";
            break;
        case "var_fre_Genere":
            $messaggio = "var_phre_Gender";
            break;
        case "var_fre_Data_di_nascita":
            $messaggio = "var_phre_Birthdate";
            break;
        case "var_fre_Documento":
            $messaggio = "var_phre_Document";
            break;
        case "var_fre_Nazione":
            $messaggio = "var_phre_Nation";
            break;
        case "var_fre_Citta":
            $messaggio = "var_phre_City";
            break;
        case "var_fre_Regione":
            $messaggio = "var_phre_Region";
            break;
        case "var_fre_Via":
            $messaggio = "var_phre_Street";
            break;
        case "var_fre_Numero_civico":
            $messaggio = "var_phre_House_number";
            break;
        case "var_fre_Codice_postale":
            $messaggio = "var_phre_Postal_code";
            break;
        case "var_fre_Telefono":
            $messaggio = "var_phre_Telephone";
            break;
        case "var_fre_Secondo_telefono":
            $messaggio = "var_phre_Second_telephone";
            break;
        case "var_fre_Terzo_telefono":
            $messaggio = "var_phre_Third_telephone";
            break;
        case "var_fre_Fax":
            $messaggio = "var_phre_Fax";
            break;
        case "var_fre_Codice_fiscale":
            $messaggio = "var_phre_Fiscal_code";
            break;
        case "var_fre_Partita_iva":
            $messaggio = "var_phre_VAT_number";
            break;
        case "var_fre_Orario_stimato_di_arrivo":
            $messaggio = "var_phre_Estimated_arrival_time";
            break;
        case "var_fre_Metodo_di_pagamento_della_caparra":
            $messaggio = "var_phre_Deposit_payment_method";
            break;
        case "var_fr_campi_necessari":
            $messaggio = "var_phr_required_fields";
            break;
        case "var_fr_piena":
            $messaggio = "var_phr_full";
            break;
        case "var_fr_asterisco_rosso":
            $messaggio = "var_phr_red_asterisk";
            break;
        case "var_fr_asterisco_nero":
            $messaggio = "var_phr_black_asterisk";
            break;
        case "var_fr_maschile":
            $messaggio = "var_phr_male";
            break;
        case "var_fr_femminile":
            $messaggio = "var_phr_female";
            break;
        case "var_fr_Prenota":
            $messaggio = "var_phr_Book";
            break;
        case "var_fr_OPPURE_linee":
            $messaggio = "var_fr_OR_dashes";
            break;
        case "var_fr_Prenotazione_istantanea_con_PayPal":
            $messaggio = "var_fr_Instant_booking_with_PayPal";
            break;
        case "var_fr_Chiudi":
            $messaggio = "var_phr_Close";
            break;
        case "var_manda_copia_richiesta_email":
            $messaggio = "var_send_copy_of_request_email";
            break;
        case "var_fr_Abbiamo_ricevuto_la_sua_richiesta_di_prenotazione_ecc":
            $messaggio = "var_phr_We_have_received_your_reservation_request_etc";
            break;
        case "var_fr_Copia_della_richiesta_e_stata_inviata_a":
            $messaggio = "var_phr_A_copy_of_the_request_has_been_sent_to";
            break;
        case "var_fr_con_i_servizi_opzionali_selezionati":
            $messaggio = "var_phr_with_selected_optional_services";
            break;
        case "var_fr_Data_di_arrivo":
            $messaggio = "var_phr_Arrival_date";
            break;
        case "var_fr_Data_di_partenza":
            $messaggio = "var_phr_Departure_date";
            break;
        case "var_fr_Tipologia":
            $messaggio = "var_phr_Type";
            break;
        case "var_fr_Accetto":
            $messaggio = "var_phr_I_accept";
            break;
        case "var_fr_La_tipologia_richiesta_e_chiusa_in_questo_periodo":
            $messaggio = "var_phr_The_requested_type_is_closed_in_this_period";
            break;
        case "var_fr_posizioni_vicine":
            $messaggio = "var_phr_nearby_positions";
            break;
        case "var_fr_con_posizioni_vicine":
            $messaggio = "var_phr_with_nearby_positions";
            break;
        case "var_":
            $messaggio = "var_";
            break;
        case "var_":
            $messaggio = "var_";
            break;

    } # fine switch ($messaggio)
} # fine else if (substr($messaggio,0,4) != "var_")


?>