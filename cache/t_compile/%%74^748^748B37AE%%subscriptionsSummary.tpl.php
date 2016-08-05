<?php /* Smarty version 2.6.26, created on 2016-08-02 10:38:33
         compiled from subscription/subscriptionsSummary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'subscription/subscriptionsSummary.tpl', 18, false),array('function', 'translate', 'subscription/subscriptionsSummary.tpl', 18, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "manager.subscriptions.summary"); ?><?php echo ''; ?><?php $this->assign('pageId', "manager.subscriptions.summary"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionsSummary'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.summary"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'individual'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.individualSubscriptions"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'institutional'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.institutionalSubscriptions"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionTypes'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'payments'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.payments"), $this);?>
</a></li>
</ul>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.individualSubscriptions"), $this);?>
</h3>
<ul>
	<?php $_from = $this->_tpl_vars['individualStatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allStatus'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allStatus']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['statusIndex'] => $this->_tpl_vars['status']):
        $this->_foreach['allStatus']['iteration']++;
?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'individual','filterStatus' => $this->_tpl_vars['status']['status']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['status']['localeKey']), $this);?>
</a> (<?php echo $this->_tpl_vars['status']['count']; ?>
)</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','path' => 'individual'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.create"), $this);?>
</a>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.institutionalSubscriptions"), $this);?>
</h3>
<ul>
	<?php $_from = $this->_tpl_vars['institutionalStatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allStatus'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allStatus']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['statusIndex'] => $this->_tpl_vars['status']):
        $this->_foreach['allStatus']['iteration']++;
?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'institutional','filterStatus' => $this->_tpl_vars['status']['status']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['status']['localeKey']), $this);?>
</a> (<?php echo $this->_tpl_vars['status']['count']; ?>
)</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','path' => 'institutional'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.create"), $this);?>
</a>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
