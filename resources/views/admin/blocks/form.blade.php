@twillBlockTitle('Form')
@twillBlockIcon('edit')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'name',
    'label' => 'Name',
    'maxlength' => 100
])
@formField('input', [
    'name' => 'email',
    'label' => 'Email',
    'maxlength' => 100
])
@formField('input', [
    'name' => 'phone',
    'label' => 'Phone',
    'maxlength' => 100
])
@formField('input', [
    'name' => 'message',
    'label' => 'Message',
    'maxlength' => 100
])
<!-- @formField('input', [
    'name' => 'submit',
    'label' => 'Submit',
    'maxlength' => 100
]) -->
