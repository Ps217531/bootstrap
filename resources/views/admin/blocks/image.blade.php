@formField('medias', [
	'name' => 'variable_image',
	'label' => 'Image',
])

@formField('select', [
	'name' => 'variable_image_alignment',
	'label' => 'Image Alignment',
	'note' => 'Selecteer de afbeelding uitlijning',
	'unpack' => true,
	'options' => [
		[
			'value' => 'float-start',
			'label' => 'Left'
		],
		[
			'value' => 'text-center',
			'label' => 'Center'
		],
		[
			'value' => 'float-end',
			'label' => 'Right'
		],
	]
])

@formField('select', [
	'name' => 'variable_size',
	'label' => 'Image size',
	'note' => 'Selecteer de afbeelding styling',
	'unpack' => true,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'img-fluid',
			'label' => 'fluid'
		],
		[
			'value' => 'img-thumbnail',
			'label' => 'thumbnail'
		],
		[
			'value' => 'img-round',
			'label' => 'round'
		],
		[
			'value' => 'animatie',
			'label' => 'animatie'
		],

	
	
	]
])


@formField('select', [
	'name' => 'image_size',
	'label' => 'Image size width',
	'note' => 'Selecteer de afbeelding breedte',
	'unpack' => true,
	'options' => [
		[
			'value' => 'col-2',
			'label' => '16%'
		],
		[
			'value' => 'col-4',
			'label' => '33%'
		],
		[
			'value' => 'col-6',
			'label' => '50%'
		],
		[
			'value' => 'col-8',
			'label' => '66%'
		],
		[
			'value' => 'col-12',
			'label' => '100%'
		],
		
	]
])

@formField('select', [
	'name' => 'image_border',
	'label' => 'Image border',
	'note' => 'Selecteer de afbeelding rand',
	'unpack' => true,
	'options' => [
		[
			'value' => 'none',
			'label'	=> 'none'
		],
		
		[
			'value' => 'border',
			'label' => 'border'
		],

	]
])
@formField('select', [
	'name' => 'border_color',
	'label' => 'border color',
	'note' => 'Selecteer de rand kleur',
	'unpack' => true,
	'options' => [
		[
			'value' => 'border-primary',
			'label' => 'primary'
		],
		[
			'value' => 'border-secondary',
			'label' => 'secondary'
		],
		[
			'value' => 'border-success',
			'label' => 'success'
		],
		[
			'value' => 'border-danger',
			'label' => 'danger'
		],
		[
			'value' => 'border-warning',
			'label' => 'warning'
		],
		[
			'value' => 'border-info',
			'label' => 'info'
		],
		[
			'value' => 'border-light',
			'label' => 'light'
		],
		[
			'value' => 'border-dark',
			'label' => 'dark'
		],
		[
			'value' => 'border-white',
			'label' => 'white'
		],
		[
			'value' => 'border-transparent',
			'label' => 'transparent'
		],
	

	]
])
