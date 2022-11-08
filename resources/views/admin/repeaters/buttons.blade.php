@twillRepeaterTitle('Buttons')
@twillRepeaterMax('4')

@formField('input', [
'name' => 'label',
'label' => 'Button text'
])

@formField('input', [
'name' => 'url',
'label' => 'Button url',
'fieldNote' => 'https://google.com/'
])

@formField('select', [
'name' => 'type',
'label' => 'Button type',
'placeholder' => 'Select a button type',
'options' => [
[
'value' => 'btn-primary',
'label' => 'Primary'
],
[
'value' => 'btn-secondary',
'label' => 'Secondary'
],
[
'value' => 'btn-link',
'label' => 'Link'
],
]
])

@formField('input', [
'name' => 'fa_icon',
'label' => 'Font Awesome icon code',
'fieldNote' => 'fa-users'
])