<div id="portfolio" class="container-fluid text-center bg-grey">
<h2><br><br>상품 삭제</h2><br>
	<table border="1">

        <tr>
        <td>ID</td><td>상품명</td><td>상품이미지</td><td>상품설명</td><td>가격</td><td>삭제</td>
        </tr>

        <?php for($i=0; $i<count($id); $i++){?>
            <tr>
            <td><?php echo $id[$i];?></td>
            <td><a href="<?php echo $url[$i]?>"><?php echo $name[$i];?></a></td>
            <td><img src="<?php echo $img[$i];?>" width="100" height="100"></td>
            <td><?php echo $info[$i];?></td>
            <td><?php echo $price[$i];?></td>
            <td>
            <form action="<?php echo base_url("manager/del_item");?>" method="post">
                <input type = "hidden" name="id" value ="<?php echo $id[$i]; ?>">
                <input type = "submit" value ="삭제">
            </form>
            </td>
            </tr>
        <?php }?>
		
	</table>
        </div>