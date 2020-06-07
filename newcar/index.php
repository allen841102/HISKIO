<?php use Cart\Cart;
use Cart\ProductManager;
use Cart\SessionManager;

require __DIR__ . '/vendor/autoload.php';
$sessionManager = new SessionManager();
//---------------------------
$productManager = new ProductManager();
$cart = new Cart($productManager, $sessionManager);
$cart->load();
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
    foreach ($productManager->getProducts() as $product) {
        ?>
        <tr>
            <form action="insert.php" method="post">
                <td><?php echo($product->name); ?></td>
                <td width="10px">&nbsp;</td>
                <td><?php echo($product->price); ?></td>
                <td width="10px">&nbsp;</td>
                <td>
                    <input type="hidden" name="product" value="<?php echo($product->name); ?>">
                    <button type="submit" name="insert" value="insert">新增</button>
            </form>
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
    <?php
    /** @var \Cart\CarItem $item */
    foreach ($cart->items as $item) {

        ?>
        <tr>
            <td><?php echo $item->getName(); ?></td>
            <td width="10px">&nbsp;</td>
            <td>
                <form action="?update=" method="post">
                    <input type="text" name="newqty" value="<?php echo $item->getQty() ?>">
                    <button type="submit" name="update" value="update">更新數量</button>
                </form>
            </td>

            <td width="10px"><?php echo $item->getTotal(); ?></td>
            <td></td>
            <td width="10px">&nbsp;</td>
            <td>
                <button type="submit" name="delete" value="delete">移除</button>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="7">總價 :<?php echo $cart->getTotalAmount(); ?></td>
    </tr>
</table>

