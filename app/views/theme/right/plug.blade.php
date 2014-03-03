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
                    LISTS
                </h2>
            </div>
            
            
            <?php foreach ((array)$plugs as $k => $v) {?>
            <div class="col-lg4 col-md-4 col-sm-4 col-xs-12 gap-btm">
                <ul class="price-table list-unstyled level-0 ">
                    <li> {{$k}} </li>
                    <?php
                        shuffle($v);
                        foreach ((array)$v as $key => $value) { 
                            //if ($key > 8) { break; }
                    ?>
                    <li class="list-detail effect2">
                        <a target="_blank" href="{{$value['url']}}" title="{{$value['desc']}}" >{{$value['title']}}</a>
<!--                         <p>{{$value['desc']}}</p> -->
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
                      <a href="<?php echo Urls::absolute('/plug/' . $k . '/');?>" title="Webstore">
                            more </a> 
                    </li>
                </ul>
            </div>
            <?php }?>
            
        </div>
    </div>
</section>


@stop
