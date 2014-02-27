@section('title', $title) 

@section('breadcumb')
    @include('theme.right.breadcumb')
@stop

@section('content')
<section class="clearfix pricingtable-a rox-pricetable">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading clearfix" id="Browser">
                <h2>
                    Browser Plug
                </h2>
            </div>
            
            <div class="col-lg12 col-md-12 col-sm-12 col-xs-12 gap-btm">
                <ul class="price-table list-unstyled level-0 ">
                    <li> Chrome </li>
                    
                    <?php 
                        $plug_chromes = Config::get('site\plug.chrome');
                        foreach ((array)$plug_chromes as $value) { 
                    ?>
                    <li class="list-detail effect2">
                        <a target="_blank" href="{{$value['url']}}" title="{{$value['desc']}}" >{{$value['title']}}</a>
                        <p>{{$value['desc']}}</p>
                        <span class="star">
                            <?php 
                                list($lstar, $rstar) = explode('-', $value['star']);
                                if ($lstar > 0) {
                                    for ($i = 0; $i < $lstar; $i++) {
                                        echo '<i class="fa fa-star"></i>';
                                    }
                                }
                                if ($rstar > 0) {
                                    for ($i = 0; $i < $rstar; $i++) {
                                        echo '<i class="fa fa-star-o"></i>';
                                    }
                                }
                            ?>
                        </span>
                    </li>
                    <?php }?>
                    <li>
                      <a target="_blank" href="https://chrome.google.com/webstore" title="Webstore">
                            more </a> 
                    </li>
                </ul>
            </div>
            <div class="col-lg6 col-md-6 col-sm-6 col-xs-6 gap-btm">
                <ul class="price-table list-unstyled text-center level-0">
                    <li> Firefox </li>
                    <li class="list-detail">
                        Fast activations </li>
                    <li class="list-detail">
                        100&amp; uptime </li>
                    <li class="list-detail">
                        Branded cpanel </li>
                    <li class="list-last-detail">
                        Best support </li>
                    <li>
                        <a href="#" title="buy now">
                            Get started </a>
                    </li>
                </ul>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading clearfix" id="GreaseMonkey">
                <h2> GreaseMonkey Plug </h2>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gap-btm">
                <ul class="price-table list-unstyled text-center level-0">
                    <li>
                        Exclusive </li>
                    <li>
                        <div class="price">
                            <p>
						<span class="curancy">
						$ </span>
                                20
                            </p>
                            <small>
                                Month </small>
                        </div>
                    </li>
                    <li class="list-detail">
                        Fast activations </li>
                    <li class="list-detail">
                        100&amp; uptime </li>
                    <li class="list-detail">
                        Branded cpanel </li>
                    <li class="list-last-detail">
                        Best support </li>
                    <li>
                        <a href="#" title="buy now">
                            Get started </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gap-btm">
                <ul class="price-table list-unstyled text-center level-0">
                    <li>
                        Elite </li>
                    <li>
                        <div class="price">
                            <p>
						<span class="curancy">
						$ </span>
                                30
                            </p>
                            <small>
                                Month </small>
                        </div>
                    </li>
                    <li class="list-detail">
                        Fast activations </li>
                    <li class="list-detail">
                        100&amp; uptime </li>
                    <li class="list-detail">
                        Branded cpanel </li>
                    <li class="list-last-detail">
                        Best support </li>
                    <li>
                        <a href="#" title="buy now">
                            Get started </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


@stop
