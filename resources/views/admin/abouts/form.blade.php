@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'feature', 'label' => 'Feature'],
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

    @formFieldset(['id' => 'feature', 'title' => 'Feature', 'open' => false])
    @formField('block_editor', [
        'name' => 'feature',
        'label' => 'Feature', 
        'title' => 'Feature',
        'blocks' => ['paragraph','image','paragraph_image']
      ])
    @endformFieldset
    
    @formFieldset(['id' => 'testimonial', 'title' => 'Testimonial', 'open' => false])
   
      @formField('block_editor', [
          'name' => 'testimonial',
          'label' => 'Testimonial', 
          'title' => 'Testimonial',
          'blocks' => ['paragraph','image','paragraph_image']
        ])
      @endformFieldset

    @formFieldset(['id' => 'preview', 'title' => 'Preview', 'open' => false])
      @formField('block_editor', [
          'name' => 'preview',
          'label' => 'Preview', 
          'title' => 'Preview',
          'blocks' => ['paragraph','image','paragraph_image']
        ])
      @endformFieldset  

    @formFieldset(['id' => 'call_to_action', 'title' => 'Call to action', 'open' => false])
      @formField('block_editor', [
          'name' => 'call_to_action',
          'label' => 'Call to action', 
          'title' => 'Call to action',
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