@extends('layouts.cms')



@section('category')

<div class="row">
			<div class="col-md-12">
				<h1>商品項目</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									新增項目
									<p class="task-list-stats">
										<span class="task-list-completed">尺寸建議</span>  <span class="task-list-total">370*370(Pix)</span> (檔案建議不能超過2M)
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-sm bg-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
									</div>
									<div class="header-btn-block">
										<a href="{{route('product.create')}}" class="btn btn-success  btn-sm waves-effect waves-light">
											<i class="batch-icon batch-icon-add"></i> 
											新增商品
										</a>
									</div>
								</div>
								<div class="card-table">
						<div class="table-responsive">
							<table class="table table-hover ">
                                <thead>
                                  <tr>
                                      <th scope="col">#</th>
											<th scope="col">名稱</th>
											<th scope="col">類別</th>
											<th scope="col">標籤</th>
											<th scope="col">圖片</th>
                                      <th scope="col">編輯</th>
                                    <th scope="col">刪除</th>
                                   </tr>
                                </thead>
                                       <tbody>
					                           @foreach ($Product as $producties)	
                                                 <tr>
                    								 <th scope="row">{{$producties->id}}</th>
														 <td>{{$producties->title}}</td>
														 <td>{{$producties->category->name}}</td>
						                                 <td>
															 @if(!$producties->image)
																<img src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="img-fluid" alt="" style="max-width:80px;">
															 @else	
																<img src="{{asset($producties->image)}}" class="img-fluid" alt="{{$producties->image_description}}" style="max-width:80px;">
															 @endif	
														</td>
                    								     <td><a class="btn btn-info btn-sm" href="{{route('product.edit',$producties->id)}}" role="button">編輯</a></td>
                                                         <td>
                    									<a class="btn btn-danger btn-sm" data-toggle="modal" 
                    								        	data-target="#deleteModal" onclick="haneDelete({{$producties->id}})">刪除
														 </a></td>
                    								  </tr>
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
               <button type="button" class="btn btn-info" data-dismiss="modal">取消</button>
               <button type="submit" class="btn btn-danger">確認</button>
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

			form.action = '/product/' +  id		 
	   }
     </script>
@endsection