<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Điều khoản</title>
	<link rel="icon" href="img/loadingcat.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="header">
		<img src="img/loadingcat.jpg">
		<label>LOADING CAT</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Đăng ký</a></li>
				<li><a href="#login"   data-toggle="modal">Đăng nhập</a></li>
			</ul>
	</div>
		<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Đăng nhập</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Mật khẩu" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Đăng nhập">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Đóng</button>
					</form>
			</div>
		</div>
	
		<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Đăng ký</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Họ" required>
						<input type="text" name="mi" placeholder="Tên đệm" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Tên" required>
						<input type="text" name="address" placeholder="Địa chỉ" style="width:430px;"required>
						<input type="text" name="country" placeholder="Quốc gia" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Số điện thoại" maxlength="11">
						<input type="text" name="telephone" placeholder="Số liên lạc nhà riêng" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Mật khẩu" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Đăng ký">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Đóng</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
<div class="nav">
	<ul>
	   <li><a href="index.php"><i class="icon-home"></i>Trang chủ</a></li>
	   <li><a href="product.php"><i class="icon-th-list"></i>Sản phẩm</a>
	   <li><a href="aboutus.php"><i class="icon-bookmark"></i>Về chúng tôi</a></li>
	   <li><a href="contactus.php"><i class="icon-inbox"></i>Hỗ trợ</a></li>
	   <li><a href="privacy.php"><i class="icon-info-sign"></i>Điều khoản</a></li>
	   <li><a href="faqs.php"><i class="icon-question-sign"></i>Câu hỏi thường gặp</a></li>
   </ul>
</div>
	

	
	
		<div id="content">
			<legend><h3>Điều khoản sử dụng</h3></legend>
				<p>&emsp;LOADING CAT tôn trọng quyền riêng tư của những người truy cập vào trang web loadingcat.com và các trang web địa phương được kết nối với nó, đồng thời hết sức cẩn thận để bảo vệ thông tin của bạn .. Chính sách bảo mật này cho bạn biết những thông tin chúng tôi thu thập từ bạn, cách chúng tôi có thể sử dụng thông tin đó các bước chúng tôi thực hiện để đảm bảo rằng nó được bảo vệ.
				</p>
			<hr>
				<h4>Bảo vệ thông tin người mua</h4>
					<p>Để bảo vệ thông tin bạn cung cấp cho chúng tôi bằng cách truy cập trang web của chúng tôi, chúng tôi đã thực hiện nhiều
các biện pháp an ninh. Thông tin cá nhân của bạn được chứa trong các mạng bảo mật và chỉ có thể truy cập được
bởi một số người hạn chế, những người có quyền truy cập đặc biệt và được yêu cầu giữ thông tin
bí mật. Hãy ghi nhớ rằng bất cứ khi nào bạn cung cấp thông tin cá nhân trực tuyến, sẽ có
rủi ro rằng các bên thứ ba có thể đánh chặn và sử dụng thông tin đó. Trong khi Alphaware cố gắng bảo vệ người dùng
thông tin cá nhân và quyền riêng tư, chúng tôi không thể đảm bảo tính bảo mật của bất kỳ thông tin nào bạn tiết lộ trực tuyến
và bạn tự chịu rủi ro.</p>
			<hr>
				<h4>Sử dụng cookies</h4>
					<p>Cookie là một chuỗi thông tin nhỏ mà trang web mà bạn truy cập chuyển đến máy tính của bạn
mục đích nhận dạng. Cookie có thể được sử dụng để theo dõi hoạt động của bạn trên trang web và thông tin đó
giúp chúng tôi hiểu sở thích của bạn và cải thiện trải nghiệm trang web của bạn. Cookies cũng được sử dụng để
Ví dụ như nhớ tên người dùng và mật khẩu của bạn.</p>
					<p>Bạn có thể tắt tất cả cookie, trong trường hợp bạn không muốn nhận chúng. Bạn cũng có thể cảnh báo máy tính của mình
bạn bất cứ khi nào cookie được sử dụng. Đối với cả hai tùy chọn, bạn phải điều chỉnh cài đặt trình duyệt của mình
(như Internet explorer). Ngoài ra còn có các sản phẩm phần mềm có thể quản lý cookie cho bạn.
Xin lưu ý rằng khi bạn đặt máy tính của mình từ chối cookie, nó có thể hạn chế
chức năng của trang web bạn truy cập và có thể khi đó bạn không có quyền truy cập vào một số
các tính năng trên trang web.</p>
			<hr>
				<h4>Chính sách sử dụng</h4>
					<p>Chính sách Bảo mật không mở rộng cho bất kỳ điều gì vốn có trong hoạt động của internet, và
do đó, nằm ngoài tầm kiểm soát của adidas, và không được áp dụng theo bất kỳ cách nào trái với luật hiện hành hoặc
quy định của chính phủ. Chính sách bảo mật trực tuyến này chỉ áp dụng cho thông tin được thu thập thông qua
trang web và không thu thập thông tin ngoại tuyến.</p>
			
		</div>
	<br />
</div>
	<br />
	<br>
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">LOADING CAT EST 2021</p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="https://www.facebook.com/profile.php?id=100004707128420"><li>Facebook</li></a>
						<a href="https://www.instagram.com/datjan1st/"><li>Instagram</li></a>
					</ul>
			</div>
	</div>
</body>
</html>