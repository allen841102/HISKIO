<?php session_start();

//---------------------------
//Define the products and price
$products = array("product A", "product B", "product C");
$amounts = array("10", "20", "30");
?>
<h2>商品列表</h2>
<table>
    <tr>
        <th>商品名稱</th>
        <th width="10px">&nbsp;</th>
        <th>單價</th>
        <th width="10px">&nbsp;</th>
        <th></th>
    </tr>
    <?php
    for ($i = 0; $i < count($products); $i++) {
        ?>
        <tr>
            <td><?php echo($products[$i]); ?></td>
            <td width="10px">&nbsp;</td>
            <td><?php echo($amounts[$i]); ?></td>
            <td width="10px">&nbsp;</td>
            <td>
                <button type="submit" name="insert" value="insert">新增</button>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
<br/><br/><br/>
<h2>購物車</h2>
<table>
    <tr>
        <th>商品名稱</th>
        <th width="10px">&nbsp;</th>
        <th>數量</th>
        <th width="10px">&nbsp;</th>
        <th>小計</th>
        <th width="10px">&nbsp;</th>
        <th></th>
    </tr>
    <tr>
        <td>test</td>
        <td width="10px">&nbsp;</td>
        <td>
            <form action="?update=" method="post">
                <input type="text" name="newqty" value="">
                <button type="submit" name="update" value="update">更新數量</button>
            </form>
        </td>

        <td width="10px">&nbsp;</td>
        <td></td>
        <td width="10px">&nbsp;</td>
        <td>
            <button type="submit" name="delete" value="delete">移除</button>
        </td>
    </tr>

    <tr>
        <td colspan="7">總價 :</td>
    </tr>
</table>

