<div class="container form-one">
   
    <div class="card">
        <div class="card-header">
            <strong><?=ucfirst($comment_type);?> Comment</strong>
        </div>
        <form method="POST" class="form-horizontal">
            <div class="card-body card-block"> 
                <div class="row form-group">
                    
                    <div class="col-12">
                    	<?php if($comment_type!='correction'){	?> 
                    		<textarea name="comment" placeholder="Enter Comment..." class="form-control" id="area2"></textarea>

                    	<?php }else{ ?>
                    	<textarea name="comment" placeholder="Enter Comment..." class="form-control" id="area2"><?php echo 'Hi '.ucfirst($firstName).', <br><br><br><br><br><br>'.EMAIL_SIGNATURE; ?></textarea> 
                    	<?php }?>
					
					</div>
					<input type="hidden" name="user_id" value="<?php echo ($user_id); ?>">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>
		<br>
		<?php if($comment_type!='correction'){	?>
		
		 <table class="table table-striped">
			<thead>
			  <tr>
				<th>No.</th>
				<th>Comment</th>
				<th>Date Time</th>
			  </tr>
			</thead>
			<tbody>
			<?php $i=1;
			if($comments)
			foreach($comments as $comment){ ?> 
			 <tr>
				<td><?=$i;?></td>
				<td><?=$comment->comment;?></td>
				<td><?=$comment->datetime;?></td>
				
			  </tr>
			
			<?php $i++;
			}?>
			 
			</tbody>
		  </table>
		<?php }?>
    </div>
</div> 

   
  <script type="text/javascript" src="<?=base_url('assets/js/text_editor.js');?>">
  </script> 
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
          new nicEditor({fullPanel : true}).panelInstance('area2');
  });
  //]]>
  </script>  