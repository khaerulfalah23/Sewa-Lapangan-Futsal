
<!-- Start slider area -->
	
	<!-- End Slider area -->
	


	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>LAPANGAN Sintetis</h2>
										<p></p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
								<div class="row">
									<div class="mu-portfolio-content">
										<div class="filtr-container">

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                   <a class="mu-imglink" href="<?php echo base_url().'assets/user/images/sintetis-1.jpg'?>" title="MATRAS">
								                   	<img class="img-responsive" src="<?php echo base_url().'assets/user/images/sintetis-1.jpg'?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">SINTETIS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
							                    <a class="mu-imglink" href="<?php echo base_url().'assets/user/images/sintetis-2.jpg'?>" title="MATRAS">
							                    	<img class="img-responsive" src="<?php echo base_url().'assets/user/images/sintetis-2.jpg'?>" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">SINTETIS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
							                    <a class="mu-imglink" href="<?php echo base_url().'assets/user/images/sintetis-3.jpg'?>" title="MATRAS">
							                    	<img class="img-responsive" src="<?php echo base_url().'assets/user/images/sintetis-3.jpg'?>" alt="image">
								                    <div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title">SINTETIS</h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                    </a>
							                </div>

							                


							               
							               </div>
							            </div>
									</div>
									<br>
								<div class="row">
									<div class="com-md-6">
										<h4>Deskripsi Lapangan</h4>
										<p>Lapangan Ini Memakai Rumput Sitetis Asli yang dikirim langsung dari Singapur.lapangan ini juga memiliki Panjang 25 Meter dan Lebar 18 Meter.
										Sedangkan gawang lapangan ini memiliki ukuran Lebar 3 meter dan Tinggi 2 Meter.
										Material rumput Sintetis yang digunakan pada lapangan ini membuat bola menjadi lebih mudah di kontron dan juga Jika ada pemain yang terjatuh maka tidak akan terasa sakit karna permukanan lapangan ini sangatlah lembut dan nyaman. Untuk harga sewa lapangan ini <b>Rp.30.000 perjam</b></p>
									</div>
								</div>
								<br>
								<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>JADWAL LAPANGAN SINTETIS</h2>
										<p></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<!-- tabel -->
										
								          <div class="table-responsive">
								                  <table class="table table-bordered table-striped table-hover" id="table-datatable">
								                    <thead>
								                      <tr>
								                        <th style="width: 55px; ">No</th>
								                        <th style="width: 150px;">Kode Sewa</th>
								                        <th style="width: 200px;">Nama Pemesan</th>
								                        <th style="width: 200px;">Email </th>
								                        <th style="width: 155px;">Tanggal</th>
								                        <th style="width: 127px;">Jam main</th>
								                        <th style="width: 100px;">selesai</th>
								                        <th style="width: 145px;">lama main</th>
								                         <th style="width: 145px;">Status</th>
								                       
								                      </tr>
								                    </thead>
								                    <tbody>
								                      <?php 

										                  $no=1;
										                  foreach($lapangan as $l){?>
										                    <tr>
										                        <td><?php echo $no++ ?></td>
										                        <td><?php echo $l->kode_sewa ?></td>
										                        <td><?php echo $l->nama_pemesan ?></td>
										                        <td><?php echo $l->email ?></td>
										                        <td><?php echo $l->tanggal ?></td>
										                        <td><?php echo $l->jam_main ?></td>
										                        <td><?php echo $l->selesai ?></td>
										                        <td><?php echo $l->lama_main." Jam" ?></td>
										                         <td><?php echo $l->status ?></td>
								                    <?php } ?>
								                    </tbody>
								                  </table>
								                </div>
										<!-- akhir table -->
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		
							<!-- End Skills Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		
		
		<!-- Start Services -->
		
		<!-- End Services -->

		<!-- Start Video -->
		
		<!-- End Video -->

		<!-- Start Portfolio -->
		
		<!-- End Portfolio -->

		<!-- Start Counter -->
		
		<!-- End Counter -->

		<!-- Start Pricing Table -->
		
		<!-- End Pricing Table -->

		<!-- Start Client Testimonials -->
		
		<!-- End Client Testimonials -->

		<!-- Start from blog -->
		
		<!-- End from blog -->

		<!-- Start Newsletter -->
		
		<!-- End Newsletter -->

		<!-- Start Clients -->
		
		<!-- End Clients -->

	</main>
	
	<!-- End main content -->	
			
