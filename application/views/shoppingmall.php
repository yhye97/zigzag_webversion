
<?php if($keyword) {?>
    <div class="jumbotron text-center">
<h1>ZIGZAG</h1>
    <p>해당하는 쇼핑몰이 존재하지 않습니다.</p>
    <form action = "<?php echo base_url('shoppingmall/search'); ?>" method = "POST">
        <div class="input-group">
        <input type = "text" name = "keyword" class="form-control" size="50" placeholder="쇼핑몰 검색" required>
        <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value = "검색">
        </div>
        </div>
        </form>
</div>
<?php } else {?>
<div class="jumbotron text-center" style="padding: 250px 25px;">
    <h1 style="margin-bottom: 0px;">ZIGZAG</h1>
        <p>쇼핑몰 검색</p>
        <form action = "<?php echo base_url('shoppingmall/search'); ?>" method = "POST">
        <div class="input-group">
        <input type = "text" name = "keyword" class="form-control" size="50" placeholder="쇼핑몰 검색" required><br>
        <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value = "검색">
        </div>
        </div>
        </form>

<br>
<div class="input-group">
<div class="input-group-btn">
<br> <button class="btn btn-danger" onclick="javascript: display();">카테고리 보기</button> <br> 
</div></div>

<br>
       <div id = "category" style="display:none;">
    <?php foreach($category as $el){?>
    <form action = "<?php echo base_url('shoppingmall/cat_search'); ?>" method = "POST">  
    <input type = "hidden", name="cateName", value = <?php echo $el;?>>
    <div class="input-group-btn" style="float: left; width: 20%;">
    <input type = "submit" class="btn btn-danger" value = <?php echo $el;?>>
    </div>
    </form>

    <?php }?>
    </div> <!--category-->
    </div> <!-- jumbotron -->

<div id="portfolio" class="container-fluid text-center bg-grey" >
    <h2>쇼핑몰 순위</h2>
    <div class="row text-center">
    <?php for($i=0;$i<count($name);$i++) {?>
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
        </div> <!-- column-->
         <?php }?>
</div><!--row-->
         </div> <!--porfolio-->

<?php }?>
<script>
    function display()
    {
        var temp = document.getElementById("category");
        if(temp.style.display == "none"){
        temp.style.display = "block";
        }else{
        temp.style.display = "none";
        }
    }

    function btn(){ 
     alert('로그인이 필요한 기능입니다.');
  }
</script>
