@formField('wysiwyg', [
	'name' => 'paragraph',
	'type' => 'textarea',
	'toolbarOptions' => [
		'bold',
		'italic',
		'link',
		'clean',
	],
	'label' => 'Paragraph',
	'note' => 'Voeg een paragraaf toe',
	'rows' => 4
])
<!-- styling voor paragraph -->

@formField('select', [
	'name' => 'text_alignment',
	'label' => 'Text Alignment',
	'note' => 'Selecteer de tekst uitlijning',
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
	'name' => 'heading-text',
	'label' => 'heading',
	'note' => 'Selecteer de tekst heading(title)',
	'unpack' => false,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
			'value' => 'h1',
			'label' => 'H1'
		],
		[
			'value' => 'h2',
			'label' => 'H2'
		],
		[
			'value' => 'h3',
			'label' => 'H3'
		],
		[
			'value' => 'h4',
			'label' => 'H4'
		],
		[
			'value' => 'h5',
			'label' => 'H5'
			],
		[
			'value' => 'h6',
			'label' => 'H6'
		],
	]
])

@formField('select', [
	'name' => 'color-text',
	'label' => 'text color',
	'note' => 'Selecteer de tekst kleur',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-dark',
			'label' => 'Donker'
		],
		[
			'value' => 'text-light',
			'label' => 'Licht'
		],
		[
			'value' => 'text-primary',
			'label' => 'Blauw'
		],
		[
			'value' => 'text-secondary',
			'label' => 'Grijs'
		],
		[
			
			'value' => 'text-success',
			'label' => 'Green'


		],
		[
			'value' => 'text-danger',
			'label' => 'Red'
		],
		[
			'value' => 'text-warning',
			'label' => 'Geel'
		],
		[
			'value' => 'text-info',
			'label' => 'Licht blauw'
		],
		[
			'value' => 'text-white',
			'label' => 'Wit'
		],
		[
			'value' => 'text-body',
			'label' => 'body'
		],
		[
			'value' => 'text-muted',
			'label' => 'muted'
		],
		[
			'value' => 'text-white-50',
			'label' => 'gebroken wit'
		],
		[
			'value' => 'text-reset',
			'label' => 'standaard'
		],
	]
])

@formField('select', [
	'name' => 'background-text',
	'label' => 'text background',
	'note' => 'Selecteer de tekst achtergrond',
	'unpack' => true,
	'options' => [
		[
			'value' => 'bg-dark',
			'label' => 'Donker'
		],
		[
			'value' => 'bg-light',
			'label' => 'Licht'
		],
		[
			'value' => 'bg-primary',
			'label' => 'Blauw'
		],
		[
			'value' => 'bg-secondary',
			'label' => 'Grijs'
		],
		[
			
			'value' => 'bg-success',
			'label' => 'Green'
		],
		[
			'value' => 'bg-danger',
			'label' => 'Red'
		],
		[
			'value' => 'bg-warning',
			'label' => 'Geel'
		],
		[
			'value' => 'bg-info',
			'label' => 'Licht blauw'
		],
		[
			'value' => 'bg-white',
			'label' => 'Wit'
		],
		[
			'value' => 'bg-transparent',
			'label' => 'transparant'
		],
		[
			'value' => 'bg-body',
			'label' => 'body'
		],
		[
			'value' => 'bg-white-50',
			'label' => 'gebroken wit'
		],
		[
			'value' => 'bg-reset',
			'label' => 'reset'
		],
	]
])
@formField('select', [
	'name' => 'width-text',
	'label' => 'text width',
	'note' => 'Selecteer de tekst breedte',
	'unpack' => false,
	'options' => [
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
		[
			'value' => 'w-auto',
			'label' => 'auto'
		],
	]
])
 
@formField('select', [
	'name' => 'font-style-text',
	'label' => 'font-style',
	'note' => 'Selecteer de tekst stijl',
	'unpack' => false,
	'options' => [
		[
			'value' => 'fst-italic',
			'label' => 'italic'
		],
		[
			'value' => 'fw-bold',
			'label' => 'bold'
		],
		[
			'value' => 'fw-bolder',
			'label' => 'bolder'
		],
		[
			'value' => 'fw-light',
			'label' => 'light'
		],
		[
			'value' => 'fw-lighter',
			'label' => 'lighter'
		],
		[
			'value' => 'fw-normal',
			'label' => 'normal'
		],
	]
])


@formField('select', [
	'name' => 'decoration-text',
	'label' => 'decoration-text',
	'note' => 'Selecteer de tekst decoratie',
	'unpack' => true,
	'options' => [
		[
			'value' => 'text-decoration-none',
			'label' => 'none',
			'note' => 'geen decoratie'
		],
		[
			'value' => 'text-decoration-underline',
			'label' => 'underline',
			'note' => 'onderstreping'
		],
		[
			'value' => 'text-decoration-line-through',
			'label' => 'line-through',	
			'note' => 'doorhalen'
		],
	]
])

@formField('select', [
	'name' => 'transform-text',
	'label' => 'text-transform',
	'note' => 'Selecteer de tekst transform',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-lowercase',
			'label' => 'Kleine letters',
			'note' => 'Alle letters worden in kleine letters weergegeven'
		],
		[
			'value' => 'text-uppercase',
			'label' => 'Hoofdletters',
			'note' => 'Alle letters worden in hoofdletters weergegeven'
		],
		[
			'value' => 'text-capitalize',
			'label' => 'Kapitalen 	(eerste letter van elk woord wordt een hoofdletter)',
			'note' => 'De eerste letter van elk woord wordt in hoofdletters weergegeven'
		],
	]
])


@formField('select', [
	'name' => 'padding_text',
	'label' => 'text-padding',
	'note' => 'Selecteer de tekst padding(afstand binnen de rand)',
	'unpack' => false,
	'options' => [
		[
		'value' => 'p-0',
		'label' => '0',
		'note' => 'Geen padding'
	],
	[
		'value' => 'p-1',
		'label' => '1',
		'note' => 'Padding 0.25rem'
	],
	[
		'value' => 'p-2',
		'label' => '2',
		'note' => 'Padding 0.5rem'

	],
	[
		'value' => 'p-3',
		'label' => '3',
		'note' => 'Padding 1rem'
	],
	[
		'value' => 'p-4',
		'label' => '4',
		'note' => 'Padding 1.5rem'
	],
	[
		'value' => 'p-5',
		'label' => '5',
		'note' => 'Padding 3rem'
	],
	
	]
])
@formField('select', [
	'name' => 'margin_text',
	'label' => 'text-margin',
	'note' => 'Selecteer de tekst margin(afstand buiten de rand)',
	'unpack' => false,
	'options' => [
		[
		'value' => 'm-0',
		'label' => '0',
		'note' => 'Geen margin'
	],
	[
		'value' => 'm-1',
		'label' => '1'
	],
	[
		'value' => 'm-2',
		'label' => '2'
	],
	[
		'value' => 'm-3',
		'label' => '3'
	],
	[
		'value' => 'm-4',
		'label' => '4'
	],
	[
		'value' => 'm-5',
		'label' => '5'
	],
	
	]
])

	

@formField('medias', [
	'name' => 'variable_image',
	'label' => 'Image',
	'note' => 'Selecteer de afbeelding',

])


<!-- styling voor image -->
@formField('select', [
	'name' => 'variable_image_alignment',
	'label' => 'Image Alignment',
	'note' => 'Selecteer de afbeelding uitlijning',
	'unpack' => true,
	'options' => [
		[
			'value' => 'float-start',
			'label' => 'links'
		],
		[
			'value' => 'text-center',
			'label' => 'midden'
		],
		[
			'value' => 'float-end',
			'label' => 'rechts'
		],
	]
])


@formField('select', [
	'name' => 'image_size',
	'label' => 'Image size width',
	'note' => 'Selecteer de afbeelding grootte',
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
	'name' => 'image_border',
	'label' => 'Image border',
	'note' => 'Selecteer de afbeelding rand',
	'unpack' => true,
	'options' => [
		[
			'value' => 'none',
			'label'	=> 'geen rand'
		],
		
		[
			'value' => 'border',
			'label' => 'rand 1px'
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
			'label' => 'Blauw'
		],
		[
			'value' => 'border-secondary',
			'label' => 'Grijs'
		],
		[
			'value' => 'border-success',
			'label' => 'Groen'
		],
		[
			'value' => 'border-danger',
			'label' => 'Rood'
		],
		[
			'value' => 'border-warning',
			'label' => 'Oranje'
		],
		[
			'value' => 'border-info',
			'label' => 'Lichtblauw'
		],
		[
			'value' => 'border-light',
			'label' => 'Lichtgrijs'
		],
		[
			'value' => 'border-dark',
			'label' => 'Donkergrijs'
		],
		[
			'value' => 'border-white',
			'label' => 'Wit'
		],
		[
			'value' => 'border-transparent',
			'label' => 'Transparant'
		],
	]
])

