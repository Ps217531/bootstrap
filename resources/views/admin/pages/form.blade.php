@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'header_title',
        'label' => 'Header Title',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'header_description',
        'label' => 'Header Description',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias', [
        'name' => 'header_image',
        'label' => 'Header Image',
        'note' => 'Recommended size: 1920x1080',
        'max' => 1,
        'translated' => true,
        'crop' => true,
        'cropRatios' => 'default, mobile, flexible',
    ])
    @formField('input', [
        'name' => 'feature_title',
        'label' => 'Feature Title',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'feature_description',
        'label' => 'Feature Description',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias', [
        'name' => 'feature_image',
        'label' => 'Feature Image',
        'note' => 'Recommended size: 1920x1080',
        'max' => 1,
        'translated' => true,
        'crop' => true,
        'cropRatios' => 'default, mobile, flexible',
    ])
    
@stop
