var initMap = function() {
    /* GMAP */
    var corte= {lat: 42.309409, lng: 9.149022};

    var currentInfoWindow = null;

    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 8,
        center: corte,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    });

    $('.row-map').each(function() {

        function ddToDms_lat(lat) {

            var lat = lat;
            var latResult;
         
            lat = parseFloat(lat);  
         
            latResult = (lat >= 0)? ' N' : ' S ';
         
            // Joining both variables and separate them with a space.
            var lat_dms = getDms(lat) + latResult;
            
            // Return the resultant string
            
            return lat_dms;

            //$('.event_lat').html(lat_dms);
            //$('.event_lng').html(lng_dms);
         }

         function ddToDms_lng(lng) {
            var lng = lng;

            lng = parseFloat(lng);

            lngResult = (lng >= 0)? ' E' : ' O';
         
            // Call to getDms(lng) function for the coordinates of Longitude in DMS.
            // The result is stored in lngResult variable.
            var lng_dms = getDms(lng) + lngResult;

            return lng_dms;
         }

        function getDms(val) {

            var valDeg, valMin, valSec, result;
          
            val = Math.abs(val);
          
            valDeg = Math.floor(val);
            result = valDeg + "° ";
          
            valMin = Math.floor((val - valDeg) * 60);
            result += valMin + "' ";
          
            valSec = Math.round((val - valDeg - valMin / 60) * 3600 * 1000) / 1000;
            result += valSec + '"';
          
            return result;
          }

        var lat_class = $(this).find('.event_lat');
        var event_lat = lat_class.html();

        var lng_class = $(this).find('.event_lng');
        var event_lng = lng_class.html();

        var lat_dms = ddToDms_lat(event_lat);
        var lng_dms = ddToDms_lng(event_lng);

        lat_class.html(lat_dms);
        lng_class.html(lng_dms);

        
        //console.log(lat_dms, lng_dms);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(event_lat, event_lng),
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP
        });

        var name_class = $(this).find('.event_name');
        var event_name = name_class.html();
        var on_date_class = $(this).find('.on_date');
        var on_date = on_date_class.html();
        var comments_class = $(this).find('.comments');
        var comments = comments_class.html();
        var contentInfoWindow = '<p>' + event_name + '</p><p>' + on_date + '</p><p>' + comments + '</p>';

        var infowindow = new google.maps.InfoWindow({
            content: contentInfoWindow
        })
        google.maps.event.addListener(marker, 'click', function() {
            if (currentInfoWindow !== null) {
                currentInfoWindow.close();
            }
            
            infowindow.open(map, marker);
            currentInfoWindow = infowindow;
        });

        var event_id_id = $(this).find('#event_id');
        var event_id = event_id_id.attr('value');

        $('#edit' + event_id).on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: './index.php?action=displayUpdateView',
                type: 'POST',
                data: 'event_id=' + event_id,
                dataType: 'text',
                success: function() {
                    $('#modal_text').text('Redirection vers la page de l\'évènement');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                            window.location.href = "./index.php?action=displayUpdateView&event_id=" + event_id;
                        });
                }
            });

        });

        $('#delete' + event_id).on('click', function(e) {
            e.preventDefault();

            $('#modal_text_edit').text('Voulez-vous vraiment supprimer cet évènement ?');
            $('#modal_edit').show();
            $('#yes').show();
            $('#no').show();

            $('#yes').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: './index.php?action=deleteEvent',
                    type: 'POST',
                    data: 'event_id=' + event_id,
                    dataType: 'text',
                    success: function(data) {
                        $('#yes').hide();
                        $('#no').hide();
                        $('#modal_text_edit').text('L\'évènement a bien été supprimé');
                        $('#modal_edit').show();
                        $('#modal_edit').fadeOut(4000, function() {
                            $('#modal_text_edit').text('');
                            $('#modal_edit').hide();
                            window.location.href = "./index.php?action=listMapEvents";
                        });
                    }
                });
            });

            $('#no').click(function() {
                $('#yes').hide();
                $('#no').hide();
                $('#modal_text_edit').text('L\'évènement n\'a pas été supprimé');
                $('#modal_edit').show();
                $('#modal_edit').fadeOut(4000, function() {
                    $('#modal_text_edit').text('');
                    $('#modal_edit').hide();
                    window.location.href = "./index.php?action=listMapEvents";
                })
            });

        });
    });
}