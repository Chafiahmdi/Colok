let Calendar = FullCalendar.Calendar;
let events = [];
$(document).ready(function() {
    if (!!scheds) {
        Object.keys(scheds).map(k => {
            let row = scheds[k];
            events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime });
        });
    }
    let date = new Date();
    let d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,list'
        },
        locale : 'fr',
        selectable: true,
        themeSystem: 'bootstrap',
        // Random default events
        events: events,
        eventClick: function(info) {
            let _details = $('#event-details-modal');
            let id = info.event.id;
            if (!!scheds[id]) {
                _details.find('#title').text(scheds[id].title);
                _details.find('#description').text(scheds[id].description);
                _details.find('#start').text(scheds[id].start_datetime);
                _details.find('#end').text(scheds[id].end_datetime);
                _details.find('#edit,#delete').attr('data-id', id);
                _details.modal('show');
            } else {
                alert("Event is undefined");
            }
        },
        eventDidMount: function(info) {
            // Faire quelque chose après le chargement des événements
        },
        editable: true
    });

    calendar.render();

    // Form reset listener
    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('');
        $(this).find('input:visible').first().focus();
    });

    // Bouton "Modifier"
    $('#edit').click(function() {
        let id = $(this).attr('data-id');
        if (!!scheds[id]) {
            let _form = $('#schedule-form');
            _form.find('[name="id"]').val(id);
            _form.find('[name="title"]').val(scheds[id].title);
            _form.find('[name="description"]').val(scheds[id].description);
            _form.find('[name="start_datetime"]').val(scheds[id].start_datetime);
            _form.find('[name="end_datetime"]').val(scheds[id].end_datetime);
            $('#event-details-modal').modal('hide');
            _form.find('[name="title"]').focus();
        } else {
            alert("Event is undefined");
        }
    });

    // Bouton "Supprimer"
    $('#delete').click(function() {
        let id = $(this).attr('data-id');
        if (!!scheds[id]) {
            let _conf = confirm("Êtes-vous sûr de vouloir supprimer cet événement ?");
            if (_conf === true) {
                // Utilisez une requête AJAX pour supprimer l'événement côté serveur
                $.ajax({
                    url: "../model/deleteCalendar.php?id=" + id,
                    type: "GET",
                    success: function(response) {
                        if (response === "success") {
                            // Redirigez vers la page du calendrier après la suppression réussie
                            window.location = "../view/calendrier.php";
                        } else {
                            
                            // alert("Votre évènement a bien été supprimé.");
                            window.location = "../view/calendrier.php";
                        }
                    },
                    error: function() {
                        alert("Une erreur s'est produite lors de la suppression.");
                    }
                });
            }
        } else {
            alert("Événement non défini");
        }
    });
});

// Après avoir soumis le formulaire et obtenu la réponse JSON
$.ajax({
    url: "../model/saveCalendar.php",
    type: "POST",
    data: formData, // Assurez-vous d'envoyer correctement les données du formulaire
    success: function(response) {
        var data = JSON.parse(response);
        if (data.status === "success") {
            // Afficher une alerte avec le message de succès
            alert(data.message);
            // Rediriger vers la page calendrier.php après la création réussie
            window.location.href = "../view/calendrier.php";
        } else {
            alert("Erreur lors de la création de l'événement.");
        }
    },
    error: function() {
        alert("Une erreur s'est produite lors de la création de l'événement.");
    }
});
