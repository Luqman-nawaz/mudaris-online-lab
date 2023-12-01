$(document).ready(function() {
    var studentCount = 0;

    // Add Student
    $('.btn-add-student').click(function() {
        studentCount++;
        var studentForm = `
            <div class="student-form" id="studentForm${studentCount}">
                <h4>Student ${studentCount}</h4>
                <div class="form-group">
                    <label for="studentName${studentCount}">Name:</label>
                    <input type="text" class="form-control" id="studentName${studentCount}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="studentEmail${studentCount}">Email:</label>
                    <input type="email" class="form-control" id="studentEmail${studentCount}" placeholder="Enter Email">
                </div>
                <button type="button" class="btn btn-danger btn-remove-student" data-student="${studentCount}">Remove Student</button>
            </div>
        `;
        $('#studentContainer').append(studentForm);
    });

    // Remove Student
    $(document).on('click', '.btn-remove-student', function() {
        var studentToRemove = $(this).data('student');
        $('#studentForm' + studentToRemove).remove();
    });

    // Register Group
    $('form').submit(function(event) {
        event.preventDefault();
        var groupName = $('#groupNameInput').val();
        var courseName = $('#courseNameInput').val();
        $('#groupName').text('Group Name: ' + groupName);
        $('#courseName').text('Course Name: ' + courseName);
    });
});