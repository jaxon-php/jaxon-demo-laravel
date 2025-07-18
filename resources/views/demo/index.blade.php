@include( 'demo.includes.header' )

    <div class="container-fluid">
        <div style="margin-top:50px;">
            <h3 class="page-header">{!! $pageTitle !!}</h3>
        </div>
        <div class="row">
            <div class="col-md-5 offset-md-1 col-sm-12 content">
                <div class="row">
                    <div class="col-md-12 mt-3" @jxnBind($rqAppTest)>
                        Initial content : @jxnHtml($rqAppTest)
                    </div>
                    <div class="col-5">
                        <select class="form-select" @jxnOn('change', $rqAppTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-7" @jxnBind($rqAppButtons)>
                    </div>

                    <div class="col-md-12 mt-3" @jxnBind($rqExtTest)>
                        Initial content : @jxnHtml($rqExtTest)
                    </div>
                    <div class="col-5">
                        <select class="form-select" @jxnOn('change', $rqExtTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-7" @jxnBind($rqExtButtons)>
                    </div>
                </div>
            </div> <!-- class="content" -->

            <div class="col-md-5 col-sm-12 calculator">
                <div class="mt-3">Calculator</div>

                <div>
                    {!! $calcPackage->getHtml() !!}
                </div>
            </div>
        </div> <!-- class="row" -->
    </div>

    <script type='text/javascript'>
        /* <![CDATA[ */
        window.onload = function() {
            {!! $rqAppTest->sayHello(false) !!};
            {!! $rqExtTest->sayHello(false) !!};
        }
        /* ]]> */
    </script>

@include( 'demo.includes.footer' )
