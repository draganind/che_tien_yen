  <?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

      $mail = new PHPMailer(true);
      try {
      $mail->SMTPDebug = 0;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'demotn58@gmail.com';                     //SMTP username
      $mail->Password   = 'gxyurwlqbwzxgeqy';                               //SMTP password
      $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
      //Recipients
      $mail->setFrom('demotn58@gmail.com', 'Rose Film');
      $mail->addAddress('demotn58@gmail.com');     //Add a recipient
   
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Contact us';
      $mail->Body    = "Họ tên: $name <br> Số điện thoại: $phone <br> Địa chỉ: $address <br> Email: $email <br> Nội dung: $message";
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
      $mail->send();

      echo "<script>alert('Message has been sent')</script>";

   } catch (Exception $e) {
      echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
   }
   }

  ?>
  <section>
         <div class="bg_in">
            <div class="contact_form">
               <div class="contact_left">
                  <div class="ch-contacts-details">
                     <ul class="contact-list">
                        <li class="addr">
                           <strong class="title">Địa chỉ của chúng tôi</strong>
                           <p>
                              <em><strong>Trà Ơi</strong></em><br />
                              <em> Xóm Hồng Thái II, Xã Tân Cương, Thành phố Thái Nguyên<br />
                              Điện thoại : 0986 222 435<br />
                           
                           </p>
                        </li>
                     </ul>
                  
                  </div>
               </div>
               <div class="contact_right">
                  <div class="form_contact_in">
                     <div class="box_contact">
                        <form method="POST" action="" >
                           <div class="content-box_contact">
                              <div class="row">
                                 <div class="input">
                                    <label>Họ và tên: <span style="color:red;">*</span></label>
                                    <input type="text" name="name" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Số điện thoại: <span style="color:red;">*</span></label>
                                    <input type="text" name="phone" required onkeydown="return checkIt(event)" class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Địa chỉ: <span style="color:red;">*</span></label>
                                    <input type="text" name="address" required class="clsip" >
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="text" name="email" onchange="return KiemTraEmail(this);" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Nội dung: <span style="color:red;">*</span></label>
                                    <textarea type="text" name="message" class="clsipa"></textarea>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row btnclass">
                                 <div class="input ipmaxn ">
                                    <input type="submit" class="btn-gui" name="send" id="frmSubmit" value="Gửi liên hệ">
                        
                                    <input type="reset" class="btn-gui" value="Nhập lại">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="clear"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>