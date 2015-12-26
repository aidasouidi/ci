
<?php // echo form_open('pages/about');?>

<form class="form-horizontal" method="post" action="<?php echo site_url('pages/about'); ?>">

<p>
    <label for="login">Login</label>
    <input type="email" name="login" id="login" value="<?php echo set_value('login'); ?>" > </input>
    <?php echo form_error('login', '<p class="help-inline">', '</p>'); ?>
</p>

<p>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" value="<?php echo set_value('password'); ?>"> </input>
    <?php echo form_error('password', '<p class="help-inline">', '</p>'); ?>
</p>

<button type="submit" id="submitbtn">Submit</button>
    <button type="reset" id="reset">Reset</button>
<?php // echo form_close();?>

</form>


<div>
<?php //foreach($record as $value){
    /*
echo $value->login;
    echo "<br></br>";
echo $value->password;;
    */
//}
?>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 col-md-offest-2">.col-xs-12 .col-sm-6 .col-md-8</div>
    <div class="col-xs-6 col-md-2">.col-xs-6 .col-md-4</div>
</div>





<img src="http://www.marhabahotels.tn/medias/sousse_tunisie/tunisie2.jpg" class="img-responsive img-circle" alt="Responsive image">
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Fillllrst Name 588888888888888888888888888888</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark 5888888888888888888888</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitte 85555555555555555555555555555555555555555555555555555r</td>
    </tr>
    </tbody>
</table>


</div>





























