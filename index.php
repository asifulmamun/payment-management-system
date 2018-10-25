<?php include 'header.php'; ?>

<div class="container border">
	<div class="row">
		<div class="col-md-4">
			<!-- left content -->
			<div class="bnumber">
				<span class="notice_bnumber">Please paid with Bkash number below. <br>For add your name in this list.</span>
				<center><img src="https://www.bkash.com/sites/all/themes/bkash/logo.png" class="image-responsive"></center>
				<ul>
					<li>0</li>
					<li>1</li>
					<li>9</li>
					<li>9</li>
					<li>4</li>
					<li>0</li>
					<li>7</li>
					<li>3</li>
					<li>5</li>
					<li>6</li>
					<li>3</li>
				</ul>
                               <br><br><span class="notice_bnumber" style="color:green;color: black;font-size: 22px;letter-spacing: 1px;line-height: 40px;">Date Fixed: June 12, 2018<br>Place: BRTC (Kuliarchar).</span>
			</div>
		</div>
		<div class="col-md-4">
			<!-- center content -->
			<?php include 'slider.php'; ?>
		</div>
		<div class="col-md-4 text-center">
			<!-- right content -->
			<br>
			<!-- asifulmamun -->
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FasifulmamunPage%2F&tabs&width=320&height=154&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="320" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			<!-- kuliarchar railway station -->
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKuliarcharRailwayStation1%2F&tabs&width=150&height=154&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="150" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			<!-- kuliarchar amader -->
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKuliarcharAmader%2F&tabs&width=150&height=170&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="150" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</div>
		<!-- Head Of List -->
		<div class="col-md-12 col-sm-12">
			<div class="notice_clip">
				<span class="text-center"><h2>ALL MEMBER LIST</h2><h3><marquee onmouseOver="this.stop();" onmouseOut="this.start();"><?php memberText() ?></marquee></h3></span>
			</div>
			<!-- list of member -->
			<table class="table table-hover">
			  <thead>
			    <tr style="color:#4FDAE6;font-size:18px;">
			      <th scope="col">SL</th>
			      <th scope="col">Name</th>
			      <th scope="col">Date</th>
			      <th scope="col">Paymnet Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
					$sql = "SELECT * FROM member";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
				?>
			    <tr>
			      <th scope="row"><?php echo $row["ID"]; ?></th>
			      <td><?php echo $row["NAME"]; ?></td>
			      <td><?php echo $row["DATE"]; ?></td>
			      <td>
			      	<?php echo $row["PAYMENT"]; ?>
			      	<?php 
			      		if ($row["PAYMENT"] >= $paidMax) {
			      			echo '<span style="color:green;"><i class="fa fa-check-square" aria-hidden="true"></i> Paid</span>';
			      		}
			      		if ($row["PAYMENT"] < $paidMax) {
			      			echo '<span style="color:red;"><i class="fa fa-times" aria-hidden="true"></i> Unpaid</span>';
			      		}
			      	 ?>
			      </td>
			    </tr>
			     <?php
					    }
					}
				 ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<br><br>
<div class="container border">
	<div class="row">
                <div class="col-sm-12 col-sm-12">
                    <center style="color:red;font-size:18px;">Ads</center><br>
		</div>

		<div class="col-sm-4 col-sm-12">
                        <iframe width="320" height="250" src="https://www.youtube.com/embed/WkemGbQ7TY0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-md-4 col-sm-12">
			<iframe width="320" height="250" src="https://www.youtube.com/embed/QHjjmb4HBoA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-sm-4 col-sm-12">
                      <iframe width="320" height="250" src="https://www.youtube.com/embed/REBE7-mWbB4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div><br><br>
</div>

<?php include 'footer.php'; ?>
