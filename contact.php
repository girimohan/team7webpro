<?php
include 'header.php';
?>
<div class="row">
    <div class="col-md-6">
        <div class="well well-sm">
            <form class="form-horizontal" method="post">
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
            </form>
        </div>
    </div><!--contact segment-->
    <div class="col-md-6">
    <div class="panel panel-default">
        <div class="text-center header">Our Office</div>
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
</div><hr>


<?php
include 'footer.php';
?>
