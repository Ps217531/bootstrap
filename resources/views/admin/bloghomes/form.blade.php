@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'content', 'label' => 'content'],
        ['fieldset' => 'testimonial', 'label' => 'Testimonial'],
        ['fieldset' => 'preview', 'label' => 'Preview'],
        ['fieldset' => 'footer', 'label' => 'Footer'],
        ['fieldset' => 'call_to_action', 'label' => 'Call to action'],
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

    @formFieldset(['id' => 'content', 'title' => 'Content', 'open' => false])
    @formField('block_editor', [
        'name' => 'content',
        'label' => 'Content', 
        'title' => 'Content',
        'blocks' => ['paragraph','image','paragraph_image', 'form']
      ])
    @endformFieldset
    
    @formFieldset(['id' => 'testimonial', 'title' => 'Testimonial', 'open' => false])
   
      @formField('block_editor', [
          'name' => 'mail',
          'label' => 'Mail', 
          'title' => 'Mail',
          'blocks' => ['paragraph','image','paragraph_image']
        ])
      @endformFieldset

    

      @formFieldset(['id' => 'footer', 'title' => 'Footer', 'open' => false])
      @formField('block_editor', [
          'name' => 'footer',
          'label' => 'Footer', 
          'title' => 'Footer',
          'blocks' => ['paragraph','image','paragraph_image' ]
        ])
        
        @endformFieldset

@stop