@extends('frontend.Layouts.default')
@section('title' , 'Trang chủ')
@section('myJs')
	<script type="text/javascript" src="{{ url('') }}/js/factory/service/frontend/contactService.js"></script>

	<!-- include ctrl -->
	<script type="text/javascript" src="{{ url('') }}/js/ctrl/frontend/contactCtrl.js"></script>
@endsection


@section('content')
<div class="row">
	@includeif('frontend.home.unknownThing')
	@includeif('frontend.home.uses')
	@includeif('frontend.home.treatment')
	@includeif('frontend.home.share')
	@includeif('frontend.home.contact')

</div>
@endsection