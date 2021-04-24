<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src=" {{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
		<span class="brand-text font-weight-light">CSE Alumni</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-5 mb-3 d-flex">
			<div class="image">
				<img src="{{asset('dist/img/tajul.png')}}" class="img-circle elevation-2" alt="User Image" />
			</div>
			<ul class="navbar-nav">
				<li class="nav-item mx-0 mx-lg-1 dropdown">
					<a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a
						class="dropdown-item"
						href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"
						style="color: #2c3e50;"
						>
						{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					with font-awesome or any other icon font library -->
					<li>
						<a href="/admin/dashboard" class="nav-link active">
							<p>
								Dashboard
							</p>
						</a>
					</li>
					<!--PostCategory-->
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link" >
							<i class="fa fa-list"></i>
							<p>
								Category Management
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" id="addCategory" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add New Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/admin/category" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Categories</p>
								</a>
							</li>
						</ul>
					</li>
					<!--/PostCategory-->
					<!--posts-->
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon far fa-newspaper"></i>
							<p>
								Post Management
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/admin/post/create" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Add New Post</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/admin/post" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Posts</p>
								</a>
							</li>
						</ul>
					</li>
					<!--/posts-->
					<!--slider-->
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link" >
							<i class="nav-icon far fa-image"></i>
							<p>
								Slider Management
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link" id="addSlider">
									<i class="far fa-circle nav-icon"></i>
									<p>Add New Slider</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/admin/slider" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>All Sliders</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-header">EXAMPLES</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon far fa-envelope"></i>
							<p>
								Mailbox
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="pages/mailbox/mailbox.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Inbox</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages/mailbox/compose.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Compose</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages/mailbox/read-mail.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Read</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
	<!--category-->
	<div class="modal fade" id="createCategoryModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Create New Category</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="createCategoryForm" method="post">
					@csrf 
					<div class="modal-body">
						<span class="form_result"></span>
						<div class="form-group">
							<label for="category">category-name</label>
							<div>
								<input class="form-control" type="text" name="category"/>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.SliderModal -->
	<!--SliderModal-->
	<div class="modal fade" id="createSliderModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Add new slider</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" id="createSliderForm" enctype="multipart/form-data">
					@csrf 
					<div class="modal-body">
						<span class="form_result"></span>
						<div class="form-group">
						
							<div>
								<input class="form-control" type="file" name="slider"/>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<script type="text/javascript">
		$(document).ready(function () {

           /*Category starts*/

          	$("#addCategory").on('click',function()
			{
				$('#createCategoryModal').modal('show');
				$('#createCategoryForm')[0].reset();
				$('.form_result').html('');
			});
			$("#createCategoryForm").on('submit',function(event)
			{
				event.preventDefault();

				$.ajax({
					url:"/admin/category",  
					method:"POST",
					data:$(this).serialize(),
					dataType:"json",
					success:function(data)
					{

						var html = '<div class="alert alert-success">' + data.success + '</div>';
						$(".form_result").html(html);

					},
					error:function(error)
					{
						var html = '<div class="alert alert-danger">' +error.responseJSON.errors.category+ '</div>';
						$(".form_result").html(html);

					}

				});
			


			});
		  /*category ends*/

        /*Slider starts*/
			$("#addSlider").on('click',function()
			{
				$('#createSliderModal').modal('show');
				$('#createSliderForm')[0].reset();
				$('.form_result').html('');


			});
			$("#createSliderForm").on('submit',function(event)
			{
				event.preventDefault();

				$.ajax({
					url:"/admin/slider",  
					method:"POST",
					data:new FormData(this),
					dataType:"json",
					cache: false,
					contentType: false,
					processData: false,
					success:function(data)
					{

						var html = '<div class="alert alert-success">' + data.success + '</div>';
						$(".form_result").html(html);

					},
					error:function(error)
					{
						var html = '<div class="alert alert-danger">' +error.responseJSON.errors.slider+ '</div>';
						$(".form_result").html(html);

					}

				});

			});
			/*slider ends*/
		});


</script>