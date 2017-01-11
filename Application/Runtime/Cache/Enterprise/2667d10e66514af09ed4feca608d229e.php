<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/project/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/project/aoshi/Public/css/enterprise/login.css?3">
    <link rel="stylesheet" href="/project/aoshi/Public/css/enterprise/register.css">
    <link rel="stylesheet" href="/project/aoshi/Public/css/enterprise/Jcrop.min.css">
    <link rel="stylesheet" href="/project/aoshi/Public/libs/uploadify/uploadify.css">

</head>
<body>
<div class="body">
    <div class="bg"></div>
    <div class="logo">
        <div class="logoImg">
            BRAND
            <br>职信通
        </div>
        <h3>互联网招聘神器</h3>
    </div>
    <div class="login reg">
        <div class="touxiang" id="element_id">
            <div class="default-img"></div>
            <input type="file" name="fileUpload" id="fileUpload" title="支持jpg、jpeg、gif、png格式，文件小于10M">
        </div>
        <form action="<?php echo U('Login/register');?>" method="post">
            <div class="form-group">
                <input type="text" name="user_name" placeholder="用户名" required>
            </div>
            <div class="form-group">
                <input type="password" name="user_pwd" placeholder="密码" required>
            </div>
            <div class="form-group">
                <input type="password" name="user_pwd_confirm" placeholder="确认密码" required>
            </div>
            <p>请用户登录后尽快完善公司等待审核！</p>
            <div class="form-group sub">
                <input type="submit" class="btn btn-primary" value="注 册">
            </div>
        </form>
        <ul>
            <li><a href="<?php echo U('Login/login');?>">返回登录</a></li>
            <li><a href="#">忘记密码？</a></li>
        </ul>
    </div>
</div>
<script src="/project/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/project/aoshi/Public/libs/uploadify/jquery.uploadify.min.js"></script>
<script src="/project/aoshi/Public/js/enterprise/Jcrop.min.js"></script>
<script type="text/javascript">
//    var jcropApi;
//    $('#element_id').Jcrop({
//        allowSelect: true,
//        baseClass: 'jcrop'
//    }, function() {
//        jcropApi = this;
//    });

</script>
</body>
</html>