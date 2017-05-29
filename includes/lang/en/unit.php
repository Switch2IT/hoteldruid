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
$trad_var['room'] = 'room';
$trad_var['rooms'] = 'rooms';
$trad_var['room_gender'] = 'm';
$trad_var['apartment'] = 'apartment';
$trad_var['apartments'] = 'apartments';
$trad_var['apartment_gender'] = 'm';
$trad_var['bed'] = 'bed';
$trad_var['beds'] = 'beds';
$trad_var['bed_gender'] = 'm';
$trad_var['special_characters'] = 'a,e,i,o,ha,he,hi,ho';


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
                $messaggio = "Insert now the data about [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "at least the number, different for each [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Number (or name) of the [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priority (the lower is assigned first)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Insert the data about [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "all the [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "There are no [units] with the requested features";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There are no [units] between the requested ones that can accomodate";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "In the selected period is not possible to accomodate the client in an [unit] between the requested ones";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "will be moved from [unit]";
                break;
            case "al":
                $messaggio = "to";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "The new reservation will be inserted in the [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "If you continue the [unit] assignment <span class=\"colred\">will not respect the requested [units]</span>";
                break;
            case "Non ci sono":
                $messaggio = "There are not";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] between the requested ones that can accomodate";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "There are no [units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "L'appartamento":
                $messaggio = "The [unit]";
                break;
            case "l'appartamento":
                $messaggio = "the [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "included in the list does not exist";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "In the requested period it is not possible to accomodate the client in the requested [units]";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Try again without searching nearby [units]";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "There are no [units] between the requested ones that are compatible with selected extra costs";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assign [units] depending on the choosen rate with rule 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Number of [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "If an [unit] from rule 1 with one of the choosen motivations must be occupied";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Ask the number of [units] for each type?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Maximum number of [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Word to be used to indicate the [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Maximum number of [units] for types is wrong";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "You must insert the word to indicate the [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Without grouping [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Grouping [units] with assignment rule 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Grouping [units] by number of people";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Show the number of free [units]?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibility to choose the [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "When choosing an [unit] add extra cost";
                break;
            case "Appartamenti disponibili":
                $messaggio = "Available [units]";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Choose this [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Choose your [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Change [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "has been moved from [unit]";
                $tr = 1;
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] not available for choosing";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] changed";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assign [units] inside assignement rules 1 with selected motivations?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Delete items from inventory of the [unit] occupied by the reservation";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] that are incompatible with the cost";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "Incompatible [units]";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "automatically assign [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "comma separated list of [units]";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "A rule of this kind already exists for the [unit] and period selected";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "The choosen rate has already some assigned [units], delete the rule before inserting a new one";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "You must insert at least one [unit] to assign to";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Select all ";
                break;
            case " persone":
                $messaggio = " people<br> [units]";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "if there is at least one [unit] from the original rule compatible with the number of people";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "There are no [units] that can accomodate";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "There are no [units] for";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in an [unit] for <b>at least";
                break;
            case " in un appartamento da":
                $messaggio = " in an [unit] for";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] for";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in an [unit] of the <b>selected rate</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] of the <b>selected rates</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "availability only in [units] for";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Check again availability in selected [units]";
                break;
            case "Appartamenti vicini":
                $messaggio = "Nearby [units]";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "Nearby [units] of the <b>selected rates</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventory of [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "of [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "has already been deleted";
                break;
            case "è stato cancellato":
                $messaggio = "has been deleted";
                break;
            case "è stato modificato":
                $messaggio = "has been modified";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modify [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Warning</b>: the reservations already inserted in this [unit] will <b>not</b> be moved";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Delete [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "The [unit] name will be changed from";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been deleted</b> because the database has been modified meanwhile";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been modified</b> because the database has been modified meanwhile";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "The nearby [units] will be changed";
                break;
            case "foto dell'appartamento":
                $messaggio = "photos of [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "description of [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Change the method for the [unit] assignment";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Fixed [unit] No";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in all the [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "[Units] list";
                break;
            case "separati da virgole":
                $messaggio = "comma separated";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reassign the [unit] with rule 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "The [unit] assignment will be changed from";
                break;
            case "ad uno tra":
                $messaggio = "to an [unit] between";
                break;
            case " quelli del":
                $messaggio = " one of those from floor";
                break;
            case "quelli della casa":
                $messaggio = "one of those from house";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "one of those with maximum number of hosted people";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "There are no [units] with the <span class=\"colred\">requested features</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There is <b>no</b> [unit] between the requested ones that can host";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "In the selected period it's <b>not</b> possible to host the client in an <span class=\"colred\">[unit]</span> between the requested ones";
                break;
            case "nell'appartamento":
                $messaggio = "in [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Move in [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "because there is another reservation in the same [unit] that must still register check-out";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "The reservations in nearby [units] will be changed from";
                break;
            case "l'attuale appartamento":
                $messaggio = "current [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "will be changed because it has some missing inventory items";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "The reservation will be moved from [unit]";
                break;
            case "fisso":
                $messaggio = "fixed";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° of [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Automatic assignment disabled (reservations will not be moved from their [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Automatic assignment enabled (reservations can be moved between assigned [units])";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> the assignment rule 1 for the [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "You must insert the number of the new [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "will be added";
                break;
            case "è stato aggiunto":
                $messaggio = "has been added";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Table with all the [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Create new [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Nearby [units] grid";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] from rate";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "[Units] percentage occupancy";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Average daily price per occupied [unit]";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Daily incomes per available [unit] (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Daily incomes per available [unit] with extra costs";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Stockrooms and [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "of [units] of rate";
                break;
            case "dall'appartamento":
                $messaggio = "from [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "group [units] with assignment rule 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "group [units] by number of people";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "do not group [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Seconds after which give up researching a free [unit]";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "The time limit for researching a free [unit] has been changed";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutes during which mantain occupied the [units] meanwhile a reservation is being inserted";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "The minutes to keep occupied the [units] during a reservation insertion have been changed";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Predefined [units] combinations";
                break;
            case "lista appartamenti":
                $messaggio = "[units] list";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "New [units] combination added";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "[Units] combination deleted";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Method for the [unit] assignment";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "The reservation can't be inserted without using [units] from the assignment rule 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Use also [units] from rule 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "without using [units] from rule 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "because the assigned [unit] doesn't exist anymore";
                break;
            case "appartamento incompatibile":
                $messaggio = "incompatible [unit]";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calculate extra costs on reservation from [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Costs have been inserted on reservation from [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservations insertable and modifiable in all periods and [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Choose the [units] to be assigned";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibility to modify the assigned [units]";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Only movements between already assigned ones";
                break;
            case "e appartamenti consentiti":
                $messaggio = "and [units] permitted";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibility to view the <i>table with [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Only [units] associated with rules permitted";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "will not be able, to free [units], to <b>move</b> reservations in not selected periods of rule 1 of";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will not be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will not be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "will be able to modify the <b>[unit]</b> only between already assigned ones for reservations in";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "will be able to modify the <b>rate</b> of reservations, but always associating it with [units] of rule 2, in";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will not be able to view the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him and to users of his groups in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view the <b>table with the [units]</b> of";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Yes, without nearby [units]";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibility to view <i>[units] inventory</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Only in [units] permitted";
                break;
            case "degli appartamenti</b>":
                $messaggio = "of [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "only of his own [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and of those from users belonging to his groups";
                break;
            case "negli appartamenti":
                $messaggio = "in [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "only in is own [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and in those from users belonging to his groups";
                break;
            case "lo stesso appartamento":
                $messaggio = "the same [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insert the information about the [units] from the";
                break;
            case "tabella appartamenti":
                $messaggio = "[units] table";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "The [units] can be created, deleted and renamed";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "It is recommended to insert at least the maximum capacity for each [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Consider that HotelDruid rates also act as [unit] types";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Assign a list of [units] to each rate, inserting an assignment rule 2 for each one of them, from the";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Each [unit] can be assigned to more than one rate";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "REPLACE WITH LIST OF [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "in new [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Each [unit] can contain <span class=\"colred\">only one guest</span>";
                break;
            case "chiuso":
                $messaggio = "closed";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "for [units] not closed";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "It had to be assigned an [unit] from rate";
                break;
            case "vicini":
                $messaggio = "nearby";
                break;
            case "un appartamento":
                $messaggio = "an [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "When more [units] or types are requested, search for nearby [units]";
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
                $messaggio = "Insert now the data about [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "at least the number, different for each [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Number (or name) of the [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priority (the lower is assigned first)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Insert the data about [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "all the [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "There are no [units] with the requested features";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There are no [units] between the requested ones that can accomodate";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "In the selected period is not possible to accomodate the client in a [unit] between the requested ones";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "will be moved from [unit]";
                break;
            case "al":
                $messaggio = "to";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "The new reservation will be inserted in the [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "If you continue the [unit] assignment <span class=\"colred\">will not respect the requested [units]</span>";
                break;
            case "Non ci sono":
                $messaggio = "There are not";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] between the requested ones that can accomodate";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "There are no [units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "L'appartamento":
                $messaggio = "The [unit]";
                break;
            case "l'appartamento":
                $messaggio = "the [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "included in the list does not exist";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "In the requested period it is not possible to accomodate the client in the requested [units]";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Try again without searching nearby [units]";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "There are no [units] between the requested ones that are compatible with selected extra costs";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assign [units] depending on the choosen rate with rule 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Number of [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "If a [unit] from rule 1 with one of the choosen motivations must be occupied";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Ask the number of [units] for each type?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Maximum number of [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Word to be used to indicate the [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Maximum number of [units] for types is wrong";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "You must insert the word to indicate the [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Without grouping [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Grouping [units] with assignment rule 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Grouping [units] by number of people";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Show the number of free [units]?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibility to choose the [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "When choosing a [unit] add extra cost";
                break;
            case "Appartamenti disponibili":
                $messaggio = "Available [units]";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Choose this [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Choose your [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Change [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "has been moved from [unit]";
                $tr = 1;
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] not available for choosing";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] changed";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assign [units] inside assignement rules 1 with selected motivations?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Delete items from inventory of the [unit] occupied by the reservation";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] that are incompatible with the cost";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "Incompatible [units]";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "automatically assign [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "comma separated list of [units]";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "A rule of this kind already exists for the [unit] and period selected";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "The choosen rate has already some assigned [units], delete the rule before inserting a new one";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "You must insert at least one [unit] to assign to";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Select all ";
                break;
            case " persone":
                $messaggio = " people<br> [units]";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "if there is at least one [unit] from the original rule compatible with the number of people";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "There are no [units] that can accomodate";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "There are no [units] for";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in a [unit] for <b>at least";
                break;
            case " in un appartamento da":
                $messaggio = " in a [unit] for";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] for";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in a [unit] of the <b>selected rate</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] of the <b>selected rates</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "availability only in [units] for";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Check again availability in selected [units]";
                break;
            case "Appartamenti vicini":
                $messaggio = "Nearby [units]";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "Nearby [units] of the <b>selected rates</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventory of [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "of [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "has already been deleted";
                break;
            case "è stato cancellato":
                $messaggio = "has been deleted";
                break;
            case "è stato modificato":
                $messaggio = "has been modified";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modify [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Warning</b>: the reservations already inserted in this [unit] will <b>not</b> be moved";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Delete [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "The [unit] name will be changed from";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been deleted</b> because the database has been modified meanwhile";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been modified</b> because the database has been modified meanwhile";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "The nearby [units] will be changed";
                break;
            case "foto dell'appartamento":
                $messaggio = "photos of [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "description of [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Change the method for the [unit] assignment";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Fixed [unit] No";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in all the [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "[Units] list";
                break;
            case "separati da virgole":
                $messaggio = "comma separated";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reassign the [unit] with rule 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "The [unit] assignment will be changed from";
                break;
            case "ad uno tra":
                $messaggio = "to a [unit] between";
                break;
            case " quelli del":
                $messaggio = " one of those from floor";
                break;
            case "quelli della casa":
                $messaggio = "one of those from house";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "one of those with maximum number of hosted people";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "There are no [units] with the <span class=\"colred\">requested features</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There is <b>no</b> [unit] between the requested ones that can host";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "In the selected period it's <b>not</b> possible to host the client in a <span class=\"colred\">[unit]</span> between the requested ones";
                break;
            case "nell'appartamento":
                $messaggio = "in [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Move in [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "because there is another reservation in the same [unit] that must still register check-out";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "The reservations in nearby [units] will be changed from";
                break;
            case "l'attuale appartamento":
                $messaggio = "current [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "will be changed because it has some missing inventory items";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "The reservation will be moved from [unit]";
                break;
            case "fisso":
                $messaggio = "fixed";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° of [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Automatic assignment disabled (reservations will not be moved from their [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Automatic assignment enabled (reservations can be moved between assigned [units])";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> the assignment rule 1 for the [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "You must insert the number of the new [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "will be added";
                break;
            case "è stato aggiunto":
                $messaggio = "has been added";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Table with all the [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Create new [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Nearby [units] grid";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] from rate";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "[Units] percentage occupancy";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Average daily price per occupied [unit]";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Daily incomes per available [unit] (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Daily incomes per available [unit] with extra costs";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Stockrooms and [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "of [units] of rate";
                break;
            case "dall'appartamento":
                $messaggio = "from [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "group [units] with assignment rule 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "group [units] by number of people";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "do not group [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Seconds after which give up researching a free [unit]";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "The time limit for researching a free [unit] has been changed";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutes during which mantain occupied the [units] meanwhile a reservation is being inserted";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "The minutes to keep occupied the [units] during a reservation insertion have been changed";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Predefined [units] combinations";
                break;
            case "lista appartamenti":
                $messaggio = "[units] list";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "New [units] combination added";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "[Units] combination deleted";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Method for the [unit] assignment";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "The reservation can't be inserted without using [units] from the assignment rule 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Use also [units] from rule 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "without using [units] from rule 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "because the assigned [unit] doesn't exist anymore";
                break;
            case "appartamento incompatibile":
                $messaggio = "incompatible [unit]";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calculate extra costs on reservation from [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Costs have been inserted on reservation from [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservations insertable and modifiable in all periods and [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Choose the [units] to be assigned";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibility to modify the assigned [units]";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Only movements between already assigned ones";
                break;
            case "e appartamenti consentiti":
                $messaggio = "and [units] permitted";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibility to view the <i>table with [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Only [units] associated with rules permitted";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "will not be able, to free [units], to <b>move</b> reservations in not selected periods of rule 1 of";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will not be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will not be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "will be able to modify the <b>[unit]</b> only between already assigned ones for reservations in";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "will be able to modify the <b>rate</b> of reservations, but always associating it with [units] of rule 2, in";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will not be able to view the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him and to users of his groups in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view the <b>table with the [units]</b> of";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Yes, without nearby [units]";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibility to view <i>[units] inventory</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Only in [units] permitted";
                break;
            case "degli appartamenti</b>":
                $messaggio = "of [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "only of his own [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and of those from users belonging to his groups";
                break;
            case "negli appartamenti":
                $messaggio = "in [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "only in is own [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and in those from users belonging to his groups";
                break;
            case "lo stesso appartamento":
                $messaggio = "the same [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insert the information about the [units] from the";
                break;
            case "tabella appartamenti":
                $messaggio = "[units] table";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "The [units] can be created, deleted and renamed";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "It is recommended to insert at least the maximum capacity for each [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Consider that HotelDruid rates also act as [unit] types";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Assign a list of [units] to each rate, inserting an assignment rule 2 for each one of them, from the";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Each [unit] can be assigned to more than one rate";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "REPLACE WITH LIST OF [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "in new [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Each [unit] can contain <span class=\"colred\">only one guest</span>";
                break;
            case "chiuso":
                $messaggio = "closed";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "for [units] not closed";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "It had to be assigned a [unit] from rate";
                break;
            case "vicini":
                $messaggio = "nearby";
                break;
            case "un appartamento":
                $messaggio = "a [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "When more [units] or types are requested, search for nearby [units]";
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
                $messaggio = "Insert now the data about [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "at least the number, different for each [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Number (or name) of the [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priority (the lower is assigned first)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Insert the data about [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "all the [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "There are no [units] with the requested features";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There are no [units] between the requested ones that can accomodate";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "In the selected period is not possible to accomodate the client in an [unit] between the requested ones";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "will be moved from [unit]";
                break;
            case "al":
                $messaggio = "to";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "The new reservation will be inserted in the [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "If you continue the [unit] assignment <span class=\"colred\">will not respect the requested [units]</span>";
                break;
            case "Non ci sono":
                $messaggio = "There are not";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] between the requested ones that can accomodate";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "There are no [units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "L'appartamento":
                $messaggio = "The [unit]";
                break;
            case "l'appartamento":
                $messaggio = "the [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "included in the list does not exist";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "In the requested period it is not possible to accomodate the client in the requested [units]";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Try again without searching nearby [units]";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "There are no [units] between the requested ones that are compatible with selected extra costs";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assign [units] depending on the choosen rate with rule 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Number of [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "If an [unit] from rule 1 with one of the choosen motivations must be occupied";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Ask the number of [units] for each type?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Maximum number of [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Word to be used to indicate the [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Maximum number of [units] for types is wrong";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "You must insert the word to indicate the [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Without grouping [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Grouping [units] with assignment rule 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Grouping [units] by number of people";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Show the number of free [units]?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibility to choose the [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "When choosing an [unit] add extra cost";
                break;
            case "Appartamenti disponibili":
                $messaggio = "Available [units]";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Choose this [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Choose your [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Change [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "has been moved from [unit]";
                $tr = 1;
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] not available for choosing";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] changed";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assign [units] inside assignement rules 1 with selected motivations?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Delete items from inventory of the [unit] occupied by the reservation";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] that are incompatible with the cost";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "Incompatible [units]";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "automatically assign [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "comma separated list of [units]";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "A rule of this kind already exists for the [unit] and period selected";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "The choosen rate has already some assigned [units], delete the rule before inserting a new one";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "You must insert at least one [unit] to assign to";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Select all ";
                break;
            case " persone":
                $messaggio = " people<br> [units]";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "if there is at least one [unit] from the original rule compatible with the number of people";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "There are no [units] that can accomodate";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "There are no [units] for";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in an [unit] for <b>at least";
                break;
            case " in un appartamento da":
                $messaggio = " in an [unit] for";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] for";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in an [unit] of the <b>selected rate</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] of the <b>selected rates</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "availability only in [units] for";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Check again availability in selected [units]";
                break;
            case "Appartamenti vicini":
                $messaggio = "Nearby [units]";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "Nearby [units] of the <b>selected rates</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventory of [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "of [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "has already been deleted";
                break;
            case "è stato cancellato":
                $messaggio = "has been deleted";
                break;
            case "è stato modificato":
                $messaggio = "has been modified";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modify [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Warning</b>: the reservations already inserted in this [unit] will <b>not</b> be moved";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Delete [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "The [unit] name will be changed from";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been deleted</b> because the database has been modified meanwhile";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been modified</b> because the database has been modified meanwhile";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "The nearby [units] will be changed";
                break;
            case "foto dell'appartamento":
                $messaggio = "photos of [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "description of [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Change the method for the [unit] assignment";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Fixed [unit] No";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in all the [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "[Units] list";
                break;
            case "separati da virgole":
                $messaggio = "comma separated";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reassign the [unit] with rule 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "The [unit] assignment will be changed from";
                break;
            case "ad uno tra":
                $messaggio = "to an [unit] between";
                break;
            case " quelli del":
                $messaggio = " one of those from floor";
                break;
            case "quelli della casa":
                $messaggio = "one of those from house";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "one of those with maximum number of hosted people";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "There are no [units] with the <span class=\"colred\">requested features</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There is <b>no</b> [unit] between the requested ones that can host";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "In the selected period it's <b>not</b> possible to host the client in an <span class=\"colred\">[unit]</span> between the requested ones";
                break;
            case "nell'appartamento":
                $messaggio = "in [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Move in [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "because there is another reservation in the same [unit] that must still register check-out";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "The reservations in nearby [units] will be changed from";
                break;
            case "l'attuale appartamento":
                $messaggio = "current [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "will be changed because it has some missing inventory items";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "The reservation will be moved from [unit]";
                break;
            case "fisso":
                $messaggio = "fixed";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° of [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Automatic assignment disabled (reservations will not be moved from their [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Automatic assignment enabled (reservations can be moved between assigned [units])";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> the assignment rule 1 for the [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "You must insert the number of the new [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "will be added";
                break;
            case "è stato aggiunto":
                $messaggio = "has been added";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Table with all the [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Create new [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Nearby [units] grid";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] from rate";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "[Units] percentage occupancy";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Average daily price per occupied [unit]";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Daily incomes per available [unit] (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Daily incomes per available [unit] with extra costs";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Stockrooms and [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "of [units] of rate";
                break;
            case "dall'appartamento":
                $messaggio = "from [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "group [units] with assignment rule 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "group [units] by number of people";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "do not group [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Seconds after which give up researching a free [unit]";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "The time limit for researching a free [unit] has been changed";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutes during which mantain occupied the [units] meanwhile a reservation is being inserted";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "The minutes to keep occupied the [units] during a reservation insertion have been changed";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Predefined [units] combinations";
                break;
            case "lista appartamenti":
                $messaggio = "[units] list";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "New [units] combination added";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "[Units] combination deleted";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Method for the [unit] assignment";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "The reservation can't be inserted without using [units] from the assignment rule 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Use also [units] from rule 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "without using [units] from rule 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "because the assigned [unit] doesn't exist anymore";
                break;
            case "appartamento incompatibile":
                $messaggio = "incompatible [unit]";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calculate extra costs on reservation from [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Costs have been inserted on reservation from [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservations insertable and modifiable in all periods and [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Choose the [units] to be assigned";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibility to modify the assigned [units]";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Only movements between already assigned ones";
                break;
            case "e appartamenti consentiti":
                $messaggio = "and [units] permitted";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibility to view the <i>table with [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Only [units] associated with rules permitted";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "will not be able, to free [units], to <b>move</b> reservations in not selected periods of rule 1 of";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will not be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will not be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "will be able to modify the <b>[unit]</b> only between already assigned ones for reservations in";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "will be able to modify the <b>rate</b> of reservations, but always associating it with [units] of rule 2, in";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will not be able to view the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him and to users of his groups in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view the <b>table with the [units]</b> of";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Yes, without nearby [units]";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibility to view <i>[units] inventory</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Only in [units] permitted";
                break;
            case "degli appartamenti</b>":
                $messaggio = "of [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "only of his own [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and of those from users belonging to his groups";
                break;
            case "negli appartamenti":
                $messaggio = "in [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "only in is own [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and in those from users belonging to his groups";
                break;
            case "lo stesso appartamento":
                $messaggio = "the same [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insert the information about the [units] from the";
                break;
            case "tabella appartamenti":
                $messaggio = "[units] table";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "The [units] can be created, deleted and renamed";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "It is recommended to insert at least the maximum capacity for each [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Consider that HotelDruid rates also act as [unit] types";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Assign a list of [units] to each rate, inserting an assignment rule 2 for each one of them, from the";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Each [unit] can be assigned to more than one rate";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "REPLACE WITH LIST OF [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "in new [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Each [unit] can contain <span class=\"colred\">only one guest</span>";
                break;
            case "chiuso":
                $messaggio = "closed";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "for [units] not closed";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "It had to be assigned an [unit] from rate";
                break;
            case "vicini":
                $messaggio = "nearby";
                break;
            case "un appartamento":
                $messaggio = "an [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "When more [units] or types are requested, search for nearby [units]";
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
                $messaggio = "Insert now the data about [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "at least the number, different for each [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Number (or name) of the [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Priority (the lower is assigned first)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Insert the data about [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "all the [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "There are no [units] with the requested features";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There are no [units] between the requested ones that can accomodate";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "In the selected period is not possible to accomodate the client in a [unit] between the requested ones";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "will be moved from [unit]";
                break;
            case "al":
                $messaggio = "to";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "The new reservation will be inserted in the [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "If you continue the [unit] assignment <span class=\"colred\">will not respect the requested [units]</span>";
                break;
            case "Non ci sono":
                $messaggio = "There are not";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] between the requested ones that can accomodate";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "There are no [units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] between the requested ones in which is allowed to insert reservations for user";
                break;
            case "L'appartamento":
                $messaggio = "The [unit]";
                break;
            case "l'appartamento":
                $messaggio = "the [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "included in the list does not exist";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "In the requested period it is not possible to accomodate the client in the requested [units]";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Try again without searching nearby [units]";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "There are no [units] between the requested ones that are compatible with selected extra costs";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Assign [units] depending on the choosen rate with rule 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Number of [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "If a [unit] from rule 1 with one of the choosen motivations must be occupied";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Ask the number of [units] for each type?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Maximum number of [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Word to be used to indicate the [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Maximum number of [units] for types is wrong";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "You must insert the word to indicate the [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Without grouping [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Grouping [units] with assignment rule 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Grouping [units] by number of people";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Show the number of free [units]?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Possibility to choose the [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "When choosing a [unit] add extra cost";
                break;
            case "Appartamenti disponibili":
                $messaggio = "Available [units]";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Choose this [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Choose your [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Change [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "has been moved from [unit]";
                $tr = 1;
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] not available for choosing";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] changed";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Assign [units] inside assignement rules 1 with selected motivations?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Delete items from inventory of the [unit] occupied by the reservation";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] that are incompatible with the cost";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "Incompatible [units]";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "automatically assign [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "comma separated list of [units]";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "A rule of this kind already exists for the [unit] and period selected";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "The choosen rate has already some assigned [units], delete the rule before inserting a new one";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "You must insert at least one [unit] to assign to";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Select all ";
                break;
            case " persone":
                $messaggio = " people<br> [units]";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "if there is at least one [unit] from the original rule compatible with the number of people";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "There are no [units] that can accomodate";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "There are no [units] for";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " in a [unit] for <b>at least";
                break;
            case " in un appartamento da":
                $messaggio = " in a [unit] for";
                break;
            case " in":
                $messaggio = " in";
                break;
            case "appartamenti da":
                $messaggio = "[units] for";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " in a [unit] of the <b>selected rate</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] of the <b>selected rates</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "availability only in [units] for";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Check again availability in selected [units]";
                break;
            case "Appartamenti vicini":
                $messaggio = "Nearby [units]";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "Nearby [units] of the <b>selected rates</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventory of [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "of [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "has already been deleted";
                break;
            case "è stato cancellato":
                $messaggio = "has been deleted";
                break;
            case "è stato modificato":
                $messaggio = "has been modified";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modify [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Warning</b>: the reservations already inserted in this [unit] will <b>not</b> be moved";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Delete [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "The [unit] name will be changed from";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been deleted</b> because the database has been modified meanwhile";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>The [unit] has not been modified</b> because the database has been modified meanwhile";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "The nearby [units] will be changed";
                break;
            case "foto dell'appartamento":
                $messaggio = "photos of [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "description of [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Change the method for the [unit] assignment";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "Fixed [unit] No";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Mobile in all the [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "[Units] list";
                break;
            case "separati da virgole":
                $messaggio = "comma separated";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reassign the [unit] with rule 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "The [unit] assignment will be changed from";
                break;
            case "ad uno tra":
                $messaggio = "to a [unit] between";
                break;
            case " quelli del":
                $messaggio = " one of those from floor";
                break;
            case "quelli della casa":
                $messaggio = "one of those from house";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "one of those with maximum number of hosted people";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "There are no [units] with the <span class=\"colred\">requested features</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "There is <b>no</b> [unit] between the requested ones that can host";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "In the selected period it's <b>not</b> possible to host the client in a <span class=\"colred\">[unit]</span> between the requested ones";
                break;
            case "nell'appartamento":
                $messaggio = "in [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Move in [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "because there is another reservation in the same [unit] that must still register check-out";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "The reservations in nearby [units] will be changed from";
                break;
            case "l'attuale appartamento":
                $messaggio = "current [unit]";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "will be changed because it has some missing inventory items";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "The reservation will be moved from [unit]";
                break;
            case "fisso":
                $messaggio = "fixed";
                break;
            case "mobile":
                $messaggio = "mobile";
                break;
            case "n° di appartamento":
                $messaggio = "n° of [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Automatic assignment disabled (reservations will not be moved from their [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Automatic assignment enabled (reservations can be moved between assigned [units])";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Are you sure you want to <b>delete</b> the assignment rule 1 for the [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "You must insert the number of the new [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "will be added";
                break;
            case "è stato aggiunto":
                $messaggio = "has been added";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Table with all the [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Create new [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Nearby [units] grid";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] from rate";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "[Units] percentage occupancy";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Average daily price per occupied [unit]";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Daily incomes per available [unit] (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Daily incomes per available [unit] with extra costs";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Stockrooms and [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "of [units] of rate";
                break;
            case "dall'appartamento":
                $messaggio = "from [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "group [units] with assignment rule 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "group [units] by number of people";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "do not group [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Seconds after which give up researching a free [unit]";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "The time limit for researching a free [unit] has been changed";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutes during which mantain occupied the [units] meanwhile a reservation is being inserted";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "The minutes to keep occupied the [units] during a reservation insertion have been changed";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Predefined [units] combinations";
                break;
            case "lista appartamenti":
                $messaggio = "[units] list";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "New [units] combination added";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "[Units] combination deleted";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Method for the [unit] assignment";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "The reservation can't be inserted without using [units] from the assignment rule 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Use also [units] from rule 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "without using [units] from rule 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "because the assigned [unit] doesn't exist anymore";
                break;
            case "appartamento incompatibile":
                $messaggio = "incompatible [unit]";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calculate extra costs on reservation from [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Costs have been inserted on reservation from [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservations insertable and modifiable in all periods and [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Choose the [units] to be assigned";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Possibility to modify the assigned [units]";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Only movements between already assigned ones";
                break;
            case "e appartamenti consentiti":
                $messaggio = "and [units] permitted";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Possibility to view the <i>table with [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Only [units] associated with rules permitted";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "will not be able, to free [units], to <b>move</b> reservations in not selected periods of rule 1 of";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will not be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "will be able to change the <b>[units] assignment</b> when he inserts new reservations in";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will not be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "will be able to modify the <b>[unit]</b> only between already assigned ones for reservations in";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "will be able to modify the <b>[units] assignment</b> of reservations in";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "will be able to modify the <b>rate</b> of reservations, but always associating it with [units] of rule 2, in";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted by assignment rules";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only his own reservations and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "will be able to view only reservations from him and from users belonging to his groups and [units] permitted to him and to users belonging to his groups by assignment rules";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will not be able to view the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view only [units] associated to rules permitted to him and to users of his groups in the <b>table with the [units]</b> of";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "will be able to view the <b>table with the [units]</b> of";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Yes, without nearby [units]";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Possibility to view <i>[units] inventory</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Only in [units] permitted";
                break;
            case "degli appartamenti</b>":
                $messaggio = "of [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "only of his own [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and of those from users belonging to his groups";
                break;
            case "negli appartamenti":
                $messaggio = "in [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "only in is own [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "and in those from users belonging to his groups";
                break;
            case "lo stesso appartamento":
                $messaggio = "the same [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insert the information about the [units] from the";
                break;
            case "tabella appartamenti":
                $messaggio = "[units] table";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "The [units] can be created, deleted and renamed";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "It is recommended to insert at least the maximum capacity for each [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Consider that HotelDruid rates also act as [unit] types";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Assign a list of [units] to each rate, inserting an assignment rule 2 for each one of them, from the";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Each [unit] can be assigned to more than one rate";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "REPLACE WITH LIST OF [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "in new [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Each [unit] can contain <span class=\"colred\">only one guest</span>";
                break;
            case "chiuso":
                $messaggio = "closed";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "for [units] not closed";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "It had to be assigned a [unit] from rate";
                break;
            case "vicini":
                $messaggio = "nearby";
                break;
            case "un appartamento":
                $messaggio = "a [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "When more [units] or types are requested, search for nearby [units]";
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
