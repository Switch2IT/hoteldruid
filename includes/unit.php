<?php

# In this file all phrases that contain or refer to the rental unit name are translated. Please leave 
# [unit] and [units] untranslated in the translated phrases, they will be replaced later with the 
# singular and plural names of the rental unit. Each phrase must be translated 4 times for languages 
# that differentiate between masculine and femenine names and names that begin with a special 
# character (like vocals) or not. In English for example masculine and femenine phrases will be the 
# same, but you can use special characters to differentiate between words that use the article "a" or 
# "an". In practice you can translate the first section and copy and paste it on the other 3 sections, 
# editing them afterwards where needed. Please note that the default rental units "room" and "apartment" 
# and the special characters are translated in the variables at the beginning of this file.


# Translate only the value of variables in single quotes on the right. Special characters are separated 
# by commas. Genders can be "m" or "f".
$trad_var['room'] = 'camera';
$trad_var['rooms'] = 'camere';
$trad_var['room_gender'] = 'f';
$trad_var['apartment'] = 'appartamento';
$trad_var['apartments'] = 'appartamenti';
$trad_var['apartment_gender'] = 'm';
$trad_var['bed'] = 'letto';
$trad_var['beds'] = 'letti';
$trad_var['bed_gender'] = 'm';
$trad_var['special_characters'] = 'a,e,i,o,u';


if (substr($messaggio, 0, 3) == '[1]') {
    @include(C_DATI_PATH . "/unit_single.php");
    $messaggio = substr($messaggio, 3);
} # fine if substr($messaggio,0,3) == '[1]')
else @include(C_DATI_PATH . "/unit.php");

if ($unit['gender'] == "m") {
    if ($unit['special']) {
        switch ($messaggio) {


# Translations for rental units with MASCULINE name (or no gender) that begins with SPECIAL characters
            case "APPARTAMENTI":
                $messaggio = "[UNITS]";
                break;
            case "Inserisci ora i dati sugli appartamenti":
                $messaggio = "Inserisci ora i dati sugli [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almeno il numero, diverso per ogni [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Numero (o nome) dell'[unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priorità (più bassa è, prima viene assegnato)";
                break;
            case "tutti gli appartamenti":
                $messaggio = "tutti gli [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "Non ci sono [units] con le caratteristiche richieste";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti che possa ospitare";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente in un [unit] tra quelli richiesti";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "verrà spostata dall'[unit]";
                break;
            case "al":
                $messaggio = "al";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nuova prenotazione verrà inserita nell'[unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Se si continua l'assegnazione dell'[unit] <span class=\"colred\">non terrà conto degli [units] richiesti</span>";
                break;
            case "Non ci sono":
                $messaggio = "Non ci sono";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] tra quelli richiesti che possano ospitare";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "L'appartamento":
                $messaggio = "L'[unit]";
                break;
            case "l'appartamento":
                $messaggio = "l'[unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenuto nella lista non esiste";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente negli [units] richiesti";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Riprova senza cercare [units] vicini";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assegnare gli [units] in base alla tariffa scelta con la regola 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Numero di [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Se si deve occupare un [unit] della regola 1 con una delle motivazioni selezionate";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Chiedere il numero di [units] per ogni tipologia?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Numero massimo di [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Parola da utilizzare per indicare gli [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Numero massimo di [units] per tipologia errato";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Si deve inserire la parola per indicare gli [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Senza raggruppare gli [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Raggruppando gli [units] con la regola di assegnazione 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Raggruppando gli [units] per numero di persone";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Mostrare il numero di [units] liberi?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibilità di scegliere l'[unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Quando si sceglie l'[unit] aggiungere il costo aggiuntivo";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibili";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Scegli questo [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Scegli il tuo [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "è stata spostata dall'[unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] non disponibile per la scelta";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiato";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assegnare [units] nelle regole di assegnazione 1 con le motivazioni selezionate?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "elimina i beni dall'inventario dell'[unit] occupato dalla prenotazione";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibili con il costo";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibili";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "assegna automaticamente gli [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista di [units] separati da virgole";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Esiste già una regola di questo tipo nell'[unit] e nel periodo selezionato";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tariffa scelta ha già degli [units] associati, cancella la regola prima di inserirne una nuova";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Si deve inserire almeno un [unit] da associare";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleziona tutti gli [unit]<br> da ";
                break;
            case " persone":
                $messaggio = " persone";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "se c'è almeno un [unit] della regola originale compatibile con il numero di persone";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "Non c'è nessun [unit] che possa ospitare";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "Non c'è nessun [unit] da";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in un [unit] da <b>almeno";
                break;
            case " in un appartamento da":
                $messaggio = " in un [unit] da";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] da";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in un [unit] della <b>tariffa selezionata</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] delle <b>tariffe selezionate</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilità solo negli [units] da";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Ricontrolla la disponibilità negli [units] selezionati";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] vicini";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] vicini delle <b>tariffe selezionate</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario dell'[unit]";
                break;
            case "dell'appartamento":
                $messaggio = "dell'[unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "è già stato cancellato";
                break;
            case "è stato cancellato":
                $messaggio = "è stato cancellato";
                break;
            case "è stato modificato":
                $messaggio = "è stato modificato";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> l'[unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modifica l'[unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Attenzione</b>: le prenotazioni già inserite in questo [unit] <b>non</b> verranno spostate";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Cancella l'[unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "Il nome dell'[unit] verrà cambiato da";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>L'[unit] non è stato cancellato</b> perchè il database è cambiato nel frattempo";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>L'[unit] non è stato modificato</b> perchè il database è cambiato nel frattempo";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Gli [units] vicini verranno cambiati";
                break;
            case "foto dell'appartamento":
                $messaggio = "foto dell'[unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descrizione dell'[unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia metodo per l'assegnazione dell'[unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Nº fisso di [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in tutti gli [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista di [units]";
                break;
            case "separati da virgole":
                $messaggio = "separati da virgole";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "riassegna l'[unit] con la regola 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "L'assegnazione dell'[unit] verrà cambiata dal";
                break;
            case "ad uno tra":
                $messaggio = "ad uno tra";
                break;
            case " quelli del":
                $messaggio = " quelli del";
                break;
            case "quelli della casa":
                $messaggio = "quelli della casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "quelli con massimo numero di occupanti";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "Non ci sono [units] con le <span class=\"colred\">caratteristiche richieste</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "<b>Non</b> c'è nessun [unit] tra quelli richiesti che possa ospitare";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">[unit]</span> tra quelli richiesti";
                break;
            case "nell'appartamento":
                $messaggio = "nell'[unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Sposta nell'[unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "perchè c'è un'altra prenotazione nello stesso [unit] che deve ancora registrare l'uscita";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Le prenotazioni in [units] vicini verranno cambiate da";
                break;
            case "l'attuale appartamento":
                $messaggio = "l'attuale [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "verrà cambiato perchè ha dei beni mancanti nell'inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La prenotazione verrà spostata dall'[unit]";
                break;
            case "fisso":
                $messaggio = "fisso";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° di [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli [units] assegnati)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'[unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Si deve inserire il numero del nuovo [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "verrà aggiunto";
                break;
            case "è stato aggiunto":
                $messaggio = "è stato aggiunto";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabella con tutti gli [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crea un nuovo [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Griglia [units] vicini";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] della tariffa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Percentuale di occupazione degli [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Prezzo medio giornaliero per [unit] occupato";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entrate giornaliere per [unit] disponibile (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entrate giornaliere per [unit] disponibile con costi aggiuntivi";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Magazzini ed [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "degli [units] della tariffa";
                break;
            case "dall'appartamento":
                $messaggio = "dall'[unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "raggruppa gli [units] con la regola di assegnazione 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "raggruppa gli [units] per numero di persone";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "non raggruppare gli [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Secondi dopo i quali abbandonare la ricerca di un [unit] libero";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "Il tempo limite per la ricerca di un [unit] libero è stato cambiato";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minuti durante i quali mantenere gli [units] occupati mentre si sta inserendo una prenotazione";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "I minuti durante i quali occupare gli [units] mentre si inserisce una prenotazione sono stati cambiati";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinazioni predefinite di [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nuova combinazione di [units] aggiunta";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinazione di [units] eliminata";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Metodo per l'assegnazione dell'[unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "Non si può inserire la prenozione senza utilizzare gli [units] della regola di assegnazione 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizza anche gli [units] della regola 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "senza utilizzare gli [units] della regola 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "perchè l'[unit] assegnato non esiste più";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatibile";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcola i costi aggiuntivi sulla prenotazione dell'[unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "I costi sono stati inseriti sulla prenotazione dell'[unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Prenotazioni inseribili e modificabili in tutti i periodi e [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Scelta degli [units] da assegnare";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibilità di modificare gli [units] assegnati";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo spostamenti tra quelli già assegnati";
                break;
            case "e appartamenti consentiti":
                $messaggio = "e [units] consentiti";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibilità di vedere la <i>tabella con gli [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] associati a regole consentite";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "non potrà, per liberare [units], <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "non potrà cambiare <b>l'assegnazione degli [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "potrà cambiare <b>l'assegnazione degli [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "non potrà modificare l'assegnazione degli <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "potrà scegliere di modificare <b>l'[unit]</b> solo tra quelli già assegnati per le prenotazioni del";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "potrà modificare l'assegnazione degli <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli [units] della regola 2, nel";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e gli [units] consentiti dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli [units] consentiti dalle regole di assegnazione";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e gli [units] consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli [units] consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "non potrà vedere la <b>tabella con gli [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associati a regole a lui consentite nella <b>tabella con gli [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere la <b>tabella con gli [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, senza [units] vicini";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibilità di vedere l'<i>inventario degli [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo in [units] consentiti";
                break;
            case "degli appartamenti</b>":
                $messaggio = "degli [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo dei suoi [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e di quelli di utenti appartenenti ai suoi gruppi";
                break;
            case "negli appartamenti":
                $messaggio = "negli [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo nei suoi [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e in quelli di utenti appartenenti ai suoi gruppi";
                break;
            case "lo stesso appartamento":
                $messaggio = "lo stesso [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Inserisci le informazioni sugli [units] dalla";
                break;
            case "tabella appartamenti":
                $messaggio = "tabella [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Gli [units] possono essere creati, cancellati e rinominati";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Si consiglia di inserire almeno la capienza massima per ogni [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considera che le tariffe di HotelDruid fungono anche da tipologie di [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Associa una lista di [units] ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Ogni [unit] può essere associato a più tariffe";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SOSTITUISCI CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "nel nuovo [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Ogni [unit] può contenere al <span class=\"colred\">massimo un ospite</span>";
                break;
            case "chiuso":
                $messaggio = "chiuso";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "per [units] non chiusi";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Si è dovuto assegnare un [unit] della tariffa";
                break;
            case "vicini":
                $messaggio = "vicini";
                break;
            case "un appartamento":
                $messaggio = "un [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Quando si richiedono più [units] o tipologie, cercare [units] vicini";
                break;
            case "":
                $messaggio = "";
                break;
            case "":
                $messaggio = "";
                break;


        } # fine switch ($messaggio)
    } # fine if ($unit['special'])
    else {
        switch ($messaggio) {


# Translations for rental units with MASCULINE name (or no gender) that begins with NORMAL characters
            case "APPARTAMENTI":
                $messaggio = "[UNITS]";
                break;
            case "Inserisci ora i dati sugli appartamenti":
                $messaggio = "Inserisci ora i dati sui [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almeno il numero, diverso per ogni [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Numero (o nome) del [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priorità (più bassa è, prima viene assegnato)";
                break;
            case "tutti gli appartamenti":
                $messaggio = "tutti i [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "Non ci sono [units] con le caratteristiche richieste";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti che possa ospitare";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente in un [unit] tra quelli richiesti";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "verrà spostata dal [unit]";
                break;
            case "al":
                $messaggio = "al";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nuova prenotazione verrà inserita nel [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Se si continua l'assegnazione del [unit] <span class=\"colred\">non terrà conto dei [units] richiesti</span>";
                break;
            case "Non ci sono":
                $messaggio = "Non ci sono";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] tra quelli richiesti che possano ospitare";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "L'appartamento":
                $messaggio = "Il [unit]";
                break;
            case "l'appartamento":
                $messaggio = "il [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenuto nella lista non esiste";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente nei [units] richiesti";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Riprova senza cercare [units] vicini";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "Non c'è nessun [unit] tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assegnare i [units] in base alla tariffa scelta con la regola 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Numero di [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Se si deve occupare un [unit] della regola 1 con una delle motivazioni selezionate";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Chiedere il numero di [units] per ogni tipologia?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Numero massimo di [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Parola da utilizzare per indicare i [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Numero massimo di [units] per tipologia errato";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Si deve inserire la parola per indicare i [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Senza raggruppare i [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Raggruppando i [units] con la regola di assegnazione 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Raggruppando i [units] per numero di persone";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Mostrare il numero di [units] liberi?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibilità di scegliere il [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Quando si sceglie il [unit] aggiungere il costo aggiuntivo";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibili";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Scegli questo [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Scegli il tuo [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "è stata spostata dal [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] non disponibile per la scelta";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiato";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assegnare [units] nelle regole di assegnazione 1 con le motivazioni selezionate?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "elimina i beni dall'inventario del [unit] occupato dalla prenotazione";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibili con il costo";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibili";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "assegna automaticamente i [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista di [units] separati da virgole";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Esiste già una regola di questo tipo nel [unit] e nel periodo selezionato";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tariffa scelta ha già dei [units] associati, cancella la regola prima di inserirne una nuova";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Si deve inserire almeno un [unit] da associare";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleziona tutti i [unit]<br> da ";
                break;
            case " persone":
                $messaggio = " persone";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "se c'è almeno un [unit] della regola originale compatibile con il numero di persone";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "Non c'è nessun [unit] che possa ospitare";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "Non c'è nessun [unit] da";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in un [unit] da <b>almeno";
                break;
            case " in un appartamento da":
                $messaggio = " in un [unit] da";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] da";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in un [unit] della <b>tariffa selezionata</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] delle <b>tariffe selezionate</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilità solo nei [units] da";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Ricontrolla la disponibilità nei [units] selezionati";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] vicini";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] vicini delle <b>tariffe selezionate</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario del [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "del [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "è già stato cancellato";
                break;
            case "è stato cancellato":
                $messaggio = "è stato cancellato";
                break;
            case "è stato modificato":
                $messaggio = "è stato modificato";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> il [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modifica il [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Attenzione</b>: le prenotazioni già inserite in questo [unit] <b>non</b> verranno spostate";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Cancella il [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "Il nome del [unit] verrà cambiato da";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>Il [unit] non è stato cancellato</b> perchè il database è cambiato nel frattempo";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>Il [unit] non è stato modificato</b> perchè il database è cambiato nel frattempo";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "I [units] vicini verranno cambiati";
                break;
            case "foto dell'appartamento":
                $messaggio = "foto del [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descrizione del [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia metodo per l'assegnazione del [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Nº fisso di [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in tutti i [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista di [units]";
                break;
            case "separati da virgole":
                $messaggio = "separati da virgole";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "riassegna il [unit] con la regola 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "L'assegnazione del [unit] verrà cambiata dal";
                break;
            case "ad uno tra":
                $messaggio = "ad uno tra";
                break;
            case " quelli del":
                $messaggio = " quelli del";
                break;
            case "quelli della casa":
                $messaggio = "quelli della casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "quelli con massimo numero di occupanti";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "Non ci sono [units] con le <span class=\"colred\">caratteristiche richieste</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "<b>Non</b> c'è nessun [unit] tra quelli richiesti che possa ospitare";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">[unit]</span> tra quelli richiesti";
                break;
            case "nell'appartamento":
                $messaggio = "nel [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Sposta nel [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "perchè c'è un'altra prenotazione nello stesso [unit] che deve ancora registrare l'uscita";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Le prenotazioni in [units] vicini verranno cambiate da";
                break;
            case "l'attuale appartamento":
                $messaggio = "l'attuale [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "verrà cambiato perchè ha dei beni mancanti nell'inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La prenotazione verrà spostata dal [unit]";
                break;
            case "fisso":
                $messaggio = "fisso";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° di [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra i [units] assegnati)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 del [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Si deve inserire il numero del nuovo [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "verrà aggiunto";
                break;
            case "è stato aggiunto":
                $messaggio = "è stato aggiunto";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabella con tutti i [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crea un nuovo [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Griglia [units] vicini";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] della tariffa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Percentuale di occupazione dei [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Prezzo medio giornaliero per [unit] occupato";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entrate giornaliere per [unit] disponibile (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entrate giornaliere per [unit] disponibile con costi aggiuntivi";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Magazzini e [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "dei [units] della tariffa";
                break;
            case "dall'appartamento":
                $messaggio = "dal [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "raggruppa i [units] con la regola di assegnazione 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "raggruppa i [units] per numero di persone";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "non raggruppare i [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Secondi dopo i quali abbandonare la ricerca di un [unit] libero";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "Il tempo limite per la ricerca di un [unit] libero è stato cambiato";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minuti durante i quali mantenere i [units] occupati mentre si sta inserendo una prenotazione";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "I minuti durante i quali occupare i [units] mentre si inserisce una prenotazione sono stati cambiati";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinazioni predefinite di [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nuova combinazione di [units] aggiunta";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinazione di [units] eliminata";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Metodo per l'assegnazione del [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "Non si può inserire la prenozione senza utilizzare i [units] della regola di assegnazione 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizza anche i [units] della regola 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "senza utilizzare i [units] della regola 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "perchè il [unit] assegnato non esiste più";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatibile";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcola i costi aggiuntivi sulla prenotazione del [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "I costi sono stati inseriti sulla prenotazione del [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Prenotazioni inseribili e modificabili in tutti i periodi e [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Scelta dei [units] da assegnare";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibilità di modificare i [units] assegnati";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo spostamenti tra quelli già assegnati";
                break;
            case "e appartamenti consentiti":
                $messaggio = "e [units] consentiti";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibilità di vedere la <i>tabella con i [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] associati a regole consentite";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "non potrà, per liberare [units], <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "non potrà cambiare <b>l'assegnazione dei [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "potrà cambiare <b>l'assegnazione dei [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "non potrà modificare l'assegnazione dei <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "potrà scegliere di modificare <b>il [unit]</b> solo tra quelli già assegnati per le prenotazioni del";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "potrà modificare l'assegnazione dei <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola ai [units] della regola 2, nel";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e i [units] consentiti dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e i [units] consentiti dalle regole di assegnazione";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e i [units] consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e i [units] consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "non potrà vedere la <b>tabella con i [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associati a regole a lui consentite nella <b>tabella con i [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con i [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere la <b>tabella con i [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, senza [units] vicini";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibilità di vedere l'<i>inventario dei [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo in [units] consentiti";
                break;
            case "degli appartamenti</b>":
                $messaggio = "dei [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo dei suoi [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e di quelli di utenti appartenenti ai suoi gruppi";
                break;
            case "negli appartamenti":
                $messaggio = "nei [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo nei suoi [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e in quelli di utenti appartenenti ai suoi gruppi";
                break;
            case "lo stesso appartamento":
                $messaggio = "lo stesso [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Inserisci le informazioni sui [units] dalla";
                break;
            case "tabella appartamenti":
                $messaggio = "tabella [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "I [units] possono essere creati, cancellati e rinominati";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Si consiglia di inserire almeno la capienza massima per ogni [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considera che le tariffe di HotelDruid fungono anche da tipologie di [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Associa una lista di [units] ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Ogni [unit] può essere associato a più tariffe";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SOSTITUISCI CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "nel nuovo [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Ogni [unit] può contenere al <span class=\"colred\">massimo un ospite</span>";
                break;
            case "chiuso":
                $messaggio = "chiuso";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "per [units] non chiusi";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Si è dovuto assegnare un [unit] della tariffa";
                break;
            case "vicini":
                $messaggio = "vicini";
                break;
            case "un appartamento":
                $messaggio = "un [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Quando si richiedono più [units] o tipologie, cercare [units] vicini";
                break;
            case "":
                $messaggio = "";
                break;
            case "":
                $messaggio = "";
                break;


        } # fine switch ($messaggio)
    } # fine else if ($unit['special'])
} # fine if ($unit['gender'] == "m")
else {
    if ($unit['special']) {
        switch ($messaggio) {


# Translations for rental units with FEMENINE name that begins with SPECIAL characters
            case "APPARTAMENTI":
                $messaggio = "[UNITS]";
                break;
            case "Inserisci ora i dati sugli appartamenti":
                $messaggio = "Inserisci ora i dati sulle [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almeno il numero, diverso per ogni [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Numero (o nome) dell'[unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priorità (più bassa è, prima viene assegnata)";
                break;
            case "tutti gli appartamenti":
                $messaggio = "tutte le [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "Non ci sono [units] con le caratteristiche richieste";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste che possa ospitare";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente in un'[unit] tra quelle richieste";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "verrà spostata dall'[unit]";
                break;
            case "al":
                $messaggio = "alla";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nuova prenotazione verrà inserita nell'[unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Se si continua l'assegnazione dell'[unit] <span class=\"colred\">non terrà conto delle [units] richieste</span>";
                break;
            case "Non ci sono":
                $messaggio = "Non ci sono";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] tra quelle richieste che possano ospitare";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] tra quelle richieste in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "L'appartamento":
                $messaggio = "L'[unit]";
                break;
            case "l'appartamento":
                $messaggio = "l'[unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenuta nella lista non esiste";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente nelle [units] richieste";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Riprova senza cercare [units] vicine";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste che sia compatibile con i costi aggiuntivi selezionati";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assegnare le [units] in base alla tariffa scelta con la regola 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Numero di [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Se si deve occupare una [unit] della regola 1 con una delle motivazioni selezionate";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Chiedere il numero di [units] per ogni tipologia?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Numero massimo di [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Parola da utilizzare per indicare le [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Numero massimo di [units] per tipologia errato";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Si deve inserire la parola per indicare le [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Senza raggruppare le [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Raggruppando le [units] con la regola di assegnazione 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Raggruppando le [units] per numero di persone";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Mostrare il numero di [units] libere?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibilità di scegliere l'[unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Quando si sceglie l'[unit] aggiungere il costo aggiuntivo";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibili";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Scegli questa [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Scegli la tua [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "è stata spostata dall'[unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] non disponibile per la scelta";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiata";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assegnare [units] nelle regole di assegnazione 1 con le motivazioni selezionate?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "elimina i beni dall'inventario dell'[unit] occupata dalla prenotazione";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibili con il costo";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibili";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "assegna automaticamente le [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista di [units] separate da virgole";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Esiste già una regola di questo tipo nell'[unit] e nel periodo selezionati";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tariffa scelta ha già delle [units] associate, cancella la regola prima di inserirne una nuova";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Si deve inserire almeno una [unit] da associare";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleziona tutte le [unit]<br> da ";
                break;
            case " persone":
                $messaggio = " persone";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "se c'è almeno una [unit] della regola originale compatibile con il numero di persone";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "Non c'è nessuna [unit] che possa ospitare";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "Non c'è nessuna [unit] da";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in una [unit] da <b>almeno";
                break;
            case " in un appartamento da":
                $messaggio = " in una [unit] da";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] da";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in una [unit] della <b>tariffa selezionata</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] delle <b>tariffe selezionate</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilità solo nelle [units] da";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Ricontrolla la disponibilità nelle [units] selezionate";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] vicine";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] vicine delle <b>tariffe selezionate</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario dell'[unit]";
                break;
            case "dell'appartamento":
                $messaggio = "dell'[unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "è già stata cancellata";
                break;
            case "è stato cancellato":
                $messaggio = "è stata cancellata";
                break;
            case "è stato modificato":
                $messaggio = "è stata modificata";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> l'[unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modifica l'[unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Attenzione</b>: le prenotazioni già inserite in questa [unit] <b>non</b> verranno spostate";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Cancella l'[unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "Il nome dell'[unit] verrà cambiato da";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>L'[unit] non è stata cancellata</b> perchè il database è cambiato nel frattempo";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>L'[unit] non è stata modificata</b> perchè il database è cambiato nel frattempo";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Le [units] vicine verranno cambiate";
                break;
            case "foto dell'appartamento":
                $messaggio = "foto dell'[unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descrizione dell'[unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia metodo per l'assegnazione dell'[unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Nº fisso di [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in tutti le [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista di [units]";
                break;
            case "separati da virgole":
                $messaggio = "separate da virgole";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "riassegna l'[unit] con la regola 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "L'assegnazione dell'[unit] verrà cambiata dal";
                break;
            case "ad uno tra":
                $messaggio = "ad una tra";
                break;
            case " quelli del":
                $messaggio = " quelle del";
                break;
            case "quelli della casa":
                $messaggio = "quelle della casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "quelle con massimo numero di occupanti";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "Non ci sono [units] con le <span class=\"colred\">caratteristiche richieste</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "<b>Non</b> c'è nessuna [unit] tra quelle richieste che possa ospitare";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un'<span class=\"colred\">[unit]</span> tra quelle richieste";
                break;
            case "nell'appartamento":
                $messaggio = "nell'[unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Sposta nell'[unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "perchè c'è un'altra prenotazione nella stessa [unit] che deve ancora registrare l'uscita";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Le prenotazioni in [units] vicine verranno cambiate da";
                break;
            case "l'attuale appartamento":
                $messaggio = "l'attuale [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "verrà cambiata perchè ha dei beni mancanti nell'inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La prenotazione verrà spostata dall'[unit]";
                break;
            case "fisso":
                $messaggio = "fissa";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° di [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dalla loro [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra le [units] assegnate)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'[unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Si deve inserire il numero della nuova [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "verrà aggiunta";
                break;
            case "è stato aggiunto":
                $messaggio = "è stato aggiunta";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabella con tutte le [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crea una nuova [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Griglia [units] vicine";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] della tariffa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Percentuale di occupazione delle [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Prezzo medio giornaliero per [unit] occupata";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entrate giornaliere per [unit] disponibile (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entrate giornaliere per [unit] disponibile con costi aggiuntivi";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Magazzini ed [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "delle [units] della tariffa";
                break;
            case "dall'appartamento":
                $messaggio = "dall'[unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "raggruppa le [units] con la regola di assegnazione 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "raggruppa le [units] per numero di persone";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "non raggruppare le [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Secondi dopo i quali abbandonare la ricerca di un'[unit] libera";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "Il tempo limite per la ricerca di un'[unit] libera è stato cambiato";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minuti durante i quali mantenere le [units] occupate mentre si sta inserendo una prenotazione";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "I minuti durante i quali occupare le [units] mentre si inserisce una prenotazione sono stati cambiati";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinazioni predefinite di [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nuova combinazione di [units] aggiunta";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinazione di [units] eliminata";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Metodo per l'assegnazione dell'[unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "Non si può inserire la prenozione senza utilizzare le [units] della regola di assegnazione 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizza anche le [units] della regola 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "senza utilizzare le [units] della regola 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "perchè l'[unit] assegnata non esiste più";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatibile";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcola i costi aggiuntivi sulla prenotazione dell'[unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "I costi sono stati inseriti sulla prenotazione dell'[unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Prenotazioni inseribili e modificabili in tutti i periodi e [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Scelta delle [units] da assegnare";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibilità di modificare le [units] assegnate";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo spostamenti tra quelle già assegnate";
                break;
            case "e appartamenti consentiti":
                $messaggio = "e [units] consentite";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibilità di vedere la <i>tabella con le [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] associate a regole consentite";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "non potrà, per liberare [units], <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "non potrà cambiare <b>l'assegnazione delle [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "potrà cambiare <b>l'assegnazione delle [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "non potrà modificare l'assegnazione delle <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "potrà scegliere di modificare <b>l'[unit]</b> solo tra quelle già assegnate per le prenotazioni del";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "potrà modificare l'assegnazione delle <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola alle [units] della regola 2, nel";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e le [units] consentite dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e le [units] consentite dalle regole di assegnazione";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e le [units] consentite a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e le [units] consentite a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "non potrà vedere la <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associate a regole a lui consentite nella <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associate a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere la <b>tabella con le [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, senza [units] vicine";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibilità di vedere l'<i>inventario delle [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo in [units] consentite";
                break;
            case "degli appartamenti</b>":
                $messaggio = "delle [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo delle sue [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e di quelle di utenti appartenenti ai suoi gruppi";
                break;
            case "negli appartamenti":
                $messaggio = "nelle [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo nelle sue [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e in quelle di utenti appartenenti ai suoi gruppi";
                break;
            case "lo stesso appartamento":
                $messaggio = "la stessa [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Inserisci le informazioni sulle [units] dalla";
                break;
            case "tabella appartamenti":
                $messaggio = "tabella [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Le [units] possono essere create, cancellate e rinominate";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Si consiglia di inserire almeno la capienza massima per ogni [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considera che le tariffe di HotelDruid fungono anche da tipologie di [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Associa una lista di [units] ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Ogni [unit] può essere associata a più tariffe";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SOSTITUISCI CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "nella nuova [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Ogni [unit] può contenere al <span class=\"colred\">massimo un ospite</span>";
                break;
            case "chiuso":
                $messaggio = "chiusa";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "per [units] non chiuse";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Si è dovuta assegnare una [unit] della tariffa";
                break;
            case "vicini":
                $messaggio = "vicine";
                break;
            case "un appartamento":
                $messaggio = "una [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Quando si richiedono più [units] o tipologie, cercare [units] vicine";
                break;
            case "":
                $messaggio = "";
                break;
            case "":
                $messaggio = "";
                break;


        } # fine switch ($messaggio)
    } # fine if ($unit['special'])
    else {
        switch ($messaggio) {


# Translations for rental units with FEMENINE name that begins with NORMAL characters
            case "APPARTAMENTI":
                $messaggio = "[UNITS]";
                break;
            case "Inserisci ora i dati sugli appartamenti":
                $messaggio = "Inserisci ora i dati sulle [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almeno il numero, diverso per ogni [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Numero (o nome) della [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priorità (più bassa è, prima viene assegnata)";
                break;
            case "tutti gli appartamenti":
                $messaggio = "tutte le [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "Non ci sono [units] con le caratteristiche richieste";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste che possa ospitare";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente in una [unit] tra quelle richieste";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "verrà spostata dalla [unit]";
                break;
            case "al":
                $messaggio = "alla";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nuova prenotazione verrà inserita nella [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Se si continua l'assegnazione della [unit] <span class=\"colred\">non terrà conto delle [units] richieste</span>";
                break;
            case "Non ci sono":
                $messaggio = "Non ci sono";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] tra quelle richieste che possano ospitare";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] tra quelle richieste in cui sia consentito inserire prenotazioni per l'utente";
                break;
            case "L'appartamento":
                $messaggio = "La [unit]";
                break;
            case "l'appartamento":
                $messaggio = "la [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenuta nella lista non esiste";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "Nel periodo selezionato non è possibile ospitare il cliente nelle [units] richieste";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Riprova senza cercare [units] vicine";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "Non c'è nessuna [unit] tra quelle richieste che sia compatibile con i costi aggiuntivi selezionati";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assegnare le [units] in base alla tariffa scelta con la regola 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Numero di [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Se si deve occupare una [unit] della regola 1 con una delle motivazioni selezionate";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Chiedere il numero di [units] per ogni tipologia?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Numero massimo di [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Parola da utilizzare per indicare le [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Numero massimo di [units] per tipologia errato";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Si deve inserire la parola per indicare le [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Senza raggruppare le [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Raggruppando le [units] con la regola di assegnazione 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Raggruppando le [units] per numero di persone";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Mostrare il numero di [units] libere?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibilità di scegliere la [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Quando si sceglie la [unit] aggiungere il costo aggiuntivo";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibili";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Scegli questa [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Scegli la tua [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "è stata spostata dalla [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] non disponibile per la scelta";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiata";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assegnare [units] nelle regole di assegnazione 1 con le motivazioni selezionate?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "elimina i beni dall'inventario della [unit] occupata dalla prenotazione";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibili con il costo";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibili";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "assegna automaticamente le [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista di [units] separate da virgole";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Esiste già una regola di questo tipo nella [unit] e nel periodo selezionati";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tariffa scelta ha già delle [units] associate, cancella la regola prima di inserirne una nuova";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Si deve inserire almeno una [unit] da associare";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleziona tutte le [unit]<br> da ";
                break;
            case " persone":
                $messaggio = " persone";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "se c'è almeno una [unit] della regola originale compatibile con il numero di persone";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "Non c'è nessuna [unit] che possa ospitare";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "Non c'è nessuna [unit] da";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in una [unit] da <b>almeno";
                break;
            case " in un appartamento da":
                $messaggio = " in una [unit] da";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] da";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in una [unit] della <b>tariffa selezionata</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] delle <b>tariffe selezionate</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilità solo nelle [units] da";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Ricontrolla la disponibilità nelle [units] selezionate";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] vicine";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] vicine delle <b>tariffe selezionate</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario della [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "della [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "è già stata cancellata";
                break;
            case "è stato cancellato":
                $messaggio = "è stata cancellata";
                break;
            case "è stato modificato":
                $messaggio = "è stata modificata";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> la [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modifica la [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Attenzione</b>: le prenotazioni già inserite in questa [unit] <b>non</b> verranno spostate";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Cancella la [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "Il nome della [unit] verrà cambiato da";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] non è stata cancellata</b> perchè il database è cambiato nel frattempo";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] non è stata modificata</b> perchè il database è cambiato nel frattempo";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Le [units] vicine verranno cambiate";
                break;
            case "foto dell'appartamento":
                $messaggio = "foto della [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descrizione della [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia metodo per l'assegnazione della [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Nº fisso di [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in tutti le [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista di [units]";
                break;
            case "separati da virgole":
                $messaggio = "separate da virgole";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "riassegna la [unit] con la regola 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "L'assegnazione della [unit] verrà cambiata dal";
                break;
            case "ad uno tra":
                $messaggio = "ad una tra";
                break;
            case " quelli del":
                $messaggio = " quelle del";
                break;
            case "quelli della casa":
                $messaggio = "quelle della casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "quelle con massimo numero di occupanti";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "Non ci sono [units] con le <span class=\"colred\">caratteristiche richieste</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "<b>Non</b> c'è nessuna [unit] tra quelle richieste che possa ospitare";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in una <span class=\"colred\">[unit]</span> tra quelle richieste";
                break;
            case "nell'appartamento":
                $messaggio = "nella [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Sposta nella [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "perchè c'è un'altra prenotazione nella stessa [unit] che deve ancora registrare l'uscita";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Le prenotazioni in [units] vicine verranno cambiate da";
                break;
            case "l'attuale appartamento":
                $messaggio = "l'attuale [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "verrà cambiata perchè ha dei beni mancanti nell'inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La prenotazione verrà spostata dalla [unit]";
                break;
            case "fisso":
                $messaggio = "fissa";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° di [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dalla loro [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra le [units] assegnate)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 della [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Si deve inserire il numero della nuova [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "verrà aggiunta";
                break;
            case "è stato aggiunto":
                $messaggio = "è stato aggiunta";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabella con tutte le [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crea una nuova [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Griglia [units] vicine";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] della tariffa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Percentuale di occupazione delle [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Prezzo medio giornaliero per [unit] occupata";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entrate giornaliere per [unit] disponibile (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entrate giornaliere per [unit] disponibile con costi aggiuntivi";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Magazzini e [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "delle [units] della tariffa";
                break;
            case "dall'appartamento":
                $messaggio = "dalla [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "raggruppa le [units] con la regola di assegnazione 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "raggruppa le [units] per numero di persone";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "non raggruppare le [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Secondi dopo i quali abbandonare la ricerca di una [unit] libera";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "Il tempo limite per la ricerca di una [unit] libera è stato cambiato";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minuti durante i quali mantenere le [units] occupate mentre si sta inserendo una prenotazione";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "I minuti durante i quali occupare le [units] mentre si inserisce una prenotazione sono stati cambiati";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinazioni predefinite di [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nuova combinazione di [units] aggiunta";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinazione di [units] eliminata";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Metodo per l'assegnazione della [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "Non si può inserire la prenozione senza utilizzare le [units] della regola di assegnazione 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizza anche le [units] della regola 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "senza utilizzare le [units] della regola 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "perchè la [unit] assegnata non esiste più";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatibile";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcola i costi aggiuntivi sulla prenotazione della [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "I costi sono stati inseriti sulla prenotazione della [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Prenotazioni inseribili e modificabili in tutti i periodi e [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Scelta delle [units] da assegnare";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibilità di modificare le [units] assegnate";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo spostamenti tra quelle già assegnate";
                break;
            case "e appartamenti consentiti":
                $messaggio = "e [units] consentite";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibilità di vedere la <i>tabella con le [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] associate a regole consentite";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "non potrà, per liberare [units], <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "non potrà cambiare <b>l'assegnazione delle [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "potrà cambiare <b>l'assegnazione delle [units]</b> quando inserisce nuove prenotazioni nel";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "non potrà modificare l'assegnazione delle <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "potrà scegliere di modificare <b>la [unit]</b> solo tra quelle già assegnate per le prenotazioni del";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "potrà modificare l'assegnazione delle <b>[units]</b> delle prenotazioni nel";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola alle [units] della regola 2, nel";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e le [units] consentite dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e le [units] consentite dalle regole di assegnazione";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le proprie prenotazioni e le [units] consentite a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e le [units] consentite a lui e ad utenti dei suoi gruppi dalle regole di assegnazione";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "non potrà vedere la <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associate a regole a lui consentite nella <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere solo [units] associate a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con le [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "potrà vedere la <b>tabella con le [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, senza [units] vicine";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibilità di vedere l'<i>inventario delle [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo in [units] consentite";
                break;
            case "degli appartamenti</b>":
                $messaggio = "delle [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo delle sue [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e di quelle di utenti appartenenti ai suoi gruppi";
                break;
            case "negli appartamenti":
                $messaggio = "nelle [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo nelle sue [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "e in quelle di utenti appartenenti ai suoi gruppi";
                break;
            case "lo stesso appartamento":
                $messaggio = "la stessa [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Inserisci le informazioni sulle [units] dalla";
                break;
            case "tabella appartamenti":
                $messaggio = "tabella [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Le [units] possono essere create, cancellate e rinominate";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Si consiglia di inserire almeno la capienza massima per ogni [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considera che le tariffe di HotelDruid fungono anche da tipologie di [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Associa una lista di [units] ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Ogni [unit] può essere associata a più tariffe";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SOSTITUISCI CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "nella nuova [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Ogni [unit] può contenere al <span class=\"colred\">massimo un ospite</span>";
                break;
            case "chiuso":
                $messaggio = "chiusa";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "per [units] non chiuse";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Si è dovuta assegnare una [unit] della tariffa";
                break;
            case "vicini":
                $messaggio = "vicine";
                break;
            case "un appartamento":
                $messaggio = "una [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Quando si richiedono più [units] o tipologie, cercare [units] vicine";
                break;
            case "":
                $messaggio = "";
                break;
            case "":
                $messaggio = "";
                break;


        } # fine switch ($messaggio)
    } # fine else if ($unit['special'])
} # fine if else if ($unit['gender'] == "m")
$messaggio = str_replace("[unit]", $unit['s_n'], $messaggio);
$messaggio = str_replace("[units]", $unit['p_n'], $messaggio);
$messaggio = str_replace("[Unit]", ucfirst($unit['s_n']), $messaggio);
$messaggio = str_replace("[Units]", ucfirst($unit['p_n']), $messaggio);
$messaggio = str_replace("[UNIT]", strtoupper($unit['s_n']), $messaggio);
$messaggio = str_replace("[UNITS]", strtoupper($unit['p_n']), $messaggio);


?>
