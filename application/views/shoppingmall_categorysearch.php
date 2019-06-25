<div class="jumbotron text-center" style ="padding: 50px;">
<form action="<?php echo base_url('Shoppingmall/search');?>" method="post">
    <div class="input-group">
      <input type="text" name ="keyword" class="form-control" size="50" placeholder="쇼핑몰 이름을 입력해주세요" required>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
</form>
</div>


<div id="portfolio" class="container-fluid text-center bg-grey" >
  <h2> <?php echo $cat; ?> 검색 결과</h2><br>
  <div class="row text-center">
            <?php for($i=0;$i<count($name);$i++){?>
            <div class="col-sm-4">
      <div class="thumbnail">
          <a href="<?php echo $url[$i];?>"><img src ="<?php echo $img[$i];?>" alt = "<?php echo $name[$i];?>" width="80" height="50"></a>
          <p><strong><?php echo $i+1;echo " ";echo $name[$i];?></strong></p>
        </div></div>
            <?php } ?>
        </div></div>