

<div id="my" class="jumbotron text-center">
	<br>
	<h2>MYPAGE</h2>
	<h3>회원 정보</h3>
	<?php
	echo "<h4> ID :" . $user_id->U_ID."</h4>";
	echo "<h4> Name :" .$user_name->U_Name."</h4>";
	echo "<h4> Phone :" .'0'.$user_phone->U_Phone."</h4>";

	?>
</div><!--mypage-->

<div id="favsm" class="container-fluid text-center bg-grey">
	<div class="container-fluid text-center">
		<h2>즐겨찾기 <br></h2>
		<h3>내 쇼핑몰 리스트!</h3>
	</div>
	<br>
	<div class="row text-center">
		<?php for ($i=0; $i<count($favsmname);$i++) {?>
		<div class="col-sm-4">
			<div class="thumbnail">
							<a target=\"_blank\" href="<?php echo $favsmurl[$i]; ?>">
								<span>	<img src="<?php echo $favsmimg[$i]; ?>" alt=\"<?php echo $favsmname[$i]; ?>" width="400" height="300"></span>
							</a>
								<strong><h4><?php echo $favsmname[$i];?></h4></strong>
								<p><?php echo $favsmdetails[$i];?></p>

				<form action="<?php echo base_url('mypage/favsm');?>" method="post">
					<input name="favsmid" type="hidden" value="<?php echo $favsmid[$i] ?>">
					<input name="u_index" type ="hidden" value="<?php echo $user_index?>" >
					<div class="control-group">
					<input type="submit" class="btn btn-danger" value = "관심 쇼핑몰 해제하기"></div>
					<!--<span class='icon-heart'><input type="submit" value="Heart" ></span>-->
				</form>
				</div>
			</div>
	<?php if(($i+1)%3==0 && $i!=0) {?>
		<br><br>
	<?php }?>
	<?php }?>
	</div>
</div> <!--즐겨찾기-->

<div id="favitem" class="container-fluid text-center pink">
	<div class="container-fluid text-center">
		<h2>관심 상품 </h2><br>
		<h3>내가 찜한 상품 리스트!</h3>
	</div>
	<br>
	<div class="row text-center">
		<?php for ($i=0; $i<count($name);$i++) {?>
		<div class="col-sm-4">
			<div class="thumbnail">
					<a target=\"_blank\" href="<?php echo $iurl[$i]; ?>">
						<span>	<img src="<?php echo $img[$i]; ?>" alt=\"<?php echo $name[$i]; ?>" width="400" height="300"></span>
					</a>
					<strong><h4><?php echo $name[$i];?></h4></strong>
						<p><?php echo $price[$i];?></p>
					<a target=\"_blank\" href="<?php echo $surl[$i]; ?>"><?php echo $sname[$i];?>
					</a>
				<form action="<?php echo base_url('mypage/favitem');?>" method="post">
					<input name="favitemid" type="hidden" value="<?php echo $iid[$i] ?>">
					<input name="u_index" type ="hidden" value="<?php echo $user_index?>" >
					<div class="control-group">
					<input type="submit" class="btn btn-danger" value = "관심 상품 해제하기"></div>
				</form>
				</div>
			</div>
			<?php if(($i)%3==0 && $i!=0) {?>
				<br><br>
			<?php }?>
		<?php }?>
		</div>
	</div>

</div><!--관심상품-->