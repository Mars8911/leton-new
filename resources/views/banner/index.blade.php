@extends('layouts.cms')



@section('category')

<div class="row">
	<div class="col-md-12">
		<h1>首頁圖片</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				首頁圖片尺寸
				<p class="task-list-stats">
					<span class="task-list-completed">1920 * 600</span> 尺寸單位為<span class="task-list-total">(Pix)</span>
				</p>
				<div class="progress">
					<div class="progress-bar progress-bar-sm bg-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				</div>
				{{-- <div class="header-btn-block">
										<a href="{{route('banner.create')}}" class="btn btn-success btn-sm waves-effect waves-light">
				<i class="batch-icon batch-icon-add"></i>
				新增圖片
				</a>
			</div> --}}
		</div>
		<div class="card-table">
			<div class="table-responsive">
				<table class="table table-hover ">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">名稱</th>
							<th scope="col">圖片</th>
							<th scope="col">連結位置</th>
							<th scope="col">編輯</th>
							{{-- <th scope="col">刪除</th> --}}
						</tr>
					</thead>
					<tbody>
						@foreach ($banner as $banneries)
						<tr>
							<th scope="row">{{$banneries->id}}</th>
							<td>{{$banneries->title}}</td>
							<td>
								@if(!$banneries->image)
								<img src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="img-fluid" alt="" style="max-width:80px;">
								@else
								<img src="{{asset($banneries->image)}}" class="img-fluid" alt="{{$banneries->image_description}}" style="max-width:80px;">
								@endif
							<td>{{$banneries->description}}</td>
							</td>
							<td><a class="btn btn-info btn-sm" href="{{route('banner.edit',$banneries->id)}}" role="button">編輯</a></td>
							{{-- <td><a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="haneDelete({{$banneries->id}})">刪除</a></td>
						</tr> --}}
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>


<!-- Modal -->
<form action="" method="POST" id="deleateCategory">
	@csrf
	@method('DELETE')
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteModalLabel">刪除您的項目</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4 class="text-danger">*注意 : 刪除後資料將無法復原喔!</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info btn-sm" data-dismiss="modal">取消</button>
					<button type="submit" class="btn btn-danger btn-sm">確認</button>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection
@section('script')
<script>
	function haneDelete(id) {

		var form = document.getElementById('deleateCategory')

		form.action = '/banner/' + id
	}
</script>
@endsection