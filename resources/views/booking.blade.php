@include('partials.header')

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="box">
        <h2 style="text-align: center !important;color:#d44fbc">Book Online:</h2>
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






    <table>
        <h2 style="text-align:center;padding-buttom:50px;">Booked date:</h2>
        <thead>
            <tr>
                <th>S no.</th>
                <th>Check_in</th>
                <th>Check_out</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('partials.footer')
