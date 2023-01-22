<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo base_url('home'); ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Beranda </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?php echo base_url('user'); ?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Data User </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?php echo base_url('pegawai'); ?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Data Pegawai </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?php echo base_url('sm'); ?>">
							<i class="menu-icon fa fa-envelope"></i>
							<span class="menu-text"> Surat Masuk </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-envelope-o"></i>
							<span class="menu-text">
								Surat Keluar
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('stugas'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Tugas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('ssppd'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat SPPD
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('sk'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Lainnya
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					
					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-comment-o"></i>
							<span class="menu-text">
								SMS & Whatsapp
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url('sms/sms_out'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									SMS Keluar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url('sms/sms_sent'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									SMS Terkirim
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo base_url('sms/wa'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Whatsapp
								</a>

								<b class="arrow"></b>
							</li>
							
							
						</ul>
					</li>

					<li class="">
						<a href="<?php echo base_url('login/logout'); ?>">
							<i class="menu-icon glyphicon glyphicon-off"></i>
							<span class="menu-text"> Keluar </span>
						</a>
 
						<b class="arrow"></b>
					</li>
				</ul>
