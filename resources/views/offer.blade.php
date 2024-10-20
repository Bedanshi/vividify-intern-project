
@include('partials.header')
@section('main')
<div class="box">
    <h2 style="text-align: center !important;color: #41597a;  font-family:Playfair Display">Book Online:</h2>
    <form method="POST" action="/bookings/store" enctype="multipart/form-data">
        @csrf
        <div class="content">

            <div class="dropdown">

                <label for="hotel">Book A Hotel:</label>
                <span>
                    <select class="form-control" data-meta="0" id="hotel" name="hotel"
                        aria-labelledby="dropdownMenuButton">
                        <option value="" disabled selected>Select Hotel</option>
                        <option value="bedu's Hospitality">bedu's Hospitality</option>
                        <option value="Sidhartha Hospitality">Sidhartha Hospitality</option>
                        <option value="Yak an dyeti">Yak an dyeti</option>
                    </select>
                </span>

            </div>

            <div class="check">
                <label for="check_in">Check In:</label>
                <input type="date" id="check_in" name="check_in" required>
            </div>

            <div class="check">
                <label for="check_out">Check Out:</label>
                <input type="date" id="check_out" name="check_out" required>
            </div>

            <div class="adult">
                <label for="adult">Adult:</label>
                <span>
                    <select class="form-control" data-meta="0" id="adult" name="adult"
                        aria-labelledby="dropdownMenuButton" required>
                        <option value="" disabled selected>Adult count</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </span>
            </div>

            <div class="children">
                <label for="child">Children:</label>
                <span>
                    <select class="form-control" data-meta="0" id="child" name="child"
                        aria-labelledby="dropdownMenuButton" required>
                        <option value="" disabled selected>Children Count</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </span>
            </div>

            <button type="submit" class="btn btn-dark" style="background-color: #474e5d">Book Now</button>
        </div>
    </form>
</div>

<div class="contents">
    <div class="row">
        <div class="blog">
            <div class="column">
                <div class="card">
                    <a href="{{ url('/message') }}">
                        <img src="{{ asset('/assets/brunch.png') }}" alt="blog" >
                    </a>
                    <h2 style="text-align:center"><a href="{{ url('/') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: #41597a; ">Saturday Brunch</a></h2>

                </div>
            </div>
            <div class="column">
                <div class="card">
                    <a href="{{ url('/message') }}">
                        <img src="{{ asset('/assets/live.png') }}" alt="blog" style="width:100%">
                    </a>
                    <h2 style="text-align: center;"><a href="{{ url('/') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: #41597a;">Live Music Every Friday</a>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <a href="{{ url('/message') }}">
                        <img src="{{ asset('/assets/offer.png') }}" alt="Jane" style="width:100%">
                    </a>
                    <h2 style="text-align: center;"><a href="{{ url('/') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: #41597a;">Special</a></h2>
                       </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
