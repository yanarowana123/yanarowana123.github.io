
function setColor(){
    if($(this).val() ==='Не был(а)'){
        $(this).css('color','white');
        $(this).css('backgroundColor','red');
    }
    if($(this).val() ==='Был(а)'){
        $(this).css('color','white');
        $(this).css('backgroundColor','green');
    }
}

$('.select').each(
   setColor
);




$(document).on('change', '.select', function() {

    $('.select').each(
     setColor
    );

    let selected = $(this).val();
    let date = $(this).attr('date')
    let student_id= $(this).attr('student_id');
    let subject_id= $(this).attr('subject_id');

    $.ajax({
        url: '/teacher/upd',
        type: 'POST',
        data: {
            selected:selected,
            student_id:student_id,
            date:date,
            subject_id:subject_id

        },
        success: function(data) {
            console.log(data);
        },
        error: function() {
            alert('Error');

        }
    });
});










$('.student-week').on('click',function (e) {
    e.preventDefault();

    let subject_id = $(this).attr('subject_id')
    let weekstart = $(this).attr('weekstart')
    let weekend = $(this).attr('weekend')


    $.ajax({
        url:'/attendance/table',
        type:'POST',
        data:{
            subject_id:subject_id,
            weekstart:weekstart,
            weekend:weekend
        },
        success: function(data) {
            console.log(data);
            $('.table-student').html(data)
        },
        error: function() {
            alert('Error');

        }

    });
})


$(document).on('change', '#semSelect', function() {
    $('#subjectSelect').remove()
    $('#show-attendance').remove()
    let date


    if($(this).val()=='Осенний семестр'){
        date ="2019-09-01"
    }
    else if($(this).val()=='Весенний семестр'){
        date  = "2020-01-01"
    }

    $.ajax({
        url: '/teacher/showgroups',
        type: 'POST',
        data: {
            date:date,

        },
        success: function(data) {

            $('.showGroups').html(data)
        },
        error: function() {
            alert('Error')

        }
    })
})



$('.showGroups').on('change', '#groupSelect', function() {
    $('#show-attendance').remove()

    let groupId = $(this).val();
    let date

    if($('#semSelect').val()=='Осенний семестр'){
        date ="2019-09-01"
    }
    else if($('#semSelect').val()=='Весенний семестр'){
        date  = "2020-01-01"
    }


    $.ajax({
        url: '/teacher/showsubjects',
        type: 'POST',
        data: {
            date:date,
            groupId:groupId

        },
        success: function(data) {

            $('.showSubjects').html(data)
        },
        error: function() {
            alert('Error')

        }
    })
})




$('.showSubjects').on('change', '#subjectSelect', function() {
    let subjectId = $(this).val();
    let date
    let groupId =$('#groupSelect').val()


    if($('#semSelect').val()=='Осенний семестр'){
        date ="2019-09-01"
    }
    else if($('#semSelect').val()=='Весенний семестр'){
        date  = "2020-01-01"
    }
    $.ajax({
        url: '/teacher/showattendance',
        type: 'POST',
        data: {
            date:date,
            subjectId:subjectId,
            groupId:groupId

        },
        success: function(data) {

            $('#attendance').html(data)


        },
        error: function() {
            alert('Error')

        }
    })

    $('.select').each(
        setColor
    );


})






$(document).on('click','.teacher-week',function (e) {
    e.preventDefault()
    $('.select').each(
        setColor
    )
    let subjectId = $(this).attr('subject_id')
    let groupId = $(this).attr('group_id')
    let weekstart = $(this).attr('weekstart')
    let weekend = $(this).attr('weekend')

    let date = weekstart.slice(0,4)



    $.ajax({
        url:'/teacher/showattendance',
        type:'POST',
        data:{
            subjectId:subjectId,
            groupId:groupId,
            weekstart:weekstart,
            weekend:weekend,
            date:date
        },
        success: function(data) {

            $('#attendance').html(data)
        },
        error: function() {
            alert('Error');

        }

    });



})





$('.teacher-week').on('click',function (e) {

    e.preventDefault()



    $('.select').each(
        setColor
    );

    // let subject_id = $(this).attr('subject_id')
    // let group_id = $(this).attr('group_id')
    // let weekstart = $(this).attr('weekstart')
    // let weekend = $(this).attr('weekend')
    //


    // $.ajax({
    //     url:'/teacher/table',
    //     type:'POST',
    //     data:{
    //         subject_id:subject_id,
    //         group_id:group_id,
    //         weekstart:weekstart,
    //         weekend:weekend
    //     },
    //     success: function(data) {
    //
    //         $('.table-teacher').html(data)
    //     },
    //     error: function() {
    //         alert('Error');
    //
    //     }
    //
    // });
})


