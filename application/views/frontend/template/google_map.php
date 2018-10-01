<?php $api_keys = 'AIzaSyCcYiR9HwfsGuoxoE3uEQSgu3DYiO14aS4'; ?>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<script>
  var marker;

  function initMap() {
    var point = {lat: <?=$google_lat?>, lng: <?=$google_lng?>};

    map = new google.maps.Map(document.getElementById('map'), {
      center: point,
      zoom: 18,
    });


    // *************************** จุด / Point *************************//

    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading"><?=$google_title?></h4>'+
      '<div id="bodyContent">'+
      '<p><?=$google_address?> [lat : <?=$google_lat?>, lng : <?=$google_lng?>]</p>'+
      '</div>'+
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var icon = {
      //url: "<?=base_url()?>/assets/backend/librarys/google_map_cluster/images/warning.png",
      scaledSize: new google.maps.Size(200,200),
    }

    marker = new google.maps.Marker({
      position: point,
      map: map,
      title: '<?=$google_title?>',
      icon: icon,
      draggable: true,
      animation: google.maps.Animation.DROP,
    });

    marker.addListener('click', function(toggleBounce) {
      infowindow.open(map, marker);
    });

    // *************************** จุด / Point *************************//

    // ************** จุดที่เกิดเหตุทั้ง / Cluster *********************//

    var labels = '<?php foreach ($lat_lng as $data) { echo $data['requestcode']; } ?>';
    /*
    var contentStrings = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading"><?=$google_title?></h4>'+
      '<div id="bodyContent">'+
      '<p><?=$google_address?> [lat : <?=$google_lat?>, lng : <?=$google_lng?>]</p>'+
      '</div>'+
      '</div>';

    var infowindows = new google.maps.InfoWindow({
      content: contentStrings
    });
    */

    var icons = {
      url: "<?=base_url()?>/assets/backend/librarys/google_map_cluster/images/warning.png",
      //scaledSize: new google.maps.Size(50, 50),
    }

    var markers = locations.map(function(location, i) {
      return new google.maps.Marker({
        position: location,
        label: labels[i++ % (labels.length/7)],
        //label: labels,
        icon: icons,
      });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
    {imagePath: '<?=base_url()?>/assets/backend/librarys/google_map_cluster/images/m'});

    // ************** จุดที่เกิดเหตุทั้ง / Cluster *********************//
  }

  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }

  var locations = [
  <?php foreach ($lat_lng as $data): ?>
    {lat: <?=$data['google_lat']?>, lng: <?=$data['google_lng']?>},
  <?php endforeach; ?>
  ]
</script>

<!-- Google Map Cluster -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/librarys/google_map_cluster/markerclusterer.js"></script>
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$api_keys?>&language=th&region=TH&libraries=places&callback=initMap" async defer></script>