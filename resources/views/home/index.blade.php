@extends('layouts.cms')



@section('category')

<div class="row">
	<div class="col-md-12">
		<h1>首頁訊息</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				有任何網站相關問題再請聯繫客服 或 來信 yisiweb@gmail.com
				<div class="progress">
					<div class="progress-bar progress-bar-sm bg-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				</div>
			</div>
			<div class="card-table">
			</div>
			<!-- Modal -->
			@endsection



			@section('script')
			<script>
				function haneDelete(id) {

					var form = document.getElementById('deleateCategory')

					form.action = '/home/' + id
				}
			</script>
			@endsection