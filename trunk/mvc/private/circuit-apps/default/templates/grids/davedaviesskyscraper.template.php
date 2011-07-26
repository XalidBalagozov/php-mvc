<?php
$zones   = $this->get('zones');
$configs = $this->get('zone_configs');
?>
<!-- START GRID: RAY DAVIES -->
<div id="gaia_content" class="grid_dave_davies_skyscraper">

    <? if (isset($zones['hd'])) : ?>
        <!-- START HEADER -->
        <div id="hd">
            <? foreach ($zones['hd'] as $zone) : ?>
                <? $this->render($zone['name']); ?>
            <? endforeach; ?>
        </div>
        <!-- END HEADER -->
    <? endif; ?>

	<div id="bd">

		<div class="grid_rc_container_top">
			<div class="rc_top_left">&nbsp;</div>
			<div class="rc_top_right">&nbsp;</div>
		</div>

		<!-- START ROW 1 -->
		<div id="yui-main">
			<!-- START ZONE: 1A -->
			<div class="yui-g">
				<? foreach ($zones['1a'] as $zone) : ?>
					<? $this->render($zone['name']); ?>
				<? endforeach; ?>
			</div>
			<!-- END ZONE: 1A -->
			<div class="clear"></div>
		</div>
		<!-- END ROW 1 -->
		<!-- START ROW 2 -->
		<div class="yui-gb">
			<!-- START ZONE: 2A -->
			<div class="yui-u first">
				<? foreach ($zones['2a'] as $zone) : ?>
					<? $this->render($zone['name']); ?>
				<? endforeach; ?>
			</div>
			<!-- END ZONE: 2A -->

			<!-- START ZONE: 2B -->
			<div class="yui-u last">
                <? $this->render('Default.Ads.WSkyscraper'); ?>
			</div>
			<!-- END ZONE: 2B -->
			<!-- END ZONE: 2C -->
			<div class="clear"></div>
		</div>
		<!-- END ROW 2 -->
		
		<div class="grid_rc_container_bottom">
			<div class="rc_bottom_left">&nbsp;</div>
			<div class="rc_bottom_right">&nbsp;</div>
		</div>

	</div>

    <? if (isset($zones['ft'])) : ?>
        <!-- START FOOTER -->
        <div id="ft">
            <? foreach ($zones['ft'] as $zone) : ?>
                <? $this->render($zone['name']); ?>
            <? endforeach; ?>
        </div>
        <!-- END FOOTER -->
    <? endif; ?>

</div>
<!-- END GRID: RAY DAVIES -->

<?php
unset($zones, $configs);
?>