<?php 
$subtitle = null;
$url = 'community/edit';
if($communityForm->isNew())
{
  $title = __('Create community');
}
else
{
  $title = __('Edit community');
  $subtitle = $community->getName();
  $url .= '?id='.$community->getId();
}
?>

<?php op_mobile_page_title($title, $subtitle) ?>

<form action="<?php echo url_for($url) ?>" method="post">
<table>
<?php echo $communityForm ?>
<?php echo $communityConfigForm ?>
<tr>
<td colspan="2"><input type="submit" value="<?php echo __('Save') ?>" /></td>
</tr>
</table>
</form>

<?php
if (!$communityForm->isNew())
{
  op_include_parts('buttonBox', 'deleteForm', array(
    'title' => __('Delete this community'),
    'body' => __('delete this community.if you delete this community please to report in advance for all this community members.'),
    'button' => __('Delete'),
    'method' => 'get',
    'url' => url_for('community/delete?id=' . $community->getId()),
  ));
}
?>

<hr color="<?php echo $op_color['core_color_11'] ?>">

<?php echo link_to(__('Community Top'), 'community/home?id='.$community->getId()) ?>
