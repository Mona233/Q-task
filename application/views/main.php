<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Mona's awesome Q-task</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="container">
    
    <!--------------  circle  ------------------>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
	    <form method="post" action="<?php echo base_url(); ?>index.php/circle/index">
			<div id="contact-form" class="form-container" data-form-container>
			<div class="row">
				<div class="form-title">
                                    <h1>Opseg i površina kruga</h1><br>
				</div>
			</div>
			<div class="input-container">
		            <div class="form-group">
                                <input type="number" class="form-control" id="circle" name="circle" placeholder="Polumjer kruga" required="">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button><br><br>
			</div>
			</div>
	    </form>
	</div>
        <div style="text-align: center;"><p><?php 
            if(!empty($circumference)) { echo 'Opseg kruga je: '.$circumference.'.';} else { echo 'Unesite polumjer.'; } 
            if(!empty($surface)) { echo '<br>Površina kruga je: '.$surface.'.';}
            ?></p></div>
    </div>
    
    <!--------------  triangle  ------------------>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
	    <form method="post" action="<?php echo base_url(); ?>index.php/triangle/index">
			<div id="contact-form" class="form-container" data-form-container>
			<div class="row">
				<div class="form-title">
                                    <h1>Opseg i površina trokuta</h1><br>
				</div>
			</div>
			<div class="input-container">
		            <div class="form-group">
                                <input type="number" class="form-control" id="a" name="a" required="" placeholder="Duljina stranice a">
                                <input type="number" class="form-control" id="b" name="b" required="" placeholder="Duljina stranice b">
                                <input type="number" class="form-control" id="c" name="c" required="" placeholder="Duljina stranice c">
                                <input type="number" class="form-control" id="height" name="height" required="" placeholder="Visina na osnovicu">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button><br><br>
			</div>
			</div>
	    </form>
	</div>
        <div style="text-align: center;"><p><?php 
            if(!empty($t_circumference)) { echo 'Opseg trokuta je: '.$t_circumference.'.';} else { echo 'Unesite potrebne dimenzije.'; } 
            if(!empty($t_surface)) { echo '<br>Površina trokuta je: '.$t_surface.'.';} 
            ?></p></div>
    </div>
 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>