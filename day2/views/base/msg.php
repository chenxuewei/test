<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>可做跳转提示或404的蓝天白云主题动画模板</title>
        <?= Html::jsFile('@web/msg/js/jquery-1.7.2.min.js')?>
        <?= Html::cssFile('@web/msg/css/404.css')?>
        <script type="text/javascript">
            $(function() {
                var h = $(window).height();
                $('body').height(h);
                $('.mianBox').height(h);
                centerWindow(".tipInfo");
            });

            //2.将盒子方法放入这个方，方便法统一调用
            function centerWindow(a) {
                center(a);
                //自适应窗口
                $(window).bind('scroll resize',
                        function() {
                            center(a);
                        });
            }

            //1.居中方法，传入需要剧中的标签
            function center(a) {
                var wWidth = $(window).width();
                var wHeight = $(window).height();
                var boxWidth = $(a).width();
                var boxHeight = $(a).height();
                var scrollTop = $(window).scrollTop();
                var scrollLeft = $(window).scrollLeft();
                var top = scrollTop + (wHeight - boxHeight) / 2;
                var left = scrollLeft + (wWidth - boxWidth) / 2;
                $(a).css({
                    "top": top,
                    "left": left
                });
            }
        </script>
    </head>
    <body>
        <div class="mianBox">
            <?= Html::img("@web/msg/images/yun0.png",['class'=>'yun yun0']); ?>
            <?= Html::img("@web/msg/images/yun1.png",['class'=>'yun yun1']);  ?>
            <?= Html::img("@web/msg/images/yun2.png",['class'=>'yun yun2']); ?>
            <?= Html::img("@web/msg/images/bird.png",['class'=>'bird']); ?>
            <?= Html::img("@web/msg/images/san.png",['class'=>'san']); ?>
            <div class="tipInfo">
                <div class="in">
                    <div class="textThis">
                        <?php if(isset($errorMessage)):?>
                        <h2> <?php echo '<p>'.$errorMessage.'</p>';?></h2>
                        <p><span>页面自动<a id="href" href=" history.go(-1)">返回上一页</a></span><span>等待<b id="wait"><?=$sec?></b>秒</span></p>
                        <?php else:?>
                        <h2> <?php echo '<p>'.$successMessage.'</p>';?></h2>
                        <p><span>页面自动<a id="href" href="<?php echo $gotoUrl?>">跳转</a></span><span>等待<b id="wait"><?=$sec?></b>秒</span></p>
                        <?php endif;?>

                        <script type="text/javascript">
                            <?php if(!isset($gotoUrl)):?>
                            setInterval("history.go(-1);",<?php echo $sec;?>000);
                            (function() {
                                var wait = document.getElementById('wait');
                                var interval = setInterval(function() {
                                    var time = --wait.innerHTML;
                                    if (time <= 0) {
                                        clearInterval(interval);
                                    }
                                    ;
                                }, 1000);
                            })();
                            <?php else:?>

                            (function() {
                                var wait = document.getElementById('wait'), href = document.getElementById('href').href;
                                var interval = setInterval(function() {
                                    var time = --wait.innerHTML;
                                    if (time <= 0) {
                                        location.href = href;
                                        clearInterval(interval);
                                    }
                                    ;
                                }, 1000);
                            })();
                            <?php endif;?>

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>