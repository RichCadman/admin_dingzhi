<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	//首页
    public function index(){

    	$this->display("index");
    }
	//报表
    public function baobiao(){

    	$this->display("baobiao");
    }

    //小窗口
    public function xiaochuangkou(){

    	$this->display("xiaochuangkou");
    }

    //表格
    public function table(){

    	$this->display("table");
    }

    //full width
    public function full(){

    	$this->display("full");
    }
    //form-common
    public function form_common(){

    	$this->display("form_common");
    }

    //form_validation
    public function form_validation(){

    	$this->display("form_validation");
    }

    //form_wizard
    public function form_wizard(){

    	$this->display("form_wizard");
    }

    //buttons
    public function buttons(){

    	$this->display("buttons");
    }

    //interface
    public function interface1(){

    	$this->display("interface");
    }
    //index2
    public function index2(){

    	$this->display("index2");
    }

    //gallery
    public function gallery(){

    	$this->display("gallery");
    }

    //calendar
    public function calendar(){

    	$this->display("calendar");
    }

    //invoice
    public function invoice(){

    	$this->display("invoice");
    }

    //chat
    public function chat(){

    	$this->display("chat");
    }

    //error403
    public function error403(){

    	$this->display("error403");
    }

    //error404
    public function error404(){

    	$this->display("error404");
    }

    //error405
    public function error405(){

    	$this->display("error405");
    }

    //error500
    public function error500(){

    	$this->display("error500");
    }

    //发送邮件
    public function email(){

    	$mailer = new PHPMailer(true);
		$mailer->IsHTML(true); // 这是一封HTML邮件
		$mailer->IsSMTP(true); // 连接SMTP服务发送邮件
		# $mailer->SMTPDebug = true; // 是否开启调试模式
		$mailer->CharSet = 'UTF-8'; // 邮件内容的编码，和你程序的编码保持一致
		$mailer->Encoding = 'base64'; // 邮件传递过程使用的编码
		$mailer->FromName = "417626953@qq.com"; // 发件人
		$mailer->Host = $host; // SMTP服务地址
		$mailer->AddAddress($to); // 添加收件人
		$mailer->From = $from; // 设置发件人
		$mailer->Subject = $subject; // 设置主题
		$mailer->MsgHTML($email); // 设置HTML邮件内容

		$mailer->SMTPAuth = true; // 开启SMTP验证
		$mailer->Username = $username; // 设置用户名
		$mailer->Password = $passwd; // 设置密码

		$mailer->Send(); // 发送邮件
    }
}