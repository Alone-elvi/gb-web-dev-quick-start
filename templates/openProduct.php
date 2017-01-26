<?php
/**
* Created by PhpStorm.
* User: alone_elvi
* Date: 25.01.17
* Time: 9:53
*/?>

<div id="openedProduct-img">
    <img src="<?php echo $good['img']?>">
</div>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?php echo $good['name']?>
    </h1>
    <div id="openedProduct-desc">
        <?php echo $good['desc']?>
    </div>
    <div id="openedProduct-price">
        Цена: <?php echo $good['price']?>
    </div>
</div>
