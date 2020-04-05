@extends('layouts.cms')



@section('category')


 <div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>網站資料</h1>
			</div>
</div>
	<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									網站資料
								</div>
						    <div class="card-body">
								<form action="{{route('information.update',$information->id)}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
                                   <div class="form-group">
									   <div class="row">
										   <div class="col">
                                                 <label for="title_top">網站名稱</label>
										         <input type="text" class="form-control" id="title_top" name="title_top" value="{{ $information->title_top }}">
										   </div>
										   <div class="col">
											      <label for="description">網站描述</label>
										          <input type="text" class="form-control" id="description" name="description" value="{{ $information->description }}">
										   </div>
									   </div>
									       <label for="keywords">網站關鍵字</label>
										   <input type="text" class="form-control" id="keywords" name="keywords" value="{{ $information->keywords }}">
                                       <div class="row">
										   <div class="col">
                                                 <label for="wordtime">營業時間</label>
										         <input type="text" class="form-control" id="wordtime" name="wordtime" value="{{ $information->wordtime }}">
										   </div>
										   <div class="col">
                                                  <label for="tel">公司電話</label>
										          <input type="text" class="form-control" id="tel" name="tel" value="{{ $information->tel }}"> 
										   </div>
										   <div class="col">
                                                  <label for="fox">公司傳真</label>
										          <input type="text" class="form-control" id="fox" name="fox" value="{{ $information->fox }}">
										   </div>
									  </div>

									  <div class="row">
										   <div class="col">
                                                 <label for="phome">手機電話</label>
										         <input type="text" class="form-control" id="phome" name="phome" value="{{ $information->phome }}">
										   </div>
										   <div class="col">
                                                  <label for="email">公司信箱</label>
										          <input type="text" class="form-control" id="email" name="email" value="{{ $information->email }}"> 
										   </div>
										   <div class="col">
                                                  <label for="map">公司地址</label>
										          <input type="text" class="form-control" id="map" name="map" value="{{ $information->map }}">
										   </div>
									  </div>
										 
									     <div class="row">
                                              <div class="col">
                                               @if(isset($information))		
							                     <div class="pt-3">
													 <img src="{{asset($information->logo_image)}}" class="img-fluid" alt="" style="max-width:150px;">
													 <label for="logo_image">網站LOGO圖 (建議尺寸128*60 pix)</label>
								                     <input type="file" class="form-control-file" id="logo_image" name="logo_image">
					                	    	</div>		   
											  @endif
											  </div>
											  <div class="col">
											    @if(isset($information))		
							                      <div class="pt-3">
													 <img src="{{asset($information->small_logo_image)}}" class="img-fluid" alt="" style="max-width:100px;">
													 <label for="small_logo_image">網站圖標標誌 (建議尺寸35*35 pix)</label>
								                     <input type="file" class="form-control-file" id="small_logo_image" name="small_logo_image">
					                	    	  </div>		   
					                    	    @endif	   
											  </div>        
										 </div>						 
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">更新簡介</button>
                                 </form>
						   	  </div>
							</div>
						</div>
					</div>

</div>


@endsection