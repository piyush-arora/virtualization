@extends('template1')


@section('active_editor')

    active

@endsection

@section('page_title')

    Arduino Editor

@endsection

@section('page_subtitle')

    An online editor for compiling the arduino code in the cloud

@endsection

@section('content')

    <div class="box table-responsive" >
        <article>
            <script>
                CodeMirror.commands.autocomplete = function(cm) {
                    cm.showHint({hint: CodeMirror.hint.anyword});
                }

                value = "void setup()"+"\n";
                value = value + "{"+"\n";
                value = value + "\n"+ "\n" ;
                value = value + "\n";
                value = value + "}"+"\n";
                value = value + "\n" ;
                value = value + "void loop()"+"\n";
                value = value + "{"+"\n";
                value = value + "\n"+ "\n" ;
                value = value + "\n"+ "\n" ;
                value = value + "}"+"\n";


                var editor = CodeMirror(document.body.getElementsByTagName("article")[0], {
                    value: value,
                    lineNumbers: true,
                    mode: "text/x-csrc",
                    keyMap: "sublime",
                    autoCloseBrackets: true,
                    matchBrackets: true,
                    showCursorWhenSelecting: true,
                    extraKeys: {"Ctrl-Space": "autocomplete"},
                    theme: "monokai",
                    tabSize: 5
                });
            </script>

        </article>


       


@endsection

@section('button_footer')

    <div class="box-body">

        
        <a class="btn btn-app" id="compile_button_arduino" > 
            <i class="fa fa-repeat"></i> Compile
        </a>
        
        
        
        
        <div class="row">
        
            <div class="col-md-12 ">
                <div class="overlay">
                    <div class="box box-default ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compile Window</h3>
                                
                                <div class="box-tools pull-right">
                                     <i  class="fa fa-refresh fa-spin" id="loading_arduino"></i>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                        </div>
                <!-- /.box-header -->
                        <div class="box-body">
                            <div id="compiler">
                            </div>
                <!-- /.box-body -->
                       
                        </div>
            <!-- /.box -->

                    </div>

                
                </div>  
         
            </div>

        </div>
    </div>
@endsection




