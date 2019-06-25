<div id="portfolio" class="container-fluid text-center bg-grey">
<h2>회원가입</h2><br>
  <div class="span4">
  <?php echo validation_errors(); ?>
    <form class="form-signin" action='<?php echo base_url("Register/do_register"); ?>' method="post">
      <div class="control-group">
        <label class="control-label" for="inputID">아이디</label>
        <div class="controls">
          <input type="text" id="id" name="id" value="<?php echo set_value('id'); ?>" placeholder="아이디">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">비밀번호</label>
        <div class="controls">
          <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>"   placeholder="비밀번호">
        </div>
      </div> 
      <div class="control-group">
        <label class="control-label" for="re_password">비밀번호 확인</label>
        <div class="controls">
          <input type="password" id="re_password" name="re_password" value="<?php echo set_value('re_password'); ?>"   placeholder="비밀번호 확인">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="name">이름</label>
        <div class="controls">
          <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>"  placeholder="이름">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="ismanager">회원 분류</label>
        <div class="controls">
          <input type="radio" name="ismanager" value='1' <?php echo set_radio('ismanager','1'); ?>> 관리자 &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="ismanager" value='0' <?php echo set_radio('ismanager','0'); ?> checked = 'checked'> 일반 회원
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPhonenum">휴대폰 번호</label>
        <div class="controls">
          <input type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="휴대폰 번호">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"></label>
        <div class="control-group">
          <input type="submit" class="btn btn-lg" value="회원가입">
        </div>
      </div>      
    </form>  
  </div>
  <div class="span4"></div>  
</div>