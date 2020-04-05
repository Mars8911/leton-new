@extends('layouts.cms')



@section('category')

<div class="row">
			<div class="col-md-12">
				<h1>管理員管理</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									管理員設置
									<p class="task-list-stats">
										<span class="task-list-completed">0</span> 至 <span class="task-list-total">5位管理員</span> (資安問題: 建議管理員只需1-2位)
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-sm bg-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
									</div>
									<div class="header-btn-block">
										<a href="{{route('users.create')}}" class="btn btn-success  btn-sm waves-effect waves-light">
											<i class="batch-icon batch-icon-add"></i> 
											新增管理員
										</a>
									</div>
								</div>
								<div class="card-table">
						<div class="table-responsive">
							<table class="table table-hover ">
                                <thead>
                                  <tr>
									  <th scope="col">#</th>
									        <th scope="col">圖像</th>
											<th scope="col">管理員名稱</th>
											<th scope="col">簡介</th>
											<th scope="col">管理員權限</th>
											
                                    
                                    <th scope="col">刪除</th>
                                   </tr>
                                </thead>
                                             <tbody>
					                           @foreach ($users as $user)	
                                                 <tr>
													 <th scope="row">{{$user->id}}</th>
													 <td>
															 @if(!$user->profile->avatar)
															  <div class="profile-picture bg-gradient bg-primary ">
                                                                  	<img src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="img-fluid" alt="" style="width:45px;height:45px;">
															  </div>
															
															 @else	
															  <div class="profile-picture bg-gradient bg-primary ">
																 <img src="{{asset($user->profile->avatar)}}" class="img-fluid" alt="" style="width:45px;height:45px;">
															  </div>	 
															 @endif	
														</td>
														 <td>{{$user->name}}</td>
														 <td>{{$user->profile->about}}</td>
         
														 <td>
															 @if($user->admin)
															   <a class="btn btn-primary  btn-sm" href="{{route('users.not.admin',['id' => $user->id])}}" role="button">管理員</a>
															 @else 
														       <a class="btn btn-success btn-sm" href="{{route('users.admin',['id' => $user->id])}}" role="button">一般帳號</a>
															@endif
														</td>                  
													<td>  
                    									  <a class="btn btn-danger btn-sm" data-toggle="modal" 
                    								        	data-target="#deleteModal" onclick="haneDelete({{$user->id}})">刪除
														 </a>
														</td>
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

			form.action = '/users/' +  id		 
	   }
     </script>
@endsection