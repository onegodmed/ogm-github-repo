   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Send E-Mail</strong>
        </div>
         <form novalidate  action="<?php echo base_url('admin/bulk_email')?>"  name="admin_form" id="admin_form" method="post" enctype="multipart/form-data">
            <div class="card-body card-block">                        
				<div class="form-group">
					<label for="usr">To: <?//=count(explode(',',$bulk_email));?> <?//=$bulk_email?></label>
					<!-- <input type="text" name="to"class="form-control" value="<?php //echo $dev_email; ?>"> -->
					<textarea name="recipient_emails" readonly class="form-control"  placeholder="Enter email for testing" required rows="8" ><?=$bulk_email?></textarea>
				</div>
				<div class="form-group">
					<label for="usr">Subject</label>
					<input type="text" name="subject" required class="form-control">
				</div>
				<input type="hidden" name="back_url" value=""> 
				<div class="form-group">
					<label for="comment">Message:</label>
					<textarea name="message" required class="form-control email_cls" rows="5"  id="area2"></textarea>
				</div>				
            </div>
            <div class="card-footer">
                 <input type="submit" name="submit" class="email_btn btn btn-primary" id="submit" value="Send">
            </div>
        </form>

    </div>
</div> 
    
  <script type="text/javascript" src="<?=base_url('assets/js/text_editor.js');?>"></script>
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
          new nicEditor({fullPanel : true}).panelInstance('area2');
  });
  //]]>
  </script>     

