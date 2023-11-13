</div>		<div class="info-acc">
	<?php 
	       
		extract($onesp); 
		$hinh =  "upload/".$img;
	// var_dump($onesp);
	?>
	
			<div class="header-acc">
				<div class="col-md-6">
					<p class="red">Mã Số <?php echo $id?></p>
					<p class="red"> <?php echo $name?></p>
				</div>
				<div class="col-md-6">
					<div class="amount-acc">
										</div>
				</div>
				<div class="col-md-6">
					
							<div class="pay-acc-list">
								<button rel="/ninja/buyacc/13720" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">MUA NGAY</button>
								<button rel="/ninja/installment/13720" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">TRẢ GÓP</button>
							</div>				</div>
			</div>
			<div class="col-md-6">
				<div class="acc-images">
				<center>
                        <div class="clearfix" style="max-width:320px">
                            <ul id="img-gal" class="gallery list-unstyled sl-hidden">
							
								<img src="<?php echo $hinh?>" alt="Ảnh" width="320" height="240">
                            </ul>
                        </div>
                    </center>
				</div>
			</div>
			<div class="col-md-6 tt-info-acc">
				<div class="tt-acc">
					<div class="col-xs-6">Phái: <span class="red">Cung</span></div>
					<div class="col-xs-6">Server: <span class="red">Bokken</span></div>
					<div class="col-xs-6">Cấp độ: <span class="red">93</span></div>
					<div class="col-xs-6" title="Sau khi mua nick bạn sẽ được up miễn phí nếu muốn">Up Free: <span class="red">10 ngày</span></div>
				</div>
				<div class="hidden-xs">
					<div class="col-xs-6">Trạng thái: <i class="red">Chưa bán</i></div>
					<div class="col-xs-6">Ngày đăng: <i class="red">03-08-2023</i></div>
				</div>
				<div class="hr-acc"><i class="icon-dot"></i></div>
				<div class="tt-acc-full">
					<div class="con">
						Thông tin thêm: <span class="red" style="text-transform:none"><?php echo $mota?></span>
						<div style="padding-top:10px"><h2>Giá:<span class="red"><?php echo $price?> đ</div>	</div></span> </h2> 
				</div>
				<div class="visible-xs">
					<div class="col-xs-6"><b>Trạng thái:</b> <i class="red">Chưa&nbsp;bán</i></div>
					<div class="col-xs-6"><b>Ngày đăng:</b> <i class="red" style="white-space:nowrap">03-08-2023</i></div>
				</div>
				<div class="hr-acc"><i class="icon-dot"></i></div>
				<div>
					<div class="price-detail">
						<span>Giá chi tiết:</span>
						<ul>
							<li class="active"><a href="#auto" data-toggle="tab">Nạp tự động</a></li>
							<li><a href="#slow" data-toggle="tab">Nạp chậm</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="auto">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th width="12.5%">Viettel</th><th width="12.5%">Vina</th><th width="12.5%">Vnmb</th><th width="12.5%">Zing</th><th width="12.5%">Mobi</th><th width="12.5%">Gate</th><th width="12.5%">Vcoin</th><th width="12.5%">Garena</th>											</tr>
										</thead>
										<tbody>
											<tr>
												<td>420.000</td><td>410.000</td><td>420.000</td><td>420.000</td><td>440.000</td><td>480.000</td><td>440.000</td><td>420.000</td>											</tr>				
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" id="slow" class="tab-pane">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th width="100%">Vcoin</th>											</tr>
										</thead>
										<tbody>
											<tr>
												<td>420.000</td>											</tr>				
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		
				<h3 class="list-game" style="margin-top:100px">NICK LIÊN QUAN</h3>
				<div class="line-center"></div>
				<div class="acc-list acc-list-6">
				
					<?php
               
			   $i=0;
			   foreach($listaccgame as $accgame){
				   extract($accgame);
			 
				   $hinh =  "upload/".$img;
				 
				   $linksp="index.php?act=sanphamct&idsp=".$id;
				   
				   if(($i==2)||($i==5)||($i==8)){
					   $mr="";
				   }else{
					   $mr="mr";
				   }
				   echo '
				   <div class="col-acc">
					   <div class="acc">
						   <div class="imgae">
							   <a href="'. $linksp .'">
								   <img class="img" src="'.$hinh.'" />
								   <span class="detail">Chi tiết</span>
								   <span class="price">'.$price.'$</span>
								   <span class="acc-id">#'.$id.'</span>
								   <div class="sale">-6%</div>
								   <div class="bg1">Thú 5✰</div>
								   <div class="bg1 up">Free up</div>
							   </a>
						   </div>
						   <div class="col-xs-4">
							   <div>Tên</div>
							   <div><b>'.$name.'</b></div>
						   </div>
						   <div class="col-xs-4">
							   <div>Danh Mục</div>
							   <div><b>'.$namedm.'</b></div>
						   </div>
						   <div class="col-xs-4">
							   <div>Level</div>
							   <div><b>93</b></div>
						   </div>
						   <div class="clear"></div>
						   <div class="info-nso" title="'.$mota.'">'.$mota.'</div>
					   </div>
				   </div>
   
   
				';   
				$i+=1;
		   }
	   ?>
   </div>

					</div></div>		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				</div>
			</div>
		</div>
		<script src="../js/function-accdetail.js"></script>
		</div>
<div id="modal"></div>
<div class="modal fade" id="modal-getNotify" role="dialog"></div>