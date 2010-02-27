<?php /* Smarty version 2.6.25, created on 2010-02-28 01:03:42
         compiled from total.html */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="Shift_JIS" <?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert title here</title>
</head>
<body>

<table border="0" cellspacing="0" cellpadding="2" width="100%">
    <tr bgcolor="#FFCC00">
        <td nowrap height="16"><?php echo $this->_tpl_vars['title']; ?>
</td>
        <td nowrap height="16">得票数</td>
        <td nowrap height="16">割合</td>
    </tr>
    <!-- <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['questions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?> -->
    <tr>
    	<td><?php echo $this->_tpl_vars['questions'][$this->_sections['q']['index']]['str']; ?>
</td>
    	<td><?php echo $this->_tpl_vars['questions'][$this->_sections['q']['index']]['votes']; ?>
</td>
    	<td><?php echo $this->_tpl_vars['questions'][$this->_sections['q']['index']]['per']; ?>
</td>
    </tr>
    <!-- <?php endfor; endif; ?> -->
</table>

</body>
</html>