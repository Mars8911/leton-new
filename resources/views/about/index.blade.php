@extends('layouts.cms')



@section('category')

<div class="row">
			<div class="col-md-12">
				<h1>關於我們</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									關於我們
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
											<th scope="col">標題</th>
											<th scope="col">形象圖 (1170*669 pix)</th>
                                      <th scope="col">編輯</th>
                                   </tr>
                                </thead>
                                       <tbody>
					                           @foreach ($about as $abouties)	
                                                 <tr>
                    								 <th scope="row">{{$abouties->id}}</th>
														 <td>{{$abouties->title}}</td>
	    
						                                 <td>
															 @if(!$abouties->image)
																<img src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="img-fluid" alt="" style="max-width:80px;">
															 @else	
																<img src="{{asset($abouties->image)}}" class="img-fluid" alt="{{$abouties->image_description}}" style="max-width:80px;">
															 @endif	
														</td>
                    								     <td><a class="btn btn-info btn-sm" href="{{route('about.edit',$abouties->id)}}" role="button">編輯</a></td>
                                                       
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

			form.action = '/about/' +  id		 
	   }
     </script>
@endsection