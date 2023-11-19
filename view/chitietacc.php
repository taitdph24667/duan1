</div>		<div class="info-acc">
	<?php 
	       
		extract($onesp); 
		$hinh =  "upload/".$img;
	// var_dump($onesp);
	?>
	
			<div class="header-acc">
				<div class="col-md-6">
					<p class="red">Mã Số <?php echo $id?></p>
					<h1>tên Nick game:</h1><p class="red"> <?php echo $name?></p>
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
					<div class="col-xs-6">Phái: <span class="red"><?php echo $class?></span></div>
					<div class="col-xs-6">Server: <span class="red"></span></div>
					<div class="col-xs-6">Cấp độ: <span class="red"><?php echo $lv?></span></div>
					<div class="col-xs-6" title="Sau khi mua nick bạn sẽ được up miễn phí nếu muốn">Up Free: <span class="red">10 ngày</span></div>
				</div>
				<div class="hidden-xs">
				
					<div class="col-xs-6">Ngày đăng: <i class="red"><?php echo $ngaydang?></i></div>
				</div>
				<div class="hr-acc"><i class="icon-dot"></i></div>
				<div class="tt-acc-full">
					<div class="con">
						Thông tin thêm: <span class="red" style="text-transform:none"><?php echo $mota?></span>
						<div style="padding-top:10px"><h2>Giá:<span class="red"><?php echo number_format($price,0,"",".");?> VNĐ</div>	</div></span> </h2> 
				</div>
				<div class="visible-xs">
			
					<div class="col-xs-6"><b>Ngày đăng:</b> <i class="red" style="white-space:nowrap">03-08-2023</i></div>
				</div>
				<div class="hr-acc"><i class="icon-dot"></i></div>
				<div>
					
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