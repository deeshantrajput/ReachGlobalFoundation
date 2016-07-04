<div id="contact" class="container-fluid">
    <div  style="padding:40px;">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-4" >
                <p>Contact us and we will get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Reach Global Foundation </p>
                <p><span class="glyphicon glyphicon-phone"></span>0124-4050745, 1800-11-3340</p>
                <p><span class="glyphicon glyphicon-envelope"></span>reachglobalfoundation@gmail.com</p> 
            </div>

            <div class="col-sm-8">
                <form role="form" action="<?= base_url(); ?>Pages/contactus" method="post" class="well form-horizontal" >
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>  <input class="form-control" id="mobileno" name="mobileno" placeholder="Mobile No" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>   <input class="form-control" id="address" name="address" placeholder="Address" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>   <input class="form-control" id="city" name="city" placeholder="City" type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>   
                                <select id="state" name="state" class="form-control selectpicker" required>
                                    <option value=" " >Please select your state</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option >Assam</option>
                                    <option >Bihar</option>
                                    <option >Chhattisgarh</option>
                                    <option >Goa</option>
                                    <option >Gujarat</option>
                                    <option >Haryana</option>
                                    <option >Himachal Pradesh</option>
                                    <option> Jammu & Kashmir</option>
                                    <option >Jharkhand</option>
                                    <option >Karnataka</option>
                                    <option >Kerala</option>
                                    <option >Madhya Pradesh</option>
                                    <option >Maharashtra</option>
                                    <option >Manipur</option>
                                    <option> Meghalaya</option>
                                    <option >Mizoram</option>
                                    <option >Nagaland</option>
                                    <option>Odisha (Orissa)</option>
                                    <option >Punjab</option>
                                    <option> Rajasthan</option>
                                    <option >Sikkim</option>
                                    <option >Tamilnadu</option>
                                    <option>Telangana</option>
                                    <option>Tripura</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Uttrakhand</option>
                                    <option>West Bengal</option>
                                    <option>----------------------</option>
                                    <option>All Indian Union Territories </option>
                                    <option>Andaman and Nicobar Islands</option>
                                    <option>Chandigarh</option>
                                    <option>Dadra and Nagar Haveli</option>
                                    <option>Daman and Diu</option>
                                    <option>Lakshadweep</option>
                                    <option>Delhi</option>
                                    <option>Puducherry (Pondicherry</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <textarea class="form-control" id="message" name="message" placeholder="Message or query" rows="5" required></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="button pull-right" >Send</button> 
                        </div>
                    </div>
                </form>
            </div>


        </div> <!-- container -->

    </div>
</div>
<div class="row" id="googleMap" style="height:400px;width:100%;margin: 0px;margin-bottom: -100px;"></div>

<!-- Add Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDiwUC_66Fh0HRJtJTuGsm_qku_xS1Z9-c "></script>
<script>
    var myCenter = new google.maps.LatLng(28.459497, 77.026638);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 12,
            scrollwheel: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });

        marker.setMap(map);
    }


    google.maps.event.addDomListener(window, 'load', initialize);
</script>