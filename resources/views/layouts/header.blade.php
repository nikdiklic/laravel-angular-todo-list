    @if(Auth::check())
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
                <br>
				<img width="64" height="64" alt="Icon" src="http://lorempixel.com/64/64/">
			</div>
			<div class="col-md-9">
				<div >
                <br>
					<h2>
						{{ Auth::user()->first_name." ".Auth::user()->last_name  }}
					</h2>
	         				
				</div>
			</div>
			<div class="col-md-2">
                <br>
				<br>
				<div class="btn-group">
					<button class="btn btn-default">
						{{ Auth::user()->first_name }}
					</button> 
					<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="logout">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<hr>
	</div>
    @endif