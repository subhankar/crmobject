<?php
require_once('header.php');
require_once('include/recaptchalib.php');
$publickey = "6Le4FtYSAAAAAC6CvPKcS1i6JXAADZPxPfX3XT2W"; // you got this from the signup page
if(isset($_REQUEST['email'])){
	$flag = trim($_REQUEST['email']);
	if($flag == 1){
		$msg = 'Thanks for your query. Our team will get in touch with you soon';
	}else{
		$msg = 'Error in sending mail.';
	}
}
?>

	<div class="box">
    	<div align="center">
		 <form name="contactForm" action="submitProcess.php" method="post" onSubmit="return validateForm();">
         	<fieldset id="fieldset2">
            	<legend align="center" id="legend">Write to us</legend>
                	<table align="center" cellpadding="0" cellspacing="0">
                    	<?php
						if(isset($flag)){
						?>
                        <tr>
                            <td colspan="2" align="center" class="error_label"><?php echo $msg; ?></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                        </tr>
                        <?php
						}
						?>
                    	<tr>
                        	<td align="left" width="150" > <label for="male">Name</label></td>
                            <td align="right" width="181"><input name="name" type="text" id="input" size="50"  /></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                        </tr>
                    	<tr>
                        	<td align="left" width="150" >Email</td>
                            <td align="right" width="181"><input name="email" type="text" id="input" size="50"  /></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                        </tr>
                        <tr>
                        	<td align="left" width="150">Suggestion</td>
                            <td align="right"><textarea name="suggestion" rows="5" cols="47" style="resize: none;" id="input"></textarea></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                        </tr>
                         <tr>
                        	
                            <td align="right" colspan="2"><?php echo recaptcha_get_html($publickey); ?></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2"><input type="submit" value="Send" id="input"/>&nbsp;&nbsp;<input type="button" value="Reset" id="input" onClick="clearForm();"/></td>
                        </tr>
                    </table>
               
            </fieldset>
         </form>
         </div>  
    </div>


<div class="clear"></div>
    
<div class="clear"></div>

<?php
require_once('footer.php');
?>

	
</div><!--end-body wrapper-->

    <!--Nivo Slider-->
    <script type="text/javascript" src="js/slide/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	<!--Nivo Slider-->
	
</body>
</html>
