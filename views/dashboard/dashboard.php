<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
    <script src="vendor/ckeditor-full/ckeditor.js"></script>
</head>

<body>

    <!--Sidebar Menu-->

    <div class=" menubar-container">
        <div style="width: 100%;margin-top: 20px;">
           <img src="http://iconshow.me/media/images/System/plex-icons/png/System/512/task-manager.png" style="width:60%;">
        </div>
        <div style="width: 100%;margin-top: 60px;">
            <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
        </div>
        <div style="width: 100%;margin-top: 20px;">
            <i class="fa fa-calendar-plus-o fa-2x" aria-hidden="true"></i>
        </div>
        <div style="width: 100%;margin-top: 20px;">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </div>
        <div style="width: 100%;margin-top: 20px;">
            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
        </div>
        <div style="width: 100%;margin-top: 20px;">
            <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
        </div>
        <div style="width: 100%;margin-top: 20px;">
            <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
        </div>
    </div>

    <!--Notes Preview-->

    <div class="task-container-main">
        <div class="task-container">
            <div class="notes">
                <p class="notes-text">
                    Notes
                </p>
                <p class="notes-count">
                   24 Notes
                </p>
            </div>

            <div class="task">
                <div>
                    <p class="task-name">
                        Task Name
                    </p>
                    <p class="task-date">
                        23/23/2323
                    </p>
                </div>
                <div>
                    <p class="task-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate purus in nisi fringilla, quis feugiat tortor tempus. Cr
                    </p>
                </div>
            </div>
            <div class="task">
                <div>
                    <p class="task-name">
                        Task Name
                    </p>
                    <p class="task-date">
                        23/23/2323
                    </p>
                </div>
                <div>
                    <p class="task-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate purus in nisi fringilla, quis feugiat tortor tempus. Cr
                    </p>
                </div>
            </div>
            <div class="task">
                <div>
                    <p class="task-name">
                        Task Name
                    </p>
                    <p class="task-date">
                        23/23/2323
                    </p>
                </div>
                <div>
                    <p class="task-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate purus in nisi fringilla, quis feugiat tortor tempus. Cr
                    </p>
                </div>
            </div>
            <div class="task">
                <div>
                    <p class="task-name">
                        Task Name
                    </p>
                    <p class="task-date">
                        23/23/2323
                    </p>
                </div>
                <div>
                    <p class="task-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate purus in nisi fringilla, quis feugiat tortor tempus. Cr
                    </p>
                </div>
            </div>
            <div class="task">
                <div>
                    <p class="task-name">
                        Task Name
                    </p>
                    <p class="task-date">
                        23/23/2323
                    </p>
                </div>
                <div>
                    <p class="task-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate purus in nisi fringilla, quis feugiat tortor tempus. Cr
                    </p>
                </div>
            </div>


        </div>

    </div>

    <div class="note-editor-container">
        <div class="note-information">
             <p class="note-name">
                 Note Name
             </p>
        </div>
        <form>
            <textarea name="note-editor" id="note-editor" >
                New Note
            </textarea>
        </form>
    </div>

    <script>
        CKEDITOR.replace( 'note-editor', {
            language: 'fr',
            uiColor: '#FFFFFF'
        });
    </script>
<script src="https://use.fontawesome.com/5c3c4c27b7.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/mainController.js"></script>
</body>
</html>