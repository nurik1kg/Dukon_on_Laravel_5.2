@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($sofa, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.sofa.update', $sofa->id))) !!}

<div class="form-group">
    {!! Form::label('title', 'Заглавие', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('country_id', 'Страна-производитель', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('country_id', $country_id, old('country_id'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('code', 'Артикул*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('code', old('code'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('mechanism', 'Механизм', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('mechanism', old('mechanism'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('material', 'Материал обивки*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('material', old('material'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('frame_material', 'Материал каркаса*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('frame_material', old('frame_material'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('description', 'Описание', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('description', old('description'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('width', 'Ширина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('width', old('width'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('heigth', 'Высота*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('heigth', old('heigth'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('depth', 'Глубина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('depth', old('depth'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('length_b', 'Длина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('length_b', old('length_b'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('width_b', 'Ширина*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('width_b', old('width_b'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('bought', 'Купили', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bought', old('bought'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('guarantee', 'Гарантия', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('guarantee', old('guarantee'), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('price', 'Цена*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price', old('price'), array('class'=>'form-control')) !!}

    </div>
</div>
<!--
<hr>
<h3>Добавить картики</h3>
<hr>
<div id="line">@include('admin.sofa.photo_form')</div>
<div id="generator">
</div>
<div class="form-group">
    <div class="col-md-12">
        <button type="button" id="addField" class="btn btn-success"><i
                    class="fa fa-plus"></i> {{ trans('quickadmin::qa.menus-createCrud-add_field') }}
        </button>
    </div>
</div>
-->
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.sofa.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>
{!! Form::close() !!}
<!--<script>
    $(document).ready(function () {

        // Add new row to the table of fields
        $('#addField').click(function () {
            var line = $('#line').html();
            var table = $('#generator');
            table.append(line);
        });

        // Remove row from the table of fields
        $(document).on('click', '.rem', function () {
            $(this).parent().parent().remove();
        });

    });

</script>
-->
@endsection