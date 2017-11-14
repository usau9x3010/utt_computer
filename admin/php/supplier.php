	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Products <small>product listing</small>
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
								Quản lý nhà cung cấp
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
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Products
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
										<i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
												 Export to Excel
											</a>
										</li>
										<li>
											<a href="#">
												 Export to CSV
											</a>
										</li>
										<li>
											<a href="#">
												 Export to XML
											</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">
												 Print Invoices
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="publish">Publish</option>
										<option value="unpublished">Un-publish</option>
										<option value="delete">Delete</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_supplier">
								<thead>
								<tr role="row" class="heading">
									<th width="1%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="10%">
										 ID
									</th>
									<th width="15%">
										 Tên nhà cung cấp
									</th>
									<th width="15%">
										 Địa chỉ
									</th>
									<th width="10%">
										 Email
									</th>
									<th width="10%">
										 SĐT
									</th>
									<th width="10%">
										Cung cấp
									</th>
									<th width="10%">
										 Actions
									</th>
								</tr>
								<tr role="row" class="filter">
									<td>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="id_ncc">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="ten_ncc">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="dia_chi">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="sdt">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="email">
									</td>
									<td>
										<select name="loai" class="form-control form-filter input-sm">
											<option value="">Xin chọn...</option>
											<option value="1">Máy tính</option>
											<option value="2">Linh kiện</option>
											<option value="3">Cả hai</option>
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