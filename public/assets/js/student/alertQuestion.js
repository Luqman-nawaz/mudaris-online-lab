$(document).ready(function() {
    var questionIndex = 0;
    var questions = [
      "Are you sure you want to proceed?",
      "Do you want to save the changes?",
      "Are you ready to submit the form?"
      // Add more questions here
    ];
  
    var interval = setInterval(function() {
      if (questionIndex >= questions.length) {
        clearInterval(interval);
        return;
      }
  
      showQuestion(questions[questionIndex]);
      questionIndex++;
    }, 5000); // Change the time interval between questions (in milliseconds) as desired
  
    function showQuestion(question) {
      var questionContainer = $('<div class="question"></div>');
      var questionText = $('<p class="question-text">' + question + '</p>');
      var buttons = $('<div class="buttons"><button class="btn btn-yes">Yes</button><button class="btn btn-no">No</button></div>');
  
      questionContainer.append(questionText);
      questionContainer.append(buttons);
      $('.container').empty().append(questionContainer);
    }
  
    $(document).on('click', '.btn-yes', function() {
      alert('You clicked Yes!');
    });
  
    $(document).on('click', '.btn-no', function() {
      alert('You clicked No!');
    });
  });