<?php

if (substr($messaggio, 0, 4) != "var_") {
    switch ($messaggio) {

# translate YES and NO in upper case
        case "SI":
            $messaggio = "SI";
            break;
        case "NO":
            $messaggio = "NO";
            break;
        case "Torna indietro":
            $messaggio = "Volver atrás";
            break;
        case "Crea pagine per il sito web":
            $messaggio = "Crear páginas para el sitio web";
            break;
        case "Dati comuni":
            $messaggio = "Datos comunes";
            break;
        case "Utilizza i dati attuali per la connessione al database":
            $messaggio = "Utiliza los datos actuales para conectar a la base de datos";
            break;
        case "Utilizza altri dati per la connessione al database":
            $messaggio = "Utiliza otros datos para conectar a la base de datos";
            break;
        case "Tipo di database":
            $messaggio = "Tipo de base de datos";
            break;
        case "Postgresql":
            $messaggio = "Postgresql";
            break;
        case "Mysql":
            $messaggio = "Mysql";
            break;
        case "Nome del database da utilizzare":
            $messaggio = "Nobre de la base de datos a utilizar";
            break;
        case "Nome del computer a cui collegarsi":
            $messaggio = "Nombre del ordenador al que conectarse";
            break;
        case "Numero della porta a cui collegarsi":
            $messaggio = "Numero de la puerta a la que conectarse";
            break;
        case "Normalmete 5432 per Postgresql o 3306 per Mysql":
            $messaggio = "Normalmente 5432 para Postgresql o 3306 para Mysql";
            break;
        case "Nome per l'autenticazione al database":
            $messaggio = "Nombre de usuario para la autenticación a la base de datos";
            break;
        case "Parola segreta per l'autenticazione al database":
            $messaggio = "Contraseña para la autenticación a la base de datos";
            break;
        case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":
            $messaggio = "Cargar la librería dinamica \"pgsql.so\" o \"mysql.so\"";
            break;
        case "Si":
            $messaggio = "Si";
            break;
        case "No":
            $messaggio = "No";
            break;
        case "scegliere si se non viene caricata automaticamente da php":
            $messaggio = "escoger si si no es cargada automaticamente por php";
            break;
        case "Percorso alla directory dati da dove verrà posizionato lo script":
            $messaggio = "Recorrido al directorio dati desde donde se posicionará el modelo";
            break;
        case "solo per mysql":
            $messaggio = "solo para mysql";
            break;
        case "Anno":
            $messaggio = "Año";
            break;
        case "Lingua":
            $messaggio = "Idioma";
            break;
        case "Formato di visualizzazione dei soldi":
            $messaggio = "Formato de visualización de monedas";
            break;
        case "Formato di visualizzazione delle date":
            $messaggio = "Formato de visualización de fechas";
            break;
        case "Nome della valuta al singolare":
            $messaggio = "Nomre de la divisa al singular";
            break;
        case "Nome della valuta al plurale":
            $messaggio = "Nomre de la divisa al plural";
            break;
        case "Pagina per la disponibilità":
            $messaggio = "Página para la disponibilidad";
            break;
        case "Le date sono sbagliate":
            $messaggio = "Las fechas están equivocadas";
            break;
        case "Indirizzo email non valido":
            $messaggio = "Dirección de correo electronico no válida";
            break;
        case "INIZIO VARIABILI MODIFICABILI":
            $messaggio = "PRINCIPIO DE LAS VARIABLES MODIFICABLES";
            break;
        case "Inserire in questa variabile il nome della pagina se \$PHP_SELF non è definita":
            $messaggio = "Insertar en esta variable el nobre de la página si \$PHP_SELF no está definida";
            break;
        case "europa":
            $messaggio = "europa";
            break;
        case "usa":
            $messaggio = "usa";
            break;
        case "FRASI":
            $messaggio = "FRASES";
            break;
        case "FRASI EMAIL":
            $messaggio = "FRASES CORREO ELECTRONICO";
            break;
        case "PERIODI NEI MENU":
            $messaggio = "PERIODOS EN LOS MENUS";
            break;
        case "FINE VARIABILI MODIFICABILI":
            $messaggio = "FINAL DE LAS VARIABLES MODIFICABLES";
            break;
        case "NON MODIFICARE NIENTE A PARTIRE DA QUI":
            $messaggio = "NO MODIFICAR NADA A PARTIR DE AQUI";
            break;
        case "La variabile \\\$PHP_SELF non è definita, si dovrà editare a mano questa pagina per inserirne il nome":
            $messaggio = "La variable \\\$PHP_SELF no está definida, habrá que editar a mano esta página para insertar el nombre";
            break;
        case "Non ho il permesso di scrittura nella cartella":
            $messaggio = "No tengo el permiso de escritura sobre el directorio";
            break;
        case "OK":
            $messaggio = "OK";
            break;
        case "Pagina per controllare la disponibilità":
            $messaggio = "Página para controlar la disponibilidad";
            break;
        case "Date nei menù a tendina":
            $messaggio = "Fechas el las listas";
            break;
        case "Tariffe (tipologie) da mostrare ed eventuali loro nomi sostitutivi con cui mostrarle":
            $messaggio = "Tarifas (tipologías) a enseñar y sus eventuales nombres substitutivos con los que enseñarlas";
            break;
        case "col nome":
            $messaggio = "con nombre";
            break;
        case "Chiedere se aggiungere i costi presenti nella pagina di inserzione prenotazioni?":
            $messaggio = "Preguntar si hay que añadir los costes presentes en la página de inserción de reservas?";
            break;
        case "Aggiungere al prezzo i costi aggiuntivi fissi associati alle tariffe?":
            $messaggio = "Añadir al precio los costes añadidos fijos asociados a las tarifas?";
            break;
        case "Costi aggiuntivi da mostrare ed eventuali loro nomi sostitutivi con cui mostrarli":
            $messaggio = "Costes añadidos a enseñar y sus eventuales nombres substitutivos con los que enseñarlos";
            break;
        case "Costo settimanale":
            $messaggio = "Coste semanal";
            break;
        case "Costo unico":
            $messaggio = "Coste único";
            break;
        case "Costo giornaliero":
            $messaggio = "Coste diario";
            break;
        case "Motivazioni delle regole di assegnazone 1 per disponibilità condizionata da tenere in conto":
            $messaggio = "Motivaciones de las reglas de asignación 1 para disponibilidad condicional a considerar";
            break;
        case "nessuna":
            $messaggio = "ninguna";
            break;
        case "comportati come se non vi fosse più disponibilità":
            $messaggio = "Portate como si ya no hubiese disponibilidad";
            break;
        case "dai ancora disponibilità con questa frase alternativa":
            $messaggio = "Dí que todavía hay disponibilidad con esta frase alternativa";
            break;
        case "Disponibilità incerta per la tipologia scelta, per ulteriori informazioni contattateci via email":
            $messaggio = "Disponibilidad incierta para la tipología escogida, para ulteriores informaciones contactarnos por correo electronico";
            break;
        case "Mostrare la caparra se presente?":
            $messaggio = "Enseñar la fianza si está presente?";
            break;
        case "Mostrare quali sono i giorni pieni all'interno dei periodi dove non c'è più disponibilità?":
            $messaggio = "Enseñar cuáles son los días llenos al interior de los períodos en los que ya no hay disponibilidad?";
            break;
        case "Mostrare la form di richiesta prenotazione?":
            $messaggio = "Enseñar el formulario para pedir reservar?";
            break;
        case "Indirizzo email a cui inviare le richieste di prenotazione":
            $messaggio = "Dirección de correo electrónico a la que enviar el pedido de reserva";
            break;
        case "Mascherare la provenienza dell'email sull'envelope?":
            $messaggio = "Enmascarar la proveniencia del email en el envelope?";
            break;
        case "provare a cambiare se non si riescono a spedire le email":
            $messaggio = "intentar cambiarlo si no es posible enviar las emails";
            break;
        case "Tag html di apertura per la formattazione delle font":
            $messaggio = "Elemento html de apertura para dar formato a las letras";
            break;
        case "Tag html di chiusura per la formattazione delle font":
            $messaggio = "Elemento html de cierre para dar formato a las letras";
            break;
        case "Tag html di apertura per la formattazione delle font rosse":
            $messaggio = "Elemento html de apertura para dar formato a las letras rojas";
            break;
        case "Tag html di chiusura per la formattazione delle font rosse":
            $messaggio = "Elemento html de cierre para dar formato a las letras rojas";
            break;
        case "Crea la pagina per la disponibilità":
            $messaggio = "Crear la página para la disponibilidad";
            break;
        case "Controlla la disponibilità":
            $messaggio = "Controlar la disponibilidad";
            break;
        case "dal":
            $messaggio = "desde";
            break;
        case "al":
            $messaggio = "hasta";
            break;
        case "per la tipologia":
            $messaggio = "para la tipología";
            break;
        case "tariffa":
            $messaggio = "tarifa";
            break;
        case "per":
            $messaggio = "para";
            break;
        case "Le date sono sbagliate":
            $messaggio = "Las fechas están equivocadas";
            break;
        case "La tipologia è sbagliata":
            $messaggio = "La tipología está equivocada";
            break;
        case "è":
            $messaggio = "está";
            break;
        case "pien":
            $messaggio = "llen";
            break;
        case "Non c'è più disponibilità nel periodo richiesto":
            $messaggio = "Ya no hay más disponibilidad en el período pedido";
            break;
        case "C'è ancora disponibilità":
            $messaggio = "Todavía hay disponibilidad";
            break;
        case "nel periodo richiesto":
            $messaggio = "en el período pedido";
            break;
        case "nei periodi richiesti":
            $messaggio = "en los períodos pedidos";
            break;
        case "per la tipologia":
            $messaggio = "para la tipología";
            break;
        case "per le tipologie richieste":
            $messaggio = "para las tipologías pedidas";
            break;
        case "Non c'è più disponibilità":
            $messaggio = "Ya no hay más disponibilidad";
            break;
        case "Periodo di":
            $messaggio = "Período de";
            break;
        case "Non c'è ancora nessuna tariffa per la tipologia richiesta in questo periodo":
            $messaggio = "Todavía no hay ninguna tarifa para la tipología pedida en este periodo";
            break;
        case "E' necessario inserire il numero di persone per questa tipologia":
            $messaggio = "Es necesario insertar el número de personas para esta tipología";
            break;
        case "Prezzo":
            $messaggio = "Precio";
            break;
        case "Caparra":
            $messaggio = "Fianza";
            break;
        case "compresi":
            $messaggio = "incluyendo";
            break;
        case "di":
            $messaggio = "de";
            break;
        case "Nuovo controllo":
            $messaggio = "Nuevo control";
            break;
        case "Nome":
            $messaggio = "Nombre";
            break;
        case "Email":
            $messaggio = "Email";
            break;
        case "Commento":
            $messaggio = "Comentario";
            break;
        case "Invia la richiesta di prenotazione":
            $messaggio = "Envía el pedido de reserva";
            break;
        case "Richiesta di prenotazione inviata":
            $messaggio = "Pedido de reserva enviado";
            break;
        case "Non è stato possibile inviare la richiesta":
            $messaggio = "No ha sido posible enviar el pedido";
            break;
        case "da":
            $messaggio = "desde";
            break;
        case "Periodo":
            $messaggio = "Período";
            break;
        case "Tariffa":
            $messaggio = "Tarifa";
            break;
        case "Costi aggiuntivi":
            $messaggio = "Costes añadidos";
            break;
        case "Prezzo totale":
            $messaggio = "Precio total";
            break;
        case "Riferimento":
            $messaggio = "Referencia";
            break;
        case "Richesta prenotazione":
            $messaggio = "Pedido de reserva";
            break;
        case "modificare il valore sulla destra":
            $messaggio = "modificar el valor a la derecha";
            break;
        case "settimane":
            $messaggio = "semanas";
            break;
        case "giorni":
            $messaggio = "días";
            break;
        case "settimana":
            $messaggio = "semana";
            break;
        case "giorno":
            $messaggio = "día";
            break;
        case "La":
            $messaggio = "La";
            break;
        case "Il":
            $messaggio = "El";
            break;
        case "piena":
            $messaggio = "llena";
            break;
        case "pieno":
            $messaggio = "lleno";
            break;
        case "Una pagina chiamata":
            $messaggio = "Una página llamada";
            break;
        case "è stata creata nella directory":
            $messaggio = "ha sido creada en el directorio";
            break;
        case "Si può cambiare la directory dove vengono create le pagine da \"configura e personalizza\"":
            $messaggio = "Se puede cambiar el directorio donde se crean las páginas desde \"configurar y personalizar\"";
            break;
        case "INSERISCI QUI IL TUO HTML":
            $messaggio = "INSERTA AQUI TU HTML";
            break;
        case "FINE DELLA PRIMA PARTE DELL'HTML PERSONALE":
            $messaggio = "FINAL DE LA PRIMERA PARTE DEL HTML PERSONAL";
            break;
        case "INIZIO DELLA SECONDA PARTE DELL'HTML PERSONALE":
            $messaggio = "PRINCIPIO DE LA SEGUNDA PARTE DEL HTML PERSONAL";
            break;
        case "FINE DELLA SECONDA PARTE DELL'HTML PERSONALE":
            $messaggio = "FINAL DE LA SEGUNDA PARTE DEL HTML PERSONAL";
            break;
        case "Prefisso nel nome delle tabelle":
            $messaggio = "Prefijo en el nombre de las tablas";
            break;
        case "Parte html del file prima della form di disponibilità":
            $messaggio = "Parte html del archivo antes del formulario de disponibilidad";
            break;
        case "Parte html del file dopo la form di disponibilità":
            $messaggio = "Parte html del archivo después del formulario de disponibilidad";
            break;
        case "0 per scelta libera":
            $messaggio = "0 para opción libre";
            break;
        case "Possibilità di aggiungere più tipologie da controllare contemporaneamente?":
            $messaggio = "Posibilidad de añadir más tipologías a controlar contemporaneamente?";
            break;
        case "Numero massimo di tipologie":
            $messaggio = "Maximo número de tipologías";
            break;
        case "Numero massimo di tipologie errato":
            $messaggio = "Maximo número de tipologías equivocado";
            break;
        case "Numero di":
            $messaggio = "Número de";
            break;
        case "Il numero di":
            $messaggio = "El número de";
            break;
        case "richiesto è sbagliato":
            $messaggio = "pedido está equivocado";
            break;
        case "in":
            $messaggio = "en";
            break;
        case "Totale":
            $messaggio = "Total";
            break;
        case "Aggiungi una nuova tipologia":
            $messaggio = "Añade una nueva tipología";
            break;
        case "Numero di colonne dei costi aggiuntivi errato":
            $messaggio = "Número de columnas de los costes añadidos equivocado";
            break;
        case "Numero di colonne dei costi aggiuntivi":
            $messaggio = "Número de columnas de los costes añadidos";
            break;
        case "tipologia":
            $messaggio = "tipología";
            break;
        case "Elimina questa tipologia":
            $messaggio = "Elimina esta tipología";
            break;
        case "Scegliere le settimane in cui applicare":
            $messaggio = "Escoger las semanas en las que aplicar";
            break;
        case "Scegliere i giorni in cui applicare":
            $messaggio = "Escoger los días en las que aplicar";
            break;
        case "Chiedere il numero di persone?":
            $messaggio = "Preguntar por el número de personas?";
            break;
        case "persone":
            $messaggio = "personas";
            break;
        case "Persone":
            $messaggio = "Personas";
            break;
        case "persona":
            $messaggio = "persona";
            break;
        case "Continua":
            $messaggio = "Continua";
            break;
        case "singolare":
            $messaggio = "sigular";
            break;
        case "per ogni":
            $messaggio = "para cada";
            break;
        case "Si deve inserire il numero delle persone per":
            $messaggio = "Hay que insertar el número de personas para";
            break;
        case "Errore nei servizi opzionali richiesti":
            $messaggio = "Error en los servicios opcionales pedidos";
            break;
        case "Numero massimo di persone":
            $messaggio = "Número máximo de personas";
            break;
        case "Se le persone superano la capienza massima utilizzare il costo aggiuntivo":
            $messaggio = "Si las personas superan la capacidad máxima utilizar el coste añadido";
            break;
        case "Se il costo può essere moltiplicato aggiungere al massimo":
            $messaggio = "Si el coste puede ser multiplicado añadir al máximo";
            break;
        case "letti aggiuntivi":
            $messaggio = "camas extras";
            break;
        case "Numero massimo di persone errato":
            $messaggio = "Número máximo de personas equivocado";
            break;
        case "Numero massimo di letti aggiuntivi errato":
            $messaggio = "Número máximo de camas extras equivocado";
            break;
        case "supera la capienza massima della tipologia richiesta":
            $messaggio = "supera la capacidad máxima de la tipologia pedida";
            break;
        case "Si può creare un link verso questa pagina dal proprio sito internet":
            $messaggio = "Se puede crear un enlace hacia esta página desde su proprio sitio internet";
            break;
        case "Cancella":
            $messaggio = "Borrar";
            break;
        case "tutte le pagine create":
            $messaggio = "todas las páginas creadas";
            break;
        case "Si è sicuri di voler <b style=\"color: red;\">cancellare</b>":
            $messaggio = "Estas seguro de querer <b style=\"color: red;\">borrar</b>";
            break;
        case "la pagina":
            $messaggio = "la página";
            break;
        case "tutte le pagine create nella directory":
            $messaggio = "todas las páginas creadas en la carpeta";
            break;
        case "tutte le pagine create nelle directory":
            $messaggio = "todas las páginas creadas en las carpetas";
            break;
        case "Cancellate tutte le pagine":
            $messaggio = "Borradas todas las páginas";
            break;
        case "OK":
            $messaggio = "OK";
            break;
        case "Modifica le frasi predefinite":
            $messaggio = "Modificar las frases predefinidas";
            break;
        case "Frasi predefinite":
            $messaggio = "Frases predefinidas";
            break;
        case "Mostrare il quadro indicativo della disponibilità?":
            $messaggio = "Enseñar el cuadro indicativo de la disponibilidad?";
            break;
        case "Non mostrare":
            $messaggio = "No enseñar";
            break;
        case "Colore di sfondo della tabella":
            $messaggio = "Color de fondo de la tabla";
            break;
        case "Colore del giorno di inizio settimana":
            $messaggio = "Color del día de inicio de la semana";
            break;
        case "Colore dei periodi liberi":
            $messaggio = "Color de los períodos libres";
            break;
        case "Colore dei periodi occupati":
            $messaggio = "Color de los períodos ocupados";
            break;
        case "Tag di apertura dei font della tabella":
            $messaggio = "Elemento de apertura de las letras de la tabla";
            break;
        case "Tag di chiusura dei font della tabella":
            $messaggio = "Elemento de cierre de las letras de la tabla";
            break;
        case "Quadro indicativo disponibilità":
            $messaggio = "Cuadro indicativo disponibilidad";
            break;
        case "Gennaio":
            $messaggio = "Enero";
            break;
        case "Febbraio":
            $messaggio = "Febrero";
            break;
        case "Marzo":
            $messaggio = "Marzo";
            break;
        case "Aprile":
            $messaggio = "Abril";
            break;
        case "Maggio":
            $messaggio = "Mayo";
            break;
        case "Giugno":
            $messaggio = "Junio";
            break;
        case "Luglio":
            $messaggio = "Julio";
            break;
        case "Agosto":
            $messaggio = "Agosto";
            break;
        case "Settembre":
            $messaggio = "Septiembre";
            break;
        case "Ottobre":
            $messaggio = "Octubre";
            break;
        case "Novembre":
            $messaggio = "Noviembre";
            break;
        case "Dicembre":
            $messaggio = "Diciembre";
            break;
        case "settimane di intervallo":
            $messaggio = "semanas de intervalo";
            break;
        case "giorni di intervallo":
            $messaggio = "días de intervalo";
            break;
        case "Estendere l'ultima data fino a quella massima disponibile nel database?":
            $messaggio = "Ampliar la última fecha hasta la máxima disponible en la base de datos?";
            break;
        case "necessario":
            $messaggio = "necesario";
            break;
        case "opzionale":
            $messaggio = "opcional";
            break;
        case "non chiedere":
            $messaggio = "no preguntar";
            break;
        case "Inviare la richiesta di prenotazione come messaggio a":
            $messaggio = "Enviar el pedido de reserva como mensaje a";
            break;
        case "Campi della form da chiedere":
            $messaggio = "Campos del formulario a preguntar";
            break;
        case "Cognome":
            $messaggio = "Apellido";
            break;
        case "Genere":
            $messaggio = "Género";
            break;
        case "Data di nascita":
            $messaggio = "Fecha de nacimiento";
            break;
        case "Documento":
            $messaggio = "Documento";
            break;
        case "Nazione":
            $messaggio = "Nación";
            break;
        case "Città":
            $messaggio = "Ciudad";
            break;
        case "Regione":
            $messaggio = "Región";
            break;
        case "Via":
            $messaggio = "Calle";
            break;
        case "Numero civico":
            $messaggio = "Número de casa";
            break;
        case "Codice postale":
            $messaggio = "Código postal";
            break;
        case "Telefono":
            $messaggio = "Teléfono";
            break;
        case "Secondo telefono":
            $messaggio = "Segundo teléfono";
            break;
        case "Terzo telefono":
            $messaggio = "Tercer teléfono";
            break;
        case "Fax":
            $messaggio = "Fax";
            break;
        case "Orario stimato di arrivo":
            $messaggio = "Horario estimativo de llegada";
            break;
        case "Metodo di pagamento della caparra":
            $messaggio = "Método de pago de la fianza";
            break;
        case "Metodi di pagamento della caparra da chiedere e loro eventuali nomi sostitutivi":
            $messaggio = "Métodos de pago de la fianza a preguntar y sus eventuales nombres substitutivos con que enseñarlos";
            break;
        case "Campi della form personalizzati":
            $messaggio = "Campos personalizados del formulario";
            break;
        case "tutti":
            $messaggio = "todos";
            break;
        case "<small>campi necessari</small>":
            $messaggio = "<small>campos necesarios</small>";
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
            $messaggio = "Reservar";
            break;
        case "Mostrare il bottone per prenotare con la pagina di prenotazione immediata se presente?":
            $messaggio = "Enseñar el botón para reservar con la página de reserva instantánea si está presente?";
            break;
        case "Nome file della pagina di prenotazione immediata":
            $messaggio = "Nombre del archivo de la página de reserva instantánea";
            break;
        case "--- OPPURE ---":
            $messaggio = "--- O ---";
            break;
        case "Prenotazione istantanea con PayPal":
            $messaggio = "Reservar instantaneamente con PayPal";
            break;
        case "Accetta solo richieste che cominciano almeno dopo":
            $messaggio = "Aceptar solo consultas que empiezan por lo menos después de";
            $tr = 1;
            break;
        case "Numero di settimane dopo cui prendere richieste errato":
            $messaggio = "Número de semanas después de las cuales tomar consultas equivocado";
            $tr = 1;
            break;
        case "Numero di giorni dopo cui prendere richieste errato":
            $messaggio = "Número de días después de los cuales tomar consultas equivocado";
            $tr = 1;
            break;
        case "Mostrare i calendari per la scelta delle date?":
            $messaggio = "Enseñar los calendarios para escoger las fechas?";
            break;
        case "Stile riquadro calendario":
            $messaggio = "Estilo recuadro del calendario";
            break;
        case "Stile tabella calendario":
            $messaggio = "Estilo tabla del calendario";
            break;
        case "Stile bottoni interni":
            $messaggio = "Estilo botones internos";
            break;
        case "Stile bottone apertura":
            $messaggio = "Estilo botón de apertura";
            break;
        case "Colore date attive":
            $messaggio = "Color fechas activas";
            break;
        case "Colore data selezionata":
            $messaggio = "Color fechas seleccionadas";
            break;
        case "Chiudi":
            $messaggio = "Cerrar";
            break;
        case "mostra":
            $messaggio = "enseñar";
            break;
        case "non mostrare":
            $messaggio = "no enseñar";
            break;
        case "Inviare una copia della email di richiesta prenotazione al richiedente?":
            $messaggio = "Enviar una copia email del pedido de reserva al que pide?";
            break;
        case "Abbiamo ricevuto la sua richiesta di prenotazione e risponderemo al più presto possibile":
            $messaggio = "Hemos recibido su pedido de reserva y contestaremos lo más pronto posible";
            break;
        case "Copia della richiesta è stata inviata a":
            $messaggio = "Copia del pedido ha sido enviada a";
            break;
        case "NON MODIFICARE MANUALMENTE":
            $messaggio = "NO MODIFICAR MANUALMENTE";
            break;
        case "Anteporre il nome della valuta?":
            $messaggio = "Anteponer el nombre del dinero?";
            break;
        case "Stile della tabella che racchiude la form di prenotazione":
            $messaggio = "Estilo de la tabla que contiene el formulario de reserva";
            break;
        case "Allineare la disponibilità con la data di arrivo?":
            $messaggio = "Alinear la disponibilidad con la fecha de llegada?";
            break;
        case "Origine della prenotazione":
            $messaggio = "Origen de la reserva";
            break;
        case "Cartella":
            $messaggio = "Carpeta";
            break;
        case "Pagina cancellata":
            $messaggio = "Página borrada";
            break;
        case "Importa le pagine dalla cartella":
            $messaggio = "Importar las páginas desde la carpeta";
            break;
        case "alla cartella":
            $messaggio = "a la carpeta";
            break;
        case "Importa":
            $messaggio = "Importar";
            break;
        case "Si è sicuri di voler importare le pagine dalla cartella":
            $messaggio = "Estas seguro de querer importar las páginas desde la carpeta";
            break;
        case "eventuali pagine già presenti nella cartella":
            $messaggio = "eventuales páginas ya presentes en la carpeta";
            break;
        case "verranno <b style=\"font-weight: normal; color: red;\">sovrascritte</b>":
            $messaggio = "serán <b style=\"font-weight: normal; color: red;\">sobreescritas</b>";
            break;
        case "Pagine importate":
            $messaggio = "Páginas importadas";
            break;
        case "con i servizi opzionali selezionati":
            $messaggio = "con los servicios opcionales seleccionados";
            break;
        case "Utilizzare le liste di nazioni, regioni, etc. dell'utente":
            $messaggio = "Utilizar listas de naciones, regiones, etc. del usuario";
            break;
        case "Url del file css per la modalità frame":
            $messaggio = "Url del archivo css para la modalidad frame";
            break;
        case "Utilizza per l'aspetto della pagina":
            $messaggio = "Utilizar para el aspecto de la página";
            break;
        case "html personalizzato":
            $messaggio = "html personalizado";
            break;
        case "il tema chiamato":
            $messaggio = "el tema llamado";
            break;
        case "Colore del tema":
            $messaggio = "Color del tema";
            break;
        case "Data di arrivo":
            $messaggio = "Fecha de llegada";
            break;
        case "Data di partenza":
            $messaggio = "Fecha de salida";
            break;
        case "Tipologia":
            $messaggio = "Tipologia";
            break;
        case "default - frame orizzontale":
            $messaggio = "default - frame horizontál";
            break;
        case "Condizioni da accettare nella form":
            $messaggio = "Condiciónes a aceptar en el formulario";
            break;
        case "nomi dall'utente delle liste":
            $messaggio = "nombres del usuario de las listas";
            break;
        case "Accetto":
            $messaggio = "Acepto";
            break;
        case "documento":
            $messaggio = "documento";
            break;
        case "larghezza":
            $messaggio = "anchura";
            break;
        case "altezza":
            $messaggio = "altura";
            break;
        case "Dalla modalidà frame, aprire il secondo passo in una nuova finestra?":
            $messaggio = "Desde la modalidad frame, abrir el segundo paso en una nueva ventana?";
            break;
        case "Geometria della nuova finestra":
            $messaggio = "Dimensiones de la nueva ventana";
            break;
        case "Torna alla HOME":
            $messaggio = "Vuelve a la HOME";
            break;
        case "URL della home":
            $messaggio = "URL de la home";
            break;
        case "URL del logo":
            $messaggio = "URL del logo";
            break;
        case "Valore del tema":
            $messaggio = "Valor del tema";
            break;
        case "Esempio di codice html per includere il primo passo della form in modalità frame su altre pagine del sito":
            $messaggio = "Ejemplo de código html para incluir el primer paso del formulario en modalidad frame sobre otras páginas del sitio web";
            break;
        case "selezionare \"html personalizzato\" nell'aspetto della pagina per modificarla":
            $messaggio = "seleccionar \"html personalizado\" en el aspecto de la página para modificarla";
            break;
        case "Categoria":
            $messaggio = "Categoría";
            break;
        case "Attenzione":
            $messaggio = "Atención";
            break;
        case "le regole 1 di chiusura vengono sempre applicate":
            $messaggio = "las reglas 1 de cierre son aplicadas siempre";
            break;
        case "La tipologia richiesta è chiusa in questo periodo":
            $messaggio = "La tipología pedida está cerrada en este período";
            break;
        case "Spostamento orizzontale della posizione":
            $messaggio = "Desplazamiento horizontal de la posición";
            break;
        case "aggiunto al commento":
            $messaggio = "añadido al comentario";
            break;
        case "aggiunto al campo":
            $messaggio = "añadido al campo";
            break;
        case "del cliente":
            $messaggio = "del cliente";
            break;
        case "URL file css":
            $messaggio = "URL del archivo css";
            break;
        case "ci sono tariffe senza regola di assegnazione n. 2":
            $messaggio = "hay tarifas sin regla de asignación n. 2";
            break;
        case "Codice fiscale":
            $messaggio = "N. Identificación Fiscal";
            break;
        case "Partita iva":
            $messaggio = "Cert. Identificación Fiscal";
            break;
        case "mai":
            $messaggio = "nunca";
            break;
        case "se possibile":
            $messaggio = "si es posible";
            break;
        case "sempre":
            $messaggio = "siempre";
            break;
        case "chiedere":
            $messaggio = "preguntar";
            break;
        case "posizioni vicine":
            $messaggio = "posiciones_cercanas";
            break;
        case "con posizioni vicine":
            $messaggio = "con posiciones cercanas";
            break;
        case "":
            $messaggio = "";
            break;
        case "":
            $messaggio = "";
            break;

# NAME OF THE FILE: same rules as varibles below
        case "mdl_disponibilita":
            $messaggio = "mdl_disponibilidad";
            break;

    } # fine switch ($messaggio)
} # fine if (substr($messaggio,0,4) != "var_")


else {
    switch ($messaggio) {

# NAMES OF VARIABLES: for translation leave the beginning as var_ and use only a-z, A-Z, 
# 0-9 and _ (underscore). No spaces, no accents! There must not be 2 with the same name.
# NOTE: names of variables are only shown when editing files, actually they don't need to be translated
        case "var_nome_pagina":
            $messaggio = "var_nombre_pagina";
            break;
        case "var_anno":
            $messaggio = "var_agno";
            break;
        case "var_tipo_db":
            $messaggio = "var_tipo_db";
            break;
        case "var_nome_db":
            $messaggio = "var_nombre_db";
            break;
        case "var_computer_db":
            $messaggio = "var_ordenador_db";
            break;
        case "var_porta_db":
            $messaggio = "var_puerta_db";
            break;
        case "var_utente_db":
            $messaggio = "var_usuario_db";
            break;
        case "var_password_db":
            $messaggio = "var_contrasegna_db";
            break;
        case "var_carica_estensione_db":
            $messaggio = "var_carga_extension_db";
            break;
        case "var_prefisso_tabelle_db":
            $messaggio = "var_perefijo_tablas_db";
            break;
        case "var_lingua_modello":
            $messaggio = "var_idioma_modelo";
            break;
        case "var_cartella_mysql_lock":
            $messaggio = "var_directorio_mysql_lock";
            break;
        case "var_stile_soldi":
            $messaggio = "var_formato_dinero";
            break;
        case "var_stile_data":
            $messaggio = "var_formato_fechas";
            break;
        case "var_anteponi_nome_valuta":
            $messaggio = "var_anteponer_nombre_dinero";
            break;
        case "var_utente_liste":
            $messaggio = "var_usuario_listas";
            break;
        case "var_estendi_ultima_data":
            $messaggio = "var_ampliar_ultima_fecha";
            break;
        case "var_tariffe_mostra":
            $messaggio = "var_tarifas_a_ensegnar";
            break;
        case "var_nomi_tariffe_imposte":
            $messaggio = "var_nombres_tarifas_impuestas";
            break;
        case "var_aggiungi_costi_fissi":
            $messaggio = "var_agnade_costes_fijos";
            break;
        case "var_chiedi_costi_aggiuntivi_di_pag_inserzione":
            $messaggio = "var_pregunta_costes_agnadidos_de_pag_insercion";
            break;
        case "var_costi_aggiuntivi_mostra":
            $messaggio = "var_costes_agnadidos_a_ensegnar";
            break;
        case "var_nomi_costi_agg_imposti":
            $messaggio = "var_nombres_costes_agnadidos_impuestos";
            break;
        case "var_categorie_costi_agg_imposte":
            $messaggio = "var_categorias_costes_agnadidos_impuestas";
            break;
        case "var_assegna_con_regola2":
            $messaggio = "var_asigna_con_regla1";
            break;
        case "var_considera_motivazioni_regola1":
            $messaggio = "var_considera_motivaciones_regla1";
            break;
        case "var_mostra_frase_alternativa_regola1":
            $messaggio = "var_muestra_frase_alternativa_regla1";
            break;
        case "var_mostra_caparra":
            $messaggio = "var_muestra_fianza";
            break;
        case "var_mostra_richiesta_via_mail":
            $messaggio = "var_muestra_pedido_por_mail";
            break;
        case "var_indirizzo_email":
            $messaggio = "var_direccion_email";
            break;
        case "var_maschera_email":
            $messaggio = "var_enmascara_email";
            break;
        case "var_mostra_giorni_pieni":
            $messaggio = "var_muestra_dias_llenos";
            break;
        case "var_mostra_bottone_paypal":
            $messaggio = "var_muestra_boton_paypal";
            break;
        case "var_nome_modello_paypal":
            $messaggio = "var_nombre_modelo_paypal";
            break;
        case "var_origine_prenotazione":
            $messaggio = "var_origen_reserva";
            break;
        case "var_apertura_tag_font":
            $messaggio = "var_apertura_elemento_letras";
            break;
        case "var_chiusura_tag_font":
            $messaggio = "var_cierre_elemento_letras";
            break;
        case "var_apertura_tag_font_rosse":
            $messaggio = "var_apertura_elemento_letras_rojas";
            break;
        case "var_chiusura_tag_font_rosse":
            $messaggio = "var_cierre_elemento_letras_rojas";
            break;
        case "var_chiedi_numero_persone":
            $messaggio = "var_pregunta_numero_personas";
            break;
        case "var_periodi_no_richieste":
            $messaggio = "var_periodos_no_consultas";
            break;
        case "var_mostra_calendario_scelta_date":
            $messaggio = "var_muestra_calendario_escoger_fechas";
            break;
        case "var_stile_riquadro_calendario":
            $messaggio = "var_estilo_recuadro_calendario";
            break;
        case "var_stile_tabella_calendario":
            $messaggio = "var_estilo_tabla_calendario";
            break;
        case "var_stile_bottoni_calendario":
            $messaggio = "var_estilo_botones_calendario";
            break;
        case "var_stile_bottone_apertura_calendario":
            $messaggio = "var_estilo_boton_apertura_calendario";
            break;
        case "var_spostamento_orizzontale_calendario":
            $messaggio = "var_desplazamiento_horizontal_calendario";
            break;
        case "var_colore_data_attiva_calendario":
            $messaggio = "var_color_fecha_activa_calendario";
            break;
        case "var_colore_data_selezionata_calendario":
            $messaggio = "var_color_fecha_seleccionada_calendario";
            break;
        case "var_stile_tabella_prenotazione":
            $messaggio = "var_estilo_tabla_reserva";
            break;
        case "var_file_css_frame":
            $messaggio = "var_archivo_css_frame";
            break;
        case "var_apri_nuova_finestra_da_frame":
            $messaggio = "var_abrir_nueva_ventana_desde_frame";
            break;
        case "var_larghezza_finestra_da_frame":
            $messaggio = "var_anchura_ventana_desde_frame";
            break;
        case "var_altezza_finestra_da_frame":
            $messaggio = "var_altura_ventana_desde_frame";
            break;
        case "var_tema_modello":
            $messaggio = "var_tema_modelo";
            break;
        case "var_colore_tema":
            $messaggio = "var_color_tema";
            break;
        case "var_valore_tema":
            $messaggio = "var_valor_tema";
            break;
        case "var_allinea_disponibilita_con_arrivo":
            $messaggio = "var_alinear_disponibilidad_con_llegada";
            break;
        case "var_fr_Valuta_sing":
            $messaggio = "var_fr_divisa_sing";
            break;
        case "var_fr_Valuta_plur":
            $messaggio = "var_fr_divisa_plur";
            break;
        case "var_fr_Controlla_la_disponibilita":
            $messaggio = "var_fr_Controla_disponibilidad";
            break;
        case "var_fr_dal":
            $messaggio = "var_fr_desde";
            break;
        case "var_fr_al":
            $messaggio = "var_fr_hasta";
            break;
        case "var_fr_per_la_tipologia":
            $messaggio = "var_fr_para_la_tipologia";
            break;
        case "var_fr_tariffa":
            $messaggio = "var_fr_tarifa";
            break;
        case "var_fr_per":
            $messaggio = "var_fr_para";
            break;
        case "var_fr_Le_date_sono_sbagliate":
            $messaggio = "var_fr_Las_fechas_estan_equivocadas";
            break;
        case "var_fr_La_tipologia_e_sbagliata":
            $messaggio = "var_fr_La_tipologia_esta_equivocada";
            break;
        case "var_fr_parola_La":
            $messaggio = "var_fr_palabra_La";
            break;
        case "var_fr_parola_settimana":
            $messaggio = "var_fr_palabra_semana";
            break;
        case "var_fr_est":
            $messaggio = "var_fr_esta";
            break;
        case "var_fr_pien":
            $messaggio = "var_fr_llen";
            break;
        case "var_fr_lettera_a":
            $messaggio = "var_fr_letra_a";
            break;
        case "var_fr_Non_c_e_piu_disponibilita_nel_periodo_richiesto":
            $messaggio = "var_fr_Ya_no_hay_mas_disponibilidad_en_el_periodo_pedido";
            break;
        case "var_fr_C_e_ancora_disponibilita":
            $messaggio = "var_fr_Todavia_hay_disponibilidad";
            break;
        case "var_fr_Non_c_e_piu_disponibilita":
            $messaggio = "var_fr_Ya_no_hay_mas_disponibilidad";
            break;
        case "var_fr_alternativa_regola1":
            $messaggio = "var_fr_alternativa_regla1";
            break;
        case "var_fr_Periodo_di":
            $messaggio = "var_fr_Periodo_de";
            break;
        case "var_fr_parola_settimane":
            $messaggio = "var_fr_palabra_semanas";
            break;
        case "var_fr_Non_c_e_tariffa_per_questa_tipologia_ecc":
            $messaggio = "var_fr_Todavia_no_hay_ninguna_tarifa_para_la_tipologia_etc";
            break;
        case "var_fr_E_necessario_inserire_il_numero_di_persone_ecc":
            $messaggio = "var_fr_Es_necesario_insertar_el_numero_de_personas_etc";
            break;
        case "var_fr_Prezzo":
            $messaggio = "var_fr_Precio";
            break;
        case "var_fr_Caparra":
            $messaggio = "var_fr_Fianza";
            break;
        case "var_fr_compresi":
            $messaggio = "var_fr_incluyendo";
            break;
        case "var_fr_di":
            $messaggio = "var_fr_de";
            break;
        case "var_fr_Nuovo_controllo":
            $messaggio = "var_fr_Nuevo_control";
            break;
        case "var_fr_Nome":
            $messaggio = "var_fr_Nombre";
            break;
        case "var_fr_Email":
            $messaggio = "var_fr_Email";
            break;
        case "var_fr_Commento":
            $messaggio = "var_fr_Comentario";
            break;
        case "var_fr_Invia_la_richiesta_di_prenotazione":
            $messaggio = "var_fr_Envia_el_pedido_de_reserva";
            break;
        case "var_fr_Richiesta_di_prenotazione_inviata":
            $messaggio = "var_fr_Pedido_de_reserva_enviado";
            break;
        case "var_fr_Non_e_stato_possibile_inviare_la_richiesta":
            $messaggio = "var_fr_No_ha_sido_posible_enviar_el_pedido";
            break;
        case "var_fr_da":
            $messaggio = "var_fr_desde2";
            break;
        case "var_fre_Email":
            $messaggio = "var_fre_Email";
            break;
        case "var_fre_Nome":
            $messaggio = "var_fre_Nombre";
            break;
        case "var_fre_Commento":
            $messaggio = "var_fre_Comentario";
            break;
        case "var_fre_Periodo":
            $messaggio = "var_fre_Periodo";
            break;
        case "var_fre_dal":
            $messaggio = "var_fre_desde";
            break;
        case "var_fre_al":
            $messaggio = "var_fre_hasta";
            break;
        case "var_fre_Tariffa":
            $messaggio = "var_fre_Tarifa";
            break;
        case "var_fre_Costi_aggiuntivi":
            $messaggio = "var_fre_Costes_agnadidos";
            break;
        case "var_fre_sett":
            $messaggio = "var_fre_semanas";
            break;
        case "var_fre_Prezzo_totale":
            $messaggio = "var_fre_Precio_total";
            break;
        case "var_fre_Riferimento":
            $messaggio = "var_fre_Referencia";
            break;
        case "var_fre_Caparra":
            $messaggio = "var_fre_Fianza";
            break;
        case "var_fre_Richesta_prenotazione":
            $messaggio = "var_fre_Pedido_de_reserva";
            break;
        case "var_fr_Richesta_prenotazione":
            $messaggio = "var_fr_Pedido_de_reserva";
            break;
        case "var_periodi_menu":
            $messaggio = "var_lista_periodos";
            break;
        case "var_fr_appartamenti":
            $messaggio = "var_fr_apartamentos";
            break;
        case "var_fr_appartamento":
            $messaggio = "var_fr_apartamento";
            break;
        case "var_chiedi_numero_appartamenti_per_tipologia":
            $messaggio = "var_pide_numero_apartamentos_por_tipologia";
            break;
        case "var_massimo_numero_appartamenti_per_tipologia":
            $messaggio = "var_maximo_numero_apartamentos_por_tipologia";
            break;
        case "var_aggiungi_altre_tipologie":
            $messaggio = "var_agnade_otras_tipologias";
            break;
        case "var_massimo_numero_altre_tipologie":
            $messaggio = "var_maximo_numero_otras_tipologias";
            break;
        case "var_cerca_appartamenti_vicini":
            $messaggio = "var_busca_apartamentos_cercanos";
            break;
        case "var_fr_Numero_di":
            $messaggio = "var_fr_Numero_de";
            break;
        case "var_fr_Il_numero_di":
            $messaggio = "var_fr_El_numero_de";
            break;
        case "var_fr_richiesto_e_sbagliato":
            $messaggio = "var_fr_pedido_esta_equivocado";
            break;
        case "var_fr_in":
            $messaggio = "var_fr_en";
            break;
        case "var_fr_Totale":
            $messaggio = "var_fr_Total";
            break;
        case "var_fre_Numero_di_appartamenti":
            $messaggio = "var_fre_Numero_de_apartamentos";
            break;
        case "var_fre_Persone":
            $messaggio = "var_fre_Personas";
            break;
        case "var_fr_Aggiungi_una_nuova_tipologia":
            $messaggio = "var_fr_Agnade_una_nueva_tipologia";
            break;
        case "var_numero_colonne_costi_aggiuntivi":
            $messaggio = "var_numero_columnas_costes_agnadidos";
            break;
        case "var_fr_per_la_tipologia":
            $messaggio = "var_fr_para_la_tipologia";
            break;
        case "var_fr_per_le_tipologie_richieste":
            $messaggio = "var_fr_para_las_tipologias_pedidas";
            break;
        case "var_fr_nel_periodo_richiesto":
            $messaggio = "var_fr_en_el_periodo_pedido";
            break;
        case "var_fr_nei_periodi_richiesti":
            $messaggio = "var_fr_en_los_periodos_pedidos";
            break;
        case "var_fr_tipologia":
            $messaggio = "var_fr_tipologia";
            break;
        case "var_fr_Torna_indietro":
            $messaggio = "var_fr_Vuelve_atras";
            break;
        case "var_fr_Elimina_questa_tipologia":
            $messaggio = "var_fr_Elimina_esta_tipologia";
            break;
        case "var_fr_Scegliere_le_settimane_in_cui_applicare":
            $messaggio = "var_fr_Escoger_las_semanas_en_las_que_aplicar";
            break;
        case "var_fr_persone":
            $messaggio = "var_fr_personas";
            break;
        case "var_fr_persona":
            $messaggio = "var_fr_persona";
            break;
        case "var_fr_Continua":
            $messaggio = "var_fr_Continua";
            break;
        case "var_fr_per_ogni":
            $messaggio = "var_fr_para_cada";
            break;
        case "var_fr_Si_deve_inserire_il_numero_delle_persone_per":
            $messaggio = "var_fr_Hay_que_insertar_el_numero_de_personas_para";
            break;
        case "var_fr_Errore_nei_servizi_opzionali_richiesti":
            $messaggio = "var_fr_Error_en_los_servicios_opcionales_pedidos";
            break;
        case "var_massimo_numero_persone":
            $messaggio = "var_maximo_numero_personas";
            break;
        case "var_costo_aggiungi_letti":
            $messaggio = "var_coste_agnade_camas";
            break;
        case "var_massimo_numero_letti_aggiuntivi":
            $messaggio = "var_maximo_numero_camas_extra";
            break;
        case "var_fr_supera_la_capienza_massima_della_tipologia_richiesta":
            $messaggio = "var_fr_supera_la_capacidad_maxima_de_la_tipologia_pedida";
            break;
        case "var_mostra_quadro_disponibilita":
            $messaggio = "var_ensegna_cuadro_disponibilidad";
            break;
        case "var_raggruppa_quadro_disponibilita_con_regola_2":
            $messaggio = "var_agrupar_cuadro_disponibilidad_con_regla_2";
            break;
        case "var_raggruppa_quadro_disponibilita_con_persone":
            $messaggio = "var_agrupar_cuadro_disponibilidad_con_personas";
            break;
        case "var_colore_sfondo_quadro_disponibilita":
            $messaggio = "var_color_fondo_cuadro_disponibilidad";
            break;
        case "var_colore_inizio_settimana_quadro_disponibilita":
            $messaggio = "var_color_inicio_semana_cuadro_disponibilidad";
            break;
        case "var_colore_libero_quadro_disponibilita":
            $messaggio = "var_color_libre_cuadro_disponibilidad";
            break;
        case "var_colore_occupato_quadro_disponibilita":
            $messaggio = "var_color_ocupado_cuadro_disponibilidad";
            break;
        case "var_apertura_font_quadro_disponibilita":
            $messaggio = "var_apertura_elemento_letras_cuadro_disponibilidad";
            break;
        case "var_chiusura_font_quadro_disponibilita":
            $messaggio = "var_cierre_elemento_letras_cuadro_disponibilidad";
            break;
        case "var_mostra_numero_liberi_quadro_disponibilita":
            $messaggio = "var_ensegna_numero_libres_cuadro_disponibilidad";
            break;
        case "var_fr_Quadro_indicativo_disponibilita":
            $messaggio = "var_fr_Cuadro_indicativo_disponibilidad";
            break;
        case "var_fr_Gennaio":
            $messaggio = "var_fr_Enero";
            break;
        case "var_fr_Febbraio":
            $messaggio = "var_fr_Febrero";
            break;
        case "var_fr_Marzo":
            $messaggio = "var_fr_Marzo";
            break;
        case "var_fr_Aprile":
            $messaggio = "var_fr_Abril";
            break;
        case "var_fr_Maggio":
            $messaggio = "var_fr_Mayo";
            break;
        case "var_fr_Giugno":
            $messaggio = "var_fr_Junio";
            break;
        case "var_fr_Luglio":
            $messaggio = "var_fr_Julio";
            break;
        case "var_fr_Agosto":
            $messaggio = "var_fr_Agosto";
            break;
        case "var_fr_Settembre":
            $messaggio = "var_fr_Septiembre";
            break;
        case "var_fr_Ottobre":
            $messaggio = "var_fr_Octubre";
            break;
        case "var_fr_Novembre":
            $messaggio = "var_fr_Noviembre";
            break;
        case "var_fr_Dicembre":
            $messaggio = "var_fr_Diciembre";
            break;
        case "var_utente_messaggio":
            $messaggio = "var_usuario_mensaje";
            break;
        case "var_chiedi_cognome":
            $messaggio = "var_pedir_apellido";
            break;
        case "var_chiedi_nome":
            $messaggio = "var_pedir_nombre";
            break;
        case "var_chiedi_email":
            $messaggio = "var_pedir_email";
            break;
        case "var_chiedi_sesso":
            $messaggio = "var_pedir_sexo";
            break;
        case "var_chiedi_datanascita":
            $messaggio = "var_pedir_fechanacimiento";
            break;
        case "var_chiedi_documento":
            $messaggio = "var_pedir_documento";
            break;
        case "var_chiedi_nazione":
            $messaggio = "var_pedir_nacion";
            break;
        case "var_chiedi_citta":
            $messaggio = "var_pedir_ciudad";
            break;
        case "var_chiedi_regione":
            $messaggio = "var_pedir_region";
            break;
        case "var_chiedi_via":
            $messaggio = "var_pedir_calle";
            break;
        case "var_chiedi_numcivico":
            $messaggio = "var_pedir_numerocasa";
            break;
        case "var_chiedi_cap":
            $messaggio = "var_pedir_codigopostal";
            break;
        case "var_chiedi_telefono":
            $messaggio = "var_pedir_telefono";
            break;
        case "var_chiedi_telefono2":
            $messaggio = "var_pedir_telefono2";
            break;
        case "var_chiedi_telefono3":
            $messaggio = "var_pedir_telefono3";
            break;
        case "var_chiedi_fax":
            $messaggio = "var_pedir_fax";
            break;
        case "var_chiedi_codfiscale":
            $messaggio = "var_pedir_numidfiscal";
            break;
        case "var_chiedi_partitaiva":
            $messaggio = "var_pedir_certidfiscal";
            break;
        case "var_chiedi_commento":
            $messaggio = "var_pedir_comentario";
            break;
        case "var_chiedi_oracheckin":
            $messaggio = "var_pedir_horaentrada";
            break;
        case "var_chiedi_metodopagamento":
            $messaggio = "var_pedir_metodopago";
            break;
        case "var_metodi_pagamento_da_chiedere":
            $messaggio = "var_metodos_pago_a_pedir";
            break;
        case "var_nomi_metodi_pagamento_imposti":
            $messaggio = "var_nombres_metodos_pago_impuestos";
            break;
        case "var_campi_form_personalizzati":
            $messaggio = "var_campos_formulario_personalizados";
            break;
        case "var_chiedi_campi_form_personalizzati":
            $messaggio = "var_pedir_campos_formulario_personalizados";
            break;
        case "var_ins_campi_form_personalizzati":
            $messaggio = "var_ins_campos_formulario_personalizados";
            break;
        case "var_campi_form_doc_condizioni":
            $messaggio = "var_campos_formulario_doc_condiciones";
            break;
        case "var_chiedi_campi_form_doc_condizioni":
            $messaggio = "var_pedir_campos_formulario_doc_condiciones";
            break;
        case "var_fr_Cognome":
            $messaggio = "var_fr_Apellido";
            break;
        case "var_fr_Genere":
            $messaggio = "var_fr_Genero";
            break;
        case "var_fr_Data_di_nascita":
            $messaggio = "var_fr_Fecha_de_nacimiento";
            break;
        case "var_fr_Documento":
            $messaggio = "var_fr_Documento";
            break;
        case "var_fr_Nazione":
            $messaggio = "var_fr_Nacion";
            break;
        case "var_fr_Citta":
            $messaggio = "var_fr_Ciudad";
            break;
        case "var_fr_Regione":
            $messaggio = "var_fr_Region";
            break;
        case "var_fr_Via":
            $messaggio = "var_fr_Calle";
            break;
        case "var_fr_Numero_civico":
            $messaggio = "var_fr_Numero_de_casa";
            break;
        case "var_fr_Codice_postale":
            $messaggio = "var_fr_Codigo_postal";
            break;
        case "var_fr_Telefono":
            $messaggio = "var_fr_Telefono";
            break;
        case "var_fr_Secondo_telefono":
            $messaggio = "var_fr_Segundo_telefono";
            break;
        case "var_fr_Terzo_telefono":
            $messaggio = "var_fr_Tercer_telefono";
            break;
        case "var_fr_Fax":
            $messaggio = "var_fr_Fax";
            break;
        case "var_fr_Codice_fiscale":
            $messaggio = "var_fr_N_identificacion_fiscal";
            break;
        case "var_fr_Partita_iva":
            $messaggio = "var_fr_Cert_identificacion_fiscal";
            break;
        case "var_fr_Orario_stimato_di_arrivo":
            $messaggio = "var_fr_Horario_estimativo_de_llegada";
            break;
        case "var_fr_Metodo_di_pagamento_della_caparra":
            $messaggio = "var_fr_Metodo_de_pago_de_la_fianza";
            break;
        case "var_fre_Cognome":
            $messaggio = "var_fre_Apellido";
            break;
        case "var_fre_Genere":
            $messaggio = "var_fre_Genero";
            break;
        case "var_fre_Data_di_nascita":
            $messaggio = "var_fre_Fecha_de_nacimiento";
            break;
        case "var_fre_Documento":
            $messaggio = "var_fre_Documento";
            break;
        case "var_fre_Nazione":
            $messaggio = "var_fre_Nacion";
            break;
        case "var_fre_Citta":
            $messaggio = "var_fre_Ciudad";
            break;
        case "var_fre_Regione":
            $messaggio = "var_fre_Region";
            break;
        case "var_fre_Via":
            $messaggio = "var_fre_Calle";
            break;
        case "var_fre_Numero_civico":
            $messaggio = "var_fre_Numero_de_casa";
            break;
        case "var_fre_Codice_postale":
            $messaggio = "var_fre_Codigo_postal";
            break;
        case "var_fre_Telefono":
            $messaggio = "var_fre_Telefono";
            break;
        case "var_fre_Secondo_telefono":
            $messaggio = "var_fre_Segundo_telefono";
            break;
        case "var_fre_Terzo_telefono":
            $messaggio = "var_fre_Tercer_telefono";
            break;
        case "var_fre_Fax":
            $messaggio = "var_fre_Fax";
            break;
        case "var_fre_Codice_fiscale":
            $messaggio = "var_fre_N_identificacion_fiscal";
            break;
        case "var_fre_Partita_iva":
            $messaggio = "var_fre_Cert_identificacion_fiscal";
            break;
        case "var_fre_Orario_stimato_di_arrivo":
            $messaggio = "var_fre_Horario_estimativo_de_llegada";
            break;
        case "var_fre_Metodo_di_pagamento_della_caparra":
            $messaggio = "var_fre_Metodo_de_pago_de_la_fianza";
            break;
        case "var_fr_campi_necessari":
            $messaggio = "var_fr_campos_necesarios";
            break;
        case "var_fr_piena":
            $messaggio = "var_fr_llena";
            break;
        case "var_fr_asterisco_rosso":
            $messaggio = "var_fr_asterisco_rojo";
            break;
        case "var_fr_asterisco_nero":
            $messaggio = "var_fr_asterisco_negro";
            break;
        case "var_fr_maschile":
            $messaggio = "var_fr_masculino";
            break;
        case "var_fr_femminile":
            $messaggio = "var_fr_femenino";
            break;
        case "var_fr_Prenota":
            $messaggio = "var_fr_Reservar";
            break;
        case "var_fr_OPPURE_linee":
            $messaggio = "var_fr_O_lineas";
            break;
        case "var_fr_Prenotazione_istantanea_con_PayPal":
            $messaggio = "var_fr_Reservar_instantaneamente_con_PayPal";
            break;
        case "var_fr_Chiudi":
            $messaggio = "var_fr_Cerrar";
            break;
        case "var_fr_manda_copia_richiesta_email":
            $messaggio = "var_fr_manda_copia_pedido_email";
            break;
        case "var_fr_Abbiamo_ricevuto_la_sua_richiesta_di_prenotazione_ecc":
            $messaggio = "var_fr_Hemos_recibido_su_pedido_de_reserva_etc";
            break;
        case "var_fr_Copia_della_richiesta_e_stata_inviata_a":
            $messaggio = "var_fr_Copia_del_pedido_ha_sido_enviada_a";
            break;
        case "var_fr_con_i_servizi_opzionali_selezionati":
            $messaggio = "var_fr_con_los_servicios_opcionales_seleccionados";
            break;
        case "var_fr_Data_di_arrivo":
            $messaggio = "var_fr_Fecha_de_llegada";
            break;
        case "var_fr_Data_di_partenza":
            $messaggio = "var_fr_Fecha_de_salida";
            break;
        case "var_fr_Tipologia":
            $messaggio = "var_fr_Tipologia";
            break;
        case "var_fr_Accetto":
            $messaggio = "var_fr_Acepto";
            break;
        case "var_fr_La_tipologia_richiesta_e_chiusa_in_questo_periodo":
            $messaggio = "var_fr_La_tipologia_pedida_esta_cerrada_en_este_periodo";
            break;
        case "var_fr_posizioni_vicine":
            $messaggio = "var_fr_posiciones_cercanas";
            break;
        case "var_fr_con_posizioni_vicine":
            $messaggio = "var_fr_con_posiciones_cercanas";
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