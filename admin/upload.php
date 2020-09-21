<?php
session_start();

if (!isset($_SESSION['role'])) {
    //die("Restricted area. Sorry");
}
    
    if(isset($_FILES["image_upload"]["name"])){
        $name = $_FILES["image_upload"]["name"];
        $size = $_FILES["image_upload"]["size"];
        $ext  = @end(explode(".", $name));
        $allowed_ext = array("png","jpg","gif","jpeg","JPG","PNG","GIF");

        if(in_array($ext, $allowed_ext)){
            if($size < (1600 * 1200)){

                $new_image = '';
                $new_name = md5(rand()).".".$ext;
                $path = '../images/products/'.$new_name;
                list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
                   
                if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $path)) {
               
                       
                    echo "
                        <script>
                            var \$toastContent = \$('<span> Image Uploaded Successfully.</span>').add(\$('<i class=\"fa fa-check green-text\"></i></button>'));
                            Materialize.toast(\$toastContent, 4000);
                            \$(\"#upload-submit\").addClass(\"hide\");
                            \$('#prog').addClass('hide');
                            \$('#pic').val(\"$new_name\");

                         </script>
                    ";die();
                   

                }else{
                    echo "
                        <script>
                            \$(\"#upload-submit\").html(\"<i class='fa fa-exclamation-triangle red-txt'></i> Error while uploading! <i class='fa fa-rotate-left green-txt'></i> Try Again.\");
                            \$(\"#upload-submit\").removeClass('lose-focus');
                            \$('.dpic').removeClass('lose-focus');
                        </script>
                    ";
                }
                 
            }else{
                echo "
                    <script>
                        \$(\"#upload-submit\").html(\"<i class='fa fa-exclamation-triangle red-txt'></i> Image too big. Select another. <i class='fa fa-rotate-left green-txt'></i> Try Again.\");
                        \$(\"#upload-submit\").removeClass('lose-focus');
                        \$('.dpic').removeClass('lose-focus');
                    </script>
                ";
             }
        }else{
            echo "
                <script>
                    \$(\"#upload-submit\").html(\"<i class='fa fa-exclamation-triangle red-txt'></i> Invalid image, please try a jpg, gif or png image!. <i class='fa fa-rotate-left green-txt'></i> Try Again.\");
                    \$(\"#upload-submit\").removeClass(\"lose-focus\");
                    \$('.dpic').removeClass('lose-focus');
                    
                </script>
            ";
        }
        
    }else{
        echo "
            <script>
                \$(\"#upload-submit\").html(\"<i class='fa fa-exclamation-triangle red-txt'></i> Select an image!. <i class='fa fa-rotate-left green-txt'></i> Try Again.\");
                \$(\"#upload-submit\").removeClass(\"lose-focus\");
                \$('.dpic').removeClass('lose-focus');
            </script>
        ";
    }



?> 