@include( 'demo.includes.header' )

    <div class="container-fluid">
        <div class="row" style="margin-top:30px;">
@include( 'demo.includes.nav' )
            <div class="col-sm-9 content">
                <h3 class="page-header">{!! $pageTitle !!}</h3>

                <div class="row" id="jaxon-html">
                        <div class="col-md-12" id="div1">
                            &nbsp;
                        </div>
                        <div class="col-md-4 margin-vert-10">
                            <select class="form-control" id="colorselect1" name="colorselect1"
                                    onchange="{!! $pgw->setColor($pm->select('colorselect1')) !!}; return false;">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="col-md-8 margin-vert-10">
                            <button type="button" class="btn btn-primary" onclick='{!! $pgw->sayHello(1) !!}; return false;' >CLICK ME</button>
                            <button type="button" class="btn btn-primary" onclick='{!! $pgw->sayHello(0) !!}; return false;' >Click Me</button>
                            <button type="button" class="btn btn-primary" onclick="{!! $pgw->showDialog() !!}; return false;" >PgwModal Dialog</button>
                        </div>

                        <div class="col-md-12" id="div2">
                            &nbsp;
                        </div>
                        <div class="col-md-4 margin-vert-10">
                            <select class="form-control" id="colorselect2" name="colorselect2"
                                    onchange="{!! $bts->setColor($pm->select('colorselect2')) !!}; return false;">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="col-md-8 margin-vert-10">
                            <button type="button" class="btn btn-primary" onclick="{!! $bts->sayHello(1) !!}; return false;" >CLICK ME</button>
                            <button type="button" class="btn btn-primary" onclick="{!! $bts->sayHello(0) !!}; return false;" >Click Me</button>
                            <button type="button" class="btn btn-primary" onclick="{!! $bts->showDialog() !!}; return false;" >Bootstrap Dialog</button>
                        </div>

                </div>
            </div> <!-- class="content" -->
       </div> <!-- class="row" -->
    </div>
<div id="jaxon-init">
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        // call the helloWorld function to populate the div on load
        {!! $pgw->sayHello(0) !!};
        // call the setColor function on load
        {!! $pgw->setColor($pm->select('colorselect1')) !!};
        // Call the HelloWorld class to populate the 2nd div
        {!! $bts->sayHello(0) !!};
        // call the HelloWorld->setColor() method on load
        {!! $bts->setColor($pm->select('colorselect2')) !!};
    }
    /* ]]> */
</script>
</div>

@include( 'demo.includes.footer', compact('jaxonJs', 'jaxonScript', 'jaxonCss') )
