	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Danh sách<small> Sản phẩm</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Trang chủ
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Quản lý Sản phẩm
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<?php if(isset($_GET['action']) && $_GET['action']==1): ?>
						<div id="prefix_169735707117" class="app-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><i class="fa-lg fa fa-check"></i>  Thực hiện thành công</div>
					<?php endif;?>
					
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Sản phẩm
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-primary" href="home.php?page=product_action">
										Thêm mới Sản phẩm
									</a>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">

									<span>
									</span>

									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value=""></option>
										<option value="del">Xóa</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Thực hiện</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_product">
								<thead>
								<tr role="row" class="heading">
									<th width="1%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="10%">
										 ID
									</th>
									<th width="15%">
										 Ảnh
									</th>
									<th width="15%">
										 Tên sản phẩm
									</th>
									<th width="15%">
										 Giá
									</th>
									<th width="15%">
										 Thể loại
									</th>
									<th width="15%">
										 Số lượng
									</th>
									<th width="15%">
										 Trạng thái
									</th>
									<th width="10%">
										 Hành động
									</th>
								</tr>
								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="search[id]">
									</td>
									<td></td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="search[ten_sp]">
									</td>
									<td>
										
									</td>
									<td>
										<select name="search[loai_sp]" class="form-control form-filter input-sm">
											<option value="">Xin chọn...</option>
											<option value="1">Máy tính</option>
											<option value="2">Linh kiện</option>
										</select>
									</td>
									<td></td>
									<td>
										<select name="search[trang_thai]" class="form-control form-filter input-sm">
											<option value="">Xin chọn...</option>
											<option value="0">Bật</option>
											<option value="1">Tắt</option>
										</select>
									</td>
									<td>
										<div class="margin-bottom-5">
											<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Tìm kiếm</button>
										</div>
										<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Làm mới</button>
									</td>
								</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
