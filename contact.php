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
                <form action="" class="form-horizontal" method="post" id="myform" onsubmit="return validate(); sendEmail();">
                    <div class=" form-group">
                        <input class="form-control" type="text" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Subject" id="subject">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Phone" id="phone">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" id="message"></textarea>
                    </div>
                    <div class="btn">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!--contact segment-->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div>
                <h3>Our Office</h3>
            </div>
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