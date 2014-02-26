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
            
            <div class="col-lg6 col-md-6 col-sm-6 col-xs-6 gap-btm">
                <ul class="price-table list-unstyled level-0">
                    <li> Chrome </li>
                    <li class="list-detail">
                            <a target="_blank" href="https://chrome.google.com/webstore/detail/bcennaiejdjpomgmmohhpgnjlmpcjmbg"
                            title="这个扩展让你可以通过一个工具栏按钮来恢复关闭的标签页。打开“定制工具栏”窗口，把按钮图标拖曳到工具栏的任何地方。点击按钮图标恢复最后关闭的标签页，点击下拉箭头查看最近关闭的标签页列表并选择你要恢复的标签页。">
                            Undo closed tabs</a>
                        <span style="float:right;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </li>
                    <li class="list-detail">
                        100&amp; uptime </li>
                    <li class="list-detail">
                        Branded cpanel </li>
                    <li class="list-last-detail">
                        Best support </li>
                    <li>
                      <a target="_blank" href="https://chrome.google.com/webstore/detail/holmes/gokficnebmomagijbakglkcmhdbchbhn" title="Chrome Bookmark Search Extension">
                            Holmes </a> 
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
