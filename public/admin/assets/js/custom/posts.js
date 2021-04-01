(function($){
    $(document).ready(function(){

        // CK Editor load
        CKEDITOR.replace('text_area');

        // Select 2 load
        $('.tag_selector').select2();

        // Preload  Image
        $(document).on('change', '#upload_image', function(e){
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('.preload_image').attr('src', file_url);
        });










        // Preload Gallery
        $(document).on('change', '#upload_gallery', function(e){

            let gallery = '';

            for( let i=0; i < e.target.files.length; i++ ){

                let file_url = URL.createObjectURL(e.target.files[i]);
                gallery += '<img style="width:200px; margin-right:5px" src="'+ file_url +'">';

            }
            $('.preload').html(gallery);







        });




























        // Post Inpout
        $(document).on('click', 'input[type="radio"]', function(e){
            let radioVal = $('input[name="radio"]:checked').val();

            // Image
            if(radioVal == 'Image'){
                $('#upload_image').show();
            }else{
                $('#upload_image').hide();
            }

            // Gallery
            if(radioVal == 'Gallery'){
                $('#upload_gallery').show();
            }else{
                $('#upload_gallery').hide();
            }

            // Video
            if(radioVal == 'Video'){
                $('#upload_video').show();
            }else{
                $('#upload_video').hide();
            }

            // Audio
            if(radioVal == 'Audio'){
                $('#upload_audio').show();
            }else{
                $('#upload_audio').hide();
            }


        });


















    });
})(jQuery)
