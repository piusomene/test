<?php 
		$path=$_SERVER['SCRIPT_FILENAME'];
		if(strcmp(basename($path),'index.php')==0) require_once(dirname($path).'/plugin/contact-form/config.php');
		else require_once(dirname($path).'/../plugin/contact-form/config.php');
?>

<div class="page page-5 clear-fix">

    <h1>Contact</h1>
    
    <div class="layout-50 clear-fix">
        
        <div class="layout-50-left">
        
            <h5>General inquiries</h5>
            
            <br/>
            
            <ul class="no-list list-5">

                <li>
                    <h6>Phone</h6>
                    Local 1.800.353.252<br/>
                    International 1.900.353.252<br/>
                    Monday - Friday 8.30 a.m. - 6.00 p.m. CET
                </li>
                
                <li>
                    <h6>Fax</h6>
                    Local 1.800.353.253<br/>
                    International 1.900.353.253
                </li>
                
                <li>
                    <h6>Postal address</h6>
                    <b>The Warehouse Office Suites</b><br/>
                    17a Ravensbury Terrace<br/>
                    London SW24 AB-5
                </li>

            </ul>
            
        </div>
        
        <div class="layout-50-right">
            
            <h5>Contact form</h5>
			
			<br/>

            <form name="contact-form" id="contact-form" action="" method="post">

                <div class="margin-bottom-20 clear-fix">

                    <div class="form-line block">
                        <input type="text" name="contact-form-name" id="contact-form-name" value="<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>')"/>	
                    </div>
                    <div class="form-line block">
                        <input type="text" name="contact-form-phone" id="contact-form-phone" value="<?php echo CONTACT_FORM_LABEL_DATA_PHONE; ?>" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_PHONE; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_PHONE; ?>')"/>	
                    </div>	
                    <div class="form-line block">
                        <input type="text" name="contact-form-mail" id="contact-form-mail" value="<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>')"/>	
                    </div>					
                    <div class="form-line block">
                        <textarea rows="0" cols="0" name="contact-form-message" id="contact-form-message" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?>')"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></textarea>	
                    </div>

                    <div class="form-line">
                        <a href="#" class="button block" id="contact-form-send">Send</a>
                    </div>

                </div>
                
            </form>
            
        </div>
        
    </div>
    
</div>