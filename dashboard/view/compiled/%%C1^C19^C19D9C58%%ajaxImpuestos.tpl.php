<?php /* Smarty version 2.6.17, created on 2017-04-18 01:05:03
         compiled from ajax/ajustes/ajaxImpuestos.tpl */ ?>
<div class="card">
    <h3 class="card-block">Impuestos</h3>
    <div class="card-block">
        <div class="row" id="fimpuestos">
            <div class="input-field col s12 m3 l3">
                <input type="text" class="validate" id="vnombre">
                <label for="vnombre">Nombre de Impuesto</label>
                <input type="hidden" id="vid" value="0">
            </div>
            <div class="input-field col s12 m2 l2">
                <input type="text" class="validate" id="vresumen">
                <label for="vresumen">Abreviatura de Impuesto</label>
            </div>
            <div class="input-field col s12 m2 l2">
                <input type="number" class="validate" id="vvalor" placeholder="%">
                <label for="vvalor">Valor de impuesto</label>
                <button type="button" class="btn btn-primary der z-depth-5 blue add" modulo="impuesto" id="addimp">Agregar</button>
            </div>
            <div class="col s12 m5 l5">
                <table class="table responsive-table centered striped bordered highlight z-depth-5" id="data-table-impuestos" cellspacing="0" width="100%" >
                    <thead>
                        <tr>
                            <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 25%">Nombre</th>
                            <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 25%">Abreviatura</th>
                            <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 25%">Valor</th>
                            <th class="white-text blue" style="border: 0; font-size: 1.2em; border-radius: 0px !important; width: 20%" >Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listaimpuestos">
                    <?php unset($this->_sections['LE']);
$this->_sections['LE']['name'] = 'LE';
$this->_sections['LE']['loop'] = is_array($_loop=$this->_tpl_vars['IMP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['LE']['show'] = true;
$this->_sections['LE']['max'] = $this->_sections['LE']['loop'];
$this->_sections['LE']['step'] = 1;
$this->_sections['LE']['start'] = $this->_sections['LE']['step'] > 0 ? 0 : $this->_sections['LE']['loop']-1;
if ($this->_sections['LE']['show']) {
    $this->_sections['LE']['total'] = $this->_sections['LE']['loop'];
    if ($this->_sections['LE']['total'] == 0)
        $this->_sections['LE']['show'] = false;
} else
    $this->_sections['LE']['total'] = 0;
if ($this->_sections['LE']['show']):

            for ($this->_sections['LE']['index'] = $this->_sections['LE']['start'], $this->_sections['LE']['iteration'] = 1;
                 $this->_sections['LE']['iteration'] <= $this->_sections['LE']['total'];
                 $this->_sections['LE']['index'] += $this->_sections['LE']['step'], $this->_sections['LE']['iteration']++):
$this->_sections['LE']['rownum'] = $this->_sections['LE']['iteration'];
$this->_sections['LE']['index_prev'] = $this->_sections['LE']['index'] - $this->_sections['LE']['step'];
$this->_sections['LE']['index_next'] = $this->_sections['LE']['index'] + $this->_sections['LE']['step'];
$this->_sections['LE']['first']      = ($this->_sections['LE']['iteration'] == 1);
$this->_sections['LE']['last']       = ($this->_sections['LE']['iteration'] == $this->_sections['LE']['total']);
?>
                        <tr>
                            <td style="width: 10%"><?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][1]; ?>
</td>
                            <td style="width: 10%"><?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][2]; ?>
</td>
                            <td style="width: 10%"><?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][3]; ?>
</td>
                            <td style="width: 10%">
                                <a class="load material-icons pbtn btn-color" id="m<?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][0]; ?>
" modulo="impuesto">edit</a>
                                <a class="delete material-icons pbtn btn-color cdel" modulo="impuesto" id="d<?php echo $this->_tpl_vars['IMP'][$this->_sections['LE']['index']][0]; ?>
">delete</a>
                            </td>
                        </tr>
                    <?php endfor; endif; ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>