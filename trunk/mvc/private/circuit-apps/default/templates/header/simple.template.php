<?
$layout = $this->getLayoutConfig();
$LYT_MASTER_CACHEBUST = $this->get('master_cachebuster');
$title = $layout->get('page_title');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head id="profiles_head">
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<title>Gaia Online :: <?=$title;?></title>


<script type="text/javascript">
// return a config setting. Useful for getting PHP constants
// into a javascript application
function GAIA_config(item) {
    switch (item.toLowerCase()) {
        case 'main_server': return '<?= MAIN_SERVER ?>';
        case 'graphics_server': return '<?= GRAPHICS_SERVER ?>';
        case 'jscompiler_server': return '<?= JSCOMPILER_SERVER ?>';
        case 'no_image': return 'http://<?= GRAPHICS_SERVER ?>/images/s.gif';
        case 'avatar_server': return '<?= AVATAR_SERVER ?>';
        case 'town_name': return '<?= LYT_TOWN_NAME ?>';
        case 'session_page': return '<?= SESSION_PAGE_ID ?>';
        case 'cache_value': return '<?= $LYT_MASTER_CACHEBUST ?>';
        default: return null;
    }
}
</script>
<!-- yahoo libraries -->
<link href="http://<?= GRAPHICS_SERVER ?>/src/yui/container/assets/container.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://<?= GRAPHICS_SERVER ?>/src/css/core.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]>
<link href="http://<?= GRAPHICS_SERVER ?>/src/css/core_ie6.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link href="http://<?= GRAPHICS_SERVER ?>/src/css/core_ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->

<script type="text/javascript" src="http://<?= JSCOMPILER_SERVER ?>/src/_/<?= $layout->get('master_cachebuster') ?>/pkg-gaia_gim_core.js"></script>
<? if ($layout->get('enable_debug')) : ?>
    <!-- Yahoo logger libraries -->
    <link href="http://<?= GRAPHICS_SERVER ?>/src/yui/logger/assets/logger.css?<?= $layout->get('yui_version') ?>" rel="stylesheet" type="text/css" media="screen"/>
    <script type="text/javascript" src="http://<?= GRAPHICS_SERVER ?>/src/yui/logger/logger-min.js?<?= $layout->get('yui_version') ?>"></script>
<? endif; ?>

<!-- BEGIN application scripts -->
<? if (!$layout->isEmpty('scripts')) : ?>
    <? foreach ($layout->get('scripts') as $script) : ?>
           <? if (strpos($script,'http://') === FALSE) : ?>
            <script src="http://<?= GRAPHICS_SERVER . $script ?>?<?= $layout->get('app_cachebuster') ?>" type="text/javascript"></script>
        <? else : ?>
            <script src="<?= $script ?>" type="text/javascript"></script>
        <? endif; ?>
    <? endforeach; ?>
<? endif; ?>
<!-- END application scripts -->

<!-- BEGIN application stylesheets -->
<? if (!$layout->isEmpty('css')) : ?>
    <? foreach ($layout->get('css') as $css) : ?>
        <link rel="stylesheet" href="http://<?= GRAPHICS_SERVER . $css['path'] ?>?<?= $layout->get('app_cachebuster') ?>" type="text/css" media="<?= $css['media'] ?>" />
    <? endforeach; ?>
<? endif; ?>
<!-- END application stylesheets -->

<? if (!$layout->isEmpty('css_ie6')) : ?>
<!-- BEGIN IE6 stylesheets -->
<!--[if IE 6]>
<? foreach ($layout->get('css_ie6') as $css) : ?>
<link rel="stylesheet" href="http://<?= GRAPHICS_SERVER . $css['path'] ?>?<?= $layout->get('app_cachebuster') ?>" type="text/css" media="<?= $css['media'] ?>" />
<? endforeach; ?>
<![endif]--> 
<!-- END IE6 stylesheets -->
<? endif; ?>

<? if (!$layout->isEmpty('css_ie7')) : ?>
<!-- BEGIN IE7 stylesheets -->
<!--[if IE 7]>
<? foreach ($layout->get('css_ie7') as $css) : ?>
<link rel="stylesheet" href="http://<?= GRAPHICS_SERVER . $css['path'] ?>?<?= $layout->get('app_cachebuster') ?>" type="text/css" media="<?= $css['media'] ?>" />
<? endforeach; ?>
<![endif]--> 
<!-- END IE7 stylesheets -->
<? endif; ?>
</head>