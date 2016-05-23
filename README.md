# 让你的wordpress后台登陆焕然一新！ #

## 食用方法： ##

下载文件

1. 将**css、js、image**文件夹复制到主题目录下。
1. 将`functions.php`的内容复制到主题`functions.php`的?>之前。
1. 退出登录，查看效果！

因为这个效果是使用jQuery库来实现的，所以说，如果主题自带jQuery库的话，大家将

    echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/jquery.min.js"></script>'."\n";

注释掉就可以啦。

关于如何具体修改Wordpress登陆界面，大家可以移步：[如何自定义WordPress的登录页面（Logo/链接/文本）](http://www.wpdaxue.com/custom-wordpress-login-page.html)