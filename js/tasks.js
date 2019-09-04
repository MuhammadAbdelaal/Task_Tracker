$(function(){
    // define variale
    var activeTask = 0;
    
    // load tasks on page load: Ajax call to loadtasks.php
    $.ajax({
        url: "loadtasks.php",
        success: function(data){
            $('#todoBody').html(data);
            clickonTask(); clickonDelete();

        },
        error: function(){
            $('#alertContent').text('There was an error with the Ajax call, please try again!');
            $('#alert').fadeIn();
        }
    });
    
    // create a new task: Ajax call to createtask.php
    $('#addTask').click(function(){
        $.ajax({
            url: "createtask.php",
            success: function(data){
                if(data == 'error'){
                    $('#alertContent').text('There was an issue inserting the new task in the database!');
                    $('#alert').fadeIn();
                }else{
                    // update activeTaks variable
                    activeTask = data;
                    $('#addtask-textarea').val("");
                    
                    // show hide elements
                    showHide(["#textarea-container"],['#todoBody']);
                    $('#addtask-textarea').focus();
                }
            },
            error: function(){
                $('#alertContent').text('There was an error with the Ajax call, please try again!');
                $('#alert').fadeIn();
            }
        });
    });
    
    // typing a task: Ajax call to updatetask.php
    $('#addtask-textarea').keyup(function(){
        
        // ajax call to update the task
        $.ajax({
            url: "updatetask.php",
            type: "POST",
            // we need to send the current task content with it's id to updatetask.php file
            data: {task: $(this).val(), id:activeTask},
            success: function (data){
                // the below for testing not for production because in the slow internet connection
                // it shows the error in unexpected way
                // $('#alertContent').text("There was an issue updating the task in the database!.");
                // $("#alert").fadeIn();
            },
            error: function(){
                $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                        $("#alert").fadeIn();
            }

        });
    });

    // click on save button
    $("#save").click(function(){
        $.ajax({
            url: "loadtasks.php",
            success: function (data){
                $('#todoBody').html(data);
                // show hide elements
                showHide(["#todoBody"],['#textarea-container']);
                clickonTask(); clickonDelete();
            },
            error: function(){
                $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                        $("#alert").fadeIn();
            }

        });
    
    });

    // functions
        
    //click on a task
        function clickonTask(){
            $(".list-group-item").click(function(event){
                event.stopPropagation();
                //update activeTask variable to id of task
                activeTask = $(this).attr("id");

                //fill text area
                $("textarea").val($(this).find('.text').text());
                //show hide elements
                showHide(['#textarea-container'],["#todoBody"]);
                $("textarea").focus();
                
            
        });
    }
        // clicking on delete button
        function clickonDelete(){
            $(".delete-task").click(function(event){
                event.stopPropagation();
                var deleteButton = $(this);
                //send ajax call to delete task
                $.ajax({
                    url: "deletetask.php",
                    type: "POST",
                    //we need to send the id of the task to be deleted
                    data: {id: deleteButton.parent().attr("id")},
                    success: function (data){
                        if(data == 'error'){
                            $('#alertContent').text("There was an issue delete the task from the database!");
                            $("#alert").fadeIn();
                        }else{
                            //remove containing div
                            deleteButton.parent().remove();
                        }
                    },
                    error: function(){
                        $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                                $("#alert").fadeIn();
                    }
    
                });
                
            });
            
        }
        
        // showHide function
        function showHide(array1, array2){
            for(i=0; i<array1.length; i++){
                $(array1[i]).show();   
            }
            for(i=0; i<array2.length; i++){
                $(array2[i]).hide();   
            }
        };


});