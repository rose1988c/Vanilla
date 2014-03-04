@section('title', $title) 

@section('breadcumb')
    @include('theme.right.breadcumb')
@stop

@section('content')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
    <h3>
            请在下方输入PHP代码：
    </h3>
            <form action="" method="POST">
                    <textarea cols="100" rows="20" name="code"><?php if (isset($_POST['code'])) echo stripcslashes($_POST['code']); ?></textarea>
                    <br/>
                    <input type="submit" name="sub" value="执行"/>
            </form>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
    <h3>
            执行结果：
    </h3>
    <?php   
            if (isset($_POST['code'])) {
                echo '<pre>';
                print_r(eval(stripcslashes($_POST['code'])));
                echo '</pre>';
            }
    ?>
    <br/>
    </div>
@stop

@section('footer')
<!--Pageviews-->
{{ HTML::script('assets/theme_right/js/jquery.isotope.min.js') }}
{{ HTML::script('assets/theme_right/js/prettyphoto.js') }}
{{ HTML::script('assets/theme_right/js/isotop.js') }}
<!--PageViews-->
@stop