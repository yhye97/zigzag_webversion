<div class="jumbotron text-center">
  <h1>ZIGZAG</h1> 
  <p>넘치는 쇼핑몰 중 진짜 예쁜 것만 스마트하게</p> 
  <form action="<?php echo base_url('Finditem/find_item');?>" method="post">
    <div class="input-group">
      <input type="text" name = "item_name" class="form-control" size="50" placeholder="오늘은 어떤 상품을 찾으세요?" required>
      <div class="input-group-btn">
        <input type ="submit" class="btn btn-danger" value ="검색">
      </div>
    </div>
  </form>
</div>