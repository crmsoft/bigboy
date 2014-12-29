var suppoertedEls = {
    txtInput : "paper-input-decorator",
    tglInput : "paper-toggle-button",
    slcInput : "select"
}

var NewEl = function () {

    // private functions & variables

    var el = null, request;
    // public functions
    return {

        //main function
        init: function ( tag ) {
            request = tag;
            switch (tag){
                case suppoertedEls.txtInput : {
                                                    el = document.createElement( tag );
                                                    el.setAttribute('error','input is required!');
                                                    var child = document.createElement('input');
                                                        child.setAttribute('is', 'core-input');
                                                    el.appendChild( child );
                                                    break;
                                                }
                case suppoertedEls.tglInput : {
                                                    el = document.createElement( 'div' );
                                                    el.setAttribute('left','');
                                                    el.setAttribute('horizontal','');
                                                    el.setAttribute('layout','');
                                                    el.className = 'radio-btn';

                                                var chTitle = document.createElement('div');
                                                    chTitle.innerHTML = 'STATUS';
                                                    chTitle.setAttribute('flex','');

                                                    el.appendChild( chTitle );

                                                var child = document.createElement( tag );
                                                    child.className = 'green';
                                                    child.checked = true;

                                                    el.appendChild( child );

                                                    break;
                }
                case suppoertedEls.slcInput:{

                        el = document.createElement(tag);

                    break;
                    }
                default : el = document.createElement( 'div' );
            }
        },

        setFieldName:function( name ){
            if( request === suppoertedEls.tglInput ){
                el.querySelector( request ).setAttribute( 'name', name );
            }else{
                el.setAttribute( 'name', name );
            }
        },

        setDefaultVal: function( data ){

            switch( request ){
                case suppoertedEls.txtInput : {
                    var target = el.querySelector('input');
                        target.value = data;
                    break;
                }
                case suppoertedEls.tglInput : {
                    var target = el.querySelector( request );
                        target.checked = data;
                    break;
                }
                case suppoertedEls.slcInput : {

                    if( data instanceof Array){
                        for( var i = 0; i < data.length; i++ ) {
                            var opt = document.createElement('option');

                            opt.value = i;
                            opt.text = data[i];

                            el.appendChild(opt);
                        }
                    }else if( data instanceof Object){
                        var that = el;
                        if( data.table && data.fields ){
                            $.ajax({
                                url: '/imports/wwww/big-boy/public/rest/post/table',
                                method: 'POST',
                                data:{ "table":data.table, "fields": data.fields  }
                            })
                                .success(function( res ){
                                    if( res.error ){
                                        console.log( res.error );
                                    }else{
                                        res = JSON.parse( res );
                                        this.fillSelect( that, res, data.fields );
                                    }
                                }.bind(this))
                                .error(function(r,e){
                                 console.dir( r,e );
                            });
                        }else{
                            console.log( 'Not a valid options for select input.' );
                        }
                    }
                    break;
                }
            }

        },

        fillSelect: function( parent, data, fields ){
            for( var i = 0; i < data.length; i++ ) {
                var opt = document.createElement('option');

                opt.value = data[i][fields[1]];
                opt.text = data[i][fields[0]];

                parent.appendChild(opt);
            }
        },

        setLabel: function( lbl ){

            if( !lbl )
                return;

            if( request === suppoertedEls.txtInput ) {
                el.label = lbl;
            }

            if( request === suppoertedEls.tglInput ) {
                el.querySelector('div').innerHTML = lbl;
            }

            if( request === suppoertedEls.slcInput ){
                var opt = document.createElement( 'option' );
                opt.text = lbl;
                el.appendChild( opt );
            }
        },

        setRequired: function(){
          var r = el.querySelector('input');
            if( r ){
                r.setAttribute('required','');
            }
        },
        
        getElement: function(){
            return el;
        }

    };

}();

/***
Usage
***/
//Custom.init();
//Custom.doSomeStuff();