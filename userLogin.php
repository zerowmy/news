<?php
$link = @mysqli_connect("127.0.0.1", "root", "root", "news");
// echo $link?"数据库news链接Success！<br />":"链接news失败!<br />";
// or die("连接数据库news失败");
if (isset($_POST['loginname']) && isset($_POST['loginpsd'])) 
{
    $loginname = $_POST['loginname'];
    $loginpsd = $_POST['loginpsd'];
    // 判断如果数据库已存在此用户名 说明已注册,可以登录
    if (isset($loginname) && isset($loginpsd)) // 接受从主页传过来的参数name，保存到$name变量中;
    {
        // echo "表单提交用户名{$loginname}<br />";
        
        /* start 提交数据与管理员数据匹配 */
        $query = "select ad_name,ad_psd from admin";
        $result = mysqli_query($link, $query);
        while ($rows = mysqli_fetch_array($result)) 
        {
            if ($loginname == $rows['ad_name'] && $loginpsd == $rows['ad_psd']) 
            {
                // echo "<script>alert('{$loginname}登录成功！^_^!');</script>";
                // echo "<script type='text/javascript'>alert('{$loginname}管理员登录成功！^_^!');</script>";
                session_start();
                $_SESSION['ad_name'] = $loginname;
                Header("Location:admin.php"); // 跳转到管理员页面
                exit();
                die();
            } else {
                continue;
            }
            break;
        }
        /* end 提交数据与管理员数据匹配 */
        
        /* start 提交数据与普通用户数据匹配 */
        // $flag = false;
        $query = "select username,userpsd from user";
        $result = mysqli_query($link, $query);
        while ($rows = mysqli_fetch_array($result)) 
        {
            if ($loginname == $rows['username'] && $loginpsd == $rows['userpsd']) // 用户名和密码都匹配
            {
                echo "<script type='text/javascript'>alert('{$loginname}登录成功！^_^!');</script>";
                session_start();//开启session
                $_SESSION['name'] = $loginname;
                //require'index.php';
                Header("Location:index.php");
                exit();
                die();
            } else {
                continue;
            }
            session_start();
            $_SESSION['name'] = '';
            break;
        }
        echo "<script type='text/javascript'>alert('{$loginname}登录失败！什么玩意儿-_-??');</script>";
        Header("Location:loginFail.php");
    }
    echo "<script type='text/javascript'>alert('{$loginname}登录失败！什么玩意儿-_-??');</script>";
    echo "提交的数据不正确";
    Header("Location:index.php");
    exit();
    die();
}
?>