<?=form_open('giftcards/save/'.$giftcard_info->giftcard_id, ['id' => 'giftcard_form'])?>
<?=$seller ? form_input([
    'name'  => 'giftcard_sale',
    'type'  => 'hidden',
    'value' => 1,
]) : ''?>
<div>
	<div class="field_row clearfix" style="margin: 0 0 5px 0">
		<div>
			<?=form_label($this->lang->line('giftcards_giftcard_number').':', 'name', ['class' => 'lable-form-required'])?>
			<div>
			<?=form_input([
                'name'  => 'giftcard_number',
                'id'    => 'giftcard_number',
                'value' => $giftcard_info->giftcard_number,
                'class' => 'text_box',
            ])?>
			</div>
		</div>
	</div>
	<div class="field_row clearfix" style="margin: 0 0 5px 0">
		<div>
			<?=form_label($this->lang->line('giftcards_card_value').':', 'name', ['class' => 'lable-form-required'])?>
			<div>
			<?=form_input([
                'name'  => 'value',
                'id'    => 'value',
                'value' => $giftcard_info->value,
                'class' => 'text_box',
            ])?>
			</div>
		</div>
	</div>	
</div>
<div class="field_row clearfix" style="color: #FF0000; font-size: 11px">
	<?=$this->lang->line('common_fields_required_message')?>
</div>
<ul id="error_message_box"></ul>
<?=form_submit([
    'name'  => 'submit',
    'id'    => 'submit',
    'value' => $this->lang->line('common_submit'),
    'class' => 'small_button float_right',
])?>
<?=form_close()?>
<script type='text/javascript'>
//validation and submit handling
(function($){
	var sell=<?=$seller ? 'true' : 'false'?>;
	$('#giftcard_number').focus();
	$('#giftcard_form').validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				success:function(response){
					tb_remove();
					if(response.success){
						if(sell)
							window.location='index.php/sales';
						else
							post_giftcard_form_submit(response);
					}else{
						alert(response.message);
					}
				},
				dataType:'json'
			});
		},
		errorLabelContainer:"#error_message_box",
 		wrapper:"li",
		rules:{
			giftcard_number:{
				required:true,
				number:true
			},
			value:{
				required:true,
				number:true
			}
   		},
		messages:{
			giftcard_number:{
				required:"<?=$this->lang->line('giftcards_number_required')?>",
				number:"<?=$this->lang->line('giftcards_number')?>"
			},
			value:{
				required:"<?=$this->lang->line('giftcards_value_required')?>",
				number:"<?=$this->lang->line('giftcards_value')?>"
			}
		}
	});
})(jQueryNew);
</script>
