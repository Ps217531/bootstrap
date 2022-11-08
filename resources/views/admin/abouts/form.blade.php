@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'header', 'label' => 'Header'],
        ['fieldset' => 'about', 'label' => 'About'],
        ['fieldset' => 'about2', 'label' => 'About2'],
        ['fieldset' => 'team', 'label' => 'Team'],
        ['fieldset' => 'footer', 'label' => 'Footer'],
     
        
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

    @formFieldset(['id' => 'header', 'title' => 'Header', 'open' => false])
    @formField('block_editor', [
        'name' => 'header',
        'label' => 'Header', 
        'title' => 'Header',
        'blocks' => ['paragraph','image','paragraph_image']
      ])
    @endformFieldset
    
    @formFieldset(['id' => 'about', 'title' => 'About', 'open' => false])
   
    @formField('medias', [
        'name' => 'cover',
        'label' => 'About Image',
        'note' => 'Recommended size: 600x400',
        'max' => 1
    ])

      @formField('block_editor', [
          'name' => 'about',
          'label' => 'About', 
          'title' => 'About',
          'blocks' => ['paragraph','image','paragraph_image']
        ])
      @endformFieldset

    @formFieldset(['id' => 'abouttwo', 'title' => 'About2', 'open' => false])

    @formField('medias', [
        'name' => 'variable_image',
        'label' => 'About Image2',
        'note' => 'Recommended size: 600x400',
        'max' => 1
    ])

      @formField('block_editor', [
          'name' => 'about2',
          'label' => 'About2', 
          'title' => 'About2',
          'blocks' => ['paragraph','image','paragraph_image']
        ])
      @endformFieldset  

    @formFieldset(['id' => 'team', 'title' => 'Team', 'open' => false])
      @formField('block_editor', [
          'name' => 'team',
          'label' => 'team', 
          'title' => 'team',
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