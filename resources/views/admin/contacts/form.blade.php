@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'form', 'label' => 'form'],

    ]
])

@section('contentFields')
@formField('input', [  
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])
    
@stop




@section('fieldsets')

    @formFieldset(['id' => 'form', 'title' => 'form', 'open' => false])
    @formField('block_editor', [
        'name' => 'form',
        'label' => 'Form', 
        'title' => 'form',
        'blocks' => ['paragraph', 'form', 'button']
      ])
    @endformFieldset
    
   

@stop