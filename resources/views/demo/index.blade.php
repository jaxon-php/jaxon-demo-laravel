@include( 'demo.includes.header' )

    <div class="container-fluid">
        <div class="row" style="margin-top:50px;">
            <div class="col-sm-9 content">
                <h3 class="page-header">{!! $pageTitle !!}</h3>
                <div class="row">
                    <div class="col-md-12 mt-3" @jxnBind($rqAppTest)>
                        Initial content : @jxnHtml($rqAppTest)
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" @jxnOn('change', $rqAppTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-9" @jxnBind($rqAppButtons)>
                    </div>

                    <div class="col-md-12 mt-3" @jxnBind($rqExtTest)>
                        Initial content : @jxnHtml($rqExtTest)
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" @jxnOn('change', $rqExtTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-9" @jxnBind($rqExtButtons)>
                    </div>
                </div>
            </div> <!-- class="content" -->
        </div> <!-- class="row" -->

        <div class="row" style="margin-top:50px;">
            <div class="col-md-12">
                <h4>Calculator</h4>
            </div>
            <div class="col-md-4">
                {!! $calcPackage->getHtml() !!}
            </div>
        </div> <!-- class="row" -->
    </div>
<div id="jaxon-init">
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        {!! $rqAppTest->sayHello(false) !!};
        {!! $rqExtTest->sayHello(false) !!};
    }
    /* ]]> */
</script>
</div>

@include( 'demo.includes.footer' )
