$(document).ready(function() {

    /* home page nivo slider */
    $(window).load(function() {
        $('#slider').nivoSlider();
    });


    /* view items thumb */
    $('#etalage').etalage({
        thumb_image_width: 360,
        thumb_image_height: 360,
        source_image_width: 900,
        source_image_height: 900,
        show_hint: true,
        click_callback: function(image_anchor, instance_id) {
            alert('Callback example:\nYou on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'") ');
        }

    });


    /* select category */
    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }

    /* header select category */
    $(function() {
        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
            $('.wrapper-dropdown-5').removeClass('active');
        });
    });

    /* sell item select category */
    $(function() {
        var dd = new DropDown( $('#ss') );

        $(document).click(function() {
            $('.wrapper-dropdown').removeClass('active');
        });
    });
    //alert('a');

});

