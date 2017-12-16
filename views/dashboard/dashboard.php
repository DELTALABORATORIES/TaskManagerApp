<?php
    $model = new \app\models\noteData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel='stylesheet prefetch'
          href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
    <script src="vendor/ckeditor-full/ckeditor.js"></script>

</head>

<body>


<!--Sidebar Menu-->

<div class=" menubar-container">
    <div style="width: 100%;margin-top: 20px;">
        <img src="../../images/MainLogo.png" style="width:60%;">
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
    <div style="width: 100%; position: relative; bottom: 20px;">
        <img src="../../images/MainLogo.png" style="width:60%;">
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
                <?php $model->getNoteCount() ?> Notes
            </p>
        </div>
        <?php $model->getNotes(); ?>
    </div>


    </div>

</div>

<div class="note-editor-container">
    <div class="note-information">
        <p class="note-name" id="noteName">
            Note Name
        </p>
    </div>
    <form>
            <textarea name="note-editor" id="note-editor">
                <p id="noteContent">New Note</p>
            </textarea>
    </form>
</div>

<script>
    CKEDITOR.replace('note-editor', {
        language: 'fr',
        uiColor: '#FFFFFF'
    });
</script>
<script src="https://use.fontawesome.com/5c3c4c27b7.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/mainController.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs",
        authDomain: "task-manager-6ee5b.firebaseapp.com",
        databaseURL: "https://task-manager-6ee5b.firebaseio.com",
        projectId: "task-manager-6ee5b",
        storageBucket: "task-manager-6ee5b.appspot.com",
        messagingSenderId: "565187626861"
    };
    firebase.initializeApp(config);
</script>
<script>
    $('.task-check').bind('click' , function () {
        //get id and status of the task
        var id = $(this).attr('id');
        var status = $(this).attr('data-status');
        $.ajax({url: "/change/status/"+ id + "/" + status,
            success: function(data){
            //change image and status
            if (status == 1){
                $('#'+id).attr('src' , '../../images/CheckSigns/checked_black.svg');
                $('#'+id).attr('data-status' , 0);
            }
            else if(status == 0){
                $('#'+id).attr('src' , '../../images/CheckSigns/checked_purple.svg');
                $('#'+id).attr('data-status' , 1);
            }
            }});
    });

    $('.task').bind('click', function (data) {
        var id = $(this).attr('data-id');
        $.ajax({url: "/note/dump/"+ id ,
            success: function(data){
                var noteData = data.split('|');
                $('#noteName').html(noteData[0]);
                CKEDITOR.instances['note-editor'].setData(noteData[1]);
            }
        });
    });

    CKEDITOR.instances['note-editor'].on('change', function() {
        $.ajax({url: "savechanges/save",
            type: "POST",
            data:{
                note_content: 'Hello'
            },
            dataType: "json",
            contentType: "application/json",
            success: function(data){
                // alert(data);
            }
        });
    });
</script>

</body>
</html>