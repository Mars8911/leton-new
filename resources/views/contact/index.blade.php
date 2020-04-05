@extends('layouts.cms')



@section('category')

<div class="row">
			<div class="col-md-12">
				<h1>客戶訊息</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									客戶訊息
									<p class="task-list-stats">
										<span class="task-list-completed">客戶訊息留言</span> 
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-sm bg-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
									</div>
			
								</div>
								<div class="card-table">
						<div class="table-responsive">
							<table class="table table-hover ">
                                <thead>
                                  <tr>
                                      <th scope="col">#</th>
											<th scope="col">大名</th>
											<th scope="col">公司名稱</th>
											<th scope="col">信箱</th>
											<th scope="col">電話</th>
											<th scope="col">所在區域</th>
											<th scope="col">詢問內容</th>           
                                            <th scope="col">刪除</th>
                                   </tr>
                                </thead>
                                       <tbody>
					                           {{-- @foreach ($Product as $producties)	 --}}
                                                 <tr>
													 <th scope="row">1</th>
														 <td>123</td>
														 <td>123@gmail.com</td>
														 <td>123@gmail.com1</td>
														 <td>0903591111</td>
														 <td>12132123123</td>
														  <td>Lorem ipsum </td>
                                                     <td>
                    									<a class="btn btn-danger btn-sm" data-toggle="modal" 
                    								        	data-target="#deleteModal" onclick="haneDelete()">刪除
														 </a>
														</td>
                    								  </tr>
					                             {{-- @endforeach --}}
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