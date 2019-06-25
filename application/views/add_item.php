<div id="portfolio" class="container-fluid text-center bg-grey">
<h2><br><br>상품 등록</h2><br>
<div class="span4">
<?php echo validation_errors(); ?>
<form  class="form-signin" action='<?php echo base_url("manager/insert_item");?>' method="post">
<div class="control-group">
		<label class="control-label">상품 이름:</label>
		<div class="controls">
			<input name="item_name" id="item_name" type="text" value="<?php echo set_value('item_name')?>">
		</div>
	  </div>
	  
	  <div class="control-group">
		<label class="label_col">상품 설명:</label>
		<div class="controls"><input name="item_info" id="item_info" type="text" value="<?php echo set_value('item_info')?>"></div>
		</div>

		<div class="control-group">
		<label class="label_col">상품 URL:</label>
		<div class="controls"><input name="item_url" id="item_URL" type="url" value="<?php echo set_value('item_url')?>"></div>
	</div>

		<div class="control-group">
		<label class="label_col">상품 사진:</label>
		<div class="controls"><input name="item_img" id="item_img" type="url" value="<?php echo set_value('item_img')?>"></div>
		</div>

		<div class="control-group">
		<label class="label_col">상품 가격:</label>
		<div class="controls"><input name="item_price" id="item_price" type="number" value="<?php echo set_value('item_img')?>"></div>
		</div>

		<div class="control-group">
		<label class="label_col">카테고리:</label>
		<?php for($i=0; $i<count($cat); $i++){?>
			<div class="controls"><input name="item_cat[]" id="item_cat" value="<?php echo $i+1 ?>" type="checkbox"><?php echo $cat[$i];?></div>
		<?php }?>
		</div>
	
		<div class="control-group">
          <input type="submit" class="btn btn-lg" value="상품등록">
        </div>

		
</form>
		</div></div>