<!doctype html>
<html>
<head>
    <style>
        p{
            color: red;
        }
.center{
    height: 100%;
    text-decoration: none;
    display: -webkit-box;
    -webkit-box-orient: horizontal;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    display: -moz-box;
    -moz-box-orient: horizontal;
    -moz-box-pack: center;
    -moz-box-align: center;
    display: -o-box;
    -o-box-orient: horizontal;
    -o-box-pack: center;
    -o-box-align: center;
    display: -ms-box;
    -ms-box-orient: horizontal;
    -ms-box-pack: center;
    -ms-box-align: center;
    display: box;
    box-orient: horizontal;
    box-pack: center;
    box-align: center;            
}

    </style>
</head>
<body>
    <div class="center">
        <h2>大家好 我是一只VPS~\(≧▽≦)/~~</h2>
    </div>
    <div class="center">
        <img src="http://img4.duitang.com/uploads/item/201208/14/20120814181007_KPsnR.gif"></img>
    </div>
    <!--显示错误信息-->

    <div class="center">
    <?php echo validation_errors(); ?>
    </div>
    <div class="center">
    <!--登录表单-->
    <?php echo form_open('login'); ?>
        Username:
        <input type="text" name="username" value="prd"/>
        <br/>
        Password:
        <input type="text" name="password" value="prd"/>
        <br/>
        <div class="center">
        <input type="submit" name="submit"/>
        </div>
    </form>
    </div>
</body>
</html>

