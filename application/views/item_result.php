<div class="jumbotron text-center" style ="padding: 50px;">
<form action="<?php echo base_url('Finditem/find_item');?>" method="post">
    <div class="input-group">
      <input type="text" name ="item_name" class="form-control" size="50" value = "<?php echo $keyword;?>" placeholder="오늘은 어떤 상품을 찾으세요?" required>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
</form>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey" >
  
  <?php if($category_name) {?> 
    <h2><?php echo $category_name; ?> 검색 결과</h2><br>
    <?php } else {?>
      <h2><?php echo $keyword; ?> 검색 결과</h2><br>
    <?php }?>
  <div class="row text-center">
    <?php for($i=0;$i<count($name);$i++){?>

    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="<?php echo $surl[$i];?>"><img src="<?php echo $img[$i];?>" width="400" height="300"></a>
        <p><strong><a href="<?php echo $surl[$i];?>"><?php echo $name[$i];?></a></strong></p>
        <p><?php echo $price[$i];?>원</p>
      </div>
    
    <?php if($this->session->is_login){ ?>
    <form action = "<?php echo base_url('Mypage/insert_favitem')?>"method = "post">
    <input type = "hidden" name = "item_index" value = "<?php echo $item_index[$i];?>">
    <input type = "submit" class="btn btn-lg" value ="관심상품 담기">
    </form>
    <?php }else {?>
        <button onclick="javascript:btn()" class="btn btn-lg">관심상품 담기</button>
    <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>

<script>
    function btn(){ 
     alert('로그인이 필요한 기능입니다.');
  }
</script>
