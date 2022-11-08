@twillBlockTitle('Button')
@twillBlockIcon('b-button')
@twillBlockGroup('app')
 
@formField('input', [
	'name' => 'text',
	'label' => 'Text',
	'maxlength' => 100
])
@formField('input', [
	'name' => 'link',
	'label' => 'Link',
	'maxlength' => 100
])
@formField('select', [
	'name' => 'alignment',
	'label' => 'button Alignment',
	'note' => 'Selecteer de button uitlijning',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-start',
			'label' => 'links'
		],
		[
			'value' => 'text-end',
			'label' => 'rechts'
		],
		[
			'value' => 'text-center',
			'label' => 'midden'
		],
		[
			'value' => 'text-justify',
			'label' => 'justify'
		],
		[
			'value' => 'text-nowrap',
			'label' => 'nowrap'
		],
		
	]
])

@formField('select', [
	'name' => 'size',
	'label' => 'Font Size',
	'note' => 'Selecteer de button grootte',
	'unpack' => false,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'btn-lg',
			'label' => 'Large'
		],
		[
			'value' => 'btn-sm',
			'label' => 'Small'
		],
		[
			'value' => 'btn-block',
			'label' => 'Block'
		],
		
	]
])

@formField('select', [
	'name' => 'color',
	'label' => 'Font Color',
	'note' => 'Selecteer de button kleur',
	'unpack' => false,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'btn-primary',
			'label' => 'Primary'
		],
		[
			'value' => 'btn-secondary',
			'label' => 'Secondary'
		],
		[
			'value' => 'btn-success',
			'label' => 'Success'
		],
		[
			'value' => 'btn-danger',
			'label' => 'Danger'
		],
		[
			'value' => 'btn-warning',
			'label' => 'Warning'
		],
		[
			'value' => 'btn-info',
			'label' => 'Info'
		],
		[
			'value' => 'btn-light',
			'label' => 'Light'
		],
		[
			'value' => 'btn-dark',
			'label' => 'Dark'
		],
		[
			'value' => 'btn-link',
			'label' => 'Link'
		],
		
	]
])

@formField('select', [
	'name' => 'outline',
	'label' => 'Outline',
	'note' => 'Selecteer de button outline',
	'unpack' => false,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'btn-outline-primary',
			'label' => 'Primary'
		],
		[
			'value' => 'btn-outline-secondary',
			'label' => 'Secondary'
		],
		[
			'value' => 'btn-outline-success',
			'label' => 'Success'
		],
		[
			'value' => 'btn-outline-danger',
			'label' => 'Danger'
		],
		[
			'value' => 'btn-outline-warning',
			'label' => 'Warning'
		],
		[
			'value' => 'btn-outline-info',
			'label' => 'Info'
		],
		[
			'value' => 'btn-outline-light',
			'label' => 'Light'
		],
		[
			'value' => 'btn-outline-dark',
			'label' => 'Dark'
		],
		
	]
])
		




@formField('select', [
	'name' => 'width',
	'label' => 'grootte van het figuur',
	'note' => 'Selecteer de grootte',
	'unpack' => false,
	'options' => [

		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'w-25',
			'label' => '25%'
		],
		[
			'value' => 'w-50',
			'label' => '50%'
		],
		[
			'value' => 'w-75',
			'label' => '75%'
		],
		[
			'value' => 'w-100',
			'label' => '100%'
		],
	]
])


