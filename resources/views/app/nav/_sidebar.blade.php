<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<!-- admin -->
						@if(auth()->user()->role=='admin')
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dasboard</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-spell-check"></i> <span>Laporan Assessment</span></a></li>
						<li><a href="/nemploye" class=""><i class="lnr lnr-database"></i> <span>Permintaan Karyawan</span></a></li>
						<li><a href="/leave" class=""><i class="lnr lnr-inbox"></i> <span>Cuti</span></a></li>
						<li><a href="/user" class=""><i class="lnr lnr-user"></i><span>Daftar User</span></a></li>
						<li><a href="/karyawan" class=""><i class="lnr lnr-layers"></i> <span>Data Karyawan</span></a></li>
						@endif
						<!-- user -->
						@if (auth()->user()->role=='user')
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dasboard</span></a></li>
						<li><a href="/penilaian/laporandegree" class="lnr lnr-user"> 360</a></li>
						</li>
							<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
							<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 68px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 67.076px;"></div>
						<li><a href="/leave/laporan" class=""><i class="fa fa-calendar"></i> <span>Cuti</span></a></li>
						@endif
						<!-- manager -->
						@if (auth()->user()->role=='manager')
						<!-- curi -->
						<li><a href="/leave/laporan" class=""><i class="fa fa-calendar"></i> <span>Cuti</span></a></li>
						<li><a href="/nemploye"><i class="fa fa-envelope"></i>Pengajuan Karyawan</a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-file-empty"></i> <span>Penilaian</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse in" aria-expanded="true" style="">
								<ul class="nav">
								<li><a href="/penilaian/laporansenstaff" class="lnr lnr-user"> Senior Staff</a></li>
								<li><a href="/penilaian/laporanstaff" class="lnr lnr-user"> Staff / Non Staff</a></li>
								<li><a href="/penilaian/laporandegree" class="lnr lnr-user"> 360</a></li>
							</ul>
							</div>
						</li>
							<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
							<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 68px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 67.076px;"></div>
						<li><a href="/penilaian/listapprove" class="lnr lnr-user"> Daftar Approve</a></li>
						@endif
						<!-- hrd -->
						@if (auth()->user()->role=='hrd')
						<li><a href="/penilaian/absenstaff"><i class="fa fa-calendar-o"> </i><span>Absensi Staff/Non</span></a></li>
						<li><a href=""><i class="fa fa-calendar-o"></i><span>Absensi Senior Staff</span></a></li>
						<li><a href="/karyawan" class=""><i class="lnr lnr-layers"></i> <span>Data Karyawan</span></a></li>
						<div id="subPages" class="collapse in" aria-expanded="true" style="">
							<ul class="nav">
								<li><a href="/setting/senstaff" class="lnr lnr-user"> Senior Staff</a></li>
								<li><a href="/setting/staff" class="lnr lnr-user"> Staff / Non Staff</a></li>
								<li><a href="/setting/degree" class="lnr lnr-user"> 360</a></li>
							</ul>
						</div>
						@endif
					</ul>
				</nav>
			</div>
		</div>