<?php if($keyword) {?>
    <div class="jumbotron text-center">
    <h1>ZIGZAG</h1>
    <p>해당하는 상품이 존재하지 않습니다.</p>
    <form action="<?php echo base_url('Finditem/find_item');?>" method="post">
    <div class="input-group">
      <input type="text" name = "item_name" class="form-control" size="50" placeholder="오늘은 어떤 상품을 찾으세요?" required>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
  </form>
</div>
<?php } else{ ?>
    <div class="jumbotron text-center">
    <h1>ZIGZAG</h1>
    <p>상품 검색</p>
    <form action="<?php echo base_url('Finditem/find_item');?>" method="post">
    <div class="input-group">
      <input type="text" name ="item_name" class="form-control" size="50" placeholder="오늘은 어떤 상품을 찾으세요?" required><br>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
  </form>

<div class="input-group">
<div class="input-group-btn">
<br><button class="btn btn-danger" onclick="javascript: display();">아이템 카테고리 보기</button>
</div></div>

<br>
    <div id = "category" style="display:none; ">
    <?php for($i = 0; $i < count($category_index);$i++){?>
    <form id = "category" action = "<?php echo base_url('Finditem/show_category'); ?>" method = "post">
    <input type = "hidden" name = "category_index" value = "<?php echo $category_index[$i]; ?>">
    <input type = "hidden" name = "cate_name" value = "<?php echo $category_name[$i]; ?>">
    <div class="input-group-btn" style="float: left; width: 33%;">
    <button onclick = "javascript:go_category()" name = "category_name" class="btn btn-danger"><?php echo $category_name[$i]; ?></button>
    </div>
    </form>
    <?php } ?>
    </div> 


  </div>
<?php } ?>

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


function go_category(){
  document.getElementById('category').submit();
}
</script>