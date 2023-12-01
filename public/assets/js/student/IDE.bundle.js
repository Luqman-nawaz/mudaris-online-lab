
function compileCode() {
    var code = $('#codeInput').val();

    // Make an API call to the Compiler Explorer service
    // Replace 'https://godbolt.org/api/compiler/<compiler_id>/compile' with the appropriate Compiler Explorer API endpoint
    $.ajax({
        url: 'https://godbolt.org/api/compiler/<compiler_id>/compile',
        type: 'POST',
        data: JSON.stringify({ code: code }),
        contentType: 'application/json',
        success: function (response) {
            // Extract the compiled output from the response
            var output = response.stdout || response.asm;

            // Display the output in the output container
            $('#output').text(output);
        },
        error: function () {
            alert('An error occurred while compiling the code.');
        }
    });
}
