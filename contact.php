<?php
include 'header.php';
?>
<div class="row">
    <div class="col-md-6">
        <div class="well well-sm">
            <div class="">
                <h3>Contact us</h3>
                <div id="error_message" style="color:coral;font-size:larger;">

                </div>
                <form action="" class="form-horizontal" method="post" id="myform" onsubmit="return validate();">
                    <div class=" form-group">
                        <input class="form-control"type="text" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control"type="text" placeholder="Subject" id="subject">
                    </div>
                    <div class="form-group">
                        <input class="form-control"type="text" placeholder="Phone" id="phone">
                    </div>
                    <div class="form-group">
                        <input class="form-control"type="text" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"placeholder="Message" id="message"></textarea>
                    </div>
                    <div class="btn">
                        <input class="btn btn-primary"type="submit">
                    </div>
                </form>
            </div>
            <!-- <form class="form-horizontal" method="post" onsubmit = "return contactvalidation();">
                <fieldset>
                    <legend class="text-center header">Contact us</legend>
                    
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-1">
                            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-1">
                            <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-1">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-1">
                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-1">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here. We will get back to you ASAP." rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form> -->
        </div>
    </div>
    <!--contact segment-->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div><h3>Our Office</h3></div>
            <div class="panel-body text-center">
                <h4>Address</h4>
                <div>
                    Hämellinna Road 12<br />
                    01200, Hämellinna<br />
                    service@olympiagym.com<br />
                </div>
                <hr />
                <div class="map">
                    <iframe src="https://maps.google.com/maps?q=hamellinna%20campus&t=&z=11&ie=UTF8&iwloc=&output=embed" width="100%" height="350" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>


<?php
include 'footer.php';
?>