{{--include styles--}}
@include("layouts.styles")
	
	<body>
		<section class="body">   
            <!-- start: header -->
        {{--include header--}}
     @include("layouts.header")    
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                    {{--include leftsidebar--}}
                 @include("layouts.leftsidebar") 
            <!-- end: sidebar -->
            <section role="main" class="content-body">
                <header class="page-header">
                    
                    <div class="right-wrapper pull-right">
                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

			  @section("content")
                 @show
				
			</div>
                     {{--include rightsidebar--}}
                 @include("layouts.rightsidebar")
		</section>

        {{-- global modal for delete item --}}
        <div id="dialog" class="modal-block mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
                {{--include footer--}}
                 @include("layouts.footer")
			</section>
		</div>
		  {{--include scripts--}}
                 @include("layouts.scripts")
        
        @stack('javaScript')
	</body>
</html>