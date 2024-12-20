@include( 'demo.includes.header' )

    <div class="container-fluid">
        <div class="row" style="margin-top:30px;">
@include( 'demo.includes.nav' )
            <div class="col-sm-9 content">
                <h3 class="page-header">{!! $pageTitle !!}</h3>
                <div class="row">
                    <div class="col-md-12" @jxnBind($appTest)>
                        Initial content : @jxnHtml($appTest)
                    </div>
                    <div class="col-md-4 margin-vert-10">
                        <select class="form-control" @jxnOn('change', $appTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-8 margin-vert-10" @jxnBind($rqAppButtons)>
                    </div>

                    <div class="col-md-12" @jxnBind($extTest)>
                        Initial content : @jxnHtml($extTest)
                    </div>
                    <div class="col-md-4 margin-vert-10">
                        <select class="form-control" @jxnOn('change', $extTest->setColor(jq()->val()))>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-8 margin-vert-10" @jxnBind($rqExtButtons)>
                    </div>
                </div>
            </div> <!-- class="content" -->
       </div> <!-- class="row" -->
    </div>
<div id="jaxon-init">
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        {!! $appTest->sayHello(false) !!};
        {!! $extTest->sayHello(false) !!};
    }
    /* ]]> */
</script>
</div>

@include( 'demo.includes.footer' )
