<!--index banner 1: Map/Search Bar -->
<div id="index-banner" class="parallax-container" style="overflow: initial">
    <div class="section no-pad-bot"  style="z-index:1000; position: absolute">
        <div class="container" style="margin-top: 80px">
            <div class="row center">
                <h5 class="header col s12 light" style="color: black">Now you are at</h5>
            </div>
            <div class="row center" style="width: 70%; margin: auto">
                <nav>
                    <form>
                        <div class="nav-wrapper">
                            <div class="input-field">
                                <input type="search" id="search2" placeholder="">
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </div>
                    </form>
                </nav>
            </div>
            <div class="row center" id="search-area" style=" width: 70%;margin: auto; height: 600px; display: none; background: white; border: 1px solid black;">
                <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                    <div style="flex-basis:300px; height: 300px; border: 1px solid black; line-height: initial;" id="map-view" >
                        <div id="map2" style="height: 300px; width: 100%; "></div>
                    </div>
                    <div style="flex-basis:300px; color: black; border: 1px solid black; line-height: initial;" id="search-view">
                        <input type="text" id="address-input"/>
                        <button type="button" onclick="codeAddress($('#address-input').val())">검색</button>
                        <button type="button" onclick="goToLocation()">이 장소로 가기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map" style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px;"></div>
</div>

<!-- Container 1: Near Posts -->

<div class="container">
    <div class="section">
        <div class="row center">
            <h5 class="header col s12 light" style="color: black">Near Posts</h5>
        </div>
        <!--   Near Posts / Carousel   -->
        <div class="row">
            <div class="carousel">
                <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
                <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
                <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
                <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
                <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
            </div>
        </div>

    </div>
</div>


<!-- Near Related Movies : Silder -->


<div class="slider">
    <ul class="slides">
        <li>
            <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
            <div class="caption center-align">
                <h3>Movies related to your location</h3>
                <h5 class="light grey-text text-lighten-3">Toy Story</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
            <div class="caption left-align">
                <h3>Movies related to your location</h3>
                <h5 class="light grey-text text-lighten-3">Snow White</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
            <div class="caption right-align">
                <h3>Movies related to your location</h3>
                <h5 class="light grey-text text-lighten-3">Beauty and the Beast</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Mulan</h5>
            </div>
        </li>
    </ul>
</div>


<!-- movie search -->


<div class="container" style="padding-top: 100px; padding-bottom: 150px">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h5 class="header col s12 light" style="color: black">Didn't you find the movie you want among
                    above?</h5>
            </div>
        </div>

        <div class="row" style="width: 70%; margin: auto">
            <nav>
                <form>
                    <div class="nav-wrapper">
                        <div class="input-field">
                            <input type="search" id="search" placeholder="Search by Movie Name">
                            <label class="label-icon" for="search"><i class="material-icons">movie</i></label>
                            <i class="material-icons">close</i>

                        </div>
                    </div>
                </form>
            </nav>
        </div>
    </div>
</div>



<!--Banner 3-->


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="/static/image/background3.jpg" alt="Unsplashed background img 3"></div>
</div>


<!--글쓰기 FAB-->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">share</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">dashboard</i></a></li>
        <li><a class="btn-floating green modal-trigger" href="#modal3"><i class="material-icons">library_add</i></a>
        </li>

    </ul>
</div>


<!-- Modal Structure (Posting)-->

<div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Posting</h4>
        <div class="row">
            <form class="col s12">

                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="textarea" class="materialize-textarea"></textarea>
                        <label for="textarea">Write Text</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">label</i>
                        <div id="tags" class="chips"></div>
                        <label for="tags">Write tags and hit enter</label>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </div>
</div>

<!--google maps-->
<script>
    var map;
    var map2;
    var selectedPoint;
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
            return null;
        }
        else{
            return decodeURI(results[1]) || 0;
        }
    }
    function initMap2(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                if($.urlParam('lat') && $.urlParam('lng')){
                    pos={
                        lat: parseFloat($.urlParam('lat')),
                        lng: parseFloat($.urlParam('lng'))
                    }
                }
                map2= new google.maps.Map(document.getElementById('map2'), {
                    center: pos,
                    zoom: 15
                });
            });
        }
    }
    function initMap() {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                if($.urlParam('lat') && $.urlParam('lng')){
                    pos={
                        lat: parseFloat($.urlParam('lat')),
                        lng: parseFloat($.urlParam('lng'))
                    }
                }
                map= new google.maps.Map(document.getElementById('map'), {
                    center: pos,
                    zoom: 15
                });
                var marker = new google.maps.Marker({
                    position: pos,
                    map: map
                });
                var geocoder = new google.maps.Geocoder;
                geocodeLatLng(geocoder, map, pos);
            }, function () {
                handleLocationError(true, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, map.getCenter());
        }
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        if (browserHasGeolocation) {
            window.alert('Error on geolocation');
        } else {
            window.alert('The browser doesn\'t support geolocaton service. Please use another browser.');
        }
    }
    // Find the address with coordinates.
    function geocodeLatLng(geocoder, map, pos) {
        geocoder.geocode({'location': pos}, function (results, status) {
            if (status === 'OK') {
                if (results[1]) {
                    $("#search2").attr("placeholder", results[1].formatted_address);
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }
    function codeAddress(address) {
        console.log(address)
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                selectedPoint = results[0].geometry.location;
                map2.setCenter(results[0].geometry.location);
                console.log(results[0].geometry.location)
                var marker = new google.maps.Marker({
                    map: map2,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
    function goToLocation(){
        if(selectedPoint){
            location.href="/?lat="+selectedPoint.lat()+"&lng="+selectedPoint.lng();
        }
    }
    $(function(){
        $('#search2').focus(function(){
            initMap2();
            $('#search-area').show();
            $('#search2').blur();
        })
    })

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvf_j44qOsUly_8Y_8QVAcumWdsbJPRI8&callback=initMap">
</script>