<h1>Vehicle Details</h1> 
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<button onclick='api_fun();'>Fetch Details</button>
<br>

<table id="myTable" border="1">
  <thead></thead>
  <tbody></tbody>
</table>
<style type="text/css">
    .text_color{
        font-weight: bold;
        color: black;
    }
</style>



<script type="text/javascript">
    function api_fun() {
        $.ajax({
            type: "POST",
            url:'curl.php',
            success: function (response) {
                console.log(response);
                const myJSON = JSON.parse(response);
                $('#myTable > tbody:last-child').append('<tr><td class="text_color">Registration Number</td><td>' +myJSON["registrationNumber"]+ '</td></tr><tr><td class="text_color">co2Emissions</td><td>' +myJSON["co2Emissions"]+ '</td></tr><tr><td class="text_color">Engine Capacity</td><td>' +myJSON["engineCapacity"]+ '</td></tr><tr><td class="text_color">Marked For Export</td><td>' +myJSON["markedForExport"]+ '</td></tr><tr><td class="text_color">Fuel Type</td><td>' +myJSON["fuelType"]+ '</td></tr><tr><td class="text_color">Mot Status</td><td>' +myJSON["motStatus"]+ '</td></tr><tr><td class="text_color">Colour</td><td>' +myJSON["colour"]+ '</td></tr><tr><td class="text_color">Make</td><td>' +myJSON["make"]+ '</td></tr><tr><td class="text_color">Type Approval</td><td>' +myJSON["typeApproval"]+ '</td></tr><tr><td class="text_color">Year Of Manufacture</td><td>' +myJSON["yearOfManufacture"]+ '</td></tr><tr><td class="text_color">Tax Due Date</td><td>' +myJSON["taxDueDate"]+ '</td></tr><tr><td class="text_color">Tax Status</td><td>' +myJSON["taxStatus"]+ '</td></tr><tr><td class="text_color">Date Of Last V5C Issued</td><td>' +myJSON["dateOfLastV5CIssued"]+ '</td></tr><tr><td class="text_color">Mot Expiry Date</td><td>' +myJSON["motExpiryDate"]+ '</td></tr><tr><td class="text_color">Wheel Plan</td><td>' +myJSON["wheelplan"]+ '</td></tr><tr><td class="text_color">Month Of First Registration</td><td>' +myJSON["monthOfFirstRegistration"]+ '</td></tr>');
                   


            }
        });
    }
</script>

<!-- YE56LGJ -->
<!-- RK14XWP -->
<!-- KD57 RGY -->