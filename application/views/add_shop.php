<div id="portfolio" class="container-fluid text-center bg-grey">
<h2><br><br>쇼핑몰 등록</h2><br>
<div class="span4">
<?php echo validation_errors(); ?>
<form class="form-signin" action='<?php echo base_url("manager/insert_shop");?>' method="post">
	
<div class="control-group">
		<label class="label_col">쇼핑몰 이름:</label>
		<div class="controls"><input name="shop_name" id="shop_name" type="text" value="<?php echo set_value('shop_name')?>"></div>
		</div>
		
		<div class="control-group">
		<label class="label_col">쇼핑몰 설명:</label>
		<div class="controls"><input name="shop_info" id="shop_info" type="text" value="<?php echo set_value('shop_info')?>"></div>
		</div>
					
		<div class="control-group">
		<label class="label_col">쇼핑몰 URL:</label>
		<div class="controls"><input name="shop_url" id="shop_URL" type="url" value="<?php echo set_value('shop_url')?>"></div>
		</div>

	<div class="control-group">
		<label class="label_col">쇼핑몰 사진:</label>
		<div class="controls"><input name="shop_img" id="shop_img" type="url" value="<?php echo set_value('shop_img')?>"></div>
		</div>
			
		<div class="control-group">
		<label class="label_col">카테고리:</label>
		<?php for($i=0; $i<count($cat); $i++){?>
			<div class="controls"><input name="shop_cat[]" id="shop_cat" value="<?php echo $i+1 ?>" type="checkbox"><?php echo $cat[$i];?></div>
		<?php }?>
		</div>

			<div class="control-group">
          <input type="submit" class="btn btn-lg" value="쇼핑몰 등록">
        </div>

	
</form>
		</div></div>