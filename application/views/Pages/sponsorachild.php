<div class="container-fluid" >
    <div class="col-md-6" style="padding: 50px;">
        <div class="item">
            <img src="<?= base_url() ?>css/images/child4.jpg" alt="...." style="height: 330px;">
        </div>
    </div>
    <div class="col-md-6" style="padding: 50px;" >
        <div class = "jumbotron">
            <div class = "container">
                <P style="font-size: 18px;font-family: Times New Roman;">  Plan India's unique sponsorship initiative is made specifically to strengthen the bond between you and your sponsored child. It transcends societal barriers to build a one on one relationship with an underprivileged child, his/her family and support in the development of the community as a whole.</font></P>
                <br>   
                <p>
                    <button class="button" data-toggle="modal" data-target="#myModal">SPONSOR A CHILD</button> 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid"  style="padding-left: 50px;">
    <h3> How we Help Children</h3>
    <br>
    <br>
    <div class="row">
        <div class="float col-md-4 teaser">
            <div class="item">
                <img src="<?= base_url() ?>css/images/edu2.jpg" alt="...." style="width: 300px;">
            </div>
            <h4 style="align:center;"><b> Education</b></h4>
            <p style="line-height: 10px;"align="justify">Save the Children works towards providing </p>
            <p style="line-height: 10px;"align="justify">for underprivileged children and provide</p>
            <p style="line-height: 10px;" align="justify">provide support for poor children's health.</p> 
            <p style="line-height: 10px;" align="justify">Donate money for child education.</p>
            
        </div>

        <div class="float col-md-4 teaser">
            <div class="item">
                <img src="<?= base_url() ?>css/images/ch1.jpg" alt="...." style="width: 300px;">
            </div>
            <h4 style="align:center;"><b> Health</b></h4>
            <p style="line-height: 10px;" > We provide robust health and nutrition benefits</p>
            <p style="line-height: 10px;" >to the children coming from the most marginalised</p>
            <p style="line-height: 10px;" >communities.Donate to charity & help poor child.</p>
            
        </div>

        <div class="float col-md-4 teaser">
            <div class="item">
                <img src="<?= base_url() ?>css/images/commm1.jpg" alt="...." style="width: 300px;">
              
            </div>
            <h4 style="align:center;"><b>Community</b></h4>

            <p style="line-height: 10px;" >A This unique venture acts as an online and offline </p>
            <p style="line-height: 10px;" >donation platform for more than 200 Indian NGOs which</p>
            <p style="line-height: 10px;" >have been scrutinized for their transparency and</p>
            <p style="line-height: 10px;" >credibility.</p>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog" style="padding: 100px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center" style="background-color: buttonhighlight;">Sponsor A Child </h4>
        </div>
        <div class="modal-body">
            <form role="form" action="<?= base_url(); ?>Pages/sponsor" method="post">
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
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>  <input class="form-control" id="mobileno" name="mobileno" placeholder="Mobile No" type="phone" required>
                            </div>
                        </div>
            <div class="col-sm-6 form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>   <input class="form-control" id="address" name="address" placeholder="Address" type="text" required>
                            </div>
                        </div>
             <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="button pull-right" >Send</button> 
                        </div>
                    </div>
            </form>
        </div>
       
      </div>
    </div>
  </div>
</div>