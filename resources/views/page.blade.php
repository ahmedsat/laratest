@extends('layouts.master')

@section('title', 'عنوان الصفحة')

@section('sidebar')
@parent
  <p>هذا المحتوى ملحق بمحتوى المقطع sidebar الموجود في المخطط الرئيس</p>
@endsection

@section('content')
	<h2>{{$name}}</h2>  
	<p>جسم الصفحة</p>

	<h2>تعبير if الشرطي</h2>

	@if ($day == 'Friday')
  		<p>إنه يوم الجمعة</p>
	@else
  		<p>اليوم ليس يوم الجمعة</p>
	@endif
@endsection