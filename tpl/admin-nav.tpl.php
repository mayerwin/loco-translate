<?php
/**
 * main nav on tabbed admin pages
 */
?>

    <h2 class="nav-tab-wrapper">
        <?php foreach( $nav as $label => $href ):?> 
            <?php if( $href ):?>     
            <a href="<?php echo Loco::html($href)?>" class="nav-tab">
                <?php echo Loco::html($label)?>
            </a>
            <?php else:?> 
            <a href="" class="nav-tab nav-tab-active">
                <?php echo Loco::html($label)?>
            </a>
            <?php endif?> 
        <?php endforeach?> 
        <a href="http://localise.biz/?<?php echo Loco::utm_query('nav')?>" class="nav-tab nav-tab-loco">
            <?php echo Loco::html(Loco::__('Powered by Loco'))?> 
        </a>
    </h2>
    