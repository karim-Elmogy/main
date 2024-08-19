@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> {{__('dashboard.crud.add')}}/</span> {{__('dashboard.city.city')}}</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{__('dashboard.crud.add')}}  {{__('dashboard.city.city')}}</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.city.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{url('../assets/admin/img/avatars/city.svg')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"/>
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">{{__('dashboard.user.upload')}}</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input
                                            type="file"
                                            id="upload"
                                            class="account-file-input"
                                            hidden
                                            name="image"
                                            value="{{old('image')}}"
                                        />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">{{__('dashboard.user.reset')}}</span>
                                    </button>

                                    <p class="text-muted mb-0">{{__('dashboard.user.info')}}</p>
                                </div>
                            </div>
                        </div>

                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>Error!</strong> {{$error}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="title">{{__('dashboard.table.name_ar')}} </label>
                                <input type="text" class="form-control" id="name_ar" value="{{old('name_ar')}}" placeholder="{{__('dashboard.table.name_ar')}}" name="name_ar" />
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="title">{{__('dashboard.table.name_en')}} </label>
                                <input type="text" class="form-control"  value="{{old('name_en')}}"  id="name_en" placeholder="{{__('dashboard.table.name_en')}}" name="name_en" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-6 mb-3">
                                <label for="county_id" class="form-label">{{(__('dashboard.county.counties'))}}</label>
                                <select class="form-select" name="county_id" id="county"
                                        aria-label="Default select example" required>
                                    <option value="0" selected disabled>{{(__('dashboard.county.counties'))}}</option>
                                    @foreach ($counties as $county)
                                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 col-6 mb-3">
                                <label class="form-label" for="title">ابحث عن العنوان </label>
                                <input id="searchInput" class="form-control" type="text" required placeholder="ادخل الموقع" />
                            </div>


                            <div class="mb-3 col-6">
                                <label class="form-label" for="title">{{__('dashboard.general.url')}} </label>
                                <input type="url" class="form-control"  value="{{old('url')}}"  id="url" placeholder="{{__('dashboard.general.url')}}" name="url" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" value="{{ old('lat') }}"
                                       placeholder="lat" name="lat" id="lat" hidden>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" value="{{ old('lng') }}"
                                       placeholder="lng" name="lng" id="lng" hidden>
                            </div>
                        </div>
                        <input type="hidden" id="boundaryInput" name="coordinates">

                        <div id="map" style="height:500px; width: auto;" class="my-3"></div>


                        <script>
                            var map;
                            var drawingManager;
                            var autocomplete;
                            var currentMarker = null;
                            var saudiArabia = {
                                lat: 24.7136,
                                lng: 46.6753
                            }; // Center of Saudi Arabia

                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: saudiArabia, // Riyadh, Saudi Arabia
                                    zoom: 6
                                });
                                autocomplete = new google.maps.places.Autocomplete(
                                    document.getElementById('searchInput')
                                );
                                autocomplete.bindTo('bounds', map);
                                autocomplete.addListener('place_changed', function() {
                                    var place = autocomplete.getPlace();
                                    if (!place.geometry) {
                                        alert("Place details not found for input: '" + place.name + "'");
                                        return;
                                    }

                                    if (place.geometry.viewport) {
                                        map.fitBounds(place.geometry.viewport);
                                    } else {
                                        map.setCenter(place.geometry.location);
                                        map.setZoom(17);
                                    }

                                    if (currentMarker) {
                                        currentMarker.setMap(null);
                                    }

                                    currentMarker = new google.maps.Marker({
                                        map: map,
                                        position: place.geometry.location,
                                        title: place.name,
                                        animation: google.maps.Animation.DROP

                                    });
                                    var pinnedLocation = currentMarker.getPosition();
                                    $('#lat').val(JSON.stringify(pinnedLocation.lat()));
                                    $('#lng').val(JSON.stringify(pinnedLocation.lng()));

                                });
                                // Initialize drawing manager
                                drawingManager = new google.maps.drawing.DrawingManager({
                                    drawingMode: google.maps.drawing.OverlayType.POLYGON,
                                    drawingControl: false,
                                    polygonOptions: {
                                        editable: true,
                                        draggable: true
                                    }
                                });

                                // Add drawing manager to map
                                drawingManager.setMap(map);

                                // Add event listener for polygon complete
                                google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
                                    // Get coordinates of polygon
                                    var path = polygon.getPath().getArray();
                                    var coordinates = [];
                                    for (var i = 0; i < path.length; i++) {
                                        // Create a string representation of the coordinate pair and push it to the array
                                        var coordinateString = path[i].lat() + ',' + path[i].lng();
                                        coordinates.push(coordinateString);
                                    }


                                    $('#boundaryInput').val(JSON.stringify(coordinates));
                                });
                            }

                            function searchPlaces() {
                                var input = document.getElementById('searchInput').value;
                                var request = {
                                    query: input,
                                    fields: ['name', 'geometry']
                                };

                                var service = new google.maps.places.PlacesService(map);

                                service.textSearch(request, function(results, status) {
                                    if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {
                                        if (currentMarker) {
                                            currentMarker.setMap(null);
                                        }

                                        currentMarker = new google.maps.Marker({
                                            map: map,
                                            position: results[results.length - 1].geometry.location,
                                            title: results[results.length - 1].name,
                                            animation: google.maps.Animation.DROP
                                        });
                                    }
                                });
                            }
                        </script>


                        <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fYmF8tMMXR4NQTmITpAuauE7hMIxWIg&libraries=places,drawing&callback=initMap"
                                type="text/javascript"></script>




                        <div class="p-4">
                        <button type="submit" class="btn btn-primary ">{{__('dashboard.user.submit')}}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



