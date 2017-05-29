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
$trad_var['room'] = 'habitación';
$trad_var['rooms'] = 'habitaciones';
$trad_var['room_gender'] = 'f';
$trad_var['apartment'] = 'apartamento';
$trad_var['apartments'] = 'apartamentos';
$trad_var['apartment_gender'] = 'm';
$trad_var['bed'] = 'cama';
$trad_var['beds'] = 'camas';
$trad_var['bed_gender'] = 'f';
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
                $messaggio = "Insertar ahora los datos sobre los [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almenos el número, diferente para cada [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Número (o nombre) del [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Prioridad (la más baja se asigna antes)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Inserta los datos sobre los [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "todos los [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "No hay [units] con las características pedidas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay ningún [unit] entre los que se han pedido que pueda acoger";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "En el período seleccionado no es posible acoger al cliente en un [unit] de los que se han pedido";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "será desplazada desde el [unit]";
                break;
            case "al":
                $messaggio = "al";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nueva reserva se colocará en el [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Si se continua la asignación del [unit] <span class=\"colred\">no tendrá en cuenta los [units] pedidos</span>";
                break;
            case "Non ci sono":
                $messaggio = "No hay";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] entre los que se han pedido que puedan acoger";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "No hay ningún [unit] entre los que se han pedido en el que esté consentido insertar reservas para el usuario";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] entre los que se han pedido en los que esté consentido insertar reservas para el usuario";
                break;
            case "L'appartamento":
                $messaggio = "El [unit]";
                break;
            case "l'appartamento":
                $messaggio = "el [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenido en la lista no existe";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "En el período seleccionado no es posible alojar el cliente en los [units] pedidos";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Volver a intentar sin buscar [units] cercanos";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "No hay ningún [unit] entre los que se han pedido que sea compatible con los costes añadidos seleccionados";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Asignar los [units] en base a la tarifa escogida con la regla 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Número de [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Si hay que ocupar un [unit] de la regla 1 con una de las motivaciones seleccionadas";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Preguntar el número de [units] para cada tipología?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Número máximo de [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Palabra a utilizar para indicar los [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Número máximo de [units] por tipología equivocado";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Hay que insertar la palabra para indicar los [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Sin agrupar los [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Agrupando los [units] con la regla de asignación 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Agrupando los [units] por número de personas";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Enseñar el número de [units] libres?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Posibilidad de escoger el [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Cuando se escoge el [unit] añadir el coste añadido";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibles";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Escoger este [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Escoge tu [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "ha sido desplazada desde el [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] no diponible para escoger";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiado";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Asignar [units] dentro de las reglas de asignación 1 con las motivaciones seleccionadas?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Eliminar los bienes del inventario del [unit] ocupado por la reserva";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibles con el coste";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibles";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "asignar automaticamente los [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista de [units] separados por comas";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Existe ya una regla de este tipo en el [unit] y el período seleccionados";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tarifa escogida ya tiene [units] asociados, borra la regla antes de insertar una nueva";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Hay que insertar por los menos un [unit] a asociar";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleccionar todos los [units]<br> de ";
                break;
            case " persone":
                $messaggio = " personas";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "si hay por lo menos un [unit] de la regla originál compatible con el número de personas";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "No hay ningún [unit] que pueda acoger";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "No hay [units] de";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " en un [unit] de <b>al menos";
                break;
            case " in un appartamento da":
                $messaggio = " en un [unit] de";
                break;
            case " in":
                $messaggio = " en";
                break;
            case "appartamenti da":
                $messaggio = "[units] de";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " en un [unit] de la <b>tarifa seleccionada</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] de las <b>tarifas seleccionadas</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilidad solo en [units] de";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Volver a controlar la disponibilidad en los [units] seleccionados";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] cercanos";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] cercanos de las <b>tarifas seleccionadas</b>";
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
                $messaggio = "ha sido ya borrado";
                break;
            case "è stato cancellato":
                $messaggio = "ha sido borrado";
                break;
            case "è stato modificato":
                $messaggio = "ha sido modificado";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> el [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modificar el [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Atención</b>: las reservas ya insertadas en este [unit] <b>no</b> se moverán";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Borrar el [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "El nombre del [unit] será cambiado de";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>El [unit] no ha sido borrado</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>El [unit] no ha sido modificado</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Los [units] cercanos serán cambiados";
                break;
            case "foto dell'appartamento":
                $messaggio = "fotos del [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descripción del [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia el método para la asignación del [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "N° fijo de [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Móvil en todos los [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista de [units]";
                break;
            case "separati da virgole":
                $messaggio = "separados por comas";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reasignar el [unit] con la regla 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "La asignación del [unit] será cambiada del";
                break;
            case "ad uno tra":
                $messaggio = "a uno entre";
                break;
            case " quelli del":
                $messaggio = " los del piso";
                break;
            case "quelli della casa":
                $messaggio = "los de la casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "los que tienen máximo número de ocupantes";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "No hay ningún [unit] con las <span class=\"colred\">características pedidas</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay <b>ningún</b> [unit] entre los pedidos que pueda acoger";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "En el período seleccionado <b>no</b> es posible acojer el cliente en un <span class=\"colred\">[unit]</span> entre los que se han pedido";
                break;
            case "nell'appartamento":
                $messaggio = "en el [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Desplaza en el [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "porque hay otra reserva en el mismo [unit] que todavía tiene que registrar la salida";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Las reservas en [units] cercanos serán cambiadas desde";
                break;
            case "l'attuale appartamento":
                $messaggio = "el [unit] corriente";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "será cambiado porque le faltan algunos bienes en el inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La reserva será desplazada desde el [unit]";
                break;
            case "fisso":
                $messaggio = "fijo";
                break;
            case "mobile":
                $messaggio = "móvil";
                break;
            case "n° di appartamento":
                $messaggio = "n° de [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Asignación automatica desactivada (las reservas no se moverán de su [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Asignación automatica activada (se podrán mover las reservas entre los [units] asignados)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la regla de asignación 1 para el [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Hay que insertar el número del nuevo [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "será añadido";
                break;
            case "è stato aggiunto":
                $messaggio = "ha sido añadido";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabla con todos los [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crear un nuevo [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Cuadro de [units] cercanos";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] de la tarifa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Porcentaje de ocupación de los [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Precio medio diario por [unit] ocupado";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entradas diarias por [unit] disponible (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entradas diarias por [unit] disponible con costes añadidos";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Almacenes y [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "de los [units] de la tarifa";
                break;
            case "dall'appartamento":
                $messaggio = "desde el [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "agrupar los [units] con la regla de asignación 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "agrupar los [units] por número de personas";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "no agrupar los [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Segundos después de los que abandonar la búsqueda de un [unit] libre";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "El tiempo límite para la búsqueda de un [unit] libre ha sido cambiado";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutots en los que mantener ocupados los [units] mientras se está insertando una reserva";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "Los minutos en los que mantener ocupados los [units] mientras se está insertando una reserva han sido cambiados";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinaciones predefinidas de [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nueva combinación de [units] añadida";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinación de [units] eliminada";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Método para la asignación del [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "No se puede insertar la reserva sin utilizar los [units] de la regla de asignación 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizar también los [units] de la regla 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "sin utilizar los [units] de la regla 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "porque el [unit] asignado ya no existe";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatible";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcular los costes añadidos sobre la reserva del [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Los costes han sido insertados sobre la reserva del [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservas insertables y modificables en todos los períodos y [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Escoger [units] a asignar";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Posibilidad de modificar los [units] asignados";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo desplazamientos entre los ya asignados";
                break;
            case "e appartamenti consentiti":
                $messaggio = "y [units] permitidos";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Posibilidad de ver la <i>tabla con los [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] asociados a reglas permitidas";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "no podrá, para liberar [units], <b>desplazar</b> reservas en períodos de las reglas 1 no seleccionadas del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "no podrá cambiar la <b>asignación de los [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "podrá cambiar la <b>asignación de los [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "no podrá modificar la asignación de los <b>[units]</b> de las reservas en el";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "podrá escoger de modificar el <b>[unit]</b> solo entre los ya asignados para las reservas en el";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "podrá modificar la asignación de los <b>[units]</b> de las reservas en el";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "podrá modificar la <b>tarifa</b> de las reservas, pero siempre asociandola a los [units] de la regla 2, en el";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y los [units] permitidos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo las reservas suyas y de usuarios que pertenecen a sus grupos y los [units] permitidos por las reglas de asignación";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y los [units] permitidos a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver las reservas suyas y de usuarios que pertenecen a sus grupos y los [units] permitidos a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "no podrá ver la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociados a reglas a él permitidas en la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociados a reglas permitidas a él y a usuarios de sus grupos en la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver la <b>tabla con los [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, sin [units] cercanos";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Posibilidad de ver el <i>inventario de los [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo en [units] permitidos";
                break;
            case "degli appartamenti</b>":
                $messaggio = "de los [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo de sus [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y de los de usuarios que pertenecen a sus grupos";
                break;
            case "negli appartamenti":
                $messaggio = "en los [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo en sus [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y en los de usuarios que pertenecen a sus grupos";
                break;
            case "lo stesso appartamento":
                $messaggio = "el mismo [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insertar las informaciones sobre los [units] desde la";
                break;
            case "tabella appartamenti":
                $messaggio = "tabla [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Los [units] pueden ser creados, borrados y cambiados de nombre";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Se aconseja insertar por lo menos la capacidad máxima para cada [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considerar que las tarifas de HotelDruid actuan también como tipologías de [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Asociar una lista de [units] para cada tarifa, insertando una regla de asignación 2 para cada una de ellas, desde la";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Cada [unit] puede estar asociado a más tarifas";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SUBSTITUIR CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "en el nuevo [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Cada [unit] puede contener <span class=\"colred\">un solo huésped</span>";
                break;
            case "chiuso":
                $messaggio = "cerrado";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "para [units] no cerrados";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Hubo que asignar un [unit] de la tarifa";
                break;
            case "vicini":
                $messaggio = "cercanos";
                break;
            case "un appartamento":
                $messaggio = "un [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Cuando se piden más [units] o tipologías, buscar [units] cercanos";
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
                $messaggio = "Insertar ahora los datos sobre los [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almenos el número, diferente para cada [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Número (o nombre) del [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Prioridad (la más baja se asigna antes)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Inserta los datos sobre los [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "todos los [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "No hay [units] con las características pedidas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay ningún [unit] entre los que se han pedido que pueda acoger";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "En el período seleccionado no es posible acoger al cliente en un [unit] de los que se han pedido";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "será desplazada desde el [unit]";
                break;
            case "al":
                $messaggio = "al";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nueva reserva se colocará en el [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Si se continua la asignación del [unit] <span class=\"colred\">no tendrá en cuenta los [units] pedidos</span>";
                break;
            case "Non ci sono":
                $messaggio = "No hay";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] entre los que se han pedido que puedan acoger";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "No hay ningún [unit] entre los que se han pedido en el que esté consentido insertar reservas para el usuario";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] entre los que se han pedido en los que esté consentido insertar reservas para el usuario";
                break;
            case "L'appartamento":
                $messaggio = "El [unit]";
                break;
            case "l'appartamento":
                $messaggio = "el [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenido en la lista no existe";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "En el período seleccionado no es posible alojar el cliente en los [units] pedidos";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Volver a intentar sin buscar [units] cercanos";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "No hay ningún [unit] entre los que se han pedido que sea compatible con los costes añadidos seleccionados";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Asignar los [units] en base a la tarifa escogida con la regla 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Número de [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Si hay que ocupar un [unit] de la regla 1 con una de las motivaciones seleccionadas";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Preguntar el número de [units] para cada tipología?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Número máximo de [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Palabra a utilizar para indicar los [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Número máximo de [units] por tipología equivocado";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Hay que insertar la palabra para indicar los [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Sin agrupar los [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Agrupando los [units] con la regla de asignación 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Agrupando los [units] por número de personas";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Enseñar el número de [units] libres?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Posibilidad de escoger el [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Cuando se escoge el [unit] añadir el coste añadido";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibles";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Escoger este [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Escoge tu [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "ha sido desplazada desde el [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] no diponible para escoger";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiado";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Asignar [units] dentro de las reglas de asignación 1 con las motivaciones seleccionadas?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Eliminar los bienes del inventario del [unit] ocupado por la reserva";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibles con el coste";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibles";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "asignar automaticamente los [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista de [units] separados por comas";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Existe ya una regla de este tipo en el [unit] y el período seleccionados";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tarifa escogida ya tiene [units] asociados, borra la regla antes de insertar una nueva";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Hay que insertar por los menos un [unit] a asociar";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleccionar todos los [units]<br> de ";
                break;
            case " persone":
                $messaggio = " personas";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "si hay por lo menos un [unit] de la regla originál compatible con el número de personas";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "No hay ningún [unit] que pueda acoger";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "No hay [units] de";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " en un [unit] de <b>al menos";
                break;
            case " in un appartamento da":
                $messaggio = " en un [unit] de";
                break;
            case " in":
                $messaggio = " en";
                break;
            case "appartamenti da":
                $messaggio = "[units] de";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " en un [unit] de la <b>tarifa seleccionada</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] de las <b>tarifas seleccionadas</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilidad solo en [units] de";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Volver a controlar la disponibilidad en los [units] seleccionados";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] cercanos";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] cercanos de las <b>tarifas seleccionadas</b>";
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
                $messaggio = "ha sido ya borrado";
                break;
            case "è stato cancellato":
                $messaggio = "ha sido borrado";
                break;
            case "è stato modificato":
                $messaggio = "ha sido modificado";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> el [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modificar el [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Atención</b>: las reservas ya insertadas en este [unit] <b>no</b> se moverán";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Borrar el [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "El nombre del [unit] será cambiado de";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>El [unit] no ha sido borrado</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>El [unit] no ha sido modificado</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Los [units] cercanos serán cambiados";
                break;
            case "foto dell'appartamento":
                $messaggio = "fotos del [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descripción del [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia el método para la asignación del [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "N° fijo de [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Móvil en todos los [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista de [units]";
                break;
            case "separati da virgole":
                $messaggio = "separados por comas";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reasignar el [unit] con la regla 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "La asignación del [unit] será cambiada del";
                break;
            case "ad uno tra":
                $messaggio = "a uno entre";
                break;
            case " quelli del":
                $messaggio = " los del piso";
                break;
            case "quelli della casa":
                $messaggio = "los de la casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "los que tienen máximo número de ocupantes";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "No hay ningún [unit] con las <span class=\"colred\">características pedidas</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay <b>ningún</b> [unit] entre los pedidos que pueda acoger";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "En el período seleccionado <b>no</b> es posible acojer el cliente en un <span class=\"colred\">[unit]</span> entre los que se han pedido";
                break;
            case "nell'appartamento":
                $messaggio = "en el [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Desplaza en el [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "porque hay otra reserva en el mismo [unit] que todavía tiene que registrar la salida";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Las reservas en [units] cercanos serán cambiadas desde";
                break;
            case "l'attuale appartamento":
                $messaggio = "el [unit] corriente";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "será cambiado porque le faltan algunos bienes en el inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La reserva será desplazada desde el [unit]";
                break;
            case "fisso":
                $messaggio = "fijo";
                break;
            case "mobile":
                $messaggio = "móvil";
                break;
            case "n° di appartamento":
                $messaggio = "n° de [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Asignación automatica desactivada (las reservas no se moverán de su [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Asignación automatica activada (se podrán mover las reservas entre los [units] asignados)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la regla de asignación 1 para el [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Hay que insertar el número del nuevo [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "será añadido";
                break;
            case "è stato aggiunto":
                $messaggio = "ha sido añadido";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabla con todos los [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crear un nuevo [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Cuadro de [units] cercanos";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] de la tarifa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Porcentaje de ocupación de los [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Precio medio diario por [unit] ocupado";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entradas diarias por [unit] disponible (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entradas diarias por [unit] disponible con costes añadidos";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Almacenes y [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "de los [units] de la tarifa";
                break;
            case "dall'appartamento":
                $messaggio = "desde el [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "agrupar los [units] con la regla de asignación 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "agrupar los [units] por número de personas";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "no agrupar los [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Segundos después de los que abandonar la búsqueda de un [unit] libre";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "El tiempo límite para la búsqueda de un [unit] libre ha sido cambiado";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutots en los que mantener ocupados los [units] mientras se está insertando una reserva";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "Los minutos en los que mantener ocupados los [units] mientras se está insertando una reserva han sido cambiados";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinaciones predefinidas de [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nueva combinación de [units] añadida";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinación de [units] eliminada";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Método para la asignación del [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "No se puede insertar la reserva sin utilizar los [units] de la regla de asignación 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizar también los [units] de la regla 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "sin utilizar los [units] de la regla 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "porque el [unit] asignado ya no existe";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatible";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcular los costes añadidos sobre la reserva del [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Los costes han sido insertados sobre la reserva del [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservas insertables y modificables en todos los períodos y [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Escoger [units] a asignar";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Posibilidad de modificar los [units] asignados";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo desplazamientos entre los ya asignados";
                break;
            case "e appartamenti consentiti":
                $messaggio = "y [units] permitidos";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Posibilidad de ver la <i>tabla con los [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] asociados a reglas permitidas";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "no podrá, para liberar [units], <b>desplazar</b> reservas en períodos de las reglas 1 no seleccionadas del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "no podrá cambiar la <b>asignación de los [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "podrá cambiar la <b>asignación de los [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "no podrá modificar la asignación de los <b>[units]</b> de las reservas en el";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "podrá escoger de modificar el <b>[unit]</b> solo entre los ya asignados para las reservas en el";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "podrá modificar la asignación de los <b>[units]</b> de las reservas en el";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "podrá modificar la <b>tarifa</b> de las reservas, pero siempre asociandola a los [units] de la regla 2, en el";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y los [units] permitidos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo las reservas suyas y de usuarios que pertenecen a sus grupos y los [units] permitidos por las reglas de asignación";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y los [units] permitidos a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver las reservas suyas y de usuarios que pertenecen a sus grupos y los [units] permitidos a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "no podrá ver la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociados a reglas a él permitidas en la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociados a reglas permitidas a él y a usuarios de sus grupos en la <b>tabla con los [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver la <b>tabla con los [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, sin [units] cercanos";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Posibilidad de ver el <i>inventario de los [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo en [units] permitidos";
                break;
            case "degli appartamenti</b>":
                $messaggio = "de los [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo de sus [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y de los de usuarios que pertenecen a sus grupos";
                break;
            case "negli appartamenti":
                $messaggio = "en los [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo en sus [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y en los de usuarios que pertenecen a sus grupos";
                break;
            case "lo stesso appartamento":
                $messaggio = "el mismo [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insertar las informaciones sobre los [units] desde la";
                break;
            case "tabella appartamenti":
                $messaggio = "tabla [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Los [units] pueden ser creados, borrados y cambiados de nombre";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Se aconseja insertar por lo menos la capacidad máxima para cada [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considerar que las tarifas de HotelDruid actuan también como tipologías de [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Asociar una lista de [units] para cada tarifa, insertando una regla de asignación 2 para cada una de ellas, desde la";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Cada [unit] puede estar asociado a más tarifas";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SUBSTITUIR CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "en el nuevo [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Cada [unit] puede contener <span class=\"colred\">un solo huésped</span>";
                break;
            case "chiuso":
                $messaggio = "cerrado";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "para [units] no cerrados";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Hubo que asignar un [unit] de la tarifa";
                break;
            case "vicini":
                $messaggio = "cercanos";
                break;
            case "un appartamento":
                $messaggio = "un [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Cuando se piden más [units] o tipologías, buscar [units] cercanos";
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
                $messaggio = "Insertar ahora los datos sobre las [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almenos el número, diferente para cada [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Número (o nombre) de la [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Prioridad (la más baja se asigna antes)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Inserta los datos sobre las [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "todas las [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "No hay [units] con las características pedidas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido que pueda acoger";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "En el período seleccionado no es posible acoger al cliente en una [unit] de las que se han pedido";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "será desplazada desde la [unit]";
                break;
            case "al":
                $messaggio = "a la";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nueva reserva se colocará en la [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Si se continua la asignación de la [unit] <span class=\"colred\">no tendrá en cuenta las [units] pedidas</span>";
                break;
            case "Non ci sono":
                $messaggio = "No hay";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] entre las que se han pedido que puedan acoger";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido en la que esté consentido insertar reservas para el usuario";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] entre las que se han pedido en las que esté consentido insertar reservas para el usuario";
                break;
            case "L'appartamento":
                $messaggio = "La [unit]";
                break;
            case "l'appartamento":
                $messaggio = "la [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenida en la lista no existe";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "En el período seleccionado no es posible alojar el cliente en las [units] pedidas";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Volver a intentar sin buscar [units] cercanas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido que sea compatible con los costes añadidos seleccionados";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Asignar las [units] en base a la tarifa escogida con la regla 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Número de [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Si hay que ocupar una [unit] de la regla 1 con una de las motivaciones seleccionadas";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Preguntar el número de [units] para cada tipología?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Número máximo de [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Palabra a utilizar para indicar las [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Número máximo de [units] por tipología equivocado";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Hay que insertar la palabra para indicar las [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Sin agrupar las [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Agrupando las [units] con la regla de asignación 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Agrupando las [units] por número de personas";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Enseñar el número de [units] libres?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Posibilidad de escoger la [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Cuando se escoge la [unit] añadir el coste añadido";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibles";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Escoger esta [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Escoge tu [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "ha sido desplazada desde la [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] no diponible para escoger";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiada";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Asignar [units] dentro de las reglas de asignación 1 con las motivaciones seleccionadas?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Eliminar los bienes del inventario de la [unit] ocupada por la reserva";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibles con el coste";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibles";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "asignar automaticamente las [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista de [units] separadas por comas";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Existe ya una regla de este tipo en la [unit] y el período seleccionados";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tarifa escogida ya tiene [units] asociadas, borra la regla antes de insertar una nueva";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Hay que insertar por los menos una [unit] a asociar";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleccionar todas las [units]<br> de ";
                break;
            case " persone":
                $messaggio = " personas";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "si hay por lo menos una [unit] de la regla originál compatible con el número de personas";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "No hay ninguna [unit] que pueda acoger";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "No hay [units] de";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " en una [unit] de <b>al menos";
                break;
            case " in un appartamento da":
                $messaggio = " en una [unit] de";
                break;
            case " in":
                $messaggio = " en";
                break;
            case "appartamenti da":
                $messaggio = "[units] de";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " en una [unit] de la <b>tarifa seleccionada</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] de las <b>tarifas seleccionadas</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilidad solo en [units] de";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Volver a controlar la disponibilidad en las [units] seleccionadas";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] cercanas";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] cercanas de las <b>tarifas seleccionadas</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario de la [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "de la [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "ha sido ya borrada";
                break;
            case "è stato cancellato":
                $messaggio = "ha sido borrada";
                break;
            case "è stato modificato":
                $messaggio = "ha sido modificada";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modificar la [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Atención</b>: las reservas ya insertadas en esta [unit] <b>no</b> se moverán";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Borrar la [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "El nombre de la [unit] será cambiado de";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] no ha sido borrada</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] no ha sido modificada</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Las [units] cercanas serán cambiadas";
                break;
            case "foto dell'appartamento":
                $messaggio = "fotos de la [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descripción de la [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia el método para la asignación de la [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "N° fijo de [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Móvil en todas las [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista de [units]";
                break;
            case "separati da virgole":
                $messaggio = "separadas por comas";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reasignar la [unit] con la regla 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "La asignación de la [unit] será cambiada del";
                break;
            case "ad uno tra":
                $messaggio = "a una entre";
                break;
            case " quelli del":
                $messaggio = " las del piso";
                break;
            case "quelli della casa":
                $messaggio = "las de la casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "las que tienen máximo número de ocupantes";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "No hay ninguna [unit] con las <span class=\"colred\">características pedidas</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay <b>ninguna</b> [unit] entre las pedidas que pueda acoger";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "En el período seleccionado <b>no</b> es posible acojer el cliente en una <span class=\"colred\">[unit]</span> entre las que se han pedido";
                break;
            case "nell'appartamento":
                $messaggio = "en la [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Desplaza en la [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "porque hay otra reserva en la misma [unit] que todavía tiene que registrar la salida";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Las reservas en [units] cercanas serán cambiadas desde";
                break;
            case "l'attuale appartamento":
                $messaggio = "la [unit] corriente";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "será cambiada porque le faltan algunos bienes en el inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La reserva será desplazada desde la [unit]";
                break;
            case "fisso":
                $messaggio = "fija";
                break;
            case "mobile":
                $messaggio = "móvil";
                break;
            case "n° di appartamento":
                $messaggio = "n° de [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Asignación automatica desactivada (las reservas no se moverán de su [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Asignación automatica activada (se podrán mover las reservas entre las [units] asignadas)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la regla de asignación 1 para la [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Hay que insertar el número de la nueva [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "será añadida";
                break;
            case "è stato aggiunto":
                $messaggio = "ha sido añadida";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabla con todas las [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crear una nueva [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Cuadro de [units] cercanas";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] de la tarifa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Porcentaje de ocupación de las [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Precio medio diario por [unit] ocupada";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entradas diarias por [unit] disponible (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entradas diarias por [unit] disponible con costes añadidos";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Almacenes y [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "de las [units] de la tarifa";
                break;
            case "dall'appartamento":
                $messaggio = "desde la [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "agrupar las [units] con la regla de asignación 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "agrupar las [units] por número de personas";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "no agrupar las [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Segundos después de los que abandonar la búsqueda de una [unit] libre";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "El tiempo límite para la búsqueda de una [unit] libre ha sido cambiado";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutots en los que mantener ocupadas las [units] mientras se está insertando una reserva";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "Los minutos en los que mantener ocupadas las [units] mientras se está insertando una reserva han sido cambiados";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinaciones predefinidas de [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nueva combinación de [units] añadida";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinación de [units] eliminada";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Método para la asignación de la [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "No se puede insertar la reserva sin utilizar las [units] de la regla de asignación 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizar también las [units] de la regla 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "sin utilizar las [units] de la regla 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "porque la [unit] asignada ya no existe";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatible";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcular los costes añadidos sobre la reserva de la [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Los costes han sido insertados sobre la reserva de la [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservas insertables y modificables en todos los períodos y [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Escoger [units] a asignar";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Posibilidad de modificar las [units] asignadas";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo desplazamientos entre las ya asignadas";
                break;
            case "e appartamenti consentiti":
                $messaggio = "y [units] permitidas";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Posibilidad de ver la <i>tabla con las [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] asociadas a reglas permitidas";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "no podrá, para liberar [units], <b>desplazar</b> reservas en períodos de las reglas 1 no seleccionadas del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "no podrá cambiar la <b>asignación de las [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "podrá cambiar la <b>asignación de las [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "no podrá modificar la asignación de las <b>[units]</b> de las reservas en el";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "podrá escoger de modificar la <b>[unit]</b> solo entre las ya asignadas para las reservas en el";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "podrá modificar la asignación de las <b>[units]</b> de las reservas en el";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "podrá modificar la <b>tarifa</b> de las reservas, pero siempre asociandola a las [units] de la regla 2, en el";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y las [units] permitidas por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo las reservas suyas y de usuarios que pertenecen a sus grupos y las [units] permitidas por las reglas de asignación";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y las [units] permitidas a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver las reservas suyas y de usuarios que pertenecen a sus grupos y las [units] permitidas a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "no podrá ver la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociadas a reglas a él permitidas en la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociadas a reglas permitidas a él y a usuarios de sus grupos en la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver la <b>tabla con las [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, sin [units] cercanas";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Posibilidad de ver el <i>inventario de las [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo en [units] permitidas";
                break;
            case "degli appartamenti</b>":
                $messaggio = "de las [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo de sus [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y de las de usuarios que pertenecen a sus grupos";
                break;
            case "negli appartamenti":
                $messaggio = "en las [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo en sus [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y en las de usuarios que pertenecen a sus grupos";
                break;
            case "lo stesso appartamento":
                $messaggio = "la misma [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insertar las informaciones sobre las [units] desde la";
                break;
            case "tabella appartamenti":
                $messaggio = "tabla [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Las [units] pueden ser creadas, borradas y cambiadas de nombre";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Se aconseja insertar por lo menos la capacidad máxima para cada [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considerar que las tarifas de HotelDruid actuan también como tipologías de [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Asociar una lista de [units] para cada tarifa, insertando una regla de asignación 2 para cada una de ellas, desde la";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Cada [unit] puede estar asociada a más tarifas";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SUBSTITUIR CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "en la nueva [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Cada [unit] puede contener <span class=\"colred\">un solo huésped</span>";
                break;
            case "chiuso":
                $messaggio = "cerrada";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "para [units] no cerradas";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Hubo que asignar una [unit] de la tarifa";
                break;
            case "vicini":
                $messaggio = "cercanas";
                break;
            case "un appartamento":
                $messaggio = "una [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Cuando se piden más [units] o tipologías, buscar [units] cercanas";
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
                $messaggio = "Insertar ahora los datos sobre las [units]";
                break;
            case "almeno il numero, diverso per ogni appartamento":
                $messaggio = "almenos el número, diferente para cada [unit]";
                break;
            case "Numero (o nome) dell' appartamento":
                $messaggio = "Número (o nombre) de la [unit]";
                break;
            case "Priorità (più bassa è, prima viene assegnato)":
                $messaggio = "Prioridad (la más baja se asigna antes)";
                break;
            case "Inserisci i dati sugli appartamenti":
                $messaggio = "Inserta los datos sobre las [units]";
                break;
            case "tutti gli appartamenti":
                $messaggio = "todas las [units]";
                break;
            case "Non ci sono appartamenti con le caratteristiche richieste":
                $messaggio = "No hay [units] con las características pedidas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido que pueda acoger";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente in un appartamento tra quelli richiesti":
                $messaggio = "En el período seleccionado no es posible acoger al cliente en una [unit] de las que se han pedido";
                break;
            case "verrà spostata dall'appartamento":
                $messaggio = "será desplazada desde la [unit]";
                break;
            case "al":
                $messaggio = "a la";
                break;
            case "La nuova prenotazione verrà inserita nell'appartamento":
                $messaggio = "La nueva reserva se colocará en la [unit]";
                break;
            case "Se si continua l'assegnazione dell'appartamento <span class=\"colred\">non terrà conto degli appartamenti richiesti</span>":
                $messaggio = "Si se continua la asignación de la [unit] <span class=\"colred\">no tendrá en cuenta las [units] pedidas</span>";
                break;
            case "Non ci sono":
                $messaggio = "No hay";
                break;
            case "appartamenti tra quelli richiesti che possano ospitare":
                $messaggio = "[units] entre las que se han pedido que puedan acoger";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido en la que esté consentido insertar reservas para el usuario";
                break;
            case "appartamenti tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente":
                $messaggio = "[units] entre las que se han pedido en las que esté consentido insertar reservas para el usuario";
                break;
            case "L'appartamento":
                $messaggio = "La [unit]";
                break;
            case "l'appartamento":
                $messaggio = "la [unit]";
                break;
            case "contenuto nella lista non esiste":
                $messaggio = "contenida en la lista no existe";
                break;
            case "Nel periodo selezionato non è possibile ospitare il cliente negli appartamenti richiesti":
                $messaggio = "En el período seleccionado no es posible alojar el cliente en las [units] pedidas";
                break;
            case "Riprova senza cercare appartamenti vicini":
                $messaggio = "Volver a intentar sin buscar [units] cercanas";
                break;
            case "Non c'è nessun appartamento tra quelli richiesti che sia compatibile con i costi aggiuntivi selezionati":
                $messaggio = "No hay ninguna [unit] entre las que se han pedido que sea compatible con los costes añadidos seleccionados";
                break;
            case "Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?":
                $messaggio = "Asignar las [units] en base a la tarifa escogida con la regla 2?";
                break;
            case "Numero di appartamenti":
                $messaggio = "Número de [units]";
                break;
            case "Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate":
                $messaggio = "Si hay que ocupar una [unit] de la regla 1 con una de las motivaciones seleccionadas";
                break;
            case "Chiedere il numero di appartamenti per ogni tipologia?":
                $messaggio = "Preguntar el número de [units] para cada tipología?";
                break;
            case "Numero massimo di appartamenti":
                $messaggio = "Número máximo de [units]";
                break;
            case "Parola da utilizzare per indicare gli appartamenti":
                $messaggio = "Palabra a utilizar para indicar las [units]";
                break;
            case "appartamento":
                $messaggio = "[unit]";
                break;
            case "appartamenti":
                $messaggio = "[units]";
                break;
            case "Numero massimo di appartamenti per tipologia errato":
                $messaggio = "Número máximo de [units] por tipología equivocado";
                break;
            case "Si deve inserire la parola per indicare gli appartamenti":
                $messaggio = "Hay que insertar la palabra para indicar las [units]";
                break;
            case "Senza raggruppare gli appartamenti":
                $messaggio = "Sin agrupar las [units]";
                break;
            case "Raggruppando gli appartamenti con la regola di assegnazione 2":
                $messaggio = "Agrupando las [units] con la regla de asignación 2";
                break;
            case "Raggruppando gli appartamenti per numero di persone":
                $messaggio = "Agrupando las [units] por número de personas";
                break;
            case "Mostrare il numero di appartamenti liberi?":
                $messaggio = "Enseñar el número de [units] libres?";
                break;
            case "Possibilità di scegliere l'appartamento?":
                $messaggio = "Posibilidad de escoger la [unit]?";
                break;
            case "Quando si sceglie l'appartamento aggiungere il costo aggiuntivo":
                $messaggio = "Cuando se escoge la [unit] añadir el coste añadido";
                break;
            case "Appartamenti disponibili":
                $messaggio = "[Units] disponibles";
                break;
            case "Scegli questo appartamento":
                $messaggio = "Escoger esta [unit]";
                break;
            case "Scegli il tuo appartamento":
                $messaggio = "Escoge tu [unit]";
                break;
            case "Cambia appartamento":
                $messaggio = "Cambia [unit]";
                break;
            case "è stata spostata dall'appartamento":
                $messaggio = "ha sido desplazada desde la [unit]";
                break;
            case "Appartamento non disponibile per la scelta":
                $messaggio = "[Unit] no diponible para escoger";
                $tr = 1;
                break;
            case "Appartamento cambiato":
                $messaggio = "[Unit] cambiada";
                $tr = 1;
                break;
            case "Assegnare appartamenti nelle regole di assegnazione 1 con le motivazioni selezionate?":
                $messaggio = "Asignar [units] dentro de las reglas de asignación 1 con las motivaciones seleccionadas?";
                $tr = 1;
                break;
            case "elimina i beni dall'inventario dell'appartamento occupato dalla prenotazione":
                $messaggio = "Eliminar los bienes del inventario de la [unit] ocupada por la reserva";
                break;
            case "Appartamenti incompatibili con il costo":
                $messaggio = "[Units] incompatibles con el coste";
                break;
            case "Appartamenti incompatibili":
                $messaggio = "[Units] incompatibles";
                break;
            case "assegna automaticamente gli appartamenti":
                $messaggio = "asignar automaticamente las [units]";
                break;
            case "lista di appartamenti separati da virgole":
                $messaggio = "lista de [units] separadas por comas";
                break;
            case "Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato":
                $messaggio = "Existe ya una regla de este tipo en la [unit] y el período seleccionados";
                break;
            case "La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova":
                $messaggio = "La tarifa escogida ya tiene [units] asociadas, borra la regla antes de insertar una nueva";
                break;
            case "Si deve inserire almeno un appartamento da associare":
                $messaggio = "Hay que insertar por los menos una [unit] a asociar";
                break;
            case "Seleziona tutti gli appartamenti<br> da ":
                $messaggio = "Seleccionar todas las [units]<br> de ";
                break;
            case " persone":
                $messaggio = " personas";
                break;
            case "se c'è almeno un appartamento della regola originale compatibile con il numero di persone":
                $messaggio = "si hay por lo menos una [unit] de la regla originál compatible con el número de personas";
                break;
            case "Non c'è nessun appartamento che possa ospitare":
                $messaggio = "No hay ninguna [unit] que pueda acoger";
                break;
            case "Non c'è nessun appartamento da":
                $messaggio = "No hay [units] de";
                break;
            case " in un appartamento da <b>almeno":
                $messaggio = " en una [unit] de <b>al menos";
                break;
            case " in un appartamento da":
                $messaggio = " en una [unit] de";
                break;
            case " in":
                $messaggio = " en";
                break;
            case "appartamenti da":
                $messaggio = "[units] de";
                break;
            case " in un appartamento della <b>tariffa selezionata</b>":
                $messaggio = " en una [unit] de la <b>tarifa seleccionada</b>";
                break;
            case "appartamenti delle <b>tariffe selezionate</b>":
                $messaggio = "[units] de las <b>tarifas seleccionadas</b>";
                break;
            case "disponibilità solo negli appartamenti da":
                $messaggio = "disponibilidad solo en [units] de";
                break;
            case "Ricontrolla la disponibilità negli appartamenti selezionati":
                $messaggio = "Volver a controlar la disponibilidad en las [units] seleccionadas";
                break;
            case "Appartamenti vicini":
                $messaggio = "[Units] cercanas";
                break;
            case "appartamenti vicini delle <b>tariffe selezionate</b>":
                $messaggio = "[units] cercanas de las <b>tarifas seleccionadas</b>";
                break;
            case "Appartamento":
                $messaggio = "[Unit]";
                break;
            case "Inventario dell'appartamento":
                $messaggio = "Inventario de la [unit]";
                break;
            case "dell'appartamento":
                $messaggio = "de la [unit]";
                break;
            case "è già stato cancellato":
                $messaggio = "ha sido ya borrada";
                break;
            case "è stato cancellato":
                $messaggio = "ha sido borrada";
                break;
            case "è stato modificato":
                $messaggio = "ha sido modificada";
                break;
            case "Sei sicuro di voler <b>cancellare</b> l'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la [unit]";
                break;
            case "Modifica l'appartamento":
                $messaggio = "Modificar la [unit]";
                break;
            case "<b>Attenzione</b>: le prenotazioni già inserite in questo appartamento <b>non</b> verranno spostate":
                $messaggio = "<b>Atención</b>: las reservas ya insertadas en esta [unit] <b>no</b> se moverán";
                break;
            case "Cancella l'appartamento":
                $messaggio = "Borrar la [unit]";
                break;
            case "Il nome dell'appartamento verrà cambiato da":
                $messaggio = "El nombre de la [unit] será cambiado de";
                break;
            case "<b>L'appartamento non è stato cancellato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] no ha sido borrada</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "<b>L'appartamento non è stato modificato</b> perchè il database è cambiato nel frattempo":
                $messaggio = "<b>La [unit] no ha sido modificada</b> porqué la base de datos ha cambiado mientras tanto";
                break;
            case "Gli appartamenti vicini verranno cambiati":
                $messaggio = "Las [units] cercanas serán cambiadas";
                break;
            case "foto dell'appartamento":
                $messaggio = "fotos de la [unit]";
                break;
            case "descrizione dell'appartamento":
                $messaggio = "descripción de la [unit]";
                break;
            case "Cambia metodo per l'assegnazione dell'appartamento":
                $messaggio = "Cambia el método para la asignación de la [unit]";
                break;
            case "Nº fisso di appartamento":
                $messaggio = "N° fijo de [unit]";
                break;
            case "Mobile in tutti gli appartamenti":
                $messaggio = "Móvil en todas las [units]";
                break;
            case "Lista di appartamenti":
                $messaggio = "Lista de [units]";
                break;
            case "separati da virgole":
                $messaggio = "separadas por comas";
                break;
            case "riassegna l'appartamento con la regola 2":
                $messaggio = "reasignar la [unit] con la regla 2";
                break;
            case "L'assegnazione dell'appartamento verrà cambiata dal":
                $messaggio = "La asignación de la [unit] será cambiada del";
                break;
            case "ad uno tra":
                $messaggio = "a una entre";
                break;
            case " quelli del":
                $messaggio = " las del piso";
                break;
            case "quelli della casa":
                $messaggio = "las de la casa";
                break;
            case "quelli con massimo numero di occupanti":
                $messaggio = "las que tienen máximo número de ocupantes";
                break;
            case "Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>":
                $messaggio = "No hay ninguna [unit] con las <span class=\"colred\">características pedidas</span>";
                break;
            case "<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare":
                $messaggio = "No hay <b>ninguna</b> [unit] entre las pedidas que pueda acoger";
                break;
            case "Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti":
                $messaggio = "En el período seleccionado <b>no</b> es posible acojer el cliente en una <span class=\"colred\">[unit]</span> entre las que se han pedido";
                break;
            case "nell'appartamento":
                $messaggio = "en la [unit]";
                break;
            case "Sposta nell'appartamento":
                $messaggio = "Desplaza en la [unit]";
                break;
            case "perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita":
                $messaggio = "porque hay otra reserva en la misma [unit] que todavía tiene que registrar la salida";
                break;
            case "Le prenotazioni in appartamenti vicini verranno cambiate da":
                $messaggio = "Las reservas en [units] cercanas serán cambiadas desde";
                break;
            case "l'attuale appartamento":
                $messaggio = "la [unit] corriente";
                break;
            case "verrà cambiato perchè ha dei beni mancanti nell'inventario":
                $messaggio = "será cambiada porque le faltan algunos bienes en el inventario";
                break;
            case "La prenotazione verrà spostata dall'appartamento":
                $messaggio = "La reserva será desplazada desde la [unit]";
                break;
            case "fisso":
                $messaggio = "fija";
                break;
            case "mobile":
                $messaggio = "móvil";
                break;
            case "n° di appartamento":
                $messaggio = "n° de [unit]";
                break;
            case "Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)":
                $messaggio = "Asignación automatica desactivada (las reservas no se moverán de su [unit])";
                break;
            case "Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)":
                $messaggio = "Asignación automatica activada (se podrán mover las reservas entre las [units] asignadas)";
                break;
            case "Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento":
                $messaggio = "Estás seguro de querer <b>borrar</b> la regla de asignación 1 para la [unit]";
                break;
            case "Appartamenti":
                $messaggio = "[Units]";
                break;
            case "Si deve inserire il numero del nuovo appartamento":
                $messaggio = "Hay que insertar el número de la nueva [unit]";
                break;
            case "verrà aggiunto":
                $messaggio = "será añadida";
                break;
            case "è stato aggiunto":
                $messaggio = "ha sido añadida";
                break;
            case "Tabella con tutti gli appartamenti":
                $messaggio = "Tabla con todas las [units]";
                break;
            case "Crea un nuovo appartamento":
                $messaggio = "Crear una nueva [unit]";
                break;
            case "Griglia appartamenti vicini":
                $messaggio = "Cuadro de [units] cercanas";
                break;
            case "appartamenti della tariffa":
                $messaggio = "[units] de la tarifa";
                break;
            case "Percentuale di occupazione degli appartamenti":
                $messaggio = "Porcentaje de ocupación de las [units]";
                break;
            case "Prezzo medio giornaliero per appartamento occupato":
                $messaggio = "Precio medio diario por [unit] ocupada";
                break;
            case "Entrate giornaliere per appartamento disponibile (RevPAR)":
                $messaggio = "Entradas diarias por [unit] disponible (RevPAR)";
                break;
            case "Entrate giornaliere per appartamento disponibile con costi aggiuntivi":
                $messaggio = "Entradas diarias por [unit] disponible con costes añadidos";
                break;
            case "Magazzini ed appartamenti":
                $messaggio = "Almacenes y [units]";
                break;
            case "degli appartamenti della tariffa":
                $messaggio = "de las [units] de la tarifa";
                break;
            case "dall'appartamento":
                $messaggio = "desde la [unit]";
                break;
            case "raggruppa gli appartamenti con la regola di assegnazione 2":
                $messaggio = "agrupar las [units] con la regla de asignación 2";
                break;
            case "raggruppa gli appartamenti per numero di persone":
                $messaggio = "agrupar las [units] por número de personas";
                break;
            case "non raggruppare gli appartamenti":
                $messaggio = "no agrupar las [units]";
                break;
            case "Secondi dopo i quali abbandonare la ricerca di un appartamento libero":
                $messaggio = "Segundos después de los que abandonar la búsqueda de una [unit] libre";
                break;
            case "Il tempo limite per la ricerca di un appartamento libero è stato cambiato":
                $messaggio = "El tiempo límite para la búsqueda de una [unit] libre ha sido cambiado";
                break;
            case "Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione":
                $messaggio = "Minutots en los que mantener ocupadas las [units] mientras se está insertando una reserva";
                break;
            case "I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati":
                $messaggio = "Los minutos en los que mantener ocupadas las [units] mientras se está insertando una reserva han sido cambiados";
                break;
            case "Combinazioni predefinite di appartamenti":
                $messaggio = "Combinaciones predefinidas de [units]";
                break;
            case "lista appartamenti":
                $messaggio = "lista [units]";
                break;
            case "Nuova combinazione di appartamenti aggiunta":
                $messaggio = "Nueva combinación de [units] añadida";
                break;
            case "Combinazione di appartamenti eliminata":
                $messaggio = "Combinación de [units] eliminada";
                break;
            case "Metodo per l'assegnazione dell'appartamento":
                $messaggio = "Método para la asignación de la [unit]";
                break;
            case "Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1":
                $messaggio = "No se puede insertar la reserva sin utilizar las [units] de la regla de asignación 1";
                break;
            case "Utilizza anche gli appartamenti della regola 1":
                $messaggio = "Utilizar también las [units] de la regla 1";
                break;
            case "senza utilizzare gli appartamenti della regola 1":
                $messaggio = "sin utilizar las [units] de la regla 1";
                break;
            case "perchè l'appartamento assegnato non esiste più":
                $messaggio = "porque la [unit] asignada ya no existe";
                break;
            case "appartamento incompatibile":
                $messaggio = "[unit] incompatible";
                break;
            case "Calcola i costi aggiuntivi sulla prenotazione dell'appartamento":
                $messaggio = "Calcular los costes añadidos sobre la reserva de la [unit]";
                break;
            case "I costi sono stati inseriti sulla prenotazione dell'appartamento":
                $messaggio = "Los costes han sido insertados sobre la reserva de la [unit]";
                break;
            case "Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti":
                $messaggio = "Reservas insertables y modificables en todos los períodos y [units]";
                break;
            case "Scelta degli appartamenti da assegnare":
                $messaggio = "Escoger [units] a asignar";
                break;
            case "Possibilità di modificare gli appartamenti assegnati":
                $messaggio = "Posibilidad de modificar las [units] asignadas";
                break;
            case "Solo spostamenti tra quelli già assegnati":
                $messaggio = "Solo desplazamientos entre las ya asignadas";
                break;
            case "e appartamenti consentiti":
                $messaggio = "y [units] permitidas";
                break;
            case "Possibilità di vedere la <i>tabella con gli appartamenti</i>":
                $messaggio = "Posibilidad de ver la <i>tabla con las [units]</i>";
                break;
            case "Solo appartamenti associati a regole consentite":
                $messaggio = "Solo [units] asociadas a reglas permitidas";
                break;
            case "non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del":
                $messaggio = "no podrá, para liberar [units], <b>desplazar</b> reservas en períodos de las reglas 1 no seleccionadas del";
                break;
            case "non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "no podrá cambiar la <b>asignación de las [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel":
                $messaggio = "podrá cambiar la <b>asignación de las [units]</b> cuando inserta nuevas reservas en el";
                break;
            case "non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "no podrá modificar la asignación de las <b>[units]</b> de las reservas en el";
                break;
            case "potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del":
                $messaggio = "podrá escoger de modificar la <b>[unit]</b> solo entre las ya asignadas para las reservas en el";
                break;
            case "potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel":
                $messaggio = "podrá modificar la asignación de las <b>[units]</b> de las reservas en el";
                break;
            case "potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel":
                $messaggio = "podrá modificar la <b>tarifa</b> de las reservas, pero siempre asociandola a las [units] de la regla 2, en el";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y las [units] permitidas por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione":
                $messaggio = "podrá ver solo las reservas suyas y de usuarios que pertenecen a sus grupos y las [units] permitidas por las reglas de asignación";
                break;
            case "potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver solo sus proprias reservas y las [units] permitidas a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione":
                $messaggio = "podrá ver las reservas suyas y de usuarios que pertenecen a sus grupos y las [units] permitidas a él y a usuarios que pertenezcan a sus grupos por las reglas de asignación";
                break;
            case "non potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "no podrá ver la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociadas a reglas a él permitidas en la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver solo [units] asociadas a reglas permitidas a él y a usuarios de sus grupos en la <b>tabla con las [units]</b> del";
                break;
            case "potrà vedere la <b>tabella con gli appartamenti</b> del":
                $messaggio = "podrá ver la <b>tabla con las [units]</b> del";
                break;
            case "Si, senza appartamenti vicini":
                $messaggio = "Si, sin [units] cercanas";
                break;
            case "Possibilità di vedere l'<i>inventario degli appartamenti</i>":
                $messaggio = "Posibilidad de ver el <i>inventario de las [units]</i>";
                break;
            case "Solo in appartamenti consentiti":
                $messaggio = "Solo en [units] permitidas";
                break;
            case "degli appartamenti</b>":
                $messaggio = "de las [units]</b>";
                break;
            case "solo dei suoi appartamenti</b>":
                $messaggio = "solo de sus [units]</b>";
                break;
            case "e di quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y de las de usuarios que pertenecen a sus grupos";
                break;
            case "negli appartamenti":
                $messaggio = "en las [units]";
                break;
            case "solo nei suoi appartamenti":
                $messaggio = "solo en sus [units]";
                break;
            case "e in quelli di utenti appartenenti ai suoi gruppi":
                $messaggio = "y en las de usuarios que pertenecen a sus grupos";
                break;
            case "lo stesso appartamento":
                $messaggio = "la misma [unit]";
                break;
            case "Inserisci le informazioni sugli appartamenti dalla":
                $messaggio = "Insertar las informaciones sobre las [units] desde la";
                break;
            case "tabella appartamenti":
                $messaggio = "tabla [units]";
                break;
            case "Gli appartamenti possono essere creati, cancellati e rinominati":
                $messaggio = "Las [units] pueden ser creadas, borradas y cambiadas de nombre";
                break;
            case "Si consiglia di inserire almeno la capienza massima per ogni appartamento":
                $messaggio = "Se aconseja insertar por lo menos la capacidad máxima para cada [unit]";
                break;
            case "Considera che le tariffe di HotelDruid fungono anche da tipologie di appartamenti":
                $messaggio = "Considerar que las tarifas de HotelDruid actuan también como tipologías de [units]";
                break;
            case "Associa una lista di appartamenti ad ogni tariffa, inserendo una regola di assegnazione 2 per ognuna di esse, dalla":
                $messaggio = "Asociar una lista de [units] para cada tarifa, insertando una regla de asignación 2 para cada una de ellas, desde la";
                break;
            case "Ogni appatamento può essere associato a più tariffe":
                $messaggio = "Cada [unit] puede estar asociada a más tarifas";
                break;
            case "SOSTITUISCI CON LISTA APPARTAMENTI":
                $messaggio = "SUBSTITUIR CON LISTA [UNITS]";
                break;
            case "nel nuovo appartamento":
                $messaggio = "en la nueva [unit]";
                break;
            case "Ogni appartamento può contenere al <span class=\"colred\">massimo un ospite</span>":
                $messaggio = "Cada [unit] puede contener <span class=\"colred\">un solo huésped</span>";
                break;
            case "chiuso":
                $messaggio = "cerrada";
                break;
            case "per appartamenti non chiusi":
                $messaggio = "para [units] no cerradas";
                break;
            case "Si è dovuto assegnare un appartamento della tariffa":
                $messaggio = "Hubo que asignar una [unit] de la tarifa";
                break;
            case "vicini":
                $messaggio = "cercanas";
                break;
            case "un appartamento":
                $messaggio = "una [unit]";
                break;
            case "Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini":
                $messaggio = "Cuando se piden más [units] o tipologías, buscar [units] cercanas";
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
