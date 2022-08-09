<!-- Done By: Quang, Faris, Alex -->

<!-- <-- BOOKING BAR -->
<div class="book">
    <div class="form-box">
        <form class="book-form" method="post" action="browsebooking.php">
            <!-- Should be get request -->
            <div class="form-item">
                <label for="select-location">Location </label>
                <input type="text" id="select-location" name="address" placeholder="Enter your destination..." required>
            </div>
            <div class="form-item">
                <label for="chekin-date">Check-In </label>
                <input type="date" min="2021-03-24" name="enter_date" id="chekin-date" onchange="updatedate();" required>
            </div>
            <div class="form-item">
                <label for="chekout-date">Check-Out </label>
                <input type="date" min="" name="exit_date" id="chekout-date" required>
            </div>
            <div class="form-item">
                <label for="lots">Vehicle</label>
                <select id="cars" name="cars">
                    <option value="volvo">Car</option>
                    <option value="saab">Van</option>
                    <option value="fiat">Bike</option>
                </select>
            </div>
            <div class="form-item">
                <label for="children">Time-in </label>
                <input type="time" name="enter_time" id="children" required>
            </div>
            <div class="form-item">
                <label for="rooms">Time-Out </label>
                <input type="time" name="exit_time" id="rooms" required>
            </div>
            <div class="form-item book-now">
                <input class="book-button" name="browse_submit" type="submit" value="Search">
            </div>
        </form>
    </div>
</div>


<!-- ********************************** -->



<!-- <-- DATE TIME -->

<!-- <script>
    $(document).ready(function() {
        function updatedate() {
            var firstdate = document.getElementById("chekin-date").value;
            document.getElementById("chekout-date").value = "";
            document.getElementById("chekout-date").setAttribute("min", firstdate);
        });
    });
</script> -->
