<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<title><?php echo OpenPNEConfig::get('sns_name') ?></title>
</head>
<body><div id="Body">
<div id="Container">

<div id="Header">
<h1><?php echo link_to(OpenPNEConfig::get('sns_name'), '@homepage') ?></h1>

<div id="globalNav">
<?php include_component('default', 'globalNavi') ?>
</div><!-- globalNav -->

<div id="localNav">
<?php if (isset($naviType)) : ?>
<?php include_component('default', 'localNavi', array('type' => $naviType)) ?>
<?php else: ?>
<?php include_component('default', 'localNavi') ?>
<?php endif; ?>
</div><!-- localNav -->
</div><!-- Header -->

<div id="LayoutC">
<div id="Center">
<?php echo $sf_content ?>
</div>
</div>

</div><!-- Container -->
</div><!-- Body -->
</body>
</html>
