
<div id="about" class="container-fluid text-center">
  <div class="row">
     <form class="form-signin" action = "<?php echo base_url('login/login_access');?>" method = "post">
      <h2>로그인을 해주세요!</h2><br>
      <div class="col-sm-6 form-group">
      <input name = "id" type="id" id="id" class="form-control" placeholder="ID" required autofocus>
      </div>
      <div class="col-sm-6 form-group">
      <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="비밀번호" required>
     </div>
     <div class="panel-footer">
     <button class="btn btn-lg" type="submit">로그인</button>
    </div>
  </form>
  </div>
</div>
