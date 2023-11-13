</div><div id="napthe"></div>
<div class="col-sm-6">
	<div class="boxbody">
		<div class="boxbody_top bb_top4"><h2><span>Nạp thẻ</span></h2></div>
		<div class="boxbody_body">
			<ul class="nav nav-tabs m-b-15">
				<li class="active"><a href="#auto" onclick="onSCard('#auto')" data-toggle="tab">Nạp tự động</a></li>
				<li><a href="#slow" onclick="onSCard('#slow')" data-toggle="tab">Nạp chậm</a></li>
			</ul>
			<form id="pay-submit">
				<div class="form-group">
                    <div class="input-group">
    				    <span class="input-group-addon">Loại thẻ</span>
    					<select class="form-control" id="type" name="telco" onchange="telcoCard()"></select>
    					<select id="auto-select" class="none">
    						<option value="ViettelAUTO" >Viettel-auto</option><option value="VinaAUTO" >Vina-auto</option><option value="VnmbAUTO" >Vnmb-auto</option><option value="ZingAUTO" >Zing-auto</option><option value="MobiAUTO" >Mobi-auto</option><option value="GateAUTO" >Gate-auto</option><option value="VcoinAUTO" >Vcoin-auto</option><option value="GarenaAUTO" >Garena-auto</option>    					</select>
    					<select id="slow-select" class="none">
    						<option value="Vcoin" >Vcoin (2 phút)</option>                        </select>
                    </div>
				</div>
				<div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Mệnh giá</span>
    					<select class="form-control" id="amount" name="amount" onchange="totalCard(this.value)" required>
    						<option value="">Chọn mệnh giá</option>
    						<optgroup label="Vui lòng chọn loại thẻ trước"></optgroup>
    					</select>
                    </div>
				</div>
				<div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Mã thẻ</span>
					    <input type="text" id="code" name="code" class="form-control" placeholder="Mã thẻ" required>
                    </div>
				</div>
				<div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Số seri</span>
					    <input type="text" id="seri" name="serial" class="form-control" placeholder="Số seri" required>
                    </div>
				</div>
				<a class="btn-x btn-x-1" href="login.html">Đăng nhập để nạp thẻ</a>				<div id="total" class="btn-x btn-x-2 hidden-btn">Thực nhận</div>
			</form>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="boxbody">
		<div class="boxbody_top bb_top3"><h2><span>PHÍ NẠP THẺ</span></h2></div>
		<div class="boxbody_body">
			<div class="title-list p-t-20">Phí nạp tự động</div>
			<div style="height:3px;background-color:#b7aaaa;width:127px;margin-left:10px"></div>
			<div class="table-responsive p-t-10">
				<table class="table text-center">
					<thead>
						<tr>
							<th width="11.111111111111%">Viettel</th><th width="11.111111111111%">Vina</th><th width="11.111111111111%">Vnmb</th><th width="11.111111111111%">Zing</th><th width="11.111111111111%">Mobi</th><th width="11.111111111111%">Gate</th><th width="11.111111111111%">Vcoin</th><th width="11.111111111111%">Garena</th>						</tr>
					</thead>
					<tbody>
						<tr>
							<td>20%</td><td>18%</td><td>20%</td><td>20%</td><td>25%</td><td>30%</td><td>25%</td><td>20%</td>						</tr>
					</tbody>
				</table>
			</div>
			<div class="title-list p-t-20" style="margin-top:13px">Phí nạp chậm</div>
			<div style="height:3px;background-color:#b7aaaa;width:109px;margin-left:10px"></div>
			<div class="table-responsive p-t-10">
				<table class="table text-center">
					<thead>
						<tr>
							<th width="12.5%">Vcoin</th>						</tr>
					</thead>
					<tbody>
						<tr>
							<td>20%</td>						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div style="clear:both"></div>
<div class="boxbody_top bb_top2" style="margin-top:50px"><h2><span><i class="fa fa-history"></i> Danh Sách Nạp Thẻ</span></h2></div>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
		   <tr>
			   <th>Loại thẻ</th>
			   <th>Mã Thẻ</th>
			   <th>Serial</th>
			   <th>Mệnh giá</th>
			   <th>Thực nhận</th>
			   <th>Trạng thái</th>
			   <th>Thời gian</th>
		   </tr>
		</thead>
		<tbody id="result4"></tbody>
	</table>
</div>
<div id="load-display"><i class='fa fa-spinner fa-spin'></i></div>
<script>
    var card;
	selectCard('#auto-select');
	listHist('type=4&pg=1', '#result4')
</script>
</div>
<div id="modal"></div>
<div class="modal fade" id="modal-getNotify" role="dialog"></div>