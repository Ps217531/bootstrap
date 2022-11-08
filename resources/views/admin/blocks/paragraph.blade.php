@formField('wysiwyg', [
	'name' => 'paragraph',
	'type' => 'textarea',
	'toolbarOptions' => [
		'bold',
		'italic',
		'link',
		'clean',
		'strike',
		'underline',
		['header' => [2, 3, 4, 5, 6, false]],
	],
	'label' => 'Paragraph',
	'default'	=> '<p style="height: auto;">Voeg een paragraaf toe</p>',
	'note'  => 'Voeg een paragraaf toe',
	'rows' => 4

])

@formField('select', [
	'name' => 'variable_image_alignment',
	'label' => 'Text Alignment',
    'note'  => 'Selecteer de tekst uitlijning',
	'unpack' => true,
	'options' => [
		[
			'value' => 'text-start',
			'label' => 'start'
		],
		[
			'value' => 'text-end',
			'label' => 'end'
		],
		[
			'value' => 'text-center',
			'label' => 'center'
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
	'name' => 'variable_size',
	'label' => 'Font Size',
	'note'  => 'Selecteer de tekst grootte',
	'unpack' => false,
	'options' => [
		[
			'value' => 'none',
			'label' => 'none'
		],
		[
            'value' => 'display-1',
			'label' => 'Display 1'
        ],
		[
			'value' => 'display-2',
			'label' => 'Display 2'
		],
		[
			'value' => 'display-3',
			'label' => 'Display 3'
		],
		[
			'value' => 'display-4',
			'label' => 'Display 4'
		],
		[
			'value' => 'display-5',
			'label' => 'Display 5'
		],
		[
			'value' => 'display-6',
			'label' => 'Display 6'
		],

	]
])
@formField('select', [
	'name' => 'heading-text',
	'label' => 'heading',
	'note'  => 'Selecteer de heading',
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
	'note'  => 'selecteer de tekst kleur',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-dark',
			'label' => 'dark'
		],
		[
			'value' => 'text-light',
			'label' => 'light'
		],
		[
			'value' => 'text-primary',
			'label' => 'primary'
		],
		[
			'value' => 'text-secondary',
			'label' => 'secondary'
		],
		[
			
			'value' => 'text-success',
			'label' => 'success'


		],
		[
			'value' => 'text-danger',
			'label' => 'danger'
		],
		[
			'value' => 'text-warning',
			'label' => 'warning'
		],
		[
			'value' => 'text-info',
			'label' => 'info'
		],
		[
			'value' => 'text-white',
			'label' => 'white'
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
			'value' => 'text-black-50',
			'label' => 'black-50'
		],
		[
			'value' => 'text-white-50',
			'label' => 'white-50'
		],
		[
			'value' => 'text-reset',
			'label' => 'reset'
		],
	]
])

@formField('select', [
	'name' => 'background-text',
	'label' => 'text background',
	'note'  => 'selecteer de tekst achtergrond',
	'unpack' => true,
	'options' => [
		[
			'value' => 'bg-dark',
			'label' => 'dark'
		],
		[
			'value' => 'bg-light',
			'label' => 'light'
		],
		[
			'value' => 'bg-primary',
			'label' => 'primary'
		],
		[
			'value' => 'bg-secondary',
			'label' => 'secondary'
		],
		[
			
			'value' => 'bg-success',
			'label' => 'success'
		],
		[
			'value' => 'bg-danger',
			'label' => 'danger'
		],
		[
			'value' => 'bg-warning',
			'label' => 'warning'
		],
		[
			'value' => 'bg-info',
			'label' => 'info'
		],
		[
			'value' => 'bg-white',
			'label' => 'white'
		],
		[
			'value' => 'bg-transparent',
			'label' => 'transparent'
		],
		[
			'value' => 'bg-body',
			'label' => 'body'
		],
		[
			'value' => 'bg-black-50',
			'label' => 'black-50'
		],
		[
			'value' => 'bg-white-50',
			'label' => 'white-50'
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
	'note'  => 'selecteer de tekst breedte',
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
	'note'  => 'selecteer de tekst stijl',
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
	'note'  => 'selecteer de tekst decoratie',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-decoration-none',
			'label' => 'none'
		],
		[
			'value' => 'text-decoration-underline',
			'label' => 'underline'
		],
		[
			'value' => 'text-decoration-line-through',
			'label' => 'line-through'
		],
	]
])

@formField('select', [
	'name' => 'transform-text',
	'label' => 'text-transform',
	'note'  => 'selecteer de tekst transform',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-lowercase',
			'label' => 'lowercase'
		],
		[
			'value' => 'text-uppercase',
			'label' => 'uppercase'
		],
		[
			'value' => 'text-capitalize',
			'label' => 'capitalize'
		],
	]
])

@formField('select', [
	'name' => 'overflow-text',
	'label' => 'text-overflow',
	'note'  => 'selecteer de tekst overflow',
	'unpack' => false,
	'options' => [
		[
			'value' => 'text-overflow-clip',
			'label' => 'clip'
		],
		[
			'value' => 'text-overflow-ellipsis',
			'label' => 'ellipsis'
		],
	]
])


@formField('select', [
	'name' => 'padding-text',
	'label' => 'text-padding',
	'note'  => 'selecteer de tekst padding',
	'unpack' => false,
	'default' => 'p-1',
	'options' => [
		[
			'value' => 'p-1',
			'label' => '1'
		],
	[
		'value' => 'p-2',
		'label' => '2'
	],
	[
		'value' => 'p-3',
		'label' => '3'
	],
	[
		'value' => 'p-4',
		'label' => '4'
	],
	[
		'value' => 'p-5',
		'label' => '5'
	],

	]
])
	
@formField('select', [
	'name' => 'margin-text',
	'label' => 'text-margin',
	'note'  => 'selecteer de tekst margin',
	'unpack' => false,
	'options' => [
		[
		'value' => 'm-0',
		'label' => '0'
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
@formField('wysiwyg', [
	'name' => 'paragraph',
	'type' => 'textarea',
	'toolbarOptions' => [
		'bold',
		'italic',
		'link',
		'clean',
		'strike',
		'underline',
		['header' => [2, 3, 4, 5, 6, false]],
	],
	'label' => 'Paragraph',
	'note'  => 'Voeg een paragraaf toe',
	'rows' => 4

])
