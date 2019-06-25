<div class="jumbotron text-center" style ="padding: 50px;">
<form action="<?php echo base_url('Shoppingmall/search');?>" method="post">
    <div class="input-group">
      <input type="text" name ="keyword" class="form-control" size="50" value = "<?php echo $keyword;?>" placeholder="쇼핑몰 이름을 입력해주세요" required>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
</form>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey" >
<div class="row text-center">
    <?php for($i=0;$i<count($name);$i++):?>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="<?php echo $url[$i];?>"><img src ="<?php echo $img[$i];?>" alt = "<?php echo $name[$i];?>" width="80" height="50"></a>
        <p><strong><?php echo $i+1;echo " ";echo $name[$i];?></strong></p>
    </div>

      <?php if($this->session->is_login){ ?>
        <form action = "<?php echo base_url('shoppingmall/add_FavShoppingmall'); ?>" method="post">
        <input type = "hidden" name = "u_id" value = "<?php echo $u_id ;?>">
        <input type = "hidden" name = "s_id" value = "<?php echo $s_id[$i];?>">
        <input type = "submit" class="btn btn-lg" value = "관심 쇼핑몰 담기">
        </form>
         <?php } else {?>
            <button onclick="javascript:btn()" class="btn btn-lg">관심쇼핑몰 담기</button>
            <?php }?>

</div> <!--col-->
    <?php endfor;?>

</div> <!--row-->
</div>

<script>
    function btn(){ 
     alert('로그인이 필요한 기능입니다.');
  }
</script>
