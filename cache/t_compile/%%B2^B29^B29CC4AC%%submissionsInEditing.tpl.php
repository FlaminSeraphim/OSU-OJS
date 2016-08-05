<?php /* Smarty version 2.6.26, created on 2016-08-02 05:58:55
         compiled from sectionEditor/submissionsInEditing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_search', 'sectionEditor/submissionsInEditing.tpl', 15, false),array('function', 'url', 'sectionEditor/submissionsInEditing.tpl', 38, false),array('function', 'translate', 'sectionEditor/submissionsInEditing.tpl', 49, false),array('function', 'page_info', 'sectionEditor/submissionsInEditing.tpl', 56, false),array('function', 'page_links', 'sectionEditor/submissionsInEditing.tpl', 57, false),array('block', 'iterate', 'sectionEditor/submissionsInEditing.tpl', 26, false),array('modifier', 'escape', 'sectionEditor/submissionsInEditing.tpl', 33, false),array('modifier', 'date_format', 'sectionEditor/submissionsInEditing.tpl', 35, false),array('modifier', 'truncate', 'sectionEditor/submissionsInEditing.tpl', 37, false),array('modifier', 'strip_tags', 'sectionEditor/submissionsInEditing.tpl', 38, false),array('modifier', 'default', 'sectionEditor/submissionsInEditing.tpl', 39, false),)), $this); ?>
<div id="submissions">
<table width="100%" class="listing">
	<tr><td colspan="8" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
	<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.submit",'sort' => 'submitDate'), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.sec",'sort' => 'section'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "article.authors",'sort' => 'authors'), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "article.title",'sort' => 'title'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submission.copyedit",'sort' => 'subCopyedit'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submission.layout",'sort' => 'subLayout'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.proof",'sort' => 'subProof'), $this);?>
</td>
	</tr>
	<tr><td colspan="8" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php $this->assign('layoutEditorProofSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_LAYOUT')); ?>
	<?php $this->assign('layoutSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_LAYOUT')); ?>
	<?php $this->assign('copyeditorFinalSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_COPYEDITING_FINAL')); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getId()); ?>
	<?php $this->assign('highlightClass', $this->_tpl_vars['submission']->getHighlightClass()); ?>
	<tr valign="top"<?php if ($this->_tpl_vars['highlightClass']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['highlightClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
		<td><?php echo $this->_tpl_vars['submission']->getId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 60, "...")); ?>
</a></td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditorFinalSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutEditorProofSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="8" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="8" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="8" class="endseparator">&nbsp;</td>
	<tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="4" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateSearchField' => $this->_tpl_vars['dateSearchField'],'section' => $this->_tpl_vars['section'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>
