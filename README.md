# hosts

源src目录下
```
0.Default
1.Google_hosts
2.Wikipedia_hosts
3.W3schools_hosts
4.Facebook_hosts
5.Twitter_hosts
```

build
cli
```
php -f build.php
```

Hosts是一个没有扩展名的系统文件，可以用记事本等工具打开，其作用就是将一些常用的网址域名与其对应的IP地址建立一个关联“数据库”，当用户在浏览器中输入一个需要登录的网址时，系统会首先自动从Hosts文件中寻找对应的IP地址，一旦找到，系统会立即打开对应网页，如果没有找到，则系统会再将网址提交DNS域名解析服务器进行IP地址的解析。
### 替换hosts文件内容
### windows系列

    文件位置  系统盘:/Windows/System32/drivers/etc/hosts

1.hosts文件默认情况下只能查看不能编辑。这里给出解决方法。
首先打开系统盘:/Windows/System32/drivers/etc/文件夹

2.在hosts文件上右键-->属性，选择安全标签页，选中Users，单击编辑，在弹出的对话框里将User的权限勾选为完全控制。点击确定结束。

3.此时就可以用记事本打开hosts文件并编辑保存了

### Mac

    文件位置  /etc/hosts

1.打开Finder 在菜单中选择【前往】【前往文件夹】
  或使用快捷键Command+Shift+G

2.进入跳转路径，输入：
   /private/etc/
   点击【前往】

3.右键单击此文件，选择【打开方式】【文本编辑】
  即可打开查看其内容，但不能直接修改

4.如需修改，可将hosts文件复制到其它位置（如桌面），
  之后再打开，编辑并保存后，
  将其拖拽回原来的文件夹，替换原文件即可。

5.此时为防止误覆盖，系统会要求你输入密码， 密码就是你为系统设置的统一密码。

### Linux

    文件位置  /etc/hosts

```
  sudo vi /etc/hosts
```
或者
```
  sudo gedit /etc/hosts
```

### 提示

天朝hosts污染严重 youtube 访问无法播放视频 推荐使用lantern
