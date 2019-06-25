<div id="portfolio" class="container-fluid text-center bg-grey">
<h2><br><br>쇼핑몰 삭제</h2><br>
<p>등록된 쇼핑몰을 삭제하시겠습니까?</p>

	<table border="1">

        <tr>
        <td>ID</td><td>쇼핑몰 이름</td><td>쇼핑몰 이미지</td><td>설명</td><td>삭제</td>
        </tr>
        <tr>
            <td><?php echo $id;?></td>
            <td><a href="<?php echo $url?>"><?php echo $name;?></a></td>
            <td><img src="<?php echo $img;?>" width="200" height="200"></td>
            <td><?php echo $info;?></td>
            <td>
            <form action='<?php echo base_url("manager/del_shop");?>' method="post">
                <input type = "hidden" name="id" value ="<?php echo $id;?>">
                <input type = "submit" value ="삭제">
            </form>
            </td>
        </tr>
		
    </table>
    </div>