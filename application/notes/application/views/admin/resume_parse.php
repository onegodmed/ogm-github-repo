   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Resume Parse</strong>
        </div>
        <form method="POST" class="form-horizontal">
            <div class="card-body card-block">
			    <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">User Source</label></div>
                    <div class="col-12 col-md-9">
                    <select required class="form-control" name="user_source">
					<option value="">Select Source</option>
					<option value="CareerBuilder" >CareerBuilder</option>
					<option value="Naukri" >Naukri</option>
					<option value="Indeed">Indeed</option>  
					<option value="Upwork" >Upwork</option>  
					<option value="Monster.com">Monster.com</option>  
					<option value="TimesJob" >TimesJob</option>  
					
					
					</select></div>
                </div>				
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Career Builder Link</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="link" placeholder="Enter Career Builder Resume Link..." class="form-control"></div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

    </div>
</div> 
