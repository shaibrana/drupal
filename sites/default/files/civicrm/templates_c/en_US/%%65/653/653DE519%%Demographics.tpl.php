<?php /* Smarty version 2.6.30, created on 2018-01-28 11:58:14
         compiled from CRM/Contact/Page/Inline/Demographics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/Inline/Demographics.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/Inline/Demographics.tpl', 27, false),array('modifier', 'crmDate', 'CRM/Contact/Page/Inline/Demographics.tpl', 42, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="crm-demographic-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?> class="crm-inline-edit" data-dependent-fields='["#crm-contactname-content"]' data-edit-params='{"cid": "<?php echo $this->_tpl_vars['contactId']; ?>
", "class_name": "CRM_Contact_Form_Inline_Demographics"}'<?php endif; ?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
    <div class="crm-edit-help">
      <span class="crm-i fa-pencil"></span> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <?php endif; ?>
    <div class="crm-summary-row">
      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Gender<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-gender_display"><?php echo $this->_tpl_vars['gender_display']; ?>
</div>
    </div>

    <div class="crm-summary-row">
      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date of Birth<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-birth_date_display">
         <?php $this->assign('date_format', $this->_tpl_vars['fields']['birth_date']['smarty_view_format']); ?>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['birth_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['date_format'])); ?>

          &nbsp;
      </div>
    </div>
      <?php if ($this->_tpl_vars['is_deceased'] == 1): ?>
        <?php if ($this->_tpl_vars['deceased_date']): ?>
          <div class="crm-summary-row">
            <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
            <div class="crm-content crm-contact-deceased_date_display">
              <?php echo $this->_tpl_vars['deceased_date']; ?>

            </div>
          </div>
        <?php else: ?>
          <div class="crm-summary-row">
            <div class="crm-label"></div>
            <div class="crm-content crm-contact-deceased_message"><span class="font-red upper"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact is Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></div>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="crm-summary-row">
          <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Age<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-content crm-contact-age_display"><?php if ($this->_tpl_vars['age']['y']): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['y'],'plural' => '%count years')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count year<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif ($this->_tpl_vars['age']['m']): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['m'],'plural' => '%count months')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></div>
        </div>
      <?php endif; ?>

            <?php if (isset ( $this->_tpl_vars['demographics_viewCustomData'] )): ?>
        <?php $_from = $this->_tpl_vars['demographics_viewCustomData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupId'] => $this->_tpl_vars['customValues']):
?>
            <?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvID'] => $this->_tpl_vars['cd_edit']):
?>
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataFieldView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
            <script>
      cj("#custom-set-content-<?php echo $this->_tpl_vars['demographics_custom_group_id']; ?>
 .crm-edit-help").hide();
      </script>
      
    </div>
  </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>