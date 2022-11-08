@twillBlockTitle('Gallery')
@twillBlockIcon('gallery')
@twillBlockGroup('app')

@formField('select', [
    'name' => 'variation',
    'label' => 'Gallery variation',
    'options' => [
        [ 'value' => 'fixed-width', 'label' => 'Fixed width' ],
        [ 'value' => 'variable-width', 'label' => 'Variable width' ]
    ],
    'default' => 0
])

@formField('medias', [
    'name' => 'image',
    'label' => 'Images',
    'max' => 20,
    'withVideoUrl' => false,
    'extraMetadatas' => [
        [
            'name' => 'show_info',
            'label' => 'Show info',
            'type' => 'checkbox'
        ],
    ],
])

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Text',
    'placeholder' => 'Text',
    'toolbarOptions' => [
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ],
    'translated' => true
])
